<?php include __DIR__.'/template-parts/header.php'; ?>
<?php 
    $html = $document["translated_html_en_$lang"]; 
    $dom = new DOMDocument();
    @$dom->loadHTML('<?xml encoding="UTF-8">' . $html);
    $image_tags = $dom->getElementsByTagName('img');
    foreach ($image_tags as $image_tag) {
        $src = $image_tag->getAttribute('src');
        $new_img_src = '/images/' . $document['_id'] . '_' . md5($src) . '.webp';
        $image_tag->setAttribute('src', $new_img_src);
    }
    $html = $dom->saveHTML();
?>


<header class="site-header d-flex flex-column justify-content-center align-items-center">
    <div class="container">
        <div class="row justify-content-center align-items-center">

            <div class="col-lg-5 col-12 mb-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Homepage</a></li>
                        <?php foreach ($document['categories'] as $category): ?>
                            <li class="breadcrumb-item active"><?= $category; ?></li>
                        <?php endforeach; ?>
                    </ol>
                </nav>

                <h2 class="text-white"><?= $document['title']; ?></h2>

                <div class="d-flex align-items-center mt-5">
                    <a href="#topics-detail" class="btn custom-btn custom-border-btn smoothscroll me-4">Read More</a>

                    <a href="#top" class="custom-icon bi-bookmark smoothscroll"></a>
                </div>
            </div>

            <div class="col-lg-5 col-12">
                <div class="topics-detail-block bg-white shadow-lg">
                    <img src="/static/images/topics/undraw_Remote_design_team_re_urdx.png" class="topics-detail-block-image img-fluid">
                </div>
            </div>

        </div>
    </div>
</header>

<section class="topics-detail-section section-padding" id="topics-detail">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-12 m-auto">
                <div class="content">
                    <h2 class="subtitle"><?= $document["title_en_$lang"]; ?></h2>
                    <?= $html; ?>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="section-padding section-bg">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-5 col-12">
                <img src="/static/images/rear-view-young-college-student.jpg" class="newsletter-image img-fluid" alt="">
            </div>

            <div class="col-lg-5 col-12 subscribe-form-wrap d-flex justify-content-center align-items-center">
                <form class="custom-form subscribe-form" action="#" method="post" role="form">
                    <h4 class="mb-4 pb-2">Get Newsletter</h4>

                    <input type="email" name="subscribe-email" id="subscribe-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email Address" required="">

                    <div class="col-lg-12 col-12">
                        <button type="submit" class="form-control">Subscribe</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

<?php include __DIR__.'/template-parts/footer.php'; ?>
