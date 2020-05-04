


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="chklogin.php" method="post">
        <table>
            <tr>
                <td colspan="2">
                    <?php
                        if(isset($_GET['status'])){
                            if($_GET['status']=='false'){
                            echo "帳號密碼錯誤";
                        }
                    }
?>

                </td>
            </tr>
            <tr>
                <td>Account:</td>
                <td> <input type="text" name="acc" id="acc"></td>
            </tr>
            <tr>
                <td> Password:</td>
                <td><input type="password" name="pw" id="pw"></td>
            </tr>
            <tr>

                <td><button type="submit" value="login">Login</button></td>
                <td><button type="reset" value="reset">Reset</button></td>
            </tr>
        </table>
    </form>

</body>

</html>