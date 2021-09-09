<!DOCTYPE html>
<html lang="en">

<head>
  <?php get_header(); ?>

</head>

<body>

  <?php get_template_part('includes/header') ?>
  <!-- header.phpを読み込むテンプレタグ(拡張子省略) -->

  <?php if (have_posts()): ?>
  <?php while (have_posts()) : the_post(); ?>
    <!-- Page Header -->
    <?php
    $id = get_post_thumbnail_id(); /* 投稿のｱｲｷｬｯﾁ画像がｾｯﾄされている場合→ｱｲｷｬｯﾁ画像のIDを返すテンプレタグ */
    $img = wp_get_attachment_image_src($id); /* 添付(ﾒﾃﾞｨｱﾗｲﾌﾞﾗﾘ)された画像ファイルの属性を配列として返すテンプレタグ */
    ?>
    <header class="masthead" style="background-image: url('<?php echo $img[0]; ?>')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
            <h1><?php the_title(); ?></h1>
              <span class="meta">Posted by
              <?php the_author(); ?>
                on <?php the_date(); ?></span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
          <?php the_post_thumbnail(); ?> <!-- アイキャッチ画像を表示させる為のテンプレタグ -->
          <?php the_content(); ?>

          </div>
        </div>
      </div>
    </article>

    <hr>

  <?php endwhile; ?>
  <?php endif; ?>



  <?php get_template_part('includes/footer'); ?>

  <?php get_footer(); ?>
  <!-- header.phpを読み込むテンプレタグ -->
</body>

</body>

</html>