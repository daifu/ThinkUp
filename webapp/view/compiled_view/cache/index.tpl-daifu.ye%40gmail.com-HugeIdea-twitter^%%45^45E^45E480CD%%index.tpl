233
a:4:{s:8:"template";a:5:{s:9:"index.tpl";b:1;s:17:"_header.login.tpl";b:1;s:11:"_header.tpl";b:1;s:16:"_usermessage.tpl";b:1;s:11:"_footer.tpl";b:1;}s:9:"timestamp";i:1283754249;s:7:"expires";i:1283754549;s:13:"cache_serials";a:0:{}}<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Private Dashboard | ThinkUp</title>
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
      posts_content.load("/thinkup/inline.view.php?u=HugeIdea&n=twitter&d=tweets-all", hideLoading);
      replies_content.load("/thinkup/inline.view.php?u=HugeIdea&n=twitter&d=mentions-all", hideLoading);
      followers_content.load("/thinkup/inline.view.php?u=HugeIdea&n=twitter&d=followers-history", hideLoading);
      friends_content.load("/thinkup/inline.view.php?u=HugeIdea&n=twitter&d=friends-mostactive", hideLoading);
      links_content.load("/thinkup/inline.view.php?u=HugeIdea&n=twitter&d=links-friends", hideLoading);
      
          // Manage click events.
          sections.click(function() {
            $(this).siblings().removeClass('selected');
            $(this).addClass('selected');
            
            // Show the loading bar.
            showLoading();
            
            // Load selected section.
            switch (this.id) { 
            //posts tabs
                            case "tweets-all": 
                    posts_content.load("inline.view.php?u=HugeIdea&n=twitter&d=tweets-all", hideLoading);
                    break;
                            case "tweets-mostreplies": 
                    posts_content.load("inline.view.php?u=HugeIdea&n=twitter&d=tweets-mostreplies", hideLoading);
                    break;
                            case "tweets-mostretweeted": 
                    posts_content.load("inline.view.php?u=HugeIdea&n=twitter&d=tweets-mostretweeted", hideLoading);
                    break;
                            case "tweets-convo": 
                    posts_content.load("inline.view.php?u=HugeIdea&n=twitter&d=tweets-convo", hideLoading);
                    break;
                        //replies tabs
                            case "mentions-all":
                    replies_content.load("inline.view.php?u=HugeIdea&n=twitter&d=mentions-all", hideLoading);
                    break;
                            case "mentions-allreplies":
                    replies_content.load("inline.view.php?u=HugeIdea&n=twitter&d=mentions-allreplies", hideLoading);
                    break;
                            case "mentions-orphan":
                    replies_content.load("inline.view.php?u=HugeIdea&n=twitter&d=mentions-orphan", hideLoading);
                    break;
                            case "mentions-standalone":
                    replies_content.load("inline.view.php?u=HugeIdea&n=twitter&d=mentions-standalone", hideLoading);
                    break;
                                        case "followers-history":
                    followers_content.load("inline.view.php?u=HugeIdea&n=twitter&d=followers-history", hideLoading);
                    break;
                            case "followers-mostfollowed":
                    followers_content.load("inline.view.php?u=HugeIdea&n=twitter&d=followers-mostfollowed", hideLoading);
                    break;
                            case "followers-leastlikely":
                    followers_content.load("inline.view.php?u=HugeIdea&n=twitter&d=followers-leastlikely", hideLoading);
                    break;
                            case "followers-former":
                    followers_content.load("inline.view.php?u=HugeIdea&n=twitter&d=followers-former", hideLoading);
                    break;
                            case "followers-earliest":
                    followers_content.load("inline.view.php?u=HugeIdea&n=twitter&d=followers-earliest", hideLoading);
                    break;
                                        case "friends-mostactive":
                    friends_content.load("inline.view.php?u=HugeIdea&n=twitter&d=friends-mostactive", hideLoading);
                    break;
                            case "friends-leastactive":
                    friends_content.load("inline.view.php?u=HugeIdea&n=twitter&d=friends-leastactive", hideLoading);
                    break;
                            case "friends-mostfollowed":
                    friends_content.load("inline.view.php?u=HugeIdea&n=twitter&d=friends-mostfollowed", hideLoading);
                    break;
                            case "friends-former":
                    friends_content.load("inline.view.php?u=HugeIdea&n=twitter&d=friends-former", hideLoading);
                    break;
                            case "friends-notmutual":
                    friends_content.load("inline.view.php?u=HugeIdea&n=twitter&d=friends-notmutual", hideLoading);
                    break;
                                        case "links-friends":
                    links_content.load("inline.view.php?u=HugeIdea&n=twitter&d=links-friends", hideLoading);
                    break;
                            case "links-photos":
                    links_content.load("inline.view.php?u=HugeIdea&n=twitter&d=links-photos", hideLoading);
                    break;
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

  <div id="status-bar" class="clearfix">
    
    <div class="status-bar-left">
              <!-- the user has selected a particular one of their instances -->
        
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
        
        Updated: 2 weeks  ago | 
        <span id="choose-instance"><span class="underline">HugeIdea</span> (Twitter)</span>
        <span id="instance-selector" style="display:none;">
          <select id="instance-select" onchange="changeMe();">
            <option value="">-- Select an instance --</option>
                                                </select>
          <span id="cancel-instance">Cancel</span>
        </span>
          </div> <!-- end .status-bar-left -->
    
    <div class="status-bar-right">
      <ul> 
                  <li>Logged in as: daifu.ye@gmail.com | <a href="/thinkup/session/logout.php">Log Out</a></li>
              </ul>
    </div> <!-- end .status-bar-right -->
  
  </div> <!-- end #status-bar -->

<div class="container clearfix">
  
  <div id="app-title"><a href="/thinkup/index.php">
    <h1><span class="bold">Think</span><span class="gray">Up</span></h1>
    <h2>New ideas</h2>
  </a></div> <!-- end #app-title -->
  
  <div id="menu-bar">
    <ul>
                        <li class="round-tl round-bl">
                    <a href="/thinkup/?u=HugeIdea&n=twitter">HugeIdea
          </a>
          </li>
          <li><a href="/thinkup/public.php">Public Timeline</a></li>
                <li class="round-tr round-br"><a href="/thinkup/account/?m=manage">Configuration</a></li>
          </ul>
  </div> <!-- end #menu-bar -->
  
</div> <!-- end .container -->
<script type="text/javascript">
  
  $(document).ready(function() {
    $(".toggle_container").hide();
    $("h4.trigger").toggle(
      function() {
        $(this).addClass("active");
      }, function() {
        $(this).removeClass("active");
      }
    );
    
    // Slide up and down on click
    $("h4.trigger").click(function () {
      $(this).next(".toggle_container").slideToggle("slow");
    });
  });
  
</script>

<div class="container">
              <div id="thinkup-tabs">
    <div role="application" id="tabs">
      <ul>
        <li><a href="#updates"><div class="key-stat">
          <h1>0</h1>
          <h3>Posts</h3>
        </div></a></li>
        <li><a href="#replies"><div class="key-stat">
          <h1>0</h1>
          <h3>Replies</h3>
        </div></a></li>
        <li><a href="#followers"><div class="key-stat">
          <h1>0</h1>
          <h3>Followers</h3>
        </div></a></li>
        <li><a href="#friends"><div class="key-stat">
          <h1>0</h1>
          <h3>Friends</h3>
        </div></a></li>
        <li class="no-border"><a href="#links"><div class="key-stat">
          <h1>&nbsp;</h1>
          <h3>Links</h3>
        </div></a></li>
      </ul>
      <div class="section" id="updates">
        <img src="/thinkup/assets/img/dart_wht.png" alt="" class="dart" id="dart1">
        <div class="thinkup-canvas clearfix">
          <div class="container_24">
            <h4 class="trigger clearfix"><a href="#">Statistics</a></h4>
            <div class="footnote toggle_container clearfix">
              <div class="grid_13 push_10 append_20">
                <div class="clearfix bt">
                  <div class="grid_9 bold alpha">Average updates per day</div>
                  <div class="grid_4 right omega"></div>
                </div>
                <div class="clearfix bt">
                  <div class="grid_9 bold alpha">Joined</div>
                  <div class="grid_4 right omega"></div>
                </div>
                <div class="clearfix bt">
                  <div class="grid_13 bold alpha omega">&nbsp;</div>
                </div>
              </div>
            </div> <!-- end .footnote -->
            <div class="clearfix append_20">
              <div class="grid_1 prefix_1">
                <div id="loading_updates"><img src="/thinkup/assets/img/ui_throbber.gif" alt="Loading..."></div>
              </div>
              <div class="grid_22 alpha append_20 clearfix">
                <ul id="updates-menu" class="menu">
                                    	<li class="menu-item selected" id="tweets-all">All</li>
                                    	<li class="menu-item" id="tweets-mostreplies">Most replied-to</li>
                                    	<li class="menu-item" id="tweets-mostretweeted">Most retweeted</li>
                                    	<li class="menu-item" id="tweets-convo">Conversations</li>
                                  </ul>
              </div>
            </div>
            <div class="grid_22 prefix_1">
              <div id="posts_content"></div>
            </div>
          </div>
        </div> <!-- end .thinkup-canvas -->
      </div> <!-- end #updates -->
      
      <div class="section" id="replies">
        <img src="/thinkup/assets/img/dart_wht.png" alt="" class="dart" id="dart2">
        <div class="thinkup-canvas clearfix">
          <div class="container_24">
            <h4 class="trigger clearfix"><a href="#">Statistics</a></h4>
            <div class="grid_24 footnote toggle_container clearfix">
              <div class="grid_13 push_10 append_20">
                <div class="clearfix bt">
                  <div class="grid_9 bold alpha">Mentions loaded into ThinkUp</div>
                  <div class="grid_4 right omega">0</div>
                </div>
                                <div class="clearfix bt">
                  <div class="grid_13 bold alpha omega">&nbsp;</div>
                </div>
              </div>
            </div>
            <div class="grid_1 prefix_1">
              <div id="loading_replies"><img src="/thinkup/assets/img/ui_throbber.gif" alt="Loading..."></div>
            </div>
            <div class="grid_22 alpha append_20 clearfix">
              <ul id="replies-menu" class="menu">
                                    	<li class="menu-item selected" id="mentions-all">All Mentions</li>
                                    	<li class="menu-item" id="mentions-allreplies">Replies</li>
                                    	<li class="menu-item" id="mentions-orphan">Not Replies or Forwards</li>
                                    	<li class="menu-item" id="mentions-standalone">Standalone Mentions</li>
                                </ul>
            </div>
            <div class="grid_22 prefix_1">
              <div id="replies_content"></div>
            </div>
          </div> <!-- end .container_24 -->
        </div> <!-- end .thinkup-canvas -->
      </div> <!-- end #replies -->
      
      <div class="section" id="followers">
        <img src="/thinkup/assets/img/dart_wht.png" alt="" class="dart" id="dart3">
        <div class="thinkup-canvas clearfix">
          <div class="container_24">
            <h4 class="trigger clearfix"><a href="#">Statistics</a></h4>
            <div class="grid_24 footnote toggle_container">
              <div class="grid_13 push_10 append_20">
                <div class="clearfix bt">
                  <div class="grid_9 bold alpha">Followers loaded into ThinkUp</div>
                  <div class="grid_4 right omega"></div>
                </div>
                                                <div class="clearfix bt">
                  <div class="grid_13 bold alpha omega">&nbsp;</div>
                </div>
              </div>
            </div> <!-- end .grid_24 -->
            <div class="grid_1 prefix_1">
              <div id="loading_followers"><img src="/thinkup/assets/img/ui_throbber.gif" alt="Loading..."></div>
            </div>
            <div class="grid_22 alpha append_20 clearfix">
              <ul id="followers-menu" class="menu">
                                    	<li class="menu-item selected" id="followers-history">Follower Count</li>
                                    	<li class="menu-item" id="followers-mostfollowed">Most-followed</li>
                                    	<li class="menu-item" id="followers-leastlikely">Least Likely</li>
                                    	<li class="menu-item" id="followers-former">Former</li>
                                    	<li class="menu-item" id="followers-earliest">Earliest Joiners</li>
                                </ul>
            </div>
            <div class="grid_22 prefix_1">
              <div id="followers_content"></div>
            </div>
          </div>
        </div> <!-- end .thinkup-canvas -->
      </div> <!-- end #followers -->
      
      <div class="section" id="friends">
        <img src="/thinkup/assets/img/dart_wht.png" alt="" class="dart" id="dart4">
        <div class="thinkup-canvas clearfix">
          <div class="container_24">
            <h4 class="trigger clearfix"><a href="#">Statistics</a></h4>
            <div class="grid_24 footnote toggle_container">
              <div class="grid_13 push_10 append_20">
                <div class="clearfix bt">
                  <div class="grid_9 bold alpha">Friends</div>
                  <div class="grid_4 right omega">0</div>
                </div>
                <div class="clearfix bt">
                  <div class="grid_9 bold alpha">Profiles loaded</div>
                  <div class="grid_4 right omega">0</div>
                </div>
                                                <div class="clearfix bt">
                  <div class="grid_13 bold alpha omega">&nbsp;</div>
                </div>
              </div>
            </div>
            <div class="grid_1 prefix_1">
              <div id="loading_friends"><img src="/thinkup/assets/img/ui_throbber.gif" alt="Loading..."></div>
            </div>
            <div class="grid_22 alpha append_20 clearfix">
              <ul id="friends-menu" class="menu">
                                    	<li class="menu-item selected" id="friends-mostactive">Chatterboxes</li>
                                    	<li class="menu-item" id="friends-leastactive">Deadbeats</li>
                                    	<li class="menu-item" id="friends-mostfollowed">Popular</li>
                                    	<li class="menu-item" id="friends-former">Former</li>
                                    	<li class="menu-item" id="friends-notmutual">Not Mutual</li>
                  				
              </ul>
            </div>
            <div class="grid_22 prefix_1">
              <div id="friends_content"></div>
            </div>
          </div>
        </div> <!-- end .thinkup-canvas -->
      </div> <!-- end #friends -->
      
      <div class="section" id="links">
        <img src="/thinkup/assets/img/dart_wht.png" alt="" class="dart" id="dart5">
        <div class="thinkup-canvas clearfix">
          <div class="container_24">
            <!--<h4 class="trigger clearfix"><a href="#">Statistics</a></h4>-->
            <div class="grid_24 footnote toggle_container">&nbsp;</div>
            <div class="grid_1 prefix_1">
              <div id="loading_links"><img src="/thinkup/assets/img/ui_throbber.gif" alt="Loading..."></div>
            </div>
            <div class="grid_22 alpha append_20 clearfix">
              <ul id="links-menu" class="menu">
                                    	<li class="menu-item selected" id="links-friends">Links From Friends</li>
                                    	<li class="menu-item" id="links-photos">Photos</li>
                                </ul>
            </div>
            <div class="grid_22 prefix_1">
              <div id="links_content"></div>
            </div>
          </div>
        </div> <!-- end .thinkup-canvas -->
      </div> <!-- end #links -->
    
    </div> <!-- end #tabs -->
  </div> <!-- end #thinkup-tabs -->
  
  <div role="contentinfo" id="keystats">
    <h2>Key Stats</h2>
    <ul>
      <li>Followers: <cite title="Total followers according to Twitter.com (not necessarily loaded into ThinkUp)">0</cite><br /> <small></small></li>
      <li>Friends: 0 <br /> <small></small></li>
      <li>0 Tweets <small></small><br /><small> per day since </small></li>
      <li>0 Mentions in System<br /></li>
      <li>
    </ul>
    <ul id="sidemenu">
      <li>Conversations
        <ul class="submenu">
          <li>Your Tweets</li>
          <li>Mentions</li>
          <li>Messages</li>
          <li>Recent Links</li>
          <li>Favorited</li>
          <li>Retweets</li>
        </ul>
      </li>
      <li>Stats
        <ul class="submenu">
          <li>Followers Over Time</li>
          <li>Tweets per Day</li>
          <li>Replies per Day</li>
          <li>Retweets per Day</li>
          <li>Mentions per Day</li>
          <li>Noise Level by Day</li>
        </ul>
      </li>
      <li>People
        <ul class="submenu">
          <li>Most Popular Followers</li>
          <li>Least Likely</li>
          <li>Chatterboxes</li>
          <li id="friends-leastactive">Deadbeats</li>
          <li>Repliers</li>
          <li>Messagers</li>
          <li>Messagees</li>
          <li>Favoritees</li>
        </ul>
      </li>
      <li>Relationships
        <ul class="submenu">
          <li>Former Followers</li>
          <li>Not-Mutual</li>
        </ul>
      </li>
    </ul>
    <br><br>
      </div> <!-- end #keystats -->
  
</div> <!-- #content -->

  <div class="container small center">
  
    <div id="ft" role="contentinfo">
      <p>
                  Status:
          <cite title="0 of 0"><strong>0%</strong></cite> of your posts loaded: <a href="/thinkup/post/export.php?u=HugeIdea&n=twitter">Export</a> | 
          <cite title="0 of 0">0%</cite> of your followers' profiles loaded  |
          <cite title="0 of 0">0%</cite> of your friends' profiles loaded |
                It is nice to be nice.
      </p>
    </div> <!-- #ft -->
  
  </div> <!-- .content -->

</body>

</html>