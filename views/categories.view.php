<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emuārs</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
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

</body>
</html>