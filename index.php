<?php
/**
 * The main template file
 *
 */
get_header(); ?>
	
		<!-- Section - centralize-your-inventory -->
		<div class="container centralize-section">
			<div class="container-80">
				<div class="centralize-text">
					<h1>Centralize your Inventory</h1>
					<p>Getting your inventory organized is one of the best things you can do for your business. As you will see by using Stitch, inventory is at the heart of your business and gaining control of your inventory means you gain control over your business as a whole. </p>
					<p>Keeping an accurate inventory count means that you can “always be selling.”  Proper management keeps your sales growing from reordering products that are running low to updating listings with current availability.</p>

					<a href="#" class="orange-butn">GET STARTED NOW</a>
					<p class="mid-text">or</p>
					<a href="#" class="grey-butn">LEARN MORE</a>
				</div> <!-- centralize-text -->
			</div> <!-- container-80 -->
		</div> <!-- container -->

		<!-- Section - store-truck-money -->
		<div class="container">
			<div class="container-80">
				<div class="stm" id="store">
					<div class="icon-div">
						<span class="icon-shop"></span>
					</div>
					<div class="text-div">
						<h3>THIS IS A STORE</h3>
						<p>
							This is a store that people go shopping at. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nulla ex, congue id elementum vel, scelerisque eget sapien. Pellentesque mattis euismod felis vel pellentesque.
						</p>
					</div>
				</div>
				<div class="stm" id="truck">
					<div class="icon-div">
						<span class="icon-truck"></span>
					</div>
					<div class="text-div">
						<h3>DRIVE A TRUCK</h3>
						<p>
							Drive a truck if you need to transport large quantities of stuff. Duis consectetur eleifend ligula nec ullamcorper. Curabitur ornare mauris eget fermentum luctus. Aenean condimentum elit quis efficitur congue. Vestibulum rhoncus porttitor elementum.
						</p>
					</div>
				</div>
				<div class="stm" id="money">
					<div class="icon-div">
						<span class="icon-banknote"></span>
					</div>
					<div class="text-div">
						<h3>MAKE MONEY</h3>
						<p>
							Make money because we all have to. Etiam maximus maximus ipsum, sed tempor velit placerat eu. Ut in porta lacus. Vivamus at mi quis massa posuere tincidunt vel justo id leo aliquet convallis.
						</p>
					</div>
				</div>
			</div> <!-- container-80 -->
		</div> <!-- container -->


		<!-- Contact form - Get started here -->
		<div class="container email-section">
			<div class="container-80">
				<h1>
						Start your free trail today.
				</h1>
				<div class="form-fields">
				  <form action="<?php the_permalink(); ?>" method="post">
				    <input type="email" name="email-id" placeholder="email"/>
				    <input type="text" name="company-name" placeholder="company name"/>
				    <input type="submit" value="GET STARTED FREE">
				  </form>
				</div> <!-- form-fields -->
				<h5>No credit card. No commitment.</h5>
			</div> <!-- container-80 -->
		</div> <!-- container -->
 
<?php get_footer(); ?>