<!DOCTYPE html>
<html lang="en">
	
<head>
		<title>Maruti Admin</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
		<link rel="stylesheet" href="css/maruti-style.css" />
		<link rel="stylesheet" href="css/maruti-media.css" class="skin-color" />	
	</head>
	<body>
		
		
<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.php">Maruti Admin</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-messaages-->
<div class="btn-group rightzero"> <a class="top_message tip-left" title="Manage Files"><i class="icon-file"></i></a> <a class="top_message tip-bottom" title="Manage Users"><i class="icon-user"></i></a> <a class="top_message tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span class="label label-important">5</span></a> <a class="top_message tip-bottom" title="Manage Orders"><i class="icon-shopping-cart"></i></a> </div>
<!--close-top-Header-messaages--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse"><ul class="nav">
    <li class="" ><a title="" href="#"><i class="icon icon-user"></i> <span class="text">Profile</span></a></li>
    <li class=" dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#">new message</a></li>
        <li><a class="sInbox" title="" href="#">inbox</a></li>
        <li><a class="sOutbox" title="" href="#">outbox</a></li>
        <li><a class="sTrash" title="" href="#">trash</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    <li class=""><a title="" href="login.php"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-left" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-Header-menu-->

		<div id="sidebar">
			<a href="#" class="visible-phone"><i class="icon icon-file"></i> Chat option</a><ul>
    <li class="active"><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li> <a href="charts.php"><i class="icon icon-signal"></i> <span>Charts &amp; graphs</span></a> </li>
    <li> <a href="widgets.php"><i class="icon icon-inbox"></i> <span>Widgets</span></a> </li>
    <li><a href="tables.php"><i class="icon icon-th"></i> <span>Tables</span></a></li>
    <li><a href="grid.php"><i class="icon icon-fullscreen"></i> <span>Full width</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Forms</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="form-common.php">Basic Form</a></li>
        <li><a href="form-validation.php">Form with Validation</a></li>
        <li><a href="form-wizard.php">Form with Wizard</a></li>
      </ul>
    </li>
    <li><a href="buttons.php"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
    <li><a href="interface.php"><i class="icon icon-pencil"></i> <span>Eelements</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Addons</span> <span class="label label-important">4</span></a>
      <ul>
        <li><a href="index2.php">Dashboard2</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="calendar.php">Calendar</a></li>
        <li><a href="chat.php">Chat option</a></li>
      </ul>
    </li>
  </ul>
		
		</div>
		
				
		<div id="content">
			<div id="content-header">
            <div id="breadcrumb">
				<a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
				<a href="#">Sample pages</a>
				<a href="#" class="current">Chat option</a>
			</div>
				<h1>Chat option</h1>
				
			</div>
			
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="span12">
						<div class="widget-box widget-chat">
							<div class="widget-title">
								<span class="icon">
									<i class="icon-comment"></i>
								</span>
								<h5>Let's do a chat</h5>
							</div>
							<div class="widget-content nopadding">
                <div class="chat-users panel-right2">
                  <div class="panel-title">
                    <h5>Online Users</h5>
                  </div>
                  <div class="panel-content nopadding">
                    <ul class="contact-list">
                      <li id="user-Sunil" class="online"><a href=""><img alt="" src="img/demo/av1.jpg" /> <span>Sunil</span></a></li>
                      <li id="user-Laukik"><a href=""><img alt="" src="img/demo/av2.jpg" /> <span>Laukik</span></a></li>
                      <li id="user-vijay" class="online new"><a href=""><img alt="" src="img/demo/av3.jpg" /> <span>Vijay</span></a><span class="msg-count badge badge-info">3</span></li>
                      <li id="user-Jignesh" class="online"><a href=""><img alt="" src="img/demo/av4.jpg" /> <span>Jignesh</span></a></li>
                      <li id="user-Malay" class="online"><a href=""><img alt="" src="img/demo/av5.jpg" /> <span>Malay</span></a></li>
                    </ul>
                  </div>
                </div>
                <div class="chat-content panel-left2">
                  <div class="chat-messages" id="chat-messages">
                    <div id="chat-messages-inner"></div>
                  </div>
                  <div class="chat-message well">
                    <button class="btn btn-success">Send</button>
                    <span class="input-box">
                    <input type="text" name="msg-box" id="msg-box" />
                    </span> </div>
                </div>
              </div>
						</div>
					</div>
				</div>
				
				
			</div>
		</div>
 <div class="row-fluid">
      <div id="footer" class="span12"> 2012 &copy; Marutii Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
    </div>
            <script src="js/jquery.min.js"></script>
            <script src="js/jquery.ui.custom.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/maruti.js"></script>
            <script src="js/maruti.chat.js"></script> 
	</body>

</html>
