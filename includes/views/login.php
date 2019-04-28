<!DOCTYPE html>
<html lang="de">
<head>
	<title><?php echo $this->title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/bootstrap.min1.css" rel="stylesheet">

	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
	<?php if($this->current == "login"): ?>
		<link href="css/toastr.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">

	<?php endif; ?>

		<link href="css/main.css" rel="stylesheet">


		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<?php if($this->current == "index"): ?>
		<script type="text/javascript" src="js/core.js"></script>
	<?php elseif($this->current == "register"): ?>
		<script type="text/javascript" src="js/register.js"></script>
	<?php elseif($this->current == "login"): ?>
		<script type="text/javascript" src="js/toastr.min.js"></script>
		<script type="text/javascript" src="js/login.js"></script>
	<?php endif; ?>

</head>
<body>
<header>
	<div class="inner">
		<div class="logo">
			<div class="name">Adressverwaltung</div>
			<div class="version">1.0</div>
		</div>

		<?php if(LOGGED_IN == true): ?>
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="/" class="navbar-brand active">Adressverwaltung</a>
					</div>

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


						<ul class="nav navbar-nav navbar-right">
							<li><a href="logout">(Abmelden)</a></li>
						</ul>

						<p class="navbar-text navbar-right">Angemeldet als <strong class="username"><?php echo $this->username; ?></strong></p>

					</div>
				</div>
			</nav>
		<?php else: ?>
			<nav class="mainnav">
				<ul class="nav nav-pills">
					<li<?php if($this->current == "login"): ?>class="active"<?php endif; ?>><a href="login">Login</a></li>
				</ul>
			</nav>
		<?php endif; ?>

	</div>
</header>

<div id="main">
    <div class="row">
        <h1 class="col-xs-12">Login</h1>
        <p class="col-xs-12">
            Melden Sie sich bitte an um den Dienst nutzen zu können. Sie besitzen noch keinen Account? Dann können Sie sich <a href="login#registrierung" class="registerOverlay">hier registrieren</a>.
        </p>

        <form method="post" action="login" class="form-horizontal col-xs-12">
            <?php if($this->errorPasswd == true): ?>
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4>Benutzername und/oder Passwort sind falsch</h4>
                    <p>Prüfen Sie bitte ob Sie sich nicht vertippt haben und versuchen Sie es erneut!</p>
                </div>
            <?php endif; ?>
            <div class="form-group">
                <label for="username" class="col-xs-12 col-md-2">Benutzername</label>
                <div class="col-xs-12 col-md-10">
                    <input type="text" name="username" id="username" class="text form-control" value="" placeholder="Benutzername">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-xs-12 col-md-2">Passwort</label>
                <div class="col-xs-12 col-md-10">
                    <input type="password" name="password" id="password" class="text form-control" value="" placeholder="Passwort">
                </div>
            </div>
            <button type="submit" class="btn btn-default">Anmelden</button>
            <input type="hidden" name="action" value="login">
        </form>
    </div>
</div>

<div class="modal fade<?php if($registerError):?> in<?php endif; ?>" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="registerModalLabel">Registrierung</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <p class="col-xs-12">
                        Wir benötigen folgende Angaben um Sie für unseren Dienst registrieren zu können:
                    </p>

                    <form method="post" action="login" class="col-xs-12">

                        <div class="form-group">
                            <label for="name">Benutzername:</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Benutzernamen eingeben">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Passwort (mindestens 8 Zeichen):</label>
                            <input type="password" name="pwd" class="form-control" id="pwd" placeholder="Bitte Passwort eingeben (mind. 8 Zeichen)">
                        </div>
                        <div class="form-group">
                            <label for="pwd2">Passwort (wiederholen):</label>
                            <input type="password" name="pwd2" class="form-control" id="pwd2" placeholder="Bitte das Passwort wiederholen">
                        </div>

                        <input type="hidden" name="action" value="register">

                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Abbrechen</button>
                <button type="button" class="btn btn-primary">Registrieren</button>
            </div>
        </div>
    </div>
</div>
<?php

echo $this->footer;

?>
