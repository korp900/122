<?
  header("Access-Control-Allow-Origin: *");
  $mysqli = new mysqli('localhost','vladle43_0201','8O&Zjowm','vladle43_0201');
  $result = $mysqli->query("SELECT * FROM blog");
  // NULL == false
  // Наличие чего либо это всегда TRUE
  $posts = [];
  while($row = $result->fetch_assoc()){
    $posts[] = $row;
  }
  echo json_encode($posts);
?>