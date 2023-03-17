<!doctype html>
<html>    
    <head>
        <title>Random</title>
		<link rel="stylesheet" href="../files/css/burichan.css">
    </head>
<body>
    <div class="adminbar">
        [<a href="../">Home</a>] &nbsp; [<a href="../manage.php">Manage</a>]
    </div>
        <hr>
    <div class="header">
        Random
    </div>
        <hr>
    <div class="postform">
    <form action="post.php" method="post" enctype="multipart/form-data">
        <table>
            <tbody>
                <tr>
                    <th>Name:</th>
                    <td><input type="text" placeholder="Anonymous" id="name" name="name"></td>
                </tr>
                <tr>
                    <th>Email:</th> 
                    <td><input type="text" id="email" name="email"></td>
                </tr>
                <tr>
                    <th>Subject:</th> 
                    <td><input type="subject" id="subject" name="subject"> &nbsp; <input type="submit" name="submit" value="Submit"></td>
                </tr>
                <tr>
                    <th>Message:</th> 
                    <td><textarea name="message" cols="48" rows="4"></textarea></td>
                </tr>
                <tr>
                    <th>File:</th>
                    <td><input type="file" id="file" name="file"></td>
                </tr>
                <tr>
                    <th>Password:</th> 
                    <td><input type="password" id="password" name="password"> (for deleting posts)</td>
                </tr>
            </tbody>
        </table>
    </form>
    </div>
        <hr>
    <div class="threads">
        <?php
			include "../inc/settings.php";
            
			$resultThreads = mysqli_query($db, "SELECT * FROM posts_b");
			
			while($row = mysqli_fetch_array($resultThreads)) {
				echo '<div class="oppost"> <br> File: ' . $row["file"] . '<br> <img src="src/' . $row["file"] . '" width="200px" height="200px"> <form action="post.php"> <input type="checkbox" id="postaction" name="postaction"> </form> ' . $row["subject"] . ' ' . $row["name"] . ' ' . $row["date"] . ' No. ' . $row["id"] . ' <p> ' . $row["message"] . ' </p> <hr> </div>';
			}
			
        ?>
    </div>
        <hr>
    <div class="delete">
        <table>
            <tbody>
                <tr>
                    <th>Delete:</th>
                    <td><input type="text" id="delete" name="delete"> &nbsp; <input type="submit" value="Submit"></td>
                </tr>
                <tr>
                    <th>Report:</th>
                    <td><input type="text" id="report" name="report"> &nbsp; <input type="submit" value="Submit"></td>
                </tr>
            </tbody>
        </table>
    </div>
        <hr>
    <div class="pages">
        Pages:
    </div>
        <hr>
    <div class="footer">
        - Powered by Buyaka 0.0.0 -
    </div>
</body>
</html>