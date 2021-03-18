<div class="login">
    <div class="row">
        <div class="col-6">
            <img src="./img/logo.svg" width="80%" alt="">
        </div>
        <div class="col-6">
            <form action="./scripts/login-script.php" method="post">
                
                    <label for="exampleInputEmail">E-mail adres</label>
                    <input name="email" type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" autofocus>
                    <small id="emailHelp" class="form-text text-muted">uw email is veilig</small>
                <div class="form-group">
                        <label for="Inputpassword">wachtwoord</label>
                        <input type="password" class="form-control" id="InputPassword" aria-describedby="password"
                            name="Wachtwoord">
                        <small id="password" class="form-text text-muted">vul u wachtwoord in</small>
                    </div>
                <button type="submit" class="btn btn-primary">login</button>
            </form>
        </div>
    </div>
</div>
