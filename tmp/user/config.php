<?php 
if(!isset($type)){exit();}
$this->nologin();
$this->showhd("设置中心");
 
 

 
?>
<Style>
.logo{height:55px;line-height:50px;font-size:17px;font-weight:bold;vertical-align:middle;background-color:#fff;position:fixed;left:0px;width:100%;top:0px;z-index:55;box-shadow: #b9bcbc 0px 8px 8px -8px;}
.logo #logo{display:inline-block;height:55px;line-height:50px;color:#777;float:left;margin-left:8px;}
#logo span{display:inline-block;height:50px;width:50px;border-radius:25px;margin-right:5px;margin-left:10px;border:0px;}
.logo img{vertical-align:middle;height:50px;border-radius:25px;}
#qq{float:right;margin-right:10px;font-size:20px;}
.sousuo{height:55px;width:35%;z-index:33;position:absolute;top:0px;right: 0px;background:#fff;}
 .ttt{line-height:28px;margin-top:8px;margin-bottom:-10px;margin-left:10px;}
</Style>
<div style='height:50px;'></div>
<div class='logo'><a  id='logo' href='/?type=user&type2=wo'>返回</a>
 

</div>
 
<style>
.config{margin:10px 10px 0px 10px;border-radius:8px;padding:8px;line-height:32px;height:32px;background-color:#fff;}  
.config img{height:32px;width:32px;margin-right:8px;vertical-align:middle;}
</style>  
<A href='/?type=user&type2=zhconfig'><div class='config'><img src='/public/img/zhconfig.png'/>账号配置</div></A>
<A href='/?type=user&type2=password'><div class='config'><img src='/public/img/password.png'/>修改密码</div></A> 
<div class='ttt'>多账号</div>
<A href='/?type=user&type2=zhqh'><div class='config'><img src='/public/img/zhqh.png'/>账号切换</div></A>
<A href='/?type=user&type2=login'><div class='config'><img src='/public/img/logout.png'/>退出登录</div></A> 