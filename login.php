<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Login Page</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- Link external css-->
    <link rel="stylesheet" href="stylesheet/login.css">
    <!-- font style -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div class="full-page">

        <!---------- Header Section starts ------------>  
        <header class="header">   
            <a href="#" class="logo"><i class="fa fa-cutlery"></i>Delice</a>
            <div class="navbar">
                <nav>
                <ul id='MenuItems'>
                   <a  href="front_page.php">Home</a>
                   <li><button class='loginbtn' onclick="document.getElementById('login-form').style.display='block'" style="width:auto;">Login</button></li>
                </ul>    
                </nav>
            </div>
            <div class="icons">
                <i class="fa fa-bars" id="menu-bars"></i>
            </div>   
        </header>

        <div class='login-page'>
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button'onclick='login()'class='toggle-btn'>Log In</button>
                    <button type='button'onclick='register()'class='toggle-btn'>Register</button>
                </div>
                <form id='login' class='input-group-login'>
                    <input type='text'class='input-field'placeholder='Email Id' required >
		            <input type='password'class='input-field'placeholder='Enter Password' required>
		            <input type='checkbox'class='check-box'><span>Remember Password</span>
		            <button type='submit'class='submit-btn'>Log in</button>
		        </form>
		        <form id='register' class='input-group-register'>
		            <input type='text'class='input-field'placeholder='First Name' required>
		            <input type='text'class='input-field'placeholder='Last Name ' required>
		            <input type='email'class='input-field'placeholder='Email Id' required>
                    <input type='text'class='input-field'placeholder='Username ' required>
		            <input type='password'class='input-field'placeholder='Enter Password' required>
		            <input type='password'class='input-field'placeholder='Confirm Password'  required>
		            <input type='checkbox'class='check-box'><span>I agree to the terms and conditions</span>
                    <button type='submit'class='submit-btn'>Register</button>
	            </form>
            </div>
        </div>
    </div>

    <script>
        var x=document.getElementById('login');
		var y=document.getElementById('register');
		var z=document.getElementById('btn');
		function register()
		{
			x.style.left='-400px';
			y.style.left='50px';
			z.style.left='110px';
		}
		function login()
		{
			x.style.left='50px';
			y.style.left='450px';
			z.style.left='0px';
		}
	</script>
	<script>
        var modal = document.getElementById('login-form');
        window.onclick = function(event) 
        {
            if (event.target == modal) 
            {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>