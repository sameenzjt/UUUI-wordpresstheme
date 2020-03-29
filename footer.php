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
                                wp_nav_menu(array( 'theme_location' => 'footer_menu_1','container_id' => 'menu_left','fallback_cb' => 'nav_menus_fallback') ); 
                            }
                        ?>
                        
                    </div>
                    <div class="col-4 footer_menu">
                        <p><?php echo of_get_option('footer_menu_2_title', ''); ?></p>
                        <?php 
                            if(function_exists('wp_nav_menu')) {
                                wp_nav_menu(array( 'theme_location' => 'footer_menu_2','container_id' => 'menu_left','fallback_cb' => 'nav_menus_fallback') ); 
                            }
                        ?>
                    </div>
                    <div class="col-4 footer_menu">
                        <p><?php echo of_get_option('footer_menu_3_title', ''); ?></p>
                        <?php 
                            if(function_exists('wp_nav_menu')) {
                                wp_nav_menu(array( 'theme_location' => 'footer_menu_3','container_id' => 'menu_left','fallback_cb' => 'nav_menus_fallback') ); 
                            }
                        ?>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-3 text-center hide-768px">
                
                    <div class="float-left" style="width:33%;overflow: hidden;">
                        <a title="微信二维码" href="javascript:void(0);" class="show_weixin">
                            <div class="weixin mx-auto"><i class="iconfont icon-weixin"></i></div>
                            <p>微信</p>
                        </a>
                        <div class="wechat-show-qr text-center">
                            <div id="weixin-show-qr"></div>
                            <div class="show_weixin_popup_foot text-center">使用“扫一扫”<br>关注官方微信</div>
                        </div>
                    </div>
                    <div class="float-left" style="width:33%;overflow: hidden;">
                        <a title="微博" href="<?php echo of_get_option('weibo_link', ''); ?>" target="_blank">
                            <div class="weibo mx-auto"><i class="iconfont icon-weibo"></i></div>
                            <p>微博</p>
                        </a>
                    </div>
                    <div class="float-left" style="width:33%;overflow: hidden;">
                        <a title="头条" href="<?php echo of_get_option('toutiao_link', ''); ?>" target="_blank">
                            <div class="toutiao mx-auto"><i class="iconfont icon-toutiao"></i></div>
                            <p>头条</p>
                        </a>
                    </div>
                    <div class="float-left btn_qq_qun border-radius-4 w-100">
                        <a href="<?php echo of_get_option('qq-qun', ''); ?>" target="_blank">
                            <i class="iconfont icon-qq"></i>&nbsp;&nbsp;官方QQ群
                        </a>
                    </div>
            </div>
            
            <div class="col-lg-12 hide-768px">
                <p style="color: #fff;" class="friend-link">
                    <span>友情链接：</span>
                    <a target="_blank" href="https://www.sameen.art/" title="sameen">Sameen</a>
                    <?php if (function_exists('wpjam_blogroll')) wpjam_blogroll();?>
                   </p>
            </div>

        </div>
        <div class="text-center">
            <span class="footer-copyright border-radius-4 font-divider-color">
                Copyright © 2019 <?php bloginfo('name'); ?> &nbsp; 
                <span class="hide-768px"><?php echo of_get_option('icp-bei', ''); ?></span> 
                <?php echo of_get_option('gongwang-bei', ''); ?></span>
            </span>
        </div>
        
    </footer>
    
    <div class="back_top hide-768px border-radius-4"><i class="iconfont icon-zhiding5"></i></div>

    
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script type="text/javascript" src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
    <!-- jQuery生成二维码 -->
    <script type="text/javascript" src="https://cdn.staticfile.org/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>
    <!-- bootstrap.bundle.min.js 用于弹窗、提示、下拉菜单，包含了 popper.min.js -->
    <script type="text/javascript" src="https://cdn.staticfile.org/popper.js/1.15.0/umd/popper.min.js"></script>
    <!-- 最新的 Bootstrap4 核心 JavaScript 文件 -->
    <script type="text/javascript" src="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/res/js/uuui.min.js"></script>
    

    

    <?php if (is_home()) { ?>
        <!--<script type="text/javascript" src="< ?php bloginfo('template_url'); ?>/res/js/index-navigation.js"></script>-->
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/res/js/index-lanmu-soft.js"></script>
        

    <?php } elseif( is_single() ) { ?>
        <script type="text/javascript">//社交分享
            var _title,_source,_sourceUrl,_pic,_showcount,_desc,_site,
                _url = '<?php the_permalink(); ?>',
                _pic = '<?php the_field('article-cover-images'); ?>',
                _summary = '<?php echo get_post_meta($post->ID, "description", true); ?>'
        </script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/res/js/share.js"></script>
        
    <?php } elseif( is_page() ) { ?>
        <!-- 工具栏上滑至顶部后固定位置 -->
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/res/js/tool-slide-top-fixed.min.js"></script>
    
    <?php }?>

    <script>//搜索框显示与隐藏
        var search_form = document.getElementById("search-form");
        var search_form_show = document.getElementById("kl");
        var search_form_hidden = document.getElementById("jk");
        search_form_show.onclick = function () {
            search_form.style.display = "block";
        }
        search_form_hidden.onclick = function () {
            search_form.style.display = "none";
        }
    </script>

    <script type="text/javascript">//网站社交地址二维码
        var _wechat_url = '<?php echo of_get_option('weixin_qr_uploader', ''); ?>';
        
        //网站微信二维码 css控制二维码隐藏和出现
        $("#weixin-show-qr").qrcode({
            text: _wechat_url, //设置二维码内容
            //render: "table", //设置渲染方式 
            width: 128, //设置宽度,默认生成的二维码大小是 256×256
            height: 128, //设置高度 
            typeNumber: -1, //计算模式 
            background: "#ffffff", //背景颜色 
            foreground: "#000000" //前景颜色 
        });
        $('.show_weixin').click(function(){
            $('.wechat-show-qr').toggle();
            $('.weixin-show-qr').toggle();
            $('.show_weixin_popup_foot').toggle();
        });
    </script>



    
<?php wp_footer(); ?>
</body>
</html>
