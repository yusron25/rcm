

<section class="discover-area padding-top-110 padding-bottom-80"  >

   
        <div class="container" >
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title">
                        <h3 class="title extra"><?=$this->lang->line('gallery') ?></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                
                <?php foreach ( $gallery['mekanik'] as $key => $gal ): ?>
                   <div class="col-sm-3 my-3">
                       <div class="card" >
                            <a href="#" class="gopopup" data-row="<?=$key?>" data-toggle="modal" data-target="#imagesliderMechanic">
                                <img  src="<?=base_url()?>/<?=$gal?>" class="card-img-top" alt="rcm">
                            </a>
                            
                            <!-- <div class="card-body">
                                <p class="card-text"> - </p>
                            </div> -->
                        </div> 
                    
                    </div>

                <?php endforeach ?>

                
            </div>
        </div>  

        <div class="modal fade" id="imagesliderMechanic" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">

                    <div id="carouselExampleControls" class="carousel slide" data-interval="false" data-ride="carousel">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute;right: 0;z-index: 1;padding: 12px;"> 
                          <span aria-hidden="true">&times;</span>
                        </button>
                      <div class="carousel-inner">

                        <?php foreach ( $gallery['mekanik'] as $key => $gal ): ?>
                            <div data-row="<?=$key?>" class="carousel-item <?=($key == 0)?'active':''?>">
                               <img  src="<?=base_url()?>/<?=$gal?>" class="card-img-top" alt="...">
                            </div>
                        <?php endforeach ?>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container" >
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title">
                        <h3 class="title extra"><?=$this->lang->line('gallery') ?></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                
                <?php foreach ( $gallery['sparepart'] as $key => $gal ): ?>
                   <div class="col-sm-3 my-3">
                       <div class="card" >
                            <a href="#" class="gopopup" data-row="<?=$key?>" data-toggle="modal" data-target="#imagesliderSparepart">
                                <img  src="<?=base_url()?>/<?=$gal?>" class="card-img-top" alt="rcm">
                            </a>
                            
                            <!-- <div class="card-body">
                                <p class="card-text"> - </p>
                            </div> -->
                        </div> 
                    
                    </div>

                <?php endforeach ?>

                
            </div>
        </div>  

        <div class="modal fade" id="imagesliderSparepart" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">

                    <div id="carouselExampleControls" class="carousel slide" data-interval="false" data-ride="carousel">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute;right: 0;z-index: 1;padding: 12px;"> 
                          <span aria-hidden="true">&times;</span>
                        </button>
                      <div class="carousel-inner">

                        <?php foreach ( $gallery['sparepart'] as $key => $gal ): ?>
                            <div data-row="<?=$key?>" class="carousel-item <?=($key == 0)?'active':''?>">
                               <img  src="<?=base_url()?>/<?=$gal?>" class="card-img-top" alt="...">
                            </div>
                        <?php endforeach ?>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                </div>
            </div>
        </div>



        <div class="container" >
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title">
                        <h3 class="title extra"><?=$this->lang->line('gallery') ?></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                
                <?php foreach ( $gallery['rental'] as $key => $gal ): ?>
                   <div class="col-sm-3 my-3">
                       <div class="card" >
                            <a href="#" class="gopopup" data-row="<?=$key?>" data-toggle="modal" data-target="#imagesliderRental">
                                <img  src="<?=base_url()?>/<?=$gal?>" class="card-img-top" alt="rcm">
                            </a>
                            
                            <!-- <div class="card-body">
                                <p class="card-text"> - </p>
                            </div> -->
                        </div> 
                    
                    </div>

                <?php endforeach ?>

                
            </div>
        </div>  

        <div class="modal fade" id="imagesliderRental" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">

                    <div id="carouselExampleControls" class="carousel slide" data-interval="false" data-ride="carousel">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute;right: 0;z-index: 1;padding: 12px;"> 
                          <span aria-hidden="true">&times;</span>
                        </button>
                      <div class="carousel-inner">

                        <?php foreach ( $gallery['rental'] as $key => $gal ): ?>
                            <div data-row="<?=$key?>" class="carousel-item <?=($key == 0)?'active':''?>">
                               <img  src="<?=base_url()?>/<?=$gal?>" class="card-img-top" alt="...">
                            </div>
                        <?php endforeach ?>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                </div>
            </div>
        </div>
    
    
</section>





<script>
    var check;
    $(".gopopup").click(function(){
        check = $(this).data('row')
    });

    $('#imagesliderMechanic').on('show.bs.modal', function (e) {

        console.log(check)
        $(this).find(".carousel-item").removeClass('active');
      $(this).find(".carousel-item[data-row="+check+"]").addClass('active',true);
    })

    $('#imagesliderSparepart').on('show.bs.modal', function (e) {

        console.log(check)
        $(this).find(".carousel-item").removeClass('active');
      $(this).find(".carousel-item[data-row="+check+"]").addClass('active',true);
    })

    $('#imagesliderRental').on('show.bs.modal', function (e) {

        console.log(check)
        $(this).find(".carousel-item").removeClass('active');
      $(this).find(".carousel-item[data-row="+check+"]").addClass('active',true);
    })
</script>
