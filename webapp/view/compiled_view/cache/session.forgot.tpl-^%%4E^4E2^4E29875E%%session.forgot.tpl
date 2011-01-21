215
a:4:{s:8:"template";a:4:{s:18:"session.forgot.tpl";b:1;s:17:"_header.login.tpl";b:1;s:11:"_header.tpl";b:1;s:11:"_footer.tpl";b:1;}s:9:"timestamp";i:1283294472;s:7:"expires";i:1283294772;s:13:"cache_serials";a:0:{}}<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title>ThinkUp</title>
  <link rel="shortcut icon" type="image/x-icon" href="/thinkup/assets/img/favicon.ico">
  
  <!-- jquery -->
  <link type="text/css" rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  
  
  

  <!-- custom css -->
  <link type="text/css" rel="stylesheet" href="/thinkup/assets/css/base.css">
  <link type="text/css" rel="stylesheet" href="/thinkup/assets/css/positioning.css">
  <link type="text/css" rel="stylesheet" href="/thinkup/assets/css/style.css">


  <script type="text/javascript">
    
      // tabs functionality
      $(function() {
        $("#tabs").tabs();
      });
      
      // buttons functionality
      $(function() {
        //all hover and click logic for buttons
        $(".tt-button:not(.ui-state-disabled)")
        .hover(
          function() {
            $(this).addClass("ui-state-hover"); 
          },
          function() {
            $(this).removeClass("ui-state-hover"); 
          }
        )
        .mousedown(function() {
            $(this).parents('.tt-buttonset-single:first').find(".tt-button.ui-state-active").removeClass("ui-state-active");
            if ($(this).is('.ui-state-active.tt-button-toggleable, .tt-buttonset-multi .ui-state-active')) {
              $(this).removeClass("ui-state-active");
            }
            else {
              $(this).addClass("ui-state-active");
            }
        })
        .mouseup(function() {
          if (! $(this).is('.tt-button-toggleable, .tt-buttonset-single .tt-button,  .tt-buttonset-multi .tt-button') ) {
            $(this).removeClass("ui-state-active");
          }
        });
      });
    
          
        $(document).ready(function() {
          // References
          var sections = $(".menu li");
          
          var loading = $("#loading");
          var loading_replies = $("#loading_replies");
          var loading_followers = $("#loading_followers");
          var loading_friends = $("#loading_friends");
          var loading_links =  $("#loading_links");
          
          var posts_content = $("#posts_content");
          var replies_content = $("#replies_content");
          var followers_content = $("#followers_content");
          var friends_content = $("#friends_content");
          var links_content =  $("#links_content");
      
      showLoading();
      posts_content.load("/thinkup/inline.view.php?u=&n=&d=", hideLoading);
      replies_content.load("/thinkup/inline.view.php?u=&n=&d=", hideLoading);
      followers_content.load("/thinkup/inline.view.php?u=&n=&d=", hideLoading);
      friends_content.load("/thinkup/inline.view.php?u=&n=&d=", hideLoading);
      links_content.load("/thinkup/inline.view.php?u=&n=&d=", hideLoading);
      
          // Manage click events.
          sections.click(function() {
            $(this).siblings().removeClass('selected');
            $(this).addClass('selected');
            
            // Show the loading bar.
            showLoading();
            
            // Load selected section.
            switch (this.id) { 
            //posts tabs
                        //replies tabs
                                                              default:
                // Hide loading bar if there is no selected section.
                hideLoading();
                break;
            }
          });
      
          // Show loading bar
          function showLoading() {
            loading
              .css({visibility:"visible", opacity:"1", display:"block"})
            loading_replies
              .css({visibility:"visible", opacity:"1", display:"block"})
            loading_followers
              .css({visibility:"visible", opacity:"1", display:"block"})
            loading_friends
              .css({visibility:"visible", opacity:"1", display:"block"})
            loading_links
              .css({visibility:"visible", opacity:"1", display:"block"})
          }
          
          // Hide loading bar
          function hideLoading() {
            loading.fadeTo(1000, 0);
            loading_replies.fadeTo(1000, 0);
            loading_followers.fadeTo(1000, 0);
            loading_friends.fadeTo(1000, 0);
            loading_links.fadeTo(1000, 0);
          };
        }); // end $(document).ready(function() {
      
      </script>
</head>

<body>


<div class="container clearfix">
  
  <div id="app-title"><a href="/thinkup/index.php">
    <h1><span class="bold">Think</span><span class="gray">Up</span></h1>
    <h2>New ideas</h2>
  </a></div> <!-- end #app-title -->
  
  <div id="menu-bar">
    <ul>
              <li class="round-tr round-br round-tl round-bl"><a href="http://thinkupapp.com/">Get ThinkUp</a></li>
          </ul>
  </div> <!-- end #menu-bar -->
  
</div> <!-- end .container -->
<div class="container_24 thinkup-canvas round-all">
  <div class="prepend_20">
    <h1>Forgot Password</h1>
  </div>
  <div class="clearfix prepend_20">
    <div class="grid_17 prefix_3 left">
                </div>
  </div>
  <div class="clearfix append_20">
    <form name="form1" method="post" action="" class="login">
      <div class="clearfix">
        <div class="grid_4 prefix_5 right">
          <label for="email">
            Email:
          </label>
        </div>
        <div class="grid_10 left">
          <input name="email" type="text" id="email">
        </div>
      </div>
      <div class="clearfix">
        <div class="grid_10 prefix_9 left">
          <input type="submit" id="login-save" name="Submit" class="tt-button ui-state-default ui-priority-secondary ui-corner-all" value="Send">
        </div>
      </div>
    </form>
    <div class="center prepend_20 append_20">
      <a href="register.php">Register</a> |
      <a href="login.php">Log In</a>
    </div>
  </div>
</div>

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