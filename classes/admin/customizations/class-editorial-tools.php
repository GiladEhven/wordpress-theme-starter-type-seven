<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSeven;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( ! class_exists( __NAMESPACE__ . 'Editorial_Tools' ) ) {

        class Editorial_Tools {

            public function __construct() {

                $this->styles();

            }

            protected function styles() {

                add_action( 'after_setup_theme', function() {

                    add_editor_style( get_stylesheet_directory_uri() . '/css/admin/editor.css' );

                } );

            }

        }

    }
