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