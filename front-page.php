<?php
get_header();
?>
<body>
	<section id="banner">
		<div class="banner-col">
			
			<h1 class="banner_heading">
				<?php printf( get_theme_mod( 'banner_heading', __( 'HOME', 'banner_heading' ) ) ); ?>
			</h1>

		</div>

		<div class="banner-col banner-col--center">
			
			<div class="user-registration">
				<p class="banner-sub">
					<?php printf( get_theme_mod( 'banner_subheading', __( 'Homeowner Login', 'banner_subheading' ) ) ); ?>
				</p>

				<form action="#" method="post" >
					<input type="email" class="form-control" id="floatingInput" placeholder="Name">
					<input type="password" class="form-control" id="floatingPassword" placeholder="Password">

					<div class="action-btns">
						<button type="submit" class="login-btn">Login</button>
						<a href="#" role="button" target="_blank" class="register-btn">Register</a>
					</div>
				</form>
			</div>

		</div>
	</section>

	<section id="description">
		<div class="container description_container">
			<div class="rows description_rows">
				<div class="col-12 description_column text-center">
					<div class="description_column1">
						<h1 class="description_heading"> <?php printf( get_theme_mod( 'second_section_heading', __( 'Your Home is Here', 'second_section_heading' ) ) ); ?> </h1>

						<p class="description_paragraph"><?php printf( get_theme_mod( 'second_section_paragraph', __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum posuere ullamcorper tempor sed habitasse. Curabitur faucibus in consectetur gravida pellentesque odio egestas. Nec egestas erat mi tristique duis urna lectus libero. Felis ut vitae pellentesque elit tincidunt lorem velit integer tortor. Viverra sed aenean et purus est. Arcu, amet adipiscing vitae malesuada. Nisl iaculis id enim nibh semper. Proin morbi donec diam suscipit tincidunt arcu id. Iaculis cursus eros, elit gravida mauris sit nunc. Velit erat phasellus habitant adipiscing nullam consectetur quisque est facilisi. Massa elementum id metus, mattis facilisis. Tincidunt est cursus proin mattis dui donec arcu. Nec dolor elementum ut eu sit turpis proin non, sed.', 'second_section_paragraph' ) ) ); ?></p>
					</div>
					<div class="description_column2">
						<img class="article-image" src="<?php echo get_theme_mod( 'Right_Image', get_bloginfo( 'template_directory' ) . '/assets/images/Temp2_building.png' ); ?>" border="0" alt="map">
					</div>
				</div>
			</div>
		</div>


		<div class="container thirdSection_container">
			<div class="rows thirdSection_rows">
				<div class="col-12 thirdSection_column text-center">
					<div class="thirdSection_news_image">

						<img class="article-image_third" src="<?php echo get_theme_mod( 'Left_Image', get_bloginfo( 'template_directory' ) . '/assets/images/Temp2_thirdimage.png' ); ?>" border="0" alt="map">

					</div>
					<div class="thirdSection_news_minutes">
							<h1 class="third_heading"><?php printf( get_theme_mod( 'first_heading', __( 'Recent News', 'first_heading' ) ) ); ?></h1>
							<a class ="news_link" href="<?php echo get_theme_mod( 'Text_link_1', __( '#', 'Text_link_1' ) ); ?>" ><p class="third_news"><?php printf( get_theme_mod( 'text_1', __( 'This is the First News', 'text_1' ) ) ); ?></p></a>
							<a class ="news_link" href="<?php echo get_theme_mod( 'Text_link_2', __( '#', 'Text_link_2' ) ); ?>" ><p class="third_news"><?php printf( get_theme_mod( 'text_2', __( 'This is the Second News', 'text_2' ) ) ); ?></p></a>
							<a class ="news_link" href="<?php echo get_theme_mod( 'Text_link_3', __( '#', 'Text_link_3' ) ); ?>" ><p class="third_news"><?php printf( get_theme_mod( 'text_3', __( 'This is the Third News', 'text_3' ) ) ); ?></p></a>
					
						<div class="banner-col3">
							<button class="banner_button"><a class= "banner_link" href="<?php echo get_theme_mod( 'button_1_url', __( '#', 'button_1_url' ) ); ?>"><?php printf( get_theme_mod( 'button_1', __( 'View More', 'button_1' ) ) ); ?></a></button>
						</div>
	
						<br>
	
						<h1 class="third_heading"><?php printf( get_theme_mod( 'second_heading', __( 'Minutes', 'second_heading' ) ) ); ?></h1>
						<a class ="news_link" href="<?php echo get_theme_mod( 'Text_link_4', __( '#', 'Text_link_4' ) ); ?>" ><p class="third_news"><?php printf( get_theme_mod( 'text_4', __( 'July 21 Meeting Minute', 'text_4' ) ) ); ?></p></a>
						<a class ="news_link" href="<?php echo get_theme_mod( 'Text_link_5', __( '#', 'Text_link_5' ) ); ?>" ><p class="third_news"><?php printf( get_theme_mod( 'text_5', __( 'July 21 Meeting Minute', 'text_5' ) ) ); ?></p></a>
						<a class ="news_link" href="<?php echo get_theme_mod( 'Text_link_6', __( '#', 'Text_link_6' ) ); ?>" ><p class="third_news"><?php printf( get_theme_mod( 'text_6', __( 'July 21 Meeting Minute', 'text_6' ) ) ); ?></p></a>
					
						<div class="banner-col3">
					
							<button class="banner_button"><a class= "banner_link" href="<?php echo get_theme_mod( 'button_2_url', __( '#', 'button_2_url' ) ); ?>"><?php printf( get_theme_mod( 'button_2', __( 'View More', 'button_2' ) ) ); ?></a></button>
					
						</div> 
				
					</div>
	   			</div>
   </section>
</body>
<?php
get_footer();
?>
