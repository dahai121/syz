<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>        <!-- 页头导航2 -->
        <?php include template("content","header"); ?>
        <!---引入ckplayer--->
        <script src="<?php echo WEB_PATH;?>ckplayer/ckplayer.js"></script>


        <!-- 开幕活动 -->
        <div class="bjgjsyz-kmhd">


            <div class="banner-style">
                <img class="pc-pic" src="<?php echo IMG_PATH;?>syz/images/sl-bjgjsyz-kmhd-pcbanner.jpg">
                <img class="m-pic" src="<?php echo IMG_PATH;?>syz/images/sl-bjgjsyz-kmhd-pcbanner.jpg">
                <div class="headline">
                    <p class="tit-eg">Opening</p>
                    <h3 class="tit-ch">北京摄影周开幕式</h3>
                    <?php echo WEB_PATH;?>
                    <p class="tit-i"><i class="line-left"></i>Photo Beijing 2017<i class="line-right"></i></p>
                </div>
            </div>

            <div class="bjgjsyz-kmhd-main container">

                <div class="jbxx itemBox">
                    <h4 class="tit-h4"><?php echo $CATEGORYS['11']['catname'];?></h4>

                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=5fb67d3751c7f5299e178f8c3ca4cad6&sql=select+%2A+from+syz_news+where+catid%3D11+order+by+inputtime+desc&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from syz_news where catid=11 order by inputtime desc LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                    <p class="tit-eg">Basic Information</p>
                    <?php $n=1;if(is_array($data)) foreach($data AS $val) { ?>
                    <div class="conBox">
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=21eeec1e7a98a2981c2950fcf0c32d5f&sql=select+%2A+from+syz_news_data+where+id+%3D+%24val%5Bid%5D\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from syz_news_data where id = $val[id] LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                        <p class="txt"><?php echo $v['content'];?></p>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </div>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>


                <div class="lcap itemBox">
                    <h4 class="tit-h4"><?php echo $CATEGORYS['12']['catname'];?></h4>
                    <!--p class="tit-eg">Arrangement</p-->
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=cb37e1454e0e2a14b29add272e6d0dde&sql=select+%2A+from+syz_news+where+catid%3D12+order+by+inputtime+desc&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from syz_news where catid=12 order by inputtime desc LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $val) { ?>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=826672b5523f4fc3a33f4e16171785e5&sql=select+%2A+from+syz_news_data+where+id%3D%24val%5Bid%5D\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from syz_news_data where id=$val[id] LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                    <div class="conBox">
                        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                        <p class="txt"><?php echo $v['content'];?> </p>
                        <?php $n++;}unset($n); ?>
                    </div>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>



                <div class="xctw itemBox">
                    <h4 class="tit-h4"><?php echo $CATEGORYS['13']['catname'];?></h4>
                    <p class="tit-eg">Scene Graphic</p>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=2e91f8492a6b4ca50603c068a792987d&sql=select+%2A+from+syz_picture+where+catid%3D13&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from syz_picture where catid=13 LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                    <div class="conBox">
                        <div class="xctw-swiper">
                            <div class="wrapper">
                                <?php $n=1;if(is_array($data)) foreach($data AS $val) { ?>
                                <div class="item">
                                    <img src="<?php echo $val['thumb'];?>">
                                    <p class="txt"><?php echo $val['description'];?></p>
                                </div>
                                <?php $n++;}unset($n); ?>
                            </div>
                            <div class="pagination"></div>
                        </div>
                        <div class="toggle-btn">
                            <a class="arrow arrow-left" href="javascript:void(0);"><img src="<?php echo IMG_PATH;?>syz/images/sl-left-2.png"></a>
                            <a class="arrow arrow-right" href="javascript:void(0);"><img src="<?php echo IMG_PATH;?>syz/images/sl-right-2.png"></a>
                        </div>
                    </div>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>


                <div class="kmhd-video itemBox">
                    <h4 class="tit-h4"><?php echo $CATEGORYS['15']['catname'];?></h4>
                    <p class="tit-eg">Video </p>
                    <div class="conBox">
                        <ul class="clearfix">

                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=aa3d5f0bf6a94fd7e3b17fcbe58ed4d9&sql=select+%2A+from+syz_video+where+catid%3D15&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from syz_video where catid=15 LIMIT 6");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $val) { ?>
                            <li class="item">
                                <div class="cover">
                                    <img class="pic" src="<?php echo $val['thumb'];?>">
                                    <img class="play-btn" src="<?php echo IMG_PATH;?>syz/images/sl-play1.png">
                                </div>
                                <a class="video" href="javascript:void(0);">111</a>

                                <p class="txt"><?php echo $val['description'];?></p>
                            </li>
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

                        </ul>
                        <a class="live-address" href="javascript:void(0);">直播地址<img
                                src="<?php echo IMG_PATH;?>syz/images/sl-r-See.png"></a>
                    </div>
                </div>

            </div>

        </div>


        <!-- 工具、分享 -->
        <div class="toolbar-r">
            <div class="purchase">
                <a href="<html:rewrite action='/addbuyprint'/>" class="p-p">
                    <img src="<?php echo IMG_PATH;?>syz/images/sl_bjgjsyz_gwc.png">
                    <span>我要购买</span>
                </a>
                <a href="javascript:void(0);" class="p-e">
                    <img src="<?php echo IMG_PATH;?>syz/images/sl_bjgjsyz_wybz.png">
                    <span>我要办展</span>
                </a>
            </div>
            <div class="shareBox clearfix">
                <div class="bdsharebuttonbox" data-tag="share_1">
                    <a class="bds_qzone" data-cmd="qzone"></a>
                    <a class="bds_tsina" data-cmd="tsina"></a>
                    <a class="bds_tqq" data-cmd="tqq"></a>
                    <a class="bds_weixin" data-cmd="weixin"></a>
                    <a class="bds_renren" data-cmd="renren"></a>
                    <a class="Top" href="javascript:void(0);"></a>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="<?php echo JS_PATH;?>syz/js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="<?php echo JS_PATH;?>syz/js/idangerous.swiper.min.js"></script>
        <script type="text/javascript" src="http://zt.bjwmb.gov.cn/2017/sl_jq/ckplayer/ckplayer.js"></script>

        <script type="text/javascript">

            $(function () {
                /*===页头导航2===*/
                $('.sl-header2 .Nav').find('.column').hover(function () {
                    $(this).find('.subnav').stop(true, false).slideDown();
                }, function () {
                    $(this).find('.subnav').stop(true, false).slideUp();
                })

                $('.sm-nav-open').click(function () {
                    $(this).toggleClass('sm-nav-open-on');
                    $(this).next().toggleClass('NavBox-show');
                });

                //现场图文
                var win_W = $(window).width();
                var _slidesPerView;

                if (win_W < 768) {
                    _slidesPerView = 1;
                } else if (768 < win_W && win_W < 992) {
                    _slidesPerView = 2;
                } else if (win_W > 992) {
                    _slidesPerView = 4;
                }

                var xctw = new Swiper('.xctw-swiper', {
                    loop: false,
                    //autoplay:3500,
                    calculateHeight: true,
                    updateOnImagesReady: true,
                    resizeReInit: true,
                    paginationClickable: true,
                    slidesPerView: _slidesPerView,
                    pagination: '.pagination',
                    paginationElementClass: 'ms-swiper',
                    paginationActiveClass: 'ms-active',
                    paginationVisibleClass: 'ms-visible',
                    wrapperClass: 'wrapper',
                    slideClass: 'item'
                });
                $('.arrow-left').click(function () {
                    xctw.swipePrev();
                });
                $('.arrow-right').click(function () {
                    xctw.swipeNext();
                });
                $(window).resize(function () {
                    win_W = $(this).width();
                    if (win_W < 768) {
                        _slidesPerView = 1;
                    } else if (768 < win_W && win_W < 992) {
                        _slidesPerView = 2;
                    } else if (win_W > 992) {
                        _slidesPerView = 4;
                    }
                    xctw.reInit();
                });


            });

            $(function () {
                // 视频播放
                var videoBox = $('.kmhd-video .item');
                var ck_play = videoBox.children('.cover');
                var ck_video = videoBox.children('.video');
                var video_w = videoBox.siblings('.item').children('.cover').width();
                var video_h = videoBox.siblings('.item').children('.cover').height();

                ck_play.each(function () {
                    $(this).click(function () {
                        var $indexs = $(this).index('.cover');
                        var _a = $(this).next();
                        var _link = _a.text();

                        $(this).css('display', 'none');

                        ck_video.each(function (i) {
                            if (i == $indexs) {
                                var thisID = 'vidoe' + ($indexs + 1);
                                $(this).css('display', 'block').attr('id', thisID);
                                _video(thisID, _link);
                            }
                        });
                    });
                });

                function _video(thisID, _link) {
                    var ck_data = {
                        f: _link,
                        c: 0,
                        p: 1,
                        v: 60,
                        my_url: 'http://www.syz.com/ckplayer/ckplayer.swf'
                    };

                    var params = {
                        bgcolor: '#FFF',
                        allowFullScreen: true,
                        allowScriptAccess: 'always',
                        wmode: 'transparent'
                    }

                    var ck_swf = 'http://www.syz.com/ckplayer/ckplayer.swf';
                    var ck_a1 = 'http://www.syz.com/ckplayer/ckplyer_a1';

                    CKobject.embedSWF(ck_swf, thisID, ck_a1, video_w, video_h, ck_data, params);
                }
            })


            //配置工具、分享
            var Back_top = $('.Top').hide();
            $(window).scroll(function () {
                if ($(this).scrollTop() <= 0) {
                    Back_top.fadeOut();
                } else {
                    Back_top.fadeIn();
                }
            });
            Back_top.click(function () {
                var speed = 200;//滑动的速度
                $('body,html').animate({scrollTop: 0}, speed);
                return false;
            });
            window._bd_share_config = {
                "common": {
                    "bdSnsKey": {},
                    "bdText": "",
                    "bdMini": "2",
                    "bdMiniList": false,
                    "bdPic": "",
                    "bdStyle": "2",
                    "bdSize": "32"
                },
                "share": {}
            }
            with (document)0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion=' + ~(-new Date() / 36e5)];

            //购买、办展
            $('.purchase a').eq(0).hover(function () {
                $(this).addClass('on');
            }, function () {
                $(this).removeClass('on');
            })
            $('.purchase a').eq(1).hover(function () {
                $(this).addClass('on');
            }, function () {
                $(this).removeClass('on');
            })


        </script>

        <?php include template("content","footer"); ?>