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
            <h2 id="latestnews">latestnews</h2>

            <section class="posts">
                <?php if (have_posts()):
                        the_post();
                ?>

                <section class="post" id="post-<?php the_ID();?>" <?php post_class( 'entry' ); ?>>  
                    <div class="post-header">
                        <hr>
                        <div class="post-meta"><?php echo get_the_date(); ?>　【<?php the_category(','); ?>】</div>
                        <h2 class="post-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                    </div>
                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>
                </section>

                <?php else:?>
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