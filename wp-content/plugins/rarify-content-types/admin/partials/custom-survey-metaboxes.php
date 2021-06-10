<?php

/**
 * Provide a UI for custom metaboxes
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
        <label for="surveyID">SurveyID</label>
        <input id="surveyID" type="text" name="surveyID"  value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'surveyID', true ) ); ?>">
    </p>
    <p class="meta-options hcf_field">
        <label for="surveyVersionNumber">Survey Version Number</label>
        <input id="surveyVersionNumber" type="number" name="surveyVersionNumber" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'surveyVersionNumber', true ) ); ?>">
    </p>
    <p class="meta-options hcf_field">
        <label for="surveyGroup">Survey Group</label>
        <input id="surveyGroup" type="text" name="surveyGroup" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'surveyGroup', true ) ); ?>">
    </p>
    
    <p class="meta-options hcf_field">
        <label for="country">Country</label>
        <select id="country" name="country" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'country', true ) ); ?>">
            <option>Select country...</option>
            <option value="AF" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'AF' ) echo 'selected="selected"'; ?>>Afghanistan</option>
            <option value="AX" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'AX' ) echo 'selected="selected"'; ?>>Aland Islands</option>
            <option value="AL" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'AL' ) echo 'selected="selected"'; ?>>Albania</option>
            <option value="DZ" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'DZ' ) echo 'selected="selected"'; ?>>Algeria</option>
            <option value="AS" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'AS' ) echo 'selected="selected"'; ?>>American Samoa</option>
            <option value="AD" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'AD' ) echo 'selected="selected"'; ?>>Andorra</option>
            <option value="AO" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'AO' ) echo 'selected="selected"'; ?>>Angola</option>
            <option value="AI" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'AI' ) echo 'selected="selected"'; ?>>Anguilla</option>
            <option value="AQ" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'AQ' ) echo 'selected="selected"'; ?>>Antarctica</option>
            <option value="AG" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'AG' ) echo 'selected="selected"'; ?>>Antigua and Barbuda</option>
            <option value="AR" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'AR' ) echo 'selected="selected"'; ?>>Argentina</option>
            <option value="AM" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'AM' ) echo 'selected="selected"'; ?>>Armenia</option>
            <option value="AW" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'AW' ) echo 'selected="selected"'; ?>>Aruba</option>
            <option value="AU" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'AU' ) echo 'selected="selected"'; ?>>Australia</option>
            <option value="AT" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'AT' ) echo 'selected="selected"'; ?>>Austria</option>
            <option value="AZ" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'AZ' ) echo 'selected="selected"'; ?>>Azerbaijan</option>
            <option value="BS" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'BS' ) echo 'selected="selected"'; ?>>Bahamas</option>
            <option value="BH" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'BH' ) echo 'selected="selected"'; ?>>Bahrain</option>
            <option value="BD" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'BD' ) echo 'selected="selected"'; ?>>Bangladesh</option>
            <option value="BB" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'BB' ) echo 'selected="selected"'; ?>>Barbados</option>
            <option value="BY" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'BY' ) echo 'selected="selected"'; ?>>Belarus</option>
            <option value="BE" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'BE' ) echo 'selected="selected"'; ?>>Belgium</option>
            <option value="BZ" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'BZ' ) echo 'selected="selected"'; ?>>Belize</option>
            <option value="BJ" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'BJ' ) echo 'selected="selected"'; ?>>Benin</option>
            <option value="BM" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'BM' ) echo 'selected="selected"'; ?>>Bermuda</option>
            <option value="BT" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'BT' ) echo 'selected="selected"'; ?>>Bhutan</option>
            <option value="BO" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'BO' ) echo 'selected="selected"'; ?>>Bolivia</option>
            <option value="BQ" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'BQ' ) echo 'selected="selected"'; ?>>Bonaire, Sint Eustatius and Saba</option>
            <option value="BA" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'BA' ) echo 'selected="selected"'; ?>>Bosnia and Herzegovina</option>
            <option value="BW" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'BW' ) echo 'selected="selected"'; ?>>Botswana</option>
            <option value="BV" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'BV' ) echo 'selected="selected"'; ?>>Bouvet Island</option>
            <option value="BR" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'BR' ) echo 'selected="selected"'; ?>>Brazil</option>
            <option value="IO" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'IO' ) echo 'selected="selected"'; ?>>British Indian Ocean Territory</option>
            <option value="BN" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'BN' ) echo 'selected="selected"'; ?>>Brunei Darussalam</option>
            <option value="BG" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'BG' ) echo 'selected="selected"'; ?>>Bulgaria</option>
            <option value="BF" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'BF' ) echo 'selected="selected"'; ?>>Burkina Faso</option>
            <option value="BI" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'BI' ) echo 'selected="selected"'; ?>>Burundi</option>
            <option value="KH" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'KH' ) echo 'selected="selected"'; ?>>Cambodia</option>
            <option value="CM" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'CM' ) echo 'selected="selected"'; ?>>Cameroon</option>
            <option value="CA" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'CA' ) echo 'selected="selected"'; ?>>Canada</option>
            <option value="CV" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'CV' ) echo 'selected="selected"'; ?>>Cape Verde</option>
            <option value="KY" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'KY' ) echo 'selected="selected"'; ?>>Cayman Islands</option>
            <option value="CF" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'CV' ) echo 'selected="selected"'; ?>>Central African Republic</option>
            <option value="TD" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'TD' ) echo 'selected="selected"'; ?>>Chad</option>
            <option value="CL" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'CL' ) echo 'selected="selected"'; ?>>Chile</option>
            <option value="CN" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'CN' ) echo 'selected="selected"'; ?>>China</option>
            <option value="CX" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'CX' ) echo 'selected="selected"'; ?>>Christmas Island</option>
            <option value="CC" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'CC' ) echo 'selected="selected"'; ?>>Cocos (Keeling) Islands</option>
            <option value="CO" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'CO' ) echo 'selected="selected"'; ?>>Colombia</option>
            <option value="KM" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'KM' ) echo 'selected="selected"'; ?>>Comoros</option>
            <option value="CG" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'CG' ) echo 'selected="selected"'; ?>>Congo</option>
            <option value="CD" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'CD' ) echo 'selected="selected"'; ?>>Congo, Democratic Republic of the Congo</option>
            <option value="CK" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'CK' ) echo 'selected="selected"'; ?>>Cook Islands</option>
            <option value="CR" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'CR' ) echo 'selected="selected"'; ?>>Costa Rica</option>
            <option value="CI" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'CI' ) echo 'selected="selected"'; ?>>Cote D'Ivoire</option>
            <option value="HR" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'HR' ) echo 'selected="selected"'; ?>>Croatia</option>
            <option value="CU" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'CU' ) echo 'selected="selected"'; ?>>Cuba</option>
            <option value="CW" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'CW' ) echo 'selected="selected"'; ?>>Curacao</option>
            <option value="CY" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'CY' ) echo 'selected="selected"'; ?>>Cyprus</option>
            <option value="CZ" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'CZ' ) echo 'selected="selected"'; ?>>Czech Republic</option>
            <option value="DK" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'DK' ) echo 'selected="selected"'; ?>>Denmark</option>
            <option value="DJ" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'DJ' ) echo 'selected="selected"'; ?>>Djibouti</option>
            <option value="DM" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'DM' ) echo 'selected="selected"'; ?>>Dominica</option>
            <option value="DO" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'DO' ) echo 'selected="selected"'; ?>>Dominican Republic</option>
            <option value="EC" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'EC' ) echo 'selected="selected"'; ?>>Ecuador</option>
            <option value="EG" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'EG' ) echo 'selected="selected"'; ?>>Egypt</option>
            <option value="SV" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'SV' ) echo 'selected="selected"'; ?>>El Salvador</option>
            <option value="GQ" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'GQ' ) echo 'selected="selected"'; ?>>Equatorial Guinea</option>
            <option value="ER" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'ER' ) echo 'selected="selected"'; ?>>Eritrea</option>
            <option value="EE" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'EE' ) echo 'selected="selected"'; ?>>Estonia</option>
            <option value="ET" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'ET' ) echo 'selected="selected"'; ?>>Ethiopia</option>
            <option value="FK" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'FK' ) echo 'selected="selected"'; ?>>Falkland Islands (Malvinas)</option>
            <option value="FO" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'FO' ) echo 'selected="selected"'; ?>>Faroe Islands</option>
            <option value="FJ" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'FJ' ) echo 'selected="selected"'; ?>>Fiji</option>
            <option value="FI" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'FI' ) echo 'selected="selected"'; ?>>Finland</option>
            <option value="FR" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'FR' ) echo 'selected="selected"'; ?>>France</option>
            <option value="GF" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'GF' ) echo 'selected="selected"'; ?>>French Guiana</option>
            <option value="PF" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'PF' ) echo 'selected="selected"'; ?>>French Polynesia</option>
            <option value="TF" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'TF' ) echo 'selected="selected"'; ?>>French Southern Territories</option>
            <option value="GA" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'GA' ) echo 'selected="selected"'; ?>>Gabon</option>
            <option value="GM" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'GM' ) echo 'selected="selected"'; ?>>Gambia</option>
            <option value="GE" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'GE' ) echo 'selected="selected"'; ?>>Georgia</option>
            <option value="DE" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'DE' ) echo 'selected="selected"'; ?>>Germany</option>
            <option value="GH" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'GH' ) echo 'selected="selected"'; ?>>Ghana</option>
            <option value="GI" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'GI' ) echo 'selected="selected"'; ?>>Gibraltar</option>
            <option value="GR" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'GR' ) echo 'selected="selected"'; ?>>Greece</option>
            <option value="GL" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'GL' ) echo 'selected="selected"'; ?>>Greenland</option>
            <option value="GD" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'GD' ) echo 'selected="selected"'; ?>>Grenada</option>
            <option value="GP" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'GP' ) echo 'selected="selected"'; ?>>Guadeloupe</option>
            <option value="GU" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'GU' ) echo 'selected="selected"'; ?>>Guam</option>
            <option value="GT" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'GT' ) echo 'selected="selected"'; ?>>Guatemala</option>
            <option value="GG" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'GG' ) echo 'selected="selected"'; ?>>Guernsey</option>
            <option value="GN" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'GN' ) echo 'selected="selected"'; ?>>Guinea</option>
            <option value="GW" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'GW' ) echo 'selected="selected"'; ?>>Guinea-Bissau</option>
            <option value="GY" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'GY' ) echo 'selected="selected"'; ?>>Guyana</option>
            <option value="HT" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'HT' ) echo 'selected="selected"'; ?>>Haiti</option>
            <option value="HM" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'HM' ) echo 'selected="selected"'; ?>>Heard Island and Mcdonald Islands</option>
            <option value="VA" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'VA' ) echo 'selected="selected"'; ?>>Holy See (Vatican City State)</option>
            <option value="HN" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'HN' ) echo 'selected="selected"'; ?>>Honduras</option>
            <option value="HK" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'HK' ) echo 'selected="selected"'; ?>>Hong Kong</option>
            <option value="HU" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'HU' ) echo 'selected="selected"'; ?>>Hungary</option>
            <option value="IS" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'IS' ) echo 'selected="selected"'; ?>>Iceland</option>
            <option value="IN" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'IN' ) echo 'selected="selected"'; ?>>India</option>
            <option value="ID" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'ID' ) echo 'selected="selected"'; ?>>Indonesia</option>
            <option value="IR" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'IR' ) echo 'selected="selected"'; ?>>Iran, Islamic Republic of</option>
            <option value="IQ" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'IQ' ) echo 'selected="selected"'; ?>>Iraq</option>
            <option value="IE" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'IE' ) echo 'selected="selected"'; ?>>Ireland</option>
            <option value="IM" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'IM' ) echo 'selected="selected"'; ?>>Isle of Man</option>
            <option value="IL" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'IL' ) echo 'selected="selected"'; ?>>Israel</option>
            <option value="IT" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'IT' ) echo 'selected="selected"'; ?>>Italy</option>
            <option value="JM" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'JM' ) echo 'selected="selected"'; ?>>Jamaica</option>
            <option value="JP" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'JP' ) echo 'selected="selected"'; ?>>Japan</option>
            <option value="JE" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'JE' ) echo 'selected="selected"'; ?>>Jersey</option>
            <option value="JO" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'JO' ) echo 'selected="selected"'; ?>>Jordan</option>
            <option value="KZ" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'KZ' ) echo 'selected="selected"'; ?>>Kazakhstan</option>
            <option value="KE" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'KE' ) echo 'selected="selected"'; ?>>Kenya</option>
            <option value="KI" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'KI' ) echo 'selected="selected"'; ?>>Kiribati</option>
            <option value="KP" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'KP' ) echo 'selected="selected"'; ?>>Korea, Democratic People's Republic of</option>
            <option value="KR" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'KR' ) echo 'selected="selected"'; ?>>Korea, Republic of</option>
            <option value="XK" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'XK' ) echo 'selected="selected"'; ?>>Kosovo</option>
            <option value="KW" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'KW' ) echo 'selected="selected"'; ?>>Kuwait</option>
            <option value="KG" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'KG' ) echo 'selected="selected"'; ?>>Kyrgyzstan</option>
            <option value="LA" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'LA' ) echo 'selected="selected"'; ?>>Lao People's Democratic Republic</option>
            <option value="LV" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'LV' ) echo 'selected="selected"'; ?>>Latvia</option>
            <option value="LB" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'LB' ) echo 'selected="selected"'; ?>>Lebanon</option>
            <option value="LS" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'LS' ) echo 'selected="selected"'; ?>>Lesotho</option>
            <option value="LR" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'LR' ) echo 'selected="selected"'; ?>>Liberia</option>
            <option value="LY" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'LY' ) echo 'selected="selected"'; ?>>Libyan Arab Jamahiriya</option>
            <option value="LI" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'LI' ) echo 'selected="selected"'; ?>>Liechtenstein</option>
            <option value="LT" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'LT' ) echo 'selected="selected"'; ?>>Lithuania</option>
            <option value="LU" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'LU' ) echo 'selected="selected"'; ?>>Luxembourg</option>
            <option value="MO" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'MO' ) echo 'selected="selected"'; ?>>Macao</option>
            <option value="MK" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'MK' ) echo 'selected="selected"'; ?>>Macedonia, the Former Yugoslav Republic of</option>
            <option value="MG" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'MG' ) echo 'selected="selected"'; ?>>Madagascar</option>
            <option value="MW" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'MW' ) echo 'selected="selected"'; ?>>Malawi</option>
            <option value="MY" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'MY' ) echo 'selected="selected"'; ?>>Malaysia</option>
            <option value="MV" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'MV' ) echo 'selected="selected"'; ?>>Maldives</option>
            <option value="ML" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'ML' ) echo 'selected="selected"'; ?>>Mali</option>
            <option value="MT" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'MT' ) echo 'selected="selected"'; ?>>Malta</option>
            <option value="MH" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'MH' ) echo 'selected="selected"'; ?>>Marshall Islands</option>
            <option value="MQ" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'MQ' ) echo 'selected="selected"'; ?>>Martinique</option>
            <option value="MR" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'MR' ) echo 'selected="selected"'; ?>>Mauritania</option>
            <option value="MU" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'MU' ) echo 'selected="selected"'; ?>>Mauritius</option>
            <option value="YT" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'YT' ) echo 'selected="selected"'; ?>>Mayotte</option>
            <option value="MX" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'MX' ) echo 'selected="selected"'; ?>>Mexico</option>
            <option value="FM" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'FM' ) echo 'selected="selected"'; ?>>Micronesia, Federated States of</option>
            <option value="MD" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'MD' ) echo 'selected="selected"'; ?>>Moldova, Republic of</option>
            <option value="MC" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'MC' ) echo 'selected="selected"'; ?>>Monaco</option>
            <option value="MN" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'MN' ) echo 'selected="selected"'; ?>>Mongolia</option>
            <option value="ME" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'ME' ) echo 'selected="selected"'; ?>>Montenegro</option>
            <option value="MS" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'MS' ) echo 'selected="selected"'; ?>>Montserrat</option>
            <option value="MA" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'MA' ) echo 'selected="selected"'; ?>>Morocco</option>
            <option value="MZ" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'MZ' ) echo 'selected="selected"'; ?>>Mozambique</option>
            <option value="MM" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'MM' ) echo 'selected="selected"'; ?>>Myanmar</option>
            <option value="NA" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'NA' ) echo 'selected="selected"'; ?>>Namibia</option>
            <option value="NR" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'NR' ) echo 'selected="selected"'; ?>>Nauru</option>
            <option value="NP" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'NP' ) echo 'selected="selected"'; ?>>Nepal</option>
            <option value="NL" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'NL' ) echo 'selected="selected"'; ?>>Netherlands</option>
            <option value="AN" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'AN' ) echo 'selected="selected"'; ?>>Netherlands Antilles</option>
            <option value="NC" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'NC' ) echo 'selected="selected"'; ?>>New Caledonia</option>
            <option value="NZ" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'NZ' ) echo 'selected="selected"'; ?>>New Zealand</option>
            <option value="NI" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'NI' ) echo 'selected="selected"'; ?>>Nicaragua</option>
            <option value="NE" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'NE' ) echo 'selected="selected"'; ?>>Niger</option>
            <option value="NG" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'NG' ) echo 'selected="selected"'; ?>>Nigeria</option>
            <option value="NU" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'NU' ) echo 'selected="selected"'; ?>>Niue</option>
            <option value="NF" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'NF' ) echo 'selected="selected"'; ?>>Norfolk Island</option>
            <option value="MP" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'MP' ) echo 'selected="selected"'; ?>>Northern Mariana Islands</option>
            <option value="NO" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'NO' ) echo 'selected="selected"'; ?>>Norway</option>
            <option value="OM" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'OM' ) echo 'selected="selected"'; ?>>Oman</option>
            <option value="PK" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'PK' ) echo 'selected="selected"'; ?>>Pakistan</option>
            <option value="PW" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'PW' ) echo 'selected="selected"'; ?>>Palau</option>
            <option value="PS" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'PS' ) echo 'selected="selected"'; ?>>Palestinian Territory, Occupied</option>
            <option value="PA" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'PA' ) echo 'selected="selected"'; ?>>Panama</option>
            <option value="PG" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'PG' ) echo 'selected="selected"'; ?>>Papua New Guinea</option>
            <option value="PY" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'PY' ) echo 'selected="selected"'; ?>>Paraguay</option>
            <option value="PE" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'PE' ) echo 'selected="selected"'; ?>>Peru</option>
            <option value="PH" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'PH' ) echo 'selected="selected"'; ?>>Philippines</option>
            <option value="PN" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'PN' ) echo 'selected="selected"'; ?>>Pitcairn</option>
            <option value="PL" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'PL' ) echo 'selected="selected"'; ?>>Poland</option>
            <option value="PT" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'PT' ) echo 'selected="selected"'; ?>>Portugal</option>
            <option value="PR" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'PR' ) echo 'selected="selected"'; ?>>Puerto Rico</option>
            <option value="QA" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'QA' ) echo 'selected="selected"'; ?>>Qatar</option>
            <option value="RE" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'RE' ) echo 'selected="selected"'; ?>>Reunion</option>
            <option value="RO" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'RO' ) echo 'selected="selected"'; ?>>Romania</option>
            <option value="RU" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'RU' ) echo 'selected="selected"'; ?>>Russian Federation</option>
            <option value="RW" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'RW' ) echo 'selected="selected"'; ?>>Rwanda</option>
            <option value="BL" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'BL' ) echo 'selected="selected"'; ?>>Saint Barthelemy</option>
            <option value="SH" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'SH' ) echo 'selected="selected"'; ?>>Saint Helena</option>
            <option value="KN" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'KN' ) echo 'selected="selected"'; ?>>Saint Kitts and Nevis</option>
            <option value="LC" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'LC' ) echo 'selected="selected"'; ?>>Saint Lucia</option>
            <option value="MF" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'MF' ) echo 'selected="selected"'; ?>>Saint Martin</option>
            <option value="PM" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'PM' ) echo 'selected="selected"'; ?>>Saint Pierre and Miquelon</option>
            <option value="VC" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'VC' ) echo 'selected="selected"'; ?>>Saint Vincent and the Grenadines</option>
            <option value="WS" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'WS' ) echo 'selected="selected"'; ?>>Samoa</option>
            <option value="SM" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'SM' ) echo 'selected="selected"'; ?>>San Marino</option>
            <option value="ST" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'ST' ) echo 'selected="selected"'; ?>>Sao Tome and Principe</option>
            <option value="SA" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'SA' ) echo 'selected="selected"'; ?>>Saudi Arabia</option>
            <option value="SN" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'SN' ) echo 'selected="selected"'; ?>>Senegal</option>
            <option value="RS" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'RS' ) echo 'selected="selected"'; ?>>Serbia</option>
            <option value="CS" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'CS' ) echo 'selected="selected"'; ?>>Serbia and Montenegro</option>
            <option value="SC" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'SC' ) echo 'selected="selected"'; ?>>Seychelles</option>
            <option value="SL" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'SL' ) echo 'selected="selected"'; ?>>Sierra Leone</option>
            <option value="SG" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'SG' ) echo 'selected="selected"'; ?>>Singapore</option>
            <option value="SX" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'SX' ) echo 'selected="selected"'; ?>>Sint Maarten</option>
            <option value="SK" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'SK' ) echo 'selected="selected"'; ?>>Slovakia</option>
            <option value="SI" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'SI' ) echo 'selected="selected"'; ?>>Slovenia</option>
            <option value="SB" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'SB' ) echo 'selected="selected"'; ?>>Solomon Islands</option>
            <option value="SO" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'SO' ) echo 'selected="selected"'; ?>>Somalia</option>
            <option value="ZA" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'ZA' ) echo 'selected="selected"'; ?>>South Africa</option>
            <option value="GS" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'GS' ) echo 'selected="selected"'; ?>>South Georgia and the South Sandwich Islands</option>
            <option value="SS" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'SS' ) echo 'selected="selected"'; ?>>South Sudan</option>
            <option value="ES" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'ES' ) echo 'selected="selected"'; ?>>Spain</option>
            <option value="LK" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'LK' ) echo 'selected="selected"'; ?>>Sri Lanka</option>
            <option value="SD" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'SD' ) echo 'selected="selected"'; ?>>Sudan</option>
            <option value="SR" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'SR' ) echo 'selected="selected"'; ?>>Suriname</option>
            <option value="SJ" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'SJ' ) echo 'selected="selected"'; ?>>Svalbard and Jan Mayen</option>
            <option value="SZ" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'SZ' ) echo 'selected="selected"'; ?>>Swaziland</option>
            <option value="SE" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'SE' ) echo 'selected="selected"'; ?>>Sweden</option>
            <option value="CH" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'CH' ) echo 'selected="selected"'; ?>>Switzerland</option>
            <option value="SY" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'SY' ) echo 'selected="selected"'; ?>>Syrian Arab Republic</option>
            <option value="TW" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'TW' ) echo 'selected="selected"'; ?>>Taiwan, Province of China</option>
            <option value="TJ" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'TJ' ) echo 'selected="selected"'; ?>>Tajikistan</option>
            <option value="TZ" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'TZ' ) echo 'selected="selected"'; ?>>Tanzania, United Republic of</option>
            <option value="TH" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'TH' ) echo 'selected="selected"'; ?>>Thailand</option>
            <option value="TL" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'TL' ) echo 'selected="selected"'; ?>>Timor-Leste</option>
            <option value="TG" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'TG' ) echo 'selected="selected"'; ?>>Togo</option>
            <option value="TK" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'TK' ) echo 'selected="selected"'; ?>>Tokelau</option>
            <option value="TO" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'TO' ) echo 'selected="selected"'; ?>>Tonga</option>
            <option value="TT" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'TT' ) echo 'selected="selected"'; ?>>Trinidad and Tobago</option>
            <option value="TN" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'TN' ) echo 'selected="selected"'; ?>>Tunisia</option>
            <option value="TR" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'TR' ) echo 'selected="selected"'; ?>>Turkey</option>
            <option value="TM" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'TM' ) echo 'selected="selected"'; ?>>Turkmenistan</option>
            <option value="TC" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'TC' ) echo 'selected="selected"'; ?>>Turks and Caicos Islands</option>
            <option value="TV" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'TV' ) echo 'selected="selected"'; ?>>Tuvalu</option>
            <option value="UG" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'UG' ) echo 'selected="selected"'; ?>>Uganda</option>
            <option value="UA" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'UA' ) echo 'selected="selected"'; ?>>Ukraine</option>
            <option value="AE" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'AE' ) echo 'selected="selected"'; ?>>United Arab Emirates</option>
            <option value="GB" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'GB' ) echo 'selected="selected"'; ?>>United Kingdom</option>
            <option value="US" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'US' ) echo 'selected="selected"'; ?>>United States</option>
            <option value="UM" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'UM' ) echo 'selected="selected"'; ?>>United States Minor Outlying Islands</option>
            <option value="UY" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'UY' ) echo 'selected="selected"'; ?>>Uruguay</option>
            <option value="UZ" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'UZ' ) echo 'selected="selected"'; ?>>Uzbekistan</option>
            <option value="VU" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'VU' ) echo 'selected="selected"'; ?>>Vanuatu</option>
            <option value="VE" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'VE' ) echo 'selected="selected"'; ?>>Venezuela</option>
            <option value="VN" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'VN' ) echo 'selected="selected"'; ?>>Viet Nam</option>
            <option value="VG" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'VG' ) echo 'selected="selected"'; ?>>Virgin Islands, British</option>
            <option value="VI" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'VI' ) echo 'selected="selected"'; ?>>Virgin Islands, U.s.</option>
            <option value="WF" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'WF' ) echo 'selected="selected"'; ?>>Wallis and Futuna</option>
            <option value="EH" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'EH' ) echo 'selected="selected"'; ?>>Western Sahara</option>
            <option value="YE" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'YE' ) echo 'selected="selected"'; ?>>Yemen</option>
            <option value="ZM" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'ZM' ) echo 'selected="selected"'; ?>>Zambia</option>
            <option value="ZW" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'country', true ) ) == 'ZW' ) echo 'selected="selected"'; ?>>Zimbabwe</option>
        </select>        
    </p>

    <p class="meta-options hcf_field">
        <label for="language">Language</label>

        <select id="language" name="language" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'language', true ) ); ?>">
            <option>Select a language...</option>
            <option value="af" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'af' ) echo 'selected="selected"'; ?>>Afrikaans</option>
            <option value="sq" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'sq' ) echo 'selected="selected"'; ?>>Albanian - shqip</option>
            <option value="am" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'am' ) echo 'selected="selected"'; ?>>Amharic - አማርኛ</option>
            <option value="ar" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'ar' ) echo 'selected="selected"'; ?>>Arabic - العربية</option>
            <option value="an" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'an' ) echo 'selected="selected"'; ?>>Aragonese - aragonés</option>
            <option value="hy" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'hy' ) echo 'selected="selected"'; ?>>Armenian - հայերեն</option>
            <option value="ast" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'ast' ) echo 'selected="selected"'; ?>>Asturian - asturianu</option>
            <option value="az" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'az' ) echo 'selected="selected"'; ?>>Azerbaijani - azərbaycan dili</option>
            <option value="eu" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'eu' ) echo 'selected="selected"'; ?>>Basque - euskara</option>
            <option value="be" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'be' ) echo 'selected="selected"'; ?>>Belarusian - беларуская</option>
            <option value="bn" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'bn' ) echo 'selected="selected"'; ?>>Bengali - বাংলা</option>
            <option value="bs" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'bs' ) echo 'selected="selected"'; ?>>Bosnian - bosanski</option>
            <option value="br" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'br' ) echo 'selected="selected"'; ?>>Breton - brezhoneg</option>
            <option value="bg" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'bg' ) echo 'selected="selected"'; ?>>Bulgarian - български</option>
            <option value="ca" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'ca' ) echo 'selected="selected"'; ?>>Catalan - català</option>
            <option value="ckb" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'ckb' ) echo 'selected="selected"'; ?>>Central Kurdish - کوردی (دەستنوسی عەرەبی)</option>
            <option value="zh" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'zh' ) echo 'selected="selected"'; ?>>Chinese - 中文</option>
            <option value="zh-HK" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'zh-HK' ) echo 'selected="selected"'; ?>>Chinese (Hong Kong) - 中文（香港）</option>
            <option value="zh-CN" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'zh-CN' ) echo 'selected="selected"'; ?>>Chinese (Simplified) - 中文（简体）</option>
            <option value="zh-TW" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'zh-TW' ) echo 'selected="selected"'; ?>>Chinese (Traditional) - 中文（繁體）</option>
            <option value="co" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'co' ) echo 'selected="selected"'; ?>>Corsican</option>
            <option value="hr" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'hr' ) echo 'selected="selected"'; ?>>Croatian - hrvatski</option>
            <option value="cs" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'cs' ) echo 'selected="selected"'; ?>>Czech - čeština</option>
            <option value="da" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'da' ) echo 'selected="selected"'; ?>>Danish - dansk</option>
            <option value="nl" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'nl' ) echo 'selected="selected"'; ?>>Dutch - Nederlands</option>
            <option value="en" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'en' ) echo 'selected="selected"'; ?>>English</option>
            <option value="en-AU" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'en-AU' ) echo 'selected="selected"'; ?>>English (Australia)</option>
            <option value="en-CA" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'en-CA' ) echo 'selected="selected"'; ?>>English (Canada)</option>
            <option value="en-IN" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'en-IN' ) echo 'selected="selected"'; ?>>English (India)</option>
            <option value="en-NZ" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'en-NZ' ) echo 'selected="selected"'; ?>>English (New Zealand)</option>
            <option value="en-ZA" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'en-ZA' ) echo 'selected="selected"'; ?>>English (South Africa)</option>
            <option value="en-GB" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'en-GB' ) echo 'selected="selected"'; ?>>English (United Kingdom)</option>
            <option value="en-US" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'en-US' ) echo 'selected="selected"'; ?>>English (United States)</option>
            <option value="eo" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'eo' ) echo 'selected="selected"'; ?>>Esperanto - esperanto</option>
            <option value="et" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'et' ) echo 'selected="selected"'; ?>>Estonian - eesti</option>
            <option value="fo" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'fo' ) echo 'selected="selected"'; ?>>Faroese - føroyskt</option>
            <option value="fil" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'fil' ) echo 'selected="selected"'; ?>>Filipino</option>
            <option value="fi" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'fi' ) echo 'selected="selected"'; ?>>Finnish - suomi</option>
            <option value="fr" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'fr' ) echo 'selected="selected"'; ?>>French - français</option>
            <option value="fr-CA" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'fr-CA' ) echo 'selected="selected"'; ?>>French (Canada) - français (Canada)</option>
            <option value="fr-FR" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'fr-FR' ) echo 'selected="selected"'; ?>>French (France) - français (France)</option>
            <option value="fr-CH" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'fr-CH' ) echo 'selected="selected"'; ?>>French (Switzerland) - français (Suisse)</option>
            <option value="gl" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'gl' ) echo 'selected="selected"'; ?>>Galician - galego</option>
            <option value="ka" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'ka' ) echo 'selected="selected"'; ?>>Georgian - ქართული</option>
            <option value="de" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'de' ) echo 'selected="selected"'; ?>>German - Deutsch</option>
            <option value="de-AT" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'de-AT' ) echo 'selected="selected"'; ?>>German (Austria) - Deutsch (Österreich)</option>
            <option value="de-DE" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'de-DE' ) echo 'selected="selected"'; ?>>German (Germany) - Deutsch (Deutschland)</option>
            <option value="de-LI" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'de-LI' ) echo 'selected="selected"'; ?>>German (Liechtenstein) - Deutsch (Liechtenstein)</option>
            <option value="de-CH" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'de-CH' ) echo 'selected="selected"'; ?>>German (Switzerland) - Deutsch (Schweiz)</option>
            <option value="el" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'el' ) echo 'selected="selected"'; ?>>Greek - Ελληνικά</option>
            <option value="gn" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'gn' ) echo 'selected="selected"'; ?>>Guarani</option>
            <option value="gu" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'gu' ) echo 'selected="selected"'; ?>>Gujarati - ગુજરાતી</option>
            <option value="ha" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'ha' ) echo 'selected="selected"'; ?>>Hausa</option>
            <option value="haw" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'haw' ) echo 'selected="selected"'; ?>>Hawaiian - ʻŌlelo Hawaiʻi</option>
            <option value="he" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'he' ) echo 'selected="selected"'; ?>>Hebrew - עברית</option>
            <option value="hi" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'hi' ) echo 'selected="selected"'; ?>>Hindi - हिन्दी</option>
            <option value="hu" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'hu' ) echo 'selected="selected"'; ?>>Hungarian - magyar</option>
            <option value="is" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'is' ) echo 'selected="selected"'; ?>>Icelandic - íslenska</option>
            <option value="id" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'id' ) echo 'selected="selected"'; ?>>Indonesian - Indonesia</option>
            <option value="ia" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'ia' ) echo 'selected="selected"'; ?>>Interlingua</option>
            <option value="ga" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'ga' ) echo 'selected="selected"'; ?>>Irish - Gaeilge</option>
            <option value="it" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'it' ) echo 'selected="selected"'; ?>>Italian - italiano</option>
            <option value="it-IT" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'it-IT' ) echo 'selected="selected"'; ?>>Italian (Italy) - italiano (Italia)</option>
            <option value="it-CH" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'it-CH' ) echo 'selected="selected"'; ?>>Italian (Switzerland) - italiano (Svizzera)</option>
            <option value="ja" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'ja' ) echo 'selected="selected"'; ?>>Japanese - 日本語</option>
            <option value="kn" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'kn' ) echo 'selected="selected"'; ?>>Kannada - ಕನ್ನಡ</option>
            <option value="kk" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'kk' ) echo 'selected="selected"'; ?>>Kazakh - қазақ тілі</option>
            <option value="km" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'km' ) echo 'selected="selected"'; ?>>Khmer - ខ្មែរ</option>
            <option value="ko" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'ko' ) echo 'selected="selected"'; ?>>Korean - 한국어</option>
            <option value="ku" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'ku' ) echo 'selected="selected"'; ?>>Kurdish - Kurdî</option>
            <option value="ky" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'ky' ) echo 'selected="selected"'; ?>>Kyrgyz - кыргызча</option>
            <option value="lo" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'lo' ) echo 'selected="selected"'; ?>>Lao - ລາວ</option>
            <option value="la" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'la' ) echo 'selected="selected"'; ?>>Latin</option>
            <option value="lv" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'lv' ) echo 'selected="selected"'; ?>>Latvian - latviešu</option>
            <option value="ln" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'ln' ) echo 'selected="selected"'; ?>>Lingala - lingála</option>
            <option value="lt" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'lt' ) echo 'selected="selected"'; ?>>Lithuanian - lietuvių</option>
            <option value="mk" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'mk' ) echo 'selected="selected"'; ?>>Macedonian - македонски</option>
            <option value="ms" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'ms' ) echo 'selected="selected"'; ?>>Malay - Bahasa Melayu</option>
            <option value="ml" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'ml' ) echo 'selected="selected"'; ?>>Malayalam - മലയാളം</option>
            <option value="mt" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'mt' ) echo 'selected="selected"'; ?>>Maltese - Malti</option>
            <option value="mr" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'mr' ) echo 'selected="selected"'; ?>>Marathi - मराठी</option>
            <option value="mn" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'mn' ) echo 'selected="selected"'; ?>>Mongolian - монгол</option>
            <option value="ne" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'ne' ) echo 'selected="selected"'; ?>>Nepali - नेपाली</option>
            <option value="no" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'no' ) echo 'selected="selected"'; ?>>Norwegian - norsk</option>
            <option value="nb" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'nb' ) echo 'selected="selected"'; ?>>Norwegian Bokmål - norsk bokmål</option>
            <option value="nn" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'nn' ) echo 'selected="selected"'; ?>>Norwegian Nynorsk - nynorsk</option>
            <option value="oc" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'oc' ) echo 'selected="selected"'; ?>>Occitan</option>
            <option value="or" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'or' ) echo 'selected="selected"'; ?>>Oriya - ଓଡ଼ିଆ</option>
            <option value="om" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'am' ) echo 'selected="selected"'; ?>>Oromo - Oromoo</option>
            <option value="ps" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'ps' ) echo 'selected="selected"'; ?>>Pashto - پښتو</option>
            <option value="fa" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'fa' ) echo 'selected="selected"'; ?>>Persian - فارسی</option>
            <option value="pl" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'pl' ) echo 'selected="selected"'; ?>>Polish - polski</option>
            <option value="pt" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'pt' ) echo 'selected="selected"'; ?>>Portuguese - português</option>
            <option value="pt-BR" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'pt-BR' ) echo 'selected="selected"'; ?>>Portuguese (Brazil) - português (Brasil)</option>
            <option value="pt-PT" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'pt-PT' ) echo 'selected="selected"'; ?>>Portuguese (Portugal) - português (Portugal)</option>
            <option value="pa" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'pa' ) echo 'selected="selected"'; ?>>Punjabi - ਪੰਜਾਬੀ</option>
            <option value="qu" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'qu' ) echo 'selected="selected"'; ?>>Quechua</option>
            <option value="ro" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'ro' ) echo 'selected="selected"'; ?>>Romanian - română</option>
            <option value="mo" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'mo' ) echo 'selected="selected"'; ?>>Romanian (Moldova) - română (Moldova)</option>
            <option value="rm" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'rm' ) echo 'selected="selected"'; ?>>Romansh - rumantsch</option>
            <option value="ru" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'ru' ) echo 'selected="selected"'; ?>>Russian - русский</option>
            <option value="gd" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'gd' ) echo 'selected="selected"'; ?>>Scottish Gaelic</option>
            <option value="sr" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'sr' ) echo 'selected="selected"'; ?>>Serbian - српски</option>
            <option value="sh" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'sh' ) echo 'selected="selected"'; ?>>Serbo-Croatian - Srpskohrvatski</option>
            <option value="sn" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'sn' ) echo 'selected="selected"'; ?>>Shona - chiShona</option>
            <option value="sd" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'sd' ) echo 'selected="selected"'; ?>>Sindhi</option>
            <option value="si" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'si' ) echo 'selected="selected"'; ?>>Sinhala - සිංහල</option>
            <option value="sk" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'sk' ) echo 'selected="selected"'; ?>>Slovak - slovenčina</option>
            <option value="sl" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'sl' ) echo 'selected="selected"'; ?>>Slovenian - slovenščina</option>
            <option value="so" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'so' ) echo 'selected="selected"'; ?>>Somali - Soomaali</option>
            <option value="st" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'st' ) echo 'selected="selected"'; ?>>Southern Sotho</option>
            <option value="es" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'es' ) echo 'selected="selected"'; ?>>Spanish - español</option>
            <option value="es-AR" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'es-AR' ) echo 'selected="selected"'; ?>>Spanish (Argentina) - español (Argentina)</option>
            <option value="es-419" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'es-419' ) echo 'selected="selected"'; ?>>Spanish (Latin America) - español (Latinoamérica)</option>
            <option value="es-MX" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'es-MX' ) echo 'selected="selected"'; ?>>Spanish (Mexico) - español (México)</option>
            <option value="es-ES" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'es-ES' ) echo 'selected="selected"'; ?>>Spanish (Spain) - español (España)</option>
            <option value="es-US" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'es-US' ) echo 'selected="selected"'; ?>>Spanish (United States) - español (Estados Unidos)</option>
            <option value="su" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'su' ) echo 'selected="selected"'; ?>>Sundanese</option>
            <option value="sw" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'sw' ) echo 'selected="selected"'; ?>>Swahili - Kiswahili</option>
            <option value="sv" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'sv' ) echo 'selected="selected"'; ?>>Swedish - svenska</option>
            <option value="tg" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'tg' ) echo 'selected="selected"'; ?>>Tajik - тоҷикӣ</option>
            <option value="ta" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'ta' ) echo 'selected="selected"'; ?>>Tamil - தமிழ்</option>
            <option value="tt" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'tt' ) echo 'selected="selected"'; ?>>Tatar</option>
            <option value="te" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'te' ) echo 'selected="selected"'; ?>>Telugu - తెలుగు</option>
            <option value="th" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'th' ) echo 'selected="selected"'; ?>>Thai - ไทย</option>
            <option value="ti" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'ti' ) echo 'selected="selected"'; ?>>Tigrinya - ትግርኛ</option>
            <option value="to" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'to' ) echo 'selected="selected"'; ?>>Tongan - lea fakatonga</option>
            <option value="tr" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'tr' ) echo 'selected="selected"'; ?>>Turkish - Türkçe</option>
            <option value="tk" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'tk' ) echo 'selected="selected"'; ?>>Turkmen</option>
            <option value="tw" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'tw' ) echo 'selected="selected"'; ?>>Twi</option>
            <option value="uk" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'uk' ) echo 'selected="selected"'; ?>>Ukrainian - українська</option>
            <option value="ur" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'ur' ) echo 'selected="selected"'; ?>>Urdu - اردو</option>
            <option value="ug" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'ug' ) echo 'selected="selected"'; ?>>Uyghur</option>
            <option value="uz" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'uz' ) echo 'selected="selected"'; ?>>Uzbek - o‘zbek</option>
            <option value="vi" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'vi' ) echo 'selected="selected"'; ?>>Vietnamese - Tiếng Việt</option>
            <option value="wa" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'wa' ) echo 'selected="selected"'; ?>>Walloon - wa</option>
            <option value="cy" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'cy' ) echo 'selected="selected"'; ?>>Welsh - Cymraeg</option>
            <option value="fy" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'fy' ) echo 'selected="selected"'; ?>>Western Frisian</option>
            <option value="xh" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'xh' ) echo 'selected="selected"'; ?>>Xhosa</option>
            <option value="yi" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'yi' ) echo 'selected="selected"'; ?>>Yiddish</option>
            <option value="yo" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'yo' ) echo 'selected="selected"'; ?>>Yoruba - Èdè Yorùbá</option>
            <option value="zu" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'language', true ) ) == 'zu' ) echo 'selected="selected"'; ?>>Zulu - isiZulu</option>
        </select>        
    </p>


    <p class="meta-options hcf_field">
        <label for="device">Device</label>
        <select id="device" name="device" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'device', true ) ); ?>">
            <option>Select a device...</option>
            <option value="all" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'device', true ) ) == 'all' ) echo 'selected="selected"'; ?>>All</option>
            <option value="desktop" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'device', true ) ) == 'desktop' ) echo 'selected="selected"'; ?>>Desktop</option>
            <option value="mobile" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'device', true ) ) == 'mobile' ) echo 'selected="selected"'; ?>>Mobile</option>
            <option value="tablet" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'device', true ) ) == 'tablet' ) echo 'selected="selected"'; ?>>Tablet</option>
        </select>        
    </p>    


    <p class="meta-options hcf_field">
        <label for="resultsVisible">Results Visible</label>
        <input id="resultsVisible" type="checkbox" name="resultsVisible"  <?php if ( esc_attr( get_post_meta( get_the_ID(), 'resultsVisible', true ) ) == true ) echo 'checked'; ?>>
    </p>


    <p class="meta-options hcf_field">
        <label for="surveyTheme">Survey Theme</label>
        <select id="surveyTheme" name="surveyTheme" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'device', true ) ); ?>">
            <option>Select a theme...</option>
            <option value="RARIFY" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'surveyTheme', true ) ) == 'RARIFY' ) echo 'selected="selected"'; ?>>Rarify</option>
            <option value="EQ-5D-5L" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'surveyTheme', true ) ) == 'EQ-5D-5L' ) echo 'selected="selected"'; ?>>EQ-5D-5L</option>
            <option value="EQ-XXX-5L" <?php if ( esc_attr( get_post_meta( get_the_ID(), 'surveyTheme', true ) ) == 'EQ-XXX-5L' ) echo 'selected="selected"'; ?>>EQ-XXX-5L</option>
        </select>  
    </p>


    <p class="meta-options hcf_field">
        <label for="timeToComplete">Time to Complete</label>
        <input id="timeToComplete" type="number" name="timeToComplete" value="<?php echo esc_attr( get_post_meta( get_the_ID(), 'timeToComplete', true ) ); ?>">
    </p>       

</div>
