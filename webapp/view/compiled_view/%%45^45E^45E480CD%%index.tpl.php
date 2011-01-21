<?php /* Smarty version 2.6.26, created on 2010-08-22 21:48:05
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'number_format', 'index.tpl', 29, false),array('modifier', 'date_format', 'index.tpl', 62, false),array('modifier', 'urlencode', 'index.tpl', 309, false),array('modifier', 'relative_datetime', 'index.tpl', 312, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script type="text/javascript">
  <?php echo '
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
  '; ?>

</script>

<div class="container">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_usermessage.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <div id="thinkup-tabs">
    <div role="application" id="tabs">
      <ul>
        <li><a href="#updates"><div class="key-stat">
          <h1><?php echo ((is_array($_tmp=$this->_tpl_vars['owner_stats']->post_count)) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</h1>
          <h3>Posts</h3>
        </div></a></li>
        <li><a href="#replies"><div class="key-stat">
          <h1><?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->total_replies_in_system)) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</h1>
          <h3>Replies</h3>
        </div></a></li>
        <li><a href="#followers"><div class="key-stat">
          <h1><?php echo ((is_array($_tmp=$this->_tpl_vars['owner_stats']->follower_count)) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</h1>
          <h3>Followers</h3>
        </div></a></li>
        <li><a href="#friends"><div class="key-stat">
          <h1><?php echo ((is_array($_tmp=$this->_tpl_vars['owner_stats']->friend_count)) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</h1>
          <h3>Friends</h3>
        </div></a></li>
        <li class="no-border"><a href="#links"><div class="key-stat">
          <h1>&nbsp;</h1>
          <h3>Links</h3>
        </div></a></li>
      </ul>
      <div class="section" id="updates">
        <img src="<?php echo $this->_tpl_vars['site_root_path']; ?>
assets/img/dart_wht.png" alt="" class="dart" id="dart1">
        <div class="thinkup-canvas clearfix">
          <div class="container_24">
            <h4 class="trigger clearfix"><a href="#">Statistics</a></h4>
            <div class="footnote toggle_container clearfix">
              <div class="grid_13 push_10 append_20">
                <div class="clearfix bt">
                  <div class="grid_9 bold alpha">Average updates per day</div>
                  <div class="grid_4 right omega"><?php echo $this->_tpl_vars['owner_stats']->avg_tweets_per_day; ?>
</div>
                </div>
                <div class="clearfix bt">
                  <div class="grid_9 bold alpha">Joined</div>
                  <div class="grid_4 right omega"><?php echo ((is_array($_tmp=$this->_tpl_vars['owner_stats']->joined)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%D") : smarty_modifier_date_format($_tmp, "%D")); ?>
</div>
                </div>
                <div class="clearfix bt">
                  <div class="grid_13 bold alpha omega">&nbsp;</div>
                </div>
              </div>
            </div> <!-- end .footnote -->
            <div class="clearfix append_20">
              <div class="grid_1 prefix_1">
                <div id="loading_updates"><img src="<?php echo $this->_tpl_vars['site_root_path']; ?>
assets/img/ui_throbber.gif" alt="Loading..."></div>
              </div>
              <div class="grid_22 alpha append_20 clearfix">
                <ul id="updates-menu" class="menu">
                  <?php $_from = $this->_tpl_vars['post_tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['tabloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['tabloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['ptkey'] => $this->_tpl_vars['pt']):
        $this->_foreach['tabloop']['iteration']++;
?>
                  	<li class="menu-item<?php if (($this->_foreach['tabloop']['iteration']-1) == 0): ?> selected<?php endif; ?>" id="<?php echo $this->_tpl_vars['pt']->short_name; ?>
"><?php echo $this->_tpl_vars['pt']->name; ?>
</li>
                  <?php endforeach; endif; unset($_from); ?>
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
        <img src="<?php echo $this->_tpl_vars['site_root_path']; ?>
assets/img/dart_wht.png" alt="" class="dart" id="dart2">
        <div class="thinkup-canvas clearfix">
          <div class="container_24">
            <h4 class="trigger clearfix"><a href="#">Statistics</a></h4>
            <div class="grid_24 footnote toggle_container clearfix">
              <div class="grid_13 push_10 append_20">
                <div class="clearfix bt">
                  <div class="grid_9 bold alpha">Mentions loaded into ThinkUp</div>
                  <div class="grid_4 right omega"><?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->total_replies_in_system)) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</div>
                </div>
                <?php if ($this->_tpl_vars['instance']->total_replies_in_system > 0): ?>
                  <div class="clearfix bt">
                    <div class="grid_9 bold alpha">Average replies per day</div>
                    <div class="grid_4 right omega"><?php echo $this->_tpl_vars['instance']->avg_replies_per_day; ?>
</div>
                  </div>
                  <div class="clearfix bt">
                    <div class="grid_9 bold alpha">Earliest reply loaded into ThinkUp</div>
                    <div class="grid_4 right omega"><?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->earliest_reply_in_system)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%D") : smarty_modifier_date_format($_tmp, "%D")); ?>
</div>
                  </div>
                <?php endif; ?>
                <div class="clearfix bt">
                  <div class="grid_13 bold alpha omega">&nbsp;</div>
                </div>
              </div>
            </div>
            <div class="grid_1 prefix_1">
              <div id="loading_replies"><img src="<?php echo $this->_tpl_vars['site_root_path']; ?>
assets/img/ui_throbber.gif" alt="Loading..."></div>
            </div>
            <div class="grid_22 alpha append_20 clearfix">
              <ul id="replies-menu" class="menu">
                  <?php $_from = $this->_tpl_vars['replies_tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['tabloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['tabloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['ptkey'] => $this->_tpl_vars['pt']):
        $this->_foreach['tabloop']['iteration']++;
?>
                  	<li class="menu-item<?php if (($this->_foreach['tabloop']['iteration']-1) == 0): ?> selected<?php endif; ?>" id="<?php echo $this->_tpl_vars['pt']->short_name; ?>
"><?php echo $this->_tpl_vars['pt']->name; ?>
</li>
                  <?php endforeach; endif; unset($_from); ?>
              </ul>
            </div>
            <div class="grid_22 prefix_1">
              <div id="replies_content"></div>
            </div>
          </div> <!-- end .container_24 -->
        </div> <!-- end .thinkup-canvas -->
      </div> <!-- end #replies -->
      
      <div class="section" id="followers">
        <img src="<?php echo $this->_tpl_vars['site_root_path']; ?>
assets/img/dart_wht.png" alt="" class="dart" id="dart3">
        <div class="thinkup-canvas clearfix">
          <div class="container_24">
            <h4 class="trigger clearfix"><a href="#">Statistics</a></h4>
            <div class="grid_24 footnote toggle_container">
              <div class="grid_13 push_10 append_20">
                <div class="clearfix bt">
                  <div class="grid_9 bold alpha">Followers loaded into ThinkUp</div>
                  <div class="grid_4 right omega"><?php echo $this->_tpl_vars['total_follows_with_full_details']; ?>
</div>
                </div>
                <?php if ($this->_tpl_vars['total_follows_protected'] > 0): ?>
                  <div class="clearfix bt">
                    <div class="grid_9 bold alpha">Followers who are private</div>
                    <div class="grid_4 right omega"><?php echo ((is_array($_tmp=$this->_tpl_vars['total_follows_protected'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
 (<?php echo $this->_tpl_vars['percent_followers_protected']; ?>
%)</div>
                  </div>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['total_follows_with_errors'] > 0): ?>
                  <div class="clearfix bt">
                    <div class="grid_9 bold alpha">Followers who are suspended</div>
                    <div class="grid_4 right omega"><?php echo ((is_array($_tmp=$this->_tpl_vars['total_follows_with_errors'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
 (<?php echo $this->_tpl_vars['percent_followers_suspended']; ?>
%)</div>
                  </div>
                <?php endif; ?>
                <div class="clearfix bt">
                  <div class="grid_13 bold alpha omega">&nbsp;</div>
                </div>
              </div>
            </div> <!-- end .grid_24 -->
            <div class="grid_1 prefix_1">
              <div id="loading_followers"><img src="<?php echo $this->_tpl_vars['site_root_path']; ?>
assets/img/ui_throbber.gif" alt="Loading..."></div>
            </div>
            <div class="grid_22 alpha append_20 clearfix">
              <ul id="followers-menu" class="menu">
                  <?php $_from = $this->_tpl_vars['followers_tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['tabloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['tabloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['ptkey'] => $this->_tpl_vars['pt']):
        $this->_foreach['tabloop']['iteration']++;
?>
                  	<li class="menu-item<?php if (($this->_foreach['tabloop']['iteration']-1) == 0): ?> selected<?php endif; ?>" id="<?php echo $this->_tpl_vars['pt']->short_name; ?>
"><?php echo $this->_tpl_vars['pt']->name; ?>
</li>
                  <?php endforeach; endif; unset($_from); ?>
              </ul>
            </div>
            <div class="grid_22 prefix_1">
              <div id="followers_content"></div>
            </div>
          </div>
        </div> <!-- end .thinkup-canvas -->
      </div> <!-- end #followers -->
      
      <div class="section" id="friends">
        <img src="<?php echo $this->_tpl_vars['site_root_path']; ?>
assets/img/dart_wht.png" alt="" class="dart" id="dart4">
        <div class="thinkup-canvas clearfix">
          <div class="container_24">
            <h4 class="trigger clearfix"><a href="#">Statistics</a></h4>
            <div class="grid_24 footnote toggle_container">
              <div class="grid_13 push_10 append_20">
                <div class="clearfix bt">
                  <div class="grid_9 bold alpha">Friends</div>
                  <div class="grid_4 right omega"><?php echo ((is_array($_tmp=$this->_tpl_vars['owner_stats']->friend_count)) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</div>
                </div>
                <div class="clearfix bt">
                  <div class="grid_9 bold alpha">Profiles loaded</div>
                  <div class="grid_4 right omega"><?php echo ((is_array($_tmp=$this->_tpl_vars['total_friends'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</div>
                </div>
                <?php if ($this->_tpl_vars['total_friends_protected'] > 0): ?>
                  <div class="clearfix bt">
                    <div class="grid_9 bold alpha">Friends who are private</div>
                    <div class="grid_4 right omega"><?php echo ((is_array($_tmp=$this->_tpl_vars['total_friends_protected'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</div>
                  </div>
                <?php endif; ?>
                <?php if ($this->_tpl_vars['total_friends_with_errors'] > 0): ?>
                  <div class="clearfix bt">
                    <div class="grid_9 bold alpha">Friends suspended</div>
                    <div class="grid_4 right omega"><?php echo ((is_array($_tmp=$this->_tpl_vars['total_friends_with_errors'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</div>
                  </div>
                <?php endif; ?>
                <div class="clearfix bt">
                  <div class="grid_13 bold alpha omega">&nbsp;</div>
                </div>
              </div>
            </div>
            <div class="grid_1 prefix_1">
              <div id="loading_friends"><img src="<?php echo $this->_tpl_vars['site_root_path']; ?>
assets/img/ui_throbber.gif" alt="Loading..."></div>
            </div>
            <div class="grid_22 alpha append_20 clearfix">
              <ul id="friends-menu" class="menu">
                  <?php $_from = $this->_tpl_vars['friends_tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['tabloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['tabloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['ptkey'] => $this->_tpl_vars['pt']):
        $this->_foreach['tabloop']['iteration']++;
?>
                  	<li class="menu-item<?php if (($this->_foreach['tabloop']['iteration']-1) == 0): ?> selected<?php endif; ?>" id="<?php echo $this->_tpl_vars['pt']->short_name; ?>
"><?php echo $this->_tpl_vars['pt']->name; ?>
</li>
                  <?php endforeach; endif; unset($_from); ?>
				
              </ul>
            </div>
            <div class="grid_22 prefix_1">
              <div id="friends_content"></div>
            </div>
          </div>
        </div> <!-- end .thinkup-canvas -->
      </div> <!-- end #friends -->
      
      <div class="section" id="links">
        <img src="<?php echo $this->_tpl_vars['site_root_path']; ?>
assets/img/dart_wht.png" alt="" class="dart" id="dart5">
        <div class="thinkup-canvas clearfix">
          <div class="container_24">
            <!--<h4 class="trigger clearfix"><a href="#">Statistics</a></h4>-->
            <div class="grid_24 footnote toggle_container">&nbsp;</div>
            <div class="grid_1 prefix_1">
              <div id="loading_links"><img src="<?php echo $this->_tpl_vars['site_root_path']; ?>
assets/img/ui_throbber.gif" alt="Loading..."></div>
            </div>
            <div class="grid_22 alpha append_20 clearfix">
              <ul id="links-menu" class="menu">
                  <?php $_from = $this->_tpl_vars['links_tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['tabloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['tabloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['ptkey'] => $this->_tpl_vars['pt']):
        $this->_foreach['tabloop']['iteration']++;
?>
                  	<li class="menu-item<?php if (($this->_foreach['tabloop']['iteration']-1) == 0): ?> selected<?php endif; ?>" id="<?php echo $this->_tpl_vars['pt']->short_name; ?>
"><?php echo $this->_tpl_vars['pt']->name; ?>
</li>
                  <?php endforeach; endif; unset($_from); ?>
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
      <li>Followers: <cite title="Total followers according to Twitter.com (not necessarily loaded into ThinkUp)"><?php echo ((is_array($_tmp=$this->_tpl_vars['owner_stats']->follower_count)) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</cite><br /> <small><?php if ($this->_tpl_vars['total_follows_protected'] > 0): ?> (<cite title="<?php echo ((is_array($_tmp=$this->_tpl_vars['total_follows_protected'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
 of <?php echo ((is_array($_tmp=$this->_tpl_vars['total_follows_with_full_details'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
 total follower profiles loaded into ThinkUp"><?php echo $this->_tpl_vars['percent_followers_protected']; ?>
% protected</cite>)<br /><?php endif; ?><?php if ($this->_tpl_vars['total_follows_with_errors'] > 0): ?> (<cite title="<?php echo ((is_array($_tmp=$this->_tpl_vars['total_follows_with_errors'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
 of <?php echo ((is_array($_tmp=$this->_tpl_vars['total_follows_with_full_details'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
 follower profiles loaded into ThinkUp"><?php echo $this->_tpl_vars['percent_followers_suspended']; ?>
% suspended</cite>)<?php endif; ?></small></li>
      <li>Friends: <?php echo ((is_array($_tmp=$this->_tpl_vars['owner_stats']->friend_count)) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
 <br /> <small><?php if ($this->_tpl_vars['total_friends_protected']): ?>(<?php echo ((is_array($_tmp=$this->_tpl_vars['total_friends_protected'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
 protected)<br /><?php endif; ?><?php if ($this->_tpl_vars['total_friends_with_errors'] > 0): ?> (<?php echo ((is_array($_tmp=$this->_tpl_vars['total_friends_with_errors'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
 suspended)<?php endif; ?></small></li>
      <li><?php echo ((is_array($_tmp=$this->_tpl_vars['owner_stats']->tweet_count)) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
 Tweets <small></small><br /><small><?php echo $this->_tpl_vars['owner_stats']->avg_tweets_per_day; ?>
 per day since <?php echo ((is_array($_tmp=$this->_tpl_vars['owner_stats']->joined)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%D") : smarty_modifier_date_format($_tmp, "%D")); ?>
</small></li>
      <li><?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->total_replies_in_system)) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
 Mentions in System<br /><?php if ($this->_tpl_vars['instance']->total_replies_in_system > 0): ?><small><?php echo $this->_tpl_vars['instance']->avg_replies_per_day; ?>
 per day since <?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->earliest_reply_in_system)) ? $this->_run_mod_handler('date_format', true, $_tmp, "%D") : smarty_modifier_date_format($_tmp, "%D")); ?>
</small><?php endif; ?></li>
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
    <?php if (sizeof ( $this->_tpl_vars['instances'] ) > 1): ?>
      <br><br>
      <h2>Twitter Accounts</h2>
      <ul>
        <?php $_from = $this->_tpl_vars['instances']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['i']):
?>
          <?php if ($this->_tpl_vars['i']->network_user_id != $this->_tpl_vars['instance']->network_user_id): ?>
            <li>
              <a href="?u=<?php echo ((is_array($_tmp=$this->_tpl_vars['i']->network_username)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
"><?php echo $this->_tpl_vars['i']->network_username; ?>
</a>
              <br>
              <small>
                updated <?php echo ((is_array($_tmp=$this->_tpl_vars['i']->crawler_last_run)) ? $this->_run_mod_handler('relative_datetime', true, $_tmp) : smarty_modifier_relative_datetime($_tmp)); ?>

                <?php if (! $this->_tpl_vars['i']->is_active): ?> (paused)<?php endif; ?>
              </small>
            </li>
          <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
        <li><a href="<?php echo $this->_tpl_vars['site_root_path']; ?>
account/">Add an account &rarr;</a></li>
      </ul>
    <?php endif; ?>
  </div> <!-- end #keystats -->
  
</div> <!-- #content -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>