<?php
include "header.php";

?>
<?php
include "nav_bar.php";
?>
<script>
$(document).ready(function(){

	$("#admin").submit(function(e) {

			e.preventDefault();
			
			var form = $(this);

			$.ajax({
				type: "POST",
				url: "admin-login.php",
				data: form.serialize(),
				success: function(data)
				{
					if(data =='success'){
						$("#msg").empty().append('<span style="color:green;">login sucess</span>');

						setTimeout(function() {
						   window.location.href = "admin/index.php";
							}, 2000);


					}else{
						//alert(data);
						$("#msg").empty().append('<span style="color:red;">incorrect username or password</span>');
					}
				}
				});


});

});
</script>

	<!-- signin Model -->
	<!-- Modal1 -->
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">Sign In </h3>
						<p>
							Sign In now, Let's clean the kerala. Don't have an account?
							<a href="#" data-toggle="modal" data-target="#myModal2">
								Sign Up Now</a>
						</p>
						<form action="" method="post" id="admin">
							<div class="styled-input agile-styled-input-top">
								<input type="email" placeholder="User Name" name="Name" required="">
							</div>
							<div class="styled-input">
								<input type="password" placeholder="Password" name="password" required="">
							</div>
							<div><input type="submit" id="adlogin" value="Sign In"></div>
							
							<div id="msg"></div>
						</form>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal1 -->
	<!-- //signin Model -->
	<!-- signup Model -->
	<!-- Modal2 -->

	<script>
