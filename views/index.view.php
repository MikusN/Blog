<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emuārs</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<h1>Blogs</h1>

<form>
    <input name='search_query' value='<?= $_GET["search_query"] ?? "" ?>' />
    <button>Meklēt</button>
</form>

<ul>
<?php if (count($posts) == 0) { ?>
    <p>❌ Nav atrasts neviens ieraksts. 😭 Lūdzu, pamēģini citu vārdu vai frāzi 🐣</p>
<?php } else { ?>
    <?php foreach($posts as $post) { ?>
        <li> <?= $post["content"] ?> </li>
    <?php } ?>
<?php } ?>

</ul>
</body>
</html>