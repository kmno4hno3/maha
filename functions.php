<?php
// テーマのセットアップ

// HTML5でマークアップさせる
add_theme_support('html5', array(
  'search-form',
  'comment-form',
  'comment-list',
  'gallery',
  'caption'
));
// Feedのリンクを自動で生成
add_theme_support('automatic-feed-links');
// アイキャッチ画像を使用する設定
add_theme_support('post-thumbnails');

// カスタムメニュー
register_nav_menu('header-nav', 'ヘッダーナビ');
register_nav_menu('footer-nav', 'フッターナビ');

// メニューにサブタイトルをつける
function description_in_nav_menu($item_output, $item) {
  return preg_replace('/(<a.*?>[^<]*?)</', '$1' . "<br /><span>{$item->attr_title}</span><" , $item_output);
}
add_filter('walker_nav_menu_start_el', 'description_in_nav_menu', 10, 4);