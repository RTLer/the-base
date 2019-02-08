<!DOCTYPE html>
<html>
<title>variables</title>
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

// if agar ha dar barname nevisi hastand masalan aghar dokme shabt ro zad karbar ettelaat eesh ro zakhire kon.

// isset($var) yeki az abzar haye dakeli php hast
// ke moshakhas mikone aya variable vojod dare ya na. (dar sorat vojod true va gheir in sorat false mishavad)
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