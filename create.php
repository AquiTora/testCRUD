<?php
include 'config.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if (isset($_POST['submit'])) {
    $sql = ("INSERT INTO `userData`(`name`, `email`, `password`) VALUES(?,?,?)");
	$query = $pdo->prepare($sql);
	$query->execute([$name, $email, $password]);
	$success = '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Данные успешно отправлены!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}

$sql = $pdo->prepare("SELECT * FROM `userData`");
$sql->execute();
$result = $sql->fetchAll();