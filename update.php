<?php
include 'config.php';

$editName = $_POST['editName'];
$editEmail = $_POST['editEmail'];
$editPassword = $_POST['editPassword'];
$getId = $_GET['id'];
if (isset($_POST['edit-submit'])) {
	$sqll = "UPDATE userData SET updated_at=NOW(), name=?, email=?, password=? WHERE id=?";
	$querys = $pdo->prepare($sqll);
	$querys->execute([$editName, $editEmail, $editPassword, $getId]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
}