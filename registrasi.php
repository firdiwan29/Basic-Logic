<html>
	<head>
		<link rel="stylesheet" href="style.css" type="text/css">
		<div>
			<center>
                      <font size="+10"> GSI SCHOOL </font>
                       <br>
                        <font size="+3"> The Future of School </font>
            </center>
        </div>
    </head>
<body>
    <form action="login.php" method="POST">
        <fieldset>
        <legend>Login</legend>
        <p>
            <label>Username:</label>
            <input type="text" name="username" placeholder="username" />
        </p>
        <p>
            <label>Password:</label>
            <input type="password" name="password" placeholder="password" />
        </p>

        <p>
            <label><input type="checkbox" name="remember" value="remember" /> Remember me</label>
        </p>

        <p>Jika Belum Mempunyai Akun, silahkan buka:
            <a href="Registrasi_Akun.php">Registrasi</a>
        </p>

        <p>
            <input type="submit" name="submit" value="Login" />
        </p>
        </fieldset>
    </form>
</body>
</html>