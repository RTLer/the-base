<!DOCTYPE html>
<html>
<title>variables</title>
<body>
<?php
//  "do while" faghat yek vorodi mighiran do { //code } while(shart charkhidan)
// aghar shart charkhidan true bashe ejra mishavad aghar na ghat mishavad.
// in dastor aval ejra mikone va bad shart ro check mikone va dar sorat true naboodan
// hadeaghal yek bar run mishavas
$i = 0;
do{
    var_dump($i);
    echo "<br>\n";
    $i++;
} while ($i <= 10);
?>

<table>
  <tr>
    <th>id</th>
    <th>statement</th>
  </tr>
    <?php
    $i = 0;
    do {
    ?>
      <tr>
        <td><?php echo $i; ?></td>
        <td><? echo 'the id is' . $i; ?></td>
      </tr>
    <?php
        $i++;
    } while ($i <= 10);
    ?>
</table>
</body>
</html>