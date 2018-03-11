<?php
include $_SESSION['included'];
?>
<!-- NEWSLETTER -->
<section class="subscribe subscribe-news" title="Banner NewsLetter mostrando alguns doces da Dolci Corradini">
   <div class="container ">
      <div class="row">
         <div class="col-md-12">
            <div class="inner">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="top-title text-center" title="<?php echo $LANG['know_news']['tip'] ?>"><?php echo $LANG['footer']['know_news'] ?></div>
                  <div class="bottom-title text-center" title="<?php echo $LANG['news_letter']['tip'] ?>"><?php echo $LANG['footer']['news_letter']?></div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <form class="subs-form">
                     <div class="col-md-6 subs-form-input">
                        <input type="text" title="<?php echo $LANG['fill_email']['tip'] ?>" placeholder="<?php echo $LANG['footer']['fill_email']?>">
                        <input type="submit" title="<?php echo $LANG['button_submit']['tip'] ?>" value=<?php echo $LANG['footer']['button_submit']?>>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- NEWSLETTER -->
<footer class="footer">
   <div class="top-footer">
      <div class="container">
         <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-12 img-logo" align="center">
               <div class="col-md-12" align="center">
                  <a class="navbar-brand" href="index.php?lang=<?php echo $LANG['lang']['this']?>"><img src="img/logo_site.png" class="" title="Logo Dolci Corradini"></a>
               </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12 esp-footer">
               <div class="col-md-12">
                  <span class="footer-col__title" title="<?php echo $LANG['map_tittle']['tip'] ?>" ><?php echo $LANG['footer']['map_tittle']?></span>
               </div>
               <div class="col-md-12 esp-top">
                     <ul class="lista-2">
                     <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a title="<?php echo $LANG['home']['tip'] ?>" href="index.php?lang=<?php echo $LANG['lang']['this']?>"><?php echo $LANG['footer']['map_home']?></a></li>
                     <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a title="<?php echo $LANG['who_we_are']['tip'] ?>" href="sobre.php?lang=<?php echo $LANG['lang']['this']?>"><?php echo $LANG['footer']['map_who_we_are']?></a></li>
                     <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a title="<?php echo $LANG['menu']['tip'] ?>" href="cardapio.php?lang=<?php echo $LANG['lang']['this']?>"><?php echo $LANG['footer']['map_menu'] ?></a></li>
                     <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a title="<?php echo $LANG['contact']['tip'] ?>" href="contato.php?lang=<?php echo $LANG['lang']['this']?>"><?php echo $LANG['footer']['map_contact']?></a></li>
                     <li><i class="fa fa-caret-right" aria-hidden="true"></i> <a title="<?php echo $LANG['be_part']['tip'] ?>" href="parceiro.php?lang=<?php echo $LANG['lang']['this']?>"><?php echo $LANG['footer']['map_be_part']?></a></li>
                  </ul>
               </div>
            </div>
            <div class="col-md-3 hidden-sm col-xs-12 esp-footer" align="center">
               <div class="footer-social">
                  <div class="footer-col__title" title="<?php echo $LANG['social_networks_tittle']['tip'] ?>" ><?php echo $LANG['footer']['social_networks_tittle']?></div>
                  <ul class="social text-left">
                     <li><a title="facebook"  href="https://www.facebook.com/Dolcicorradini" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                     <li><a title="Instagram"  href="https://www.facebook.com/Dolcicorradini" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     <li><a title="WhatsApp" href="https://api.whatsapp.com/send?phone=5511955571918&text=<?php echo $LANG['footer']['msgwhatsapp']?>" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                  </ul>
               </div>
            </div>
             <div class="col-md-3 col-sm-4 col-xs-12 esp-footer">
               <div class="col-md-12">
                  <span class="footer-col__title" title="<?php echo $LANG['contact']['tip'] ?>" ><?php echo $LANG['footer']['contact_tittle']?></span>
               </div>
               <div class="col-md-12">
                  <ul class="lista-1010">
                     <li><i class="fa fa-location-arrow" aria-hidden="true"></i>
                     <span title="<?php echo $LANG['street']['tip'] ?>"><?php echo $LANG['contato']['street'] ?></span>
                     <span title="<?php echo $LANG['street']['name']['tip'] ?>"> Almeida Santos Carvalho,</span>
                     <span title="<?php echo $LANG['number']['tip'] ?>"> <?php echo $LANG['contato']['number']?> 215 </span> 
                     <span title="<?php echo $LANG['zip_code']['tip'] ?>"><?php echo $LANG['contato']['zip_code'] ?>:18125300</span></li>
                     <li><i class="fa fa-phone" aria-hidden="true"></i> 11 4715 0631</li>
                     <li><i class="fa fa-envelope" aria-hidden="true"></i> contato@contato.com.br</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="bottom-footer">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <div class="copyrights">
               2017 © 
               <span title="<?php echo $LANG['copyrights_1']['tip'] ?>"><?php echo $LANG['footer']['copyrights_1'] ?></span>
               Dolci Corradini ™ |
               <span title="<?php echo $LANG['copyrights_2']['tip'] ?>"><?php echo $LANG['footer']['copyrights_2'] ?></span>
               <span title="<?php echo $LANG['copyrights_3']['tip'] ?>"><?php echo $LANG['footer']['copyrights_3'] ?></span>  
               <!-- VERIFICAR QUAL PAGINA É PARA REALIZAR A TROCA DOS NOMES NO FOOTER -->
                  <?php 
                  if (($url == '/') or ($url == '/home') or ($url == '/index.php')) {
                     echo $mensagem = "<a href='#'> Jeferson Carvalho</a>";
                  }
                  elseif (($url == '/quem-somos') or ($url == '/sobre.php')){
                      echo $i = "<a href='#'> Adriano </a>";
                  }
                  elseif (($url == '/cardapio') or ($url == '/cardapio.php')){
                      echo $i = "<a href='#'> Cristiano </a>";
                  }
                  elseif (($url == '/contato') or ($url == '/contato.php')){
                      echo $i = "<a href='#'> Elton </a>";
                  }
                  elseif (($url == '/parceiros') or ($url == '/parceiro.php')){
                      echo $i = "<a href='#'> Jeferson Carvalho </a>";
                  }
                   elseif ($url == $url){
                      echo $i = "<a href='#'> Jeferson Carvalho </a>";
                  }
                  ?>           
               </div>
            </div>
         </div>
      </div>
   </div>
</footer>
<!-- FOOTER END -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>