
<?php
    session_start();
    include_once 'inc/login_register_header.php';
?>

    <div class="toast  <?= empty($_SESSION['show']) ? '':$_SESSION['show']?>"  role="alert"aria-live="assertive" aria-atomic="true">
        <div class="toast-header bg-success">
            <strong class="me-auto text-light">success</strong>
            <small>1 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"><button>
        </div>
        <div class="toast-body">
            yes , your account is created
        </div>
    </div>

    <div class="wrapper bg-white mt-4">
        <div class="h2 text-center">Creativity</div>
        <div class="h4 text-muted text-center pt-2">Enter your login details</div>
        <form class="pt-3" action="controller/loginManagement.php" method="POST">
            <div class="form-group py-2">
                <div class="input-field"> 
                    <span class="far fa-user p-2"></span> 
                    <input name="email" type="email" placeholder="Username or Email Address" required class=""> 
                </div>
            </div>
            <div class="form-group py-1 pb-2">
                <div class="input-field"> 
                    <span class="fas fa-lock p-2"></span>
                    <input name="password" type="password" placeholder="Enter your Password" required class="" >
                </div>
            </div>
            <div class="d-flex align-items-start">
                <div class="ml-auto"> 
                    <a href="register.php" id="forgot">register now?</a> 
                </div>
                </div> <button class="btn btn-block text-center my-3">Log in</button>
        </form>
    </div>

<?php
    include_once 'inc/login_register_footer.php';
    session_unset();
?>