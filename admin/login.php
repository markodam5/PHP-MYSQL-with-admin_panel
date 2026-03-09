<?php

    if(isset($_POST['tbUsername']) && isset($_POST['tbPassword'])  ) {
       
        $username = $_POST['tbUsername'];
        $password = $_POST['tbPassword'];

        $username = str_replace("'","",$username);
        $username = str_replace("-","",$username);
        $password = str_replace("'","",$password);
        $password = str_replace("-","",$password);

        $q = "SELECT * FROM users_list WHERE username='{$username}' AND password=MD5('{$password}') LIMIT 1";
        $res = mysqli_query($conn, $q);

        if(mysqli_num_rows($res)){
            
            $_SESSION['username'] = $username;
            // header("Location: loggedin.php");
            
        }else{
            echo "<span style='color:red;'>Invalid account details!</span>";
        }

    }

?>

<?php
    if(!isset($_SESSION['username']) || $_SESSION['username'] == ''){
?>
    <div class="login">
        <h1>Login page</h1><br>
        <h3>User access data:</h3>
        <h4>username: admin - password: 1</h4>
        <form action="" method="post">
            <input type="text" name="tbUsername" placeholder="Username" size="25" required /><br>
            <input type="text" name="tbPassword" placeholder="Password" size="25" required/><br>
            <input type="submit" name="btnSubmit" value="Login"/>
        </form>
    </div>

</body>
</html>

<?php }else{ ?>
    <script>window.location="view_cars";</script>

<?php } ?>

