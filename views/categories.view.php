<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>
<h1>Categories</h1>

<form>
    <input name='search_query' value='<?= $_GET["search_query"] ?? "" ?>' />
    <button>Meklēt</button>
</form>

<ul>
<?php foreach($posts as $post) { ?>
    <li> <?= $post["category_name"] ?> </li>
<?php } ?>
</ul>

<?php require "views/components/footer.php"; ?>