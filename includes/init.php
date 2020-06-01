<?php

function ap_skills_init()
{
    $labels = array(
        'name' => 'Conhecimentos Proffisionais',
        'singular_name' => 'Conhecimento Profissional',
        'menu_name' => 'Conhecimentos Proffisionais',
        'name_admin_bar' => 'Conhecimento Profissional',
        'add_new' => 'Adicionar Nova',
        'add_new_item' => 'Adicionar Novo Conhecimento',
        'new_item' => 'Novo Conhecimento',
        'edit_item' => 'Editar Conhecimento',
        'view_item' => 'Visualizar Conhecimento',
        'all_items' => 'Todas as Conhecimento',
        'search_items' => 'Procurar Conhecimento',
        'parent_item_colon' => 'Conhecimentos Filhos',
        'not_found' => 'Nenhum Conhecimentos encontrado',
        'not_found_in_trash' => 'Nenhuma Conhecimento no Lixo'
    );

    $array = array(
        'labels' => $labels,
        'description' => 'Um tipo de conteúdo para portifóleo',
        'public' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'rewrite' => array('slug' => 'skills'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 6,
        'suports' => array('title', 'editor', 'comment')
    );

    register_post_type('skills', $array);
}
