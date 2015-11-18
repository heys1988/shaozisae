<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>index</title>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Bootstrap -->
    <link href="http://cdn.staticfile.org/twitter-bootstrap/2.3.2/css/bootstrap.min.css" rel="stylesheet" media="screen" type="text/css">
    <link rel="stylesheet" type="text/css" href="/css/todc-bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
</head>
<body>
    <div class="navbar navbar-static-top">
        <div class="navbar-inner">
            <div class="container">
                <ul class="nav">
                    <li class="active">
                        <a href="__APP__">首页</a>
                    </li>
                </ul>
                <ul class="nav" style="float:right" id="navLogin">
                    <li>
                        <a href="#myReg" data-toggle="modal">注册</a>
                    </li>
                    <li class="divider-vertical"></li>
                </ul>
                <!-- reg -->
                <div id="myReg" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h3 id="myModalLabel">注册</h3>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="post" action="<?php echo U('Index/reg');?>">
                            <div class="control-group">
                                <label class="control-label" for="inputEmail">用户名：</label>
                                <div class="controls">
                                    <input type="text" id="inputEmail" placeholder="手机号/用户名" name="username">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="inputPassword">密码：</label>
                                <div class="controls">
                                    <input type="password" id="inputPassword" placeholder="请输入密码" name="password">
                                </div>
                            </div><div class="control-group">
                            <label class="control-label" for="inputPassword">确认密码：</label>
                            <div class="controls">
                                <input type="password" id="inputPassword" placeholder="请输入密码" name="repassword">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputPermission">您是：</label>
                            <div class="controls">
                                <select id="inputPermission" placeholder="" name="permission">
                                    <option>

                                    </option>
                                    <option value="1">
                                        企业用户
                                    </option>
                                    <option value="2">
                                        学生用户
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <button type="submit" class="btn">注册</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
                </div>
            </div>
            <!-- login -->
            <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">登录</h3>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" method="post" action="<?php echo U('Index/login');?>">
                        <div class="control-group">
                            <label class="control-label" for="inputEmail">帐号：</label>
                            <div class="controls">
                                <input type="text" id="inputEmail" placeholder="手机号/用户名" name="username">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputPassword">密码：</label>
                            <div class="controls">
                                <input type="password" id="inputPassword" placeholder="请输入密码" name="password">
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <label class="checkbox">
                                    <input type="checkbox">记住我
                                </label>
                                <button type="submit" class="btn">登录</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="<?php echo U('Admin/index');?>" class="btn" style="float:left">管理员登录</a>
                    <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="container row">
        <div class="span12">
            <img src="/img/logo.png">
        </div>


        <div class="row">
            <div class="span3">
                <div>
                    <form class="form-search">
                        <input type="text" class="input-small" name="title"> <button type="submit" class="btn">查找</button>
                    </form>
                </div>
                <div>
                    <dl class="sidebar-filter">
                        <dt>
                            筛选
                        </dt>
                        <dd>
                            <a rel="" href="<?php echo U('Index/index?category=学生兼职');?>">学生兼职</a>
                        </dd>
                        <dd>
                            <a rel="" href="<?php echo U('Index/index?category=模特');?>">模特</a>
                        </dd>
                        <dd>
                            <a rel="" href="<?php echo U('Index/index?category=礼仪小姐');?>">礼仪小姐</a>
                        </dd>
                        <dd>
                            <a rel="" href="<?php echo U('Index/index?category=摄影师');?>">摄影师</a>
                        </dd>
                        <dd>
                            <a rel="" href="<?php echo U('Index/index?category=钟点工');?>">钟点工</a>
                        </dd>
                        <dd>
                            <a rel="" href="<?php echo U('Index/index?category=促销员');?>">促销员</a>
                        </dd>
                        <dd>
                            <a rel="" href="<?php echo U('Index/index?category=传单派发');?>">传单派发</a>
                        </dd>
                        <dd>
                            <a rel="" href="<?php echo U('Index/index?category=问卷调查');?>">问卷调查</a>
                        </dd>
                        <dd>
                            <a rel="" href="<?php echo U('Index/index?category=手工制作');?>">手工制作</a>
                        </dd>
                        <dd>
                            <a rel="" href="<?php echo U('Index/index?category=网站建设');?>">网站建设</a>
                        </dd>
                        <dd>
                            <a rel="" href="<?php echo U('Index/index?category=设计制作');?>">设计制作</a>
                        </dd>
                        <dd>
                            <a rel="" href="<?php echo U('Index/index?category=家教');?>">家教</a>
                        </dd>
                        <dd>
                            <a rel="" href="<?php echo U('Index/index?category=会计');?>">会计</a>
                        </dd>
                        <dd>
                            <a rel="" href="<?php echo U('Index/index?category=翻译');?>">翻译</a>
                        </dd>
                        <dd>
                            <a rel="" href="<?php echo U('Index/index?category=实习生');?>">实习生</a>
                        </dd>
                        <dd>
                            <a rel="" href="<?php echo U('Index/index?category=酒吧KTV');?>">酒吧KTV</a>
                        </dd>
                        <dd>
                            <a rel="" href="<?php echo U('Index/index?category=服务员');?>">服务员</a>
                        </dd>
                        <dd>
                            <a rel="" href="<?php echo U('Index/index?category=销售');?>">销售</a>
                        </dd>
                        <dd>
                            <a rel="" href="<?php echo U('Index/index?category=其他兼职');?>">其他兼职</a>
                        </dd>
                    </dl>
                </div>
            </div>
            <div class="span9">
                <ul class="inline new-info">
                    <li><a rel="" href="<?php echo U('Index/index');?>"><strong class="strong-style">全上海</strong></a></li>
                    <li><a rel="" href="<?php echo U('Index/index?address=黄浦');?>">黄浦</a></li>
                    <li><a rel="" href="<?php echo U('Index/index?address=静安');?>">静安</a></li>
                    <li><a rel="" href="<?php echo U('Index/index?address=卢湾');?>">卢湾</a></li>
                    <li><a rel="" href="<?php echo U('Index/index?address=徐汇');?>">徐汇</a></li>
                    <li><a rel="" href="<?php echo U('Index/index?address=长宁');?>">长宁</a></li>
                    <li><a rel="" href="<?php echo U('Index/index?address=闸北');?>">闸北</a></li>
                    <li><a rel="" href="<?php echo U('Index/index?address=普陀');?>">普陀</a></li>
                    <li><a rel="" href="<?php echo U('Index/index?address=虹口');?>">虹口</a></li>
                    <li><a rel="" href="<?php echo U('Index/index?address=杨浦');?>">杨浦</a></li>
                    <li><a rel="" href="<?php echo U('Index/index?address=浦东新区');?>">浦东新区</a></li>
                    <li><a rel="" href="<?php echo U('Index/index?address=闵行');?>">闵行</a></li>
                    <li><a rel="" href="<?php echo U('Index/index?address=松江');?>">松江</a></li>
                    <li><a rel="" href="<?php echo U('Index/index?address=宝山');?>">宝山</a></li>
                    <li><a rel="" href="<?php echo U('Index/index?address=嘉定');?>">嘉定</a></li>
                    <li><a rel="" href="<?php echo U('Index/index?address=青浦');?>">青浦</a></li>
                    <li><a rel="" href="<?php echo U('Index/index?address=奉贤');?>">奉贤</a></li>
                    <li><a rel="" href="<?php echo U('Index/index?address=南汇');?>">南汇</a></li>
                    <li><a rel="" href="<?php echo U('Index/index?address=金山');?>">金山</a></li>
                    <li><a rel="" href="<?php echo U('Index/index?address=崇明');?>">崇明</a></li>
                </li>
            </ul>
                <ul class="inline new-info">
                    <li><a rel="" href="<?php echo U('Index/index');?>"><strong class="strong-style">大学城</strong></a></li>
                    <li><a rel="" href="<?php echo U('Index/index?address=松江大学园区');?>">松江大学园区</a></li>
                    <li><a rel="" href="<?php echo U('Index/index?address=杨浦大学园区');?>">杨浦大学园区</a></li>
                    <li><a rel="" href="<?php echo U('Index/index?address=闵行大学园区');?>">闵行大学园区</a></li>
                    <li><a rel="" href="<?php echo U('Index/index?address=奉贤大学园区');?>">奉贤大学园区</a></li>
                    <li><a rel="" href="<?php echo U('Index/index?address=临港大学园区');?>">临港大学园区</a></li>
                    <li><a rel="" href="<?php echo U('Index/index?address=金桥大学园区');?>">金桥大学园区</a></li>
                    <li><a rel="" href="<?php echo U('Index/index?address=南汇大学园区');?>">南汇大学园区</a></li>
                    <li><a rel="" href="<?php echo U('Index/index?address=上海大学园区');?>">上海大学园区</a></li>
                    <li><a rel="" href="<?php echo U('Index/index?address=张江大学园区');?>">张江大学园区</a></li>
                </li>
            </ul>            
            <h5 class="new-info">
                赞助商链接
            </h5>
            <div>
                <ul class="inline">
                    <li><img  title="全国高校毕业生夏季招聘月" src="http://u.img.huxiu.com/portal/201308/22/191123opp3f11kyx9yuuro.jpg.thumb.jpg"></li>
                    <li><img  title="全国高校毕业生夏季招聘月" src="http://u.img.huxiu.com/portal/201308/22/184055gl5bgg45vk5b51m4.jpg.thumb.jpg"></li>
                    <li><img  title="玛氏-箭牌2013创意策划大赛" src="http://u.img.huxiu.com/portal/201308/22/111747sw06wln0swi9eelq.jpg.thumb.jpg"></li>
                    <li><img  src="http://u.img.huxiu.com/portal/201308/22/100158l9z9a7cj9d7rraey.jpg.thumb.jpg"></li>
                    <li><img  title="EMC2013爱存储在线知识竞赛" src="http://u.img.huxiu.com/portal/201308/21/164258kxkv33gxkwn333w3.png.thumb.jpg"></li>
                    <li><img  title="招商银行信用卡中心2013校园招聘及实习生招聘" src="http://u.img.huxiu.com/portal/201308/21/115505yvy0mzmvknygv0rk.jpg.thumb.jpg"></li>

                </ul>

            </div>
            <h5 class="new-info">
                最新信息
            </h5>
            <div>
                <ul class="unstyled">
                    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="info-li-style">
                            <a href="__APP__/Detail/index/id/<?php echo ($vo["id"]); ?>" class="media-cap"><img src="/img/photo_64.jpg"></a>
                            <div>
                                <div>
                                    <a href="__APP__/Detail/index/id/<?php echo ($vo["id"]); ?>" class="media-body-title"><?php echo ($vo["title"]); ?></a>
                                    <span class="media-body-time"><?php echo ($vo["date"]); ?></span>
                                </div>
                                <div class="media-body-address"><?php echo ($vo["address"]); ?> - <?php echo ($vo["detailaddress"]); ?></div> 
                                <div class="media-body-pay"><?php echo ($vo["pay"]); ?>元/天</div>
                            </div>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <div class="pagination">
                <?php echo ($page); ?>
            </div>
        </div>
    </div>
