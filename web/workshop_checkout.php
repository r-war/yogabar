<?php

session_start();
include realpath(__DIR__ . '/..')."/configs/config.php";
require_once realpath(__DIR__ . '/..') . "/configs/vendor/autoload.php";
require_once realpath(__DIR__ . '/..') . "/configs/db/Db.class.php";
$db = new Db();

$events_id = trim($_POST['hidid']);
//$salutation = trim($_POST['Salutation']);
$user_name = trim($_POST['fname']);
$surname = trim($_POST['surname']);
//$nirc = trim($_POST['nirc']);
//$passport_no = trim($_POST['passno']);
//$nationality = trim($_POST['nationality']);
//$ecpSplit = explode('/', $_POST['ExpirDt']);

//$date_of_expiry = $ecpSplit[2] . '-' . $ecpSplit[1] . '-' . $ecpSplit[0];
//$gender = trim($_POST['radio']);
//$dobExp = explode('/', $_POST['dob']);
//$dob = $dobExp[2] . '-' . $dobExp[1] . '-' . $dobExp[0];
$email = trim($_POST['cemail']);
$phone = trim($_POST['phone']);
$name_emergency = trim($_POST['emgPerson']);
$name_emr_phone = trim($_POST['ephone']);
$relation = trim($_POST['realtion']);
$injury = trim($_POST['injury']);
$injury_des =trim($_POST['injury_des']);
$yoga = trim($_POST['yoga']);
$ytt= trim($_POST['ytt']);

if (isset($_SESSION['UID'])) {

    $user_id = $_SESSION['UID'];
} else {
    $user_id = '';
}

if ($_POST['eveType'] == 2) //retreat category
{
    $e_cat_id = 2;
} else {
    $e_cat_id = 1;
}
$randNo = time() . generateRandomString();

$cur_date = date('Y-m-d h:i:s');
$InsertTk = $db->query("INSERT INTO user_events_registration 
    (user_id, e_cat_id,events_id, user_name,  surname, dob, email,  phone,  name_emergency, name_emr_phone, cur_date,reg_unique_id,
    emr_relation, injury, injury_des, yoga, ytt) 
    VALUES (:user_id, :e_cat_id, :events_id, :user_name, :surname, :dob, :email, :phone, :name_emergency, :name_emr_phone,:cur_date,
    :reg_unique_id, :emr_relation, :injury, :injury_des, :yoga, :ytt) ",
    array("user_id" => "$user_id", "e_cat_id" => "$e_cat_id", "events_id" => "$events_id", "user_name" => "$user_name", "surname" => "$surname", "dob" => "$dob", "email" => "$email", "phone" => "$phone", "name_emergency" => "$name_emergency", "name_emr_phone" => "$name_emr_phone", "cur_date" => "$cur_date", "reg_unique_id" => $randNo, "emr_relation"=>"$emr_relation", "injury"=>"$injury", "injury_des"=>"$injury_des", "yoga"=>"$yoga", "ytt"=>"$ytt"));
if ($_POST['eveType'] == 2) //retreat category
{
    $getRegId = $db->query("SELECT e_reg_id FROM user_events_registration WHERE
        reg_unique_id=:val", array("val" => "$randNo"));
    $id = isset($getRegId[0]['e_reg_id']) ? $getRegId[0]['e_reg_id'] : 0;
    echo $id;
} else {

    $getRegId = $db->query("SELECT e_reg_id FROM user_events_registration WHERE
        reg_unique_id=:val", array("val" => "$randNo"));
    $id = isset($getRegId[0]['e_reg_id']) ? $getRegId[0]['e_reg_id'] : 0;
    echo $id;

}
$ChkLogin = 0;
if (isset($_SESSION) && isset($_SESSION['UID'])) {

    if ($_SESSION['UID'] != "") {
        $userId = $_SESSION['UID'];

        $chk_cardTk = $db->query("SELECT count(tk_id) AS TkCnt FROM user_card_token WHERE user_id= :user_id", array("user_id" => "$userId"));
        $ChkLogin = 1;
        if ($chk_cardTk[0]['TkCnt'] > 0) {
        } else {
            header("Location: card_dt_add.php");
            die();
        }

    }
}
$pakId = '';
//code for without login select package id redirect to check out page after successful login
if (isset($_SESSION['OFFPACKID'])) {
    if ($_SESSION['OFFPACKID'] != "" && $_SESSION['OFFPACKID'] > 0) {
        $pakId = $_SESSION['OFFPACKID'];
        unset($_SESSION['OFFPACKID']);
        unset($_SESSION['CAT']);

    }
}

if ($pakId != "" && $pakId > 0) {

    $getAllSubunSubList = $db->query("SELECT  id,name,stripe_plan_id,price,group_type_id,active,if(pak_Intervel_id =:intid,:p1,:p2) as pak_Intervel_id FROM packages WHERE active= :active AND NOT  stripe_plan_id =:stripe_plan_id AND  price > :price AND id=:id order by group_type_id ", array("active" => "1", "stripe_plan_id" => "", "price" => "0", "id" => "$pakId", "intid" => "1", "p1" => "Subscribe", "p2" => "Pay"));

    $Card_dt = $db->query("SELECT tk_id,user_id,card_no,customer_stripe_id,created_at,token_key,if(card_no='','',concat(:V1,card_no)) as cardDtStr FROM user_card_token WHERE user_id=:user_id ", array("V1" => "XXXXXXXXXXXX", 'user_id' => "$userId"));
} elseif (isset($_POST)) {
    if (isset($_POST['hidid'])) {
        if (($_POST['hidid'] != "" && $_POST['hidid'] > 0)) {
            $pakId = $_POST['hidid'];
            $getAllSubunSubList = $db->query("SELECT  id,name,stripe_plan_id,price,group_type_id,active,if(pak_Intervel_id =:intid,:p1,:p2) as pak_Intervel_id FROM packages WHERE active= :active AND NOT  stripe_plan_id =:stripe_plan_id AND  price > :price AND id=:id order by group_type_id ", array("active" => "1", "stripe_plan_id" => "", "price" => "0", "id" => "$pakId", "intid" => "1", "p1" => "Subscribe", "p2" => "Pay"));

            $Card_dt = $db->query("SELECT tk_id,user_id,card_no,customer_stripe_id,created_at,token_key,if(card_no='','',concat(:V1,card_no)) as cardDtStr FROM user_card_token WHERE user_id=:user_id ", array("V1" => "XXXXXXXXXXXX", 'user_id' => "$userId"));
        } else {
            header("Location: package.php");
            die();
        }
    } else {
        header("Location: package.php");
        die();
    }
} else {
    header("Location: package.php");
    die();
}
/*$Card_dt = $db->query("SELECT tk_id,user_id,card_no,customer_stripe_id,created_at,token_key,if(card_no='','',concat(:V1,card_no)) as cardDtStr FROM user_card_token WHERE user_id=:user_id ", array("V1" => "XXXXXXXXXXXX", 'user_id' => "$userId"));
$smarty->assign('getAllSubunSubList',$_POST);
$smarty->assign('card_dt',$Card_dt);
$smarty->display('package_checkout.tpl');*/


function generateRandomString()
{
    $length = 5;
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
