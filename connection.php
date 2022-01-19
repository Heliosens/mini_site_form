<section>
    <h2 id="whatForm">Connexion ou Inscription</h2>
    <div id="userChoice">
        <div>
            <span>J'ai déjà un compte : </span>
            <input type="submit" name="logIn" class="choice" value="Connexion">
        </div>
        <div>
            <span>Je crée un comte : </span>
            <input type="submit" name="signIn" class="choice" value="Inscription">
        </div>
    </div>
    <div class='switchForm'>
        <!-- log -->
        <?php
        require __DIR__ . "/forms/connectionForm.php";
        ?>
    </div>
    <div class='switchForm'>
        <!-- sign -->
        <?php
        require __DIR__ . "/forms/registerForm.php";
        ?>
    </div>
</section>
