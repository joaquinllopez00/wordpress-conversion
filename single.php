<?php get_header(); ?>



<?php 
echo 'hello';
  while(have_posts()){
    the_post();
    ?>
<h2 class="post-title"><?php the_title()?></h2>
Posted by <?php the_author();?>
<img src="<?php echo get_the_post_thumbnail_url(get_the_ID())?>" alt="">
<?php 
the_content();
comment_form();
}

?>

<?php get_footer(); ?>