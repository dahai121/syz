<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>


<!-- 开幕活动 -->
<div class="bjgjsyz-syjt bjgjsyz-tyhd">

  <div class="banner-style new-edition-banner">
    <img class="pc-pic" width="1800px;" src="<?php echo $CATEGORYS[$top_parentid]['image'];?>">
    <img class="m-pic"  src="<?php echo IMG_PATH;?>syz/images/sl-bjgjsyz-tyhd-pcbanner.jpg">
    <div class="headline">
      <p class="tit-eg">special</p>
      <h3 class="tit-ch"><span><?php echo $CATEGORYS[$catid]['catname'];?></span></h3>
      <p class="tit-i">Photo Beijing 2017</p>
      <?php if($catid==24) { ?>
      <a class="more" href="http://www.baidu.com">more</a>
      <?php } ?>

    </div>
  </div>

  <div class="bjgjsyz-syjt-main container">
    <div class="row">
      <!--左侧-->

      <div class="left-menu col-sm-2 col-md-1">
        <h4 class="tit-h4"><?php echo $CATEGORYS[$catid]['catname'];?></h4>
        <p class="tit-eg">Forum</p>
        <ul>
          <li class="current"><a href="<?php echo $CATEGORYS[$top_parentid]['url'];?>">全部</a></li>
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=e5edba28a164dc4a7ec61f357f981f80&sql=select+%2A+from+syz_category+where+parentid%3D%24catid+order+by+catid+asc+\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from syz_category where parentid=$catid order by catid asc  LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
          <?php $n=1;if(is_array($data)) foreach($data AS $val) { ?>
          <li><a href="<?php echo $val['url'];?>"><?php echo $val['catname'];?></a></li>
          <?php $n++;}unset($n); ?>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
      </div>
      <!--右侧内容-->
      <div class="right-content col-sm-9 col-md-10 col-md-offset-1 col-sm-offset-1">
        <div class="clearfix">
          <?php $child = $CATEGORYS[$catid][arrchildid]?>
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=d87a6dbf66d4c59017bceced289e951c&sql=select+a.%2A%2Cb.content+from+syz_news+as+a+left+join+syz_news_data+as+b+on+a.id+%3D+b.id+where+a.catid+in+%28%24child%29+order+by+listorder+&num=2&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$pagesize = 2;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$r = $get_db->sql_query("SELECT COUNT(*) as count FROM (select a.*,b.content from syz_news as a left join syz_news_data as b on a.id = b.id where a.catid in ($child) order by listorder ) T");$s = $get_db->fetch_next();$pages=pages($s['count'], $page, $pagesize, $urlrule);$r = $get_db->sql_query("select a.*,b.content from syz_news as a left join syz_news_data as b on a.id = b.id where a.catid in ($child) order by listorder  LIMIT $offset,$pagesize");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
          <?php $n=1;if(is_array($data)) foreach($data AS $val) { ?>
          <ul>
            <li class="clearfix">
              <div class="row">
                <div class="txtBox col-md-8">
                  <a href="<?php echo $val['url'];?>"><h5 class="tit-h5"><?php echo $val['title'];?></h5></a>
                  <p class="time"><?php echo date('Y-m-d',$val[inputtime]);?></p>
                  <p class="txt"><?php echo $val['description'];?></p>
                  <a class="pc-more" href="<?php echo $val['url'];?>">MORE</a>
                </div>
                <div class="pic col-md-4">
                  <img src="<?php echo $val['thumb'];?>">
                </div>
              </div>
              <a class="more" href="<?php echo $val['url'];?>">MORE</a>
            </li>
          </ul>
          <?php $n++;}unset($n); ?>
          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
      </div>

    </div>
  </div>

</div>

<!-- 分页 -->
<div class="sl-paging">
  <div class="inline">
        <?php echo $pages;?>
    <!---a href="" class="page-prev" title="上一页">&lt;</a>
    <a href="#" class="on">1</a>
    <a href="" class="page-next" title="下一页">&gt;</a--->
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

<script type="text/javascript">

$(function(){
  /*===页头导航2===*/
  $('.sl-header2 .Nav').find('.column').hover(function(){
    $(this).find('.subnav').stop(true,false).slideDown();
  },function(){
    $(this).find('.subnav').stop(true,false).slideUp();
  })

  $('.sm-nav-open').click(function(){
    $(this).toggleClass('sm-nav-open-on');
    $(this).next().toggleClass('NavBox-show');
  });

});



//配置工具、分享
var Back_top = $('.Top').hide();
$(window).scroll(function(){
  if($(this).scrollTop() <= 0){
    Back_top.fadeOut();
  }else{
    Back_top.fadeIn();
  }
});
Back_top.click(function(){
  var speed=200;//滑动的速度
  $('body,html').animate({ scrollTop: 0 }, speed);
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
with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion='+~(-new Date()/36e5)];

//购买、办展
$('.purchase a').eq(0).hover(function(){
  $(this).addClass('on');
},function(){
  $(this).removeClass('on');
})
$('.purchase a').eq(1).hover(function(){
  $(this).addClass('on');
},function(){
  $(this).removeClass('on');
})

</script>
<?php include template("content","footer"); ?>