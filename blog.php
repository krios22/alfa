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
         include './component/page/blog/head.php'; 
         ?> 
         <?php
         include './component/page/blog/news_list.php'; 
         ?>
          <?php
         include './component/pagination.php'; 
         ?>
    <?php
         include './component/page/blog/subscribe.php'; 
         ?>
     
         </div> 
      <!-- /content -->
      <!-- footer -->
      <?php
         include './component/footer.php'; 
         ?>   
      <!-- /footer -->              
   </body>
</html>