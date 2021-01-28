<?php require VIEW_ROOT . '/templates/header.php'; ?>

        <?php if (!$page) : ?>
            <p>No page found, sorry</p>
        <?php else: ?>
             <h2><?php echo $page->getTitle() ?></h2>   


             <?php echo $page->getBody(); ?>
        <?php endif;  ?>


<?php require VIEW_ROOT . '/templates/footer.php'; ?>