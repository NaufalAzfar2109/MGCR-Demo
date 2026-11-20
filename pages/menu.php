<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menu Favorit | Meteor Garden Cafe</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background: #fff9f2;
    color: #49352c;
    font-family: 'DM Sans', sans-serif;
}

/* MENU PAGE */
.menu-page {
    min-height: 100vh;
    padding: 55px 20px 35px;
    position: relative;
    overflow: hidden;
}

/* DECORATION */
.decoration {
    position: absolute;
    width: 65px;
    height: 65px;
    border: 4px solid #e5bd91;
    border-radius: 80% 0 80% 0;
    opacity: .12;
    pointer-events: none;
}

.decoration.top {
    top: 45px;
    right: -20px;
    transform: rotate(-35deg);
}

.decoration.bottom {
    bottom: 30px;
    left: -25px;
    transform: rotate(25deg);
}

/* HEADER */
.menu-header {
    text-align: center;
    position: relative;
    z-index: 1;
}

.eyebrow {
    font-family: 'Playfair Display', serif;
    font-size: 13px;
    font-style: italic;
    color: #bd874c;
}

.menu-header h1 {
    font-family: 'Playfair Display', serif;
    font-size: 30px;
    font-weight: 700;
    margin: 3px 0 7px;
}

.title-line {
    width: 55px;
    height: 1px;
    background: #c58b51;
    margin: 0 auto 10px;
}

.menu-header p {
    color: #a99a8e;
    font-size: 10px;
    line-height: 1.8;
}

/* CATEGORY FILTER */
.category-filter {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 7px;
    margin: 25px auto 20px;
}

.filter-btn {
    background: #f5eadc;
    border: none;
    border-radius: 30px;
    padding: 9px 17px;
    color: #876a51;
    font-family: inherit;
    font-size: 10px;
    cursor: pointer;
    transition: .3s;
}

.filter-btn:hover,
.filter-btn.active {
    background: #d9a66c;
    color: white;
}

/* PRODUCT GRID */
.menu-container {
    max-width: 810px;
    margin: auto;
    position: relative;
    z-index: 1;
}

.menu-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 14px;
}

/* PRODUCT CARD */
.menu-card {
    background: #fffdf9;
    border: 1px solid #f1e9e0;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 3px 9px rgba(91, 63, 39, .05);
    transition: .3s;
}

.menu-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 7px 15px rgba(91, 63, 39, .10);
}

.menu-image {
    height: 145px;
    position: relative;
    overflow: hidden;
    background: #f8efe4;
}

.menu-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: .4s;
}

.menu-card:hover .menu-image img {
    transform: scale(1.05);
}

.badge {
    position: absolute;
    top: 9px;
    left: 9px;
    background: #d9a66c;
    color: white;
    font-size: 8px;
    font-weight: 700;
    padding: 5px 9px;
    border-radius: 20px;
}

/* PRODUCT INFO */
.menu-content {
    padding: 12px;
}

.menu-title {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 5px;
}

.menu-title h3 {
    font-family: 'Playfair Display', serif;
    font-size: 12px;
    font-weight: 700;
}

.price {
    font-size: 10px;
    font-weight: 700;
    white-space: nowrap;
}

.description {
    margin-top: 7px;
    color: #a3978b;
    font-size: 9px;
    line-height: 1.7;
}

/* FOOTER */
.menu-footer {
    text-align: center;
    margin-top: 30px;
}

.more-button {
    display: inline-block;
    padding: 10px 23px;
    border: 1px solid #9d7050;
    border-radius: 30px;
    text-decoration: none;
    color: #49352c;
    font-size: 10px;
    font-weight: 600;
    transition: .3s;
}

.more-button:hover {
    background: #9d7050;
    color: white;
}

.menu-footer p {
    color: #b5a69a;
    font-size: 8px;
    margin-top: 12px;
}

/* FILTER ANIMATION */
.menu-card.hidden {
    display: none;
}

/* TABLET */
@media (max-width: 650px) {
    .menu-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .menu-image {
        height: 130px;
    }
}

/* MOBILE */
@media (max-width: 400px) {
    .menu-page {
        padding: 40px 15px 25px;
    }

    .menu-header h1 {
        font-size: 23px;
    }

    .menu-header p {
        font-size: 9px;
    }

    .menu-grid {
        gap: 10px;
    }

    .menu-image {
        height: 105px;
    }

    .menu-content {
        padding: 9px;
    }

    .menu-title h3 {
        font-size: 10px;
    }

    .price {
        font-size: 8px;
    }

    .description {
        font-size: 8px;
    }

    .filter-btn {
        padding: 8px 12px;
        font-size: 9px;
    }
}
</style>
</head>

<body>

