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

    <!-- <p class="meta-options hcf_field">
        <label for="actionEvent">Action Event (if true)</label>
        <input id="actionEvent" type="text" name="actionEvent"  value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'actionEvent', true ) ); ?>">
    </p> -->

    <p class="meta-options hcf_field">
    <label for="actionEvent">Action Event (if true)</label>
        <select id="actionEvent" name="actionEvent" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'actionEvent', true ) ); ?>">
            <option>Select an action ...</option>
            <option value="HIDE_SURVEY" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'HIDE_SURVEY', true ) ) == 'HIDE_SURVEY' ) echo 'selected="selected"'; ?>>Hide survey</option>
            <option value="MAKE_SURVEY_AVAILABLE" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'MAKE_SURVEY_AVAILABLE', true ) ) == 'MAKE_SURVEY_AVAILABLE' ) echo 'selected="selected"'; ?>>Make survey available</option>
            <option value="SEND_SURVEY_REMINDER" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'SEND_SURVEY_REMINDER', true ) ) == 'SEND_SURVEY_REMINDER' ) echo 'selected="selected"'; ?>>Send survey reminder</option>
            <option value="SEND_SURVEY_STARTED_NOTIFICATION" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'SEND_SURVEY_STARTED_NOTIFICATION', true ) ) == 'SEND_SURVEY_STARTED_NOTIFICATION' ) echo 'selected="selected"'; ?>>Send survey STARTED notification to site</option>
            <option value="SEND_SURVEY_NOT_STARTED_NOTIFICATION" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'SEND_SURVEY_NOT_STARTED_NOTIFICATION', true ) ) == 'SEND_SURVEY_NOT_STARTED_NOTIFICATION' ) echo 'selected="selected"'; ?>>Send survey NOT STARTED notification to site</option>
            <option value="SEND_SURVEY_ABANDONED_NOTIFICATION" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'SEND_SURVEY_ABANDONED_NOTIFICATION', true ) ) == 'SEND_SURVEY_ABANDONED_NOTIFICATION' ) echo 'selected="selected"'; ?>>Send survey ABANDONNED notification to site</option>
            <option value="SEND_SURVEY_COMPLETED_NOTIFICATION" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'SEND_SURVEY_COMPLETED_NOTIFICATION', true ) ) == 'SEND_SURVEY_COMPLETED_NOTIFICATION' ) echo 'selected="selected"'; ?>>Send survey COMPLETED notification to site</option>
            <option value="SEND_SURVEY_NOT_COMPLETED_NOTIFICATION" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'SEND_SURVEY_NOT_COMPLETED_NOTIFICATION', true ) ) == 'SEND_SURVEY_NOT_COMPLETED_NOTIFICATION' ) echo 'selected="selected"'; ?>>Send survey NOT COMPLETED notification to site</option>
            <option value="SEND_SURVEY_COMPLETED_THANKS" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'SEND_SURVEY_COMPLETED_THANKS', true ) ) == 'SEND_SURVEY_COMPLETED_THANKS' ) echo 'selected="selected"'; ?>>Send survey completed thanks to Participant</option>
            <option value="SEND_SURVEY_COMPLETED_REWARD" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'SEND_SURVEY_COMPLETED_REWARD', true ) ) == 'SEND_SURVEY_COMPLETED_REWARD' ) echo 'selected="selected"'; ?>>Send reward to Participant</option>
        </select>  
    </p>    

</div>
