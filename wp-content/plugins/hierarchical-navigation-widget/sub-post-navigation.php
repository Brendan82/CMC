<?php Echo $TITLE ?>

<ul>

  <?php If ( $PARENT && $this->get_option('parent_link_position') == 'top' ) : ?>
  <li class="parent-post">
    <a href="<?php Echo get_permalink($PARENT) ?>" title="<?php Echo get_the_title($PARENT) ?>"><?php Echo get_the_title($PARENT) ?></a>
  </li>
  <?php EndIf ?>

  <?php While($NAVIGATION->have_posts()) : $NAVIGATION->the_post() ?>
    <li class="<?php If (Get_Queried_Object()->ID == $GLOBALS['post']->ID) Echo 'current-post' ?>">
      <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php the_title() ?></a>
    </li>
  <?php EndWhile ?>

  <?php If ( $PARENT && $this->get_option('parent_link_position') != 'top' ) : ?>
  <li class="parent-post">
    <a href="<?php Echo get_permalink($PARENT) ?>" title="<?php Echo get_the_title($PARENT) ?>"><?php Echo get_the_title($PARENT) ?></a>
  </li>
  <?php EndIf ?>

</ul>