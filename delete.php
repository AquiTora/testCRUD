<?php
include 'config.php';

$getId = $_GET['id'];

if (isset($_POST['delete_submit'])) {
	$sql = "DELETE FROM userData WHERE id=?";
	$query = $pdo->prepare($sql);
	$query->execute([$getId]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
}