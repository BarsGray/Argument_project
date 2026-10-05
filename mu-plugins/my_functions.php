<?php
/* Plugin Name: My Custom Functions */

if (!defined('ABSPATH')) {exit;}
if (!defined('_S_VERSION')) {define('_S_VERSION', '0.0.0');}
if (!defined('FRONT_PAGE')) {define('FRONT_PAGE', get_option('page_on_front'));}
if (!defined('TEMPLATE_URL')) {define('TEMPLATE_URL', get_template_directory_uri());}

if (!defined('SVG_PHONE')) {define('SVG_PHONE', '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.0573 5.97784C9.82111 5.38726 9.24914 5 8.61308 5H6.47365C5.65977 5 5 5.65963 5 6.47353C5 13.3916 10.6082 19 17.5262 19C18.34 19 18.9996 18.3402 18.9996 17.5263L19 15.3864C19 14.7503 18.6129 14.1785 18.0223 13.9422L15.9718 13.1223C15.4413 12.9101 14.8373 13.0056 14.3984 13.3714L13.8692 13.8128C13.2511 14.3278 12.3417 14.2868 11.7729 13.718L10.2827 12.2264C9.71382 11.6575 9.67178 10.7488 10.1868 10.1308L10.6281 9.60157C10.9939 9.16264 11.0902 8.55846 10.878 8.02796L10.0573 5.97784Z" stroke="#161616" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>');}
if (!defined('SVG_SEARCH')) {define('SVG_SEARCH', '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15 15L21 21M10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10C17 13.866 13.866 17 10 17Z" stroke="#161616" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>');}
if (!defined('SVG_MENU_BTN')) {define('SVG_MENU_BTN', '<svg class="ham hamRotate ham8" viewBox="0 0 100 100" width="30"><path class="line top" d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20" /><path class="line middle" d="m 30,50 h 40" /><path class="line bottom" d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20" /></svg>');}
if (!defined('SVG_PLACE')) {define('SVG_PLACE', '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.88889 6.85714L10.3179 10.8105L10.3197 10.812C10.9225 11.2382 11.2241 11.4515 11.5545 11.5339C11.8464 11.6067 12.1533 11.6067 12.4453 11.5339C12.7759 11.4514 13.0784 11.2375 13.6823 10.8105C13.6823 10.8105 17.1645 8.23366 19.1111 6.85714M4 15.2573V8.74302C4 7.78293 4 7.30253 4.19377 6.93583C4.36421 6.61326 4.63598 6.3512 4.97049 6.18685C5.35077 6 5.84897 6 6.84462 6H17.1557C18.1514 6 18.6485 6 19.0288 6.18685C19.3633 6.3512 19.636 6.61326 19.8064 6.93583C20 7.30217 20 7.78199 20 8.74021V15.2602C20 16.2184 20 16.6976 19.8064 17.0639C19.636 17.3865 19.3633 17.649 19.0288 17.8133C18.6489 18 18.152 18 17.1583 18H6.8417C5.84799 18 5.3504 18 4.97049 17.8133C4.63598 17.649 4.36421 17.3865 4.19377 17.0639C4 16.6972 4 16.2174 4 15.2573Z" stroke="#353535" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>');}
if (!defined('SVG_MAIL')) {define('SVG_MAIL', '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.0005 6.68445C11.2924 6.68445 10.6002 6.89233 10.0114 7.28179C9.4226 7.67125 8.9637 8.2248 8.69271 8.87245C8.42173 9.5201 8.35083 10.2328 8.48897 10.9203C8.62712 11.6078 8.96811 12.2394 9.46883 12.7351C9.96954 13.2308 10.6075 13.5683 11.302 13.7051C11.9965 13.8419 12.7164 13.7717 13.3706 13.5034C14.0248 13.2351 14.584 12.7808 14.9774 12.198C15.3708 11.6151 15.5808 10.9298 15.5808 10.2288C15.5808 9.2888 15.2036 8.38727 14.5321 7.72258C13.8607 7.05788 12.95 6.68445 12.0005 6.68445ZM12.0005 12.001C11.6464 12.001 11.3003 11.8971 11.0059 11.7023C10.7115 11.5076 10.4821 11.2308 10.3466 10.907C10.2111 10.5832 10.1757 10.2269 10.2447 9.88309C10.3138 9.53932 10.4843 9.22355 10.7347 8.9757C10.985 8.72786 11.304 8.55907 11.6512 8.49069C11.9985 8.42231 12.3584 8.45741 12.6855 8.59154C13.0127 8.72567 13.2922 8.95282 13.4889 9.24425C13.6856 9.53569 13.7906 9.87832 13.7906 10.2288C13.7906 10.6988 13.602 11.1496 13.2663 11.4819C12.9306 11.8143 12.4753 12.001 12.0005 12.001Z" fill="#353535"/><path d="M12 22.634C11.2463 22.6378 10.5026 22.4628 9.83129 22.1236C9.15994 21.7845 8.58044 21.291 8.14132 20.6846C4.73018 16.0264 3 12.5245 3 10.2756C3 7.91264 3.94821 5.64643 5.63604 3.97555C7.32387 2.30466 9.61305 1.36597 12 1.36597C14.3869 1.36597 16.6761 2.30466 18.364 3.97555C20.0518 5.64643 21 7.91264 21 10.2756C21 12.5245 19.2698 16.0264 15.8587 20.6846C15.4196 21.291 14.8401 21.7845 14.1687 22.1236C13.4974 22.4628 12.7537 22.6378 12 22.634ZM12 3.30031C10.1315 3.30242 8.34005 4.03818 7.01878 5.34618C5.69752 6.65419 4.95429 8.42761 4.95216 10.2774C4.95216 12.0585 6.64654 15.3521 9.72203 19.5513C9.98312 19.9073 10.3256 20.197 10.7216 20.3968C11.1175 20.5966 11.5556 20.7008 12 20.7008C12.4444 20.7008 12.8825 20.5966 13.2784 20.3968C13.6744 20.197 14.0169 19.9073 14.278 19.5513C17.3535 15.3521 19.0478 12.0585 19.0478 10.2774C19.0457 8.42761 18.3025 6.65419 16.9812 5.34618C15.66 4.03818 13.8685 3.30242 12 3.30031Z" fill="#353535"/></svg>');}
if (!defined('SVG_BREAD_BTN')) {define('SVG_BREAD_BTN', '<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.39844 3.60254L5.70789 7.29309C5.31736 7.68361 5.31736 8.31678 5.70789 8.7073L9.39844 12.3979" stroke="#282828" stroke-width="2"/></svg>');}
// if (!defined('SVG_PROD_ARRROW')) {define('SVG_PROD_ARRROW', ' ');}
// if (!defined('SVG_SERVICE_BOX_ARROW')) {define('SVG_SERVICE_BOX_ARROW', ' ');}

