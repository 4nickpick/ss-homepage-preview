<?php

/*
    Plugin Name: SS Homepage Preview
    Author Name: Nicholas Pickering
    Author Email: 2nickpick@gmail.com
    Plugin URI: http://soundshrew.com/plugins/ss_homepage_preview
*/


function ss_homepage_preview_loop($query)
{
    /* rewrite the loop for the homepage  */
    if ( $query->is_main_query() && $query->is_preview ) {
        $query->set( 'post_status', array('future', 'publish') );
    }
}
add_action('pre_get_posts', 'ss_homepage_preview_loop');
