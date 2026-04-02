<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<h1><?= htmlspecialchars($post["content"]) ?></h1>
<li><a href="edit?id=<?= $post["id"] ?>">Redģiēt</a></li>

<form method="POST" action="/delete">
    <input type="hidden" name="id" value="<?= $post['id'] ?>">
    <button type="submit" class="delete-btn">Dzēst</button>
</form>


<?php require "views/components/footer.php"; ?>