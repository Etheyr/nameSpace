<?php
namespace Etheyr\App\Foo {
require 'vendor/autoload.php';

$foo =new Client();
$foo->render();
}
namespace Etheyr\App\Bar {
	$bar=new Client();
	$bar->render();
}
?>