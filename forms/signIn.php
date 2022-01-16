<section>
    <h2>Inscription</h2>
    <form action="/forms/form_test.php" method="post">
        <div>
            <label for="id-username">Pseudo</label>
            <input type="text" name="userName" id="id-username"">
        </div>
        <div>
            <label for="id-mail">E-mail</label>
            <input type="email" name="userMail" id="id-mail">
        </div>
        <div>
            <label for="id-pass">mot de passe</label>
            <input type="password" name="userPwd" id="id-pass">
        </div>
        <div>
            <label for="id-pass-repeat">mot de passe</label>
            <input type="password" name="passwdRepeat" id="id-pass-repeat">
        </div>
        <div>
            <input type="submit" value="envoyer">
        </div>
    </form>
    <div>
        <input type="submit" value="retour" class="goBack">
    </div>
</section>
