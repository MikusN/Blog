<?php

require "Validator.php";

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    header('Location: /');
    exit;
}

$id = $_POST['id'] ?? null;

if (!Validator::number($id)) {
    header('Location: /');
    exit;
}

$db->query('DELETE FROM posts WHERE id = :id', ['id' => (int) $id]);

header('Location: /');
exit;