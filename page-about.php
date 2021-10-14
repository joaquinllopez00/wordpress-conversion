<?php get_header(); ?>

<main>
  <h2 class="page-heading">About Me</h2>
  <div id="post-container">
    <section id="blogpost">
      <div class="card">
        <div class="card-img">
          <img src="<?php echo get_template_directory_uri()?>/assets/sample-img.jpg" alt="Card Image">
        </div>
        <div class="card-description">
          <h3>Introduction</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse maiores excepturi inventore ipsam illo magni
            commodi iure est dolores, quia laudantium vel alias? Ullam odit autem corporis, illum maxime aut?</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse maiores excepturi inventore ipsam illo magni
            commodi iure est dolores, quia laudantium vel alias? Ullam odit autem corporis, illum maxime aut?</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse maiores excepturi inventore ipsam illo magni
            commodi iure est dolores, quia laudantium vel alias? Ullam odit autem corporis, illum maxime aut?</p>
        </div>
      </div>
    </section>

    <aside id="sidebar">
      <h3>Sidebar Heading</h3>
      <p>SideBar</p>
    </aside>
  </div>

  <?php get_footer(); ?>