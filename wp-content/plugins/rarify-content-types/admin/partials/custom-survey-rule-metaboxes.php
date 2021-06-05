<?php

/**
 * Provide a UI for custom metaboxes for Survey Rules
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
        <label for="ruleExpression">Rule Expression</label>
        <input id="ruleExpression" type="text" name="ruleExpression"  value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'ruleExpression', true ) ); ?>">
    </p>
</div>
