<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include("include/header.php");?>
  </head>
  <body>    

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
         <?php include("include/menu.php");?>
      <!-- END MENU -->    
    </header>
    <!--=========== END HEADER SECTION ================--> 

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="imgBanner">
      <h2>Gallery</h2>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN GALLERY SECTION ================-->
    <section id="gallery">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div id="gallerySLide" class="gallery_area">
              <?php
              $select_gallery = mysql_query("SELECT * FROM gallery");
              while($rows_gallery = mysql_fetch_assoc($select_gallery)){

                  $title = $rows_gallery['title'];
                  $path = $rows_gallery['path'];

                echo '
              <a href="admin/'.$path.'" title="'.$title.'">
                  <img class="gallery_img" src="admin/'.$path.'" alt="img" />
                <span class="view_btn">View</span>
                </a>
                  ';
              }
              ?>
                


            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END GALLERY SECTION ================-->
    
    <!--=========== BEGIN FOOTER SECTION ================-->
    <footer id="footer">
      <!-- Start footer top area -->
        <?php include("include/footer.php");?>
      <!-- End footer bottom area -->

    </footer>
    <!--=========== END FOOTER SECTION ================--> 

         <?php include("include/bottom.php");?>
    <!-- Custom js-->
    <script src="js/custom.js"></script>
 

  </body>
</html>