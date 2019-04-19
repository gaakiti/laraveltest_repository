<html>
    <head>
        <style>
            body{font-size:16pt; color:#999;}
            h1{font-size:120pt;text-align:right; color:#fafafa;}
        </style>
    </head>
    <body>
        <h1>Hello</h1>
        <p>{{$msg}}</p>
        <form method="POST" action="/hello">
            <!--csrf対策　トークン-->
            {{ csrf_field() }}
            <input type="text" name="msg">
            <input type="submit">
        </form>
    </body>
</html>