<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="layui-container">  
                  常规布局（以中型屏幕桌面为例）：
                  <div class="layui-row">
                    <div class="layui-col-md9">
                      你的内容 9/12
                    </div>
                    <div class="layui-col-md3">
                      你的内容 3/12
                    </div>
                  </div>
                   
                  移动设备、平板、桌面端的不同表现：
                  <div class="layui-row">
                    <div class="layui-col-xs6 layui-col-sm6 layui-col-md4">
                      移动：6/12 | 平板：6/12 | 桌面：4/12
                    </div>
                    <div class="layui-col-xs6 layui-col-sm6 layui-col-md4">
                      移动：6/12 | 平板：6/12 | 桌面：4/12
                    </div>
                    <div class="layui-col-xs4 layui-col-sm12 layui-col-md4">
                      移动：4/12 | 平板：12/12 | 桌面：4/12
                    </div>
                    <div class="layui-col-xs4 layui-col-sm7 layui-col-md8">
                      移动：4/12 | 平板：7/12 | 桌面：8/12
                    </div>
                    <div class="layui-col-xs4 layui-col-sm5 layui-col-md4">
                      移动：4/12 | 平板：5/12 | 桌面：4/12
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </body>
</html>
