<?php
/*
    Plugin Name: Kill WordPress Plugin
    Plugin URI:  https://spam.com
    Description: Basic WordPress Spam Plugin
    Version:     20172408
    Author:      Spam
    Author URI:  https://spam.com
*/

add_shortcode('afisare_text','kwp_afisare_text');
add_filter('the_title','kwp_change_title');
add_filter('the_content','kwp_facebook_like');
add_filter('the_content','kwp_random_banner');
add_action('admin_notice','kwp_notification');

function kwp_afisare_text() {
    echo '<img src="http://placehold.it/350x150">';
}

function kwp_change_title() {
    echo $titlu. ' spam';
}

function kwp_facebook_like($content) {
    echo do_shortcode($content);
    echo '<iframe src="https://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2FSwissWebAcademy&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>';
}

function kwp_notification() {
    echo '<div class="notice notice-info notice-dismissible">';
    echo '<p>Please don\'t pirate my plugin! Spampam...</p>';
    echo '</div>';
}

function kwp_random_banner() {
    $images = array(
        'http://placehold.it/350x150/FF0000',
        'http://placehold.it/350x150/00FF00',
        'http://placehold.it/350x150/FF00FF',
    );
    
    echo '<img src="'.$images[rand(0,2)].'">';
}