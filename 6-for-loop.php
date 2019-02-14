<!DOCTYPE html>
<html>
<title>variables</title>
<body>
<?php
// loop ha dar programming baraye tekrara ejraye yek ghate code (charkhidan) mibashad
// baraye mesal "for" se vorodi mighirad for(meghdar avaliee, shart charkhidan, vaghir meghdar avaliee)
//
for ($i = 0; $i <= 10; $i++) {
    var_dump($i);
    echo "<br>\n";
}
?>

<table>
  <tr>
    <th>id</th>
    <th>statement</th>
  </tr>
    <?php for ($i = 0; $i <= 10; $i++) { ?>
      <tr>
        <td><?= $i ?></td>
        <td><?= 'the id is' . $i ?></td>
      </tr>
    <?php } ?>
</table>
</body>
</html>