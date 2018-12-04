
			<div class="content">
				<ul class="breadcrumb">
				  <li><a href="#">Alat Teknologi</a></li>
				  <li>Pengolahan</li>
				</ul>
				<div class="container" style="    margin-bottom: 100px;">
				<div class="mail-grids">
				<div class="mail-bottom">
									<h4>Apa yang kamu cari?</h4>
									<form action="#" method="post">
									
										<!--<input type="reset" value="Clear" >-->
										<input type="text" value="Saya mencari" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
										<input type="email" value="dengan harga" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' ';}" required="">
										
										<input type="submit" value="Cari" >
										

									</form>
								</div>
							</div>
						</div>
				<div class="products-agileinfo">
						<!--<h2 class="tittle">Men's Wear</h2>-->
					<div class="container">
						<div class="product-agileinfo-grids w3l">
							<div class="col-md-3 product-agileinfo-grid">
								<div class="categories">
									<h3>Kategori</h3>
									<ul class="tree-list-pad">
										<li><input type="checkbox" checked="checked" id="item-0" /><label for="item-0"><span></span>Produk Olahan</label>
											<ul>
												<li><input type="checkbox" id="item-0-0" /><label for="item-0-0">Ikan</label>
													<ul>
														<li><a href="products.html">Laut</a></li>
														<li><a href="products.html">Non Laut</a></li>
													</ul>
												</li>
												<li><input type="checkbox"  id="item-0-1" /><label for="item-0-1">Non Ikan</label>
												</li>
											
											</ul>
										</li>
										<li><input type="checkbox" id="item-1" checked="checked" /><label for="item-1">Alat Teknologi</label>
											<ul>
												<li><input type="checkbox" checked="checked" id="item-1-0" /><label for="item-1-0">Pengolahan</label>
													<ul>
														<li><a href="products.html">Spinner</a></li>
													</ul>
												</li>
												<li><input type="checkbox" checked="checked" id="item-1-0" /><label for="item-1-0">Pengemasan</label>
													<ul>
														<li><a href="products.html">Sealer</a></li>
													</ul>
												</li>
											</ul>
										</li>
										
									</ul>
								</div>
								<div class="price">
									<h3>Rentang Harga </h3>
									<ul class="dropdown-menu6">
										<li>                
											<div id="slider-range"></div>							
											<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
										</li>			
									</ul>
									<script type='text/javascript'>//<![CDATA[ 
									$(window).load(function(){
									 $( "#slider-range" ).slider({
												range: true,
												min: 0,
												max: 2000000,
												values: [ 900000, 1800000 ],
												slide: function( event, ui ) {  $( "#amount" ).val( "Rp" + ui.values[ 0 ] + " - Rp" + ui.values[ 1 ] );
												}
									 });
									$( "#amount" ).val( "Rp" + $( "#slider-range" ).slider( "values", 0 ) + " - Rp" + $( "#slider-range" ).slider( "values", 1 ) );

									});//]]>  

									</script>
									<script type="text/javascript" src="js/jquery-ui.js"></script>
								</div>
								<div class="top-rates">
									<h3>Produk Terlaris</h3>
									<div class="recent-grids">
										<div class="recent-left">
											<a href="spinner_pengering.html"><img class="img-responsive " src="<?php echo base_url();?>assets/images/s1.jpg" alt=""></a>	
										</div>
										<div class="recent-right">
											<h6 class="best2"><a href="spinner_pengering.html">Spinner Minyak Keripik dan Abon </a></h6>
											<p> <em class="item_price">Rp 1.600.000</em></p>
										</div>	
										<div class="clearfix"> </div>
									</div>
									<div class="recent-grids">
										<div class="recent-left">
											<a href="spinner_pengering.html"><img class="img-responsive " src="<?php echo base_url();?>assets/images/s2.jpg" alt=""></a>	
										</div>
										<div class="recent-right">
											<h6 class="best2"><a href="spinner_pengering.html">Spinner Peniris Minyak Abon </a></h6>
											<p> <em class="item_price">Rp 1.000.000</em></p>
										</div>	
										<div class="clearfix"> </div>
									</div>
									<div class="recent-grids">
										<div class="recent-left">
											<a href="spinner_pengering.html"><img class="img-responsive " src="<?php echo base_url();?>assets/images/s3.jpg" alt=""></a>	
										</div>
										<div class="recent-right">
											<h6 class="best2"><a href="spinner_pengering.html">Spinner Peniris Pengiring Pengaktus Minyak</a></h6>
											<p><em class="item_price">Rp 1.800.000</em></p>
										</div>
										<div class="clearfix"> </div>
									</div>
									
								</div>
								
								
							</div>
							<div class="col-md-9 product-agileinfon-grid1">
								
								<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
									
									<div id="myTabContent" class="tab-content">
										<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
											<div class="product-tab">
												<div class="col-md-4 product-tab-grid simpleCart_shelfItem">
													<div class="grid-arr">
														<div  class="grid-arrival">
															<div class="grid-img">
																		<img  src="<?php echo base_url();?>assets/images/spinner.jpg" class="img-responsive" alt="">
																	</div>
															
														</div>
														
														<div class="fish">
															<h6><a href="spinner_pengering.html">Spinner Minyak Keripik dan Abon</a></h6>
															<span class="size">6 liter</span>
															<p ><em class="item_price">Rp 1.600.000</em></p>
															<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Tambahkan ke keranjang</a>
														</div>
													</div>
												</div>
												<div class="col-md-4 product-tab-grid simpleCart_shelfItem">
													<div class="grid-arr">
														<div  class="grid-arrival">
															<div class="grid-img">
																<img  src="<?php echo base_url();?>assets/images/spinner1.jpg" class="img-responsive" alt="">
															</div>
																	<!--
															<figure>		
																<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
																	
																	<div class="grid-img">
																		<img  src="<?php echo base_url();?>assets/images/p27.jpg" class="img-responsive"  alt="">
																	</div>			
																</a>		
															</figure>-->	
														</div>
														
														<div class="fish">
															<h6><a href="spinner_pengering.html">Spinner Peniris Minyak Abon</a></h6>
															<span class="size">3 liter</span>
															<p><em class="item_price">Rp 1.000.000</em></p>
															<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Tambahkan ke keranjang</a>
														</div>
													</div>
												</div>
												<div class="col-md-4 product-tab-grid simpleCart_shelfItem">
													<div class="grid-arr">
														<div  class="grid-arrival">
															<div class="grid-img">
																		<img  src="<?php echo base_url();?>assets/images/spinner2.jpg" class="img-responsive" alt="">
																	</div>
													
														</div>
														
														<div class="fish">
															<h6><a href="spinner_pengering.html">Spinner Peniris Pengiring Pengaktus Minyak</a></h6>
															<span class="size">5 liter</span>
															<p ><em class="item_price">Rp 1.800.000</em></p>
															<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Tambahkan ke keranjang</a>
														</div>
													</div>
												</div>
												<div class="clearfix"></div>
											</div>
											
											</div>
										
											
											
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>