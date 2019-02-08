<!DOCTYPE html>
<html>
<title>functions</title>
<body>
<form action="/4-if.php" method="post">
  variable a:<br>
  <input type="text" name="a" value="">
  <br>
  variable b:<br>
  <input type="text" name="lastname" value="">
  <br>
  variable op:<br>
  <input type="text" name="lastname" value="">
  <br><br>
  <input type="submit" value="Submit">
</form>
<pre>
<?php

if (isset($_POST['op'])) {
    if($_POST['op'] == 'sub'){
        var_dump($_POST['a'] - $_POST['b']);
    }elseif($_POST['op'] == 'add'){
        var_dump($_POST['a'] + $_POST['b']);
    }elseif($_POST['op'] == 'mul'){
        var_dump($_POST['a'] * $_POST['b']);
    }elseif($_POST['op'] == 'div'){
        var_dump($_POST['a'] / $_POST['b']);
    }elseif($_POST['op'] == 'pow'){
        var_dump($_POST['a'] ** $_POST['b']);
    }else{
        var_dump('invalid, op must be: sub, add, mul or div');
    }
}
?>
</pre>
</body>
</html>