<?php

function ap_skills_options($post)
{
    $skills_data = get_post_meta($post->ID, 'skills_data', true);
    $ap_skills_level = !empty($skills_data['ap_skills_level']) ? $skills_data['ap_skills_level'] : '';
    $ap_skills_per_level = !empty($skills_data['ap_skills_per_level']) ? $skills_data['ap_skills_per_level'] : 0;

?>
    <div class="ap_skills_container">
        <input type="text" name="ap_skills_level" placeholder="Nível" required value="<?php echo $ap_skills_level; ?>">
        <input type="number" name="ap_skills_per_level" placeholder="%" required value="<?php echo $ap_skills_per_level; ?>">
    </div>
<?php
}
?>