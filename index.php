<?php

/*
Plugin Name: Skills
Description: Um plugin simples para gerar e listar seus conhecimentos profissionais no portifóleo
Version: 1.0
Author: Alex Sousa
Author URI: https://mi7dev.com.br
Text Domain: skills
*/

if (!function_exists('add_action')) {
    echo __('Este é um plugin Worpress e não tem sentido ser chamado por fora!', 'skills');
    exit;
}

// Setup
define('SKILLS_PLUGIN_URL', __FILE__);

// Includes
include('includes/activate.php');
include('includes/init.php');
include('includes/admin/admin_init.php');

// Hooks
register_activation_hook(SKILLS_PLUGIN_URL, 'ap_skills_activate_plugin');
add_action('init', 'ap_skills_init');
add_action('admin_init', 'ap_skills_admin_init');
add_action('save_post_skills', 'ap_skills_save_post_admin', 10, 3);

// Shortcodes
