<?php
if (!(isset($_GET["content"]) && isset($_GET["id"]) && isset($_GET["pwh"]))){
    header("Location: ./index.php?content=message&alert=hacker-alert");
}
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-sm-6">
            <form action= "./index.php?content=activate_script" method="post">
                <div class="form-group">
                    <label for="inputPassword">Nieuw wachtwoord:</label>
                    <input name="password" type="password" class="form-control" id="inputPassword" aria-describedby="passwordHelp" autofocus>
                    <small id="passwordHelp" class="form-text text-muted">Kies een sterk wachtwoord!</small>
                </div>
                <div class="form-group">
                    <label for="inputPasswordCheck">Bevestig wachtwoord:</label>
                    <input name="passwordCheck" type="password" class="form-control" id="inputPasswordCheck" aria-describedby="passwordHelpCheck">
                    <small id="passwordHelpCheck" class="form-text text-muted">Voer ter controle nogmaals uw wachtwoord in...</small>
                </div>
                <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
                <input type="hidden" name="pwh" value="<?php echo $_GET["pwh"]; ?>">
                <button type="submit" class="btn btn-outline-success btn-md btn-block">Activeer</button>
            </form>
        </div>
        <div class="col-12 col-sm-6">
            <img src="img/register/Freaky-Glasses-Intents-Festival.jpg" alt="register" class="w-100 mx-auto d-block">
        </div>
    </div>
</div>