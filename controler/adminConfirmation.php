<div class = "title">
        
<h1>Login</h1>

   <form action="logincontroller.php" method="POST">
     <input name="username" placeholder="Username" > 
    <br /><br style="line-height:1vh"/>
    <input type="password" name="pssword" placeholder="Password">
    <br /><br style="line-height:1vh"/>
    <input type="submit" value="Login"/>
    <?php   if($error):?>
        <br/>Please enter a correct username and password.
    <?php endif ?>
 </form>
</div>
