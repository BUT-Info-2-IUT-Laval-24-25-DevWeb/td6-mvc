<table>
    <tr>
        <th>Nom</th>
        <th>Description</th>
        <th>Echeance</th>
        <th>Modification</th>
        <th>Supprimer</th>
    </tr>
    <?php foreach ($tasks as $task): ?>
        <tr>
            <td>
                <?php echo $task['nom']; ?>
            </td>
            <td>
                <?php echo $task['description']; ?>
            </td>
            <td>
                <?php echo timestamp_to_date($task['echeance']); ?>
            </td>
            <td>
                <a href="?id=<?php echo $task['id']; ?>&action=update">Modifier</a>
            </td>
            <td>
                <a href="?id=<?php echo $task['id']; ?>&action=delete">Supprimer</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>