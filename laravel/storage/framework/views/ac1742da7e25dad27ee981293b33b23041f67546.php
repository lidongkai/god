<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8"/>
  <title>雷锋网_读懂智能&amp;未来</title> 
  <meta name="description" content="雷锋网是国内最早关注人工智能和智能硬件领域的互联网科技媒体，内容涵盖人工智能、智能硬件、机器人、智能驾驶、ARVR、网络安全、物联网、未来医疗、金融科技等9大领域。雷锋网致力于连接和服务学术界、工业界与投资界，为用户提供更专业的互联网科技资讯和培训服务，让用户读懂智能与未来。" />
    <meta name="sogou_site_verification" content="ilkqV8FehD"/>
    <meta name="renderer" content="webkit">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/css/app.css')); ?>">
     <link href="//store.res.meizu.com/layout/img/favicon-2e71785f44.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="//store.res.meizu.com/layout/img/favicon-2e71785f44.ico" rel="icon" type="image/x-icon" />

        <link rel="stylesheet"  type="text/css" href="/leiphone/css/common.css"  />
        
      <link rel="stylesheet"  type="text/css" href="/leiphone/css/list.css" />

    <link rel="stylesheet" type="text/css" href="/leiphone/css/jquery.mcustomscrollbar.css"  />
    <link rel="stylesheet" type="text/css" href="/leiphone/css/calendar.css"  />
    <link rel="stylesheet" type="text/css" href="/leiphone/css/index.css"  />  
     <link rel="stylesheet" href="<?php echo e(asset('home/meizu/css/layout-51312a08ab.css')); ?>" /> 

    <!--[if lt IE 9]>
    <script src="js/html5shiv-3ed50bb69a.js" type="text/javascript"></script>
    <script src="js/es5-shim-50bbaee56e.js" type="text/javascript"></script>
    <![endif]-->
<link href="<?php echo e(asset('home/meizu/css/index-ae8b657ce8.css')); ?>" rel="stylesheet"/>
<link href="<?php echo e(asset('home/meizu/css/search-00ea2bc25a.css')); ?>" rel="stylesheet" />
</head>
<body>

<!-- header start-->
<header class="yp-header">
    <div class="yp-header-top clr">
        <a class="yp-header-logo" href="/home/index">
            <img src="/leiphone/picture/lph-headerlogo.png"  alt="雷锋网">
                        <span>读懂<h1>智能</h1>&未来</span>
        </a>
        
        <!-- 用户登录 -->
        <?php if(session('master')): ?>
         <div id="hidd">
            <div class="yp-header-message"  style="margin-top:22px;font-size:16px;">
              <!--   <a href="https://home.leiphone.com/login/wechatLogin" class="bell">
                     <i class="ico"></i>
                     <em class="count"></em>   
                </a> -->
                <!-- <ul class="nav navbar-nav navbar-right"> -->
             <a href="/home/loginout">退出</a>
              <!-- </ul> -->
              </div>
              <div class="yp-header-message" style="margin-top:22px;font-size:16px;">积分:<?php echo e(session('master')->score); ?></div>
              <div class="yp-header-message" style="margin-top:22px;font-size:16px;"><?php echo e(session('master')->username); ?></div>
        </div>

        <div class="yp-header-user-box">
            <div class="yp-header-user">
                <!-- <input type="hidden" id="is_login_tag_status" value="1"> -->
                <div class="user-main user-haslg">
                    <div class="avatar"><a href="/home/user/index"><img width="36" height="36" src="/uploads/avatar/<?php echo e(session('master')->photo); ?>" alt=""></a></div>
                </div>
               
            </div>
        </div>
         <?php else: ?>
        <!-- 用户消息 -->
        <div id="hidd">
            <div class="yp-header-message"  style="margin-top:22px;font-size:16px;">
            <a data-toggle="modal" data-target="#register" href="">注册</a>
            </div>
            <div class="yp-header-message" style="margin-top:22px;font-size:16px;">
            <a data-toggle="modal" data-target="#login" href="">登录</a>
            </div>
        </div>
        <?php endif; ?>

        <div class="yp-header-search">
           <form method="GET" name="allSearchForm" action="https://www.leiphone.com/search" style="height: 100%;">
                <input type="hidden" name="site" value="">
                <input class="text" type="text" name="s" autocomplete="off" value="">
                <input class="submit" type="submit" value="">
                <input class="submit2" type="submit" value="">
            </form>
        </div>
        
    </div>
