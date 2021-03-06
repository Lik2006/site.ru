<?php

    // Set Panel ID
    $panel_id = 'regina_lite_panel_advanced';

    // Set prefix
    $prefix = 'regina_lite';

    /***********************************************/
    /************** Settings  ***************/
    /***********************************************/


    $wp_customize->add_panel( $panel_id,
        array(
            'priority' => 58,
            'capability' => 'edit_theme_options',
            'theme_supports' => '',
            'title' => esc_html__( 'Advanced Options', 'regina-lite' )
        )
    );

    /* Advanced */
    $wp_customize->add_section( $prefix.'_advanced_section' ,
        array(
            'title'       => esc_html__( 'Settings', 'regina-lite' ),
            'panel' 	  => $panel_id
        )
    );


    /* Enable Site Preloader*/
    $wp_customize->add_setting( $prefix.'_enable_site_preloader',
        array(
            'sanitize_callback' => $prefix.'_sanitize_checkbox',
            'default' => 1
        )
    );
    $wp_customize->add_control(
        $prefix.'_enable_site_preloader',
            array(
                'type'	=> 'checkbox',
                'label' => esc_html__('Enable site preloader', 'regina-lite'),
                'description' => esc_html__('Initial status: enabled', 'regina-lite'),
                'section' => $prefix.'_advanced_section'
            )
    );


    // Enable Search Icon in Header
    $wp_customize->add_setting( $prefix . '_enable_site_search_icon',
        array(
            'sanitize_callback' => $prefix . '_sanitize_checkbox',
            'default'           => 1
        )
    );

    $wp_customize->add_control(
        $prefix . '_enable_site_search_icon',
            array(
                'type'          => 'checkbox',
                'label'         => esc_html__( 'Enable search icon in header?', 'regina-lite' ),
                'description'   => esc_html__( 'Initial status: enabled. If you don\'t like the fact that search icon show in header, uncheck this.', 'regina-lite' ),
                'section'       => $prefix . '_advanced_section'
            )
    );
