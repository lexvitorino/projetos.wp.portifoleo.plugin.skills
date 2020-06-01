<?php

function ap_skill_admin_enqueue()
{
    global $typenow;
    if ($typenow != 'skills') {
        return;
    }

    // Registers
    wp_register_style('ap_skills_style', plugins_url('/assets/css/style.css', SKILLS_PLUGIN_URL));

    // Using
    wp_enqueue_style('ap_skills_style');
}
