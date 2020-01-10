<?php get_header(); ?>            
        <div class="rightContainer sp-contents"><!-- PC→右側カラムのコンテナ　sp→メインコンテンツ部のコンテナ　-->
            <div class="main">

                <div class="posts">
                    <?php if (have_posts()):
                        while (have_posts()):
                            the_post();
                    ?>

                        <section class="post" id="post-<?php the_ID();?>" <?php post_class( 'entry entry')?>> 
                            <div class="post-header">
                                <div class="post-meta"><?php echo get_the_date(); ?>　【<?php the_category(','); ?>】</div>
                                <hr>
                                <h2 class="post-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                            </div>
                            <div class="post-content">
                                <p>
                                    本文です。本文です。本文です。本文です。本文です。
                                    本文です。本文です。本文です。本文です。本文です。
                                    本文です。本文です。本文です。本文です。本文です。
                                    本文です。本文です。本文です。本文です。本文です。
                                    本文です。本文です。本文です。本文です。本文です。
                                </p>
                            </div>
                        </section>
                        
                    <?php 
                        endwhile;
                    else:?>
                    <p>記事がありません…。</p>
                    <?php endif; ?>


                </div>

                
                <section class="post-nav">
                    <div class="post-prev"><?php previous_post_link(); ?></div>
                    <div class="post-newer"><?php next_post_link(); ?>/div>
                </section>
            </div>
<?php get_footer(); ?>