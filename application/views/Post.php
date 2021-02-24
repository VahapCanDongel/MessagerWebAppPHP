<html>
<link href="https://fonts.googleapis.com/css?family=Khand&display=swap" rel="stylesheet">
<body>
<h1>Messager</h1>

<?php $this->load->helper('form'); ?>

<div class="dropdown">
  <button class="dropbtn">Menu</button>
  <div class="dropdown-content">
    <a href="<?php echo site_url('Message/doPost') ?>">Post Message</a><br />
    <a href="<?php echo site_url('User/logout') ?>">Logout</a><br />
    <a href="<?php echo site_url('Search/index') ?>">Search Message</a><br />
    <a href="<?php
    $name = $_SESSION['username'];
    $segments = array('User', 'feed', $name);



    echo site_url($segments) ?>">Following</a><br />
    <a href="<?php
    $name = $_SESSION['username'];
    $segments = array('User', 'view', $name);



    echo site_url($segments) ?>">My Messages</a><br />


  </div>
</div>


<?php echo form_open('Message/doPost'); ?>
<div class="container">
<?php echo form_label('Post Message :'); ?><br />
<?php echo form_input(array('id' => 'pmessage', 'name' => 'pmessage')); ?><br />
<button id="submit" type="submit" value="Submit">Submit</button>
</div>
<?php echo form_close(); ?><br/>
</form>

</body>

<style>
body {font-family: Arial, Helvetica, sans-serif; background-color:#535963; }
form {border: 3px solid #f1f1f1;}
h1{font-size: 80px; text-align: center; font-family: 'Khand', sans-serif; color: white;}
h2{font-size: 60px; text-align: center; font-family: 'Khand', sans-serif; color: white; margin: 80px;}

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

.dropbtn {
  background-color: white;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;

}

.dropdown {
  position: relative;
  display: inline-block;
  top: -180px;

}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: white;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: black;
  color: white;
}

</style>




</html>
