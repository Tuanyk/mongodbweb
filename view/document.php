<?php include __DIR__.'/template-parts/header.php'; ?>

<div class="container mt-3 mb-3 border border-secondary-subtle p-3 ml-3 mr-3">
    <h1><?= $document['title']; ?></h1>
    <h2 class="subtitle"><?= $document["title_$site_lang"]; ?></h2>
    <?= $document["translated_html_$site_lang"]; ?>
</div>

<?php include __DIR__.'/template-parts/footer.php'; ?>
