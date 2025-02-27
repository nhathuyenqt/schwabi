<?php


new \Kirki\Panel(
    'panel_id',
    [
        'priority'    => 10,
        'title'       => esc_html__( 'Routex Panel', 'routex' ),
        'description' => esc_html__( 'Routex Panel Description.', 'routex' ),
    ]
);

// header_top_section
function header_top_section(){
    // header_top_bar section 
    new \Kirki\Section(
        'header_top_section',
        [
            'title'       => esc_html__( 'Header Info', 'routex' ),
            'description' => esc_html__( 'Header Section Information.', 'routex' ),
            'panel'       => 'panel_id',
            'priority'    => 100,
        ]
    );
    // header_top_bar section 

    new \Kirki\Field\Radio_Image(
        [
            'settings'    => 'header_layout_custom',
            'label'       => esc_html__( 'Chose Header Style', 'routex' ),
            'section'     => 'header_top_section',
            'priority'    => 10,
            'choices'     => [
                'header_1'   => get_template_directory_uri() . '/inc/img/header/header-1.png',
                'header_2' => get_template_directory_uri() . '/inc/img/header/header-2.png',
                'header_3'  => get_template_directory_uri() . '/inc/img/header/header-3.png',
                'header_4'  => get_template_directory_uri() . '/inc/img/header/header-4.png',
                'header_5'  => get_template_directory_uri() . '/inc/img/header/header-5.png',
                'header_6'  => get_template_directory_uri() . '/inc/img/header/header-6.png'
            ],
            'default'     => 'header_1',
            'active_callback' => [
                [
                    'setting' => 'routex_header_elementor_switch',
                    'operator' => '==',
                    'value' => false
                ]
            ]
        ]
    );

    $header_type = array(
        'post_type'      => 'tp-header'
    );
    $header_type_loop = get_posts($header_type);
    $header_post_obj_arr = array();
    foreach($header_type_loop as $post){
        $header_post_obj_arr[$post->ID] = $post->post_title;
    }

    wp_reset_postdata();

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'header_topbar_switch',
            'label'       => esc_html__( 'Header Topbar Switch', 'routex' ),
            'description' => esc_html__( 'Header Topbar switch On/Off', 'routex' ),
            'section'     => 'header_top_section',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'routex' ),
                'off' => esc_html__( 'Disable', 'routex' ),
            ],
        ]
    );    

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'header_right_switch',
            'label'       => esc_html__( 'Header Right Switch', 'routex' ),
            'description' => esc_html__( 'Header Right switch On/Off', 'routex' ),
            'section'     => 'header_top_section',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'routex' ),
                'off' => esc_html__( 'Disable', 'routex' ),
            ],
        ]
    ); 

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'header_preloader_switch',
            'label'       => esc_html__( 'Header Preloader Switch', 'routex' ),
            'description' => esc_html__( 'Header Preloader switch On/Off', 'routex' ),
            'section'     => 'header_top_section',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'routex' ),
                'off' => esc_html__( 'Disable', 'routex' ),
            ],
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'header_backtotop_switch',
            'label'       => esc_html__( 'Header Back to Top Switch', 'routex' ),
            'description' => esc_html__( 'Header Back to Top switch On/Off', 'routex' ),
            'section'     => 'header_top_section',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'routex' ),
                'off' => esc_html__( 'Disable', 'routex' ),
            ],
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'header_button_text',
            'label'    => esc_html__( 'Button Text', 'routex' ),
            'section'  => 'header_top_section',
            'default'  => esc_html__( 'Book Now ', 'routex' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\URL(
        [
            'settings' => 'header_button_link',
            'label'    => esc_html__( 'Button URL', 'routex' ),
            'section'  => 'header_top_section',
            'default'  => '#',
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'header_phone_label',
            'label'    => esc_html__( 'Phone Number Label', 'routex' ),
            'section'  => 'header_top_section',
            'default'  => esc_html__( 'Need help?', 'routex' ),
            'priority' => 10,
        ]
    );  
    new \Kirki\Field\Text(
        [
            'settings' => 'header_phone',
            'label'    => esc_html__( 'Phone Number', 'routex' ),
            'section'  => 'header_top_section',
            'default'  => esc_html__( '8801310069824', 'routex' ),
            'priority' => 10,
        ]
    );    

    new \Kirki\Field\URL(
        [
            'settings' => 'header_phone_url',
            'label'    => esc_html__( 'Phone Number URL', 'routex' ),
            'section'  => 'header_top_section',
            'default'  => esc_html__( '8801310069824', 'routex' ),
            'priority' => 10,
        ]
    );   
    
    new \Kirki\Field\Text(
        [
            'settings' => 'header_email',
            'label'    => esc_html__( 'Emain', 'routex' ),
            'section'  => 'header_top_section',
            'default'  => esc_html__( 'info@example.com', 'routex' ),
            'priority' => 10,
        ]
    );    

    new \Kirki\Field\URL(
        [
            'settings' => 'header_email_url',
            'label'    => esc_html__( 'Email URL', 'routex' ),
            'section'  => 'header_top_section',
            'default'  => esc_html__( 'info@example.com', 'routex' ),
            'priority' => 10,
        ]
    );  
    new \Kirki\Field\Text(
        [
            'settings' => 'header_location',
            'label'    => esc_html__( 'Location Text', 'routex' ),
            'section'  => 'header_top_section',
            'default'  => esc_html__( '30 Broklyn Golden Street. USA', 'routex' ),
            'priority' => 10,
        ]
    );    

    new \Kirki\Field\URL(
        [
            'settings' => 'header_location_url',
            'label'    => esc_html__( 'Location URL', 'routex' ),
            'section'  => 'header_top_section',
            'default'  => esc_html__( '#', 'routex' ),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'header_time',
            'label'    => esc_html__( 'Header Top Time', 'routex' ),
            'section'  => 'header_top_section',
            'default'  => esc_html__( 'Sunday - Friday: 9 am - 8 pm', 'routex' ),
            'priority' => 10,
        ]
    );
}
header_top_section();

