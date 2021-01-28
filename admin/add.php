<?php

require '../bootstrap.php';

if (!empty($_POST)){
    $label = $_POST['label'];
    $slug = $_POST['slug'];
    $title = $_POST['title'];
    $body = $_POST['body'];

    $page = new Page();
    $page->SetLabel($label);
    $page->setSlug($slug);
    $page->setTitle($title);
    $page->setBody($body);
    $entityManager->persist($page);
    $entityManager->flush();

    header('Location:' . BASE_URL . '/admin/list.php');
}






require VIEW_ROOT . '/admin/add.php';


