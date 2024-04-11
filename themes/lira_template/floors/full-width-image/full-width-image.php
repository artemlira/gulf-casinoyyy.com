<?php $floor = $args; ?>


<div class="full-image" style="margin-top: <?php the_sub_field('margin_top'); ?>px; margin-bottom: <?php the_sub_field('margin_bottom
'); ?>px;">
  <div class="centered-container d-flex  justify-content-<?php the_sub_field('align_image'); ?>">
    <a class="w-100" href="<?php the_sub_field('link_to_image'); ?>" <?php if (the_sub_field('link_in_a_new_tab') == 'yes') : ?> target="_blank" <?php endif; ?>>
      <img style="object-fit: <?php the_sub_field('contain_or_cropped_image'); ?>; width: 100%;" src="<?php the_sub_field('image'); ?>" alt="yyy-egyptcasino32">
    </a>
  </div>
</div>