// add_filter('wp_speculation_rules_configuration',function(){return null;});
// add_filter('wp_img_tag_add_auto_sizes','__return_false');
add_action('after_setup_theme', function() { add_theme_support( 'html5', [ 'script', 'style' ] ); } );

add_theme_support('post-thumbnails');
register_nav_menus();

add_action('wp_enqueue_scripts', 'argument_th_scripts_style');
function argument_th_scripts_style() {
	wp_enqueue_script('swiper', TEMPLATE_URL . '/js/swiper-bundle.min.js', array('jquery'), null, true);
	wp_enqueue_script('fancybox', TEMPLATE_URL . '/js/fancybox.umd.js', array('jquery'), null, true);
	wp_enqueue_script('main', TEMPLATE_URL . '/js/main.js', array('jquery'), _S_VERSION, true);

	wp_enqueue_style('swiper-bundle', TEMPLATE_URL . '/css/swiper-bundle.min.css', array(), null, 'all');
	wp_enqueue_style('fancybox', TEMPLATE_URL . '/css/fancybox.css', array(), null, 'all');
	wp_enqueue_style('argument_th-style', get_stylesheet_uri(), array(), _S_VERSION);
}

add_filter('site_transient_update_plugins','filter_plugin_updates');
function filter_plugin_updates($value){
	unset($value->response['all-in-one-seo-pack/all_in_one_seo_pack.php']);
	return $value;
}

// add_action('template_redirect','template_redirect');
// function template_redirect() {
// 	if(is_page(12)) {wp_safe_redirect(get_category_link(4), 301); exit;}
// }

// add_action('admin_head','admin_head');
// function admin_head() {
// 	echo '<style type="text/css">#wpwrap #edittag{max-width:100%;}.term-description-wrap{display:none;}</style>';
// }

function breadcrumbs($sep = ' / ', $args = array(), $l10n = array()) {
	static $inst;
	if (!$inst)
		$inst = new Breadcrumbs();
	if (is_array($sep)) {
		$args = $sep;
		$sep = isset($args['sep']) ? $args['sep'] : ' / ';
	}
	echo $inst->get_crumbs($sep, $l10n, $args);
}

// add_action('kama_breadcrumbs_home_after','add_tax_custom',10,5);
// function add_tax_custom($false,$linkpatt,$sep,$ptype,$q_obj){
// 	if(!is_search()){
// 		$data_taxs=array(
// 			'service' => 193,
// 			'product' => 12
// 		);
// 		foreach($data_taxs as $post_type=>$id_page){
// 			if(isset($ptype->name) && $ptype->name==$post_type){
// 				$page=get_post($id_page);
// 				if($q_obj->name==$post_type)
// 					return $home_after=sprintf($linkpatt,get_permalink($page),$page->post_title); 
// 				else
// 					return $home_after=sprintf($linkpatt,get_permalink($page),$page->post_title) . $sep;
// 			}
// 		}
// 	}
// }
function merge_numbers($num) {return str_replace([' ', '-', '(', ')'],'',(string) ($num ?? ''));}
function register_service() {
	$post_labels = array(
		'name' => 'Услуги',
		'singular_name' => 'Услуга',
		'add_new' => 'Добавить',
		'add_new_item' => 'Добавить',
		'edit_item' => 'Редактировать',
		'menu_name' => 'Услуги',
		// 'featured_image'        => 'Иконка услуги',
    // 'set_featured_image'    => 'Установить иконку услуги',
    // 'remove_featured_image' => 'Удалить иконку услуги',
    // 'use_featured_image'    => 'Использовать как иконку услуги',
	);

	$post_args = array(
		'labels' => $post_labels,
		'public' => true,
		'has_archive' => false,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-list-view',
		'supports' => array('title', 'editor', 'thumbnail'),
		'rewrite' => array('slug' => 'service'),
		'show_in_rest' => true,
		'capability_type' => 'post',
	);
	register_post_type('service', $post_args);
}
add_action('init', 'register_service');

// // добавление класса current-menu-item для каталога, при нахождении категории
// add_filter('nav_menu_css_class', function ($classes, $item) {
//     if (is_tax('product_cat') && $item->ID == 123) { $classes[] = 'current-menu-item'; }
//     return $classes;
// }, 10, 2);
