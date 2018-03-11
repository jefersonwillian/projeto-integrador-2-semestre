<?php include_once "top.php" ?>

<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(img/background-new.png); background-attachment: fixed; background-repeat: no-repeat; background-size: cover;" title="Banner pagina quem somos">
   <div class="container">
       <div class="row">
           <div class="col-md-12">
               <div class="banner-paginas">
                   <h1 title="<?php echo $LANG['about_tittle']['tip']?>" class="text-uppercase"><?php echo $LANG['sobre']['about_tittle'] ?></h1>
               </div>
           </div>
       </div>
   </div>
</section>
<!--End breadcrumb area-->

<!-- PART1 -->
<section class="style-section-2">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="col-md-6 col-sm-12">
               <h3 class="text-uppercase title-home"><span>Doce</span> Corradini</h3>
               <p title="<?php echo $LANG['sobhistory1']['tip']?>" class="text-justify">
                  <?php echo $LANG['sobre']['sobhistory1'] ?>               
               </p>
            </div>
            <div class="col-md-6 col-sm-12 esp-top" align="center" style="padding-top: 65px;">
               <img src="img/sobre.jpeg" class="img-responsive" title="Imagem dos doces da Dolci Corradini">
            </div>
            <div class="col-sm-12 esp-top">
               <div class="col-md-4 col-sm-4">
                  <div class="col-sm-12">
                     <h1 title="<?php echo $LANG['mission_tittle']['tip']?>" class="text-center title-home"><?php echo $LANG['sobre']['mission_tittle']?></h1>
                  </div>
                  <div class="col-sm-12">
                     <p title="<?php echo $LANG['mission_history']['tip']?>" class="text-justify">
                       <?php echo $LANG['sobre']['mission_history']?>
                     </p>    
                  </div>
               </div>
               <div class="col-md-4 col-sm-4">
                  <div class="col-sm-12">
                     <h1 title="<?php echo $LANG['vision_tittle']['tip']?>" class="text-center title-home"><?php echo $LANG['sobre']['vision_tittle']?></h1>
                  </div>
                  <div class="col-sm-12">
                     <p title="<?php echo $LANG['vision_history']['tip']?>" class="text-justify">
                        <?php echo $LANG['sobre']['vision_history']?>
                     </p>    
                  </div>
               </div>
               <div class="col-md-4 col-sm-4 ">
                  <div class="col-sm-12">
                     <h1 title="<?php echo $LANG['values_tittle']['tip']?>" class="text-center title-home"><?php echo $LANG['sobre']['values_tittle']?></h1>
                  </div>
                  <div class="col-sm-12">
                     <p title="<?php echo $LANG['values_history']['tip']?>" class="text-justify">
                         <?php echo $LANG['sobre']['values_history']?>
                     </p>    
                  </div>
               </div>             
            </div>
         </div>
      </div>
   </div>
</section>
<!-- PART1 -->
<!--- PART2 -->
<?php include_once "footer.php" ?>
