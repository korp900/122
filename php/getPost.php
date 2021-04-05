<?
  header("Access-Control-Allow-Origin: *");
  $mysqli = new mysqli('localhost','korp9001_1','9ckeD&9a','korp9001_1');
  $id = $_POST['id'];
  $result = $mysqli->query("SELECT * FROM blog WHERE id=$id");
  echo json_encode($result->fetch_assoc());
?>