</header> 

     <!-- 注册窗口 -->
      <div id="register" class="modal fade" tabindex="-1" aria-hidden="true" data-backdrop="static">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-body">
                      <button class="close" data-dismiss="modal">
                          <span>&times;</span>
                     </button>
                </div>
                  <div class="modal-title">
                    <h1 class="text-center">注册</h1>
                </div>

        <div id="show" style="display:none" class="alert alert-danger"></div>

                 <div class="modal-body">
                      <!-- <form class="form-group" action="<?php echo e(url('home/login/register')); ?>" method="post"> -->
                 
                              <?php echo e(csrf_field()); ?>

                              <div class="form-group">
                                  <label for="">用户名</label>
                                 <input id="rname" class="form-control" name="username" type="text" placeholder="6-15位字母或数字">
                              </div>
                             <div class="form-group">
                                <label for="">密码</label>
                                  <input id="rpass" class="form-control" name="password" type="password" placeholder="至少6位字母或数字">
                             </div>
                              <div class="form-group">
                                  <label for="">再次输入密码</label>
                                  <input id="repass" class="form-control" name="repass" type="password" placeholder="至少6位字母或数字">
                              </div>
                              <div class="form-group">
                                  <label for="">邮箱</label>
                                  <input id="email" class="form-control" name="email" type="email" placeholder="例如:123@123.com">
                              </div>
                                <!-- <div class="form-group has-feedback">
                                <input id="code" type="text" name="code" class="form-control" placeholder="请输入验证码">
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                <a onclick="javascript:re_captcha();" ><img src="<?php echo e(URL('kit/captcha/1')); ?>"  alt="验证码" title="刷新图片" width="100" height="40" id="c2c98f0de5a04167a9e427d883690ff6" border="0"></a>
                              </div> -->
                              <div class="text-right">
                                  <button id="subs" class="btn btn-primary" type="">提交</button>
                                  <button class="btn btn-danger" data-dismiss="modal">取消</button>
                              </div>
                              <a href="" data-toggle="modal" data-dismiss="modal" data-target="#login">已有账号？点我登录</a>
                      <!-- </form> -->
                  </div>
              </div>
          </div>
      </div>
      <!-- 登录窗口 -->
    <div id="login" class="modal fade" aria-hidden="true" data-backdrop="static">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-body">
                      <button class="close" data-dismiss="modal">
                          <span>&times;</span>
                      </button>
                  </div>
                  <div class="modal-title">
                     <h1 class="text-center">登录</h1>                  
                  </div>
                  <div class="modal-body">
                  <?php if(session('info')): ?>
              <div class="alert alert-danger">
                <?php echo e(session('info')); ?>

              </div>
            <?php endif; ?>
                <!-- <form class="form-group" action="<?php echo e(url('home/login/login')); ?>" method="post"> -->
                <!-- <form class="form-group" onsubmit="return doSubmit()" action="" method="post"> -->
                          <?php echo e(csrf_field()); ?>

                   <label for="" >用户名</label>
                   <input id='username' class="form-control" type="text" placeholder="请输入用户名" name="username">
                   </div>
                   <div class="form-group">
                    <label for="">密码</label>
                    <input id="password" class="form-control" type="password" placeholder="请输入密码" name="password">
                    </div>
                   <div class="text-right">
                   <div class="checkbox icheck">
                  <label>
                  <input name="remember_me" type="checkbox">记住我
                  </label>
                  </div>
                       <button id="btns" class="btn btn-primary" type="">登录</button>
                      <!-- <input type="" id="bts" class="btn btn-primary" value="登录">
                        --><button class="btn btn-danger" data-dismiss="modal">取消</button>
                  </div>                             
                  <a href="" data-toggle="modal" data-dismiss="modal" data-target="#register">还没有账号？点我注册</a>
                <!-- </form>                  -->
            </div>
         </div>
      </div>
   </div>
    <script  src="/leiphone/js/jquery-3.2.1.min.js"></script>
   
    <script  src="/leiphone/js/bootstrap.min.js"></script>
   
    <link href="/leiphone/css/bootstrap.min.css" rel="stylesheet">

    <script  src="/leiphone/js/tips.js"></script>
    <script src="/leiphone/js/jquery-sea.js"></script>
    <script src="/leiphone/js/sea.js"></script>
   
    <script  src="/leiphone/js/aq_auth.js"></script>
    <script  src="js/9052.js"></script>
   
   
   
    <script src="/leiphone/js/list.js"></script>
    <script  src="/leiphone/js/mobilecheck.js"></script>
    <script  src="/leiphone/js/com_banner.js"></script>
   
    <script  src="/leiphone/js/global.js"></script>
    <script  src="/leiphone/js/index.js"></script>
    <script  src="/leiphone/js/calendarNews.js"></script>  
   <script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

  
    $('#btns').click(function(){


      var username = $('#username').val();
      var password = $('#password').val();
      $.ajax('/home/login/ajaxlogin',{
      type:'post',
      data:{username:username,password:password},
      dataType:'json',
      success:function(data)
      {
        if(data == '0')
        {
          alert('恭喜,登录成功');
          location.href = '/home/layout';
          // $('#hidd').hide();
        }
        if(data == '1')
        {
          alert('用户名不正确');
        }
        if(data == '2')
        {
          alert('密码不正确');
        } 
      },
      error:function(data)
      {
        alert('数据异常');
      }
      });
    });

     $('#subs').click(function(){
      var rname = $('#rname').val();
      var rpass = $('#rpass').val();
      var repass = $('#repass').val();
      var email = $('#email').val();
      $.ajax('/home/login/register',{
      type:'post',
      data:{username:rname,password:rpass,repwd:repass,email:email},
      dataType:'json',
      success:function(data)
      {
        if(data == '0' )
        {
          alert('恭喜您.注册成功');
          location.href = '/home/layout';
        }
      },
      error: function(msg) {
      var username1=JSON.parse(msg.responseText).username;
      var password1=JSON.parse(msg.responseText).password;
      var email1=JSON.parse(msg.responseText).email;
      username1 = username1 == undefined ? '' : username1;
      password1 = password1 == undefined ? '' : password1;
      email1 = email1 == undefined ? '' : email1;
     
      $('#show').css('display','block');

      $('#show').html(username1+','+password1+','+email1);
       
     
      },
      });
    });

   </script>
  

