<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catalog Rental Mobil</title>
  <link rel="stylesheet" href="style1.css">
</head>
  </head>
  <body>
    <style>
      /* RESET */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Arial, sans-serif;
}

body {
  background-color: rgb(243, 233, 233);
}

/* NAVBAR */
nav {
  background: #8f4226;
  color: #fff;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 15px 50px;
}

nav .logo {
  font-size: 24px;
  font-weight: bold;
}

nav .nav-links {
  list-style: none;
  display: flex;
}

nav .nav-links li {
  margin-left: 20px;
}

nav .nav-links a {
  text-decoration: none;
  color: #fff;
  font-weight: 500;
}

nav .nav-links a:hover {
  color: #ffcc00;
}


/* HERO */
.hero {
  text-align: center;
  padding: 100px 20px;
    height: 550px; /* Adjust height as needed */
    background: url('Porsche\ gt3rs\ 911\ monochrome.jpeg') no-repeat center/cover;
    position: relative;
  color: hite;

}

.hero h1 {
  font-size: 40px;
  margin-bottom: 15px;
}

.hero p {
  margin-bottom: 20px;
  font-size: 18px;
}

.btn {
  background: #ffcc00;
  color: #8f4226;
  padding: 10px 20px;
  border-radius: 8px;
  text-decoration: none;
  font-weight: bold;
}

.btn:hover {
  background: #ff9900;
}
/* Divider Garis */
.divider {
  border: none;
  height: 50px;             /* tebal garis */
  width: 100%;              /* panjang garis */
  margin: 30px auto;       /* posisi tengah */
  background: linear-gradient(to right, #000000, #8f4226, #000000); 
 
}
/* KATALOG */
.catalog {
  padding: 60px 20px;
  text-align: center;
}

.catalog h2 {
  margin-bottom: 40px;
  font-size: 28px;
  color: #8f4226;
}

.product-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
}

.product-card {
  background: #fff;
  border: 1px solid #ddd;
  border-radius: 12px;
  padding: 20px;
  text-align: center;
  transition: 0.3s;
}

.product-card:hover {
  transform: scale(1.05);
  box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
}

.product-card img {
  max-width: 100%;
  border-radius: 8px;
  margin-bottom: 15px;
}

.product-card h3 {
  margin-bottom: 10px;
  font-size: 20px;
}

.product-card p {
  font-size: 16px;
  margin-bottom: 10px;
  font-weight: bold;
  color: #1B3C53;
}

.product-card button {
  background: #1B3C53;
  color: #fff;
  padding: 8px 15px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
}

.product-card button:hover {
  background: #ffcc00;
  color: #1B3C53;
  font-weight: bold;
}
/* Divider Garis */
.divider {
  border: none;
  height: 50px;             /* tebal garis */
  width: 100%;              /* panjang garis */
  margin: 30px auto;       /* posisi tengah */
  background: linear-gradient(to right, #000000, #000000, #000000); 
 
}
/* KONTAK */
.contact {
  background: #f4f4f4;
  padding: 50px 20px;
  text-align: center;
}

.contact h2 {
  margin-bottom: 20px;
  font-size: 28px;
  color: #1B3C53;
}

.contact a {
  color: #1B3C53;
  text-decoration: none;
}

.contact a:hover {
  color: #ff9900;
}

/* FOOTER */
footer {
  background: #8f4226;
  color: white;
  text-align: center;
  padding: 15px;
}

    </style>
    <!-- NAVBAR -->
    <nav>
      <div class="logo">HotWheels Rentcar</div>
      <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="page.php">Order Cars</a></li>
        <li><a href="dashboard.php">Dashboard</a></li>
      </ul>
    </nav>

    <!-- HERO -->
    <header class="hero">
      <h1>Koleksi Rentcars Terbaik Se Jaksel</h1>

      <a href="p2.html" class="btn">Order Rentcars</a>
    </header>
<div class="footer-divider"></div>
    <!-- Garis -->
<hr class="divider">
    <!-- KATALOG -->
    <section id="catalog" class="catalog">
      <h2>OURS SERVICE</h2>
      <div class="product-grid">
        <div class="product-card">
          <img src="CARS.jpeg" alt="HotWheels 1" />
        </div>
        <div class="product-card">
          <img src="Skyline.jpeg" alt="HotWheels 2" />
        </div>
        <div class="product-card">
          <img src="INTERIOR.jpeg" alt="HotWheels 3" />
        </div>
      </div>
    </section>
  <div class="footer-divider"></div>
    <!-- Garis -->
<hr class="divider">
    <!-- KONTAK -->
    <section id="contact" class="contact">
      <h2>Hubungi Kami</h2>
      <p>Untuk pemesanan, silakan hubungi:</p>
      <p>
        Email:
        <a href="mailto:hotwheels.Rentcar@gmail.com"
          >hotwheels.Rentcars@gmail.com</a
        >
      </p>
      <p>
        WhatsApp: <a href="https://wa.me/6281234567890">+62 812 3456 7890</a>
      </p>
    </section>

    <!-- FOOTER -->
    <footer>
      <p>&copy; 2025 HotWheels Rentcar. All Rights Reserved.</p>
    </footer>
  </body>
</html>
