<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>
<h1><?php echo $pageTitle ?></h1>

<form method="POST">
    <button>Post</button>
<label><input name="content" value="<?= $_POST['content'] ?? ''?>"> </input> </label>
 <?php if(isset($errors["content"])) { ?>
       <p><?= $errors["content"] ?></p>
     <?php } ?>
</form>

<?php require "views/components/footer.php"; ?>