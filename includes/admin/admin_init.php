 <?php
    include 'metaboxes_ap_skills_options.php';
    include 'ap_skills_enqueue.php';


    function ap_skills_admin_init()
    {
        add_action('add_meta_boxes_skills', 'ap_skills_metaboxes');
        add_action('admin_enqueue_scripts', 'ap_skill_admin_enqueue');
    }

    function ap_skills_metaboxes()
    {
        add_meta_box(
            'ap_skills_options',
            'Informações Adicionais',
            'ap_skills_options',
            'skills',
            'normal',
            'high'
        );
    }

    function ap_skills_save_post_admin($post_id, $post, $update)
    {
        if (!$update) {
            return;
        }
        $skills_data = array(
            "ap_skills_level" => $_POST['ap_skills_level'],
            "ap_skills_per_level" => $_POST['ap_skills_per_level'],
        );
        update_post_meta($post_id, 'skills_data', $skills_data);
    }
