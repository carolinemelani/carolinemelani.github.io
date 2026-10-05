<?php

$products = [
    [
        "nama" => "Laptop",
        "kategori" => "Elektronik",
        "harga" => 7500000,
        "stok" => 5
    ],
    [
        "nama" => "Mouse",
        "kategori" => "Aksesoris",
        "harga" => 250000,
        "stok" => 10
    ],
    [
        "nama" => "Keyboard",
        "kategori" => "Aksesoris",
        "harga" => 2000000,
        "stok" => 10
    ],
    [
        "nama" => "Speaker Bluetooth",
        "kategori" => "Elektronik",
        "harga" => 1599000,
        "stok" => 5
    ],
    [
        "nama" => "Rice Cooker",
        "kategori" => "Elektronik",
        "harga" => 299000,
        "stok" => 5
    ],
    [
        "nama" => "Setrika",
        "kategori" => "Elektronik",
        "harga" => 200000,
        "stok" => 10
    ],
];

$totalProduk = count($products);

?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olin Store</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Navbar -->
    <nav>
        <div class="logo">Olin Store</div>
        <div class="nav-menu">
            <a href="#">Home</a>
            <a href="#produk">Produk</a>
            <a href="#tentang">Tentang</a>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero">
        <div class="hero-content">
            <h1>Olin Store</h1>
            <h2>Temukan Teknologi Pilihanmu</h2>
            <p>
                Olin Store menyediakan berbagai produk elektronik
                dan aksesoris untuk kebutuhan sehari-hari.
            </p>
            <a href="#produk" class="btn">Lihat Produk</a>
        </div>
    </section>

    <!-- Informasi Produk -->
    <section class="product-info">
        <h2>Informasi Produk</h2>
        <p>Jumlah Produk: <?= $totalProduk ?></p>
    </section>

    <!-- Katalog Produk -->
    <section class="produk" id="produk">
        <h2>Katalog Produk</h2>

        <div class="product-grid">
            <?php foreach ($products as $product) : ?>
                <?php
                    if ($product["harga"] >= 1000000) {
                        $diskon = $product["harga"] * 0.10;
                        $hargaAkhir = $product["harga"] - $diskon;
                    } else {
                        $diskon = 0;
                        $hargaAkhir = $product["harga"];
                    }
                ?>
                <div class="product-card">
                    <h3><?= $product["nama"] ?></h3>
                    <p><?= $product["kategori"] ?></p>
                    <p>Harga Normal: Rp <?= number_format($product["harga"], 0, ',', '.') ?></p>

                    <?php if ($diskon > 0) : ?>
                        <p>Diskon: 10%</p>
                        <p>Harga Setelah Diskon: Rp <?= number_format($hargaAkhir, 0, ',', '.') ?></p>
                    <?php else : ?>
                        <p>Harga: Rp <?= number_format($hargaAkhir, 0, ',', '.') ?></p>
                    <?php endif; ?>

                    <p>Stok: <?= $product["stok"] ?></p>

                    <?php if ($product["stok"] > 0) : ?>
                        <p class="stock tersedia">Tersedia</p>
                        <button>Beli Sekarang</button>
                    <?php else : ?>
                        <p class="stock habis">Stok Habis</p>
                        <button disabled>Beli Sekarang</button>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; <?= date("Y") ?> Olin Store. All rights reserved.</p>
    </footer>

</body>

</html>