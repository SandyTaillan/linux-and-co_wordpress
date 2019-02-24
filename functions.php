<?php

// ========================
// Chargement des scripts
// ========================

// Lecture des fichiers css principal, secondaires et des fonts
function sandy_scripts(){
    wp_enqueue_style('sandy_principalcss', get_template_directory_uri() . '/style.css', array(),
        "1.0.0", 'all');
}
add_action('wp_enqueue_scripts', 'sandy_scripts');