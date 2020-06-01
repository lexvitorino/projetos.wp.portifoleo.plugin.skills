<?php

if (!function_exists('ap_skills_activate_plugin')) {
    function ap_skills_activate_plugin()
    {
        if (version_compare(get_bloginfo('version'), '4.5', '<')) {
            wp_die('Você precisa atualizar o WordPress para atualizar o plugin');
        }
    }
}
