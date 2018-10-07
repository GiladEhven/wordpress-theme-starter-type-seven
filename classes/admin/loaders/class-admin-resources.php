<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSeven;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( ! class_exists( __NAMESPACE__ . 'Admin_Resources' ) ) {

        class Admin_Resources {

            public function __construct() {

                $this->enqueue_css();

            }

            protected function enqueue_css() {

                add_action( 'admin_enqueue_scripts', function() {

                    wp_enqueue_style( 'gilad-type-seven-main',   get_stylesheet_directory_uri() . '/css/admin/main.css',   array(), 'CURRENT', 'all' );

                    if ( GILAD_WEBSITE_PHASE == 'dev' ) {
                    wp_enqueue_style( 'gilad-type-seven-design', get_stylesheet_directory_uri() . '/css/admin/design.css', array(), 'CURRENT', 'all' );
                    }

                });

            }

        }

    }
