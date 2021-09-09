<!DOCTYPE html>
<html lang="en">

<head>

</head>
   <?php get_header(); ?> <!-- header.phpを読み込むテンプレタグ(拡張子省略) -->
<body>
 
<?php get_template_part('includes/header'); ?> <!-- includes/headerを読み込むテンプレタグ(拡張子省略) -->


 <!-- Page Header -->
 <header class="masthead" style="background-image: url('img/home-bg.jpg')">
  <div class="overlay"></div>
  <div class="container">
   <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
     <div class="site-heading">
      <h1>Clean Blog <?php echo date('n'); ?></h1>
      <span class="subheading">A Blog Theme by Start Bootstrap</span>
     </div>
    </div>
   </div>
  </div>
 </header>
 
 <!-- Main Content -->
 <div class="container">
  <div class="row">
   <div class="col-lg-8 col-md-10 mx-auto">
    <!-- ↓have_posts：ループできる結果があるかどうかをチェックするテンプレタグ -->
    <!-- ↓the_post：次の投稿を表示させる為のテンプレートタグ -->
    <?php if (have_posts()) : ?>
     <?php while (have_posts()) : the_post(); ?>
      <div class="post-preview">
       <a href="<? the_permalink(); ?>"> <!-- 投稿詳細表示のテンプレタグ -->
        <h2 class="post-title">
         <?php the_title(); ?>
         <!-- 最初の投稿を表示させる為のテンプレートタグ -->
        </h2>
        <h3 class="post-subtitle">
        <?php the_excerpt(); ?> <!-- 抜粋のテンプレタグ(200文字前後の後は[...]表示) -->

        </h3>
       </a>
       <p class="post-meta">Posted by
       <?php the_author(); ?>

         <!-- ↓テンプレタグthe_timeにパラメーターを指定して投稿日を正常表示させている -->
         on <?php the_time(get_option('date_format')); ?></p> 
      </div>
      <hr> <!-- 罫線 -->
     <?php endwhile; ?>
     <!-- while文閉じ -->
     <!-- Pager -->
     <div class="clearfix">
      <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
     </div>
    <?php else : ?>
     <p>記事が見つかりませんでした</p>
    <?php endif; ?> <!-- if文閉じ -->
   </div>
  </div>
 </div>
 <hr>

 <?php get_template_part('includes/footer'); ?>  <!-- footer.phpを読み込むテンプレタグ -->

 <?php get_footer();?> <!-- footer.phpを読み込むテンプレタグ -->
</body>

</html>