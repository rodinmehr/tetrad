<time class="dt-published" datetime="<?php echo e(get_post_time('c', true)); ?>">
  <?php echo e(get_the_date()); ?>

</time>

<p>
  <span><?php echo e(__('By', 'sage')); ?></span>
  <a href="<?php echo e(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="p-author h-card">
    <?php echo e(get_the_author()); ?>

  </a>
</p>
<?php /**PATH /home/mahsa/programming/tetrad/wp-content/themes/tetrad-theme/resources/views/partials/entry-meta.blade.php ENDPATH**/ ?>