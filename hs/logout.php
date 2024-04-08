<?php session_start();

if (isset($_SESSION['user_hs'])) {
	unset($_SESSION['user_hs']); // xóa session login
	header("location: ./index.php");
} else {
	header("location: ./index.php");
}
?>