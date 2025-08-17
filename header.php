
<script>
(function () {

  if (location.hash && !sessionStorage.getItem('vv_hash_fix')) {
   
    sessionStorage.setItem('vv_hash_fix', '1');
   
    location.reload();
  } else {
   
    sessionStorage.removeItem('vv_hash_fix');
  }
})();
</script>

<?php

$photoPath = 'img/profile.jpg';
if (!is_file($photoPath) || filesize($photoPath) === 0) {
  $photoPath = 'img/profile_placeholder.svg'; 
}


if (!isset($page_title)) { $page_title = 'Vijay Vaishnav — Portfolio'; }
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo htmlspecialchars($page_title); ?></title>

 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="img/logo.png">
</head>

<body class="bg-app text-light">

<div id="preloader" class="preloader">
  <div class="spinner"></div>
</div>


  <div class="top-bridge"></div>


<div class="mobile-topbar d-lg-none">
  <button class="btn btn-outline-light btn-sm" type="button"
          data-bs-toggle="offcanvas" data-bs-target="#mobileMenu"
          aria-controls="mobileMenu">
    <i class="bi bi-list fs-4"></i>
  </button>
  <div class="ms-2 fw-semibold">Menu</div>
</div>


<div class="offcanvas offcanvas-start bg-app text-light d-lg-none" tabindex="-1" id="mobileMenu">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title">Navigate</h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  <nav class="nav flex-column" id="mobileTopMenu">
  <a class="nav-link" href="#about"><i class="bi bi-person"></i> About</a>
  <a class="nav-link" href="#works"><i class="bi bi-grid"></i> Works</a>
  <a class="nav-link" href="#services"><i class="bi bi-gear"></i> Services</a>
  <a class="nav-link" href="#resume"><i class="bi bi-file-earmark-text"></i> Resume</a>
  <a class="nav-link" href="#skills"><i class="bi bi-stars"></i> Skills</a>
  <a class="nav-link" href="#blog"><i class="bi bi-journal-text"></i> Blog</a>
  <a class="nav-link" href="#contact"><i class="bi bi-send"></i> Contact</a>
</nav>

  </div>
</div>


  <section class="py-4 position-relative">
    <div class="container">
      <div class="row g-4">

       
        <div class="col-lg-4">
          <aside class="left-pane">
            
            <div class="profile-card">
              
             
           
              <div class="ratio ratio-4x3">
                <img src="<?php echo htmlspecialchars($photoPath); ?>" alt="Vijay Vaishnav" class="object-fit-cover">
              </div>

             
              <h2 class="mt-3 mb-1">Vijay Vaishnav</h2>
              
              <div class="sub-title text-uppercase tracking-wide">MACHINE LEARNING</div>

             
             <div class="d-flex justify-content-center gap-2 mt-2">
  <a class="btn btn-outline-secondary btn-sm rounded-pill" href="https://www.linkedin.com/in/vijayvaishnav1011/" target="_blank" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
  <a class="btn btn-outline-secondary btn-sm rounded-pill" href="https://github.com/vijayvaishnav1011" target="_blank" aria-label="GitHub"><i class="bi bi-github"></i></a>
  <a class="btn btn-outline-secondary btn-sm rounded-pill" href="https://www.youtube.com/@vijayvaishnav1011" target="_blank" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
  <a class="btn btn-outline-secondary btn-sm rounded-pill" href="mailto:contact@vijayvaishnav.com" aria-label="Email"><i class="bi bi-envelope"></i></a>
</div>


             
              <a class="btn btn-success-soft w-100 mt-3" href="cv/Vijay_Vaishnav_CV.pdf" download>
                <i class="bi bi-download me-2"></i>Download CV
              </a>
            </div>
          </aside>
        </div>

        <div class="col-lg-8">
          <div id="contentScroll"
               class="content-scroll"
               data-bs-spy="scroll"
               data-bs-target="#topMenu"
               data-bs-smooth-scroll="true"
               tabindex="0">

           
            <div class="pills-bar">
              <nav id="topMenu" class="nav nav-pills flex-wrap gap-2">
               
                <a class="nav-link" href="#about"><i class="bi bi-person"></i> <span class="d-none d-sm-inline">About</span></a>
                <a class="nav-link" href="#works"><i class="bi bi-grid"></i> <span class="d-none d-sm-inline">Works</span></a>
                <a class="nav-link" href="#services"><i class="bi bi-gear"></i> <span class="d-none d-sm-inline">Services</span></a>
                <a class="nav-link" href="#resume"><i class="bi bi-file-earmark-text"></i> <span class="d-none d-sm-inline">Resume</span></a>
                <a class="nav-link" href="#skills"><i class="bi bi-stars"></i> <span class="d-none d-sm-inline">Skills</span></a>
                <a class="nav-link" href="#blog"><i class="bi bi-journal-text"></i> <span class="d-none d-sm-inline">Blog</span></a>
                <a class="nav-link" href="#contact"><i class="bi bi-send"></i> <span class="d-none d-sm-inline">Contact</span></a>
              </nav>
            </div>

           



            