<?php
/*
Template Name:menu
*/
?>

<?php get_header();?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/archive-menu.css">

<body>

<?php if(have_posts()):?>
    <?php $row = 1; ?>
  <?php while (have_posts()):the_post()?>
  <?php if($row % 2 == 1): ?>
  <section class="wrapper1">
    <div class="container1">
        <div class="content1">
            <div class="content-item1">
                <?php the_post_thumbnail();?>
            </div>    
            <div class="content-item1">
                <div class="text">
                    <h3 class="heading"><?php the_title();?></h3>
                    <p><?php the_content();?></p>
                </div>
            </div>
        </div>
    </div>
</section> 

<?php else: ?>
<section class="wrapper2">
  <div class="container2">
      <div class="content2">
          <div class="content-item2">
          <?php the_post_thumbnail();?>
          </div>    
          <div class="content-item2">
              <div class="text">
                  <h3 class="heading"><?php the_title();?></h3>
                  <p><?php the_content();?></p>
              </div>
          </div>
      </div>
  </div>
</section>
<?php  endif; ?>
<?php $row++; ?>

<?php endwhile; ?>
<?php endif; ?>


</body>

<?php get_footer();?>