// header_side_section
function header_side_section(){
    // header_top_bar section 
    new \Kirki\Section(
        'header_side_section',
        [
            'title'       => esc_html__( 'Header Side Info', 'routex' ),
            'description' => esc_html__( 'Header Side Information.', 'routex' ),
            'panel'       => 'panel_id',
            'priority'    => 110,
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'header_side_info_switch',
            'label'       => esc_html__( 'Header Side Info Switch', 'routex' ),
            'description' => esc_html__( 'Header Side Info switch On/Off', 'routex' ),
            'section'     => 'header_side_section',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'routex' ),
                'off' => esc_html__( 'Disable', 'routex' ),
            ],
        ]
    );  
    // header_side_section section 
    new \Kirki\Field\Image(
        [
            'settings'    => 'header_side_logo',
            'label'       => esc_html__( 'Header Side Logo', 'routex' ),
            'description' => esc_html__( 'Theme Default/Primary Logo Here', 'routex' ),
            'section'     => 'header_side_section',
            'default'     => get_template_directory_uri() . '/assets/imgs/logo/logo.svg',
        ]
    );

    // Contacts Text 
    new \Kirki\Field\Text(
        [
            'settings' => 'header_side_contacts_text',
            'label'    => esc_html__( 'Contacts Text', 'routex' ),
            'section'  => 'header_side_section',
            'default'  => esc_html__( 'CONTACT US', 'routex' ),
            'priority' => 10,
        ]
    );

}
header_side_section();

// header_social_section
function header_social_section(){
    // header_top_bar section 
    new \Kirki\Section(
        'header_social_section',
        [
            'title'       => esc_html__( 'Social Area', 'routex' ),
            'description' => esc_html__( 'Social URL.', 'routex' ),
            'panel'       => 'panel_id',
            'priority'    => 120,
        ]
    );
    // header_top_bar section 

    new \Kirki\Field\URL(
        [
            'settings' => 'header_facebook_link',
            'label'    => esc_html__( 'Facebook URL', 'routex' ),
            'section'  => 'header_social_section',
            'default'  => '#',
            'priority' => 10,
        ]
    ); 
    new \Kirki\Field\URL(
        [
            'settings' => 'header_linkedin_link',
            'label'    => esc_html__( 'Linkedin URL', 'routex' ),
            'section'  => 'header_social_section',
            'default'  => '#',
            'priority' => 10,
        ]
    ); 

    new \Kirki\Field\URL(
        [
            'settings' => 'header_instagram_link',
            'label'    => esc_html__( 'Instagram URL', 'routex' ),
            'section'  => 'header_social_section',
            'default'  => '#',
            'priority' => 10,
        ]
    );  

    new \Kirki\Field\URL(
        [
            'settings' => 'header_pinterest_link',
            'label'    => esc_html__( 'Pinterest URL', 'routex' ),
            'section'  => 'header_social_section',
            'default'  => '#',
            'priority' => 10,
        ]
    );  

}
header_social_section();

