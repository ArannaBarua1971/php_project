
<?php
    session_start();
    include_once 'inc/login_register_header.php';
?>

    <div class="toast show <?= empty($_SESSION['show']) ? '':$_SESSION['show']?>" role="alert"aria-live="assertive" aria-atomic="true">
        <div class="toast-header bg-success">
            <strong class="me-auto text-light">success</strong>
            <small>1 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"><button>
        </div>
        <div class="toast-body">
            yes , your account is created
        </div>
    </div>

    <div class="wrapper bg-white">
        <div class="h2 text-center">Creativity</div>
        <div class="h4 text-muted text-center pt-2">Enter your login details</div>
        <form class="pt-3">
            <div class="form-group py-2">
                <div class="input-field"> <span class="far fa-user p-2"></span> <input type="text"
                        placeholder="Username or Email Address" required class=""> </div>
            </div>
            <div class="form-group py-1 pb-2">
                <div class="input-field"> <span class="fas fa-lock p-2"></span> <input type="text"
                        placeholder="Enter your Password" required class=""> <button class="btn bg-white text-muted">
                        <span class="far fa-eye-slash"></span> </button> </div>
            </div>
            <div class="d-flex align-items-start">
                <div class="ml-auto"> <a href="#" id="forgot">register now?</a> </div>
            </div> <button class="btn btn-block text-center my-3">Log in</button>
        </form>
    </div>

<?php
    include_once 'inc/login_register_footer.php'
?>