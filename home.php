<?php include 'assets/header.php'; ?>
<link rel="stylesheet" href="css/s_home.css?<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="css/s_nav.css?<?php echo time(); ?>">
</head>

<body>
   <!-- ini nav -->
   <nav class="navbar navbar-expand-lg fs-4">
      <div class=" container-fluid">
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
               <li class="nav-item mx-5">
                  <a class="nav-link" href="home.php" style="color: white;">HOME</a>
               </li>
               <li class="nav-item mx-5">
                  <a class="nav-link" href="visimisi.php" style="color: white;">VISI & MISI</a>
               </li>
               <li class="nav-item mx-5">
                  <a class="nav-link" href="team.php" style="color: white;">TEAM</a>
               </li>
            </ul>
            </ul>
         </div>
      </div>
   </nav>
   <!-- ini nav -->


   <div class="bg-image test" style="background-image: url('assets/images/homebg2.png'), url('assets/images/home1.png'); background-size: cover;  background-repeat:no-repeat;">
      <div class="text-center">
         <div class="d-flex justify-content-center">
            <img class="mb-3 pt-5 mt-5" src="assets/images/logogold.png" width="300px">
         </div>
         <p class="ptDesc col-8 offset-2 mb-5">PT. Zadde Royal Crown, terletak di jakarta, merupakan perusahaan yang bergerak di bidang jasa dan pelayanan umum dengan solusi yang inovatif dan kreatif kepada klien kami dan selalu mengedepankan mutu serta kepercayaan demi kelangsungan bisnis yang harmonis dan berkelanjutan.</p>
      </div>
      <div class="jasa">
         <h1 class="mb-5">Our Services</h1>
         <div class="hexagon">
            <div class="hex hex1 hex4" style="background-image: url(assets/images/jasa1.png);">
               <div class="shadow"><a href="jasa/#.html">
                     <p>judul jasa</p>
                     <p class="tomboljasa"> tombol</p>
                  </a></div>
            </div>
            <div class="hex hex3" style="background-image: url(assets/images/jasa2.png);">
               <div class="shadow"><a href="jasa/#.html">
                     <p>judul jasa</p>
                     <p class="tomboljasa"> tombol</p>
                  </a></div>
            </div>
            <div class="hex hex2 hex3" style="background-image: url(assets/images/jasa3.png);">
               <div class="shadow"><a href="jasa/#.html">
                     <p>judul jasa</p>
                     <p class="tomboljasa"> tombol</p>
                  </a></div>
            </div>
            <div class="hex hex2 hex3 hex4" style="background-image: url(assets/images/jasa4.png);">
               <div class="shadow"><a href="jasa/#.html">
                     <p>judul jasa</p>
                     <p class="tomboljasa"> tombol</p>
                  </a></div>
            </div>
            <div class="hex hex2 hex3" style="background-image: url(assets/images/jasa5.png);">
               <div class="shadow"><a href="jasa/#.html">
                     <p>judul jasa</p>
                     <p class="tomboljasa"> tombol</p>
                  </a></div>
            </div>
            <div class="hex hex1 hex2 hex3" style="background-image: url(assets/images/jasa6.png);">
               <div class="shadow"><a href="jasa/#.html">
                     <p>judul jasa</p>
                     <p class="tomboljasa"> tombol</p>
                  </a></div>
            </div>
            <div class="hex hex2 hex3 hex4" style="background-image: url(assets/images/jasa7.png);">
               <div class="shadow"><a href="jasa/#.html">
                     <p>judul jasa</p>
                     <p class="tomboljasa"> tombol</p>
                  </a></div>
            </div>
         </div>
         <div class="whyus">
            <h1>Kenapa pilih kami?</h1>
            <p>Karena kami adalah pilihan utama dalam memberikan solusi inovatif kreatif dan terpercaya, memberikan kontribusi yang melebihi dari harapan klien atau mitra melalui pelayanan istimewa secara profesional dan intergritas penuh.</p>
         </div>
      </div>
   </div>

   <?php include 'assets/footer.php'; ?>