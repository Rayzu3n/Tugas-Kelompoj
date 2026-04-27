<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container mt-3 mb-3">
            <a class="navbar-brand" href="#">TokoKu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                    <li class="nav-item ms-2">
                        <form action="konek.php" method="POST">
                            <input type="hidden" name="logout" value="1">
                            <button type="submit" class="btn btn-outline-light btn-sm">Logout</button>
                        </form>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Banner -->
    <section class="vh-100">
        <section class="banner">
            <h1>Selamat Datang di TokoKu</h1>
            <p>Temukan produk terbaik dengan harga terjangkau</p>
            <button>Belanja Sekarang</button>
        </section>

        <!-- Produk -->
        <section class="produk">
            <h2>Produk Terbaru</h2>
            <div class="produk-container">

                <div class="card">
                    <img src="https://via.placeholder.com/150" alt="Produk 1">
                    <h3>Produk 1</h3>
                    <p>Rp 100.000</p>
                    <button>Beli</button>
                </div>

                <div class="card">
                    <img src="https://via.placeholder.com/150" alt="Produk 2">
                    <h3>Produk 2</h3>
                    <p>Rp 150.000</p>
                    <button>Beli</button>
                </div>

                <div class="card">
                    <img src="https://via.placeholder.com/150" alt="Produk 3">
                    <h3>Produk 3</h3>
                    <p>Rp 200.000</p>
                    <button>Beli</button>
                </div>

            </div>
        </section>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2026 TokoKu. All rights reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>