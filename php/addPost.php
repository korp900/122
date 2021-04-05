<?
  header("Access-Control-Allow-Origin: *");
  $mysqli = new mysqli('localhost','korp9001_1','9ckeD&9a','korp9001_1');
  $title = $_POST['title'];
  $text = $_POST['text'];
  $author = $_POST['author'];
  
  $mysqli->query("INSERT INTO `blog`(`title`, `text`, `author`) VALUES ('$title','$text','$author')");
  echo json_encode(['result'=>'success']);
?>