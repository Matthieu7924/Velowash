<div class="lay1">
    <div class="lay11">
        <img src="../PUBLIC/assets/moon.png" id="icon">
        <div class="dh">
            <div id="date"></div>
            <div id="heure"></div>
        </div>
    </div>
    <div class="layup">
        <?php
        if (isset($_SESSION['login'])) { ?>
            <div class="lay16">
                <p class="lay161 login"><?= $_SESSION['login'] ?></p>
                <a class="lay161 deco" href="/?page=session">Ma page</a>
                <a class="lay161 deco" href="/?page=fichiers">Mes fichiers</a>
                <a class="lay161 deco" href="/?page=forum">Forum</a>
                <a class="lay161 deco" href="/?page=deconnexion">Se déconnecter</a>
            </div>
        <?php
        } else {
        ?>
            <div class="lay12">
                <?php require_once("menuConnex.php"); ?>
            </div>
        <?php
        }
        ?>
        <?php

        if (@$_SESSION["role"] === "admin") { ?>
            <div class="lay13">
                <?php require_once("menuAdmin.php"); ?>
            </div>
        <?php
        }
        ?>
    </div>
    <div class="lay14 layNone">
        <i class="iconmet fa-solid fa-cloud-sun-rain"><a href="/?page=meteo">METEO</a></i>
    </div>
    <div class="lay15 layNone">
        <i class="pist fas fa-bicycle"><a href="/?page=pistes">PISTES</a></i>
    </div>
    <div class="logosMobile">
        <div class="lay14">
            <i class="iconmet fa-solid fa-cloud-sun-rain"><a href="/?page=meteo">METEO</a></i>
        </div>
        <div class="lay15">
            <i class="pist fas fa-bicycle"><a href="/?page=pistes">PISTES</a></i>
        </div>
    </div>
</div>