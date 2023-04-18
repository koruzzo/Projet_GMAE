<header>

    <div class="section_logo">
        <a href="../index.php">
        <img src="../public/logo_GMAE-1.png" class="logo_header">
        </a>

        <p> Bonjour     
            <?php if (isset($_SESSION['user'])): ?>
                <?= $_SESSION['user']['username'] ?>
            <?php endif ?>
            <?php if (isset($_SESSION['admin'])): ?>
                <?= $_SESSION['admin']['username'] ?>
            <?php endif ?> 
        </p>


    </div>
    <div>
        <?php if (isset($_SESSION['user'])): ?>
            <a href="../view/User.php"><i class="bi bi-person-circle responsive_i1"> Modifier votre profil</i></a>
        <?php endif ?>
        <a href="../view/dashboard.php"><i class="bi bi-person-circle responsive_i1"> Dashboard</i></a>
        <i class="bi bi-person-circle responsive_i2"></i>
        <a href="../model/logout.php"><i class="bi bi-power text-danger" ></i></a>
    </div>

</header>