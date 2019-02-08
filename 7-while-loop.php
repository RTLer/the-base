<!DOCTYPE html>
<html>
<title>variables</title>
<body>
<?php
//  "while" faghat yek vorodi mighiran while(shart charkhidan)
// aghar shart charkhidan true bashe ejra mishavad aghar na ghat mishavad.
$i = 0;
while ($i <= 10) {
    var_dump($i);
    echo "<br>\n";
    $i++;
}
?>

<table>
  <tr>
    <th>id</th>
    <th>statement</th>
  </tr>
    <?php
    $i = 0;
    while ($i <= 10) {
    ?>
      <tr>
        <td><?php echo $i; ?></td>
        <td><? echo 'the id is' . $i; ?></td>
      </tr>
    <?php
        $i++;
    }
    ?>
</table>
