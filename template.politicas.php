<?php 
/*
Template Name: Políticas de Privacidade
 */
get_header();

$args = array(
  'post_type' => 'Políticas',
  'orderby' => 'menu_order',
  'order' => 'ASC',
);
$queryPoliticas = new WP_Query($args);
?>
<div style="background-color: #090909; height:120px; position:relative;display:list-item;width:100%"></div>
<div class="row p-3 p-sm-5 w-100 mx-auto">
  <div class="d-none d-sm-block col-lg-3">
  <ul>
  <?php if ($queryPoliticas->have_posts()) {
    $i = 0;
    while ($queryPoliticas->have_posts()) {
      $queryPoliticas->the_post();?>
      <li class="py-1" style="list-style:none;"><a href="#<?= $i?>" class="scrollSuave avenirRegular-600 f18" style="color: #000; text-decoration:none;"><?= get_the_title();?></a></li>
    <?php if($i > 0):?> <hr /> <?php endif; ?>
    <?php $i++; }
  }?>
  </ul>
  </div>
  <div class="col-12 col-lg-7 bodyPoliticas">
    <h1 class="text-uppercase avenirBold mt-3 f30">Política de Privacidade</h1>
    <?php if ($queryPoliticas->have_posts()) {
      $ind = 0;
      while ($queryPoliticas->have_posts()) {
        $queryPoliticas->the_post();?>
        <h3 id="<?= $ind; ?>" class="text-uppercase avenirBold f16 py-2 py-sm-3"><?= get_the_title();?></h3>
        <?= the_content(); ?>
      <?php $ind++; }
    }?>
  </div>
</div>

<?php get_footer();?>