<?php
/*
weaveriip_admin - admin code

This code is Copyright 2011 by Bruce E. Wampler, all rights reserved.
This code is licensed under the terms of the accompanying license file: license.txt.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

function weaverii_pro_sc_admin() {
?>

<h3>Weaver II Shortcode Admin</h3>
<?php
    if (function_exists('weaveriip_has_show_posts')) {
        weaveriip_breadcrumbs_admin(); ?> <br /><hr /> <?php
        weaveriip_headerimg_admin(); ?> <br /><hr /> <?php
        weaveriip_sc_html_admin(); ?> <br /><hr /><?php
        weaveriip_sc_div_admin(); ?> <br /><hr /><?php
        weaveriip_sc_iframe_admin(); ?> <br /><hr /><?php
        weaveriip_pagenav_admin(); ?> <br /><hr /> <?php
        weaveriip_showhide_mobile_admin(); ?> <br /><hr /> <?php
        weaveriip_showhide_logged_in_admin(); ?> <br /><hr /> <?php
        weaveriip_show_posts_admin(); ?> <br /><hr /> <?php
        weaveriip_sitetitle_admin(); ?> <br /> <?php
        weaveriip_video_admin(); ?> <br /> <?php
    }
?>
<hr />
<h3>Weaver II Pro Shortcodes</h3>
<strong>The Weaver II Pro Version offers the following shortcodes and features as well:</strong>
<br /><br />
<ul>

    <li>Header Gadgets - Images/Text over Header</li>
    <li>Link Buttons - shortcode & widget</li>
    <li>Social Buttons - shortcode & widget</li>
    <li>Weaver Slider Menu Shortcode</li>
    <li>Extra Menus Shortcode</li>
    <li>Widget Area Shortcode</li>
    <li>Search Form Shortcode</li>
    <li>Show Feed Shortcode</li>
    <li>Popup Link Shortcode</li>
    <li>Show/Hide Shortcode</li>
    <li>Comment Policy</li>
    <li>Shortcoder</li>
    <li>Include PHP Shortcode</li>
    <li>Total CSS</li>

</ul>

<?php
}

?>
