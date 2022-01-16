<section>
    <h2 id="logOrSign">Connexion ou Inscription</h2>
    <div id="userChoice">
        <div>
            <span>J'ai déjà un compte : </span>
            <input type="submit" name="logIn" class="check" value="Connexion">
        </div>
        <div>
            <span>Je crée un comte : </span>
            <input type="submit" name="signIn" class="check" value="Inscription">
        </div>
    </div>
    <div class='switch'>
        <!-- log -->
        <?php
        require __DIR__ . "/forms/login.php";
        ?>
    </div>
    <div class='switch'>
        <!-- sign -->
        <?php
        require __DIR__ . "/forms/signIn.php";
        ?>
    </div>
</section>
