<?php include __DIR__.'/template-parts/header.php'; ?>


<header class="site-header d-flex flex-column justify-content-center align-items-center">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-5 col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Homepage</a></li>

                        <li class="breadcrumb-item active" aria-current="page"><?= isset($title) ? $title : $_SERVER['HTTP_HOST']; ?></li>
                    </ol>
                </nav>

                <h2 class="text-white"><?= isset($title) ? $title : $_SERVER['HTTP_HOST']; ?></h2>
            </div>

        </div>
    </div>
</header>

<section class="section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12 text-center">
                <h3 class="mb-4">Recent Posts</h3>
            </div>

            <div class="col-lg-8 col-12 mt-3 mx-auto">
                <?php foreach ($documents as $document): ?>
                    <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5 category-post-card">
                        <div class="d-flex">
                            <div class="custom-block-topics-listing-info d-flex">
                                <div>
                                    <h5 class="mb-2"><?= $document["title"];?></h5>

                                    <p class="mb-0"><?= $document["title_en_$lang"];?></p>
                                    <?= echo_document_category($document, $lang); ?>
                                    <a href="/p/<?= $lang; ?>/<?= $document['slug'];?>" class="btn custom-btn mt-3 mt-lg-4">Learn More...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="col-lg-12 col-12">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mb-0">

                        <li class="page-item">
                            <a class="page-link" href="<?= ($page>1) ? url_for_category($lang, $category, $page-1) : '#' ;?>" aria-label="Previous">
                                <span aria-hidden="true">Prev</span>
                            </a>
                        </li>

                        <?php for($i=$page-2; $i>=0;$i++): ?>
                            <?php if ($i >= $page) break; ?>
                            <?php if ($i == 0) continue; ?>
                                <li class="page-item">
                                    <a class="page-link" href="<?= url_for_category($lang, $category, $i); ?>"><?= $i; ?></a>
                                </li>
                        <?php endfor; ?>

                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#"><?= $page; ?></a>
                        </li>
                        
                        <?php for($i=$page+1; $i<=$total_pages; $i++): ?>
                            <?php if ($i > $page + 2) break; ?>
                                <li class="page-item">
                                    <a class="page-link" href="<?= url_for_category($lang, $category, $i); ?>"><?= $i; ?></a>
                                </li>
                        <?php endfor; ?>

                        
                        <li class="page-item">
                            <a class="page-link" href="<?= ($page<$total_pages) ? url_for_category($lang, $category, $page+1) : '#' ;?>" aria-label="Next">
                                <span aria-hidden="true">Next</span>
                            </a>
                        </li>
                        
                    </ul>
                </nav>
            </div>

        </div>
    </div>
    </section>



<?php include __DIR__.'/template-parts/before-footer.php'; ?>
<?php include __DIR__.'/template-parts/footer.php'; ?>