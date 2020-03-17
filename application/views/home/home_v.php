

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
                        <p>Kami memiliki teknisi yang andal dan kompeten <span class="collapse" id="mrcollapse">untuk melakukan pemeliharaan dan perbaikan alat berat sesuai dengan Standar operation prosedur dari mulai preventive maintenance, corrective maintenance, penanganan troubleshooting sampai dengan over houl.</span> <a class="collapers" href="#" data-toggle="collapse" data-target="#mrcollapse" aria-expanded="false" aria-controls="mrcollapse">Read More..</a></p>                        

                        <!-- <p><?=$this->lang->line('InternationalForwarderDesc') ?></p> -->
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
                        <!-- <p><?=$this->lang->line('EMKLDesc') ?></p> -->
                        <p>Menyediakan suku cadang alat-alat berat <span class="collapse" id="spcollapse">dengan kualitas terjamin dan harga yang kompetitif dari mulai consumable part, engine, cylinder, turbo, generator dan spare partlainnya.</span><a class="collapers" href="#" data-toggle="collapse" data-target="#spcollapse" aria-expanded="false" aria-controls="spcollapse">Read More..</a></p>

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
                        <!-- <p><?=$this->lang->line('PPJKDesc') ?></p> -->
                        <p>Menyediakan sarana transportasi berupa trucking kontainer <span class="collapse" id="itcollapse">ukuran 40 feet dengan armada baru untuk kebutuhan pengiriman ke seluruh wilayah.</span><a class="collapers" href="#" data-toggle="collapse" data-target="#itcollapse" aria-expanded="false" aria-controls="itcollapse">Read More..</a></p>

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
                        <!-- <ul>
                            <li>Side Loader</li>
                            <li>Reach Stacker</li>
                            <li>Crane</li>
                        </ul> -->
                        <!-- <p><?=$this->lang->line('InlandTransportationsDesc') ?></p> -->
                        <p>Penyewaan alat-alat bongkar muat kontainer <span class="collapse" id="recollapse">seperti harbor mobile crane (HMC), reachstacker (RS), sideloader (SL) untuk menunjang kegiatan stevedoring, receiving delivery container baik di Pelabuha nmaupun Depo container dengan menempatkan alat-alat yang handal serta dioperasikan oleh operator yang berpengalaman dan bersertifikat.</span><a class="collapers" href="#" data-toggle="collapse" data-target="#recollapse" aria-expanded="false" aria-controls="recollapse">Read More..</a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- discover area start  -->

<section class="discover-area padding-top-110 padding-bottom-80" id="profile">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12" style="text-align: center;">
                <h3 style="text-decoration: underline;"><?=$this->lang->line('profile_visinmisi')?></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" >                    
                <div class="card" style="min-height: 300px">
                    <div class="card-body">
                        <h5 style="text-align:center;"><?=$this->lang->line('profile_visititle')?></h5>
                        <p><?=$this->lang->line('profile_visidesc')?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6" >  
                <div class="card" style="min-height: 300px">
                    <div class="card-body">
                        <h5 style="text-align:center;"><?=$this->lang->line('profile_misititle')?></h5>
                         <p><?=$this->lang->line('profile_misidesc')?></p>
                    </div>
                </div>   
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
                    <a href="/contact-us" class="btn btn-lg btn-primary"><i class="fa fa-envelope"></i> Get In Touch</a>
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



