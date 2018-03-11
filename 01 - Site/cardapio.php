<?php include_once "top.php" ?>
<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(img/background-new.png); background-attachment: fixed; background-repeat: no-repeat; background-size: cover;" title="Banner pagina de cardapio">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="banner-paginas">
               <h1 title="<?php echo $LANG['menu']['tip'] ?>" class="text-uppercase"><?php echo $LANG['cardapio']['menu_tittle'] ?></h1>
            </div>
         </div>
      </div>
   </div>
</section>
<!--End breadcrumb area-->
<section style="padding: 20px 0px">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="col-md-4 col-sm-4 "> 
               <div class="col-md-12">
                  <img src="img/pexels-photo-291528.jpeg" class="img-responsive" title="Imagem do produto categoria Bolos">
               </div>
               <div class="col-md-12" >
                  <a href="bolos.php">
                     <button title="<?php echo $LANG['bolosindex']['tip'] ?>" class="button-cardapio" ><?php echo $LANG['index']['bolosindex'] ?></button>
                  </a>
               </div>
            </div>
            <div class="col-md-4 col-sm-4"> 
               <div class="col-md-12">
                  <img src="img/pexels-photo-68903.jpeg" class="img-responsive" title="Imagem do produto categoria Doces">
               </div>
               <div class="col-md-12" >
                  <a href="doces.php">
                     <button title="<?php echo $LANG['docesindex']['tip'] ?>" class="button-cardapio" ><?php echo $LANG['index']['docesindex'] ?></button>
                  </a>
               </div>
            </div>
            <div class="col-md-4 col-sm-4"> 
               <div class="col-md-12">
                  <img src="img/pexels-photo-635409.jpeg" class="img-responsive" title="Imagem do produto categoria CupCake">
               </div>
               <div class="col-md-12" >
                  <a href="cup.php">
                     <button title="<?php echo $LANG['Cupcakeindex']['tip'] ?>" class="button-cardapio" ><?php echo $LANG['index']['Cupcakeindex'] ?></button>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php include_once "footer.php" ?>