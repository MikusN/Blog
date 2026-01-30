<?php

require_once "functions.php";
require_once "Database.php";
$config = require "config.php";

$db = new Database($config["database"]);
$sql_query = "SELECT * FROM categories";
$params = [];
if(isset($_GET["search_query"]) && trim($_GET["search_query"]) != "") {
    $sql_query .= " WHERE category_name LIKE :search";
    $params["search"] = "%" . $_GET["search_query"] . "%";
}
$posts = $db->query($sql_query, $params)->fetchAll(PDO::FETCH_ASSOC);

echo "<h1>Categories</h1>";

echo "<form>";
    echo "<input name='search_query' type='text' />";
    echo "<input type='submit' value='Meklēt' />";
echo "</form>";

echo "<ul>";
    foreach($posts as $post) {
        echo "<li>" . $post["category_name"] . "</li>";
    }
echo "</ul>";

$firstPost = $db->query("SELECT * FROM categories WHERE id = 1")->fetch(PDO::FETCH_ASSOC);
dd($firstPost);