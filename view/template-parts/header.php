<!DOCTYPE html>
<html lang="<?= isset($lang) ? $lang : 'en'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title : $_SERVER['HTTP_HOST']; ?></title>
    <meta name="description" content="<?= isset($description) ? $description : ''; ?>">
    <link rel="canonical" href="<?= isset($canonical_url) ? $canonical_url : $site_url; ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
    <link href="/static/css/bootstrap.min.css" rel="stylesheet">
    <link href="/static/css/bootstrap-icons.css" rel="stylesheet">
    <link href="/static/css/templatemo-topic-listing.css" rel="stylesheet">

    <style>
        table {
            width: 100%;
            margin: 10px 0;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        .container img {
            max-width: 100%;
            display: block;
        }
    </style>

</head>
<body id="top">
<main>
<div id="sticky-wrapper" class="sticky-wrapper"><nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="/">
                        <i class="bi-back"></i>
                        <span><?= $site_info['site_name']; ?></span>
                    </a>

                    <div class="d-lg-none ms-auto me-4">
                        <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
    
                    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="navbar-collapse collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-5 me-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link click-scroll active" href="/">Home</a>
                            </li>

                        </ul>

                        <div class="d-none d-lg-block">
                            <a href="#top" class="navbar-icon bi-arrow-up smoothscroll"></a>
                        </div>
                    </div>
                </div>
            </nav></div>