<!--下面是模板标签，不可删除-->

<main class="wrapper page-search" id="main">
    <div class="container">
        <section class="crumbs clearfix">
            <a data-mtype="store_list_mbx_index" href="<?php echo e(url('/home/shop/index')); ?>">首页</a> &nbsp;&gt;&nbsp;
            <span class="crumbs-level" id="crumbsLevel" data-mtype="">
                全部商品
            </span>
        </section>

            <section class="brand" id="brand" style="display: none"></section>

        <section class="selector" id="selector">
            <!--  分类部分 start -->
                   <div class="sl-category" id="slCategory">
                    <div class="sl-line-wrap">
                        <div class="mod-key">分类：</div>
                        <div class="mod-value">
                            <div class="mod-value-list">
                                <ul>
                                <?php $__currentLoopData = $data1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="ids" style="display:none"><?php echo e($val->id); ?></li>
                                            <li class="name"><a href="#"><?php echo e($val->name); ?></a>
                                               
                                            </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                       

                            <div class="mod-ext">
                                <a class="sl-e-more J_extMore" href="javascript:;" data-mtype="store_list_fl_more_1" style="">更多<i></i></a>
                            </div>
                    </div>
                   </div>
                   <div class="sl-prop" id="slProp">
                        <div class="sl-line-wrap">
                            <div class="mod-key"><span>品牌：</span></div>
                            <div class="mod-value">
                                <div class="mod-value-list">
                                    <ul>
                                           <li class="vm-all">
                                                <a title="全部" data-value="96:1,18951,884,18518,17898,17899,885,14257,20712,19410,881,882,883,17512,17513,19308,9159,1717,19539,11755,874,18439,876,877,871,872,19603,17984,20730,18266,18361,20697,7806,20498,19381,18070,18669,19791,20312,19747,886,879,880,875,20516,873,11236,18932,18107,17910,11292,17848,20270,19713,19309,19646,20011,20737,19088,20060,20061,20071,20250,20702,21099,21159,21326,22331,22428" data-mtype="store_list_xf_1_all" href="javascript:;">全部</a>
                                           </li> 
                                 
                                           <a href="#"><div class="abc"></div></a>
                                           
                                    </ul>
                                </div>
                            </div>
                                <div class="mod-ext">
                                    <a class="sl-e-more J_extMore" href="javascript:;" data-mtype="store_list_xf_1_more" style="">更多<i></i></a>
                                </div>

                        </div>
            </div>
          
        </section>

