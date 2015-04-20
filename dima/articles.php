<?php include 'templates/theme/header.tpl.php' ?>
    <div class="content articles">
        <h1>Articles</h1>

        <?php $articles = getArticles(); ?>

        <?php if (!empty($articles)) : ?>
            <?php foreach ($articles as $node) : ?>
                <h2 class="title"><?php echo $node['title']; ?></h2>
                <article><?php echo $node['body']; ?></article>
            <?php endforeach; ?>
        <?php else : ?>
            No records
        <?php endif; ?>
    </div>
<?php include 'templates/theme/footer.tpl.php' ?>