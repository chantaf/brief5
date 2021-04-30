<form action="http://localhost/mvc/salle/update" method="Post">
      <?php foreach($sl as $s)?>
        <input type="hidden" name="id" value="<?php echo $s['id']; ?>" >
        <input type="text" name="sLibelle" value="<?php echo $s['libelle']; ?>" >
        <input type="text" name="scapacite" value="<?php echo $s['capacite']; ?>">
        <input type="submit" name="submit" value="save">
</form>