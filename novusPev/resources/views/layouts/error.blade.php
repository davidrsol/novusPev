<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato', sans-serif;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 150px;
                margin-bottom: 40px;
            }

            .error {
                font-size: 72px;
                margin-bottom: 40px;
            }

            .message{
                font-size: 20px;
                width: 60%;
                display: inline-block;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">@yield('message_effect')</div>
                <div class="error">@yield('error_number')</div>
                <div class="message">@yield('message_content')</div>               
            </div>
        </div>
    </body>
</html>

