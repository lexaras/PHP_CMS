<?php require VIEW_ROOT . '/templates/header.php'; ?>
<div class="nav">
    <ul>
        <li>Admin area</li>
        <li><a href="<?php echo BASE_URL; ?>">View Website</a></li>
        <li>Click here to <a href="index.php?action=logout"> logout.</a></li>
    </ul>
</div>

    <?php if (empty($pages)): ?>
            <p>No pages at the moment</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>Label</th>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Actions</th>
                    <th></th>
                </tr>            
            </thead>    
            <tbody>
                <?php foreach($pages as $page): ?>
                    <tr>
                        <td><?php echo $page->getLabel() ?></td>
                        <td><?php echo $page->getTitle() ?></td>
                        <td><a href="<?php echo BASE_URL;?>/page.php?page=<?php echo $page->getSlug();?>
                        "><?php echo $page->getSlug()?></a></td>
                        <td><a href="<?php echo BASE_URL;?>admin/edit.php?id=<?php echo $page->getId();?>">Edit</a></td>
                        <td><a href="<?php echo BASE_URL;?>admin/delete.php?id=<?php echo $page->getId();?>">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>    
        </table>

    <?php endif; ?>

    <a href="<?php echo BASE_URL;?>admin/add.php">Add new page</a>

<?php require VIEW_ROOT . '/templates/footer.php'; ?>