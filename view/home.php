<?php include __DIR__.'/template-parts/header.php'; ?>
<?php $languages = ['vi','it','fr','de','ja','pt','fi','ar','es','ko']; ?>

<section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-12 mx-auto">
                <h1 class="text-white text-center">Discover. Learn. Enjoy</h1>

                <h6 class="text-center">platform for creatives around the world</h6>

                <form method="get" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
                    <div class="input-group input-group-lg">
                        <span class="input-group-text bi-search" id="basic-addon1">
                            
                        </span>

                        <input name="keyword" type="search" class="form-control" id="keyword" placeholder="Design, Code, Marketing, Finance ..." aria-label="Search">

                        <button type="submit" class="form-control">Search</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
<section class="featured-section">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                <div class="custom-block bg-white shadow-lg">
                    <a href="#">
                        <div class="d-flex">
                            <div>
                                <h5 class="mb-2">Wiki</h5>

                                <p class="mb-0">We are convinced that individuals possess an inherent desire to lend a hand. Hence, taking inspiration from Wikipedia, VanchuyenQT is a wiki platform that operates in your native language and serves as a resource to assist others in making informed choices.</p>
                            </div>

                        </div>

                        <img src="/static/images/topics/undraw_Remote_design_team_re_urdx.png" class="custom-block-image img-fluid" alt="">
                    </a>
                </div>
            </div>

            <div class="col-lg-6 col-12">
                <div class="custom-block custom-block-overlay">
                    <div class="d-flex flex-column h-100">
                        <img src="/static/images/businesswoman-using-tablet-analysis.jpg" class="custom-block-image img-fluid" alt="">

                        <div class="custom-block-overlay-text d-flex">
                            <div>
                                <h5 class="text-white mb-2">Comparision</h5>

                                <p class="text-white">We are of the opinion that simplifying the process of making appropriate decisions ought to be more straightforward than its present complexity. We hold the view that achieving this objective is attainable by offering unbiased, cost-free, succinct, and comprehensible information. We strive to establish a convenient hub where such information can be accessed in a single location.</p>

                            </div>

                        </div>

                        <div class="section-overlay"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="explore-section section-padding" id="section_2">
    <div class="container">
        <div class="row">

            <div class="col-12 text-center">
                <h2 class="mb-4">Browse</h2>
            </div>

        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="design-tab" data-bs-toggle="tab" data-bs-target="#design-tab-pane" type="button" role="tab" aria-controls="design-tab-pane" aria-selected="true">Website</button>
                </li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-12">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel" aria-labelledby="design-tab" tabindex="0">
                        <div class="row">

                            <?php foreach ($site_info['metadata'] as $k=>$v): ?>
                            <div class="col-lg-4 col-md-6 col-12 mb-4">
                                <div class="custom-block bg-white shadow-lg">
                                    <a href="<?= url_for_home_lang($k); ?>">
                                        <div class="d-flex">
                                            <div>
                                                <h5 class="mb-2"><?= $v['title']; ?></h5>
                                                <p class="mb-0"><?= $v['description']; ?></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                </div>

        </div>
    </div>
</div>
</section>

<section class="timeline-section section-padding" id="section_3">
                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">

                        <div class="col-12 text-center">
                            <h2 class="text-white mb-4">How does it work?</h2>
                        </div>

                        <div class="col-lg-10 col-12 mx-auto">
                            <div class="timeline-container">
                                <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                                    <div class="list-progress">
                                        <div class="inner" style="height: 795.5px;"></div>
                                    </div>

                                    <li class="active">
                                        <h4 class="text-white mb-3">Search your favourite topic</h4>

                                        <p class="text-white">Discover, compare, decide. Our website simplifies your search for valuable insights. Enter your desired term and uncover our informative posts comparing two items. Trust our well-researched content to help you make informed decisions. Start exploring now!</p>

                                        <div class="icon-holder">
                                          <i class="bi-search"></i>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <h4 class="text-white mb-3">Bookmark &amp; Keep it for yourself</h4>

                                        <p class="text-white">Save and organize your favorite content effortlessly with our bookmarking feature. When you discover a post that captivates you or contains valuable comparisons, just click the bookmark icon. This way, you can easily access it whenever you need it, ensuring that you never lose track of the information that matters to you. Start bookmarking today and keep your personalized collection at your fingertips.</p>

                                        <div class="icon-holder">
                                          <i class="bi-bookmark"></i>
                                        </div>
                                    </li>

                                    <li>
                                        <h4 class="text-white mb-3">Read &amp; Enjoy</h4>

                                        <p class="text-white">Delve into captivating content and indulge in the joy of reading.</p>

                                        <div class="icon-holder">
                                          <i class="bi-book"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="faq-section section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <h2 class="mb-4">Frequently Asked Questions</h2>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-lg-5 col-12">
                            <img src="/static/images/faq_graphic.jpg" class="img-fluid" alt="FAQs">
                        </div>

                        <div class="col-lg-6 col-12 m-auto">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What is this website about?
                                        </button>
                                    </h2>

                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        VanchuyenQT is an expansive website that offers a diverse array of comparisons in multiple languages, catering to the innate curiosity of individuals. It serves as a valuable resource, providing comprehensive information on various subjects, allowing users to delve deeper into topics of interest. Whether it's comparing products, services, or even concepts, VanchuyenQT empowers people to expand their knowledge and make more informed decisions. With its user-friendly interface and extensive database, the website enables individuals to satisfy their curiosity and gain a deeper understanding of the world around them.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How to find a topic?
                                    </button>
                                    </h2>

                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            You can search on Google with <strong>keywords</strong> such as vanchuyenqt.com, wordpress.org vs wordpress.com, etc.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Is it free?
                                    </button>
                                    </h2>

                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        Yes, absolutely! VanchuyenQT operates on a completely free basis. Users can access all the features, comparisons, and information available on the website without any cost. There are no hidden charges or subscription fees involved. VanchuyenQT firmly believes in providing free and unrestricted access to knowledge, ensuring that everyone can benefit from the valuable resources and insights available on the platform. So rest assured, exploring and utilizing the services provided by VanchuyenQT comes at no expense to you.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


<?php include __DIR__.'/template-parts/footer.php'; ?>
