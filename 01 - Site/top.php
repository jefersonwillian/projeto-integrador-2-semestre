<?php 
   //pega a url atual da pagina
   $url = $_SERVER['REQUEST_URI']; 


   //strpos — Encontra a posição da primeira ocorrência de uma string
   $INITE = strpos($url, '?');
   //if para pegar apenas os valores reais da url
   if ($INITE):
      //substr — Retorna uma parte de uma string
    $url = substr($url, 0, $INITE);
   endif;
   ?>
<?php include_once "lang.php" ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset"utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" href="img/logo1.png" />
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   <title>Dolci Corradini</title>
   <!-- Bootstrap -->
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <link href="css/style.css" rel="stylesheet">
   <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
   <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
   <!-- MENU 1 -->
   <div class="menu-1">
      <div class="container">
         <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
               <ul class="menu-1-contatos">
                  <li><i class="fa fa-phone" aria-hidden="true"></i>+55 11 9 5557 1918</li>
                  <li class="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>Contato@doceria.com.br</li>
               </ul>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
               <ul class="menu-1-social">
                  <li><a href="https://www.facebook.com/Dolcicorradini" target="_blank"><i class="fa fa-facebook fa-1x" aria-hidden="true"></i></a></li>
                     <li><a href="https://www.facebook.com/Dolcicorradini" target="_blank"><i class="fa fa-instagram fa-1x" aria-hidden="true"></i></a></li>
                     <li><a href="https://api.whatsapp.com/send?phone=5511955571918&text=<?php echo $LANG['footer']['msgwhatsapp']?>" target="_blank"><i class="fa fa-whatsapp fa-1x" aria-hidden="true"></i></a></li>
                  <li class="hidden-xs"><a  href="?lang=pt"><img title="<?php echo $LANG['lang']['pt']?>" src="img/icon-brasil.png"></a></li>
                  <li class="hidden-xs"><a  href="?lang=en"><img title="<?php echo $LANG['lang']['en']?>" src="img/icon-eua.png"></a></li>
                  <li class="hidden-xs"><a  href="?lang=it"><img title="<?php echo $LANG['lang']['it']?>" src="img/icon-italy.png"></a></li>
                  <li class="hidden-xs"><a  href="?lang=ch"><img title="<?php echo $LANG['lang']['ch']?>" src="img/icon-china.png"></a></li>
               </ul>
            </div>
            <div class="col-md-12 col-xs-12 hidden-lg hidden-md hidden-sm">
               <ul class="menu-1-social">
                  <li class="hidden-lg hidden-md"><a href="?lang=pt"><img title="<?php echo $LANG['lang']['pt']?>" src="img/icon-brasil.png"></a></li>
                  <li class="hidden-lg hidden-md"><a href="?lang=en"><img title="<?php echo $LANG['lang']['en']?>" src="img/icon-eua.png"></a></li>
                  <li class="hidden-lg hidden-md"><a href="?lang=it"><img title="<?php echo $LANG['lang']['it']?>" src="img/icon-italy.png"></a></li>
                  <li class="hidden-lg hidden-md"><a href="?lang=ch"><img title="<?php echo $LANG['lang']['ch']?>" src="img/icon-china.png"></a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <!-- MENU 1 -->
   <!-- MENU 2 -->
   <header>
      <nav class="navbar navbar-default menu-2">
         <div class="container">
            <div class="row">
               <div class="col-xs-4">
                  <a class="navbar-brand" href="index.php?lang=<?php echo $LANG['lang']['this']?>"><img src="img/logo1.png" class="img-position" title="Logo Dolci Corradini"></a>
               </div>
               <!-- Brand and toggle get grouped for better mobile display -->
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle  collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                  </button>
               </div>
               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                     <!-- HOME -->
                        <?php if (($url == '/') or ($url == '/home') or ($url == '/index.php')): ?>
                        <li class="ativo-menu"><a title="<?php echo $LANG['home']['tip'] ?>" href="index.php?lang=<?php echo $LANG['lang']['this']?>"><?php echo $LANG['top']['home']?></a></li>
                        <?php else: ?>
                        <li><a title="<?php echo $LANG['home']['tip'] ?>" href="index.php?lang=<?php echo $LANG['lang']['this']?>"><?php echo $LANG['top']['home']?></a></li>
                        <?php endif; ?>
                        <!-- QUEM SOMOS -->
                        <?php if (($url == '/quem-somos') or ($url == '/sobre.php')): ?>
                        <li class="ativo-menu"><a title="<?php echo $LANG['who_we_are']['tip']?>" href="sobre.php?lang=<?php echo $LANG['lang']['this']?>"><?php echo $LANG['top']['who_we_are']?></a></li>
                        <?php else: ?>
                        <li><a title="<?php echo $LANG['who_we_are']['tip']?>" href="sobre.php?lang=<?php echo $LANG['lang']['this']?>"><?php echo $LANG['top']['who_we_are']?></a></li>
                        <?php endif; ?>
                        <!-- CARDAPIO -->
                        <?php if (($url == '/cardapio') or ($url == '/cardapio.php')): ?>
                        <li class="ativo-menu"><a title="<?php echo $LANG['menu']['tip']?>" href="cardapio.php?lang=<?php echo $LANG['lang']['this']?>"><?php echo $LANG['top']['menu']?></a></li>
                        <?php else: ?>
                        <li><a title="<?php echo $LANG['menu']['tip']?>" href="cardapio.php?lang=<?php echo $LANG['lang']['this']?>"><?php echo $LANG['top']['menu']?></a></li>
                        <?php endif; ?>
                        <!-- CONTATO -->
                        <?php if (($url == '/contato') or ($url == '/contato.php')): ?>
                        <li class="ativo-menu"><a title="<?php echo $LANG['contact']['tip']?>" href="contato.php?lang=<?php echo $LANG['lang']['this']?>"><?php echo $LANG['top']['contact']?></a></li>
                        <?php else: ?>
                        <li><a title="<?php echo $LANG['contact']['tip']?>" href="contato.php?lang=<?php echo $LANG['lang']['this']?>"><?php echo $LANG['top']['contact']?></a></li>
                        <?php endif; ?>
                        <!-- PARCEIROS -->
                        <?php if (($url == '/parceiros') or ($url == '/parceiro.php')): ?>
                        <li class="ativo-menu"><a title="<?php echo $LANG['be_part']['tip']?>" href="parceiro.php?lang=<?php echo $LANG['lang']['this']?>"><?php echo $LANG['top']['be_part']?></a></li>
                        <?php else: ?>
                        <li><a title="<?php echo $LANG['be_part']['tip']?>" href="parceiro.php?lang=<?php echo $LANG['lang']['this']?>"><?php echo $LANG['top']['be_part']?></a></li>
                        <?php endif; ?>
                  </ul>
               </div>
            </div>
         </div>
      </nav>
   </header>
   <!-- MENU 2 -->