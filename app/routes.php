<?php

/*
 * 路由加载
 *
 * 使用 Router::get
 *      Router::post
 *      Router::put
 *      Router::delete
 * 
 * 参数
 * 第一个 路由uri
 * 第二个 该路由对应的控制器以及处理操作 或者回调函数
 */

Router::get('/', 'PagesController@index');

Router::get('/document', function(){

    $document = htmlspecialchars(file_get_contents('README.md'));

    return view('app/pages/document',compact('document'));
});

Router::get('/about/developer', function(){
    $html =<<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>关于开发人员</title>

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway';
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 64px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md links">
            关注 Mini框架 享受编码乐趣
            <a href="http://github.com/ypwu" class="flex-center">@ypwu</a>
        </div>
    </div>
</div>
</body>
</html>

HTML;
    echo $html;
});
