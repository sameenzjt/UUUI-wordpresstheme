<?php
    /*
    Template Name: 全部文章
    */
?>
<?php get_header(); ?>
        
        <div class="row">
            <div class="col-lg-12 col-sm-12 text-center" style="margin-bottom: 40px;">
                <h2 style="font-weight: 600; margin: 20px 0px;"><?php the_title(); ?></h2>
                <div class="dropdown-divider"></div>
            </div>
            <?php foreach (get_categories() as $cat) : ?>
                <div class="col-lg-3 col-md-6 col-sm-6"><!-- 专题2-->
                    <div style="padding: 0px 10px;">
                        <a href="<?php echo get_category_link($cat->term_id); ?>">
                            <div style="border-radius:4px; background-image: url(<?php echo z_taxonomy_image_url($cat->term_id); ?>); background-repeat: no-repeat; background-size: 100%;background-position-x:center;background-position-y: center; height: 120px; margin: 10px 0px;">
                                <span class="index-thematic-info left">2333人观看</span>
                                <span class="index-thematic-info right"><?php echo get_category($cat->term_id)->count; ?>篇文章</span>
                            </div>
                            <i style="background-color: #ff5c00;">&nbsp;</i>
                            <span><?php echo $cat->cat_name; ?></span>
                            <br />
                            <span class="font-size-small-14">
                                <?php echo category_description($cat->term_id);?>
                            </span>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
            
        </div>
        
<?php get_footer(); ?>