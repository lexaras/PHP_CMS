<?php require VIEW_ROOT . '/templates/header.php'; ?>


    <h2>Edit page</h2>

    <form action="<?php echo BASE_URL; ?>/admin/edit.php" method="POST" autocomplete="off"> 
        <label for="title">
            Title
            <input type="text" name="title" id="title" value="<?php echo $page->getTitle()?>">
        </label>
        <label for="label">
            Label
            <input type="text" name="label" id="label" value="<?php echo $page->getLabel()?>">
        </label>
        <label for="slug">
            Slug
            <input type="text" name="slug" id="slug" value="<?php echo $page->getSlug()?>">
        </label>
        <label for="body">
            Body
            <textarea name="body" id="body" cols="30" rows="10" ><?php echo $page->getBody()?></textarea>
        </label>

        <input type="hidden" name="id" value="<?php echo($page->getId())?>">
        <input type="submit" value="Edit">

    </form>
<?php require VIEW_ROOT . '/templates/footer.php'; ?>

