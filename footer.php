</main>

    <footer class="footer">
        <div class="row">
            <div class="col-lg-4 footer-about-us">
                <p>关于我们</p>
                <p class=" font-size-small-14" style="color:#BDBDBD"><?php echo of_get_option('footer-about-us', ''); ?></p>
            </div>
            <div class="col-lg-5 footer-about-us hide-768px" style="padding: 0px 60px;">
                <div class="row">
                    <div class="col-4 footer_menu">
                        <p><?php echo of_get_option('footer_menu_1_title', ''); ?></p>
                        <?php 
                            if(function_exists('wp_nav_menu')) {
                                wp_nav_menu(array( 'theme_location' => 'footer_menu_1','container_id'=>'menu_left') ); 
                            }
                        ?>
                        
                    </div>
                    <div class="col-4 footer_menu">
                        <p><?php echo of_get_option('footer_menu_2_title', ''); ?></p>
                        <?php 
                            if(function_exists('wp_nav_menu')) {
                                wp_nav_menu(array( 'theme_location' => 'footer_menu_2','container_id'=>'menu_left') ); 
                            }
                        ?>
                    </div>
                    <div class="col-4 footer_menu">
                        <p><?php echo of_get_option('footer_menu_3_title', ''); ?></p>
                        <?php 
                            if(function_exists('wp_nav_menu')) {
                                wp_nav_menu(array( 'theme_location' => 'footer_menu_3','container_id'=>'menu_left') ); 
                            }
                        ?>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-3 text-center hide-768px">
                
                    <div class="float-left" style="width:33%;overflow: hidden;">
                        <a href="javascript:void(0);" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="<img src='<?php echo of_get_option('weixin_qr_uploader', ''); ?>' width='160px'>">
                            <div class="weixin mx-auto"><i class="iconfont icon-weixin"></i></div>
                            <p>微信</p>
                        </a>
                    </div>
                    <div class="float-left" style="width:33%;overflow: hidden;">
                        <a href="javascript:void(0);" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="<img src='<?php echo of_get_option('weibo_qr_uploader', ''); ?>' width='160px'>">
                            <div class="weibo mx-auto"><i class="iconfont icon-weibo"></i></div>
                            <p>微博</p>
                        </a>
                    </div>
                    <div class="float-left" style="width:33%;overflow: hidden;">
                        <a href="javascript:void(0);" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="<img src='<?php echo of_get_option('toutiao_qr_uploader', ''); ?>' width='160px'>">
                            <div class="toutiao mx-auto"><i class="iconfont icon-toutiao"></i></div>
                            <p>头条</p>
                        </a>
                    </div>
                    <div class="float-left border-radius-4 w-100" style="background-color: #212121; padding:10px;">
                        <a href="<?php echo of_get_option('qq-qun', ''); ?>" target="_blank">
                            <i class="iconfont icon-qq"></i>&nbsp;&nbsp;官方QQ群
                        </a>
                    </div>
            </div>
            
            <div class="col-lg-12 hide-768px">
                <p style="color: #fff;" class="friend-link">
                    <span>友情链接：</span>
                    <?php if (function_exists('wpjam_blogroll')) wpjam_blogroll();?>
                   </p>
            </div>

        </div>
        <div class="text-center">
            <span class="footer-copyright border-radius-4 font-divider-color">
                Copyright © 2019 <?php bloginfo('name'); ?> &nbsp; 
                <span class="hide-768px"><?php echo of_get_option('icp-bei', ''); ?> &nbsp; <?php echo of_get_option('gongwang-bei', ''); ?></span>
            </span>
        </div>
        
    </footer>
    
    <div class="back_top hide-768px border-radius-4"><i class="iconfont icon-top"></i></div>

    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script type="text/javascript" src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
    <!-- bootstrap.bundle.min.js 用于弹窗、提示、下拉菜单，包含了 popper.min.js -->
    <script type="text/javascript" src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
    <!-- 最新的 Bootstrap4 核心 JavaScript 文件 -->
    <script type="text/javascript" src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    

    <!-- 返回顶部，按钮默认不可见，当滚动页面到一定高度后，按钮出现（低于500px不显示），500毫秒动画 -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/res/js/uuui.min.js"></script>
    
    <?php if (is_home()) { ?>
        <!--<script type="text/javascript" src="< ?php bloginfo('template_url'); ?>/res/js/index-navigation.js"></script>-->
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/res/js/index-lanmu-soft.min.js"></script>
    <?php } elseif( is_single() ) { ?>
        <!--  更改文章内容字体大小 -->
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/res/js/change-single-font-size.min.js"></script>
    <?php } elseif( is_page() ) { ?>
        <!-- 工具栏上滑至顶部后固定位置 -->
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/res/js/tool-slide-top-fixed.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/res/js/page-login-registered.min.js"></script>
    <?php }?>


    
<?php wp_footer(); ?>
</body>
</html>
