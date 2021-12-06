<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-sm-6">

            <form action= "./index.php?content=login_script" method="post">
                <div class="form-group">
                    <label for="inputEmail">E-mailadres:</label>
                    <input name="email" type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" autofocus>
                    <small id="emailHelp" class="form-text text-muted">Wij zullen uw gegevens nooit delen met derden!</small>
                </div>
                <div class="form-group">
                    <label for="inputPassword">Wachwoord:</label>
                    <input name="password" type="password" class="form-control" id="inputPassword" aria-describedby="passwordHelp">
                    <small id="passwordHelp" class="form-text text-muted">Pas op voor meekijkers tijdens het invoeren...</small>
                </div>

                <button type="submit" class="btn btn-outline-success btn-md btn-block mt-4">Inloggen</button>
            </form>

        </div>
        <div class="col-12 col-sm-6">
            <img src="./img/upwk61661577-wikimedia-image" alt="register" class="w-100 mx-auto d-block">
        </div>
    </div>
</div>