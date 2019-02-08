<!DOCTYPE html>
<html>
<title>variables</title>
<body>
<pre>
<?php

// har jomle(statement) dar php ba ";" tamam mishavad
// baraye mesal
'this is a statement';

// va baraye test kardan code ha dar zaman tosee

// variable mahal neghahdari maghdar ha hasrand
// maralam aghe niaz dashte bashim etelaat post yek Weblog:

// variable ha mitonan string bashan yani dhakeleshon reshte ee az character ha bashe
// masalan
$authorFirstName = 'John';

echo 'author: ' . $authorFirstName . "<br>\n";

$authorLastName = 'Doe';

echo 'author: ' . $authorLastName . "<br>\n";

$title = 'yek post jadid!';

echo 'title: ' . $title . "<br>\n";

$body = 'etttaat post jadid';

echo 'body: ' . $body . "<br>\n";

// mitone megdar adadi dashte bashe
$commentCount = 10;

echo 'commentCount: ' . $commentCount . "<br>\n";


$viewCount = 20;

echo 'viewCount: ' . $viewCount . "<br>\n";

$likeCount = 10;

echo 'likeCount: ' . $likeCount . "<br>\n";

// ya megdar mantegi boolean
$isPublic = true;

var_dump($isPublic);
echo "<br>\n";

$isAdmin = false;

var_dump($isPublic);
echo "<br>\n";


// ya array bashe (ke jelo tar kamelan baresi mikonim)
$tags = [
    'php',
    'programming',
    'web',
    'backend',
];

var_dump($tags);
echo "<br>\n";

// ya object bashe  (ke kamelan jelo tar baresi mikonim)


// va ya null bashe (khali bashe va hich meghdari nadashte bashe)
$category = null;

var_dump($category);
echo "<br>\n";

// alave bar moemkane tarif motegayer mitonin shabet (const) tarif konin
define('SITE_NAME', 'class.php');

var_dump(SITE_NAME);
echo "<br>\n";



// operator ha

// operator haye adadi
$totalViewAndCounts = $commentCount + $viewCount;

var_dump($totalViewAndCounts);
echo "<br>\n";

$peopleNotCommented = $viewCount - $commentCount;

var_dump($peopleNotCommented);
echo "<br>\n";

$unrealLikes = $likeCount * 10;

var_dump($unrealLikes);
echo "<br>\n";

$realLikes = $unrealLikes / 10;

var_dump($realLikes);
echo "<br>\n";

// % bagimande taghsim moadele ro mide
$x = 17 % 3;

var_dump($x);
echo "<br>\n";

// in oprator haro mishe sate tar nevesht dar sharayet khast
$unrealLikes += 10; // $unrealLikes = $unrealLikes + 10;

var_dump($unrealLikes);
echo "<br>\n";

$unrealLikes -= 2; // $unrealLikes = $unrealLikes - 2;

var_dump($unrealLikes);
echo "<br>\n";


$unrealLikes *= 3; // $unrealLikes = $unrealLikes * 3;

var_dump($unrealLikes);
echo "<br>\n";


$unrealLikes /= 2; // $unrealLikes = $unrealLikes / 2;

var_dump($unrealLikes);
echo "<br>\n";


$unrealLikes %= 4; // $unrealLikes = $unrealLikes % 4;

var_dump($unrealLikes);
echo "<br>\n";




// dar sharayeti niaz ke maghadir addadi ro yeki azash kam ya ziad kard

var_dump(++$unrealLikes);// $unrealLikes = $unrealLikes + 1;
echo "<br>\n";

var_dump(--$unrealLikes);// $unrealLikes = $unrealLikes - 1;
echo "<br>\n";

var_dump($unrealLikes++);
echo "<br>\n";

var_dump($unrealLikes--);
echo "<br>\n";


// operator haye (boolean) mantegi
$canUserEdit = $isAdmin && $isPublic;// darsorati ke $isPublic true bood va $isAdmin true bood: $canUserEdit true mishavad

echo 'canUserEdit: ';
var_dump($canUserEdit);
echo "<br>\n";

$isEditable = $isAdmin || $isPublic;// darsorati ke $isPublic true bood va ya $isAdmin true bood: $canUserEdit true mishavad

echo 'isEditable: ';
var_dump($isEditable);
echo "<br>\n";

$isViewsAndLikesIsTheSame = $viewCount == $likeCount;// aya $viewCount barabar $likeCount hast

echo 'isViewsAndLikesIsTheSame: ';
var_dump($isViewsAndLikesIsTheSame);
echo "<br>\n";

$isViewsAndLikesIsNotTheSame = $viewCount != $likeCount;// aya $viewCount barabar $likeCount nist

echo 'isViewsAndLikesIsNotTheSame: ';
var_dump($isViewsAndLikesIsNotTheSame);
echo "<br>\n";

$isLikesLessThanComments = $likeCount < $commentCount;// aya $likeCount kantar az $commentCount hast

echo 'isLikesLessThanComments: ';
var_dump($isLikesLessThanComments);
echo "<br>\n";

$isLikesLessThanComments = $likeCount <= $commentCount;// aya $likeCount kantar ya barabar $commentCount hast

echo 'isLikesLessThanComments: ';
var_dump($isLikesLessThanComments);
echo "<br>\n";

$isLikesMoreThanComments = $likeCount > $commentCount;// aya $likeCount bishtar az $commentCount hast

echo 'isLikesMoreThanComments: ';
var_dump($isLikesMoreThanComments);
echo "<br>\n";

$isLikesMoreThanComments = $likeCount >= $commentCount;// aya $likeCount bishtar ya barabar $commentCount hast

echo 'isLikesMoreThanComments: ';
var_dump($isLikesMoreThanComments);
echo "<br>\n";

$isNotAdmin = !$isAdmin;// alamat "!" ghabl az har meghdar manteghi, meghdar ra barax mikonamd !true == false, (! ro mighan "not")

echo 'isLikesMoreThanComments: ';
var_dump($isLikesMoreThanComments);
echo "<br>\n";


// operator haye string (reshte ha)

// chasbandan do reshte
// dar php reste ha ra ba alamat "." mitavan be ham chasband, masalan
$authorFullName = $authorFirstName . ' ' . $authorLastName;
echo $authorFullName . "<br>\n";

$htmlName = '<p>'.$authorFullName.'</p>';
echo $htmlName . "<br>\n";

$htmlName2 = '<p>';
$htmlName2 .= $authorFullName;// $htmlName2 = $htmlName2 . $authorFullName;
$htmlName2 .= '</p>';// $htmlName2 = $htmlName2 . '</p>';
echo $htmlName2 . "<br>\n";

// dar php shoma mitavanid string ha ro ba ' va ya " besazad ba do farg
// 1. mitavan dar dakhel " az variable ha estefade kard
// 2. mitavan dar dakhel " az charakter haye khast manand
//      \n moadel enter(line jadid)
//      \t moadel tab(fasele ee tab)
//    estefade kard
// masalan:
$htmlName3 = "<p>{$authorFullName}</p>";
echo $htmlName3 . "<br>\n";

$name = "first name: $authorFirstName \n<br>\nlast name: $authorLastName";
echo $name . "<br>\n";

$name = "first name: $authorFirstName\tlast name: $authorLastName";
echo $name . "<br>\n";

?>
</pre>
</body>
</html>