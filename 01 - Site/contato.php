<?php include_once "top.php" ?>
<section class="consultations-area" style="background-image:url(img/background-new.png);" title="Banner pagina de contatos">
    <div class="container wow zoomIn" data-wow-delay="100ms" data-wow-duration="900ms">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12">
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
                        <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">   
                            <div class="contact-info">
                                <h2 title="<?php echo $LANG['contact']['tip'] ?>" ><?php echo $LANG['contato']['contact_tittle'] ?></h2>
                                <ul>
                                    <li>
                                        <div class="icon-holder">
                                            <span class="fa fa-location-arrow"></span>
                                        </div>
                                        <div class="text-holder">

                                            <h5 title="<?php echo $LANG['street']['tip'] ?>"><?php echo $LANG['contato']['street'] ?> <span title="<?php echo $LANG['street']['name']['tip'] ?>">Almeida Santos Carvalho</span> </h5>
                                            <h5 title="<?php echo $LANG['number']['tip'] ?>"><?php echo $LANG['contato']['number'] ?> 215 </h5>
                                            <h5 title="<?php echo $LANG['zip_code']['tip'] ?>"><?php echo $LANG['contato']['zip_code'] ?> 18125300</h5>

                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon-holder">
                                            <span class="fa fa-phone"></span>
                                        </div>
                                        <div class="text-holder">
                                            <h5>11 4715 0631</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon-holder">
                                            <span class="fa fa-envelope"></span>
                                        </div>
                                        <div class="text-holder">
                                            <h5>contato@contato.com.br</h5>
                                        </div>
                                    </li>
                                </ul>
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
<section>
   <div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d234223.89891657367!2d-47.57671889924463!3d-23.46953758944352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c58abceb48f503%3A0x947f99ac59d0781b!2sSorocaba+-+SP!5e0!3m2!1spt-BR!2sbr!4v1509498136661" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
   </div>
</section>


<?php include_once "footer.php" ?>
