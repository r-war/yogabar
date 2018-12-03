<?php
session_start();
require_once realpath(__DIR__ . '/..') . "/configs/db/Db.class.php";
require_once realpath(__DIR__ . '/..') . "/configs/vendor/autoload.php";
$db = new Db();
$mode = $_POST['mode'];
$result['error'] = 0;
if (isset($_SESSION['UID'])) {
    if ($_SESSION['UID'] != "") {
        $sesUID = $_SESSION['UID'];
        $sesEmail = $_SESSION['UEMAIL'];
    } else {
        echo 0;
        exit;
    }
} else {
    echo 0;
    exit;
}
if ($mode == 'sub') {

    $tblrow = trim($_POST['tblrow']);
    $cardDt = $_POST['cardDt'];

    if ($tblrow != "" && $cardDt != "") {$Ndt = date('Y-m-d H:i:s');

        $chkCardDetalToken = $db->query("SELECT count(tk_id) AS tCnts,token_key,customer_stripe_id,tk_id FROM user_card_token WHERE user_id=:user_id AND tk_id=:tk_id AND NOT token_key=:token_key AND NOT customer_stripe_id=:customer_stripe_id ", array("user_id" => "$sesUID", "tk_id" => "$cardDt", "token_key" => "", "customer_stripe_id" => ""));

        if ($chkCardDetalToken[0]['tCnts'] > 0) {

            $ChkOntimeorEMI = $db->query("SELECT count(id) As planTypeCnt,pak_Intervel_id,pak_total_month,active FROM packages WHERE  id=:plan_id AND NOT stripe_plan_id=:stripe_plan_id", array("plan_id" => "$tblrow", "stripe_plan_id" => ""));

            if ($ChkOntimeorEMI[0]['planTypeCnt'] > 0) /** check valid token **/ {
                $active = $ChkOntimeorEMI[0]['active'];
                if ($active == 0) {
                    echo '1#$#This plan is inactive';
                    exit;
                }

                $pak_Intervel_id = $ChkOntimeorEMI[0]['pak_Intervel_id'];
                $pak_total_month = $ChkOntimeorEMI[0]['pak_total_month'];
            } else {

                echo '1#$#Invalid plan';
                exit;
            }

        } else {
            echo '1#$#Invalid token';
            exit;
        }

        if ($pak_Intervel_id == 1) /** Subscription Plan start  **/ {

            $ChkPlanExistUser = $db->query("SELECT count(pay_id) As               PlanCnt,user_id,token_id,plan_id,res_paid,res_id,res_result,
    invoice_id,price,res_subcri_result,res_subcri_id,un_subscrib FROM user_pay_pack_subscribe WHERE user_id=:user_id AND plan_id=:plan_id AND un_subscrib=:un_subscrib ", array("user_id" => "$sesUID", "plan_id" => "$tblrow", "un_subscrib" => "0"));

            $planPaymentProcess = 0;

            if ($ChkPlanExistUser[0]['PlanCnt'] > 0) {

                $ChkUnsubPlanExistUser = $db->query("SELECT count(pay_id) As              PlanUnCnt,user_id,token_id,plan_id,res_paid,res_id,res_result,
    invoice_id,price,res_subcri_result,res_subcri_id,un_subscrib FROM user_pay_pack_subscribe WHERE user_id=:user_id AND plan_id=:plan_id AND un_subscrib=:un_subscrib ", array("user_id" => "$sesUID", "plan_id" => "$tblrow", "un_subscrib" => "0"));

            } elseif ($ChkPlanExistUser[0]['PlanCnt'] == 0) {
                $planPaymentProcess = 1;
            } else {
                echo "1#$#Plan alredy exists";
                exit;
            }

            if ($planPaymentProcess == 1) /** check alredy subscribe or not **/ {

                $customer_stripe_id = $chkCardDetalToken[0]['customer_stripe_id'];
                $tk_id = $chkCardDetalToken[0]['tk_id'];
                $token_key = $chkCardDetalToken[0]['token_key'];

                $GetPackage = $db->query("SELECT count(id) As valC,stripe_plan_id,price,id,active FROM packages WHERE active=:active AND id=:id AND NOT stripe_plan_id=:stripe_plan_id AND price > :price", array("active" => "1", "id" => "$tblrow", "stripe_plan_id" => "", "price" => "0"));
                if ($GetPackage[0]['valC'] == 0) /** check package valid or not **/ {
                    echo "1#$#Invalid Package";
                    exit;
                }

                $stripe_plan_id = $GetPackage[0]['stripe_plan_id'];

                $price = ($GetPackage[0]['price'] * 100);
                $orgPrice = $GetPackage[0]['price'];

                $inVoiceId = $sesUID . time();
                $pack_id = $GetPackage[0]['id'];

                $description = json_encode(array("CustomInvoice" => "$inVoiceId", "UserId" => "$sesUID", "plan" => "$stripe_plan_id", "package_id" => "$pack_id", "price" => "$orgPrice", "CustomerId" => "$customer_stripe_id", "tblTkId" => "$tk_id"));
                $PaymentResult = "";
                $paidResponse = "";
                $chkkey = $db->query("SELECT s_key,p_key FROM packages_key");
                $keyVals = $chkkey[0]['s_key'];
                \Stripe\Stripe::setApiKey($keyVals);
                /* try{

                $Charge = \Stripe\Charge::create(array(
                "amount" => "$price" ,
                "currency" => "SGD",
                "customer" => "$customer_stripe_id",
                'description'=>"$description",
                'receipt_email'=>"$sesEmail",
                ));
                $paidResponse=$Charge->paid;
                $PaymentResult=$Charge->status;
                $res_id=$Charge->id;

                if($paidResponse==1 && $PaymentResult=="succeeded" && $res_id !="" )
                {
                $curDt=date("Y-m-d H:i:s");
                $insertPack=$db->query("INSERT INTO user_pay_pack_subscribe          (user_id,plan_id,token_id,describ,invoice_id,res_result,res_paid,res_id,price,pak_Intervel_id,pak_total_month,created_at,plan_name,plan_price)
                VALUES(:user_id,:plan_id,:token_id,:describ,:invoice_id,:res_result,:res_paid,:res_id,:price,:pak_Intervel_id,:pak_total_month,:created_at,:plan_name,:plan_price) ",
                array("user_id"=>"$sesUID",
                "plan_id"=>"$pack_id","token_id"=>"$tk_id",
                "describ"=>"$description","invoice_id"=>"$inVoiceId",
                "res_result"=>"$PaymentResult","res_paid"=>"$paidResponse",
                "res_id"=>"$res_id","price"=>"$orgPrice","pak_Intervel_id"=>"$pak_Intervel_id","pak_total_month"=>"$pak_total_month","created_at"=>"$curDt","plan_name"=>"$stripe_plan_id","plan_price"=>"$orgPrice"));

                }
                else
                {
                echo "1#$#Payment failed try again";
                exit;
                }

                }
                catch(Exception $e)
                {
                echo "1#$#".$e->getMessage();
                exit();
                }

                 */

                /*********************** Create a Subscription start *********************************/
                if (1) {
                    try {

                        $customer_Subscription = \Stripe\Subscription::create(array(
                            "customer" => "$customer_stripe_id",
                            "plan" => "$stripe_plan_id"));
                        if ($customer_Subscription->status == 'active' && $customer_Subscription->id != "") {

                            $curDt = date("Y-m-d H:i:s");

                            $ResSub_id = $customer_Subscription->id;
                            $avtiv = $customer_Subscription->status;
                            $insertPack = $db->query("INSERT INTO user_pay_pack_subscribe      (user_id,plan_id,token_id,describ,invoice_id,res_result,res_paid,res_id,price,pak_Intervel_id,pak_total_month,created_at,plan_name,plan_price,res_subcri_result,res_subcri_id)
                            VALUES(:user_id,:plan_id,:token_id,:describ,:invoice_id,:res_result,:res_paid,:res_id,:price,:pak_Intervel_id,:pak_total_month,:created_at,:plan_name,:plan_price,:res_subcri_result,:res_subcri_id) ",
                                array("user_id" => "$sesUID",
                                    "plan_id" => "$pack_id", "token_id" => "$tk_id",
                                    "describ" => "$description", "invoice_id" => "$inVoiceId",
                                    "res_result" => "succeeded", "res_paid" => "1",
                                    "res_id" => "$ResSub_id", "price" => "$orgPrice", "pak_Intervel_id" => "$pak_Intervel_id", "pak_total_month" => "$pak_total_month", "created_at" => "$curDt", "plan_name" => "$stripe_plan_id", "plan_price" => "$orgPrice", "res_subcri_result" => "$avtiv", "res_subcri_id" => "$ResSub_id"));

                            echo "3#$#Subscription activated successfully";
                            exit();

                        } else {

                            echo "1#$#Faild on package subscription";
                            exit();

                        }

                    } catch (Exception $k) {

                        echo "4#$#" . $k->getMessage();
                        exit();

                    }

                } else {
                    echo "1#$#Payment failed try again";
                    exit();

                }
            /************************** Create a Subscription end ************************************/

            } else {

                echo "1#$#already subscribed";
                exit;
            }

        } elseif ($pak_Intervel_id == 2) /** One time Plan  **/ {
            $customer_stripe_id = $chkCardDetalToken[0]['customer_stripe_id'];
            $tk_id = $chkCardDetalToken[0]['tk_id'];
            $token_key = $chkCardDetalToken[0]['token_key'];
            $disFinalPrice = 0;
            $discountCalculatPrice = 0;
            $dis_type_id = 0;
            $discount_actual = 0;
            $discount_code = "";
            $discount_applied = 0;

            //echo $customer_stripe_id;exit;

            $GetPackage = $db->query("SELECT count(id) As valC,stripe_plan_id,price,id,active FROM packages WHERE active=:active AND id=:id AND NOT stripe_plan_id=:stripe_plan_id AND price > :price", array("active" => "1", "id" => "$tblrow", "stripe_plan_id" => "", "price" => "0"));
            if ($GetPackage[0]['valC'] == 0) /** check package valid or not **/ {
                echo "1#$#Invalid Package";
                exit;
            }
            if ($_POST['chkDis'] == 1) {
                if ($_POST['cCodechk'] == "") {
                    echo "1#$#Discount failed try again";
                    exit;
                }

                $couponVal = trim($_POST['cCodechk']);

                $chkCouponValid = $db->query("SELECT count(id) as Cnt,id,code,dis_type_id,discount,coupon_from,coupon_to,active FROM coupon  WHERE    curdate()  BETWEEN coupon_from AND coupon_to  AND code='" . $couponVal . "' AND discount >0 AND active=1");
                if ($chkCouponValid[0]['Cnt'] > 0) {
                    if ($chkCouponValid[0]['active'] == 1) {

                        $ChkvalidforUser = $db->query("SELECT count(pay_id) as UCnt FROM user_pay_pack_subscribe WHERE discount_applied=1 AND user_id=$sesUID "); //user eligible for discount means already exists
                        if ($ChkvalidforUser[0]['UCnt'] == 0) {

                            $discountAmt = $chkCouponValid[0]['discount'];
                            $orgPrice = $GetPackage[0]['price'];
                            if ($chkCouponValid[0]['dis_type_id'] == 1) //calculate discount price by %
                            {

                                $getDisPrst = round(($orgPrice * $discountAmt / 100));
                                $discountCalculatPrice = $getDisPrst;

                                $disFinalPrice = ($orgPrice - $getDisPrst);
                                if ($disFinalPrice > 0) //&& $disFinalPrice < $orgPrice
                                {

                                    $price = ($disFinalPrice * 100);
                                    //$disFinalPrice=0;
                                    $dis_type_id = $chkCouponValid[0]['dis_type_id'];
                                    $discount_actual = $discountAmt;
                                    $discount_code = $couponVal;
                                    $discount_applied = 1;
                                    // echo "2#$#".$disFinalPrice;
                                    // exit;
                                } else {
                                    echo "1#$#Invalid discount price";
                                    exit;
                                }

                            } elseif ($chkCouponValid[0]['dis_type_id'] == 2) //calculate discount price by doller
                            {
                                $getDisPrst = round(($orgPrice - $discountAmt));
                                $discountCalculatPrice = $discountAmt;
                                if ($getDisPrst > 0) {
                                    $price = ($getDisPrst * 100);
                                    $disFinalPrice = $getDisPrst;
                                    $dis_type_id = $chkCouponValid[0]['dis_type_id'];
                                    $discount_actual = $discountAmt;
                                    $discount_code = $couponVal;
                                    $discount_applied = 1;
                                    // echo "2#$#".$getDisPrst;

                                } else {
                                    echo "1#$#Invalid discount price";
                                    exit;
                                }

                            } else {

                                echo "1#$#Invalid discount price";
                                exit;

                            }

                        } else {

                            echo "1#$#You have already used this coupon";
                            exit;
                        }

                        if ($price > 0) {

                        } else {
                            echo "1#$#Invalid price. please try again";
                            exit;

                        }

                    } else {
                        echo "1#$#Invalid coupon code";
                        exit;

                    }

                } else {

                    echo "1#$#Invalid coupon code";
                    exit;

                }

            } else {
                $price = ($GetPackage[0]['price'] * 100);
                $orgPrice = $GetPackage[0]['price'];
                $disFinalPrice = $GetPackage[0]['price'];
            }
            //echo $price;
            //exit;
            $stripe_plan_id = $GetPackage[0]['stripe_plan_id'];
            //$price=($GetPackage[0]['price']*100);
            //$orgPrice=$GetPackage[0]['price'];
            $inVoiceId = $sesUID . time();
            $pack_id = $GetPackage[0]['id'];

            $description = json_encode(array("CustomInvoice" => "$inVoiceId", "UserId" => "$sesUID", "plan" => "$stripe_plan_id", "package_id" => "$pack_id", "price" => "$orgPrice", "CustomerId" => "$customer_stripe_id", "tblTkId" => "$tk_id", "discoutAmt" => "$discountCalculatPrice"));
            $PaymentResult = "";
            $paidResponse = "";
            $chkkey = $db->query("SELECT s_key,p_key FROM packages_key");
            $keyVals = $chkkey[0]['s_key'];

            \Stripe\Stripe::setApiKey($keyVals); /** Create a Payment start **/
            try {

                $Charge = \Stripe\Charge::create(array(
                    "amount" => "$price",
                    "currency" => "SGD",
                    "customer" => "$customer_stripe_id",
                    'description' => "$description",
                    'receipt_email' => "$sesEmail",
                ));
                $paidResponse = $Charge->paid;
                $PaymentResult = $Charge->status;
                $res_id = $Charge->id;
                if ($paidResponse == 1 && $PaymentResult == "succeeded" && $res_id != "") {$curDt = date("Y-m-d H:i:s");
                    $insertPack = $db->query("INSERT INTO user_pay_pack_subscribe      (user_id,plan_id,token_id,describ,invoice_id,res_result,res_paid,res_id,price,pak_Intervel_id,pak_total_month,created_at,plan_name,plan_price,dis_type_id,discount,discount_code,discount_applied,discount_reduction_amt)
            VALUES(:user_id,:plan_id,:token_id,:describ,:invoice_id,:res_result,:res_paid,:res_id,:price,:pak_Intervel_id,:pak_total_month,:created_at,:plan_name,:plan_price,:dis_type_id,:discount,:discount_code,:discount_applied,:discount_reduction_amt) ",
                        array("user_id" => "$sesUID",
                            "plan_id" => "$pack_id", "token_id" => "$tk_id",
                            "describ" => "$description", "invoice_id" => "$inVoiceId",
                            "res_result" => "$PaymentResult", "res_paid" => "$paidResponse",
                            "res_id" => "$res_id", "price" => "$disFinalPrice", "pak_Intervel_id" => "$pak_Intervel_id", "pak_total_month" => "$pak_total_month", "created_at" => "$curDt", "plan_name" => "$stripe_plan_id", "plan_price" => "$orgPrice", "dis_type_id" => "$dis_type_id", "discount" => "$discount_actual", "discount_code" => "$discount_code", "discount_applied" => "$discount_applied", "discount_reduction_amt" => "$discountCalculatPrice"));
                    echo "3#$#Plan amount paid successfully";
                    exit();
                } else {
                    echo "1#$#Payment failed try again";
                    exit;
                }

            } catch (Exception $e) /** Create a Payment end **/ {
                echo "1#$#" . $e->getMessage();
                exit();
            }

        } else {

            echo '1#$#Invalid Plan try again';
            exit;

        }

    }
} elseif ($mode == 'delsub') {
    $subcr_id = trim($_POST['ids']);
    $chkValidUser = $db->query("SELECT COUNT(pay_id) AS paidCnt,res_paid,res_id,res_result,res_subcri_result,res_subcri_id,un_subscrib,(CASE WHEN  res_subcri_result=:res_subcri_result AND NOT  res_subcri_id =:res_subcri_id THEN :S1 ELSE :S2 END) as subcriSucc,(CASE WHEN res_paid=:res_paid AND res_result=:res_result AND NOT  res_id=:res_id THEN :P1 ELSE :P2 END ) as Paysucc  FROM user_pay_pack_subscribe WHERE pay_id=:pay_id AND user_id=:user_id", array("pay_id" => "$subcr_id", "user_id" => "$sesUID", "res_subcri_result" => "", "res_subcri_id" => "", "S1" => "1", "S2" => "0", "res_paid" => "1", "res_result" => "succeeded", "res_id" => "", "P1" => "1", "P2" => "0"));
    if ($chkValidUser[0]['paidCnt'] > 0) {
        if ($chkValidUser[0]['un_subscrib'] == 0) {

            if ($chkValidUser[0]['Paysucc'] == 1) {
                $res_subcri_id = $chkValidUser[0]['res_subcri_id'];
                $chkkey = $db->query("SELECT s_key,p_key FROM packages_key");
                $keyVals = $chkkey[0]['s_key'];
                \Stripe\Stripe::setApiKey($keyVals);
                try
                {

                    $subscription = \Stripe\Subscription::retrieve("$res_subcri_id");
                    $CanclRes = $subscription->cancel();

                    $canceledSt = $CanclRes->status;
                    $canceledAt = $CanclRes->canceled_at;
                    if ($canceledSt == "canceled" && $canceledAt != "") {
                        $getDt = $db->query("SELECT  from_unixtime('$canceledAt', '%Y-%m-%d %h:%i:%s') as a ");
                        $canDt = $getDt[0]['a'];
                        $UpdateDt = $db->query("UPDATE user_pay_pack_subscribe SET un_subscrib=:un_subscrib,un_subscrib_dt=:un_subscrib_dt,un_res_subscrib_status=:un_res_subscrib_status WHERE pay_id=:pay_id", array("un_subscrib" => "1", "un_subscrib_dt" => "$canDt", "un_res_subscrib_status" => "$canceledSt", "pay_id" => "$subcr_id"));

                        echo "2#$#Plan has been Unsubscribed successfully";
                        exit;

                    }

                } catch (Exception $k) {

                    echo "2#$#" . $k->getMessage();
                    exit();

                }

            } else {
                echo "1#$#Payment failure";
                exit;

            }

        } else {

            echo "2#$#Data already unsubscribed";
            exit;

        }

    } else {
        echo "1#$#Data mismatch";
        exit;

    }

//print_r($chkValidUser);

    //  $chkVal=$db->query("SELECT COUNT(subcr_id) as SCnt,subcr_id,deleted FROM user_pack_subscribe WHERE subcr_id=:subcr_id AND user_id=:user_id",array("subcr_id"=>"$subcr_id","user_id"=>"$sesUID"));
    /*

if($chkVal[0]['SCnt']>0)
{

if($chkVal[0]['deleted']==1)
{
$UpdateDelVal=0;
$returnVal="2#$#".$subcr_id;
$chkValUpdate=$db->query("UPDATE user_pack_subscribe SET deleted=:deleted WHERE subcr_id=:subcr_id AND user_id=:user_id",array("deleted"=>"$UpdateDelVal","subcr_id"=>"$subcr_id","user_id"=>"$sesUID"));
echo $returnVal;
exit;

}
else
{

echo 1;
exit;
}

}
else
{
echo 1;
exit;

}

 */

} elseif ($mode == 'misssub') {
    $id = trim($_POST['ids']);

    $getAllSubunSubList = $db->query("SELECT count(a.pay_id) as payCnt,c.customer_stripe_id,b.stripe_plan_id,a.res_id,(CASE WHEN a.res_subcri_result=:res_subcri_result AND NOT a.res_subcri_id =:res_subcri_id THEN :S1 ELSE :S2 END) as subcriSucc,(CASE WHEN a.res_paid=:res_paid AND a.res_result=:res_result AND NOT  a.res_id=:res_id THEN :P1 ELSE :P2 END ) as Paysucc FROM user_pay_pack_subscribe a,packages b,user_card_token c WHERE a.user_id=:user_id  AND pay_id=:pay_id AND a.plan_id=b.id AND c.tk_id=a.token_id", array("res_subcri_result" => "active", "res_subcri_id" => "",
        "S1" => "1", "S2" => "0", "res_paid" => "1", "res_result" => "succeeded", "res_id" => "", "P1" => "1", "P2" => "0",
        "user_id" => "$sesUID", "pay_id" => "$id"));
    //print_r($getAllSubunSubList); exit;
    if ($getAllSubunSubList[0]['payCnt'] == 1) {
        if ($getAllSubunSubList[0]['Paysucc'] == 1 && $getAllSubunSubList[0]['subcriSucc'] == 0) {
            $chkkey = $db->query("SELECT s_key,p_key FROM packages_key");
            $keyVals = $chkkey[0]['s_key'];
            \Stripe\Stripe::setApiKey($keyVals); /** Create a Payment start **/
            try {
                $customer_stripe_id = $getAllSubunSubList[0]['customer_stripe_id'];
                $stripe_plan_id = $getAllSubunSubList[0]['stripe_plan_id'];

                $customer_Subscription = \Stripe\Subscription::create(array(
                    "customer" => "$customer_stripe_id",
                    "plan" => "$stripe_plan_id"));
                if ($customer_Subscription->status == 'active' && $customer_Subscription->id != "") {
                    $ResSub_id = $customer_Subscription->id;
                    $avtiv = $customer_Subscription->status;
                    $updateSubscri = $db->query("UPDATE user_pay_pack_subscribe SET res_subcri_result=:res_subcri_result ,res_subcri_id=:res_subcri_id,faild_attempt_subscrib=:faild_attempt_subscrib WHERE pay_id=:pay_id", array("res_subcri_result" => "$avtiv", "res_subcri_id" => "$ResSub_id", "faild_attempt_subscrib" => "1", "pay_id" => "$id"));

                    echo "2#$#Subscription active successfully";
                    exit();

                } else {

                    echo "1#$#Faild on package subscription";
                    exit();

                }

            } catch (Exception $k) {

                echo "1#$#" . $k->getMessage();
                exit();

            }

        } else {
            echo "1#$#Please try again";
            exit;

        }
    } else {

        echo "1#$#No data found";
        exit;

    }

} elseif ($mode == 'chkCoupon') //for packlage
{

    $couponVal = trim($_POST['cCode']);
    $tblrow = trim($_POST['tblrow']);
    if ($couponVal != "" && $tblrow > 0) {

        $chkCouponValid = $db->query("SELECT count(id) as Cnt,id,code,dis_type_id,discount,coupon_from,coupon_to,active FROM coupon  WHERE    curdate()  BETWEEN coupon_from AND coupon_to  AND code='" . $couponVal . "' AND discount >0 AND active=1");

        if ($chkCouponValid[0]['Cnt'] > 0) {
            if ($chkCouponValid[0]['active'] == 1) {
                $ChkvalidforUser = $db->query("SELECT count(pay_id) as UCnt FROM user_pay_pack_subscribe WHERE discount_applied=1 AND user_id=$sesUID "); //user eligible for discount means already exists

                if ($ChkvalidforUser[0]['UCnt'] == 0) {

                    $GetPackage = $db->query("SELECT count(id) As valC,stripe_plan_id,price,id,active FROM packages WHERE active=:active AND id=:id AND NOT stripe_plan_id=:stripe_plan_id AND price > :price", array("active" => "1", "id" => "$tblrow", "stripe_plan_id" => "", "price" => "0"));

                    if ($GetPackage[0]['valC'] == 0) /** check package valid or not **/ {
                        echo "1#$#Invalid Package";
                        exit;
                    } else {

                        $orgPrice = $GetPackage[0]['price'];

                        $discountAmt = $chkCouponValid[0]['discount'];
                        if ($chkCouponValid[0]['dis_type_id'] == 1) //calculate discount price by %
                        {

                            $getDisPrst = round(($orgPrice * $discountAmt / 100));

                            $disFinalPrice = ($orgPrice - $getDisPrst);
                            if ($disFinalPrice > 0) //&& $disFinalPrice < $orgPrice
                            {
                                echo "2#$#" . $disFinalPrice;
                                exit;
                            } else {
                                echo "1#$#Invalid discount price";
                                exit;
                            }

                        } elseif ($chkCouponValid[0]['dis_type_id'] == 2) //calculate discount price by doller
                        {
                            $getDisPrst = round(($orgPrice - $discountAmt));
                            if ($getDisPrst > 0) {
                                echo "2#$#" . $getDisPrst;
                                exit;
                            } else {
                                echo "1#$#Invalid discount price";
                                exit;
                            }

                        } else {

                        }

                    }

                } else {
                    echo "1#$#You have already used this coupon";
                    exit;

                }

            } else {
                echo "1#$#Invalid coupon code";
                exit;
            }

        } else {
            echo "1#$#Invalid coupon code";
            exit;
        }

    }

} elseif ($mode == 'revertCpn') //for package
{
    $tblrow = $_POST['tblrow'];

    if ($tblrow > 0) {

        $GetPackage = $db->query("SELECT count(id) As valC,stripe_plan_id,price,id,active FROM packages WHERE active=:active AND id=:id AND NOT stripe_plan_id=:stripe_plan_id AND price > :price", array("active" => "1", "id" => "$tblrow", "stripe_plan_id" => "", "price" => "0"));

        if ($GetPackage[0]['valC'] > 0) /** check package valid or not **/ {
            if ($GetPackage[0]['price'] > 0) {
                echo "2#$#" . $GetPackage[0]['price'];
                exit;

            } else {
                echo 1;
                exit;
            }

        } else {
            echo 1;
            exit;
        }

    } else {
        echo 1;
        exit;
    }

} elseif ($mode == 'chkEveCoupon') //for events
{

    $couponVal = trim($_POST['cCode']);
    $tblrow = trim($_POST['tblrow']);
    if ($couponVal != "" && $tblrow > 0) {

        $chkCouponValid = $db->query("SELECT count(id) as Cnt,id,code,dis_type_id,discount,coupon_from,coupon_to,active FROM coupon  WHERE    curdate()  BETWEEN coupon_from AND coupon_to  AND code='" . $couponVal . "' AND discount >0 AND active=1");

        if ($chkCouponValid[0]['Cnt'] > 0) {
            if ($chkCouponValid[0]['active'] == 1) {
                $ChkvalidforUser = $db->query("SELECT count(pay_id) as UCnt FROM user_pay_pack_subscribe WHERE discount_applied=1 AND user_id=$sesUID "); //user eligible for discount means already exists

                if ($ChkvalidforUser[0]['UCnt'] == 0) {

                    $GetPackage = $db->query("SELECT count(id) As valC,stripe_plan_id,price,id,active FROM packages WHERE active=:active AND id=:id AND NOT stripe_plan_id=:stripe_plan_id AND price > :price", array("active" => "1", "id" => "$tblrow", "stripe_plan_id" => "", "price" => "0"));

                    $GetPackage = $db->query(" select count(id) as valC ,id,name,description,is_active,price,events_name,event_date,created_at,updated_at from events where id= :id and  is_active= :is_active AND price > :cPrice", array("id" => "$tblrow", "is_active" => "1", "cPrice" => "0"));
                    if ($GetPackage[0]['valC'] == 0) /** check package valid or not **/ {
                        echo "1#$#Invalid Events";
                        exit;
                    } else {

                        $orgPrice = $GetPackage[0]['price'];

                        $discountAmt = $chkCouponValid[0]['discount'];
                        if ($chkCouponValid[0]['dis_type_id'] == 1) //calculate discount price by %
                        {

                            $getDisPrst = round(($orgPrice * $discountAmt / 100));

                            $disFinalPrice = ($orgPrice - $getDisPrst);
                            if ($disFinalPrice > 0) //&& $disFinalPrice < $orgPrice
                            {
                                echo "2#$#" . $disFinalPrice;
                                exit;
                            } else {
                                echo "1#$#Invalid discount price";
                                exit;
                            }

                        } elseif ($chkCouponValid[0]['dis_type_id'] == 2) //calculate discount price by doller
                        {
                            $getDisPrst = round(($orgPrice - $discountAmt));
                            if ($getDisPrst > 0) {
                                echo "2#$#" . $getDisPrst;
                                exit;
                            } else {
                                echo "1#$#Invalid discount price";
                                exit;
                            }

                        } else {

                        }

                    }

                } else {
                    echo "1#$#You have already used this coupon";
                    exit;

                }

            } else {
                echo "1#$#Invalid coupon code";
                exit;
            }

        } else {
            echo "1#$#Invalid coupon code";
            exit;
        }

    }

} elseif ($mode == 'revertEveCpn') //for event revert package
{

    $tblrow = $_POST['tblrow'];

    if ($tblrow > 0) {

        $GetPackage = $db->query(" select count(id) as valC ,id,name,description,is_active,price,events_name,event_date,created_at,updated_at from events where id= :id and  is_active= :is_active AND price > :cPrice", array("id" => "$tblrow", "is_active" => "1", "cPrice" => "0"));

        if ($GetPackage[0]['valC'] > 0) /** check package valid or not **/ {
            if ($GetPackage[0]['price'] > 0) {
                echo "2#$#" . $GetPackage[0]['price'];
                exit;

            } else {
                echo 1;
                exit;
            }

        } else {
            echo 1;
            exit;
        }

    } else {
        echo 1;
        exit;
    }
}
