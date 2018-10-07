<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSeven;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( ! class_exists( __NAMESPACE__ . 'Media_Features' ) ) {

        class Media_Features {

            public function __construct() {

                $this->sizes();

            }

            //  ----------------------------  MISSION LOGIC  ----------------------------  //

            protected function sizes() {

                if ( function_exists('add_image_size') ) {

                //  add_image_size( 'thumbnail',          180,  180,  true );

                    add_image_size( 'tiny-natural',       300              );
                    add_image_size( 'tiny-square',        300,  300,  true );

                    add_image_size( 'small-natural',      600              );
                    add_image_size( 'small-square',       600,  600,  true );

                //  add_image_size( 'medium',             900,  900        );
                    add_image_size( 'medium-square',      900,  900,  true );

                //  add_image_size( 'large',              1200, 1200        );
                    add_image_size( 'large-square',       1200, 1200,  true );

                    add_image_size( 'giant-natural',      1500              );
                    add_image_size( 'giant-square',       1500, 1500,  true );

                    add_image_size( 'humongous-natural',  1920              );
                    add_image_size( 'humongous-square',   1920, 1920,  true );

                }

                add_filter( 'image_size_names_choose', __NAMESPACE__ . '\insert_custom_image_sizes' );

                function insert_custom_image_sizes( $sizes ) {

                    global $_wp_additional_image_sizes;

                    if ( empty( $_wp_additional_image_sizes ) ) {

                        return $sizes;

                    }

                    foreach ( $_wp_additional_image_sizes as $id => $data ) {

                        if ( ! isset( $sizes[$id] ) ) {
                            $sizes[$id] = ucfirst( str_replace( '-', ' ', $id ) );
                        }

                    }

                    return $sizes;

                }

            }

        }

    }
