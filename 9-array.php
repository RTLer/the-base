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
//https://github.com/RTLer/the-base
// rah dige ee tarif in array besirat zir hast
$user = [];
$user[] = 'john';
$user[] = 'doe';
$user[] = 24;
$user[] = true;
//dastresi ba id
// arkodom az index haye in array ro mitonim ba key hashon begirim
// aghe bebinin khone haye array a 1 shoro nemishavad
// va az ** 0 shoro mishavad **
echo "first name: {$user[0]}\n";
echo "<br>\n";
echo "last name: {$user[1]}\n";
echo "<br>\n";
echo "age: {$user[2]}\n";
echo "<br>\n";
echo 'is irani: ' . ($user[3] ? 'irani' : 'not irani') . "\n";
echo "<br>\n";
// hatta mitonin khone haye mokhtalef array ro be sorat zir taghir dad
// rah dige ee tarif in array besirat zir por kard
// aghar bedonim kodon khone ro mikhaym por konim
$user = [];
$user[0] = 'john';
$user[1] = 'doe';
//$user[2] = '24';
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
	$users[$i] .= "test";
    echo 'index is: ' . $i . ', name is: ' . $user . "\n";
    echo "<br>\n";
}
//named array
$user = [
    'first_name'=>'john',//first name
    'last_name'=>'doe',//last name
    'age'=>'24',//age
    'is_irani'=>true,//is irani
];

echo $user['first_name'];
    echo "<br>\n";

echo "first name: {$user['first_name']}\n";
echo "<br>\n";
echo "last name: {$user['last_name']}\n";
echo "<br>\n";
echo "age: {$user['age']}\n";
echo "<br>\n";
echo 'is irani: ' . ($user['is_irani'] ? 'irani' : 'not irani') . "\n";
echo "<br>\n";
// function haye kar ba array
//http://php.net/manual/en/ref.array.php

$tags = 'test,test2,test3';
$users = [
    'john doe',
    'ali amiri',
    'sajad karami',
    'amin nazari',
    'hooman naghiee',
];
$user = [
    'first_name'=>'john',//first name
    'last_name'=>'doe',//last name
    'age'=>'24',//age
    'is_irani'=>true,//is irani
];
echo 'test';
sort($users);
var_dump($users);
echo "<br>\n";

?>
</pre>
</body>
</html>
