<html>
<head>
</head>
<body>
<link rel="stylesheet" type="text/css" href="style.css">
<h1>Mini Wiki</h1>
<?php
require '../../vendor/autoload.php';

use Shepard\Lister\SimpleLister;
use Shepard\Parser\SimpleParser;
use Shepard\Manager\SimpleManager;

$parser = new SimpleParser();
$manager = new SimpleManager();

$user1 = $parser->parse($manager->readFile('Doc/Kent_Beck.html'));
$user2 = $parser->parse($manager->readFile('Doc/Martin_Fowler.html'));
$user3 = $parser->parse($manager->readFile('Doc/Robert_C_Martin.html'));

$manager->saveText('Doc/Kent_Beck.txt', $user1->getDescription());
$manager->saveText('Doc/Martin_Fowler.txt', $user2->getDescription());
$manager->saveText('Doc/Robert_C_Martin.txt', $user3->getDescription());

$lister = new SimpleLister();

echo $lister->printMiniWiki($user1);
echo $lister->printMiniWiki($user2);
echo $lister->printMiniWiki($user3);

?>

</body>
</html>
