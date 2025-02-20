<?php include 'assets/header.php'; ?>
<link rel="stylesheet" href="css/s_team.css?<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="css/s_nav.css?<?php echo time(); ?>">
</head>

<body>
   <!-- ini nav -->
   <header>
      <div class="container-fluid">
         <div class="navb-items d-xl-flex">
            <div class="item">
               <a href="home.php">Home</a>
            </div>
            <div class="item">
               <a href="visimisi.php">Visi & Misi</a>
            </div>
            <div class="item">
               <a href="team.php">Team</a>
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
      <img src="assets/images/teamblock.png">
      <?php include 'assets/footer.php'; ?>
   </div>

   </div>