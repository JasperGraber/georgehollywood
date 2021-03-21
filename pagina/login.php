<div class="header-login">
    <h1>Inloggen</h1>
</div>
<img src="../img/streep.svg" alt="underline" class="header-streep">



<div class="login">
    <div class="row">
        <div class="col-6">
            <img src="./img/logo.svg" width="80%" alt="">
        </div>
        <div class="col-6">
            <form action="./scripts/login-script.php" method="post">
                
                    <label for="exampleInputEmail">E-mail adres</label>
                    <br>
                    <input name="email" type="email" class="email" id="InputEmail1" aria-describedby="emailHelp" autofocus>
                    <br>
                    <small id="emailHelp" class="">uw email is veilig</small>
                    <br>
                    <br>
                        <label for="Inputpassword">Wachtwoord</label>
                    <br>
                        <input type="password" class="" id="InputPassword" aria-describedby="password"
                            name="Wachtwoord">
                    <br>
                        <small id="password" class="form-text text-muted">vul u wachtwoord in</small>
                    <br>
                    <br>
                <button type="submit" class="button">login</button>
            </form>
        </div>
    </div>
</div>
