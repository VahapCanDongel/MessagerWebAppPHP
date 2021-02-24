<html>
<link href="https://fonts.googleapis.com/css?family=Khand&display=swap" rel="stylesheet">
<head>
    <title> View Messages </title>
</head>
<h1>MESSAGER</h1>
<h2></h2>
<div class="dropdown">
  <button class="dropbtn">Menu</button>
  <div class="dropdown-content">
    <a href="<?php echo site_url('Message/doPost') ?>">Post Message</a><br />
    <a href="<?php echo site_url('User/logout') ?>">Logout</a><br />
    <a href="<?php echo site_url('Search/index') ?>">Search Message</a><br />
    <a href="<?php
    session_start();
    $name = $_SESSION['username'];
    $segments = array('User', 'feed', $name);



    echo site_url($segments) ?>">Following</a><br />
    <a href="<?php
    $name = $_SESSION['username'];
    $segments = array('User', 'view', $name);



    echo site_url($segments) ?>">My Messages</a><br />
  </div>
</div>

<body>


  <table id="mymesseages">
    <?php if (isset($message)): ?>
      <?php if(is_array($message)): ?>
        <?php foreach($message as $row):?>
        <tr>
          <td><?php echo $row->user_username?></td>
          <td><?php echo $row->text?></td>
          <td><?php echo $row->posted_at?></td>
        </tr>
        <?php endforeach;?>
        <?php endif; ?>
        <?php endif; ?>
  </table>




  <table id="serahcing">

    <?php if (isset($results)): ?>
      <?php if(is_array($results)): ?>
        <?php foreach($results as $row):?>
        <tr>
          <td>
          <a href="<?php
          $name = $_SESSION['username'];
          $segments = array('User', 'view', $row->user_username);



          echo site_url($segments) ?>"><?php echo $row->user_username?></a><br />
          <td><?php echo $row->text?></td>
          <td><?php echo $row->posted_at?></td>
        </tr>
        <?php endforeach;?>
        <?php endif; ?>
        <?php endif; ?>
  </table>


    <table id="following">
      <?php if (isset($follower)): ?>
        <?php if(is_array($follower)): ?>
          <?php foreach($follower as $row):?>
          <tr>
            <td>
            <a href="<?php
            $name = $_SESSION['username'];
            $segments = array('User', 'view', $row->follower_username);



            echo site_url($segments) ?>"><?php echo $row->follower_username?></a><br />
          </tr>
          <?php endforeach;?>
          <?php endif; ?>
          <?php endif; ?>
    </table>









  <style>
  body {font-family: Arial, Helvetica, sans-serif; background-color:#535963;}

  #mymesseages {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  #mymesseages td{
    border: 1px solid #ddd;
    padding: 8px;
  }

#mymesseages td:nth-child(even){background-color: #f2f2f2;}
#mymesseages td:hover {background-color: #ddd;}

#mymesseages td {
  padding-top: 30px;
  padding-bottom: 30px;
  text-align: left;
  background-color: white;
  color: black;
}

#serahcing {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#serahcing td{
  border: 1px solid #ddd;
  padding: 8px;
}

#serahcing td:nth-child(even){background-color: #f2f2f2;}
#serahcing td:hover {background-color: #ddd;}

#serahcing td {
padding-top: 30px;
padding-bottom: 30px;
text-align: left;
background-color: white;
color: black;
}

#following {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 10%;
}

#following td{
  border: 1px solid #ddd;
  padding: 8px;
}

#following td:nth-child(even){background-color: #f2f2f2;}
#following td:hover {background-color: #ddd;}

#following td {
padding-top: 30px;
padding-bottom: 30px;
text-align: left;
background-color: white;
color: black;
}




h1{font-size: 80px; text-align: center; font-family: 'Khand', sans-serif; color: white;}
h2{font-size: 60px; text-align: center; font-family: 'Khand', sans-serif; color: white; margin: 80px;}

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
  top: -175px;

}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
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


</body>
</html>
