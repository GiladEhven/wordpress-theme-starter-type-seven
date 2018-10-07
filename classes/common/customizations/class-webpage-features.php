<?php

    namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSeven;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( ! class_exists( __NAMESPACE__ . 'Webpage_Features' ) ) {

        class Webpage_Features {

            public function __construct() {

                $this->title_tag();

            }

            protected function title_tag() {

                //  TODO: CHECK WHETHER TITLE TAG FEATURE IS ACTIVE BEFORE FILTERING

            }

        }

    }
