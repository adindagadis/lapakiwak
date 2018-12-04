<ul class="breadcrumb">
  <li><a href="#">Produk Olahan</a></li>
  <li><a href="#">Ikan</a></li>
  <li><a href="#">Non Laut</a></li>
  <li>Abon Ikan Lele Si Bonbon</li>
</ul>
	<!--content-->
		<div class="content">
			<!--single-->
			<div class="single-wl3">
				<div class="container">
					<div class="single-grids">
						<div class="col-md-9 single-grid">
							<div clas="single-top">
								<div class="single-left">
									<div class="flexslider">
										<ul class="slides">
											<li data-thumb="<?php echo base_url();?>assets/images/abonlele.jpeg">
												<div class="thumb-image"> <img src="<?php echo base_url();?>assets/images/abonlele.jpeg" data-imagezoom="true" class="img-responsive"> </div>
											</li>
											<li data-thumb="<?php echo base_url();?>assets/images/abonlele1.jpeg">
												 <div class="thumb-image"> <img src="<?php echo base_url();?>assets/images/abonlele1.jpeg" data-imagezoom="true" class="img-responsive"> </div>
											</li>
											<li data-thumb="<?php echo base_url();?>assets/images/abonlele2.jpg">
											   <div class="thumb-image"> <img src="<?php echo base_url();?>assets/images/abonlele2.jpg" data-imagezoom="true" class="img-responsive"> </div>
											</li> 
										 </ul>
									</div>
								</div>
								<div class="single-right simpleCart_shelfItem">
									<h4>Abon Ikan Lele Si Bonbon</h4>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<p class="price item_price">Rp 31.000</p>
									<div class="description">
										<p><span>Deskripsi Produk : </span> Rasa original, 92 gram.</p>
									</div>
									<div class="color-quality">
										<!--<h6>Quality :</h6>-->
											<div class="quantity"> 
												<div class="quantity-select">                           
													<div class="entry value-minus1">&nbsp;</div>
													<div class="entry value1"><span>1</span></div>
													<div class="entry value-plus1 active">&nbsp;</div>
												</div>
											</div>
												<!--quantity-->
														<script>
														$('.value-plus1').on('click', function(){
															var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
															divUpd.text(newVal);
														});

														$('.value-minus1').on('click', function(){
															var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
															if(newVal>=1) divUpd.text(newVal);
														});
														</script>
													<!--quantity-->
									</div>
									<div class="women">
										<!-- <span class="size">XL / XXL / S </span> -->
										<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Tambahkan Ke Keranjang</a>
									</div>
									<!-- <div class="social-icon">
										<a href="#"><i class="icon"></i></a>
										<a href="#"><i class="icon1"></i></a>
										<a href="#"><i class="icon2"></i></a>
										<a href="#"><i class="icon3"></i></a>
									</div> -->
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						
						<div class="clearfix"> </div>
					</div>
					
				</div>
			</div>
			
		</div>
	