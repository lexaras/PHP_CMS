<?php

require '../bootstrap.php';

if(!empty($_POST)){
    $id = $_POST['id'];
    $label = $_POST['label'];
    $slug = $_POST['slug'];
    $title = $_POST['title'];
    $body = $_POST['body'];

    $page = $entityManager->find('page', $id);
    $page->setTitle($_POST['title']);
    $page->setLabel($_POST['label']);
    $page->setSlug($_POST['slug']);
    $page->setBody($_POST['body']);
    $entityManager->flush();

    header('Location' . BASE_URL . '/admin/list.php');
}

if (!isset($_GET['id'])){
    header('Location: ' . BASE_URL . '/admin/list.php');
    die();
}
$id= $_GET['id'];
$page = $entityManager->getRepository('Page')->findOneBy(array('id' => $id)); 
//var_dump($page);

require VIEW_ROOT . '/admin/edit.php';