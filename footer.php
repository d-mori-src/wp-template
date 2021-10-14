<?php 
    $uri = get_theme_file_uri(); // ルートpath
    global $post;
    $slug = $post->post_name;
    $site_url = site_url(); // サイトURL
    $server_uri = $_SERVER['REQUEST_URI'];
    $server_uri_trimed = substr($server_uri, 0, strcspn($server_uri,'?')); 
?>
            <footer>
                <div class="innerFooter">
                    <ul class="pc-footerNavi">
                        <li><a href="<?=$site_url;?>/">イベント</a></li>
                        <li><a href="<?=$site_url;?>/">グルメ</a></li>
                        <li><a href="<?=$site_url;?>/">ニュース</a></li>
                        <li><a href="<?=$site_url;?>/">特集</a></li>
                        <li><a href="<?=$site_url;?>/">プレゼント応募</a></li>
                        <li><a href="<?=$site_url;?>/">施設一覧</a></li>
                        <li><a href="<?=$site_url;?>/">ご意見・ご要望</a></li>
                    </ul>
                    <p class="copyright">Copyright<span>©</span><?=date("Y"); ?> KissPress, All rights reserved.</p>
                </div>
            </footer>
        </div>
    <?php wp_footer(); ?>

    <script src="<?= $uri ?>/js/main.js"></script>
    </body>
</html>