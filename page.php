<?php

require 'bootstrap.php';

if (empty($_GET['page'])){
    $page= false;
}else{
    $slug= $_GET['page'];
    //print($slug);
    $page = $entityManager->getRepository('Page')->findOneBy(array('slug' => $slug)); 
    //print_r ($page); 
   // var_dump($_GET);
   //var_dump($page);
}


require VIEW_ROOT .'/page/show.php';