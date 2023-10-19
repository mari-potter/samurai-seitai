<?php get_header();?>

<div id="home" class="SAMURAI-TOP"></div>
<h3>SAMURAI整体院の治療方針</h3>
<div class="setumei1">
<p>「原因への治療」と「生活改善」で</p>
<p>症状が再発しない状態に</p>
<p>SAMURAI整体院の施術は、リラクゼーションだけでなく、治療を目的に行います。</p>
<p>そのため、リピート率は95％とたくさんの方にご支持いただいています。</p>
</div>
  </div> 

<div class="midashi2">
<h3>営業時間</h3>
<div class="setumei2">
<p>平日：11:00~14:00/15:00~19:00</p>
<p>土曜日：9:00~13:00/15:00~18:00</p>
<p>日曜・祝日：9:00~17:00&emsp;定休日：火曜日</p>
</div>
</div>

<table>
  <tr>
  <th>営業時間</th>
    <td>月</td>
    <td>火</td>
    <td>水</td>
    <td>木</td>
    <td>金</td>
    <td>土</td>
    <td>日</td>
    <td>祝</td>
  </tr>
  <tr>
  <th>11:00~14:00</th>
    <td>●</td>
    <td>-</td>
    <td>●</td>
    <td>●</td>
    <td>●</td>
    <td>▲</td>
    <td>※</td>
    <td>※</td>
  </tr>
  <tr>
  <th>15:00~19:00</th>
  <td>●</td>
  <td>-</td>
  <td>●</td>
  <td>●</td>
  <td>●</td>
  <td>▲</td>
  <td>※</td>
  <td>※</td>
  </tr>
</table>

<!-- お知らせここから -->

<div class="midashi2">
<h3>お知らせ</h3>
<div class="setumei2">
<ul class="news-list">

<?php
         //取得したい投稿記事などの条件を引数として渡す
         $args = array(
           // 投稿タイプ
           'post_type'      => 'information',
           // 1ページに表示する投稿数
           'posts_per_page' => 3,
         );
         // データの取得
         $posts = get_posts($args);
         ?>

  <li class="item">

<!-- ループ処理 -->
<?php foreach ($posts as $post) : ?>
       <?php setup_postdata($post); ?>

       <a href="<?php the_permalink(); ?>">
          <p class="date"><?php echo get_the_date(); ?></p>
          <p class="title"> <?php the_title() ; ?></p>
      </a>
  </li>

  <li class="item">
  <a href="<?php the_permalink(); ?>">
          <p class="date"><?php echo get_the_date(); ?></p>
          <p class="title"> <?php the_title() ; ?></p>
      </a>
  </li>
  
  <li class="item">
      <a href="<?php the_permalink(); ?>">
          <p class="date"><?php echo get_the_date(); ?></p>
          <p class="title"> <?php the_title() ; ?></p>
      </a>
  </li>
  <?php endforeach; ?>
</ul>
</div>
</div>
<!-- お知らせここまで -->

<!-- メニューここから -->
<div class="midashi2">
<h3>メニュー・料金</h3>
<div class="setumei2">
<?php
         //取得したい投稿記事などの条件を引数として渡す
         $args = array(
           // 投稿タイプ
           'post_type'      => 'menu',
           // 1ページに表示する投稿数
           'posts_per_page' => 3,
         );
         // データの取得
         $posts = get_posts($args);
         ?>

  <li class="item">

<!-- ループ処理 -->
<?php foreach ($posts as $post) : ?>
       <?php setup_postdata($post); ?>

<div id="menus">
  <div class="menu">
    <div class="picture"><?php the_post_thumbnail();?></div>
    <div class="description">
      <p>
      <?php the_title() ; ?>
      </p>
    </div>
  </div>
  <div class="menu" id="menu-center">
    <div class="picture"><?php the_post_thumbnail();?></div>
    <div class="description">
      <p>
       <?php the_title() ; ?>
      </p>
    </div>
  </div>
  <div class="menu">
    <div class="picture"><?php the_post_thumbnail();?></div>
    <div class="description">
      <p>
       <?php the_title() ; ?>
      </p>
    </div>
  </div>
</div>
</div>
</div>

<?php endforeach; ?>

<!-- メニューここまで -->

<?php get_footer();?>

