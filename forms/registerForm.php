<section>
    <h2>Inscription</h2>
    <form id="regForm" action="/form_test.php" method="post">
        <div>
            <label for="reg-username">Pseudo</label>
            <input type="text"  minlength="2" name="userName" id="reg-username" required>
        </div>
        <div>
            <label for="reg-mail">E-mail</label>
            <input type="email" name="userMail" id="reg-mail" required>
        </div>
        <div>
            <label for="reg-pass">mot de passe</label>
            <input type="password" minlength="8" name="userPwd" id="reg-pass" required>
        </div>
        <div>
            <label for="reg-pass-repeat">mot de passe</label>
            <input type="password" name="passwdRepeat" id="reg-pass-repeat" required>
        </div>
        <div>
            <input type="submit" value="envoyer" id="regBtn" name="GetReg">
        </div>
    </form>
    <div>
        <input type="submit" value="retour" class="goBack">
    </div>
</section>
