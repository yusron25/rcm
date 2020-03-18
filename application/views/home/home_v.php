

<div id="home" class="carousel slide padtopslider" data-ride="carousel" data-interval="5000"> 


  <div class="carousel-inner">
    <?php $c = 0; foreach ($slider as $slide ): ?>
        <div class="carousel-item <?=($c==0)?'active':''?>">
          <img src="<?=base_url()?><?=$slide?>" class="d-block w-100" alt="PT Rajawali Cahaya Mandiri">
        </div>
    <?php $c++; endforeach ?>
  </div>

  <a class="carousel-control-prev" href="#home" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#home" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- discover area start  -->
<section class="discover-area padding-top-110 padding-bottom-80" id="services">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title">
                    <h2 class="title"><?=$this->lang->line('business_title') ?></h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            
            <div class="col-sm-3 my-2 px-5 " >
                <div class="single-discover-item">
                    <div class="icon">
                        <!-- <i class="flaticon-chat"></i> -->
                         <img src="<?=base_url()?>assets/images/featured/service-maintenance.png" alt="">
                    </div>
                    <div class="content">
                        <h4 class="title">Maintenance and Repair</h4>

                        <?=$this->lang->line('business_repair')?>

                    </div>
                </div>
            </div>
            <div class="col-sm-3  my-2 px-5">
                <div class="single-discover-item">
                    <div class="icon">
                        <!-- <i class="flaticon-shield-1"></i> -->
                         <img src="<?=base_url()?>assets/images/featured/spare-part.png" alt="">
                    </div>
                    <div class="content">
                        <h4 class="title">Distributor Spare part</h4>

                        <?=$this->lang->line('business_sparepart')?>
        

                    </div>
                </div>
            </div>
            <div class="col-sm-3  my-2 px-5">
                <div class="single-discover-item">
                    <div class="icon">
                        <!-- <i class="flaticon-cloud"></i> -->
                         <img src="<?=base_url()?>assets/images/featured/delivery-truck.png" alt="">
                    </div>
                    <div class="content">
                        <h4 class="title">Inland Transportation</h4>
                        
                        <?=$this->lang->line('business_transportation')?>

                    </div>
                </div>
            </div>

            <div class="col-sm-3  my-2 px-5">
                <div class="single-discover-item">
                    <div class="icon">
                        <!-- <i class="flaticon-layers-2"></i> -->
                         <img src="<?=base_url()?>assets/images/featured/harbor-crane.png" alt="">
                    </div>
                    <div class="content">
                        <h4 class="title">Rental Equipment</h4>

                        <?=$this->lang->line('business_rental')?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="discover-area padding-top-110" id="profile" >
    <div class="pt-3" style="background-image: url('<?=base_url()?>/assets/images/featured/profile.jpg');padding-bottom:40px;  
    /*parallax*/
  min-height: 400px; 
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">
        <div class="container my-5 ">
            <div class="row justify-content-center">
                <div class="col-12" style="text-align: center;">

                    <h3 style="text-decoration: underline;"><?=$this->lang->line('about_us_title')?></h3>                
                    <p><?=$this->lang->line('about_us_desc')?></p>

                </div>
            </div>
            <div class="row" style="display: none">
                <div class="col-md-6 m-auto" >                    
                    
                    <h5 style="text-align:center;"><?=$this->lang->line('about_us_title')?></h5>
                    <p><?=substr($this->lang->line('about_us_desc'), 0,96 ) ?> ...</p>
                </div>
                <div class="col-md-6" >  
                    <img src="<?=base_url()?>/assets/images/featured/profile.jpg" alt="Image Profile"> 
                </div>
            </div>
        </div>
        <div style="text-align: center">
            <a href="<?=base_url()?>profile" class="btn btn-primary"><i>Read More... </i></a>
        </div>
    </div>
    
</section>

<!-- discover area start  -->

<section style="display: none" class="discover-area padding-top-110 padding-bottom-80" id="profile">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12" style="text-align: center;">
                <h3 style="text-decoration: underline;"><?=$this->lang->line('profile_title')?></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 m-auto" >                    
                
                <h5 style="text-align:center;"><?=$this->lang->line('about_us_title')?></h5>
                <p><?=substr($this->lang->line('about_us_desc'), 0,96 ) ?> ...</p>
            </div>
            <div class="col-md-6" >  
                <img src="<?=base_url()?>/assets/images/featured/profile.jpg" alt="Image Profile"> 
            </div>
        </div>
    </div>
    <div style="text-align: center">
        <a href="<?=base_url()?>profile" class="btn btn-primary"><i>Read More... </i></a>
    </div>
</section>


<div class="contact-form-area-02 contact-bg padding-bottom-120 padding-top-120" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-area-wrapper" ><!-- contact area wrapper -->
                    <span class="subtitle"><?=$this->lang->line('contact')?></span>
                    <div class="row">
                        <div class="col-4">
                            <?=$this->lang->line('contact_phone')?>
                        </div>

                        <div class="col-1">
                            :
                        </div>
                        <div class="col-7">
                           +62 21-6509087<br>+62 21-6509086
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            E-mail
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-7">
                            roy.andriyanto@rcm.co.id
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                           <?=$this->lang->line('profile_address')?>
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-7">
                            Jl. Yos Sudarso Kav. 33<br>
                            Sunter Jaya RT. 008 RW. 011<br>
                            Tanjung Priok, Jakarta Utara 14350
                        </div>
                    </div>
                    
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    <p><?=$this->lang->line('ContactDesc')?></p>
                    <a href="<?=base_url()?>/contact-us" class="btn btn-lg btn-primary"><i class="fa fa-envelope"></i> Get In Touch</a>
                </div><!-- //. contact area wrapper -->
            </div>
            <div class="col-lg-6">
                <!--<div class="img-wrapper">-->
                <!--    <img src="assets/images/contact/contact-us.jpg" alt="">-->
                <!--    <a target="_blank" href="http://www.freepik.com">-->
                <!--        <small style="color:#C1C1C1">Designed by pikisuperstar / Freepik</small>-->
                <!--    </a>                    -->
                <!--</div>-->
            </div>
        </div>
    </div>
</div>

<script>

    $('.collapse').on('shown.bs.collapse', function () {
       $(this).next().text('Less More..')

    })

    $('.collapse').on('hidden.bs.collapse', function () {
        $(this).next().text('Read More..')
    })

</script>

&nbsp;
&nbsp;
&nbsp;
&nbsp;



