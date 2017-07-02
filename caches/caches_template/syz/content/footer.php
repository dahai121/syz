<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!-- 页脚 -->
<div class="sl-footer2">
    <div class="copyright container">
        <img class="logo" src="<?php echo IMG_PATH;?>syz/images/sl_show_logo.jpg">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=9d1df3ebf6104455d5702128d5202250&sql=select+catid%2Cid+from+syz_company\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select catid,id from syz_company LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
        <?php $n=1;if(is_array($data)) foreach($data AS $val) { ?>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=b0c27c4ff80c2fc5c9e100831645d499&sql=select+address%2Cphone%2Cchuanzhen%2Cemail+from+syz_company_data+where+id%3D%24val%5Bid%5D+\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select address,phone,chuanzhen,email from syz_company_data where id=$val[id]  LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
        <ul class="clearfix">
            <li>地址：<?php echo $v['address'];?></li>
            <li>电话：<?php echo $v['phone'];?></li>
            <li>传真：<?php echo $v['chuanzhen'];?> </li>
            <li>邮箱：<?php echo $v['email'];?></li>
            <li class="li5">Copyright © 2016 北京国际摄影周组委会办公室 All Right Reserved.</li>
        </ul>}
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </div>
</div>


</body>
</html>
