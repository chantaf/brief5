<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
</head>
<body>
    <form action="http://localhost/mvc/login/create" method="post">
        nom:<input type="text" name="name"><br>
        email:<input type="text" name="email">
        password:<input type="text" name="password">
        role: <input type="radio" name="role"><option value="ensiegnant"></option>
        <button type="submit" name="ajouter">inscription</button>
    </form>

    <table>
    <?php

        foreach($result as $r){?>
        <tr>

          <td><?php echo $r['id'] ?></td>
          <td><?php echo $r['name'] ?></td>
          <td><?php echo $r['email'] ?></td>
          <td><?php echo $r['password'] ?></td>
          <td><?php echo $r['role'] ?></td>
 
        </tr>
      <?php  }?>
</body>
</html>