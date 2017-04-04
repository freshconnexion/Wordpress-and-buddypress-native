<!-- BuddyPress -->
<!-- BuddyPress Ajouter un sous menu -->
<?php
add_action( 'bp_setup_nav', 'add_videos_subnav_tab', 100 );

function add_videos_subnav_tab() {
    global $bp;

    bp_core_new_subnav_item( array(
        'name' => 'Tutos',
        'slug' => 'tutos',
        'parent_url' => trailingslashit( bp_loggedin_user_domain() . 'friends' ),
        'parent_slug' => 'friends',
        'screen_function' => 'profile_screen_video',
        'position' => 50
        )
    );
}

// redirect to videos page when 'Videos' tab is clicked
// assumes that the slug for your Videos page is 'videos' 
function profile_screen_video() {
    bp_core_redirect( get_option('siteurl') . "/tutoriel/" );
}
?>


<!-- BuddyPress effacer un menu -->
<?
$bp->bp_nav['user-orders'] = false;
?>

<!-- BuddyPress ajouter un menu -->
<?php 
add_action( 'bp_setup_nav', 'test_board', 100 );

function test_board() {
    global $bp;

    bp_core_new_nav_item( array(
        'name' => 'Tutoriel',//Nom afficher sur le dashboard
        'slug' => 'buddy-tutorial',//nom du slug wwww.domaine.com/members/username/slug
        'screen_function' => 'bpis_profile', // 
        'position' => 10 //Position sur le menu 10 20 30 ....
        )
    );
}

function bpis_profile () {
    echo do_shortcode('[bpis_tags]');
    echo do_shortcode('[bpis_images]');
}
?>