<section class="filter clearfix" id="filter" style="display:
    block">
    <div class="filter-order" id="J_filterOrder">
        <a class="active" data-tag="0" data-mtype="store_list_sx_1" href="javascript:void(0);">
            推荐
        </a>
        <a data-tag="1" data-mtype="store_list_sx_2" href="javascript:void(0);">
            新品
        </a>
        <a data-tag="2" data-mtype="store_list_sx_3" href="javascript:void(0);">
            价格<i class="icon-arrow-down"></i>
        </a>
    </div>
    <div class="filter-condition" id="J_filterCondition">
        <label class="bs-checkbox" data-mtype="store_list_sx_xz" >
            <i></i>仅显示有货商品
        </label>
    </div>
</section>
 

<section class="goods-list" id="goodsList">

        <ul class="goods-list-wrap clearfix ula" id="goodsListWrap" style="display:block"> 
             <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <li class="gl-item"  id="lis" data-init="0">
                    <a data-mtype="store_list_kw_24" target="_blank" href="<?php echo e(url('/home/shop/detail')); ?>/<?php echo e($val->id); ?>" title="">
                        <div class="gl-item-wrap">
                            <div class="mod-pic">
                                    <img width="220" height="220" class="lazy j-modProduct" src="/uploads/avatar/<?php echo e($val->picture); ?>">
                            </div>
                            <div class="item-slide j-pro-wrap">
                                <dl>
                                            <dd class="active" data-mtype="store_list_kw_24_clr_1" data-skuid="1608">
                                                <img width="40" height="40" class="lazy" src="/uploads/avatar/<?php echo e($val->picture); ?>">
                                            </dd>
                                </dl>
                            </div>

                            <div class="slide-btn j-modBtns">
                                <span data-mtype="store_list_kw_24_clr_l" class="prev iconfont disabled">&#xe65b;</span>
                                <span data-mtype="store_list_kw_24_clr_r" class="next iconfont">&#xe659;</span>
                            </div>


                                <h2><?php echo e($val->goodsName); ?></h2>
                                <h3 class="gray" title="虚胖还是真胖？乐心S5告诉你！">
                                虚胖还是真胖？乐心S5告诉你！
                                </h3>
                                <dd class="mod-price">
                                    <span>￥</span>
                                    <span class="vm-price"><?php echo e($val->price); ?></span>
                                </dd>
                        </div>
                    </a>
                </li> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </ul>

        <ul class="goods-list-wrap clearfix uls" id="goodsListWrap" style="display:none"> 
               
        </ul>
         <li class="gl-item"  id="lis" data-init="0" style="display:none">
                    <a class="path" data-mtype="store_list_kw_24" target="_blank" href="" title="">
                        <div class="gl-item-wrap">
                            <div class="mod-pic">
                                    <img width="220" height="220" class="lazy j-modProduct" src="">
                            </div>
                            <div class="item-slide j-pro-wrap">
                                <dl>
                                            <dd class="active" data-mtype="store_list_kw_24_clr_1" data-skuid="1608">
                                                <img width="40" height="40" class="lazy" src="">
                                            </dd>
                                </dl>
                            </div>

                            <div class="slide-btn j-modBtns">
                                <span data-mtype="store_list_kw_24_clr_l" class="prev iconfont disabled">&#xe65b;</span>
                                <span data-mtype="store_list_kw_24_clr_r" class="next iconfont">&#xe659;</span>
                            </div>


                                <h2></h2>
                                <h3 class="gray" title="虚胖还是真胖？乐心S5告诉你！">
                                虚胖还是真胖？乐心S5告诉你！
                                </h3>
                                <dd class="mod-price">
                                    <span>￥</span>
                                    <span class="vm-price"></span>
                                </dd>
                        </div>
                    </a>
                </li> 
</section>
<section class="empty clearfix" id="empty" style="display:none;">
    <div class="empty-bd">
        <div class="empty-bd-pic"></div>
        <div class="empty-bd-info">
            <h4 class="yahei">抱歉没有找到相关商品</h4>
            <p>建议您：<br/>
                1.适当减少筛选条件<br/>
                2.尝试其他关键字
            </p>
        </div>
    </div>
