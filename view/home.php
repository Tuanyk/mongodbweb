
<?php foreach ($documents as $document): ?>

    <div class="article">
        <h2><?= $document["title_$site_lang"];?></h2>
        <p><a href="/p/<?= $document['slug'];?>">Read more...</a></p>
    </div>

<?php endforeach; ?>