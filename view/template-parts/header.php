<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title : $_SERVER['HTTP_HOST']; ?></title>
    <meta name="description" content="<?= isset($description) ? $description : ''; ?>">

    <link href="/static/css/bootstrap.min.css" rel="stylesheet">
    <script src="/static/js/bootstrap.bundle.min.js"></script>

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
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="/"><?= $_SERVER['HTTP_HOST']; ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                ≡
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/">Home</a></li>
                </ul>
            </div>
        </div>
    </nav>