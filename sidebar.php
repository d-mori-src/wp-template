<?php 
  $uri = get_theme_file_uri(); // ルートpath
  global $post;
  $slug = $post->post_name;
  $site_url = site_url(); // サイトURL
  $server_uri = $_SERVER['REQUEST_URI'];
  $server_uri_trimed = substr($server_uri, 0, strcspn($server_uri,'?'));
?>

<section>
  PCサイドバー
</section>