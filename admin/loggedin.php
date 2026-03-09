<?php

if(!isset($_SESSION['username']) || $_SESSION['username'] == '' ){
    ?>
    <script>window.location="login";</script>
    <?php
}
    
?>

    <div class="loggedin">
        <h3><span style="font-size:25px; "><?php echo $_SESSION['username']; ?></span> you are loggedin</h3>
        <a href="logout">Logout</a>
    </div>

</body>
</html>
