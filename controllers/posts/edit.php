<?php

$pageTitle = "Rediģēt Bloga Ierakstu";

require "Validator.php";

if (!isset($_GET["id"])) {
    header("Location: /");
    exit();
}

$id = $_GET["id"];

$post = $db->query(
    "SELECT * FROM posts WHERE id = :id",
    ["id" => $id]
)->fetch();

if (!$post) {
    header("Location: /");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $errors = [];
    $content = $_POST["content"] ?? "";

    if (!Validator::number($id)) {
        $errors["content"] = "Saturam neeksistē";
    }

    if (!Validator::string($content, min:1, max: 50)) {
        $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
    }
    if(empty($errors)){
        $db->query(
            "UPDATE posts SET content = :content WHERE id = :id",
            [
                "content" => $content,
                "id" => $id
            ]
        );
        header("Location: /show?id=" . $id);
        exit();
    }

}

require "views/posts/edit.view.php";