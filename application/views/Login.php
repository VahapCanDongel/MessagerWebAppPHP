<html>
<link href="https://fonts.googleapis.com/css?family=Khand&display=swap" rel="stylesheet">
<body>
<h1>MESSAGER</h1>
<h2>LOGIN</h2>


<?php $this->load->helper('form'); ?>
<?php echo form_open('User/doLogin'); ?>
<div class="container">
Username: <input type="text" name="username"><br>
Password: <input type="password" name="password"><br>
<button type="submit" value="Login">Login</button>
</div>
</form>

<style>
body {font-family: Arial, Helvetica, sans-serif; background-color:#535963; }
form {border: 3px solid #f1f1f1;}

h1{font-size: 80px; text-align: center; font-family: 'Khand', sans-serif; color: white;}
h2{font-size: 60px; text-align: center; font-family: 'Khand', sans-serif; color: white; margin: 80px; line-height: 0.001;}


input[type=text], input[type=password] {
  width: 100%;
  padding: 20px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}


button {
  background-color: white; ;
  color: black;
  font-size: 15px;
  font-family: 'Khand', sans-serif;
  padding: 20px 20px;
  margin: 20px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.container {
  padding: 16px;
  font-family: 'Khand', sans-serif;
  color: white;
  font-size: 35px;
}


</style>




</body>
</html>
