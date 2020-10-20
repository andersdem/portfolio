<?php

/* 
* Plugin Name: Partyvibes Plugin
* Plugin URI: http//localhost/git/portfolio/cheers
* Description: This is a Newsletter Sign Up form for Cheers. The plugin is made with PHP, HTML, CSS and JS.
* Version: 0.0.1
* Author: Sofus Lambach, Emma Hedeager Nørregaard and Anders Matthiesen
* Author URI: http//localhost/git/portfolio/cheers
* Licens: GPL2
*/

function newsletter_form ()
{
    $content = '';
    $content .= '<div class="login-form">';
    $content .= '<div class="popupCloseButton">X</div>';
    $content .= '<section>';
    $content .= '<h3 id="velkommen">Welcome TO</h3>';
    $content .= '<img id="logo" src=" '.plugins_url("partyvibesplugin/img/logo.png").' " alt="Cheers Logo">';
    $content .= '<h5 id="tilmeld">Sign Up for our weekly partyvibes</h5>';
    $content .= '</section>';
    $content .= '<section class="form">';
    $content .= '<form action="#" id="myform">';
    $content .= '<div class="input">';
    $content .= '<input type="email" name="email" id="email" placeholder="Enter your Email address here...." required> <i class="fas fa-envelope"></i>';
    $content .= '</div>';
    $content .= '<div>';
    $content .= '<input type="submit" value="LET THE GAME BEGIN!" name="submitBtn" id="submitBtn2"> ';
    $content .= '</div>';
    $content .= '<div>';
    $content .= '<input type="button" value="No, I\'m Boring" name="submitBtn" id="submitBtn"> ';
    $content .= '</div>';
    $content .= '</form>';
    $content .= '</section>';
    $content .= '</div>';
    return $content;
}

function register_styles_and_scripts_for_plugin()
{
    
    wp_enqueue_style('fontAwesomeCDN','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css');
    
    wp_enqueue_style('CustomFontMontSerrat','https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;800&display=swap');
        
    wp_enqueue_style('CustomStylesheet', plugins_url('partyvibesplugin/css/style.css'));
    
    wp_deregister_script('jquery');
    
    wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.1.1.min.js',array(),'3.1.1','true');
    
    wp_enqueue_script('CustomScript',plugins_url('partyvibesplugin/js/script.js'),array('jquery'),'','true');
}

add_shortcode('show_partyvibesplugin','newsletter_form');

add_action('wp_enqueue_scripts', 'register_styles_and_scripts_for_plugin');
