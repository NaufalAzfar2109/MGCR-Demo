
<?php

$namaCafe = "METEOR GARDEN";
$subNama = "CAFE RESTO";

// Daftar halaman
$pages = [
    "beranda",
    "tentang_kami",
    "menu",
    "galeri",
    "lokasi"
];

// Menentukan halaman aktif
$page = $_GET['page'] ?? 'beranda';

// Validasi halaman
if (!in_array($page, $pages, true)) {
    $page = 'beranda';
}

// Navigasi
$navigation = [
    "Beranda" => "beranda",
    "Tentang Kami" => "tentang_kami",
    "Menu" => "menu",
    "Galeri" => "galeri",
    "Lokasi" => "lokasi"
];

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $namaCafe ?> | <?= $subNama ?></title>

    <!-- Google Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Montserrat:wght@300;400;500;600&display=swap">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- =================================
         NAVBAR
    ================================== -->

    <header class="main-header">

        <nav class="navbar navbar-expand-lg">

            <div class="container-fluid navbar-container">

                <!-- BRAND -->
                <a href="index.php?page=beranda" class="navbar-brand">

                    <span class="brand-name">
                        <?= $namaCafe ?>
                    </span>

                    <span class="brand-subtitle">
                        <?= $subNama ?>
                    </span>

                </a>


                <!-- MOBILE TOGGLER -->
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarContent"
                    aria-controls="navbarContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>

                </button>


                <!-- NAVIGATION -->
                <div class="collapse navbar-collapse" id="navbarContent">

                    <ul class="navbar-nav ms-auto">

                        <?php foreach ($navigation as $label => $link): ?>

                            <li class="nav-item">

                                <a
                                    href="index.php?page=<?= $link ?>"
                                    class="nav-link <?= $page === $link ? 'active' : '' ?>">

                                    <?= $label ?>

                                </a>

                            </li>

                        <?php endforeach; ?>

                    </ul>

                </div>

            </div>

        </nav>

    </header>


    <!-- =================================
         PAGE CONTENT
    ================================== -->

    <main>

        <?php include __DIR__ . '/pages/' . $page . '.php'; ?>

    </main>


    <!-- =================================
         JAVASCRIPT
    ================================== -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <script src="script.js"></script>

</body>

</html>
