<!doctype html>
<html class="no-js fixed-layout">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>房屋租赁管理系统</title>
    <meta name="description" content="房屋租赁管理系统">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="{{asset('resources/assets/i/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('resources/assets/i/app-icon72x72@2x.png')}}">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="{{asset('resources/assets/css/amazeui.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('resources/assets/css/admin.css')}}"/>
    <script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/lib/jquery.js"></script>
    <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
    <script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/localization/messages_zh.js"></script>
    <link rel="stylesheet" href="{{asset('resources/assets/bootstrap_datepicker/dist/css/bootstrap-datepicker.css')}}"/>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.6/dist/vue.js"></script>
    <script src="https://cdn.staticfile.org/vue-resource/1.5.1/vue-resource.min.js"></script>
    <script src="{{asset('resources/assets/bootstrap_datepicker/dist/js/bootstrap-datepicker.js')}}"></script>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，我们暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
    以获得更好的体验！</p>
<![endif]-->

<header class="am-topbar am-topbar-inverse admin-header">
    <div class="am-topbar-brand">
        <strong>房屋租赁</strong> <small>后台管理系统</small>
    </div>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

        <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
            {{--<li><a href="javascript:;"><span class="am-icon-envelope-o"></span> 收件箱 <span class="am-badge am-badge-warning">5</span></a></li>--}}
            <li class="am-dropdown" data-am-dropdown>
                <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                    <span class="am-icon-users"></span> 管理员 <span class="am-icon-caret-down"></span>
                </a>
                <ul class="am-dropdown-content">
                    <li><a href="#"><span class="am-icon-user"></span> 资料</a></li>
                    <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
                    <li><a href="#"><span class="am-icon-power-off"></span> 退出</a></li>
                </ul>
            </li>
            <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
        </ul>
    </div>
</header>

<div class="am-cf admin-main">
    <!-- sidebar start -->
    <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
        <div class="am-offcanvas-bar admin-offcanvas-bar">
            <ul class="am-list admin-sidebar-list">
                <li><a href={{url('/')}}><span class="am-icon-home"></span> 首页</a></li>
                <li class="admin-parent">
                    <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}"><span class="am-icon-bars"></span> 功能 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
                    <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
                        <li><a href={{url('/registCompany')}}><span class="am-icon-institution"></span> 登记公司</a></li>
                        <li><a href={{url('/registEmployee')}}><span class="am-icon-male"></span> 登记雇员</a></li>
                        <li><a href={{url('/registBuilding')}}><span class="am-icon-building-o"></span> 登记大楼</a></li>
                        <li><a href={{url('/registRoom')}}><span class="am-icon-lemon-o"></span> 登记房间</a></li>
                        <li><a href={{url('/signContract')}}><span class="am-icon-file-o"></span> 签署合同</a></li>
                        {{--<li><a href="admin-gallery.html"><span class="am-icon-th"></span> 相册页面<span class="am-badge am-badge-secondary am-margin-right am-fr">24</span></a></li>--}}
                        {{--<li><a href="admin-log.html"><span class="am-icon-calendar"></span> 系统日志</a></li>--}}
                        {{--<li><a href="admin-404.html"><span class="am-icon-bug"></span> 404</a></li>--}}
                    </ul>
                </li>
                <li class="admin-parent">
                    <a class="am-cf" data-am-collapse="{target: '#collapse-nav-info'}"><span class="am-icon-folder-o"></span> 查看信息 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
                    <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav-info">
                        <li><a href="{{url('/companyList')}}"><span class="am-icon-institution"></span> 公司信息</a></li>
                        <li><a href="{{url('/employeeList')}}"><span class="am-icon-male"></span> 雇员信息</a></li>
                        <li><a href="{{url('/buildingList')}}"><span class="am-icon-building-o"></span> 楼宇信息</a></li>
                        <li><a href="{{url('/contractList')}}"><span class="am-icon-file-o"></span> 合同信息</a></li>
                    </ul>
                </li>
                {{--<li><a href="admin-table.html"><span class="am-icon-table"></span> 表格</a></li>--}}
                {{--<li><a href="admin-form.html"><span class="am-icon-pencil-square-o"></span> 表单</a></li>--}}
                {{--<li><a href="#"><span class="am-icon-sign-out"></span> 注销</a></li>--}}
            </ul>

            <div class="am-panel am-panel-default admin-sidebar-panel">
                <div class="am-panel-bd">
                    <p><span class="am-icon-bookmark"></span> 公告</p>
                    <p>做好管理,减低管理成本,赢取高额回报</p>
                </div>
            </div>

            <div class="am-panel am-panel-default admin-sidebar-panel">
                <div class="am-panel-bd">
                    <p><span class="am-icon-tag"></span> 每日名言</p>
                    <p>I have a dream!</p>
                </div>
            </div>
        </div>
    </div>
    <!-- sidebar end -->

    <!-- content start -->
@yield('content')
    <!-- content end -->

</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<!--[if lt IE 9]>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src={{asset('resources/assets/js/amazeui.ie8polyfill.min.js')}}""></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
{{--<script src={{asset('resources/assets/js/jquery.min.js')}}""></script>--}}
<!--<![endif]-->
<script src="{{asset('resources/assets/js/amazeui.min.js')}}"></script>
<script src="{{asset('resources/assets/js/app.js')}}"></script>
</body>
</html>
