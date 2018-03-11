<?php include_once "top.php" ?>
<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image: url(img/background-new.png); background-attachment: fixed; background-repeat: no-repeat; background-size: cover;" title="Banner pagina Seja um Representante">
 <div class="container">
   <div class="row">
     <div class="col-md-12">
       <div class="banner-paginas">
         <h1 title="<?php echo $LANG['be_part']['tip'] ?>" class="text-uppercase"><?php echo $LANG['parceiro']['be_part'] ?></h1>
       </div>
     </div>
   </div>
 </div>
</section>
<!--End breadcrumb area-->
<section>
  <div class="col-md-12">
    <div class="col-md-12">
      <h3 title="<?php echo $LANG['parceiro']['tip'] ?>"  class="text-justify"> <?php echo $LANG['parceiro']['parindex1'] ?></h3>
      <h4 class="text-justify"></h4>
    </div>
  </div>
</section>
<div style="clear: both;"></div>
<section class="consultations-area" style="background: #fff;">
  <div class="container wow zoomIn" data-wow-delay="100ms" data-wow-duration="900ms">
    <div class="row">
      <div class="col-md-12">
        <div class="inner-content">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="consultations-form-box">
                <form id="consultations-form" name="consultations-form" action="inc/sendmail.php" method="post">
                  <div class="row">
                    <div class="col-md-6">
                      <input title="<?php echo $LANG['input_name']['tip'] ?>" type="text" name="nome" value="" placeholder="<?php echo $LANG['contato']['input_name'] ?>*" required="">  
                    </div>
                    <div class="col-md-6">
                      <input title="<?php echo $LANG['input_email']['tip'] ?>" type="email" name="email" value="" placeholder="<?php echo $LANG['contato']['input_email'] ?> *" required="">
                    </div>
                    <div class="col-md-6">
                      <input title="<?php echo $LANG['input_phone']['tip'] ?>" type="text" name="telefone" value="" placeholder="<?php echo $LANG['contato']['input_phone'] ?>*" required="">
                    </div>
                    <div class="col-md-6">
                      <input title="<?php echo $LANG['input_subject']['tip'] ?>" type="text" name="assunto" value="" placeholder="<?php echo $LANG['contato']['input_subject'] ?> *" required="">
                    </div>
                    <div class="col-md-12">
                      <textarea title="<?php echo $LANG['input_message']['tip'] ?>" name="msg" placeholder="<?php echo $LANG['contato']['input_message'] ?> *" required=""></textarea>  
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <button title="<?php echo $LANG['button_form']['tip'] ?>" class="thm-btn bgclr-1" type="submit"><?php echo $LANG['contato']['button_form'] ?></button>   
                    </div>
                  </div>
                </form>
              </div>
            </div>                   
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section style="height: 120px;">
  <div class="col-md-12">
  </div>
</section>

<?php include_once "footer.php" ?>
