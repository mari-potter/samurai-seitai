<?php
/*
Template Name:staff
*/
?>

<?php get_header();?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/archive-staff.css">

<section class="wrapper">
  <div class="container">
      <div class="content">
          <h2 class="heading">スタッフの紹介</h2>
          <div class="list">
              <div class="list-item">
                  <?php the_post_thumbnail();?>
                  <p><?php the_title();?></p>
                  <div class="text"><?php the_content();?></div>
              </div>
              <div class="list-item">
                  <?php the_post_thumbnail();?>
                  <p><?php the_title();?></p>
                  <div class="text"><?php the_content();?></div>
              </div>    
              <div class="list-item">
                 <?php the_post_thumbnail();?>
                 <p><?php the_title();?></p>
                  <div class="text"><?php the_content();?></div>
              </div>
          </div>
      </div>
  </div>
</section>

<?php get_footer();?>



