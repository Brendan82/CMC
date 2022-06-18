<h4><?php _e('General') ?></h4>
<p>
  <label for="<?php Echo $this->Get_Field_ID('title') ?>"><?php Echo $this->t('Title:') ?></label>
  <input type="text" id="<?php Echo $this->Get_Field_ID('title') ?>" name="<?php  Echo $this->Get_Field_Name('title') ?>" value="<?php Echo $this->get_option('title') ?>"><br>
  (<small><?php Echo $this->t('This title will only be used if there is no useable parent post title.') ?></small>)
</p>

<p>
  <label for="<?php Echo $this->Get_Field_ID('hide_widget_title') ?>">
    <input type="checkbox" value="yes" id="<?php Echo $this->Get_Field_ID('hide_widget_title') ?>" name="<?php Echo $this->Get_Field_Name('hide_widget_title') ?>" <?php Checked($this->get_option('hide_widget_title'), 'yes') ?> >
    <?php Echo $this->t('Hide the widget title.') ?>
  </label>
</p>

<p>
  <label for="<?php Echo $this->Get_Field_ID('replace_widget_title') ?>">
    <input type="checkbox" value="yes" id="<?php Echo $this->Get_Field_ID('replace_widget_title') ?>" name="<?php Echo $this->Get_Field_Name('replace_widget_title') ?>" <?php Checked($this->get_option('replace_widget_title'), 'yes') ?> >
    <?php echo $this->t('Replace the widget title with the title of the parent page if possible.') ?>
  </label>
</p>

<h4><?php Echo $this->t('Post Types') ?></h4>
<p><?php Echo $this->t('Please select the post types which should be shown by this widget.') ?></p>
<?php ForEach (Get_Post_Types(Array('public' => True), 'objects') AS $post_type) : ?>
<p>
  <label for="<?php Echo $this->Get_Field_ID('consider_post_type').$post_type->name ?>">
    <input type="checkbox" id="<?php Echo $this->Get_Field_ID('consider_post_type').$post_type->name ?>" <?php Disabled(True) ?> <?php Checked($post_type->name, 'page') ?> >
    <?php Echo $post_type->labels->name ?>
  </label>
</p>
<?php EndForEach ?>
<p class="pro-notice"><?php $this->Pro_Notice() ?></p>

<h4><?php Echo $this->t('Post order') ?></h4>
<p>
  <label for="<?php Echo $this->Get_Field_ID('orderby') ?>"><?php Echo $this->t( 'Order posts by:' ) ?></label>
  <select id="<?php Echo $this->Get_Field_ID('orderby') ?>" name="<?php Echo $this->Get_Field_Name('orderby') ?>">
    <option <?php Disabled(True) ?> ><?php Echo $this->t('Post ID') ?></option>
    <option <?php Disabled(True) ?> ><?php Echo $this->t('Author' ) ?></option>
    <option <?php Selected(True) ?> ><?php Echo $this->t('Title') ?></option>
    <option <?php Disabled(True) ?> ><?php Echo $this->t('Date') ?></option>
    <option <?php Disabled(True) ?> ><?php Echo $this->t('Modified date') ?></option>
    <option <?php Disabled(True) ?> ><?php Echo $this->t('Random order') ?></option>
    <option <?php Disabled(True) ?> ><?php Echo $this->t('Number of comments') ?></option>
    <option <?php Disabled(True) ?> ><?php Echo $this->t('Menu order') ?></option>
  </select>
</p>

<p>
  <label for="<?php Echo $this->Get_Field_ID('post_order_ASC') ?>">
    <input type="radio" id="<?php Echo $this->Get_Field_ID('post_order_ASC') ?>" <?php Disabled(True) ?> >
    <?php Echo $this->t('Order the posts ascending.') ?>
  </label>
</p>

<p>
  <label for="<?php Echo $this->Get_Field_ID('post_order_DESC') ?>">
    <input type="radio" id="<?php Echo $this->Get_Field_ID('post_order_DESC') ?>" <?php Checked(True) ?> >
    <?php Echo $this->t('Order the posts descending.') ?>
  </label>
</p>

<p class="pro-notice"><?php $this->Pro_Notice() ?></p>


<h4><?php Echo $this->t('Exclude') ?></h4>
<p>
  <label for="<?php Echo $this->Get_Field_ID('exclude') ?>"><?php _e( 'Exclude:' ) ?></label>
  <input type="text" id="<?php Echo $this->Get_Field_ID('exclude') ?>" <?php Disabled(True) ?> class="disabled"><br>
  (<small><?php _e('Post IDs, separated by commas.') ?></small>)
</p>

<p class="pro-notice"><?php $this->Pro_Notice() ?></p>


<h4><?php Echo $this->t('Special case') ?></h4>
<p>
  <label for="<?php Echo $this->Get_Field_ID('do_not_show_on_top_leves_without_subs') ?>">
    <input type="checkbox" value="yes" id="<?php Echo $this->Get_Field_ID('do_not_show_on_top_leves_without_subs') ?>" name="<?php Echo $this->get_field_name('do_not_show_on_top_leves_without_subs') ?>" <?php Checked($this->get_option('do_not_show_on_top_leves_without_subs'), 'yes') ?> >
    <?php Echo $this->t('Hide this widget on top level posts if there are no child posts.') ?>
  </label>
</p>


<h4><?php Echo $this->t('Parent link') ?></h4>
<p>
  <label><input type="radio" <?php Disabled(True) ?> > <?php Echo $this->t('Hide the parant post link.') ?></label>
  (<span class="pro-notice"><?php $this->Pro_Notice() ?></span>)
</p>

<p>
  <label for="<?php Echo $this->Get_Field_ID('parent_link_position_top') ?>">
    <input type="radio" id="<?php Echo $this->Get_Field_ID('parent_link_position_top') ?>" name="<?php Echo $this->get_field_name('parent_link_position') ?>" value="top" <?php Checked($this->get_option('parent_link_position'), 'top') ?> >
    <?php Echo $this->t('Show the parent post link on top of the list.') ?>
  </label>
</p>

<p>
  <label for="<?php Echo $this->Get_Field_ID('parent_link_position_bottom') ?>">
    <input type="radio" id="<?php Echo $this->Get_Field_ID('parent_link_position_bottom') ?>" name="<?php Echo $this->get_field_name('parent_link_position') ?>" value="bottom" <?php Checked($this->get_option('parent_link_position'), 'bottom') ?> >
    <?php Echo $this->t('Show the parent post link on bottom of the list.') ?>
  </label>
</p>

<input type="hidden" name="widget-width" class="widget-width" value="400">