<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
</head>

<body>
if(isset($_GET['logout']))
    <form action="chklogin.php" method="post">
        <table>
            <tr>
                <td colspan="2">
                    <?php
                    $showlogin = true;
                    if (isset($_COOKIE['status'])) {
                        switch ($_COOKIE['status']) {
                            case 'false';
                                echo "帳號密碼錯誤";
                                break;
                            case 'true':
                                echo "get=" . $_COOKIE['id'];
                                $showlogin = false;
                                // header("location:list_user.php?id="
                                //     . $_COOKIE['id']);
                                break;
                        }
                    }
                    ?>

                </td>
            </tr>
            <?php
            if ($showlogin == true) {
            ?>
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
            <?php

            } else {
                echo "<tr><td colspan='2'>";
                echo "你已登入";
                echo "</tr></td>";
               
                echo "<tr><td colspan='2'>";
                echo "<a href='login.php?logout=1'> 登出</a>";
                echo "</tr></td>";
            }
            ?>
        </table>
    </form>

</body>

</html>