<main class="menu-page">

    <div class="decoration top"></div>
    <div class="decoration bottom"></div>

    <!-- HEADER MENU -->
    <header class="menu-header">
        <span class="eyebrow">Menu Favorit</span>

        <h1>Yang Paling Sering Dicari</h1>

        <div class="title-line"></div>

        <p>
            Dari espresso sampai dessert, semuanya dibuat untuk kamu<br>
            yang suka rasa dan suasana yang istimewa.
        </p>
    </header>

    <!-- FILTER KATEGORI -->
    <nav class="category-filter">
        <button class="filter-btn active" data-filter="all">
            ✦ Semua
        </button>

        <button class="filter-btn" data-filter="kopi">
            ☕ Kopi
        </button>

        <button class="filter-btn" data-filter="non-kopi">
            ♡ Non-kopi
        </button>

        <button class="filter-btn" data-filter="makanan">
            ✦ Makanan
        </button>

        <button class="filter-btn" data-filter="dessert">
            ♡ Dessert
        </button>
    </nav>

    <!-- DAFTAR MENU -->
    <section class="menu-container">
        <div class="menu-grid">

            <!-- MENU 1 -->
            <article class="menu-card" data-category="kopi">
                <div class="menu-image">
                    <img src="https://images.unsplash.com/photo-1517701604599-bb29b565090c?w=600"
                         alt="Kopi Susu Gula Aren">
                    <span class="badge">BEST SELLER</span>
                </div>

                <div class="menu-content">
                    <div class="menu-title">
                        <h3>Kopi Susu Gula Aren</h3>
                        <span class="price">Rp18.000</span>
                    </div>
                    <p class="description">
                        Espresso, susu segar, dan gula aren asli.
                        Manisnya pas, tanpa gula berlebihan.
                    </p>
                </div>
            </article>

            <!-- MENU 2 -->
            <article class="menu-card" data-category="kopi">
                <div class="menu-image">
                    <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?w=600"
                         alt="Cappuccino">
                </div>

                <div class="menu-content">
                    <div class="menu-title">
                        <h3>Cappuccino</h3>
                        <span class="price">Rp22.000</span>
                    </div>
                    <p class="description">
                        Espresso dan microfoam lembut dengan latte art.
                        Racikan signature barista.
                    </p>
                </div>
            </article>

            <!-- MENU 3 -->
            <article class="menu-card" data-category="kopi">
                <div class="menu-image">
                    <img src="https://images.unsplash.com/photo-1461023058943-07fcbe16d735?w=600"
                         alt="Latte Caramel">
                </div>

                <div class="menu-content">
                    <div class="menu-title">
                        <h3>Latte Caramel</h3>
                        <span class="price">Rp24.000</span>
                    </div>
                    <p class="description">
                        Perpaduan susu dengan espresso,
                        karamel homemade dan sentuhan vanilla.
                    </p>
                </div>
            </article>

            <!-- MENU 4 -->
            <article class="menu-card" data-category="kopi">
                <div class="menu-image">
                    <img src="https://images.unsplash.com/photo-1442512595331-e89e73853f31?w=600"
                         alt="Kopi Tubruk">
                </div>

                <div class="menu-content">
                    <div class="menu-title">
                        <h3>Kopi Tubruk MGCR</h3>
                        <span class="price">Rp15.000</span>
                    </div>
                    <p class="description">
                        Kopi lokal dengan karakter rasa
                        autentik dan aroma yang khas.
                    </p>
                </div>
            </article>

            <!-- MENU 5 -->
            <article class="menu-card" data-category="kopi">
                <div class="menu-image">
                    <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=600"
                         alt="Americano">
                </div>

                <div class="menu-content">
                    <div class="menu-title">
                        <h3>Americano</h3>
                        <span class="price">Rp20.000</span>
                    </div>
                    <p class="description">
                        Double shot espresso dengan air panas.
                        Ringan, bersih, dan nikmat.
                    </p>
                </div>
            </article>

            <!-- MENU 6 -->
            <article class="menu-card" data-category="kopi">
                <div class="menu-image">
                    <img src="https://images.unsplash.com/photo-1461023058943-07fcbe16d735?w=600"
                         alt="Cold Brew">
                    <span class="badge">BARU</span>
                </div>

                <div class="menu-content">
                    <div class="menu-title">
                        <h3>Cold Brew MGCR</h3>
                        <span class="price">Rp23.000</span>
                    </div>
                    <p class="description">
                        Cold brew dengan ekstraksi 18 jam.
                        Smooth, sedikit acidity dan refreshing.
                    </p>
                </div>
            </article>

        </div>
    </section>

    <!-- FOOTER MENU -->
    <footer class="menu-footer">
        <a href="#" class="more-button">
            Lihat Semua Menu &nbsp; →
        </a>

        <p>
            Menu lengkap tersedia saat berkunjung.
            Harga dapat berubah sewaktu-waktu.
        </p>
    </footer>

</main>

<script>
const buttons = document.querySelectorAll('.filter-btn');
const cards = document.querySelectorAll('.menu-card');

buttons.forEach(button => {
    button.addEventListener('click', () => {

        buttons.forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');

        const filter = button.dataset.filter;

        cards.forEach(card => {
            const category = card.dataset.category;

            if (filter === 'all' || category === filter) {
                card.classList.remove('hidden');
            } else {
                card.classList.add('hidden');
            }
        });

    });
});
</script>

</body>
</html>