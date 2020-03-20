<div class="contact-form-area-02 contact-bg padding-bottom-120 padding-top-120" id="contact">
    <div class="container">
    	<div class="row">
    		<div class="col-lg-12">
    			<div class="contact-area-wrapper" id="contact"><!-- contact area wrapper -->
                    <span class="subtitle"><?=$this->lang->line('contact')?></span>
					
					<?php if ($this->session->flashdata('info')): ?>
						<div class="alert alert-success alert-dismissible fade show" role="alert">
						  <?=$this->session->flashdata('info')?>
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>
					<?php endif ?>

					<?php if ($this->session->flashdata('info_fail')): ?>
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
						  Something wrong, Please Try it Again Later !!  
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    <span aria-hidden="true">&times;</span>
						  </button>
						</div>
					<?php endif ?>
                    
                    <h3 class="title">Get In Touch</h3>
                    
                </div><!-- //. contact area wrapper -->
    		</div>
    	</div>
        <div class="row">
            <div class="col-lg-6">
                    <div class="contact-area-wrapper" id="contact"><!-- contact area wrapper -->
                       
                        <p><?=$this->lang->line('ContactDesc')?></p>
                        <form action=""  method="post" class="contact-form sec-margin">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control <?=(form_error('name'))?'is-invalid':''?>" name="name" value="<?=set_value('name')?>"  placeholder="<?=$this->lang->line('fieldName')?>">
                                        <div style="color:#dc3545"  class="invalid-feedback"><?=form_error("name")?></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control <?=(form_error('email'))?'is-invalid':''?>"  name="email" value="<?=set_value('email')?>" placeholder="<?=$this->lang->line('fieldEmail')?>">
                                        <div style="color:#dc3545"  class="invalid-feedback"><?=form_error("email")?></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group textarea">
                                        <textarea name="message" class="form-control <?=(form_error('message'))?'is-invalid':''?>" cols="30" rows="10" placeholder="<?=$this->lang->line('fieldMessage')?>"><?=set_value('message')?></textarea>
                                        <div style="color:#dc3545"  class="invalid-feedback"><?=form_error("message")?></div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <img src="<?=$src->inline()?>" id="imgcap"> 
                                        <button type="button" class="btn btn-default btn-sm " id="repeatimgcap"><i class="fa fa-sync"></i></button>

                                        <input class="form-control mt-2 <?=(form_error('captcha'))?'is-invalid':''?>" placeholder="Captcha" name="captcha"  type="text">
                                        <div style="color:#dc3545"  class="invalid-feedback"><?=form_error("captcha")?></div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                	<div class="form-group">
                                		
                                    	<button class="submit-btn-02" type="submit"><?=$this->lang->line('fieldBtnSubmit')?></button>
                                	</div>
                                </div>
                            </div>
                        </form>

                    </div><!-- //. contact area wrapper -->
                </div>
            <div class="col-lg-6">
                <div class="contact-area-wrapper" ><!-- contact area wrapper -->
                    <!-- <span class="subtitle"></span> -->
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
                            marketing@rcm.co.id
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
                    
                </div>
            </div>
        </div>
    </div>
</div>

<script>
	$("#repeatimgcap").click(function(){

		$.ajax({
			url: "<?=base_url()?>/Contact/changecap",
			type:'post',
			success:function(res){
				console.log(res);
				$("#imgcap").attr("src", res );
			}
		})
	})
</script>