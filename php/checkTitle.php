<?
  header("Access-Control-Allow-Origin: *");
  $mysqli = new mysqli('localhost','korp9001_1','9ckeD&9a','korp9001_1');
  $title = $_POST['title'];
  $result = $mysqli->query("SELECT * FROM blog WHERE title='$title'");
  if($result->num_rows) echo json_encode(['result'=>'exist']);
  else echo json_encode(['result'=>'title not found']);
?>