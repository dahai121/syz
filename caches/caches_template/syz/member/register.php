<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

<!-- 页头导航2 -->


<!-- 媒体注册 -->
<div class="bjgjsyz-jbzc">

  <div class="bjgjsyz-jbzc-main container">
    <div class="row">

      <div class="left-menu col-sm-2 col-md-2">
        <h4 class="tit-h4">注册</h4>
        <p class="tit-eg">Register</p>
        <ul>
          <li><a href="javascript:void(0);">嘉宾注册</a></li>
          <li class="current"><a href="javascript:void(0);">媒体注册</a></li>
        </ul>
      </div>

      <div class="right-content col-sm-9 col-md-9 col-md-offset-1 col-sm-offset-1">
        <h4 class="tit-h4">媒体注册须知</h4>
        <div class="explain">
          <p class="txt">请您注册之前认真阅读以下须知，并按须知提示要求注册填报，确保注册信息内容真实准确，有助于您顺利通过活动组委会及公安部门审核。</p>
          <p class="txt">1.带“*”号的信息为必填信息；</p>
          <p class="txt">2.姓名：须与所提供身份证件上的姓名一致，应紧凑填写，姓名中不出现空格；</p>
          <p class="txt">3.出生日期：请填写代表出生年月日的8位数字，如“19850101”；</p>
          <p class="txt">4.照片：须为2寸彩色免冠证件照电子版，JPG图像格式。</p>
          <p class="txt">5.提交注册信息后，您可以登陆2017北京国际摄影周官网（www.bjipw.com），在个人中心查看信息审核进度。</p>
          <p class="txt">6.注册信息审核通过后，组委会将以邮件的形式通知您，请您保持邮箱接收畅通。</p>
          <p class="txt">7.媒体注册咨询电话：</p>
        </div>

        <div class="form">

          <form action="#" method="post">
            <div class="row">
              <div class="form-group clearfix">
                <div class="col-sm-3">姓名<span class="red-point">*</span></div>
                <div class="col-sm-5">
                  <input type="text" class="form-control"  name="name" placeholder="请填写" required>
                </div>
              </div>
              <div class="form-group clearfix">
                <div class="col-sm-3">性别<span class="red-point">*</span></div>
                <div class="col-sm-5">
                  <label class="radio-inline">
                    <input type="radio" value="1" name="permit">
                    <span class="butif-radio"></span>&nbsp;男
                  </label>
                  <label class="radio-inline">
                    <input type="radio" value="2" name="permit">
                    <span class="butif-radio"></span>&nbsp;女
                  </label>
                </div>
              </div>
              <div class="form-group clearfix">
                <div class="col-sm-3">出生日期<span class="red-point">*</span></div>
                <div class="col-sm-5">
                  <input type="number" class="form-control"  name="date" placeholder="请填写" required>
                </div>
              </div>
              <div class="form-group clearfix">
                <div class="col-sm-3">证件类型<span class="red-point">*</span></div>
                <div class="col-sm-5">
                  <select class="form-control">
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                  </select>
                </div>
              </div>
              <div class="form-group clearfix">
                <div class="col-sm-3">证件号码<span class="red-point">*</span></div>
                <div class="col-sm-5">
                  <input type="number" class="form-control"  name="certificates" placeholder="请填写" required>
                </div>
              </div>
              <div class="form-group clearfix">
                <div class="col-sm-3">手机<span class="red-point">*</span></div>
                <div class="col-sm-5">
                  <input type="text" class="form-control"  name="phone" placeholder="请填写" required>
                </div>
              </div>
              <div class="form-group clearfix">
                <div class="col-sm-3">邮箱<span class="red-point">*</span></div>
                <div class="col-sm-5">
                  <input type="text" class="form-control"  name="name" placeholder="请填写" required>
                </div>
              </div>
              <div class="form-group clearfix">
                <div class="col-sm-3">个人证件照<span class="red-point">*</span></div>
                <div class="col-sm-5">
                  <a class="form-file" href="javascript:void(0);">
                    <img class="ico-i" src="<?php echo IMG_PATH;?>syz/images/sl_bjgjsyz_zjz.png">
                    <input type="file" name="" required>
                  </a>
                </div>
              </div>
              <div class="sl-checkbox form-group clearfix">
                <div class="col-sm-3">媒体类别<span class="red-point">*</span></div>
                <div class="col-sm-5">
                  <label>
                    <input type="checkbox" name="">
                    <span class="butif-radio"></span>通讯社
                  </label>
                  <label>
                    <input type="checkbox" name="">
                    <span class="butif-radio"></span>图片社
                  </label>
                  <label>
                    <input type="checkbox" name="">
                    <span class="butif-radio"></span>电视台
                  </label>
                  <label>
                    <input type="checkbox" name="">
                    <span class="butif-radio"></span>电台
                  </label>
                  <label>
                    <input type="checkbox" name="">
                    <span class="butif-radio"></span>报纸
                  </label>
                  <label>
                    <input type="checkbox" name="">
                    <span class="butif-radio"></span>杂志
                  </label>
                  <label>
                    <input type="checkbox" name="">
                    <span class="butif-radio"></span>网络
                  </label>
                  <label class="clearfix">
                    <span class="other">其他</span>
                    <input type="text" class="other-i form-control"  name="">
                  </label>
                </div>
              </div>
              <div class="form-group clearfix">
                <div class="col-sm-3">媒体名称<span class="red-point">*</span></div>
                <div class="col-sm-5">
                  <input type="text" class="form-control"  name="" placeholder="请填写">
                </div>
              </div>
              <div class="form-group clearfix">
                <div class="col-sm-3">工作部门<span class="red-point">*</span></div>
                <div class="col-sm-5">
                  <input type="text" class="form-control"  name="" placeholder="请填写">
                </div>
              </div>
              <div class="form-group clearfix">
                <div class="col-sm-3">职位职务<span class="red-point">*</span></div>
                <div class="col-sm-5">
                  <input type="text" class="form-control"  name="" placeholder="请填写">
                </div>
              </div>
              <div class="form-group clearfix">
                <div class="col-sm-3">记者证号码</div>
                <div class="col-sm-5">
                  <input type="text" class="form-control"  name="" placeholder="请填写">
                </div>
              </div>
              <div class="form-group clearfix">
                <div class="col-sm-3">发证部门</div>
                <div class="col-sm-5">
                  <input type="text" class="form-control"  name="" placeholder="请填写">
                </div>
              </div>
              <div class="sl-checkbox form-group clearfix">
                <div class="col-sm-3">记者类别<span class="red-point">*</span></div>
                <div class="col-sm-5">
                  <label>
                    <input type="checkbox" name="">
                    <span class="butif-radio"></span>文字记者
                  </label>
                  <label>
                    <input type="checkbox" name="">
                    <span class="butif-radio"></span>摄影记者
                  </label>
                  <label>
                    <input type="checkbox" name="">
                    <span class="butif-radio"></span>摄像记者
                  </label>
                  <label>
                    <input type="checkbox" name="">
                    <span class="butif-radio"></span>编辑
                  </label>
                  <label>
                    <input type="checkbox" name="">
                    <span class="butif-radio"></span>制片
                  </label>
                  <label>
                    <input type="checkbox" name="">
                    <span class="butif-radio"></span>主持人
                  </label>
                  <label class="clearfix">
                      <span class="other">其他</span>
                      <input type="text" class="other-i form-control"  name="">
                  </label>
                </div>
              </div>
              <div class="sl-checkbox form-group clearfix">
                <div class="col-sm-3">拟参与的摄影周活动<span class="red-point">*</span></div>
                <div class="col-sm-5">
                  <label>
                    <input type="checkbox" name="">
                    <span class="butif-radio"></span>开幕活动
                  </label>
                  <label>
                    <input type="checkbox" name="">
                    <span class="butif-radio"></span>主题展览
                  </label>
                  <label>
                    <input type="checkbox" name="">
                    <span class="butif-radio"></span>专题展览
                  </label>
                  <label>
                    <input type="checkbox" name="">
                    <span class="butif-radio"></span>摄影讲堂
                  </label>
                  <label>
                    <input type="checkbox" name="">
                    <span class="butif-radio"></span>推介活动
                  </label>
                </div>
              </div>
            </div>
            <div class="tj-btn">
              <button type="button" class="tijiao center-block">提交</button>
            </div>
          </form>

        </div>
      </div>

    </div>
  </div>

</div>


<!-- 工具、分享 -->
<div class="toolbar-r">
  <div class="purchase">
    <a href="<html:rewrite action='/addbuyprint'/>" class="p-p">
      <img src="<?php echo IMG_PATH;?>syz/images/sl_bjgjsyz_gwc.png">n
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
<script src="<?php echo JS_PATH;?>syz/js/jquery.validate.min.js"></script>
<script src="<?php echo JS_PATH;?>syz/js/messages_zh.js"></script>

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

// 提交表单
$('.tijiao').on('click',function(){
  $('form').submit();
});

$.validator.setDefaults({
    submitHandler: function(form) {
      console.log(0)
    form.submit();
    }
});
$(function() {
    $("form").validate({
    rules:{
      email:{
        email:true
      },
      date:{
        date:true
      },
      tel:{
        phone:11
      }
    }
  });
});
jQuery.validator.addMethod("phone", function(value, element, param) {
  var tel = /^1[0-9]{10}$/;
  return tel.test(value);
    var length = value.length;
  if(length!=param){
    return ;
  }
}, "请输入正确的手机格式");

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


</body>
</html>