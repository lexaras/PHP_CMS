<?php require VIEW_ROOT . '/templates/header.php'; ?>
    HOME
    <?php if (empty($pages)): ?>
        <p>Sorry, no pages at the moment</p>
    <?php else: ?>
        <ul>
        <?php foreach($pages as $page): ?>
            <li><a href="<?php echo BASE_URL; ?>/page.php?page=<?php echo $page->getSlug();?>">
            <?php echo $page->getLabel(); ?></a></li>
        <?php endforeach; ?>
        </ul>
    <?php endif; ?>
<?php require VIEW_ROOT . '/templates/footer.php'; ?>