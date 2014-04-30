<?php

if (!file_exists(__DIR__ . "/vendor/autoload.php")) {
  echo
    'You need to set up the project dependencies using the following commands:' . PHP_EOL .
    'curl -s http://getcomposer.org/installer | php' . PHP_EOL .
    'php composer.phar install' . PHP_EOL;
} else {
  require_once __DIR__ . "/vendor/autoload.php";
}
