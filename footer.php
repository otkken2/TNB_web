<?php $dir = esc_url(get_template_directory_uri()); ?>
                <footer class="footer">　<!--フッター-->
                    <h1 class="main-logo">
                        <a href="<?php echo esc_url( home_url() );?>">
                            <img v-on:click="showModal" src="<?php echo $dir ?>/image/logo.svg" alt="ザ・なつやすみバンド" srcset="">
                        </a>
                    </h1>

                    <div class="sp-icon-copy"><!--リンクアイコンと著作権表示を囲む-->
                        <ul class="linkIcon">
                            <li><a href="https://music.apple.com/jp/artist/%E3%82%B6-%E3%81%AA%E3%81%A4%E3%82%84%E3%81%99%E3%81%BF%E3%83%90%E3%83%B3%E3%83%89/433574020" target="_blank" rel="noopener noreferrer"><img src="<?php echo $dir ?>/image/apple-music.svg" alt="" srcset=""></a></li>
                            <li><a href="https://open.spotify.com/artist/1uyiv8HlmZlrvdY9oGP8hs" target="_blank" rel="noopener noreferrer"><img src="<?php echo $dir ?>/image/spotify.svg" alt="" srcset=""></a></li>
                            <li><a href="https://twitter.com/natsuyasumiband" target="_blank" rel="noopener noreferrer"><img src="<?php echo $dir ?>/image/twitter.svg" alt="" srcset=""></a></li>
                            <li><a href="https://www.facebook.com/thenatsuyasumiband/" target="_blank" rel="noopener noreferrer"><img src="<?php echo $dir ?>/image/facebook.svg" alt="" srcset=""></a></li>
                        </ul>
                        <small> the Natsuyasumi Band .2019 ©︎</small>
                    </div>
                </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>    
    <script src="<?php echo $dir; ?>/js/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>