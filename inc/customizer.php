<?php
add_action( 'customize_register', 'customize_register' );
function customize_register( $wp_customize ) {
    // All the Customize Options you create goes here

    // Move Homepage Settings section underneath the "Site Identity" section
    $wp_customize->get_section('title_tagline')->priority = 1;
    $wp_customize->get_section('static_front_page')->priority = 2;
    $wp_customize->get_section('static_front_page')->title = __( 'Customize Homepage', 'customize_register' );

    // Theme Options Panel
$wp_customize->add_panel( 'theme_options', 
array(
    //'priority'       => 100,
    'title'            => __( 'Theme Options', 'theme_options' ),
    'description'      => __( 'Theme Modifications like color scheme, theme texts and layout preferences can be done here', 'theme_options' ),
) 
);
// Text Options Section Inside Theme
$wp_customize->add_section( 'text_options', 
    array(
        'title'         => __( 'Footer Text Options', 'text_options' ),
        'priority'      => 1,
        'panel'         => 'theme_options'
    ) 
);
// Setting for Copyright text.
$wp_customize->add_setting( 'copyright_text',
    array(
        'default'           => __( 'All rights reserved ', 'copyright_text' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'copyright_text', 
    array(
        'type'        => 'text',
        'priority'    => 10,
        'section'     => 'text_options',
        'label'       => 'Copyright text',
        'description' => 'Text put here will be shown in the footer',
    ) 
);

$wp_customize->add_setting( 'Footer_text',
    array(
        'default'           => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum posuere ullamcorper tempor sed habitasse. Curabitur faucibus in consectetur gravida pellentesque odio egestas. Nec egestas erat mi tristique duis urna lectus libero. Felis ut vitae pellentesque elit tincidunt lorem velit integer tortor. Viverra sed aenean et purus est. Arcu, amet adipiscing vitae malesuada. Nisl im donec. Augue ridiculus lacus venenatis nam congue.', 'Footer_text' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'Footer_text', 
    array(
        'type'        => 'text',
        'priority'    => 10,
        'section'     => 'text_options',
        'label'       => 'Footer description text',
        'description' => 'Text put here will be shown in the footer',
    ) 
);

$wp_customize->add_setting( 'footer_image_logo',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/Temp2_Footer_Logo.png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'footer_image_logo', 
    array(
        'priority'    => 40,
        'section'     => 'text_options',
        'label'       => 'Image',
        'description' => 'Image put here will be shown as logo footer',
    ) 
));

$wp_customize->add_setting( 'footer_image_map',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/Temp2_Map.png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'footer_image_map', 
    array(
        'priority'    => 40,
        'section'     => 'text_options',
        'label'       => 'Image',
        'description' => 'Image put here will be shown as Footer Image',
    ) 
));

//banner
// Text Options Section Inside Theme
$wp_customize->add_section( 'banner_text_options', 
    array(
        'title'         => __( 'Banner Text Options', 'banner_text_options' ),
        'priority'      => 2,
        'panel'         => 'theme_options'
    ) 
);
// Setting for Copyright text.
$wp_customize->add_setting( 'banner_heading',
    array(
        'default'           => __( 'HOME', 'banner_heading' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'banner_heading', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'banner_text_options',
        'label'       => 'Heading',
        'description' => 'Text put here will be shown in banner sections heading',
    ) 
);

//second section
// Text Options Section Inside Theme
$wp_customize->add_section( 'second_section_text_options', 
    array(
        'title'         => __( 'Second Section Text Options', 'second_section_text_options' ),
        'priority'      => 2,
        'panel'         => 'theme_options'
    ) 
);
// Setting for Copyright text.
$wp_customize->add_setting( 'second_section_heading',
    array(
        'default'           => __( 'Call it your home', 'second_section_heading' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'second_section_heading', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'second_section_text_options',
        'label'       => 'Heading',
        'description' => 'Text put here will be shown in second sections heading',
    ) 
);

$wp_customize->add_setting( 'second_section_paragraph',
    array(
        'default'           => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum posuere ullamcorper tempor sed habitasse. Curabitur faucibus in consectetur gravida pellentesque odio egestas. Nec egestas erat mi tristique duis urna lectus libero. Felis ut vitae pellentesque elit tincidunt lorem velit integer tortor. Viverra sed aenean et purus est. Arcu, amet adipiscing vitae malesuada. Nisl iaculis id enim nibh semper. Proin morbi donec diam suscipit tincidunt arcu id. Iaculis cursus eros, elit gravida mauris sit nunc. Velit erat phasellus habitant adipiscing nullam consectetur quisque est facilisi. Massa elementum id metus, mattis facilisis. Tincidunt est cursus proin mattis dui donec arcu. Nec dolor elementum ut eu sit turpis proin non, sed.<br><br> Acaliquet orci hendrerit duis velit lorem iaculis porta. Egestas auctor ac blandit sed eros, neque. Turpis amet felis ultricies elementum. Suspendisse cum id lacus, consectetur orci, adipiscing vitae. Dignissim lorem libero, donec malesuada non. Aenean fames fringilla egestas mattis eget elementum, diam donec. Augue ridiculus lacus venenatis nam congue.', 'second_section_paragraph' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'second_section_paragraph', 
    array(
        'type'        => 'textarea',
        'priority'    => 20,
        'section'     => 'second_section_text_options',
        'label'       => 'Description',
        'description' => 'Text put here will be shown in second sections description',
    ) 
);

$wp_customize->add_setting( 'Right_Image',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/Temp2_building.png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'Right_Image', 
    array(
        'priority'    => 40,
        'section'     => 'second_section_text_options',
        'label'       => 'Image',
        'description' => 'Image put here will be shown the first image',
    ) 
));



//third section
// Text Options Section Inside Theme
$wp_customize->add_section( 'third_text_options', 
    array(
        'title'         => __( 'Third Section Text Options', 'third_text_options' ),
        'priority'      => 4,
        'panel'         => 'theme_options'
    ) 
);
// Setting for Copyright text.
$wp_customize->add_setting( 'Left_Image',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/Temp2_thirdimage.png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'Left_Image', 
    array(
        'priority'    => 40,
        'section'     => 'third_text_options',
        'label'       => 'Image',
        'description' => 'Image put here will be shown the first image',
    ) 
));
$wp_customize->add_setting( 'first_heading',
    array(
        'default'           => __( 'Recent News', 'first_heading' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'first_heading', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'third_text_options',
        'label'       => 'Heading',
        'description' => 'Text put here will be shown as heading',
    ) 
);
$wp_customize->add_setting( 'Text_link_1',
    array(
        'default'           => __( '#', 'Text_link_1' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'Text_link_1', 
    array(
        'type'        => 'url',
        'priority'    => 20,
        'section'     => 'third_text_options',
        'label'       => 'Text 1 Link',
        'description' => 'Link put here will be the redirection link of your text when clicked',
    ) 
);

//button
$wp_customize->add_setting( 'text_1',
    array(
        'default'           => __( 'This is the First News', 'text_1' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'text_1', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'third_text_options',
        'label'       => 'Text 2',
        'description' => 'Text put here will be shown in third section',
    ) 
);

$wp_customize->add_setting( 'Text_link_2',
    array(
        'default'           => __( '#', 'Text_link_2' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'Text_link_2', 
    array(
        'type'        => 'url',
        'priority'    => 20,
        'section'     => 'third_text_options',
        'label'       => 'Text 2 Link',
        'description' => 'Link put here will be the redirection link of your text when clicked',
    ) 
);

//button
$wp_customize->add_setting( 'text_2',
    array(
        'default'           => __( 'This is the Second News', 'text_2' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'text_2', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'third_text_options',
        'label'       => 'Text 2',
        'description' => 'Text put here will be shown in third section',
    ) 
);
$wp_customize->add_setting( 'Text_link_3',
    array(
        'default'           => __( '#', 'Text_link_3' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'Text_link_3', 
    array(
        'type'        => 'url',
        'priority'    => 20,
        'section'     => 'third_text_options',
        'label'       => 'Text 3 Link',
        'description' => 'Link put here will be the redirection link of your text when clicked',
    ) 
);

//button
$wp_customize->add_setting( 'text_3',
    array(
        'default'           => __( 'This is the Third News', 'text_3' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'text_3', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'third_text_options',
        'label'       => 'Text 3',
        'description' => 'Text put here will be shown in third section',
    ) 
);

$wp_customize->add_setting( 'button_1_url',
    array(
        'default'           => __( '#', 'button_1_url' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'button_1_url', 
    array(
        'type'        => 'url',
        'priority'    => 20,
        'section'     => 'third_text_options',
        'label'       => 'Button 1 Link',
        'description' => 'Link put here will be the redirection link of your button when clicked',
    ) 
);

//button
$wp_customize->add_setting( 'button_1',
    array(
        'default'           => __( 'View More', 'button_1' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'button_1', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'third_text_options',
        'label'       => 'Button 1 text',
        'description' => 'Text put here will be shown in  button',
    ) 
);

$wp_customize->add_setting( 'second_heading',
    array(
        'default'           => __( 'Minutes', 'second_heading' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'second_heading', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'third_text_options',
        'label'       => 'Heading',
        'description' => 'Text put here will be shown as heading',
    ) 
);

$wp_customize->add_setting( 'Text_link_4',
    array(
        'default'           => __( '#', 'Text_link_4' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'Text_link_4', 
    array(
        'type'        => 'url',
        'priority'    => 20,
        'section'     => 'third_text_options',
        'label'       => 'Text 4 Link',
        'description' => 'Link put here will be the redirection link of your text when clicked',
    ) 
);

//button
$wp_customize->add_setting( 'text_4',
    array(
        'default'           => __( 'July 21 Meeting Minute', 'text_4' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'text_4', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'third_text_options',
        'label'       => 'Text 4',
        'description' => 'Text put here will be shown in third section',
    ) 
);

$wp_customize->add_setting( 'Text_link_5',
    array(
        'default'           => __( '#', 'Text_link_5' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'Text_link_5', 
    array(
        'type'        => 'url',
        'priority'    => 20,
        'section'     => 'third_text_options',
        'label'       => 'Text 5 Link',
        'description' => 'Link put here will be the redirection link of your text when clicked',
    ) 
);

//button
$wp_customize->add_setting( 'text_5',
    array(
        'default'           => __( 'July 21 Meeting Minute', 'text_5' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'text_5', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'third_text_options',
        'label'       => 'Text 5',
        'description' => 'Text put here will be shown in third section',
    ) 
);
$wp_customize->add_setting( 'Text_link_6',
    array(
        'default'           => __( '#', 'Text_link_6' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'Text_link_6', 
    array(
        'type'        => 'url',
        'priority'    => 20,
        'section'     => 'third_text_options',
        'label'       => 'Text 6 Link',
        'description' => 'Link put here will be the redirection link of your text when clicked',
    ) 
);

//button
$wp_customize->add_setting( 'text_6',
    array(
        'default'           => __( 'July 21 Meeting Minute', 'text_6' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'text_6', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'third_text_options',
        'label'       => 'Text 6',
        'description' => 'Text put here will be shown in third section',
    ) 
);

$wp_customize->add_setting( 'button_2_url',
    array(
        'default'           => __( '#', 'button_2_url' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'button_2_url', 
    array(
        'type'        => 'url',
        'priority'    => 20,
        'section'     => 'third_text_options',
        'label'       => 'Button 2 Link',
        'description' => 'Link put here will be the redirection link of your button when clicked',
    ) 
);

//button
$wp_customize->add_setting( 'button_2',
    array(
        'default'           => __( 'View More', 'button_2' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'button_2', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'third_text_options',
        'label'       => 'Button 2 text',
        'description' => 'Text put here will be shown in  button',
    ) 
);
}
?>