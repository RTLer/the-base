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
  switch ($_POST['op']){
      case 's':
      case 'subtract':
      case 'sub':
          var_dump($_POST['a'] - $_POST['b']);
          break;
      case 'a':
      case 'add':
          var_dump($_POST['a'] + $_POST['b']);
          break;
      case 'mul':
          var_dump($_POST['a'] * $_POST['b']);
          break;
      case 'div':
          var_dump($_POST['a'] / $_POST['b']);
          break;
      case 'pow':
          var_dump($_POST['a'] ** $_POST['b']);
          break;
      default:
          var_dump('invalid, op must be: sub, add, mul or div');
          break;
  }
}
?>
</pre>
</body>
</html>