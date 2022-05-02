<?php require_once "functions.php"; ?>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-target">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                </svg>
                HDTELH</a>
        
        <div class="nav-bar item" id="navbar-collapse-target">
            <?php if (isUserConnected()) { ?>
                <ul class="nav navbar-nav">
                    <li><a href="histoire_add.php">Ajouter une histoire</a></li>
                </ul>
            <?php } ?>
            <ul class="nav navbar-nav navbar-right">
                <?php if (isUserConnected()) { ?>
                    <li class="container">
                        <a href="#" class="navbar-item" >
                            <span class="glyphicon glyphicon-user"></span> Bienvenue, <?= $_SESSION['login'] ?> <b class="caret"></b>
                        </a>
                        <ul class="navbar-item">
                            <li><a href="logout.php">Se déconnecter</a></li>
                        </ul>
                    </li>
                <?php } else { ?>
                    <li class="container">
                        <ul class="navbar-item">
                            <li><a href="login.php">Se connecter</a></li>
                        </ul>
                        <ul class="navbar-item">
                            <li><a href="register.php">S'incrire</a></li>
                        </ul>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div><!-- /.container -->
</nav>
<br/>
