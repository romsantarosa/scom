<!-- Contact Section Start -->
<section id="contato" class="section" data-stellar-background-ratio="-0.2">
<br><br>
    <div class="contact-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="contact-us">
                        <h3>Contato </h3>
                        <div class="contact-address">
                            
                            <p class="phone">whats: <span>(13) 99118-0384</span></p>
                            <p class="email">e-mail: <span>contato@scomunicacao.com</span></p>
                            <p>Santos - SP </p>
                        </div>
<div class="social-icons-topo">
    <ul>
        <li class="facebook" title="Facebook" alt="Ícone Facebook"><a href="https://www.facebook.com/scomunicaintegrada/" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li class="instagram" title="Instagram" alt="Ícone Instagram"><a href="https://www.instagram.com/scomunicacaointegrada/" target="_blank"><i class="fa fa-instagram"></i></a></li>
        <li class="twitter" title="Twitter" alt="Ícone Twitter"><a href="https://www.twitter.com/scomunicacao2/" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li class="linkedin" title="Linkedin" alt="Ícone Linkedin"><a href="https://www.linkedin.com/in/s-comunica%C3%A7%C3%A3o-integrada-b39918181/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
        <li class="whats" title="WhatsApp (13) 99118-0384" alt="Ícone Whatsapp"><a href="https://api.whatsapp.com/send?phone=5513991180384" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
    </ul>
</div>
                    </div>
                </div>



                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="contact-block">
                    <?php 
              if(is_active_sidebar('sidebar-contact')){
                  dynamic_sidebar('sidebar-contact');
                }
            ?>
                       <!-- <form method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Nome"
                                            required data-error="Digite o seu nome">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Email" name="email" class="form-control"
                                            required data-error="Digite o seu email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" placeholder="Messagem" rows="8"
                                            data-error="Escreva a sua mensagem" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="submit-button text-center">
                                        <button class="btn btn-common"  type="submit">Enviar</button>
                                        <input type="hidden" name="env" value="envEmail">
                                        
                                    </div>
                                </div>
                            </div>
                        </form>
                        
                        <?php 
                        if($_POST && $_POST['env']=="envEmail"){
                            echo "Cliquei";
                        }
                            ?>-->


                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- Contact Section End -->
