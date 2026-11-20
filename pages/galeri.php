<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Galeri | Meteor Garden Cafe & Resto</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600;700&family=Allura&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>

    /* =========================
       GLOBAL
    ========================= */

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        background: #F5EBDD;
        color: #49352E;
        font-family: 'DM Sans', sans-serif;
    }

    /* =========================
       PAGE
    ========================= */

    .gallery-page {
        width: 100%;
        min-height: 100vh;
        padding: 5vh 8vw;
        position: relative;
        overflow: hidden;
    }

    .gallery-container {
        width: 100%;
        max-width: 1500px;
        margin: auto;
        position: relative;
        z-index: 2;
    }

    /* =========================
       HEADER
    ========================= */

    .gallery-header {
        display: flex;
        align-items: flex-end;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .header-text {
        display: flex;
        flex-direction: column;
    }

    .eyebrow {
        font-family: 'Allura', cursive;
        font-size: 25px;
        color: #B98451;
        line-height: 1.1;
        margin-bottom: 2px;
    }

    .gallery-title {
        font-family: 'Playfair Display', serif;
        font-size: clamp(25px, 2.5vw, 38px);
        font-weight: 600;
        color: #49352E;
        letter-spacing: -1px;
    }

    .instagram-link {
        display: flex;
        align-items: center;
        gap: 9px;
        padding-bottom: 5px;

        text-decoration: none;
        color: #72513D;
        font-size: 11px;
        font-weight: 600;

        transition: .3s;
    }

    .instagram-link:hover {
        color: #B98451;
        transform: translateX(3px);
    }

    .instagram-link i {
        font-size: 12px;
    }

    /* =========================
       GALLERY GRID
    ========================= */

    .gallery-grid {
        width: 100%;
        height: clamp(440px, 66vh, 760px);

        display: grid;

        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(3, 1fr);

        gap: 10px;
    }

    /* =========================
       GALLERY ITEM
    ========================= */

    .gallery-item {
        position: relative;
        display: block;

        width: 100%;
        height: 100%;

        overflow: hidden;
        border-radius: 12px;

        text-decoration: none;
        background: #DCC8AE;

        isolation: isolate;
    }

    .gallery-item img {
        width: 100%;
        height: 100%;

        display: block;
        object-fit: cover;

        transition: transform .6s ease;
    }

    /* Image Overlay */

    .gallery-item::after {
        content: "";

        position: absolute;
        inset: 0;

        background: linear-gradient(
            to top,
            rgba(38, 24, 16, .68) 0%,
            rgba(38, 24, 16, .15) 40%,
            transparent 75%
        );

        z-index: 1;
        transition: .4s;
    }

    /* Hover Effect */

    .gallery-item:hover img {
        transform: scale(1.06);
    }

    .gallery-item:hover::after {
        background: linear-gradient(
            to top,
            rgba(38, 24, 16, .8),
            rgba(38, 24, 16, .05)
        );
    }

    /* =========================
       CAPTION
    ========================= */

    .gallery-caption {
        position: absolute;

        bottom: 16px;
        left: 16px;
        right: 12px;

        z-index: 2;
        color: #fff;

        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .caption-title {
        display: flex;
        align-items: center;
        gap: 9px;

        font-family: 'Playfair Display', serif;
        font-size: clamp(13px, 1.3vw, 19px);
        font-weight: 500;
    }

    .caption-title i {
        font-size: 14px;
    }

    .caption-description {
        font-size: clamp(9px, .8vw, 12px);
        font-weight: 400;
        opacity: .9;
        margin-left: 23px;
    }

    /* =========================
       GRID POSITION
    ========================= */

    /* 1. Large Indoor */

    .item-1 {
        grid-column: 1 / 3;
        grid-row: 1 / 3;
    }

    /* 2. Latte */

    .item-2 {
        grid-column: 3;
        grid-row: 1;
    }

    /* 3. Bookshelf */

    .item-3 {
        grid-column: 4;
        grid-row: 1;
    }

    /* 4. Espresso */

    .item-4 {
        grid-column: 3;
        grid-row: 2;
    }

    /* 5. Drinks */

    .item-5 {
        grid-column: 4;
        grid-row: 2;
    }

    /* 6. Window */

    .item-6 {
        grid-column: 1 / 3;
        grid-row: 3;
    }

    /* 7. Outdoor */

    .item-7 {
        grid-column: 3;
        grid-row: 3;
    }

    /* 8. Memories */

    .item-8 {
        grid-column: 4;
        grid-row: 3;
    }

    /* =========================
       DECORATION
    ========================= */

    .decoration {
        position: absolute;
        pointer-events: none;
        opacity: .16;
        color: #C99C6C;
    }

    .decoration-top {
        top: 15px;
        right: 15px;
        font-size: 100px;
        transform: rotate(-25deg);
    }

    .decoration-bottom {
        bottom: 10px;
        left: 5px;
        font-size: 85px;
        transform: rotate(30deg);
    }

    /* =========================
       LAPTOP / DESKTOP
    ========================= */

    @media (min-width: 1200px) {

        .gallery-page {
            display: flex;
            align-items: center;
            padding-top: 4vh;
            padding-bottom: 4vh;
        }

        .gallery-container {
            max-width: 1500px;
        }

        .gallery-grid {
            height: 66vh;
        }

    }

    /* =========================
       TABLET
    ========================= */

    @media (max-width: 900px) {

        .gallery-page {
            padding: 40px 5vw;
        }

        .gallery-grid {
            height: 550px;
            gap: 8px;
        }

        .gallery-caption {
            bottom: 10px;
            left: 10px;
        }

    }

    /* =========================
       MOBILE
    ========================= */

    @media (max-width: 600px) {

        .gallery-page {
            padding: 35px 18px;
        }

        .gallery-header {
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .eyebrow {
            font-size: 22px;
        }

        .gallery-title {
            font-size: 25px;
            letter-spacing: -.5px;
        }

        .instagram-link {
            font-size: 9px;
            padding-top: 12px;
        }

        .gallery-grid {
            height: auto;

            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: 190px 125px 125px 150px;

            gap: 9px;
        }

        .item-1 {
            grid-column: 1 / 3;
            grid-row: 1;
        }

        .item-2 {
            grid-column: 1;
            grid-row: 2;
        }

        .item-3 {
            grid-column: 2;
            grid-row: 2;
        }

        .item-4 {
            grid-column: 1;
            grid-row: 3;
        }

        .item-5 {
            grid-column: 2;
            grid-row: 3;
        }

        .item-6 {
            grid-column: 1 / 3;
            grid-row: 4;
        }

        .item-7 {
            grid-column: 1;
            grid-row: 5;
            height: 130px;
        }

        .item-8 {
            grid-column: 2;
            grid-row: 5;
            height: 130px;
        }

        .gallery-caption {
            bottom: 10px;
            left: 10px;
        }

        .caption-title {
            font-size: 13px;
        }

        .caption-description {
            font-size: 9px;
            margin-left: 20px;
        }

        .decoration-top {
            font-size: 55px;
        }

    }

    </style>
</head>

<body>

<main class="gallery-page">

    <!-- Decorative Elements -->

    <div class="decoration decoration-top">
        <i class="fa-brands fa-pagelines"></i>
    </div>

    <div class="decoration decoration-bottom">
        <i class="fa-brands fa-pagelines"></i>
    </div>

    <div class="gallery-container">

        <!-- HEADER -->

        <header class="gallery-header">

            <div class="header-text">

                <span class="eyebrow">Galeri</span>

                <h1 class="gallery-title">
                    Sudut-Sudut MGCR
                </h1>

            </div>

            <a href="https://www.instagram.com/" 
               target="_blank"
               class="instagram-link">

                <i class="fa-brands fa-instagram"></i>

                @mgcrcafe

                <i class="fa-solid fa-arrow-right"></i>

            </a>

        </header>


        <!-- GALLERY -->

        <section class="gallery-grid">

            <!-- 1. INDOOR AREA -->

            <a href="#" class="gallery-item item-1">

                <img
                    src="images/indoor.jpg"
                    alt="Indoor Area MGCR"
                >

                <div class="gallery-caption">

                    <h2 class="caption-title">
                        <i class="fa-solid fa-location-dot"></i>
                        Sudut favorit
                    </h2>

                </div>

            </a>


            <!-- 2. LATTE -->

            <a href="#" class="gallery-item item-2">

                <img
                    src="images/latte.jpg"
                    alt="Latte Art"
                >

                <div class="gallery-caption">

                    <h2 class="caption-title">
                        Little art corner
                    </h2>

                </div>

            </a>


            <!-- 3. BOOKSHELF -->

            <a href="#" class="gallery-item item-3">

                <img
                    src="images/bookshelf.jpg"
                    alt="Rak buku MGCR"
                >

                <div class="gallery-caption">

                    <h2 class="caption-title">
                        Our book corner
                    </h2>

                </div>

            </a>


            <!-- 4. ESPRESSO -->

            <a href="#" class="gallery-item item-4">

                <img
                    src="images/espresso.jpg"
                    alt="Proses pembuatan espresso"
                >

                <div class="gallery-caption">

                    <h2 class="caption-title">
                        Pesona espresso
                    </h2>

                </div>

            </a>


            <!-- 5. DRINKS -->

            <a href="#" class="gallery-item item-5">

                <img
                    src="images/drinks.jpg"
                    alt="Berbagai minuman MGCR"
                >

                <div class="gallery-caption">

                    <h2 class="caption-title">
                        Untuk banyak cerita
                    </h2>

                </div>

            </a>


            <!-- 6. WINDOW -->

            <a href="#" class="gallery-item item-6">

                <img
                    src="images/window.jpg"
                    alt="Area dekat jendela"
                >

                <div class="gallery-caption">

                    <h2 class="caption-title">
                        Cahaya pagi
                    </h2>

                </div>

            </a>


            <!-- 7. OUTDOOR -->

            <a href="#" class="gallery-item item-7">

                <img
                    src="images/outdoor.jpg"
                    alt="Area outdoor MGCR"
                >

                <div class="gallery-caption">

                    <h2 class="caption-title">
                        Ruang hijau
                    </h2>

                </div>

            </a>


            <!-- 8. MEMORIES -->

            <a href="#" class="gallery-item item-8">

                <img
                    src="images/memories.jpg"
                    alt="Dekorasi dan kenangan MGCR"
                >

                <div class="gallery-caption">

                    <h2 class="caption-title">
                        Dinding penuh kenangan
                    </h2>

                </div>

            </a>

        </section>

    </div>

</main>

</body>
</html>