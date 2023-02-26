<?php include '../assets/header.php'; ?>
<link rel="stylesheet" href="../css/perdagangan.css?<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="../css/s_nav.css?<?php echo time(); ?>">
</head>

<body>
   <!-- ini nav -->
   <header>
      <div class="container-fluid">
         <div class="navb-items d-none d-xl-flex">
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
                     <img src="assets/images/graylogo.png" alt="Logo">
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                  </div>

                  <div class="modal-body">

                     <div class="modal-line">
                        <i class="fa-solid fa-house"></i><a href="../home.php">Home</a>
                     </div>

                     <div class="modal-line">
                        <i class="fa-solid fa-file-lines"></i><a href="../visimisi.php">Visi & Misi</a>
                     </div>

                     <div class="modal-line">
                        <i class="fa-solid fa-user-group"></i><a href="../team.php">Team</a>
                     </div>
                  </div>

                  <div class="mobile-modal-footer">

                     <a target="_blank" href="#"><i class="fa-brands fa-instagram"></i></a>
                     <a target="_blank" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                     <a target="_blank" href="#"><i class="fa-brands fa-youtube"></i></a>
                     <a target="_blank" href="#"><i class="fa-brands fa-facebook"></i></a>
                  </div>
               </div>
            </div>
         </div>

      </div>
   </header>
   <!-- ini nav -->