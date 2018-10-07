<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSeven;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( ! class_exists( __NAMESPACE__ . 'Language_Features' ) ) {

        class Language_Features {

            public function __construct() {

                $this->content();

            }

            protected function content() {

                add_action( 'after_setup_theme', function() {

                    load_theme_textdomain( 'this-project', get_template_directory() . '/mo' );

                } );

            }

        }

    }
