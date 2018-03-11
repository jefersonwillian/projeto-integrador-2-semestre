<?php include_once "top.php" ?>
<!-- IMAGEM BANNER -->
<section class="">
   <div>
      <img class="img-banner-home" src="<?php echo $LANG['index']['img-banner']?>" title="Banner Home, Imagem do Bolo com o Logo da Dolci Corradini"> 
   </div>
</section>
<!-- IMAGEM BANNER -->
<!-- PART1 -->
<section class="style-section-2">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="col-md-6 col-sm-12">
               <div class="col-md-12">
                  <h3 class="text-uppercase title-home"><span>Dolci</span> Corradini</h3>
                  <p title="<?php echo $LANG['indhistory1']['tip']?>" class="text-justify">
                     <?php echo $LANG['index']['indhistory1']?>
                  </p>
               </div>
               <div class="col-md-12 button-sobre-home hidden-sm hidden-xs" align="center">
                  <a href="sobre.php?lang=<?php echo $LANG['lang']['this']?>">
                     <button title="<?php echo $LANG['button_know']['tip']?>"><?php echo $LANG['index']['button_know']?></button>
                  </a>
               </div>
            </div>
            <div class="col-md-6 col-sm-12 esp-top img-home-sobre" align="center">
               <img src="img/sobre.jpeg" class="img-responsive" title="Imagem dos produtos da Dolci Corradini">
            </div>
            <div class="col-md-12 button-sobre-home hidden-md hidden-lg" align="center">
               <a href="sobre.php?lang=<?php echo $LANG['lang']['this']?>">
                  <button title="<?php echo $LANG['button_know']['tip']?>"><?php echo $LANG['index']['button_know']?></button>
               </a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- PART1 -->
<!--- PART2 -->
<section class="style-section-2 subscribe-cardapio">
   <div class="container">
      <div class="row">
         <div class="col-md-12 text-center">
            <h3 title="<?php echo $LANG['tittle_cardapio']['tip']?>" class="text-center text-uppercase title-cardapio"><?php echo $LANG['index']['tittle_cardapio']?></h3>
         </div>
         <div class="col-md-12 img-editi">
            <div class="col-md-4 col-sm-4" align="center">          
               <div class="col-md-12">
                  <img src="img/pexels-photo-291528.jpeg" class="img-responsive img-home" title="Imagem do produto categoria Bolo">
               </div>
               <div class="col-md-12 button-cardapio-home" align="center">
                  <a href="bolos.php?lang=<?php echo $LANG['lang']['this']?>">
                     <button title="<?php echo $LANG['bolosindex']['tip']?>"><?php echo $LANG['index']['bolosindex']?></button>
                  </a>
               </div>
            </div>
            <div class="col-md-4 col-sm-4" align="center">          
               <div class="col-md-12">
                  <img src="img/pexels-photo-68903.jpeg"  class="img-responsive img-home" title="Imagem do produto categoria Doces">
               </div>
               <div class="col-md-12 button-cardapio-home" align="center">
                  <a href="doces.php?lang=<?php echo $LANG['lang']['this']?>">
                  <button title="<?php echo $LANG['docesindex']['tip']?>"><?php echo $LANG['index']['docesindex']?></button>
                  </a>
               </div>
            </div>
            <div class="col-md-4 col-sm-4" align="center">          
               <div class="col-md-12">
                  <img src="img/pexels-photo-635409.jpeg" class="img-responsive img-home" title="Imagem do produto categoria CupCake">
               </div>
               <div class="col-md-12 button-cardapio-home" align="center">
                  <a href="cup.php?lang=<?php echo $LANG['lang']['this']?>">
                  <button title="<?php echo $LANG['Cupcakeindex']['tip']?>"><?php echo $LANG['index']['Cupcakeindex']?></button>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--- PART2 -->
<!-- PART1 -->
<section class="style-section-2">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="col-md-6 parceiro-home" align="center">
               <img src="img/pexels-photo-564883.jpeg" class="img-responsive" title="Imagem mostra os uma oportunidade de Seja um Representante">
            </div>
            <div class="col-md-6">
               <div class="col-md-12">
                  <h3 title="<?php echo $LANG['be_part']['tip']?>" class="text-uppercase title-home"><?php echo $LANG['index']['tittle_be_part']?></h3>
                  <p title="<?php echo $LANG['sejaparceiro']['tip']?>" class="text-justify">
                 <?php echo $LANG['index']['sejaparceiro']?>
                  </p>
               </div>
               <div class="col-md-12 button-sobre-home" align="center">
                  <a href="parceiro.php?lang=<?php echo $LANG['lang']['this']?>">
                     <button title="<?php echo $LANG['button_know']['tip']?>"><?php echo $LANG['index']['button_know']?></button>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- PART1 -->

<?php include_once "footer.php" ?>