$(document).ready(function(){

	$("#staff").submit(function(e) {

			e.preventDefault();
			
			var form = $(this);

			$.ajax({
				type: "POST",
				url: "staff-login.php",
				data: form.serialize(),
				dataType: 'json',
				success: function(data)
				{
					debugger;
					alert(data);
					if( data == "collector"){
						$("#msg2").empty().append('<span style="color:green;">login sucess</span>');

						setTimeout(function() {
						   window.location.href = "staffbooking.php";
							}, 1000);

					}else if( data == "worker"){
						$("#msg2").empty().append('<span style="color:green;">login sucess</span>');

						setTimeout(function() {
						window.location.href = "staff.php";
							}, 1000);
					}else{
						//alert(data);
						$("#msg2").empty().append('<span style="color:red;">incorrect username or password</span>');
					}
				}
				});


});

});
</script>

	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body modal-body-sub_agile">
					<div class="main-mailposi">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
					</div>
					<div class="modal_body_left modal_body_left1">
						<h3 class="agileinfo_sign">LOGIN</h3>
						<p>
							Come join the Green kerala! Let's Clean Up
						</p>
						<form action="" method="POST" id="staff">
							<div class="styled-input agile-styled-input-top">
								<input type="text" placeholder="USER ID" name="name" required="">
							</div>
							<div class="styled-input">
						   <input type="password" placeholder="Password" name="password" required="">
							</div>
						      <input type="submit" id="adlogin" value="Sign In">
							<div id="msg2"></div>
						</form>
						<div class="clearfix"></div>	
					</div>

				</div>
			</div>
			<!-- //Modal content-->
		</div>
	</div>
	<!-- //Modal2 -->
	<!-- //signup Model -->

	<!-- banner-text -->
	<div class="slider">
		<div class="callbacks_container">
			<ul class="rslides callbacks callbacks1" id="slider4">
				<li>
					<div class="w3layouts-banner-top banner">
						<div class="container">
							<div class="agileits-banner-info">
								<h3>Dispose The Waste</h3>
								<p>Save The World
									<i class="fa fa-tree" aria-hidden="true"></i> they will save YOU</p>
								<div class="video-pop-wthree">
									<a href="#small-dialog1" class="view play-icon popup-with-zoom-anim ">
										<i class="fa fa-play-circle" aria-hidden="true"></i>Watch Our Video</a>
									<div id="small-dialog1" class="mfp-hide w3ls_small_dialog wthree_pop">
										<iframe src="https://player.vimeo.com/video/19251347"></iframe>
									</div>
								</div>
								<div class="thim-click-to-bottom">
									<a href="#about" class="scroll">
										<i class="fa  fa-chevron-down"></i>
									</a>
								</div>

							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="w3layouts-banner-top banner-2">
						<div class="container">
							<div class="agileits-banner-info">
								<h3>Dispose the waste</h3>
								<p>Save nature
									<i class="fa fa-tree" aria-hidden="true"></i> they will save you</p>
								<div class="video-pop-wthree">
									<a href="#small-dialog2" class="view play-icon popup-with-zoom-anim ">
										<i class="fa fa-play-circle" aria-hidden="true"></i>Watch Our Video</a>
									<div id="small-dialog2" class="mfp-hide w3ls_small_dialog wthree_pop">
										<iframe src="https://player.vimeo.com/video/19251347"></iframe>
									</div>
								</div>
								<div class="thim-click-to-bottom">
									<a href="#about" class="scroll">
										<i class="fa  fa-chevron-down"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="w3layouts-banner-top banner-3">
						<div class="container">
							<div class="agileits-banner-info">
								<h3>Recycle Plastic Waste</h3>
								<p>Save World
									<i class="fa fa-tree" aria-hidden="true"></i> they will save you</p>
								<div class="video-pop-wthree">
									<a href="#small-dialog3" class="view play-icon popup-with-zoom-anim ">
										<i class="fa fa-play-circle" aria-hidden="true"></i>Watch Our Video</a>
									<div id="small-dialog3" class="mfp-hide w3ls_small_dialog wthree_pop">
										<iframe src="https://player.vimeo.com/video/19251347"></iframe>
									</div>
								</div>
								<div class="thim-click-to-bottom">
									<a href="#about" class="scroll">
										<i class="fa  fa-chevron-down"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="clearfix"> </div>
		<!-- //banner-text -->
	</div>
	<!-- //banner -->

    <!-- about -->
	<div class="banner-bottom-w3l" id="about">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>W</span>elcome
				</h3>
				<div class="tittle-style">
				</div>
				<p>Green Kerala is a project designed to keep our kerala clean.we collect waste from houses,
                     offices,shopes etc... to recycle plastic waste without any pollutions and damages.</p>
			</div>
			<div class="welcome-sub-wthree">
				<div class="col-md-5 banner_bottom_left">
					<h4>About
						<span>Green Kerala</span>
					</h4>
					<p>Green Kerala pvt.ltd formed by polytechnic students in kerala.To being the ensuring hygene management of the state 
						through the adoption of innovation and scientific methods and proven technology.By the active participation of public and private sectors.</p>
					<p>Our company "Green Kerala" aim to ensure that the hygene of the state is never compromised if public and people support us.We all knok plastic
						waste is a non biodegradable waste. Reduce and recycle the plastic waste is the only solution</p>
						<h6 class="w3l-style">ACAlayouts</h6>-
				</div>
				<!-- Stats-->
				<div class="col-md-7 stats-info-agile">
					<div class="w3l-right-stats">
						<div class="stats-grid stat-border">
							<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='3768' data-delay='.5' data-increment="1">3768</div>
							<p>clients</p>
						</div>
						<div class="stats-grid">
							<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='15678' data-delay='.5' data-increment="1">15678</div>
							<p>Likes</p>
						</div>
						<div class="stats-grid stat-border border-st2">
							<div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='700' data-delay='.5' data-increment="1">700</div>
							<p>Volunteers</p>
						</div>
					</div>
				</div>
				<!-- //Stats -->
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about -->
    	<!-- services -->
	<div class="agileits-services" id="services">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>Our A</span>im
				</h3>
				<div class="tittle-style">
				</div>
			</div>
			<div class="agileits-services-row">
				<div class="col-md-4 col-xs-6 agileits-services-grids">
					<div class="col-xs-3 wthree-ser">
						<i class="fa fa-tint" aria-hidden="true"></i>
					</div>
					<div class="col-xs-9 wthree-heading">
						<h4>Save Water</h4>
					</div>
					<div class="clearfix"></div>
					<p>Humans cannot exist without water so don't through our waste to water resources and keep clean hygene</p>
					<a href="#" data-toggle="modal" data-target="#myModal1" class="w3-buttons">Read More</a>
				</div>
				<div class="col-md-4 col-xs-6 agileits-services-grids">
					<div class="col-xs-3 wthree-ser">
						<i class="fa fa-recycle" aria-hidden="true"></i>
					</div>
					<div class="col-xs-9 wthree-heading">
						<h4>Recycling</h4>
					</div>
					<div class="clearfix"></div>
					<p>Plastic is nondegradeable materials. Recycling is a process that turns plastic waste into reusable materials</p>
					<a href="#" data-toggle="modal" data-target="#myModal1" class="w3-buttons">Read More</a>
				</div>
				<div class="col-md-4 col-xs-6 agileits-services-grids">
					<div class="col-xs-3 wthree-ser">
						<i class="fa fa-tree" aria-hidden="true"></i>
					</div>
					<div class="col-xs-9 wthree-heading">
						<h4>Save Nature</h4>
					</div>
					<div class="clearfix"></div>
			        <p>Our responsibility is to extinction,maintaining and restoring the habitat,enhance eco system service </p>
					<a href="#" data-toggle="modal" data-target="#myModal1" class="w3-buttons">Read More</a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agileits-services-row-2">
				<div class="col-md-4 col-xs-6 agileits-services-grids">
					<div class="col-xs-3 wthree-ser">
						<i class="fa fa-envira" aria-hidden="true"></i>
					</div>
					<div class="col-xs-9 wthree-heading">
						<h4>Reduce plastic</h4>
					</div>
					<div class="clearfix"></div>
					<p>Avoid single use of plastic like straw.Take cloth bags for shopping.Avoid plastic containers or reuse such as bottles</p>
					<a href="#" data-toggle="modal" data-target="#myModal1" class="w3-buttons">Read More</a>
				</div>
				<div class="col-md-4 col-xs-6 agileits-services-grids">
					<div class="col-xs-3 wthree-ser">
						<i class="fa fa-globe" aria-hidden="true"></i>
					</div>
					<div class="col-xs-9 wthree-heading">
						<h4>Awareness</h4>
					</div>
					<div class="clearfix"></div>
					<p>By art,photography,etc... we can help to change the way that plastic is viewed by public.Empower more people and organisations to take action.</p>
					<a href="#" data-toggle="modal" data-target="#myModal1" class="w3-buttons">Read More</a>
				</div>
				<div class="col-md-4 col-xs-6 agileits-services-grids">
					<div class="col-xs-3 wthree-ser">
						<i class="fa fa-pagelines" aria-hidden="true"></i>
					</div>
					<div class="col-xs-9 wthree-heading">
						<h4>Plantation</h4>
					</div>
					<div class="clearfix"></div>
					<p>We already destroyed our nature resource. By plantation we can reduce air pollution and get back our nature habitations</p>
					<a href="#" data-toggle="modal" data-target="#myModal1" class="w3-buttons">Read More</a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->
    	<!-- experts section -->
	<div class="what-w3ls">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>O</span>ur Process
				</h3>
				<div class="tittle-style">
				</div>
			</div>
			<div class="what-grids">
				<div class="col-md-6 what-grid">
					<img src="images/work.png" class="img-responsive" alt="" />
				</div>
				<div class="col-md-6 what-grid1">
					<div class="what-top">
						<div class="what-left">
							<i class="fa fa-check" aria-hidden="true"></i>
						</div>
						<div class="what-right">
							<h4>Waste </h4>
							<p>We collect plastic waste,beer/wine (Glass) bottles and E-waste also. You just seperate those waste material and please inform 
							us on our website "Green Kerala.com"	</i></p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="what-top1">
						<div class="what-left">
							<i class="fa fa-thumbs-up" aria-hidden="true"></i>
						</div>
						<div class="what-right">
							<h4>Collecting</h4>
							<p>We collect those waste by booking by government staffs.Transport these waste materials to our work place to clean waste materials and 
								packed well and transport to recycle factory.</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="what-top1">
						<div class="what-left">
							<i class="fa fa-leaf" aria-hidden="true"></i>
						</div>
						<div class="what-right">
							<h4>Recycling</h4>
							<p> The plastic waste materials are recycled into plastic compond and tar , E-wastes are also recycled to usefull electronic components
								and glass materials are also changed to useable products.</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //experts section -->

   </div>
</div>

<?php
include "footer.php"
?>