<?php
$title = 'Post';
require 'includes/header.php';
require 'database.php';

$id = $_GET['id'];

$statement = $pdo->prepare("SELECT * FROM posts WHERE id = ?");
$statement->execute([$id]);
$post = $statement->fetch();


?>

<div class="container mt-5">
    
    <h3><?= $post['id'] ?></h3>
    <h1 class="text-body-emphasis"><?= $post['title'] ?></h1>
    <p class="fs-5 col-md-8"><?= $post['body'] ?></p>

    <p><?= $post['create_at'] ?></p>
    <hr class="col-12 col-md-12 mb-5">

    
</div>


<?php require 'includes/end.php'; ?>