<?php include_once "top.php" ?>
<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(img/background-new.png); background-attachment: fixed; background-repeat: no-repeat; background-size: cover;">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="banner-paginas">
                <h1 class="text-uppercase"><?php echo $LANG['tabela2']['produto'] ?></h1>
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
            
             <div class="container">
                  <h3><?php echo $LANG['tabela2']['produto'] ?></h3>                              
                  <table class="table table-hover table-responsive">
                    <thead>
                      <tr>
                        <th class="item"><?php echo $LANG['tabela1']['item'] ?></th>
                        <th class="descricao"><?php echo $LANG['tabela1']['descricao'] ?></th>
                        <th class="preco"><?php echo $LANG['tabela1']['preco'] ?></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><?php echo $LANG['tabela2']['produto1'] ?></td>
                        <td><?php echo $LANG['tabela2']['descricao1'] ?></td>
                        <td><?php echo $LANG['tabela2']['preco1'] ?></td>  
                      </tr>
                      <tr>
                        <td><?php echo $LANG['tabela2']['produto2'] ?></td>
                        <td><?php echo $LANG['tabela2']['descricao2'] ?></td>
                        <td><?php echo $LANG['tabela2']['preco2'] ?></td>   
                      </tr>
                      <tr>
                        <td><?php echo $LANG['tabela2']['produto3'] ?></td>
                        <td><?php echo $LANG['tabela2']['descricao3'] ?></td>
                        <td><?php echo $LANG['tabela2']['preco3'] ?></td> 
                      </tr>
                        <tr>
                        <td><?php echo $LANG['tabela2']['produto4'] ?></td>
                        <td><?php echo $LANG['tabela2']['descricao4'] ?></td>
                        <td><?php echo $LANG['tabela2']['preco4'] ?></td> 
                      </tr>
                        <tr>
                        <td><?php echo $LANG['tabela2']['produto5'] ?></td>
                        <td><?php echo $LANG['tabela2']['descricao5'] ?></td>
                        <td><?php echo $LANG['tabela2']['preco5'] ?></td> 
                      </tr>  
                    </tbody>
                  </table>
                </div>
         </div>
      </div>
   </div>
</section>
<?php include_once "footer.php" ?>