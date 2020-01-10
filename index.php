<?php $dir = esc_url(get_template_directory_uri()); ?>
<?php get_header(); ?>     
        <transition>
            <div  class="modalActive" v-if="modalActive" v-on:click="showModal" v-on:mouseover="modalColorChange" v-on:touchstart="modalColorChange"　v-bind:class="{'modalHoverd':isON}">
                    <iframe  src="https://www.youtube.com/embed/ZU1iGO7FoBw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p></p>
             </div> 
        </transition>       
        <div class="rightContainer sp-contents"><!-- PC→右側カラムのコンテナ　sp→メインコンテンツ部のコンテナ　-->
                <div class="main"> <!-- メイン画像と最新ニュース-->
                    <img src="<?php echo $dir ?>/image/main.jpg" alt="メイン画像" srcset="" class="image">
                    <h2>latestnews</h2>
                    <section class="posts">
                        <div class="post-header">
                            <p class="post-date">2019/8/12</p>
                            <hr>
                            <h2 class="post-title">新作『Terminal』リリース決定！</h2>
                        </div>
                        <div class="post-content">
                            <p> 
                                ザ・なつやすみバンド 新作『Terminal』リリース決定！
                                先行サブスクリプション配信を8月に開始する。
                                ライブツアー開催も決定！7/13（土）先行予開始。
                                『TNB!』再現プラスαと題した公演も！
                            </p>
                        </div>
                        <div id="more-news">
                            <a href="<?php echo esc_url( home_url( 'category/news' ) );?>"><!--リンク先は変わるかも！ -->
                                more news
                            </a>
                        </div>

                    </section>
                </div>
<?php get_footer(); ?>