// header_logo_section
function header_logo_section(){
    // header_logo_section section 
    new \Kirki\Section(
        'header_logo_section',
        [
            'title'       => esc_html__( 'Header Logo', 'routex' ),
            'description' => esc_html__( 'Header Logo Settings.', 'routex' ),
            'panel'       => 'panel_id',
            'priority'    => 130,
        ]
    );

    // header_logo_section section 
    new \Kirki\Field\Image(
        [
            'settings'    => 'header_logo',
            'label'       => esc_html__( 'Header Logo', 'routex' ),
            'description' => esc_html__( 'Theme Default/Primary Logo Here', 'routex' ),
            'section'     => 'header_logo_section',
            'default'     => get_template_directory_uri() . '/assets/imgs/logo/logo.svg',
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'header_secondary_logo',
            'label'       => esc_html__( 'Header Secondary Logo / White', 'routex' ),
            'description' => esc_html__( 'Theme Secondary Logo Here', 'routex' ),
            'section'     => 'header_logo_section',
            'default'     => get_template_directory_uri() . '/assets/imgs/logo/logo-3.svg',
        ]
    );
    new \Kirki\Field\Slider(
        [
            'settings'    => 'routex_logo_size',
            'label'       => esc_html__( 'Logo Size Control', 'routex' ),
            'section'     => 'header_logo_section',
            'default'     => 10,
            'choices'     => [
                'min'  => 156,
                'max'  => 600,
                'step' => 4,
            ],
        ]
    );

}
header_logo_section();


// header_logo_section
function header_breadcrumb_section(){
    // header_logo_section section 
    new \Kirki\Section(
        'header_breadcrumb_section',
        [
            'title'       => esc_html__( 'Breadcrumb', 'routex' ),
            'description' => esc_html__( 'Breadcrumb Settings.', 'routex' ),
            'panel'       => 'panel_id',
            'priority'    => 160,
        ]
    );
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'routex_breadcrumb_switch',
            'label'       => esc_html__( 'Breadcrumb Switch', 'routex' ),
            'description' => esc_html__( 'Breadcrumb On/Off', 'routex' ),
            'section'     => 'header_breadcrumb_section',
            'default'     => 'on',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'routex' ),
                'off' => esc_html__( 'Disable', 'routex' ),
            ],
        ]
    ); 

    // header_logo_section section 
    new \Kirki\Field\Image(
        [
            'settings'    => 'breadcrumb_image',
            'label'       => esc_html__( 'Breadcrumb Image', 'routex' ),
            'description' => esc_html__( 'Breadcrumb Image add/remove', 'routex' ),
            'section'     => 'header_breadcrumb_section',
            'default'     => get_template_directory_uri() . '/assets/imgs/breadcrumb/breadcrumb.png',
        ]
    );

    new \Kirki\Field\Color(
        [
            'settings'    => 'breadcrumb_bg_color',
            'label'       => __( 'Breadcrumb BG Color', 'routex' ),
            'description' => esc_html__( 'You can change breadcrumb bg color from here.', 'routex' ),
            'section'     => 'header_breadcrumb_section',
            'default'     => '#f3fbfe',
        ]
    );
    new \Kirki\Field\Background(
        [
            'settings'    => 'breadcrumb_bg_overlay_color',
            'label'       => esc_html__( 'Breadcrumb Overlay Background', 'routex' ),
            'description' => esc_html__( 'Breadcrumb Overlay Background are pretty complex! (but useful if used properly)', 'routex' ),
            'section'     => 'header_breadcrumb_section',
            'default'     => [
                'background-color'      => '#034833',
                'background-image'      => '',
                'background-repeat'     => 'repeat',
                'background-position'   => 'center center',
                'background-size'       => 'cover',
                'background-attachment' => 'scroll',
            ],
            'transport'   => 'auto',
            'output'      => [
                [
                    'element' => '.breadcrumb__area::before',
                ],
            ],
        ]
    );
    new \Kirki\Field\Text(
        [
        'type'     => 'text',
        'settings' => 'routex_breadcrumb_pt',
        'label'    => esc_html__( 'Breadcrumb Padding Top', 'routex' ),
        'section'  => 'header_breadcrumb_section',
        'default'  => esc_html__( '166', 'routex' ),
        ]
    );

    new \Kirki\Field\Text(
        [
        'type'     => 'text',
        'settings' => 'routex_breadcrumb_pb',
        'label'    => esc_html__( 'Breadcrumb Padding Bottom', 'routex' ),
        'section'  => 'header_breadcrumb_section',
        'default'  => esc_html__( '160', 'routex' ),
        ]
    );

}
header_breadcrumb_section();