</section>
 

            <section class="more-brands" style="display: none"></section>
            <section class="list-floorad" style="display: none"></section>

    <div class="home-hot mzcontainer">
    <div class="home-hot-header clearfix">
        <div class="home-hot-title">热品推荐</div>
        <div class="home-hot-ctrl clearfix">
            <div class="home-hot-ctrl-btn disabled" id="homeHotCtrlPrev" data-mtype="store_main_rp_a" data-mdesc="">
                <i class="home-font prev1"></i>
            </div>
            <div class="home-hot-ctrl-btn disabled" id="homeHotCtrlNext" data-mtype="store_main_rp_b" data-mdesc="">
                <i class="home-font next1"></i>
            </div>
        </div>
    </div>
    <div class="home-hot-content lazyload" id="homeHotContent" style="width:1241px;position: relative; overflow: hidden;">

         <ul class="recommend-slider-wrap" id="uls" style=" position: absolute; width: 2482px;">
        <?php $__currentLoopData = $data2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="rs-item">
                            <a data-mtype="store_list_tj_1" class="rs-item-wrap" title="<?php echo e($val->goodsName); ?>"
                                   href="<?php echo e(url('/home/shop/detail')); ?>/<?php echo e($val->id); ?>"
                                target="_blank">
                                <div class="mod-pic">
                                        <img class="lazy" src="/uploads/avatar/<?php echo e($val->picture); ?>" width="180" height="180">
                                    </div>
                                <div class="mod-desc">
                                    <h4 class="vm-title"><?php echo e($val->goodsName); ?> </h4>
                                    <h6 class="vm-subtitle" title="6期免息  16G直降100元">6期免息  16G直降100元</h6>
                                    <p class="vm-price">
                                        <span>¥</span><span class="vm-price-text"><?php echo e($val->price); ?></span>
                                    </p>
                                </div>
                                    <span class="mod-sign" style="background-color: #f0415f;">
                                         特惠
                                    </span>
                            </a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        </ul>
    </div>
</div>
    </div>
</main>

<div  class="compare-bar"  id="compareBar"  style="position:fixed">
    <div  class="diff-bar"  id="diffBar">
        <div  class="diff-bar-title">
            <div  class="bar-title">
                <p>商品对比  (<span  class="bar-num"  id="barNum">0</span>/4)</p>
            </div>
            <div  class="operate" data-mtype="store_public_compare_close">
                <i  class="iconfont  icon-chahao  hide-me"></i>
            </div>
        </div>

        <div  class="diff-bd  tab-cons">
            <div  class="tab-con  clearfix"  id="tabCon"  style="display:  block">
                <div  class="diff-items"  id="diffItems">
                </div>
                <div  class="diff-operate"  id="diffOperate">
                    <a  href="javascript:void(0);"  id="J_btnCompare" class="btn  btn-primary  btn-lg" data-mtype="store_public_compare"><i></i>对比</a>
                    <a  href="javascript:void(0);"  id="J_compareClear" data-mtype="store_public_compare_delall">清空商品</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<footer class='yp-footer'> 
<!-- 友情链接，热门关键字 -->
 
<div class="wrapper">
<div class="tab_tit clr">

</div>
<div class="tab_con">
<ul>
<li class='cur'>
<a href="http://it.sohu.com/" target="_blank"></a>
</ul>
</div>
</div>
</div>

