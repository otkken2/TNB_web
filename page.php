<?php get_header(); ?>            
        <div class="rightContainer sp-contents"><!-- PC→右側カラムのコンテナ　sp→メインコンテンツ部のコンテナ　-->
            <div class="main">

                <div class="posts">
                    <?php if (have_posts()):
                        while (have_posts()):
                            the_post();
                    ?>

                        <section class="post" id="post-<?php the_ID();?>" <?php post_class( 'entry' ); ?>>  
                            <div class="post-header">
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
                    <p>ページがありません…。</p>
                    
                    <?php 
                    endif; 
                    ?>


                </div>

                
            </div>
<?php get_footer(); ?>