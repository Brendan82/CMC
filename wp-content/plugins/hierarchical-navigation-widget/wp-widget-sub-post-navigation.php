<?php
/*
Plugin Name: Sub Post Navigation Lite
Plugin URI: http://dennishoppe.de/en/wordpress-plugins/sub-post-navigation
Description: This widget displays a navigation on hierarchically organized post types.
Version: 1.1.2
Author: Dennis Hoppe
Author URI: http://DennisHoppe.de
*/

// Plugin Class
If (!Class_Exists('widget_sub_post_navigation')){
class widget_sub_post_navigation Extends WP_Widget {
  var $base_url;
  var $arr_option;

  function __construct(){
    // Base URL
    $this->base_url = get_bloginfo('wpurl').'/'.SubStr(RealPath(DirName(__FILE__)), Strlen(ABSPATH));
    $this->base_url = Str_Replace("\\", '/', $this->base_url); // Windows Workaround

    // Get ready to translate
    $this->Load_TextDomain();

    // Setup the Widget data
    parent::__construct (
      False,
      $this->t('Sub Post Navigation'),
      Array('description' => $this->t('This widget display a navigation on hierarchically organized post types.'))
    );

    // Enqueue Backend CSS
    Add_Action('admin_enqueue_scripts', Array($this, 'Enqueue_Backend_Style'));
  }

  function Load_TextDomain(){
    $locale = Apply_Filters( 'plugin_locale', get_locale(), __CLASS__ );
    load_textdomain (__CLASS__, DirName(__FILE__).'/language/' . $locale . '.mo');
  }

  function t ($text, $context = ''){
    // Translates the string $text with context $context
    If ($context == '')
      return __($text, __CLASS__);
    Else
      return _x($text, $context, __CLASS__);
  }

  function default_options(){
    // Default settings
    return Array(
      'title' => $this->t('Navigation'),
      'orderby' => 'title',
      'parent_link_position' => 'top',
      'post_order' => 'ASC'
    );
  }

  function load_options($options){
    $options = (ARRAY) $options;

    // Delete empty values
    ForEach ($options AS $key => $value)
      If (!$value) Unset($options[$key]);

    // Load options
    $this->arr_option = Array_Merge ($this->default_options(), $options);
  }

  function get_option($key, $default = False){
    If (IsSet($this->arr_option[$key]) && $this->arr_option[$key])
      return $this->arr_option[$key];
    Else
      return $default;
  }

  function set_option($key, $value){
    $this->arr_option[$key] = $value;
  }

  function widget ($widget_args, $options){
    // If this is not a single posts we bail out
    If (!is_singular()) return False;

    // Load options
    $this->load_options ($options); Unset ($options);

    // Load post and post type
    $post = $GLOBALS['post'];

    // Check the post type
    If ($post->post_type != 'page') return False;

    // Read current child posts
    $navigation = New WP_Query(Array(
      'post_parent'         => $post->ID,
      'post_type'           => 'page',
      'post_status'         => Array('publish', 'inherit'),
      'posts_per_page'      => -1,
      'orderby'             => 'title',
      'order'               => 'DESC',
      'ignore_sticky_posts' => True
    ));

    // Show widget data
    If ($navigation->have_posts() && $post->post_parent == 0){
      $widget_title = Apply_Filters('the_title', $post->post_title);
      $parent_id = False;
    }

    ElseIf ($navigation->have_posts() && $post->post_parent != 0){
      $widget_title = Apply_Filters('the_title', $post->post_title);
      $parent_id = $post->post_parent;
    }

    ElseIf (!$navigation->have_posts() && $post->post_parent == 0){
      If ($this->get_option('do_not_show_on_top_leves_without_subs')) return False;
      $widget_title = False;
      $navigation->Query(Array(
        'post_parent'         => 0,
        'post_type'           => 'page',
        'posts_per_page'      => -1,
        'orderby'             => 'title',
        'order'               => 'DESC',
        'ignore_sticky_posts' => True
      ));
      $parent_id = False;
    }

    ElseIf (!$navigation->have_posts() && $post->post_parent != 0){
      $widget_title = get_the_title($post->post_parent);
      $navigation->Query(Array(
        'post_parent'         => $post->post_parent,
        'post_type'           => 'page',
        'posts_per_page'      => -1,
        'orderby'             => 'title',
        'order'               => 'DESC',
        'ignore_sticky_posts' => True
      ));
      $parent_id = $post->post_parent;
    }

    // Widget title
    If ( $widget_title && $this->get_option('replace_widget_title') )
      $this->set_option('title', Apply_Filters('widget_title', $widget_title));

    // Widget output
    Echo $widget_args['before_widget'];

    // Load widget template
    Echo $this->Load_Template('sub-post-navigation.php', Array(
      'TITLE' => $this->get_option('hide_widget_title') ? False : SPrintF('%s%s%s', $widget_args['before_title'], $this->get_option('title'), $widget_args['after_title']),
      'PARENT' => $parent_id,
      'NAVIGATION' => $navigation,
    ));

    // Reset Query
    WP_Reset_Query();

    // Widget bottom
    Echo $widget_args['after_widget'];
  }

  function form ($options){
    // Load options
    $this->load_options ($options); Unset ($options);

    // Load options form
    Include DirName(__FILE__) . '/form.php';
  }

  function update ($new_settings, $old_settings){
    return $new_settings;
  }

  function Load_Template($template_name, $vars = Array()){
		Extract($vars);
		$template_path = Locate_Template($template_name);
		Ob_Start();
		If(!Empty($template_path)) Include $template_path;
		Else Include SPrintF('%s/%s', DirName(__FILE__), $template_name);
		return Ob_Get_Clean();
	}

  function Pro_Notice(){
    PrintF (
      $this->t('Sorry, this feature is only available in the <a href="%s" target="_blank">Pro Version</a>.'),
      $this->t('http://dennishoppe.de/en/wordpress-plugins/sub-post-navigation', 'Link to the authors website')
    );
  }

  function Enqueue_Backend_Style(){
    WP_Enqueue_Style('sub-post-navigation-widget', $this->base_url . '/admin.css');
  }

} /* End of Class */
Add_Action ('widgets_init', Create_Function ('','Register_Widget(\'widget_sub_post_navigation\');') );
} /* End of If-Class-Exists-Condition */
/* End of File */