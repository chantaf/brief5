<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="http://localhost/mvc/salle/create" method="post">
libelle:<input type="text" name="libelle"><br>
capacite:<input type="text" name="capacite">
<button type="submit" name="ajouter">AJOUTER</button>

</form>

    <table>
    <?php
        foreach($result as $res){?>
        <tr>
        <td><?php echo $res['id'] ?></td>
        <td><?php echo $res['libelle'] ?></td>
        <td><?php echo $res['capacite'] ?></td>
        <td style="display: flex;"><form action="http://localhost/mvc/salle/delete" method="post"> <input type="text" name="id" value="<?php echo $res['id'] ?>" hidden> <button name="supprimer">supprimer</button></form> &nbsp; &nbsp; 
        <form action="http://localhost/mvc/salle/edit" method="post"> <input type="text" name="id" value="<?php echo $res['id'] ?>" hidden> <button name="modifier">modifier</button></form> </td>
      
        </tr>
      <?php  }
        ?>
        
    </table>
</body>
</html>