// header_logo_section
function full_site_typography(){
    // header_logo_section section 
    new \Kirki\Section(
        'full_site_typography',
        [
            'title'       => esc_html__( 'Typography', 'routex' ),
            'description' => esc_html__( 'Typography Settings.', 'routex' ),
            'panel'       => 'panel_id',
            'priority'    => 190,
        ]
    );

    new \Kirki\Field\Typography(
        [
            'settings'    => 'full_site_typography_settings',
            'label'       => esc_html__( 'Typography Control', 'routex' ),
            'description' => esc_html__( 'The full set of options.', 'routex' ),
            'section'     => 'full_site_typography',
            'priority'    => 10,
            'transport'   => 'auto',
            'default'     => [
                'font-family'     => '',
                'variant'         => '',
                'color'           => '',
                'font-size'       => '',
                'line-height'     => '',
                'text-align'      => '',
            ],
            'output'      => [
                [
                    'element' => '.tpbreadcrumb-title',
                ],
            ],
        ]
    );
}
full_site_typography();

// header_logo_section
function footer_layout_section(){
    // header_logo_section section 
    new \Kirki\Section(
        'footer_layout_section',
        [
            'title'       => esc_html__( 'Footer', 'routex' ),
            'description' => esc_html__( 'Footer Settings.', 'routex' ),
            'panel'       => 'panel_id',
            'priority'    => 190,
        ]
    );
    // footer_widget_number section 
    new \Kirki\Field\Select(
        [
            'settings'    => 'footer_widget_number',
            'label'       => esc_html__( 'Footer Widget Number', 'routex' ),
            'section'     => 'footer_layout_section',
            'default'     => '4',
            'placeholder' => esc_html__( 'Choose an option', 'routex' ),
            'choices'     => [
                '1' => esc_html__( '1', 'routex' ),
                '2' => esc_html__( '2', 'routex' ),
                '3' => esc_html__( '3', 'routex' ),
                '4' => esc_html__( '4', 'routex' ),
            ],
        ]
    );


    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'routex_footer_elementor_switch',
            'label'       => esc_html__( 'Footer Custom/Elementor Switch', 'routex' ),
            'description' => esc_html__( 'Footer Custom/Elementor On/Off', 'routex' ),
            'section'     => 'footer_layout_section',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'routex' ),
                'off' => esc_html__( 'Disable', 'routex' ),
            ],
        ]
    ); 

    new \Kirki\Field\Radio_Image(
        [
            'settings'    => 'footer_layout',
            'label'       => esc_html__( 'Footer Layout Control', 'routex' ),
            'section'     => 'footer_layout_section',
            'priority'    => 10,
            'choices'     => [
                'footer_1'   => get_template_directory_uri() . '/inc/img/footer/footer-1.png',
                'footer_2' => get_template_directory_uri() . '/inc/img/footer/footer-2.png',
                'footer_3' => get_template_directory_uri() . '/inc/img/footer/footer-3.png',
                'footer_4' => get_template_directory_uri() . '/inc/img/footer/footer-4.png',
            ],
            'default'     => 'footer_1',
            'active_callback' => [
                [
                    'setting' => 'routex_footer_elementor_switch',
                    'operator' => '==',
                    'value' => false
                ]
            ]
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'footer_logo',
            'label'       => esc_html__( 'Footer Logo', 'routex' ),
            'description' => esc_html__( 'Theme Default/Primary Logo Here', 'routex' ),
            'section'     => 'footer_layout_section',
            'default'     => get_template_directory_uri() . '/assets/imgs/footer/logo.svg',
        ]
    );
    // footer_layout_section section 
    new \Kirki\Field\Image(
        [
            'settings'    => 'routex_footer_bg',
            'label'       => esc_html__( 'Footer BG Image', 'routex' ),
            'description' => esc_html__( 'Footer Image add/remove', 'routex' ),
            'section'     => 'footer_layout_section',
            'default'     => get_template_directory_uri() . '/assets/imgs/footer/footer1-bg-img.png',
        ]
    );
    // footer_layout_section section 
    new \Kirki\Field\Image(
        [
            'settings'    => 'routex_footer_bg_2',
            'label'       => esc_html__( 'Footer 02 BG Image', 'routex' ),
            'description' => esc_html__( 'Footer Image add/remove', 'routex' ),
            'section'     => 'footer_layout_section',
            'default'     => get_template_directory_uri() . '/assets/imgs/footer/footer2-bg-img.png',
        ]
    );
    // footer_layout_section section 
    new \Kirki\Field\Image(
        [
            'settings'    => 'routex_footer_bg_3',
            'label'       => esc_html__( 'Footer 03 BG Image', 'routex' ),
            'description' => esc_html__( 'Footer Image add/remove', 'routex' ),
            'section'     => 'footer_layout_section',
            'default'     => get_template_directory_uri() . '/assets/imgs/footer/footer3-bg-img.png',
        ]
    );

    $footer_type = array(
        'post_type'      => 'tp-footer'
    );
    $footer_type_loop = get_posts($footer_type);
    $footer_post_obj_arr = array();
    foreach($footer_type_loop as $post){
        $footer_post_obj_arr[$post->ID] = $post->post_title;
    }

    wp_reset_postdata();

    new \Kirki\Field\Text( 
        [
            'settings' => 'footer_top_text',
            'label'    => esc_html__( 'Footer Top ', 'routex' ),
            'section'  => 'footer_layout_section',
            'default'  => esc_html__( 'Subscribe to Newsletter', 'routex' ),
            'priority' => 10,
        ]
    );   
    
    new \Kirki\Field\Text( 
        [
            'settings' => 'footer_top_mailchimpsubscribe',
            'label'    => esc_html__( 'Subscribe ', 'routex' ),
            'section'  => 'footer_layout_section',
            'default'  => esc_html__( 'Mailchimp Subscribe', 'routex' ),
            'priority' => 10,
        ]
    );  

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'footer_layout_2_switch',
            'label'       => esc_html__( 'Footer Style 2 Switch', 'routex' ),
            'description' => esc_html__( 'Footer Style 2 On/Off', 'routex' ),
            'section'     => 'footer_layout_section',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'routex' ),
                'off' => esc_html__( 'Disable', 'routex' ),
            ],
        ]
    );          
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'footer_layout_3_switch',
            'label'       => esc_html__( 'Footer Style 3 Switch', 'routex' ),
            'description' => esc_html__( 'Footer Style 3 On/Off', 'routex' ),
            'section'     => 'footer_layout_section',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'routex' ),
                'off' => esc_html__( 'Disable', 'routex' ),
            ],
        ]
    );                   
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'footer_layout_4_switch',
            'label'       => esc_html__( 'Footer Style 4 Switch', 'routex' ),
            'description' => esc_html__( 'Footer Style 4 On/Off', 'routex' ),
            'section'     => 'footer_layout_section',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'routex' ),
                'off' => esc_html__( 'Disable', 'routex' ),
            ],
        ]
    );                   
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'footer_layout_5_switch',
            'label'       => esc_html__( 'Footer Style 5 Switch', 'routex' ),
            'description' => esc_html__( 'Footer Style 5 On/Off', 'routex' ),
            'section'     => 'footer_layout_section',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'routex' ),
                'off' => esc_html__( 'Disable', 'routex' ),
            ],
        ]
    );                   

    new \Kirki\Field\Text(
        [
            'settings' => 'footer_copyright',
            'label'    => esc_html__( 'Footer Copyright', 'routex' ),
            'section'  => 'footer_layout_section',
            'default'  => esc_html__( 'Copyright &copy; 2024 RRDevs. All Rights Reserved', 'routex' ),
            'priority' => 10,
        ]
    );  


    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'footer_menu_switch',
            'label'       => esc_html__( 'Footer Bottom Menu Switch', 'routex' ),
            'description' => esc_html__( 'Footer Bottom Menu On/Off', 'routex' ),
            'section'     => 'footer_layout_section',
            'default'     => 'off',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'routex' ),
                'off' => esc_html__( 'Disable', 'routex' ),
            ],
        ]
    );          

}
footer_layout_section();

