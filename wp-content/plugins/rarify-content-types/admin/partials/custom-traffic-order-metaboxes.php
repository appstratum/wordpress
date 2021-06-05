<?php

/**
 * Provide a UI for custom metaboxes for Traffic Orders
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       twoimpulse.com
 * @since      1.0.0
 *
 * @package    Rarify_Content_Types
 * @subpackage Rarify_Content_Types/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->



<div class="hcf_box">
    <style scoped>
        .hcf_box{
            display: grid;
            grid-template-columns: max-content 1fr;
            grid-row-gap: 10px;
            grid-column-gap: 20px;
        }
        .hcf_field{
            display: contents;
        }
    </style>
    <p class="meta-options hcf_field">
        <label for="period">Author</label>
        <input id="period" type="number" name="period"  value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'period', true ) ); ?>">
    </p>
    <p class="meta-options hcf_field">
        <label for="startDate">Start Date</label>
        <input id="startDate" type="date" name="startDate" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'startDate', true ) ); ?>">
    </p>
    <p class="meta-options hcf_field">
        <label for="endDate">End Date</label>
        <input id="endDate" type="date" name="endDate" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'endDate', true ) ); ?>">
    </p>
    <p class="meta-options hcf_field">
        <label for="startDateRule">Start Date Rule</label>
        <input id="startDateRule" type="text" name="startDateRule" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'startDateRule', true ) ); ?>">
    </p>
    <p class="meta-options hcf_field">
        <label for="endDateRule">End Date Rule</label>
        <input id="endDateRule" type="text" name="endDateRule" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'endDateRule', true ) ); ?>">
    </p>    
</div>
