<?php
  get_header();
  show_breadcrumbs();
	title_def_box(); ?>
<?php
	$qo=get_queried_object();
	$paged = get_query_var('paged') ? get_query_var('paged') : (get_query_var('page') ? get_query_var('page') : 1);
	query_posts(array('cat' => $qo->term_id,'paged' => $paged));
?>
<div class="section_category">
	<div class="container">
		<div class="category_inner">
			<?php if(have_posts()) {
				while(have_posts()) { the_post();
						$link = get_permalink(); ?>
						<div class="category_item">
							<?php $post_thumbnail = get_the_post_thumbnail(get_the_ID(),'custom-gallery-thumb_35_30'); ?>
							<?php if($post_thumbnail): ?>
								<div class="category_item_img"><a href="<?php echo $link; ?>"><?php echo $post_thumbnail; ?></a></div>
							<?php endif; ?>
							<div class="category_item_rigth">
								<p class="category_item_name"><a href="<?php echo $link; ?>"><?php the_title(); ?></a></p>
								<?php $content = apply_filters('the_content', get_the_content()); ?>
								<p class="category_item_description"><?php echo wp_trim_words($content, 50, '...'); ?></p>
								<a class="category_item_btn" href="<?php echo $link; ?>">Узнать больше</a>	
							</div>
						</div>
					<?php } ;
			} else echo '<p>Раздел не заполнен</p>'; ?>
			<?php the_field("text_after", $qo); ?>
		</div>
		<?php wp_pagenavi(); ?>
	</div>
</div>

<?php if(get_field('text_after')): ?>
  <div class="content_container hide">
    <div class="hide_text"><?php the_field("text_after");?></div>
    <a class="more">Подробнее</a>
  </div>
<?php endif;
  show_form();
  get_footer();