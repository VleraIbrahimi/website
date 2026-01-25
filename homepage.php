<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>MaternéPharma - Home</title>
      <link rel="stylesheet" href="homestyle.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
      <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

</head>
<body>

  <header>
    <div class="container header-inner">
      <div class="logo">
        <a href="#"><img src="LOGO.png" alt="Materné Logo" /></a>
      </div>

      <nav class="nav-menu">
        <ul>
          <li><a href="#"><b>Home</b></a></li>
          <li><a href="dermakozmetike.html"><b>DermaKozmetike</b></a></li>
          <li><a href="mombliss.html"><b>Mom&Baby</b></a></li>
          <li><a href="aboutus.html"><b>About Us</b></a></li>
        </ul>
      </nav>
      <div class="header-icons">
        <i id="ikona-kerkimit" class="fa-solid fa-magnifying-glass"></i>
        <a href="loginform.html"><i class="fa-solid fa-user"></i></a>
        <i class="fa-solid fa-cart-shopping"></i>
      </div>
    </div>
  </header>

  <div class="carousel">
  <img src="carosel3.png" class="active">
  <img src="carosel2.jpg">
  <img src="carosel1.png">
</div>

 <script>
  document.addEventListener("DOMContentLoaded", () => {
    const slides = document.querySelectorAll('.carousel img');
    let currentIndex = 0;

    function showSlide(index) {
      slides.forEach((slide, i) => {
        slide.classList.toggle('active', i === index);
      });
    }

    function nextSlide() {
      currentIndex = (currentIndex + 1) % slides.length;
      showSlide(currentIndex);
    }

    setInterval(nextSlide, 3000);
  });
</script>



  <div class="metodat">
  <div class="metod-item">
    <img src="payment.png" alt="">
    <span>PAYMENT METHODS<br>CASH / CARD</span>
  </div>

  <div class="metod-item">
    <img src="terheqja.png" alt="">
    <span>RETREAT TO BLISS<br>PHARMACY</span>
  </div>

  <div class="metod-item">
    <img src="dergesa.png" alt="">
    <span>SHIPPING TO ALBANIA,<br>KOSOVO & MACEDONIA</span>
  </div>

  <div class="metod-item">
    <img src="instagram.png" alt="">
    <span><a href="#">FOLLOW US ON<br>INSTAGRAM</a></span>
  </div>

</div>

<!-- RRETHORE -->
<section class="rrethore">
<div class="container">

  <div class="rrethore-layout">

    <div class="teksti">
    <h4>Artikuj të domosdoshëm,<br> të përzgjedhur çdo muaj</h4>
    </div>

     <div class="rrethore-grid">
     <div class="rrethore-item">
     <img src="hidratues.png">
      <h4>Hidratues</h4>
      </div>

      <div class="rrethore-item">
      <img src="SPF.png">
      <h4>SPF</h4>
      </div>

      <div class="rrethore-item">
      <img src="pastedhembesh.png">
      <h4>Paste dhembesh</h4>
      </div>

      <div class="rrethore-item">
      <img src="shampo.png">
      <h4>Shampo</h4>
      </div>

      <div class="rrethore-item">
      <img src="skincare.png">
      <h4>Skincare</h4>
      </div>
      </div>

    </div>
  </div>
</section>


 <!--Products -->
  <section class="kategoria">
    <div class="container">
      <div class="kategoria-grid">
        <div class="kategoria-item">
          <a href="dermakozmetike.html">
          <img src="dermokozmetike1.jpg" alt="Category 1" />
          </a>
        </div>

        <div class="kategoria-item">
          <a href="mombliss.html">
          <img src="mom.png" alt="Category 2" />
          </a>
        </div>

        <div class="kategoria-item">
          <a href="suplimente.html">
          <img src="supplements.jpg" alt="Category 3" />
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- RRETHORE -->
<section class="rrethore">
<div class="container">

  <div class="rrethore-layout">

    <div class="teksti">
    <h4>Artikuj të domosdoshëm,<br> të përzgjedhur çdo muaj</h4>
    </div>

     <div class="rrethore-grid">
     <div class="rrethore-item">
     <img src="bath time.png">
      <h4>Bath Time</h4>
      </div>

      <div class="rrethore-item">
      <img src="diapers.png">
      <h4>Pelena</h4>
      </div>

      <div class="rrethore-item">
      <img src="breastfeading.png">
      <h4>Gjidhenie</h4>
      </div>

      <div class="rrethore-item">
      <img src="shendeti.png">
      <h4>Shendeti</h4>
      </div>

      <div class="rrethore-item">
      <img src="foodprep.png">
      <h4>Food Prep</h4>
      </div>
      </div>

    </div>
  </div>