<div class="yp-footer-msg">
<div class="wrapper clr">
<!-- links -->
<div class="links" style="text-align:center">
<a rel="nofollow" href="https://www.leiphone.com/us/concact">联系我们</a>
<a rel="nofollow" href="https://www.leiphone.com/us/index">关于我们</a>
<a rel="nofollow" href="https://www.leiphone.com/news/201611/0nOqnvNoxI6vX4L9.html">加入我们</a>
<a rel="nofollow" href="https://www.leiphone.com/us/feedback">意见反馈</a>
<a rel="nofollow" href="https://www.leiphone.com/contribute/index">投稿</a>
</div>
<!-- 下载app -->
<div class="downLoad-app">
<div class="qrcode">
<!-- /site/download -->
<img src="/leiphone/picture/downcode.jpg" width="96" height="96" alt="" />
</div>
<div class="txt">
<p>下载雷锋网客户端</p>
<a rel="nofollow" href="https://itunes.apple.com/cn/app/lei-feng-wang-yi-dong-hu-lian/id579529120?mt=8" target="_blank" class='iPhone'><em></em>iPhone</a>
<a rel="nofollow" href="https://android.myapp.com/myapp/detail.htm?apkName=com.leiphone.app" target="_blank" class='Android'><em></em>Android</a>
</div>
</div>
<!-- 关注-->
<div class="contact">
<a rel="nofollow" href="mailto:web@leiphone.com " class='eml sub_a'><em></em></a>
<a rel="nofollow" href="https://www.weibo.com/p/1006062118746300" target="_blank" class='sina sub_a'><em></em></a>
</div>
</div>
</div>
<br/><br/><br/>
 
    <!-- copyRight -->
    <div class="yp-copyright">
        <div class="wrapper">
            <p>Copyright © 2011-2018 www.leiphone.com 雷锋网-移动互联网智能终端第一媒体 All Rights Reserved <a target="_blank" style="color:#9baab6;" href="https://www.miitbeian.gov.cn">粤ICP备11095991号-1</a>
                <img src="/leiphone/picture/anquan.png" alt="">
                &nbsp;&nbsp;
                <a href="http://szcert.ebs.org.cn/0ee69ac3-f114-4bd9-9ea1-a5a04f7cd44b" rel="nofollow" target="_blank"></a>
                                &nbsp;&nbsp;
                <a rel="nofollow" href="" target="_blank" style="color:#9baab6">ICP证粤B2-20150332</a>
                <a rel="nofollow" href="" target="_blank" rel="nofollow" style="float:right">
                    <img src="/leiphone/picture/hzs4.png">
                </a>
            </p>
        </div>
    </div> 
 
<script src="<?php echo e(asset('/home/meizu/js/layout-ca70dcecd0.js')); ?>" type="text/javascript"></script>

<script src="<?php echo e(asset('/home/meizu/js/search-08821fe9a8.js')); ?>"></script>
 <script type="text/javascript">

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.name').on('click',function(){

            var id = $(this).prev('.ids').html();
            // alert(id); 
            var name = $(this).html();
            // alert(name);
            // 执行ajax
            $.ajax('/home/shop/ajax',{
                type:'POST',
                data:{id:id},
                success:function(data){
                    // 声明空字符串。
                     // console.log(data);
                    var str = '';

                    // 遍历
                     $.each(data, function(i,n){  
                         str += "<li class='sgood' value="+n.id+">"+n.name+"</li>";
                     }); 
                    // 写入 li
                    $('.abc').html(str);
                },
                error:function(data){
                    alert('数据异常');
                }, 
                dataType: 'json'
            });
        });

        $('.sgood').live("click",function(){ 

            $('.uls').css('display','block');
            $('.ula').remove();

            // 删除克隆的li
            $('.uls').empty(); 

           var id = $(this).val(); 
             
            $.ajax('/home/shop/ajaxs',{
                type:'POST',
                data:{id:id},
                success:function(data){
                    // 声明空字符串。
                     // console.log(data); 

                    // 遍历
                     $.each(data, function(i,n){  
                        // console.log(n);
                        var newli = $('#lis').clone();
                        newli.find('img').attr('src',"/uploads/avatar/"+n['picture']);
                        newli.find('.path').attr('href',"/home/shop/detail/"+n['id']);  
                        newli.find('h2').html(n['goodsName']); 
                        newli.find('.vm-price').html(n['price']);

                        // 显示
                        newli.css('display', 'block'); 
                        $(".uls").append(newli); 
                     });  

                },
                error:function(data){
                    alert('数据异常');
                }, 
                dataType: 'json'
            });
        }) 
</script>
<script type="text/javascript">

        var os = '-';
        var inte = null;
        
        function run()
        {
            inte = setInterval(function(){
                // 获取 left
                var left = $('#uls').position().left;
                
                // 判断
                if(left <= -1241)
                {
                    os = '+';
                }

                if(left >= 0)
                {
                    os = '-';
                }

                $('#uls').animate({
                    'left': os+'=1241px'
                }, 500);

            }, 4000);

        }

        // 入口。
        run(); 
    </script>
 
    
</body>
    </html>
