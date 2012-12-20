<?php

/*
    Plugin Name: SS Homepage Preview
    Author Name: Nicholas Pickering
    Author Email: 2nickpick@gmail.com
    Author URI: http://www.soundshrew.com/
    Plugin URI: http://www.soundshrew.com/plugins/ss-homepage-preview/
    Description: Preview future posts on your site
    Version: 1.0
    License: GPL2
*/


function ss_homepage_preview_loop($query)
{
    /* rewrite the loop for the homepage  */
    if ( $query->is_main_query() && $query->is_preview ) {
        $query->set( 'post_status', array('future', 'publish') );
    }
}
add_action('pre_get_posts', 'ss_homepage_preview_loop');
