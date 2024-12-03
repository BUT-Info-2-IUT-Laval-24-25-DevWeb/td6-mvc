<?php if (!$isUpdate): ?>
    <form method="post">
        <div>
            <input type="text" name="nom" placeholder="Nom" />
        </div>
        <div>
            <input type="text" name="description" placeholder="Description" />
        </div>
        <div>
            <input type="date" name="echeance" placeholder="Echeance" />
        </div>
        <div>
            <button type="submit">Ajouter</button>
        </div>
    </form>
<?php endif; ?>