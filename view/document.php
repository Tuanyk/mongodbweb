<?php include __DIR__.'/template-parts/header.php'; ?>

<div class="container mt-3 mb-3 border border-secondary-subtle p-3 ml-3 mr-3">
    <h1><?= $document['title']; ?></h1>
    <h2 class="subtitle"><?= $document["title_$site_lang"]; ?></h2>
    
    <div class="content">
        <?php 
            $html = $document["translated_html_$site_lang"]; 
            $dom = new DOMDocument();
            $dom->loadHTML('<?xml encoding="UTF-8">' . $html);
            $image_tags = $dom->getElementsByTagName('img');
            foreach ($image_tags as $image_tag) {
                $src = $image_tag->getAttribute('src');
                $new_img_src = '/images/' . $document['_id'] . '_' . md5($src) . '.webp';
                $image_tag->setAttribute('src', $new_img_src);
            }
            $html = $dom->saveHTML();
            echo $html;
        ?>
    </div>
</div>

<?php include __DIR__.'/template-parts/footer.php'; ?>
