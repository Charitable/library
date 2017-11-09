<?php
/*
 * A local translation snippet. Change 'YOUR TEXT HERE' to your desired text.
 *
 * This snippet will work for any phrases in Charitable and Charitable extensions.
 */
function charitable_text_switcher( $translations, $text, $domain ) {
    // Changes the "Donate" text in multiple places
    if ( 0 === strpos( $domain, 'charitable' ) && $text == 'Donate' ) {
        return __( 'YOUR TEXT HERE', 'charitable' );
    }

    return $translations;
}

add_filter( 'gettext', 'charitable_text_switcher', 10, 3 );
