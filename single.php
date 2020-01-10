<?php get_header(); ?>            
        <div class="rightContainer sp-contents"><!-- PC→右側カラムのコンテナ　sp→メインコンテンツ部のコンテナ　-->
            <div class="main">

            

                <section class="posts">
                    <?php if (have_posts()):
                        while (have_posts()):
                            the_post();
                    ?>

                    <?php if(in_category('live')):?>
                        <div class="live-description"> 
                            <p>
                                ご予約・お問い合わせはnatsuyasumiband☆yahoo.co.jp（☆→＠に変換）までお願いします。
                                また、チケット予約のアドレスが載っている日、
                                プレイガイドなどのコードが書いてある日に関しては
                                そちらから予約をお願いします。
                            </p>
                        </div>
                    <?php endif; ?>

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
                        
                        
                        <section class="post-nav">
                            <div class="post-prev"><?php previous_post_link('%link', '<- 前の投稿', TRUE); ?></div>
                            
                            <div class="post-newer"><?php next_post_link('%link', '次の投稿 ->', TRUE); ?></div>
                        </section>

                    <?php 
                        endwhile;
                    else:?>
                    <p>記事がありません…。</p>
                    
                    <?php 
                    endif; 
                    ?>


                </section>

                
            </div>
<?php get_footer(); ?>