
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            .form{
                border: 2px solid #ccf;
                width: 350px;
                display: block;
                margin: auto;
            }

            

        </style>
    </head>
    <body>
        <h1>註冊會員</h1>
        <form action="add_user.php" method="POST">
            <div><label for="acc" >使用者帳號</label><input type="text" name="acc" value=""></div>
            <div><label for="pw" >設定密碼</label><input type="password" name="pw" value=""></div>
            <div><label for="name" >使用者姓名</label><input type="text" name="name" value=""></div>
            <div><label for="email" >email:</label><input type="text" name="email" value=""></div>
            <div><label for="tel" >手機:</label><input type="text" name="tel" value=""></div>
            <div><label for="birthday" >生日:</label><input type="date" name="birthday" value=""></div>
            <p><input type="submit" name="submit" value="註冊"></p>
        </form>
</body>
</html>