// blog_section
function blog_section(){
    // blog_section section 
    new \Kirki\Section(
        'blog_section',
        [
            'title'       => esc_html__( 'Blog Section', 'routex' ),
            'description' => esc_html__( 'Blog Section Settings.', 'routex' ),
            'panel'       => 'panel_id',
            'priority'    => 150,
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'routex_blog_btn_switch',
            'label'       => esc_html__( 'Blog BTN On/Off', 'routex' ),
            'section'     => 'blog_section',
            'default'     => true,
            'priority' => 10,
        ]
    ); 

    // blog_section BTN 
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'routex_blog_cat',
            'label'    => esc_html__( 'Blog Category Meta On/Off', 'routex' ),
            'section'  => 'blog_section',
            'default'  => false,
            'priority' => 10,
        ]
    );

    // blog_section Author Meta 
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'routex_blog_author',
            'label'    => esc_html__( 'Blog Author Meta On/Off', 'routex' ),
            'section'  => 'blog_section',
            'default'  => true,
            'priority' => 10,
        ]
    );
    // blog_section Date Meta 
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'routex_blog_date',
            'label'    => esc_html__( 'Blog Date Meta On/Off', 'routex' ),
            'section'  => 'blog_section',
            'default'  => true,
            'priority' => 10,
        ]
    );

    // blog_section Comments Meta 
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'routex_blog_comments',
            'label'    => esc_html__( 'Blog Comments Meta On/Off', 'routex' ),
            'section'  => 'blog_section',
            'default'  => true,
            'priority' => 10,
        ]
    );


    // blog_section Blog BTN text 
    new \Kirki\Field\Text(
        [
            'settings' => 'routex_blog_btn',
            'label'    => esc_html__( 'Blog Button Text', 'routex' ),
            'section'  => 'blog_section',
            'default'  => "Read More",
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings' => 'routex_singleblog_social',
            'label'    => esc_html__( 'Single Blog Social Share', 'routex' ),
            'section'  => 'blog_section',
            'default'  => false,
            'priority' => 10,
        ]
    );

}
blog_section();


