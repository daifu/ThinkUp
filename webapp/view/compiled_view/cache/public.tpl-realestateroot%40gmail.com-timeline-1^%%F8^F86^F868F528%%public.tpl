253
a:4:{s:8:"template";a:5:{s:10:"public.tpl";b:1;s:18:"_public.header.tpl";b:1;s:28:"_public.header.statusbar.tpl";b:1;s:16:"_usermessage.tpl";b:1;s:11:"_footer.tpl";b:1;}s:9:"timestamp";i:1283126912;s:7:"expires";i:1283127212;s:13:"cache_serials";a:0:{}}<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Public Timeline | ThinkUp</title>
  <link rel="shortcut icon" href="/thinkup/assets/img/favicon.ico">
  <link type="text/css" rel="stylesheet" href="/thinkup/assets/css/base.css">
  <link type="text/css" rel="stylesheet" href="/thinkup/assets/css/positioning.css">
  <link type="text/css" rel="stylesheet" href="/thinkup/assets/css/style.css">
  <link type="text/css" rel="stylesheet" href="/thinkup/assets/css/jquery-ui-1.7.1.custom.css">

  <!-- jquery -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>	
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

  
  <style>
  #status-bar {
  background-image:url('/thinkup/assets/img/statusbar-bkgd.png');
  }
  #page-bkgd {
  background-image:url('/thinkup/assets/img/statusbar-shadow.png');
  background-repeat:repeat-x;
  }
  .line { background:url('/thinkup/assets/img/border-line-470.gif') no-repeat center bottom;
  margin: 8px auto;
  height: 1px;
  }
  </style>
  

</head>
<body>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#choose-instance').click(function() {
        $('#instance-selector').show();
        $('#choose-instance').hide();
      });
      $('#cancel-instance').click(function() {
        $('#instance-selector').hide();
        $('#choose-instance').show();
      });
    });
    function changeMe() {
      var _mu = $("select#instance-select").val();
      if (_mu != "null") {
        document.location.href = _mu;
      }
    }
  </script>


<div id="status-bar" class="clearfix"> 

  <div class="status-bar-left">
          <!-- the user has not selected an instance -->
            Last update: 1 week  ago
            </div> <!-- .status-bar-left -->
  
  <div class="status-bar-right text-right">
    <ul> 
              <li>Logged in as: realestateroot@gmail.com | <a href="/thinkup/session/logout.php">Log Out</a></li>
          </ul>
  </div> <!-- .status-bar-right -->
  
</div> <!-- #status-bar -->

<div id="page-bkgd">

<div class="container clearfix">
  
  <div id="app-title"><a href="/thinkup/public.php">
    <h1><span class="bold">Think</span><span class="gray">Up</span></h1>
    <h2>New ideas</h2>
  </a></div> <!-- end #app-title -->
  
  <div id="menu-bar">
    <ul>
               <!-- this is the public timeline -->
          <li class="round-tl round-bl"><a href="/thinkup/">Private Dashboard</a></li>
                <li class="round-tr round-br"><a href="/thinkup/account/?m=manage">Configuration</a></li>
          </ul>
  </div> <!-- end #menu-bar -->  
</div> <!-- end .container -->  <div class="thinkup-canvas round-all container_24">
    <div class="clearfix prepend_20 append_20">
      <div class="grid_22 push_1 clearfix">
                                      &nbsp;
                        <h1>Latest</h1>        <h4>Latest public posts and public replies</h4>        

              </div>
    </div>
  </div> <!-- end .thinkup-canvas -->

  <script type="text/javascript" src="/thinkup/assets/js/linkify.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
  <script type="text/javascript" src="/thinkup/assets/js/easytooltip.js"></script>
  <script type="text/javascript" src="/thinkup/plugins/geoencoder/assets/js/locationfilter.js"></script>
  
  <div class="container small center">
  
    <div id="ft" role="contentinfo">
      <p>
                  <a href="/thinkup/">Go to the public timeline.</a><br>
          Set up your own <a href="http://thinkupapp.com">ThinkUp</a>.<br>
                It is nice to be nice.
      </p>
    </div> <!-- #ft -->
  
  </div> <!-- .content -->

</body>

</html>