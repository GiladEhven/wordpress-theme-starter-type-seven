<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSeven;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( ! class_exists( __NAMESPACE__ . 'Public_Resources' ) ) {

        class Public_Resources {

            public function __construct() {

                $this->dequeue_css();
                $this->dequeue_js();

                $this->enqueue_css();
                $this->enqueue_js();

            }

            protected function dequeue_css() {
            }

            protected function dequeue_js() {

                add_action( 'wp_enqueue_scripts', function() {
                      wp_deregister_script( 'wp-embed' );
                });

            }

            protected function enqueue_css() {

                add_action( 'wp_enqueue_scripts', function() {

                    wp_enqueue_style( 'gilad-type-seven-main',   get_stylesheet_directory_uri() . '/css/public/main.css',   array( 'base', 'fl-automator-skin', 'fl-child-theme' ), 'CURRENT', 'all' );

                    if ( GILAD_WEBSITE_PHASE == 'dev' ) {
                    wp_enqueue_style( 'gilad-type-seven-design', get_stylesheet_directory_uri() . '/css/public/design.css', array(), 'CURRENT', 'all' );
                    }

                });

            }

            protected function enqueue_js() {

                add_action( 'wp_enqueue_scripts', function() {
                    wp_enqueue_script( 'gilad-type-seven-main',  get_stylesheet_directory_uri() . '/js/public/main.js',     array( 'jquery' ), 'CURRENT', true );
                });

            }

        }

    }
