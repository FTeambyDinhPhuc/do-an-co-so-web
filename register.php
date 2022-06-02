<?php
include 'header.php';
?>
<div id="authenForm">
    <div class="container-authenForm shadow">
        <input type="checkbox" id="flip" />
        <div class="cover">
            <div class="front">
                <img src="assets/img/authenbackgroundImage.jpg" alt="" />
            </div>
        </div>
        <form>
            <div class="form-content">
                <div class="signup-form">
                    <div class="title">Signup</div>
                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="fas fa-user"></i>
                            <input type="text" placeholder="Enter your name" required />
                        </div>
                        <div class="input-box">
                            <i class="fas fa-envelope"></i>
                            <input type="email" placeholder="Enter your email" required />
                        </div>
                        <div class="input-box">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Enter your password" required />
                        </div>
                        <div class="input-box">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Confirm password" required />
                        </div>
                        <div class="button input-box">
                            <input type="submit" value="Sumbit" />
                        </div>
                        <div class="text login-text">
                            Already have an account? <a href="login.php">Login now</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
include 'footer.php';
?>