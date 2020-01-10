<?php get_header(); ?>            
        <div class="rightContainer sp-contents"><!-- PC→右側カラムのコンテナ　sp→メインコンテンツ部のコンテナ　-->
        
        <div class="main">
            
                <?php if(is_category('live')):?>
                    <div class="live-description"> 
                        <p>
                            ご予約・お問い合わせはnatsuyasumiband☆yahoo.co.jp（☆→＠に変換）までお願いします。
                            また、チケット予約のアドレスが載っている日、
                            プレイガイドなどのコードが書いてある日に関しては
                            そちらから予約をお願いします。
                        </p>
                    </div>
                <?php endif; ?>

                <div class="posts">
                    <?php if (have_posts()):
                        while (have_posts()):
                            the_post();
                    ?>

                        <section class="post"> 
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
                        
                    <?php 
                        endwhile;
                    else:?>
                    <p>記事がありません…。</p>
                    <?php endif; ?>


                </div>

                
                <section class="post-nav">
                    <div class="post-prev"><?php previous_posts_link(); ?></div>
                    <div class="post-newer"><?php next_posts_link(); ?></div>
                </section>
        </div>
<?php get_footer(); ?>