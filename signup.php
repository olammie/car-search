<?php
    include_once 'header.php';
?>


<section class="main-container">
    <div class="main-wrapper">
        <h2>Sign Up</h2>
        <form class="signup-form" action="includes/signup.inc.php" method="POST">
        <input type="text" name="first" placeholder="firstname">
        <input type="text" name="last" placeholder="lastname">
        <input type="text" name="email" placeholder="E-mail">
        <input type="text" name="uid" placeholder="username">
        <input type="password" name="pwd" placeholder="password">
        <input type="password" name="pwd" placeholder="confirm-password">
        <button type="submit" name="submit">Sign Up</button>
        <p>Already a user?<a href="login.php">Log in</a></p>
        </form>
    </div>
</section>








<?php
    include_once 'footer.php';
?>