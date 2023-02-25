<?php include '../assets/header.php'; ?>
<link rel="stylesheet" href="../css/event.css?<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="../css/s_nav.css?<?php echo time(); ?>">
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
                  <a class="nav-link" href="../home.php" style="color: white;">HOME</a>
               </li>
               <li class="nav-item mx-5">
                  <a class="nav-link" href="../visimisi.php" style="color: white;">VISI & MISI</a>
               </li>
               <li class="nav-item mx-5">
                  <a class="nav-link" href="../team.php" style="color: white;">TEAM</a>
               </li>
            </ul>
            </ul>
         </div>
      </div>
   </nav>
   <!-- ini nav -->
   <div class="all">
      <div class="d-flex justify-content-center flex-column mt-5 tengah">
         <h1 class="judulevent mt-5">Event Organizer</h1>

         <div class="picshowslide d-flex justify-content-center my-5">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
               <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
               </div>
               <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                     <img src="../assets/images/event1.jpg" alt="...">
                  </div>
                  <div class="carousel-item">
                     <img src="../assets/images/event2.jpg" alt="...">
                  </div>
                  <div class="carousel-item">
                     <img src="../assets/images/event3.jpg" alt="...">
                  </div>
               </div>
               <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
               </button>
               <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
               </button>
            </div>
         </div>

         <div class="eventabout col-6 offset-3 pb-5 mb-5">
            <p>Kami menyediakan jasa profesional dalam penyelenggaraan berbagai macam acara formal maupun non-formal. Kami dapat memenuhi ekspektasi klien untuk tercapainya acara yang baik dan lancar dibantu dengan pengalaman kami di bidang event organizing yang sudah bekerja sama dengan beberapa perusahaan.</p>
         </div>
      </div>


      <?php include '../assets/footer.php'; ?>
   </div>