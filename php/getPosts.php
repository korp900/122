<?
  header("Access-Control-Allow-Origin: *");
  $mysqli = new mysqli('localhost','korp9001_1','9ckeD&9a','korp9001_1');
  $result = $mysqli->query("SELECT * FROM blog");
  // NULL == false
  // Наличие чего либо это всегда TRUE
  $posts = [];
  while($row = $result->fetch_assoc()){
    $posts[] = $row;
  }
  echo json_encode($posts);
?>