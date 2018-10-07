<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSeven;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( ! class_exists( __NAMESPACE__ . 'ACF_Options_Pages' ) ) {

        class ACF_Options_Pages {

            public function __construct() {

                $this->add_options_page_with_acf();

            }

            protected function add_options_page_with_acf() {

                if( function_exists( 'acf_add_options_page' ) ) {

                    add_action( 'acf/init', function() {

                        //  ----------------------------------------------------------------------------------------------------------------  //
                        //  -----------------------------------  ADD [acf_add_options_page] CALLS HERE  ------------------------------------  //
                        //  ----------------------------------------------------------------------------------------------------------------  //

                    } );

                }

            }

        }

    }
