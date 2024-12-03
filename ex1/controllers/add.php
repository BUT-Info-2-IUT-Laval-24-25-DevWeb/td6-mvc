<?php
// Handlers Modification et Ajout
$isUpdate = isset($_GET['action']) && $_GET['action'] === 'update' && isset($_GET['id']);
$isDelete = isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id']);

if (!$isUpdate & !$isDelete) {
    if (isset($_POST['nom']) && isset($_POST['description']) && isset($_POST['echeance'])) {
        echo 'Ajout en cours';
        try {
            add_task($_POST['nom'], $_POST['description'], $_POST['echeance']);
            echo 'Tache ajouté';
        } catch (Exception $e) {
            echo 'Tache non ajouté';
        }
    }
    require 'views/add.php';
    $tasks = get_tasks();
    require 'views/list.php';
}
