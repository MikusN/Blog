<?php require "views/components/header.php"; ?> 
<?php require "views/components/navbar.php"; ?>

<h1><?= $pageTitle ?></h1>

<form method="POST">
    <input type="hidden" name="id" value="<?= $post["id"] ?>">

    <label>
        <textarea name="content"><?= $_POST["content"] ?? $post["content"] ?></textarea>
    </label>

    <?php if (isset($errors["content"])) { ?>
        <p><?= $errors["content"] ?></p>
    <?php } ?>

    <button type="submit">Saglabāt</button>
</form>

<?php require "views/components/footer.php"; ?>