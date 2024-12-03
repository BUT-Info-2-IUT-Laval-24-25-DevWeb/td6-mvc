<?php

// Handlers Modification et Ajout
$isUpdate = isset($_GET['action']) && $_GET['action'] === 'update' && isset($_GET['id']);

if ($isUpdate) {
    if (isset($_POST['is_update'])) {
        if (isset($_POST['nom']) && isset($_POST['description']) && isset($_POST['echeance'])) {
            $id = $_GET['id'];
            update_task($id, $_POST['nom'], $_POST['description'], $_POST['echeance']);
        }
    }
    require 'views/update.php';
    $tasks = get_tasks();
    $task = get_task($_GET['id']);
    require 'views/list.php';
}
