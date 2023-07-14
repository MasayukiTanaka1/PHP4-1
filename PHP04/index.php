<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            background: #f5f5f5;
            font-family: 'Noto Sans JP', sans-serif;
        }

        .navbar {
            background: #333;
        }

        .navbar-brand {
            color: #fff;
        }

        .jumbotron {
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
        }

        input[type="submit"] {
            background: #007bff;
            border: none;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="login.php">ログイン</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="logout.php">ログアウト</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <div class="container mt-5">
        <form method="POST" action="insert.php">
            <div class="jumbotron">
                <fieldset>
                    <legend>フリーアンケート</legend>
                    <label>名前：<input class="form-control" type="text" name="name"></label><br>
                    <label>Email：<input class="form-control" type="text" name="email"></label><br>
                    <label>年齢：<input class="form-control" type="text" name="age"></label><br>
                    <label><textArea class="form-control" name="naiyou" rows="4" cols="40"></textArea></label><br>
                    <input type="submit" value="送信">
                </fieldset>
            </div>
        </form>
    </div>
    <!-- Main[End] -->
</body>

</html>