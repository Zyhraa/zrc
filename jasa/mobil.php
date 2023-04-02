<?php include '../assets/header.php'; ?>
<link rel="stylesheet" href="../css/jasa.css?<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="../css/s_nav.css?<?php echo time(); ?>">
</head>

<body>
   <!-- ini nav -->
   <header>
      <div class="container-fluid">
         <div class="navb-items d-xl-flex">
            <div class="item">
               <a href="../home.php">Home</a>
            </div>
            <div class="item">
               <a href="../visimisi.php">Visi & Misi</a>
            </div>
            <div class="item">
               <a href="../team.php">Team</a>
            </div>
         </div>

         <!-- Button trigger modal -->
         <div class="mobile-toggler d-lg-none">
            <a href="#" data-bs-toggle="modal" data-bs-target="#navbModal">
               <i class="fas fa-bars"></i>
            </a>
         </div>

         <!-- Modal -->
         <div class="modal fade" id="navbModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">

                  <div class="modal-header">
                     <img src="assets/images/graylogo.png" alt="Logo" style="width:6em;">
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                  </div>

                  <div class="modal-body">

                     <div class="modal-line">
                        <i class="fa-solid fa-house"></i><a href="home.php">Home</a>
                     </div>

                     <div class="modal-line">
                        <i class="fa-solid fa-file-lines"></i><a href="visimisi.php">Visi & Misi</a>
                     </div>

                     <div class="modal-line">
                        <i class="fa-solid fa-user-group"></i><a href="team.php">Team</a>
                     </div>
                  </div>

                  <div class="mobile-modal-footer">
                     <a target="_blank" href="https://wa.me/0811336951"><i class="fa-brands fa-whatsapp"></i></a>
                     <a target="_blank" href="mailto:zadderoyalcrown@gmail.com"><i class="far fa-envelope"></i></a>
                     <a target="_blank" href="https://goo.gl/maps/qEYuiQUG6EHPAKC6A"><i class="fa-solid fa-map-location-dot"></i></a>
                  </div>
               </div>
            </div>
         </div>

      </div>
   </header>
   <!-- ini nav -->

   <div class="all">
      <div class="d-flex justify-content-center flex-column mt-5 pt-5 tengah">
         <h1 class="judulevent mt-5">Rental Mobil</h1>

         <div class="my-5 d-flex justify-content-center">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <img src="../assets/images/mobil1.jpg" alt="...">
                  </div>
                  <div class="carousel-item">
                     <img src="../assets/images/mobil2.jpg" alt="...">
                  </div>
                  <div class="carousel-item">
                     <img src="../assets/images/mobil3.png" alt="...">
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

         <div class="eventabout col-6 offset-3">
            <p>Kami menyediakan kendaraan berkualitas, terpelihara, nyaman dan bervariasi dengan pelayanan istimewa sesuai dengan kebutuhan anda</p>
         </div>
      </div>

   </div>
   <?php include '../assets/footer.php'; ?>