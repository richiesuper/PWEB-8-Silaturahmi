<header>
	<nav class="navbar navbar-expand-lg bg-primary">
		<div class="container-fluid">
			<a class="navbar-brand" href="/">Silaturahmi</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="daftar-ucapan.php">Daftar Ucapan</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="auth.php"><?php session_start(); echo (!isset($_SESSION['email'])) ? "Login" : "Logout"; ?></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>