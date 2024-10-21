<?php
// Категории
?>
<?php get_header(); ?>   
	<div id="primary" class="content-area">
		<main style="display: block;width: 1280px;margin: 0 auto;" id="main" class="site-main" role="main">
		<div class="category-center">
		<div class="category-left">



<?php if(post_is_in_descendant_category('33') ) : ?>
<div class="mini-menu">
	<?php wp_nav_menu( array( 'theme_location' => 'teboil_nav', 'menu_id' => 'primary-menu' ) ); ?>
</div>
<?php endif; ?>



<?php if(post_is_in_descendant_category('15') ) : ?>
<div class="mini-menu">
	<?php wp_nav_menu( array( 'theme_location' => 'kluber_nav', 'menu_id' => 'primary-menu' ) ); ?>
</div>
<?php endif; ?>



<?php if(post_is_in_descendant_category('67') ) : ?>
<div class="mini-menu">
	<?php wp_nav_menu( array( 'theme_location' => 'mobil_nav', 'menu_id' => 'primary-menu' ) ); ?>
</div>
<?php endif; ?>

<?php if(post_is_in_descendant_category('110') ) : ?>
<div class="mini-menu">
	<?php wp_nav_menu( array( 'theme_location' => 'mol_nav', 'menu_id' => 'primary-menu' ) ); ?>
</div>
<?php endif; ?>




		</div>
		<div class="category-right">



<?php
// номер рубрики
$category_id = get_query_var( 'cat' );
// номер текущей страницы
$page = get_query_var( 'paged' );
// данные о текущей категории
$category = get_category( $category_id );
// данные о дочерних рубриках
 $children_categories = get_categories( "parent={$category_id}" );


?>	

<?php if($children_categories): // если есть дочерние категории ?>

<?php 
$args = array(
   'parent' => 0,
   'hide_empty' => 0,
   'orderby' => 'ASC',
   'exclude' => '', // ID рубрики, которую нужно исключить
    'number' => '0',
   'taxonomy' => 'category', // таксономия, для которой нужны изображения
   'pad_counts' => true
);
$categories = get_categories("parent={$category_id}"); // получаем все категории в виде массива

$images_raw  = get_option( 'taxonomy_image_plugin' ); // получаем все изображения в виде массива
$term_taxonomy_string = '';
foreach ($categories as $category) {    // перебираем массив полученных категорий
    $term_taxonomy_id = $category->term_taxonomy_id; // узнаем ID категории
    $term_taxonomy_name = $category->name;    // узнаем имя категории
    $term_taxonomy_image = wp_get_attachment_image( $images_raw[ $term_taxonomy_id ], 'full' );    // получаем прикрепленное изображение
     $term_taxonomy_link = get_term_link((int)$term_taxonomy_id, 'category' );    // получаем ссылку на соответствующую рубрику
    
    $term_taxonomy_string .= '<div class="category-card">
            
           <a href="'.$term_taxonomy_link.'"> <div class="thumbnail">'.$term_taxonomy_image.'</div>
            <h3 class="category-title">'.$term_taxonomy_name.'</h3></a>
        </div>'; // формируем полученные данные и записываем в строку
}
echo $term_taxonomy_string;    // выводим сформированную ранее строку - рубрики с изображениями
?>
 
<?php else: // иначе - выводим записи ?>

			<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?> 






			<div class="post-main"> <!-- Start post -->
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				
				<div class="post">
					
				</div>
			</div> <!-- .post-main --><!-- Start post -->



			<?php endwhile; ?>	
			<?php endif; ?> 


	

<?php endif; // конец условия - если есть дочерние категории ?>
</div>
</div>
</main>
		</div>

	</div>








<?php get_footer(); ?>