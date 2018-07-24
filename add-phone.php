<?
require_once 'bootstrap.php';
require_once 'functions.php';
$rep = new FileRepository('storage/database.store');

$phone = new Product(
    $_POST['phone']['name'],
    $_POST['phone']['color'],
    $_POST['phone']['price'],
    $_FILES
);

$rep->add($phone);
$rep->save();
header('Location: /Homeworks/project/');

