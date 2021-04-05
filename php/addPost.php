<?
  header("Access-Control-Allow-Origin: *");
  $mysqli = new mysqli('localhost','vladle43_0201','8O&Zjowm','vladle43_0201');
  $title = $_POST['title'];
  $text = $_POST['text'];
  $author = $_POST['author'];
  
  $mysqli->query("INSERT INTO `blog`(`title`, `text`, `author`) VALUES ('$title','$text','$author')");
  echo json_encode(['result'=>'success']);
?>