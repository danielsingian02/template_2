<?php
    wp_footer();
    ?>

<footer>
<div class="container footer_container">
           <div class="rows footer_rows">
               <div class="col-12 footer_column text-center">
                <div class="footer_aboutUs">
                <a class="header-link" href="<?php bloginfo('url'); ?>">
                            <?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                
                if ( has_custom_logo() ) {
                    echo '<img src="' . get_theme_mod('footer_image_logo',get_bloginfo('template_directory').'/assets/images/Temp2_Footer_Logo.png'). '" alt="' . get_bloginfo( 'name' ) . '">';
                } else {
                    echo '<h1>' . get_bloginfo('name') . '</h1>';
                }
                        ?>
                        </a>
                       
                        <div class="template_2_footer_menu">
                        <?php wp_nav_menu('primary'); ?>
                        </div>   
                <p class="footer_paragraph">
                    <?php printf( get_theme_mod('Footer_text', __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum posuere ullamcorper tempor sed habitasse. Curabitur faucibus in consectetur gravida pellentesque odio egestas. Nec egestas erat mi tristique duis urna lectus libero. Felis ut vitae pellentesque elit tincidunt lorem velit integer tortor. Viverra sed aenean et purus est. Arcu, amet adipiscing vitae malesuada. Nisl im donec. Augue ridiculus lacus venenatis nam congue.', 'Footer_text' ) )); ?>
                </p>
                <div class="copyright">
                    <p class="copyright">
                        <?php 
                            printf( 
                                '%s. %s &copy; %s', 
                                get_theme_mod('copyright_text', __( 'All Rights Reserved', 'copyright_text' ) ),
                                get_bloginfo('name'), 
                                date_i18n( 'Y' )
                            ); 
                        ?>
                    </p>
                </div>
                </div>
                <div class="thirdSection_map">
                <img class="article-image_map" src="<?php echo get_theme_mod('footer_image_map',get_bloginfo('template_directory').'/assets/images/Temp2_Map.png' )?>" border="0" alt="map">
                </div>
            </div>
       </div>
</footer>
</body>

    
</html>