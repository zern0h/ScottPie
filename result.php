<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Scott's Pi - Result</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
 <!-- MathJax JS -->
  <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

  <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
 


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-lg-0">
        <h1>Scott's Pi<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
       
      </nav><!-- .navbar -->
      <a class="btn-click" href="index.php">Back</a>
    

    </div>
  </header><!-- End Header -->

  <div style="display: none;">>
  <section id="home" class="home d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-4">
        <h2 class="col-lg-12 text-center" data-aos="fade-up">Calculate your Scott's Pi Value</h2>
        <div class="col-lg-7 order-1 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start"> 
            <p data-aos="fade-up"> <b> Scott's Pi </b> is given by: \[&pi; = {Po-Pe \over 100-Pe}\] where Po is the amount of observed agreement between observers/coders;
            <br>and, Pe is the amount of expected agreement between observers/coders.</p>
            <p data-aos="fade-up"> <b> Po is given by: </b> \[Po = {100-\text{Sum of %Difference}}\] \[Po = {100-&Sigma;\text{%}|ObsA-ObsB|}\]</p>
            <p data-aos="fade-up"> <b> Pe is given by: </b> \[Pe = {\text{Sum of Average %Difference}}\] \[Pe = { &Sigma;({ ObsA \times ObsB \over 100})}\]</p>
        </div>
        <div class="col-lg-5 order-2 order-lg-2 text-center text-lg-start">
        <h4 data-aos="fade-up" id="compute">Input Observation Values</h4>
        <form method="post" action="" onsubmit="<?php echo $_SERVER['PHP_SELF'];?>">

          <div class="form-group pt-5">
             <label> <span>Observation A:</span></label> 
            <input class="form-control" minlength=6 rows="4" name="ObsA" pattern="^[0-9]+(,[0-9]+)*$" autocomplete="off" required placeholder="Numbers (separate each value with a comma)"></input>
          </div>

          <div class="form-group py-5">
            <label> <span>Observation B:</span></label> 
           <input class="form-control" minlength=6 rows="4" name="ObsB" pattern="^[0-9]+(,[0-9]+)*$" autocomplete="off" required placeholder="Numbers (separate each value with a comma)"></input>
         </div>

         <button class="btn-click text-center" type="submit">Compute</button>
         
        </form>

        //Spreadsheet Upload
        
        <div class="mb-3">
          <label for="formFile" class="form-label">Default file input example</label>
          <input class="form-control" type="file" id="formFile">
        </div>

     


        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get input field value
            $obsA = htmlspecialchars($_REQUEST['ObsA']);
                
            }
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get input field value
            $obsB = htmlspecialchars($_REQUEST['ObsB']);
                
            }
            ?> 
          
      
      </div>
    </div>
  </section>

  </div>

  <main id="main" >

    <!-- ======= Result Section ======= -->
    <section id="result" class="result">
      <div class="container" data-aos="fade-up">

        <div class="section-header d-flex align-items-center justify-content-between ">
          <p>Generated  <span>Table</span></p>
          <button class="btn-export" onclick="ExportToExcel('xlsx')">Export Table</button>
        </div>
            <div class="pt-2"><?php  include 'table.php' ?></div>
            

    <script>
        function ExportToExcel(type, fn, dl) {
       var elt = document.getElementById('export_tab');
       var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });
       return dl ?
         XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }):
         XLSX.writeFile(wb, fn || ('ExportFile.' + (type || 'xlsx')));
    }
    </script>
        </div>

      </div>
    </section><!-- End Result Section -->

  </main><!-- End #main -->


  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="credits">
        Developed by <a href="#">Muh</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
 

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>

</html>
