<?php

require '../bootstrap.php';

// if (isset($_GET['id'])){
//     //delete
//     // 
//     // var_dump($id);
//     //
//     //var_dump($page);
//     //
//     //
// }
if (isset($_GET['id'])){
    $id= $_GET['id'];
    $page = $entityManager->find('page', $id);
    $entityManager->remove($page);
    $entityManager->flush();  
    header('Location: ' . BASE_URL . '/admin/list.php');
    die();
}