</div>
       
<script src="http://cdn.staticfile.org/jquery/1.10.2/jquery.min.js" type="text/javascript">
</script>
<script src="http://cdn.staticfile.org/twitter-bootstrap/2.3.2/js/bootstrap.min.js" type="text/javascript">
</script>
<script type="text/javascript">
$(function(){
    var name="<?php echo ($usr); ?>";
    var permission="<?php echo ($permission); ?>";
    if(!name){
        $("<li>",{
            "html":"<a href='#myModal' data-toggle='modal'>登录</a>"
        }).appendTo("#navLogin");
        return 
    }  
    $("<li>",{
        "html":"<a href='javascript:'><?php echo ($usr); ?></a>"
    }).appendTo("#navLogin");
    $("<li>",{
        "class":"divider-vertical"
    }).appendTo("#navLogin");
    if(permission==2){
        $("<li>",{
            "html":"<a href='javascript:'><?php echo ($jifen); ?><small> 积分</small></a>"
        }).appendTo("#navLogin");
        $("<li>",{
            "class":"divider-vertical"
        }).appendTo("#navLogin");
        $("<li>",{
            "html":"<div class=\"btn-group\">"
            +"<button class=\"btn\" onclick=\"window.location.href='<?php echo U('Index/sign');?>';\">签到</button>"
            +"<button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">"
            +"<span class=\"caret\"></span>"
            +"</button>"
            +"<ul class=\"dropdown-menu\">"
            +"<li>"
            +"<a href=\"<?php echo U('Index/userinfo');?>\">个人信息</a>"
            +"</li>"
            +"<li>"
            +"<a href=\"<?php echo U('Index/logout');?>\">退出登录</a>"
            +"</li>"
            +"</ul>"
            +"</div>"
        }).appendTo("#navLogin");
    }
    if(permission==1){
        $("<li>",{
            "html":"<div class=\"btn-group\">"
            +"<button class=\"btn\" onclick=\"window.location.href='<?php echo U('Publish/index');?>';\">发布招聘信息</button>"
            +"<button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">"
            +"<span class=\"caret\"></span>"
            +"</button>"
            +"<ul class=\"dropdown-menu\">"
            +"<li>"
            +"<a href=\"<?php echo U('Index/logout');?>\">退出登录</a>"
            +"</li>"
            +"</ul>"
            +"</div>"
        }).appendTo("#navLogin");
    }

})

</script>
</body>
</html>