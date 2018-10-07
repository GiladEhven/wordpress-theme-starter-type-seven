<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSeven;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( ! class_exists( __NAMESPACE__ . 'Inactive_Features' ) ) {

        class Inactive_Features {

            public function __construct() {

                $this->theme_support();
                $this->type_support();

            }

            protected function theme_support() {

                add_action( 'after_setup_theme', function() {

                    add_theme_support( 'automatic-feed-links' );

                    add_theme_support( 'html5',           array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

                    add_theme_support( 'post-formats',    array( 'status', 'quote', 'gallery', 'image', 'video', 'audio', 'link', 'aside', 'chat' ) );

                    add_theme_support( 'post-thumbnails', array( 'page', 'post' ) );

                    add_theme_support( 'title-tag' );

                } );

            }

            protected function type_support() {

                add_action( 'init', function() {

                    add_post_type_support( 'page', 'excerpt' );

                } );

            }

        }

    }
