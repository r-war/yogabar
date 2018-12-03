<?php 
 session_start();
 include realpath(__DIR__ . '/..')."/configs/config.php";
 //require_once(realpath(__DIR__ . '/..')."/configs/db/Db.class.php");
 //$db = new Db();

$ChkLogin=0;
 if(isset($_SESSION) && isset($_SESSION['UID']))
{

if($_SESSION['UID']!=""){
$userId=$_SESSION['UID'];
$chk_cardTk="SELECT count(tk_id) AS TkCnt FROM user_card_token WHERE user_id= $userId" ;
$resultChk = $db->query($chk_cardTk);
$GetVal=$resultChk->rows;
 

 
  $ChkLogin=1;
/*  if($GetVal[0]['TkCnt'] >0)
  {

    //echo $resultChk->TkCnt;
  }
  else
  {
     header("Location: card_dt_add.php");
 	die();
    
  }*/

 


}
}
 
 

 $sql = "SELECT if(price>0 ,1,0) as paylink,price,events_name,id,name,description,is_active,DATE_FORMAT(event_date,'%d-%b-%Y') as event_date,created_at,updated_at FROM events where e_cat_id=1 and is_active=1 order by id Desc";
 $result = $db->query($sql);

//print_r($result->rows);
 $smarty->assign('events_rs',$result->rows );
  $smarty->assign('events_cnt',count($result->rows) );

 $smarty->assign('notes', "active");
 $smarty->assign('ChkLogin', "$ChkLogin");


 $smarty->display('notes.tpl');
