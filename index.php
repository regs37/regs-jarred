<?php get_header() ?>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
	    	<!-- Brand and toggle get grouped for better mobile display -->
	    	<div class="navbar-header">
		      	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
		      	</button>
	      		<a class="navbar-brand" href="#">
	      			<a class="navbar-brand" href="#"><img class="navbar-brand-img" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/brand03.png" alt="Brand"/>
	      		</a>
	    	</div>

	    	<!-- Collect the nav links, forms, and other content for toggling -->
	    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      		<ul class="nav navbar-nav navbar-right">
		        	<li><a href="#view_home" class="page-scroll">Home</a></li>
		        	<li><a href="#view_about" class="page-scroll">About Us</a></li>
		        	<li><a href="#view_services" class="page-scroll">Services</a></li>
		        	<li><a href="#view_portfolio" class="page-scroll">Portfolio</a></li>
		        	<li><a href="#view_blog" class="page-scroll">Blog</a></li>
		        	<li><a href="#view_testimonials" class="page-scroll">Testimonials</a></li>
		        	<li><a href="#view_contactus" class="page-scroll">Contact Us</a></li>
		        	<li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
	      		</ul>
	    	</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<div id="wrapper">
			<div id="view_home" class="top-contain">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  	<!-- Indicators -->
				  	<ol class="carousel-indicators">
				    	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    	<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    	<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  	</ol>

					<!-- Wrapper for slides -->
				  	<div class="carousel-inner" role="listbox">
				    	<div class="item active">
				      		<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/slider01.png" alt="...">
				      		<div class="carousel-caption">
				        		<h1 class="text-upper">Regs &amp; Jarred Reality</h1>
				        		<p class="text-upper">The homes we design are the first to sell and for the highest price than their competition in the real estate market.</p>
				      		</div>
				    	</div>
				    	<div class="item">
				      		<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/slider02.png" alt="...">
				      		<div class="carousel-caption">
				        		<h1 class="text-upper">Regs &amp; Jarred Reality</h1>
				        		<p class="text-upper">The homes we design are the first to sell and for the highest price than their competition in the real estate market.</p>
				      		</div>
				    	</div>
				    	<div class="item">
				      		<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/slider03.png" alt="...">
				      		<div class="carousel-caption">
				        		<h1 class="text-upper">Regs &amp; Jarred Reality</h1>
				        		<p class="text-upper">The homes we design are the first to sell and for the highest price than their competition in the real estate market.</p>
				      		</div>
				    	</div>
				  	</div>
				  	<!-- Controls -->
				  	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				    	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    	<span class="sr-only">Previous</span>
				  	</a>
				  	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    	<span class="sr-only">Next</span>
				  	</a>
				</div>
			</div>
			<div class="section color-darker" id="view_about">
				<div class="container">
					<div class="row box-contain" id="view_about">
						<div class="col-sm-6 box-panel">
							<img class="img-responsive img-center" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/section-about.png" alt="about-image">
						</div>
						<div class="col-sm-6 box-panel">
							<div class="box-detail">
								<h2>About <span class="text-brand">Regs &amp; Jarred</span></h2>
								<p class="text-paragraph">
									Nam vestibulum commodo sem. Fusce ligula nulla, pharetra non sapien ut, laoreet iaculis sapien. Vivamus feugiat mi vitae odio porta tincidunt. Phasellus accumsan suscipit diam et convallis. Fusce aliquam finibus augue at faucibus. Aliquam rutrum bibendum aliquam. Proin aliquam nunc eu porta tincidunt. Nullam eget interdum massa.<br><br> Praesent laoreet sapien ut velit rutrum gravida. Sed sed libero eu risus sodales elementum at vel risus. Aenean in diam enim. Aenean aliquam elit sit amet efficitur varius.
								</p>
							</div>
						</div>
					</div>
				</div><!-- /container -->
			</div>
			<div class="section-large box-contain box-lamp" id="view_services">
				<div class=" container">
					<div>
						<div class="panel-caption">
							<h1 class="text-brand">Our Services</h1>
						</div>
						<div class="row">
							<div class="col-sm-6 box-panel">
								<div class="row">
									<div class="col-xs-4 col-sm-3">
										<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/section-services01.png" class="img-responsive">
									</div>
									<div class="col-xs-8 col-sm-9">
										<h4>The way we work</h4>
										<p class="text-gray">
											Sed viverra erat id arcu consequat, in gravida lectus suscipit. Aliquam erat volutpat. Ut tincidunt sed ipsum sed sodales. Proin luctus, sem at egestas egestas, lacus arcu facilisis erat, vel consectetur elit nisi nec elit.
										</p>
									</div>
								</div><!-- /row -->
							</div><!-- /col-sm-6 -->
							<div class="col-sm-6 box-panel">
								<div class="row">
									<div class="col-xs-4 col-sm-3">
										<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/section-services03.png" class="img-responsive">
									</div>
									<div class="col-xs-8 col-sm-9">
										<h4>Designers</h4>
										<p class="text-gray">
											Vestibulum pharetra est id sapien efficitur pellentesque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pellentesque est et velit egestas eleifend. Ut finibus erat sit amet erat dictum, eu venenatis risus dapibus.
										</p>
									</div>
								</div><!-- /row -->
							</div><!-- /col-sm-6 -->
						</div><!-- /row -->
						<div class="row">
							<div class="col-sm-6 box-panel">
								<div class="row">
									<div class="col-xs-4 col-sm-3">
										<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/section-services02.png" class="img-responsive">
									</div>
									<div class="col-xs-8 col-sm-9">
										<h4>Delivery Service</h4>
										<p class="text-gray">
											Sed porttitor tellus mi, fringilla eleifend eros laoreet ut. Maecenas vel mauris tempor, dapibus neque id, viverra augue. Fusce ut lacus at elit consequat efficitur at quis enim. Aliquam erat volutpat.
										</p>
									</div>
								</div><!-- /row -->
							</div><!-- /col-sm-6 -->
							<div class="col-sm-6 box-panel">

								<div class="row">
									<div class="col-xs-4 col-sm-3">
										<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/section-services04.png" class="img-responsive">
									</div>
									<div class="col-xs-8 col-sm-9">
										<h4>Virtual Tours</h4>
										<p class="text-gray">
											Proin aliquam nunc eu porta tincidunt. Nullam eget interdum massa. Praesent laoreet sapien ut velit rutrum gravida. Sed sed libero eu risus sodales elementum at vel risus.
										</p>
									</div>
								</div><!-- /row -->

							</div><!-- /col-sm-6 -->
						</div><!-- /row -->
					</div><!-- /view_services -->
				</div><!-- /container -->
			</div><!-- /box-contain -->
			<div class="box-contain" id="view_portfolio">
				<div class="row">
					<div class="col-sm-6 img-container container-relative no-padding">
						<img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/Den-3.jpg">
						<div class="img-caption">
							<h3 class="img-caption-right text-upper text-brand text-shadow">Before</h3>
						</div>
						<div class="img-overlay"></div>
					</div>
					<div class="col-sm-6 img-container container-relative no-padding">
						<img class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/Den-2.jpg">
						<div class="img-caption">
							<h3 class="img-caption-left text-upper text-brand text-shadow">After</h3>
						</div>
						<div class="img-overlay"></div>
					</div>
				</div>
			</div><!-- /box-contain -->
			<div class="section-large" id="view_services" >
				<div class="container">
					<div class="panel-caption">
						<h1 class="text-gray">Our Services</h1>
						<p>Title/caption can be added on fancy box. Click on photo</p>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<div class="img-basic img-animate">
								<img class="img-responsive" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTR5EQtmIiKhzvE5i4I5X7G-Cc3WbCtdw0QclDP1gFhQz-8dEjz" >
							</div>
							<p class="img-caption-text">consectetur adipiscing</p>
						</div>
						<div class="col-sm-4">
							<div class="img-basic img-animate">
								<img class="img-responsive" src="https://karlaworldblog.files.wordpress.com/2015/10/living-room-design-20131.jpg" >
							</div>
							<p class="img-caption-text">consectetur adipiscing</p>
						</div>
						<div class="col-sm-4">
							<div class="img-basic img-animate">
								<img class="img-responsive" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTR5EQtmIiKhzvE5i4I5X7G-Cc3WbCtdw0QclDP1gFhQz-8dEjz" >
							</div>
							<p class="img-caption-text">consectetur adipiscing</p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4 ">
							<div class="img-basic img-animate">
								<img class="img-responsive" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQndzeLlVpn4D8A9JUkfvPiAFov57gpJocSCR2wa_8-uW1AE1i3" >
							</div>
							<p class="img-caption-text">consectetur adipiscing</p>
						</div>
						<div class="col-sm-4">
							<div class="img-basic img-animate">
								<img class="img-responsive" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTR5EQtmIiKhzvE5i4I5X7G-Cc3WbCtdw0QclDP1gFhQz-8dEjz" >
							</div>
							<p class="img-caption-text">consectetur adipiscing</p>
						</div>
						<div class="col-sm-4">
							<div class="img-basic img-animate">
								<img class="img-responsive" src="http://st.hzcdn.com/fimgs/0bb1fb0206aaa048_0534-w500-h400-b0-p0--traditional-living-room.jpg">
							</div>
							<p class="img-caption-text">consectetur adipiscing</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section-large color-darker" id="view_blog" >
			<div class="container">
				<div class="panel-caption">
					<h1 class="text-gray">Blog</h1>
						<p>Tips and dosectetur adipisicing elit</p>
				</div>
				<div class="row">
					<?php if ( have_posts() ) : ?>
						<?php /* The loop */ ?>
						<?php 
							$counter = 0;
							while ( have_posts() ) : the_post(); 
								$counter++;
							?>
							<div class="col-sm-6">
								<div class="panel panel-default">

									<div class="panel-body">
										<h4 class="text-brand"><?php echo the_title();?></h4>
										<p class="text-small">
											<i class="fa fa-user"></i> Written by 
												<a class="text-brand" href="<?php echo get_author_link(false, $authordata->ID, $authordata->user_nicename);?>">
												<?php the_author()?>

												</a>
											<span class="pull-right"><i class="fa fa-clock-o"></i> <?php echo get_post_time( get_option( 'date_format' ), false , $post -> ID  ); ?></span></p>
										<p>
											<?php the_excerpt()?>
											<!-- more -->
										</p>
									</div>
								</div>
							</div>
						<?php 
							if($counter == 2){
								?></div>
								<div class="row">
								<?php
								$counter = 0;
							}
							endwhile; 
						?>


					<?php else : ?>
						<?php get_template_part( 'content', 'none' ); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="section-large color-darker-2 color-darker-border-brand">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<h2 class="pull-left text-no-margin text-wide">GET THE LATEST UPDATES </h2>
						<form class="form-inline">
						 	<div class="form-group">
						 	   	<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email">
						  	</div>
						  	<button type="submit" class="btn btn-primary">SIGN ME UP <span class="glyphicon glyphicon-send"></span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="section-large color-darker" id="view_testimonials" >
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<div class="panel-caption">
							<h1 class="text-gray text-thin">People <span class="text-brand"><i class="fa fa-heart-o"></i></span> R &amp; J</h1>
						</div>
						<p class="text-center text-review text-gray"><i>Quisque ut vulputate magna. Sed rutrum risus luctus nisl malesuada, nec interdum arcu feugiat. Nulla hendrerit massa sed erat bibendum pulvinar. Nam eget ante vestibulum, vehicula orci quis, dapibus tellus.</i></p>
						<div class="media-outer">
							<div class="media-inner">
								<div class="media">
								  	<div class="media-left">
								    	<a href="#">
								    		<img class="media-object" src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQVh91Hb5r0db5nXNX0ZiTauksasNt7MjpmRMWOVt6B0JSBCZK5" alt="...">
								    	</a>
								  	</div>
								  	<div class="media-body">
								    	<h2 class="media-heading text-upper">JOHN STEWART</h2>
								    	<p class="text-fade">Las Vegas</p>
								  	</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section" id="view_blog" >
			<div class="container">
				<p class="text-center text-fade text-upper">Clients</p>
				<div class="row">
					<div class="col-sm-2 col-xs-3 col-md-2">
						<img class="img-responsive" src="http://hartointerior.com/wp-content/uploads/2015/12/Interior-Design-Contract-Template-2016.jpg">
					</div>
					<div class="col-sm-2 col-xs-3 col-md-2">
						<img class="img-responsive" src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSzt3K0cXwLNkKUKNnkNkUldEu0i0HCyjfOdyyswPr9ugDvty7K">
					</div>
					<div class="col-sm-2 col-xs-3 col-md-2">
						<img class="img-responsive" src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSIZaE21pZr0AZMwu7xew8L89RVj0a6yA1zzc7gAQulSrf9DuVL">
					</div>
					<div class="col-sm-2 col-xs-3 col-md-2">
						<img class="img-responsive" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTjMqcqvv7RlSOdDuERookATy6u6fxZDpR7_2heNRJWEjnlgIic">
					</div>
					<div class="col-sm-2 col-xs-3 col-md-2">
						<img class="img-responsive" src="http://im3.peldata.com/bl7/61323/20bg.jpg">
					</div>
					<div class="col-sm-2 col-xs-3 col-md-2">
						<img class="img-responsive" src="https://img0.etsystatic.com/028/2/6375559/il_340x270.581891566_pp5h.jpg">
					</div>
				</div>
			</div>
		</div>
		<div class="section-large section-contact" id="view_contactus">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="panel-black clearfix">
							<h2 class="text-center text-white text-upper">Contact Us</h2><br>
							<form>
								<div class="form-group">
									<div class="input-group">
								  		<input type="text" class="form-control" placeholder="Name" aria-describedby="basic-addon2">
								  		<span class="input-group-addon" id="basic-addon2"><i class="fa fa-user"></i></span>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
								  		<input type="text" class="form-control" placeholder="Email" aria-describedby="basic-addon2">
								  		<span class="input-group-addon" id="basic-addon2"><i class="fa fa-envelope"></i></span>
									</div>
								</div>
								<div class="form-group">
									<textarea class="form-control" rows="7" placeholder="Message"></textarea>
								</div>
								<button class="btn btn-primary btn-lg pull-right btn-wide"><span class="text-upper">Send</span></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<img class="" src="assets/images/brand03.png" alt="Brand"/>
						<br><br>
						<p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et turpis quis dolor fringilla pharetra pretium ac felis.</p>

						<br><br>
						<p>
							Tel: +63 123456/  +63 987654<br>
							Mail: <a class="text-brand">info@regsandjarred.com</a>
						</p>
					</div>
					<div class="col-sm-3">
						<h3 class="text-brand">Column 2</h3>
						<p>
							Etiam malesuada augue et ultrices auctor. Nunc id odio non sapien blandit consequat tristique eget ante. Quisque volutpat accumsan purus at luctus. Sed porttitor augue nec turpis ultricies, quis malesuada erat porttitor. Aliquam erat volutpat.
						</p>
					</div>
					<div class="col-sm-3">
						<h3 class="text-brand">Tempor Eleifend</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						</p>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<div class="container">
				<ul class="list-social pull-right">
					<li><a><i class="fa fa-instagram"></i></a></li>
					<li><a><i class="fa fa-pinterest"></i></a></li>
					<li><a><i class="fa fa-linkedin"></i></a></li>
					<li><a><i class="fa fa-dribbble"></i></a></li>
					<li><a><i class="fa fa-google-plus"></i></a></li>
					<li><a><i class="fa fa-facebook"></i></a></li>
					<li><a><i class="fa fa-twitter"></i></a></li>
					<li><a><i class="fa fa-youtube"></i></a></li>
				</ul>
				<p class="text-upper">&copy; COPYRIGHT 2016 REGS<span class="text-white">&amp;</span>JARRED.</p>
			</div>
		</footer>
<?php get_footer() ?>