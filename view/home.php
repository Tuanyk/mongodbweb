<?php include __DIR__.'/template-parts/header.php'; ?>

<div class="container mt-3">
    <?php foreach ($documents as $document): ?>

        <div class="article card bg-light mb-3">
            <div class="card-body">
                <a href="/p/<?= $document['slug'];?>"><h2 class="card-title"><?= $document["title_$site_lang"];?></h2></a>
                <p class="card-text"><a href="/p/<?= $document['slug'];?>">Read more...</a></p>
            </div>
        </div>

    <?php endforeach; ?>
</div>


<?php include __DIR__.'/template-parts/footer.php'; ?>