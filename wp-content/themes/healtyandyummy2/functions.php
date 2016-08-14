<?php
//モバイル判定
function is_mobile() {
    $useragents = array(
        'iPhone',    // iPhone
        'Android',   // Android
    );
    $pattern = '/'.implode('|', $useragents).'/i';
    return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}
add_action('init', 'add_product_post_type');
function add_product_post_type() {
    $params = array(
            'labels' => array(
                    'name' => 'PRODUCT',
                    'singular_name' => 'product',
                    'add_new' => 'ADD',
                    'add_new_item' => 'ADD NEW',
                    'edit_item' => 'EDIT',
                    'new_item' => 'NEW ADDED',
                    'all_items' => 'PRODUCTS LIST',
                    'view_item' => 'CHECK PAGE',
                    'search_items' => 'SEARCH',
                    'not_found' => 'NOT FOUND',
                    'not_found_in_trash' => 'NOT FOUND IN TRASH'
            ),
            'public' => true,
			'rewrite' => true,
            'supports' => array(
                    'title',
					'page-attributes'),
        	'capability_type' => 'page',
        	'hierarchical' => true,
            'taxonomies' => array('prod_cat','prod_tag')
    );
    register_post_type('product', $params);
}

add_action('init', 'create_product_taxonomies');
function create_product_taxonomies() {
    // カテゴリを作成
    $labels = array(
            'name'                => 'PRODUCT Category',        //複数系のときのカテゴリ名
            'singular_name'       => 'PRODUCT Category',        //単数系のときのカテゴリ名
            'search_items'        => 'CATEGORY SEARCH',
            'all_items'           => 'ALL CATEGORY',
            'parent_item'         => 'PARENT',
            'parent_item_colon'   => 'PARENT:',
            'edit_item'           => 'CATEGORY EDIT',
            'update_item'         => 'CATEGORY RELOAD',
            'add_new_item'        => 'ADD NEW CATEGORY',
            'new_item_name'       => 'NEW CATEGORY',
            'menu_name'           => 'CATEGORY'        //ダッシュボードのサイドバーメニュー名
    );
    $args = array(
            'hierarchical'        => true,
            'labels'              => $labels,
            'rewrite'             => array( 'slug' => 'prod_cat' )
    );
    register_taxonomy( 'prod_cat', 'product', $args );

    // タグを作成
    $labels = array(
            'name'                => 'PRODUCT Tag',        //複数系のときのタグ名
            'singular_name'       => 'PRODUCT Tag',        //単数系のときのタグ名
            'search_items'        => 'TAG SEARCH',
            'all_items'           => 'ALL TAGS',
            'parent_item'         => null,
            'parent_item_colon'   => null,
            'edit_item'           => 'TAG EDIT',
            'update_item'         => 'TAG RELOAD',
            'add_new_item'        => 'ADD NEW TAG',
            'new_item_name'       => 'NEW TAG',
            'separate_items_with_commas'   => 'SEPARATE ","',
            'add_or_remove_items'          => '商品タグを追加or削除する',
            'choose_from_most_used'        => 'RECENTLY TAGS',
            'not_found'                    => 'NOT FOUND',
            'menu_name'                    => 'TAG'        //ダッシュボードのサイドバーメニュー名
    );
    $args = array(
            'hierarchical'            => false,
            'labels'                  => $labels,
            'update_count_callback'   => '_update_post_term_count',    //タグの動作に必要なCallback設定
            'rewrite'                 => array( 'slug' => 'prod_tag' )
    );

    register_taxonomy( 'prod_tag', 'product', $args );
}

add_theme_support( ‘menus’ );

?>
