<?php $dir = esc_url(get_template_directory_uri()); ?>
<?php get_header(); ?>     
    <transition>
        <div  class="modalActive" v-if="modalActive" v-on:click="showModal" v-on:mouseover="modalColorChange" v-on:touchstart="modalColorChange"　v-bind:class="{'modalHoverd':isON}">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/c-l3GYSGIDY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div> 
    </transition>       
    <div class="rightContainer sp-contents"><!-- PC→右側カラムのコンテナ　sp→メインコンテンツ部のコンテナ　-->
        <div class="main"> <!-- トップイメージと最新ニュース-->
            
            <!-- トップイメージ -->
            <img src="<?php header_image(); ?>" class="image" alt="" />                    

            <!-- 最新ニュース -->
            <h2 id="latestnews">news</h2>

            <section id="posts-top">
                <?php if (have_posts()):
                       while (have_posts()):
                         the_post();
                ?>

                <section id="post-top" id="post-<?php the_ID();?>" <?php post_class( 'entry' ); ?>>  
                    <div id="post-header-top">
                        
                        <div class="post-meta"><?php echo get_the_date(); ?></div><!-- 日付 -->
                        <h2 id="post-title-top">
                            <a href="<?php the_permalink(); ?>">『<?php the_title(); ?>』を投稿しました。</a>　<!-- 記事のタイトル -->
                        </h2>
                    </div>
                </section>
                <!-- <hr id="top-news-hr"> -->
                <?php 
                endwhile;
                else:?>
                    <p>記事がありません…。</p>
                <?php endif;?>

            </section>

            <div id="more-news">
                <a href="<?php echo esc_url( home_url( 'category/news' ) );?>">
                    more news >>
                </a>
            </div>
        </div>
<?php get_footer(); ?>