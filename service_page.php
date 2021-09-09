<!DOCTYPE html>
<html lang="en">
   <!-- head -->
   <?php
      include './component/head.php'; 
      ?>
   <!-- head -->
   <body>
      <!-- header -->
      <?php
         include './component/header.php'; 
         ?>
      <!-- /header -->
      <!-- content -->
      <div class="content">
      <?php
         include './component/page/service_page/data.php'; 
         ?> 
         <?php
         include './component/page/service_page/cost.php'; 
         ?> 
      <?php
         include './component/page/home/banner.php'; 
         ?> 
      <!-- /content -->
      <!-- footer -->
      <?php
         include './component/footer.php'; 
         ?>   
      <!-- /footer -->              
   </body>
</html>