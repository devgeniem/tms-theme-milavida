<?php
/**
 *  Copyright (c) 2021. Geniem Oy
 */

namespace TMS\Theme\Milavida\ACF;

use TMS\Theme\Milavida\ACF\Layouts\CustomHtmlLayout;
use TMS\Theme\Milavida\ACF\Layouts\DividerLayout;

/**
 * AlterComponents
 */
class AlterComponents {

    /**
     * Constructor
     */
    public function __construct() {
        \add_filter(
            'tms/acf/field/fg_dynamic_event_fields_components/layouts',
            [ $this, 'add_layouts' ],
            10,
            2
        );

        \add_filter(
            'tms/acf/field/fg_onepager_components_components/layouts',
            [ $this, 'add_layouts' ],
            10,
            2
        );

        \add_filter(
            'tms/acf/field/fg_page_components_components/layouts',
            [ $this, 'add_layouts' ],
            10,
            2
        );

        \add_filter(
            'tms/acf/field/fg_front_page_components_components/layouts',
            [ $this, 'add_layouts' ],
            10,
            2
        );

        \add_filter(
            'tms/acf/field/fg_post_fields_components/layouts',
            [ $this, 'add_layouts' ],
            10,
            2
        );

        \add_filter(
            'tms/acf/field/fg_dynamic_event_fields_components/layouts',
            [ $this, 'add_layouts' ],
            10,
            2
        );
    }

    /**
     * Add news layouts to components
     *
     * @param array  $layouts Front page layouts.
     * @param string $key     Field group key.
     *
     * @return mixed
     */
    public function add_layouts( array $layouts, string $key ) : array {
        $layouts[] = new CustomHtmlLayout( $key );
        $layouts[] = new DividerLayout( $key );

        return $layouts;
    }
}

( new AlterComponents() );
