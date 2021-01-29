<?php
require 'bootstrap.php';
$pages = $entityManager->getRepository('Page')->findAll();
//var_dump($pages);
require VIEW_ROOT . '/home.php';