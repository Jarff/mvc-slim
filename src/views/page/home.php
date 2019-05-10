<?php include_once('./src/layouts/metas.php');?>
<section id="home">
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
            <img draggable="false" class="logo" src="./src/assets/img/logo.svg" alt="">    
        </div><!-- /.col-lg-12 col-md-12 col-sm-12 col-xs-12 -->
        <div class="clearfix"></div><!-- /.clearfix -->
        <br>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center places">
            <img class="w100" src="./src/assets/img/img1.png" alt="<?=$env->sitename?>" style="z-index:2;">            
        </div><!-- /.col-lg-12 col-md-12 col-sm-12 col-xs-12 -->
        <div class="clearfix"></div><!-- /.clearfix -->
        <br>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center d-flex match">
                <img class="hacienda" src="./src/assets/img/logo2.svg" alt="" class="w100">
            </div><!-- /.col-lg-4 col-md-4 col-sm-12 col-xs-12 -->
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 match">
                <form id="contact-form">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <input type="text" name="nombre" placeholder="Nombre" class="form-control validate">                    
                    </div><!-- /.col-lg-12 col-md-12 col-sm-12 col-xs-12 -->
                    <div class="clearfix"></div><!-- /.clearfix -->
                    <br>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <input type="email" name="email" placeholder="Correo" class="form-control validate">                    
                    </div><!-- /.col-lg-12 col-md-12 col-sm-12 col-xs-12 -->
                    <div class="clearfix"></div><!-- /.clearfix -->
                    <br>
                    <div class="col-lg-12 col-sm-12 col-md-12">
                        <textarea name="mensaje" id="mensaje" cols="30" placeholder="Mensaje" rows="5" class="form-control validate"></textarea> <!-- /# -->                    
                    </div><!-- /.col-lg-12 col-sm-12 col-md-12 -->
                    <div class="clearfix"></div><!-- /.clearfix -->
                    <br>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                        <button type="submit" class="btn enviar-form">Enviar</button> <!-- /.btn -->                    
                    </div><!-- /.col-lg-12 col-md-12 col-sm-12 col-xs-12 -->
                </form>
            </div><!-- /.col-lg-4 col-md-4 col-sm-12 col-xs-12 -->
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 d-flex match m-t-15">
                <a href="tel:+529996885990">9996885990</a>
                <a href="mailto:info@sanantoniohool.com">info@sanantoniohool.com</a>
                <div class="redes">
                    <span><a href="www.facebook.com/sanantoniohool" target="_blank"><i class="fa fa-facebook-official"></i> <!-- /.fa facebook --></a></span>
                    <span><a href="www.instagram.com/sanantoniohool" target="_blank"><i class="fa fa-instagram"></i> <!-- /.fa instagram --></a></span>                                    
                </div>
            </div><!-- /.col-lg-4 col-md-4 col-sm-12 col-xs-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<?php include_once('./src/layouts/scripts.php');?>