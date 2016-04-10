<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="keywords" content="web design, web development, web site development, web site design, web design development, e-commerce, ecommerce, interactive, new media, development, Manjeri, hove, Manjeri web design, Manjeri ecommerce, Manjeri e-commerce, Manjeri web development, malappuram, content management, cms, web site, web sites, psybo, psybo technologies, psybotechnologies">
  <meta name="description" content="Psybo technologies is a small web design &amp; development agency based in Manjeri, Malappuram, INDIA. We've made a reputation for building websites that look great and are easy-to-use.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?php echo base_url('img/ico.png');?>" type="image/png" sizes="47x54">
	<title>Epanchayath</title>
	<style>
		@import url(https://fonts.googleapis.com/css?family=Dosis:500);
		body,
		html {
		  background: #34495e;
		  /* #34495e */
		  font-family: 'Dosis', sans-serif;
		  font-size: 14px;
		  font-weight: 400;
		}

		.wrap {
		  margin: 0 auto;
		}

		.login {
		  width: 300px;
		  margin-top: 40vh;
		}

		.login input[type=text],
		.login input[type=password] {
		  opacity: 1;
		  display: block;
		  border: none;
		  outline: none;
		  width: 280px;
		  padding: 10px;
		  margin: 20px 0 0 0;
		  border-radius: 2px;
		  font-family: Dosis;
		  font-size: 16px;
		}

		.login input[type=text] {
		  animation: bounce 1s;
		  -webkit-appearance: none;
		}
		 .login input[type=text]:focus:valid ~ input[type=submit] {
		  background: #2ecc71;
		  color: #f2f2f2;
		} 

		.login input[type=text]:invalid ~ input[type=submit] {
		  background: #e74c3c;
		  color: #f2f2f2;
		}

		.login input[type=password] {
		  animation: bounce1 1.3s;
		}
		.login img {
		  animation: bounce1 1.3s;
		}

		.login input[type=submit],
		.login input[type=button] {
		  border: 0;
		  outline: 0;
		  padding: 13px 18px;
		  margin: 40px 0 0 0;
		  border-radius: 2px;
		  font-family: Dosis;
		  font-weight: normal;
		  font-size: 16px;
		  animation: bounce2 1.6s;
		}

		.login input[type=submit] {
		  float: right;
		  background: #f8f8f8;
		  color: #34495e;
		  outline: none;
		  transition: background 0.2s ease;
		}
		.login input[type=submit]:hover {
		    background: #ccc;
		}
		@keyframes bounce {
		  0% {
		    transform: translateY(-250px);
		    opacity: 0;
		  }
		}

		@keyframes bounce1 {
		  0% {
		    opacity: 0;
		  }
		  40% {
		    transform: translateY(-100px);
		    opacity: 0;
		  }
		}

		@keyframes bounce2 {
		  0% {
		    opacity: 0;
		  }
		  70% {
		    transform: translateY(-20px);
		    opacity: 0;
		  }
		}
</style>
</head>
<body>
    <?php echo form_open(base_url('login/verify'),['id' => 'loginForm', 'name' => 'loginForm', 'method' => 'post'])?>
		<div class="login wrap">
		  <input type="text" name="name" id="email" placeholder="name" >
            <?php echo '<div class="alert alert-danger">'.form_error('email').'</div>   ';?>
		  <input type="password" name="password" id="password" placeholder="Password">
            <?php echo '<div class="alert alert-danger">'.form_error('password').'</div></br>';?>
         
            <input type="submit" value="Log in">
		</div><center>
		<?php if (isset($message)) {
		echo $message;
	} ?></center>
	<?php echo form_close("\n")?>
	
</body>
</html>