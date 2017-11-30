<!DOCTYPE html>
<html lang="en">

<head>
<title>Maruti Admin</title><meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
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
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
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

<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard2</a>
  <ul>
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
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
  <div  class="quick-actions_homepage">
    <ul class="quick-actions">
          <li> <a href="#"> <i class="icon-dashboard"></i> My Dashboard </a> </li>
          <li> <a href="#"> <i class="icon-shopping-bag"></i> Shopping Cart</a> </li>
          <li> <a href="#"> <i class="icon-web"></i> Web Marketing </a> </li>
          <li> <a href="#"> <i class="icon-people"></i> Manage Users </a> </li>
          <li> <a href="#"> <i class="icon-calendar"></i> Manage Events </a> </li>
        </ul>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12"> 
        <div class="widget-box">
          <div class="widget-title"><span class="icon"><i class="icon-signal"></i></span>
            <h5>Site Analytics</h5>
            <div class="buttons"><a href="#" class="btn btn-mini"><i class="icon-refresh"></i> Update stats</a></div>
          </div>
          <div class="widget-content">
            <div class="row-fluid">
              <div class="span12">
                <div class="chart"></div>
              </div>
            </div></div></div>
        <div class="row-fluid">
              <div class="span6">
                <div class="widget-box">
                  <div class="widget-title"><span class="icon"><i class="icon-file"></i></span>
                    <h5>Latest Posts</h5>
                    </div>
                  <div class="widget-content nopadding">
                    <ul class="recent-posts">
                      <li>
                        <div class="user-thumb"> <img width="40" height="40" alt="User" src="img/demo/av1.jpg"> </div>
                        <div class="article-post"> <span class="user-info"> By: john Deo / Date: 2 Aug 2012 / Time:09:27 AM </span>
                          <p><a href="#">This is a much longer one that will go on for a few lines.It has multiple paragraphs and is full of waffle to pad out the comment.</a> </p>
                          </div>
                      </li>
                      <li>
                        <div class="user-thumb"> <img width="40" height="40" alt="User" src="img/demo/av2.jpg"> </div>
                        <div class="article-post"> <span class="user-info"> By: john Deo / Date: 2 Aug 2012 / Time:09:27 AM </span>
                          <p><a href="#">This is a much longer one that will go on for a few lines.It has multiple paragraphs and is full of waffle to pad out the comment.</a> </p>
                          </div>
                      </li>
                      <li>
                        <div class="user-thumb"> <img width="40" height="40" alt="User" src="img/demo/av4.jpg"> </div>
                        <div class="article-post"> <span class="user-info"> By: john Deo / Date: 2 Aug 2012 / Time:09:27 AM </span>
                          <p><a href="#">This is a much longer one that will go on for a few lines.Itaffle to pad out the comment.</a> </p>
                          </div>
                         
                     <li><button class="btn btn-warning btn-mini">View All</button></li>
                    </ul> 
                  </div>
                </div>
              </div>
              
              <div class="span6">
                <div class="widget-box">
                  <div class="widget-title"> <span class="icon"> <i class="icon-refresh"></i> </span>
                    <h5>News updates</h5>
                  </div>
                  <div class="widget-content nopadding updates">
                    <div class="new-update clearfix"><i class="icon-ok-sign"></i>
                      <div class="update-done"><a title="" href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong></a> <span>dolor sit amet, consectetur adipiscing eli</span> </div>
                      <div class="update-date"><span class="update-day">20</span>jan</div>
                    </div>
                    <div class="new-update clearfix"> <i class="icon-gift"></i> <span class="update-notice"> <a title="" href="#"><strong>Congratulation Maruti, Happy Birthday </strong></a> <span>many many happy returns of the day</span> </span> <span class="update-date"><span class="update-day">11</span>jan</span> </div>
                    <div class="new-update clearfix"> <i class="icon-move"></i> <span class="update-alert"> <a title="" href="#"><strong>Maruti is a Responsive Admin theme</strong></a> <span>But already everything was solved. It will ...</span> </span> <span class="update-date"><span class="update-day">07</span>Jan</span> </div>
                    <div class="new-update clearfix"> <i class="icon-leaf"></i> <span class="update-done"> <a title="" href="#"><strong>Envato approved Maruti Admin template</strong></a> <span>i am very happy to approved by TF</span> </span> <span class="update-date"><span class="update-day">05</span>jan</span> </div>
                    <div class="new-update clearfix"> <i class="icon-question-sign"></i> <span class="update-notice"> <a title="" href="#"><strong>I am alwayse here if you have any question</strong></a> <span>we glad that you choose our template</span> </span> <span class="update-date"><span class="update-day">01</span>jan</span> </div>
                  </div>
                </div>
              </div>
              
              </div> 
             
          
      </div>
    </div>
    <hr>
    <div class="row-fluid">
      
      <div class="row-fluid">
					<div class="span12">
						
						<div class="widget-box widget-calendar">
							
                            <div class="widget-title">
								<span class="icon"><i class="icon-calendar"></i></span>
								<h5>Calendar</h5>
								
                                <div class="buttons">
									<a id="add-event" data-toggle="modal" href="#modal-add-event" class="btn btn-inverse btn-mini"><i class="icon-plus icon-white"></i> Add new event</a>
									<div class="modal hide" id="modal-add-event">
										 <div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">×</button>
											<h3>Add a new event</h3>
										</div>
										<div class="modal-body">
											<p>Enter event name:</p>
											<p><input id="event-name" type="text" /></p>
										</div>
										<div class="modal-footer">
											<a href="#" class="btn" data-dismiss="modal">Cancel</a>
											<a href="#" id="add-event-submit" class="btn btn-primary">Add event</a>
										</div>
									</div>
								</div>
							</div>
							<div class="widget-content">
								<div class="panel-left">
									<div id="fullcalendar"></div>
								</div>
								<div id="external-events" class="panel-right">
									<div class="panel-title"><h5>Drag Events to the calander</h5></div>
									<div class="panel-content">
										<div class="external-event ui-draggable label label-inverse">My Event 1</div>
                                        <div class="external-event ui-draggable label label-inverse">My Event 2</div>
                                        <div class="external-event ui-draggable label label-inverse">My Event 3</div>
                                        <div class="external-event ui-draggable label label-inverse">My Event 4</div>
                                        <div class="external-event ui-draggable label label-inverse">My Event 5</div>
									</div>
								</div>
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
<script src="js/excanvas.min.js"></script> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flot.min.js"></script> 
<script src="js/jquery.flot.resize.min.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/fullcalendar.min.js"></script> 
<script src="js/maruti.js"></script> 
<script src="js/maruti.dashboard.js"></script> 
<script src="js/maruti.calendar.js"></script> 
<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>

</html>
