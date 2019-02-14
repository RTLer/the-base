<!DOCTYPE html>
<html>
<title>array</title>
<body>
<pre>
<?php
// dar barname nevisi niaze ke chand megdar ro ke be ham mortabet hasrand ro
// dar variable haee zakhire kard
// bedone array ha in kar mitone baees ziad shodan code va hata geire momken shodan
// ejraee bazi chiz ha she
// masalan ajzaee sazande yek jomle
$string1 = "php";
$string2 = "programming language";
$string3 = "websites";

echo $string1 . ' is a ' . $string2 . ' or making ' . $string3;
echo "<br>\n";


$strings = array(
    'php',
    'programming language',
    'websites',
);

echo $strings[0] . ' is a ' . $strings[1] . ' or making ' . $strings[2];
echo "<br>\n";

$strings = [
    'php',
    'programming',
    'web',
];

echo $strings[0] . ' is a ' . $strings[1] . ' or making ' . $strings[2];
echo "<br>\n";

//index array
//aghe ye array dashte bashim az ettelaat karbar
$user = [
    'john',//first name
    'doe',//last name
    '24',//age
    true,//is irani
];

// rah dige ee tarif in array besirat zir hast
$user = [];
$user[] = 'john';
$user[] = 'doe';
$user[] = '24';
$user[] = true;

//dastresi ba id
// arkodom az index haye in array ro mitonim ba key hashon begirim
// aghe bebinin khone haye array a 1 shoro nemishavad
// va az ** 0 shoro mishavad **
echo "first name: {$user[0]}\n";
echo "<br>\n";
echo "last name: {$user[0]}\n";
echo "<br>\n";
echo "age: {$user[0]}\n";
echo "<br>\n";
echo 'is irani: ' . ($user[0] ? 'irani' : 'not irani') . "\n";
echo "<br>\n";

// hatta mitonin khone haye mokhtalef array ro be sorat zir taghir dad

// rah dige ee tarif in array besirat zir por kard
// aghar bedonim kodon khone ro mikhaym por konim
$user = [];
$user[0] = 'john';
$user[1] = 'doe';
$user[2] = '24';
$user[3] = true;

//dastresi dar loop
// yeki az kar haee ke ba array ha mishe kard cakhidan roye khone kaye array hast
//masalan chap listi az asami
$users = [
    'john doe',
    'ali amiri',
    'sajad karami',
    'amin nazari',
    'hooman naghiee',
];

//for loop
// yeki az halati ke mitavan roye array charkhid loop haye mamoli hastand

// tedad khone haye array ro mitonin ba count() bedast biarin
echo "tedad khane haye mojod dar list user ha: \n";
var_dump(count($users));
echo "<br>\n";

for($i = 0;$i <count($users);$i++){
    echo 'name is: ' . $users[$i] . "\n";
    echo "<br>\n";
}

//foreach loop
foreach($users as $user) {
    echo 'name is: ' . $user . "\n";
    echo "<br>\n";
}

// gereftan index array
foreach($users as $i=>$user) {
    echo 'name is: ' . $user . "\n";
    echo "<br>\n";
}


//named array

//dastresi ba id

//dastresi dar loop

//for loop

//foreach loop

//nested array

//dastresi ba id

//dastresi dar loop to dar to

//for loop

//foreach loop

// function haye kar ba array
//http://php.net/manual/en/ref.array.php
// is_array, explode, implode, split, array_reverse,
// array_chunk, array_keys, array_values, sort
// array_merge, array_shift, array_unshift, array_pop, array_push

?>
</pre>
</body>
</html>