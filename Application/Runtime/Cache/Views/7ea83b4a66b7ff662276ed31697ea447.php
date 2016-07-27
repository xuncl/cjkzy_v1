<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="Page Description">
<meta name="author" content="CLEVO">

<!--通过模板包含来传递参数时用中括号[]-->
<title>模板包含</title>

<!-- Bootstrap -->
<link href="/cjkzy_v1/Public/css/bootstrap.min.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="/cjkzy_v1/Public/js/html5shiv.js"></script>
<script src="/cjkzy_v1/Public/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">主页</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
        </ul>
        <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">主题 <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="/cjkzy_v1/index.php/Index/index/t/default.html">默认主题</a></li>
                    <li><a href="/cjkzy_v1/index.php/Index/index/t/xcl.html">XCL主题</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>

<div class="container">

    <div class="alert alert-warning">
    	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    	<strong>默认</strong> 默认主题
    </div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>姓名</th>
            <th>姓名（原生表达式）</th>
            <th>年龄</th>
            <th>计算年龄</th>
            <th>手机</th>
            <th>项目目录</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>XUNChenlong</td>
            <td>XUN Chenlong</td>
            <!--<td></td>-->
            <!--运算时数组应使用索引方式调用-->
            <td>27</td>
            <td>28</td>
            <td>没有手机号</td>
            <td>C:/wamp/www/</td>
        </tr>
        </tbody>
    </table>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/cjkzy_v1/Public/js/jquery-1.11.1.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/cjkzy_v1/Public/js/bootstrap.min.js"></script>

<!--import-->
<script type="text/javascript" src="/cjkzy_v1/Public/js/jquery-1/11/1.js"></script>

<!--load-->
<script type="text/javascript" src="/cjkzy_v1/Public/js/bootstrap.min.js"></script>

<!--css-->
<link rel="stylesheet" type="text/css" href="/cjkzy_v1/Public/css/bootstrap.css" />

<!--js-->
<script type="text/javascript" src="__pub__/js/bootstrap.min.js"></script>
</body>
</html>