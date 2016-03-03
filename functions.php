<?php 
#グローバルナビゲーションを管理画面から変更することができるようになる。
add_theme_support('menus');
#widgetを管理画面から変更することができるようになる。
register_sidebar(
		array(
				'before_widget'=>'<div class="widget">',
				'after_widget' => '</div>',
				'befor_title' => '<h3>',
				'after_title' => '</h3>'
		)
);
#アイキャッチ画像を指定できるようにしよう
add_theme_support('post-thumbnails');

function shortcode_tw(){
	return '<a href="https://twitter.com/x_dynameis">@dynameis</a>をフォローしてね！';
}
add_shortcode('tw', 'shortcode_tw');
?>