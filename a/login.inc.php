<?
require_once('config.inc.php');
require_once('function.inc.php');

session_start();

if($_SESSION['logged_in']==true){
redirect('/keskom/soal.php');
}
else{
if((!isset($_POST['username']))||(!isset($_POST['password'])) OR (!ctype_alnum($_POST['username'])))
{redirect('/keskom/index.php');}

$mysqli = @new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if(mysqli_connect_errno()){
printf("Unable to connect to database: %s", mysqli_connect_error());
exit();
}

$username = $mysqli->real_escape_string($_POST['username']);
$password = $mysqli->real_escape_string($_POST['password']);

$sql = "SELECT * FROM user WHERE username = '" . $username . "' AND password = '" . $password . "'"; 
$result = $mysqli->query($sql);

if(is_object($result) && $result->num_rows==1){
$_SESSION['logged_in'] = true;
$_SESSION["username"] = $_POST['username'];
redirect('/keskom/soal.php');
}
else{
redirect('/keskom/index.php');
}
}
?>