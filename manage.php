<!doctype html>
<html>    
    <head>
        <title>Management Panel</title>
    </head>
<body>
    <div class="adminbar">
        [<a href="./">Home</a>] &nbsp; [<a href="./manage.php">Manage</a>]
    </div>
        <hr>
    <div class="header">
        Management Panel
    </div>
    <div class="modpanel">
        <form action="#" method="post">
            <table>
                <tbody>
                    <tr>
                        <th>Username:</th>
                        <td><input type="text" id="username" name="username"></td>
                    </tr>
                    <tr>
                        <th>Password:</th>
                        <td><input type="password" id="modpassword" name="modpassword"> &nbsp; <input type="submit" value="Go"></td>
                    </tr>
                </tbody>
            </table>
        </form>
        <?php

        ?>
    </div>
        <hr>
    <div class="footer">
        - Powered by Buyaka 0.0.0 -
    </div>
</body>
</html>