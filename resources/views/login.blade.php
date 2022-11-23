<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 
	
       <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style/assets/css/login.css') }}">
</head>

<body>
	<br/>
	<!-- cek pesan notifikasi -->
    <h2></h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
        
    </div>
    <div class="form-container sign-in-container">
	<div>
		<h3>IHDM</h3>
	</div>
    <div class="login"> 
        <form action="cek_login.php" method="post" onSubmit="return validasi()">
			<div>
				<img src={{ asset('style/images/user.png') }}>
				<label>Username:</label>
				<input type="text" name="username" id="username" placeholder="Username"/>
			</div>
			<div>
				<img src={{ asset('style/images/padlock.png') }}>
				<label>Password:</label>
				<input type="password" name="password" id="password" placeholder="Password"/>
			</div>	
          		
	<button>
      <div>login</div>
    </button>

		</form>
	</div>
    </div>
	<div class="overlay-container">
        <div class="overlay">
            
            <div class="overlay-panel overlay-right">
                <h1>Selamat Datang di</h1>
                <h2> Integrated Hospital Data Management </h2>
                <p></p>
            </div>
        </div>
    </div>
</div>
<div> 
	<p> &copy Cyber Physical Industrial Robotics and Automation Laboratory </p>
	<div class="cypiral"> <h5>&copy CyPIRAL </h5></div>

</body>
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('please enter your username and password !');
			return false;
		}
	}
 
</script>
</html>