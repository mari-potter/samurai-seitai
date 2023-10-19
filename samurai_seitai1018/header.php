<!-- header.php ここから -->
<!DOCTYPE html>
<html lang="ja">

<head>
  <title>SAMURAI整体院 ゆるりと</title>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="SAMURAI整体院 ゆるりと" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css"/>
  <!-- 追加 -->
  <?php wp_head();?>
</head>

<body>
  
  <header class="page-header wrapper">
     <h1>
      <a href="/">
      <img class="logo" src="<?php echo get_template_directory_uri();?>/images/logo5.png" alt="ゆるりとロゴ"/>
    </a>
  </h1>

    <nav>
        <ul class="main-nav">
            <li><a href="<?php echo home_url();?>/blog">お知らせ</a></li>
            <li><a href="<?php echo home_url();?>/menu">メニュー・料金</a></li>
            <li><a href="<?php echo home_url();?>/staff">スタッフの紹介</a></li>
            <li><a href="<?php echo home_url();?>/customer">お客様の声</a></li>
            <li><a href="<?php echo home_url();?>/reserve">予約・お問合せ</a></li>
        </ul>
    </nav>
  </header>
  <!-- headerここまで -->
