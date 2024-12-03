<?php if ($isUpdate):

?>
    <form method="post">
        <div>
            <input type="text" name="nom" placeholder="Nom" value="<?php echo $task['nom']; ?>" />
        </div>
        <div>
            <input type="text" name="description" placeholder="Description" value="<?php echo $task['description']; ?>" />
        </div>
        <div>
            <input type="date" name="echeance" placeholder="Echeance" value="<?php echo timestamp_to_date($task['echeance']); ?>" />
        </div>
        <div>
            <input type="hidden" name="is_update" value="true" />
            <button type="submit">Modifier</button>
        </div>
    </form>
<?php endif; ?>