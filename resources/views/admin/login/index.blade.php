<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>{{ Config::get('app.title') }}</title>
 <!-- 图标 -->
<link rel="icon" type="image/x-icon" href="{{ Config::get('app.icon') }}"/>  
<link href="{{ url() }}/admin/Wopop_files/style_log.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{ url() }}/admin/Wopop_files/style.css">
<link rel="stylesheet" type="text/css" href="{{ url() }}/admin/Wopop_files/userpanel.css">
<link rel="stylesheet" type="text/css" href="{{ url() }}/admin/Wopop_files/jquery.ui.all.css">
</head>

<body class="login" mycollectionplug="bind">
<div class="login_m">
<div class="login_logo"><img src="{{ url() }}/images/35.jpg" width="196" height="46"></div>
<div class="login_boder">

<div class="login_padding" id="login_model">
<form action="/admin/login/dolog" method="get">
{{ csrf_field() }}
  <h2>用户名</h2>
  <label>
    <input type="text" id="uname" name="uname" class="txt_input txt_input2" onfocus="if (value ==&#39;例如：zhangsan&#39;){value =&#39;&#39;}" onblur="if (value ==&#39;&#39;){value=&#39;例如：zhangsan&#39;}" value="例如：zhangsan">
  </label>
  <h2>密码</h2>
  <label>
    <input type="password" id="password" name="password" class="txt_input" onfocus="if (value ==&#39;******&#39;){value =&#39;&#39;}" onblur="if (value ==&#39;&#39;){value=&#39;******&#39;}" value="******">
  </label>
 
 

 
  <p class="forgot"><a id="iforget" href="javascript:void(0);">忘记密码?</a></p>
  <div class="rem_sub">
  <div class="rem_sub_l">
  <input type="checkbox" name="checkbox" id="save_me">
   <label for="checkbox">记住密码</label>
   </div>
    <label>
      <input type="submit" class="sub_button" name="button" id="button" value="登录" style="opacity: 0.7;">
    </label>
  </div>
</div>
</form>
<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >企业网站模板</a></div>

<div id="forget_model" class="login_padding" style="display:none">
<br>

   <h1>Forgot password</h1>
   <br>
   <div class="forget_model_h2">(请在下面输入您的注册邮箱,系统将自动重置用户密码,发送给用户的注册电子邮件地址。)</div>
    <label>
    <input type="text" id="uname" class="txt_input txt_input2">
   </label>
  <div class="rem_sub">
  <div class="rem_sub_l">
   </div>
    <label>
     <input type="submit" class="sub_buttons" name="button" id="Retrievenow" value="Retrieve now" style="opacity: 0.7;">
     　　　
     <input type="submit" class="sub_button" name="button" id="denglou" value="Return" style="opacity: 0.7;">　　
    
    </label>
  </div>
</div>
<!--login_padding  Sign up end-->
</div><!--login_boder end-->
</div><!--login_m end-->
 <br> <br>
<p align="center"> 最好商城 陪伴你的到永久</p>
</body></html>