</section>


<!----katror2-->
   <section class="kategoria">
    <div class="container"></div>
      <div class="kategoria-grid">
        <div class="kategoria-item">
          <a href="babyfood.html">
          <img src="babyfoood.jpg" alt="Category 1" />
          </a>
        </div>

        <div class="kategoria-item">
          <a href="pregnancy.html">
          <img src="pregnancy.jpg" alt="Category 2" />
          </a>
        </div>

        <div class="kategoria-item">
          <a href="babyhygiene.html">
          <img src="babyhygine.jpg" alt="Category 3" />
          </a>
        </div>
      </div>
    </div>
  </section>


  <!-- Products / New Arrivals -->
  <section class="products">
    <div class="container">
      <h2>Arritje te reja</h2>

      <div class="products-grid">
        <div class="product-card">
          <a href="home1.html">
          <img src="maqine.png" alt="Product 1" />
          <p>Babymoov Nutribaby One 4-in-1 Food Prep Maker – Qelqi</p>
          <h3>€50.90</h3>
          </a>
        </div>
        <div class="product-card">
          <a href="home2.html">
          <img src="set.png" alt="Product 2" />
          <p>Moonkie First Bites Gift Set</p>
          <h3>€120.00</h3>
          </a>
        </div>
        <div class="product-card">
          <a href="home3.html">
          <img src="jastek.png" alt="Product 3" />
          <p>Momcozy Adjustable Nursing Pillow– Muted/Pink</p>
          <h3>€75.63</h3>
          </a>
        </div>
        <div class="product-card">
          <a href="home4.html">
          <img src="krem.png" alt="Product 3" />
          <p>Embryolisse Lait-Crème Retinol-Like 75 ml</p>
          <h3>€25.50</h3>
          </a>
        </div>
      </div>
    </div>
  </section>

 <!---<div class="video-wrap">
    <video controls poster="videoposter2.jpg">
      <source src="5 FIRST TIME MOM MISTAKES TO AVOID During Pregnancy + Labor - Bridget Teyler (1080p, h264, youtube).mp4" type="video/mp4">
    </video>
  </div>

  <div class="video-wrap">
    <video controls poster="vvideoposter3.jpg">
      <source src="21 NEWBORN ESSENTIALS  things I wish I knew as a first time mum! - Sarahs Day (1080p, h264, youtube).mp4" type="video/mp4">
    </video>
  </div>

  <div class="video-wrap">
    <video controls poster="videoposter4.jpg">
      <source src="Foods to Avoid During Pregnanacy, and WHAT TO EAT instead. - Diana In The Pink (1080p, h264, youtube).mp4" type="video/mp4">
    </video>
  </div>

</div>-->


<footer id="main-footer">
  <section class="footer">
    <div class="teksti">
      <h2>Farmacia e Familjes!</h2>
      <p>Ne jemi ketu per te ju ndihmuar. Na kontaktoni.</p>
    </div>
    <div class="pjesa1">
      <ul>
        <li type="none"> <b>Adresa dhe Orari</b></li>
        <li type="none">Prishtine,Kosova</li>
        <li type="none">E hene-E Dielle</li>
        <li type="none">08:00-22:00</li>
      </ul>
    </div>

    <div class="pjesa1">
      <ul>
        <li type="none"> <b>Kontakti</b></li>
        <li type="none">+383 44123456</li>
        <li type="none">Info@maternepharama.ks</li>
      </ul>
    </div>

    <div class="pjesa1">
      <ul>
        <li type="none"><b>Rrjetet sociale</b></li>
        <li type="none"><a href="https://www.instagram.com/ubt_official/?hl=en">Instagram</a></li>
        <li type="none"><a href="https://www.tiktok.com/@ubt.official">TikTok</a></li>
      </ul>
    </div>

  

  <!-- Footer -->
  </section>
  <footer id="footer-inn">
      <div class="footer-inner">
        <div class="footer-links">
          <a href="#">Privacy Policy</a>
          <a href="#">Terms of Service</a>
        </div>
        <p><sub></sub>&copy;MaternéPharma 2025 . All rights reserved.</sub></p>
      </div>
    </footer>
</footer>
</body>
</html>