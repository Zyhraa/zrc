<?php include 'assets/header.php'; ?>
<link rel="stylesheet" type="text/css" href="css/s_nav.css">
<link rel="stylesheet" type="text/css" href="css/s_visimisi.css">
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


   <div class="bg-image d-flex flex-row vmm" style="background-image: url('assets/images/visibg.png'); background-size: cover;  background-repeat:no-repeat;">
      <div class="col-8 d-flex flex-column vm">
         <h1>VISI</h1>
         <p>Menjadi perusahaan yang berkembang dan bermanfaat untuk memenuhi kebutuhan klien atau mitra.</p>
         <h1>MISI</h1>
         <p>Produktif dalam membangun bisnis dan aset yang dimiliki secara terintegrasi guna memberikan manfaat dan pelayanan yang luas kepada klien atau mitra</p>

      </div>
   </div>

   <?php include 'assets/footer.php'; ?>