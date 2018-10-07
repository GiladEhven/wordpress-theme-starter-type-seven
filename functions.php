<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSeven;

    if ( ! defined( 'GILAD_ENABLE_SCRIBE_FOR_CLASS' ) )    define( 'GILAD_ENABLE_SCRIBE_FOR_CLASS',    true );
    if ( ! defined( 'GILAD_ENABLE_SCRIBE_FOR_QUERY' ) )    define( 'GILAD_ENABLE_SCRIBE_FOR_QUERY',    true );
    if ( ! defined( 'GILAD_ENABLE_SCRIBE_FOR_REST' ) )     define( 'GILAD_ENABLE_SCRIBE_FOR_REST',     true );
    if ( ! defined( 'GILAD_ENABLE_SCRIBE_FOR_VIEW' ) )     define( 'GILAD_ENABLE_SCRIBE_FOR_VIEW',     true );

    if ( ! defined( 'GILAD_ENVIRONMENT' ) )                define( 'GILAD_ENVIRONMENT',                'PRODUCTION' );

    if ( ! defined( 'GILAD_ID_TGM' ) )                     define( 'GILAD_ID_TGM',                     'UNSPECIFIED_GTM_CONTAINER_ID' );

    if ( ! defined( 'GILAD_PATH_CHILD' ) )                 define( 'GILAD_PATH_CHILD',                 get_stylesheet_directory() );
    if ( ! defined( 'GILAD_PATH_PARENT' ) )                define( 'GILAD_PATH_PARENT',                get_template_directory() );
    if ( ! defined( 'GILAD_PATH_PLUGINS' ) )               define( 'GILAD_PATH_PLUGINS',               '' );
    if ( ! defined( 'GILAD_PATH_MUP' ) )                   define( 'GILAD_PATH_MUP',                   '' );
    if ( ! defined( 'GILAD_PATH_CONTENT' ) )               define( 'GILAD_PATH_CONTENT',               '' );

    if ( ! defined( 'GILAD_URL_CHILD' ) )                  define( 'GILAD_URL_CHILD',                  get_stylesheet_directory_uri() );
    if ( ! defined( 'GILAD_URL_PARENT' ) )                 define( 'GILAD_URL_PARENT',                 get_template_directory_uri() );

    if ( ! defined( 'GILAD_WEBSITE_PHASE' ) )              define( 'GILAD_WEBSITE_PHASE',              '' );

    if ( ! class_exists( __NAMESPACE__ . 'Theme_Core' ) ) {

        class Theme_Core {

            public function __construct() {

				// ------------------------------------------------------------------------------- //
				// ----------------------- OFFICIAL CHILD THEME SAMPLE CODE ---------------------- //
				// ------------------------------------------------------------------------------- //

				// Defines
				define( 'FL_CHILD_THEME_DIR', get_stylesheet_directory() );
				define( 'FL_CHILD_THEME_URL', get_stylesheet_directory_uri() );

				// Classes
				require_once 'classes/class-fl-child-theme.php';

				// Actions
				add_action( 'wp_enqueue_scripts', 'FLChildTheme::enqueue_scripts', 1000 );



				// ------------------------------------------------------------------------------- //
				// ---------------------------- GILAD'S BUILDER CHILD ---------------------------- //
				// ------------------------------------------------------------------------------- //

                if ( is_admin() ) {

                    require_once( get_stylesheet_directory() . '/classes/admin/customizations/class-editorial-tools.php' );
                    require_once( get_stylesheet_directory() . '/classes/admin/integrations/class-acf-options-pages.php' );
                    require_once( get_stylesheet_directory() . '/classes/admin/loaders/class-admin-resources.php' );

                    $acf_options_pages  = new Acf_Options_Pages;
                    $admin_resources    = new Admin_Resources;
                    $editorial_tools    = new Editorial_Tools;

                } else {

                    require_once( get_stylesheet_directory() . '/classes/public/loaders/class-public-resources.php' );

                    $public_resources   = new Public_Resources;

                }

                require_once( get_stylesheet_directory() . '/classes/common/activations/class-inactive-features.php' );
                require_once( get_stylesheet_directory() . '/classes/common/activations/class-language-features.php' );

                $inactive_features      = new Inactive_Features;
                $language_features      = new Language_Features;

            }

        }

    }

    $theme_core = new Theme_Core();
