<?php get_header(); ?>

<div id="banner">
  <h1>&lt;JL Codes/&gt;</h1>
  <h3>Keep up with my Journey</h3>
</div>
<main>
  <a href="<?php echo site_url('');?>/blog">
    <h2 class="section-heading">All Blog Posts</h2>
  </a>
  <section>


    <?php 

    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 2,
    );

    $blogposts = new WP_Query($args);

    while($blogposts->have_posts()){
      $blogposts->the_post();

  ?>


    <div class="card">
      <div class="card-img">
        <a href="<?php the_permalink()?>">
          <img src="<?php echo get_the_post_thumbnail_url( get_the_ID()) ?>" alt="Card Image" />
        </a>
      </div>
      <div class="card-description">
        <a href="<?php the_permalink()?>">
          <h3><?php the_title()?></h3>
        </a>
        <p>
          <?php wp_trim_words(get_the_excerpt(), 30);  ?>
        </p>
        <a href="<?php the_permalink()?>" class="btn-readmore">Read More</a>
      </div>
    </div>

    <?php }
    wp_reset_query()?>
  </section>
  <a href="<?php echo site_url('');?>/blog">
    <h2 class="section-heading">All Projects</h2>
  </a>
  <section>
    <?php 

    $args = array(
      'post_type' => 'projects',
      'posts_per_page' => 2,
    );

    $projects = new WP_Query($args);

    while($projects->have_posts()){
      $projects->the_post();

  ?>


    <div class="card">
      <div class="card-img">
        <a href="<?php the_permalink()?>">
          <img src="<?php echo get_the_post_thumbnail_url( get_the_ID()) ?>" alt="Card Image" />
        </a>
      </div>
      <div class="card-description">
        <a href="<?php the_permalink()?>">
          <h3><?php the_title()?></h3>
        </a>
        <p>
          <?php wp_trim_words(get_the_excerpt(), 30);  ?>
        </p>
        <a href="<?php the_permalink()?>" class="btn-readmore">Read More</a>
      </div>
    </div>

    <?php }
    wp_reset_query()?>

  </section>
  <h2 class="section-heading">Source Code</h2>
  <section id="section-source">
    <p>
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, libero. Dolorem aperiam fuga mollitia
      molestias exercitationem tempora. Odio dolorem aperiam nobis molestiae atque, hic sequi assumenda id odit vero
      ex?
    </p>
    <a href="#" class="btn-readmore">Github Profile</a>
  </section>

  <?php get_footer(); ?>