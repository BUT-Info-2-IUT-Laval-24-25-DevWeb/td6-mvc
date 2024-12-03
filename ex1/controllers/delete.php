<?php

if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $message = 'La tache a été supprimer';
    $result = delete_task($id);
    if ($result === false) {
        $message = 'La tâche n a pas été supprimer';
    }

    $tasks = get_tasks();
    require 'views/delete.php';
}
