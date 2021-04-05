<?
  header("Access-Control-Allow-Origin: *");
  $mysqli = new mysqli('localhost','korp9001_1','9ckeD&9a','korp9001_1');
  $email = trim(mb_strtolower($_POST['email']));
  if($result->num_rows){
    echo json_encode(['result'=>'exist']);
  }else{
    echo json_encode(['result'=>'not found']);
  }