// 404 section
function error_404_section(){
    // 404_section section 
    new \Kirki\Section(
        'error_404_section',
        [
            'title'       => esc_html__( '404 Page', 'routex' ),
            'description' => esc_html__( '404 Page Settings.', 'routex' ),
            'panel'       => 'panel_id',
            'priority'    => 150,
        ]
    );

    // 404_section 
    new \Kirki\Field\Text(
        [
            'settings' => 'routex_error_title',
            'label'    => esc_html__( 'Not Found Title', 'routex' ),
            'section'  => 'error_404_section',
            'default'  => "Sorry We Can't Find That Page! ",
            'priority' => 10,
        ]
    );

    // 404_section 
    new \Kirki\Field\Text(
        [
            'settings' => 'routex_error_text',
            'label'    => esc_html__( 'Not Found 404', 'routex' ),
            'section'  => 'error_404_section',
            'default'  => "Oops! The page you are looking for does not exist. It might have been moved or deleted.",
            'priority' => 10,
        ]
    );

    // 404_section description
    new \Kirki\Field\Text(
        [
            'settings' => 'routex_error_link_text',
            'label'    => esc_html__( 'Error Link Text', 'routex' ),
            'section'  => 'error_404_section',
            'default'  => "Back To Home",
            'priority' => 10,
        ]
    );
    // 404_section img
    new \Kirki\Field\Image(
        [
            'settings'    => 'routex_error_img',
            'label'       => esc_html__( 'Error Image', 'routex' ),
            'description' => esc_html__( 'Error Bg Image Here', 'routex' ),
            'section'     => 'error_404_section',
            'default'     => get_template_directory_uri() . '/assets/imgs/404/404.png',
        ]
    );


}
error_404_section();

// theme color section
function theme_color_section(){
    new \Kirki\Section(
        'theme_color_section',
        [
            'title'       => esc_html__( 'Theme Color', 'routex' ),
            'description' => esc_html__( 'Routex theme color Settings.', 'routex' ),
            'panel'       => 'panel_id',
            'priority'    => 150,
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'routex_color_1',
            'label'       => __( 'Theme Color 1', 'routex' ),
            'description' => esc_html__( 'this is theme color 1 control.', 'routex' ),
            'section'     => 'theme_color_section',
            'default'     => '#83CD20',
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'routex_color_2',
            'label'       => __( 'Theme Color 2', 'routex' ),
            'description' => esc_html__( 'this is theme color 2 control.', 'routex' ),
            'section'     => 'theme_color_section',
            'default'     => '#034833',
        ]
    );
    new \Kirki\Field\Color(
        [
            'settings'    => 'routex_color_3',
            'label'       => __( 'Text Color', 'routex' ),
            'description' => esc_html__( 'this is theme Text color control.', 'routex' ),
            'section'     => 'theme_color_section',
            'default'     => '#727272',
        ]
    );

}
theme_color_section();