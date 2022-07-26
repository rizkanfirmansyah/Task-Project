<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="/" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="/home/assets/img/logo.png" alt=""> -->
            <h1>Pajak.IN</h1>
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="<?= route('homepage') ?>" class="active">Beranda</a></li>
                <li><a href="<?= route('homepage-about') ?>">Tentang Kami</a></li>
                <li><a href="<?= route('homepage-service') ?>">Layanan Kami</a></li>
                <li><a href="<?= route('homepage-contact') ?>">Kontak Kami</a></li>
                <li><a class="get-a-quote" href="<?= route('homepage-register') ?>">Daftar</a></li>
            </ul>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
<!-- End Header -->
