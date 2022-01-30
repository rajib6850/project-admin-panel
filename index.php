<?php 

  require 'config.php';


  $sql = "SELECT * FROM pages ORDER BY page_id DESC";
  $menu = $conn->query($sql);



?>

<!DOCTYPE html >
<html >
<head>
<title>PASTEL FLOWERS</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

  
<script src="./admin/js/jquery-3.6.0.min.js"></script>
<script src="./admin/js/custom.js"></script>


</head>
<body>
<div id="wrap">
  <div id="masthead">
    <h1>Your Company Name</h1>

    <div class="login-register">
      <a href="login.php">Login</a>
      <a href="register.php">Register</a>
    </div>
  </div>
  <div id="container">
    <div id="menu">
      <ul>

        <?php 

          while($menuList = $menu->fetch_object()) :?>


        <li><a href="<?php echo $menuList->pg_url; ?>"><?php echo strtoupper($menuList->pg_title); ?></a></li>

         <?php endwhile; ?>
      </ul>
    </div>
    <div id="sidebar">
      <h1>Side Content</h1>
      <div id="navcontainer">
        <ul>
          <li><a href="#">SNAPP HAPPY</a></li>
          <li><a href="#">OPEN DESIGNS</a></li>
          <li><a href="#">ANDREAS VIKLUND</a></li>
          <li><a href="#">JAMES KOSTER</a></li>
          <li><a href="#"> CSS PLAY</a></li>
          <li><a href="#">LISTAMATIC</a></li>
          <li><a href="#"> LAYOUTGALA</a></li>
          <li><a href="#"> BLUEROBOT</a></li>
        </ul>
      </div>
      <p><img class="right" src="images/img.jpg" alt="" /> Mauris ultricies neque nec augue. Aenean vehicula. Ut dictum. Vivamus placerat diam nec velit. Suspendisse ornare. Ut viverra. Mauris sagittis nisl sed ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Suspendisse est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Vivamus placerat metus eu urna. Etiam dictum. Aliquam eu dui eu ante euismod tristique. Donec posuere augue varius mi. Nunc erat ligula, ultrices eu, ultrices sed, sodales ut, magna. Mauris ultricies neque nec augue. </p>
    </div>


    <div id="content">


      <?php 
        if(isset($_GET['pg_url'])){
          $pg_url = $_GET['pg_url'];
          $pg_url_old = "?pg_url="."$pg_url";

          $sql = "SELECT * FROM pages WHERE pg_url = '$pg_url_old' " ;

          $content = $conn->query($sql);

          $content = $content->fetch_object();

        }else{
          $sql = "SELECT * FROM pages WHERE pg_url = 'index.php' " ;
          $content = $conn->query($sql);
          $content = $content->fetch_object();
        }

        echo htmlspecialchars_decode($content->pg_content);



      ?>




    </div>



  </div>
</div>
<div id="footer"> <a href="#">homepage</a> | <a href="#">contact</a> | <a href="http://validator.w3.org/check?uri=referer">html</a> | <a href="http://jigsaw.w3.org/css-validator">css</a> | &copy; 2007 Anyone | Design by <a href="http://www.mitchinson.net"> www.mitchinson.net</a><br/>
  This work is licensed under a <a rel="license" target="_blank" href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 License</a> </div>



  <script>

    jQuery(document).ready(function(){
      
      jQuery('#menu ul li a').click(function(){

        if(jQuery('#menu ul li a').hasClass('current')){
          jQuery('#menu li a').removeClass('current');
        }

        jQuery(this).addClass('current');
      })

    })

  </script>
</body>
</html>
