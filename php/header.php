<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-lg-5">
        <a class="navbar-brand" href="http://localhost/web-diagnostico">Inicio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="http://localhost/web-diagnostico">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">Sobre nosotros</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">Contacto</a></li>
                <!--<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="signup.php">Signup</a></li>-->
                <?php if(!empty($user)): ?>
                <li class="nav-item"><a class="nav-link" href="#!" style="pointer-events: none"><?= $user['email']; ?></a></li>
                <li class="nav-item"><a class="nav-link" href="http://localhost/web-diagnostico/php/logout.php">Logout</a></li>
                <?php else: ?>
                <li class="nav-item"><a class="nav-link" href="http://localhost/web-diagnostico/login.php">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="http://localhost/web-diagnostico/signup.php">Signup</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>