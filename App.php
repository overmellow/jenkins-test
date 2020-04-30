<?php

namespace App;

require __DIR__ . '/vendor/autoload.php';

require_once 'Fruit.php';

$apple = new Fruit("Apple");
echo $apple->get_name();

echo "hello from APP!";

?>