<?php include 'assets/header.php'; ?>
<link rel="stylesheet" type="text/css" href="css/nav.css">
<link rel="stylesheet" type="text/css" href="css/team.css">
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

   <div class="bg-image" style="background-image: url('assets/images/teambg.png'); background-size: cover;  background-repeat:no-repeat;  text-align: center;">
      <img src="assets/images/teamblock.png" style="width: 50vw; height: auto; margin: 5vh;">
   </div>

   <?php include 'assets/footer.php'; ?>