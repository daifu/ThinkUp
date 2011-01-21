<?php /* Smarty version 2.6.26, created on 2010-08-19 14:38:17
         compiled from public.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'link_usernames_to_twitter', 'public.tpl', 14, false),array('modifier', 'number_format', 'public.tpl', 37, false),array('modifier', 'relative_datetime', 'public.tpl', 38, false),array('modifier', 'count', 'public.tpl', 40, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_public.header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_public.header.statusbar.tpl", 'smarty_include_vars' => array('mode' => 'public')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <div class="thinkup-canvas round-all container_24">
    <div class="clearfix prepend_20 append_20">
      <div class="grid_22 push_1 clearfix">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_usermessage.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php if ($this->_tpl_vars['post'] && ( $this->_tpl_vars['replies'] || $this->_tpl_vars['retweets'] )): ?>
          <div class="clearfix">
            <div class="grid_2 alpha">
              <img src="<?php echo $this->_tpl_vars['post']->author_avatar; ?>
" class="avatar2">
            </div>
            <div class="<?php if ($this->_tpl_vars['replies'] || $this->_tpl_vars['retweets']): ?>grid_13<?php else: ?>grid_19<?php endif; ?>">
              <span class="tweet"><?php echo ((is_array($_tmp=$this->_tpl_vars['post']->post_text)) ? $this->_run_mod_handler('link_usernames_to_twitter', true, $_tmp) : smarty_modifier_link_usernames_to_twitter($_tmp)); ?>
</span>
              <?php if ($this->_tpl_vars['post']->link->expanded_url && ! $this->_tpl_vars['post']->link->is_image && $this->_tpl_vars['post']->link->expanded_url != $this->_tpl_vars['post']->link->url): ?>
                <br><a href="<?php echo $this->_tpl_vars['post']->link->expanded_url; ?>
" title="<?php echo $this->_tpl_vars['post']->link->expanded_url; ?>
">
                  <?php echo $this->_tpl_vars['post']->link->expanded_url; ?>

                </a>
              <?php endif; ?>
              <div class="grid_10 omega small gray <?php if ($this->_tpl_vars['replies'] || $this->_tpl_vars['retweets']): ?>prefix_3 prepend<?php else: ?>prefix_10<?php endif; ?>">
                <img src="<?php echo $this->_tpl_vars['site_root_path']; ?>
assets/img/social_icons/<?php echo $this->_tpl_vars['post']->network; ?>
.png" class="float-l">
                Posted at <?php echo $this->_tpl_vars['post']->adj_pub_date; ?>
 via <?php echo $this->_tpl_vars['post']->source; ?>
<br>
                From: <?php echo $this->_tpl_vars['post']->location; ?>

                <?php if ($this->_tpl_vars['post']->is_geo_encoded == 1): ?>
                <div>
                <a href="<?php echo $this->_tpl_vars['site_root_path']; ?>
map.php?t=post&pid=<?php echo $this->_tpl_vars['post']->post_id; ?>
&n=<?php echo $this->_tpl_vars['post']->network; ?>
" title="Locate on Map">
                  <img src="<?php echo $this->_tpl_vars['site_root_path']; ?>
assets/img/map_icon.png" class="map-icon map-icon-public">
                </a>
                </div>
                <?php endif; ?>
              </div>
            </div>
            <div class="grid_7 center big-number omega">
              <div class="bl">
                <div class="key-stat">
                  <?php if ($this->_tpl_vars['replies']): ?>
                    <h1><?php echo ((is_array($_tmp=$this->_tpl_vars['post']->reply_count_cache)) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</h1>
                    <h3>replies in <?php echo ((is_array($_tmp=$this->_tpl_vars['post']->adj_pub_date)) ? $this->_run_mod_handler('relative_datetime', true, $_tmp) : smarty_modifier_relative_datetime($_tmp)); ?>
</h3>
                  <?php else: ?>
                    <h1><a href="#fwds" name="fwds"><?php echo ((is_array($_tmp=count($this->_tpl_vars['retweets']))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</a>
                    fwds to<br><a href="#fwds"><?php echo ((is_array($_tmp=$this->_tpl_vars['rtreach'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</a></h1>
                    <h3>total reach</h3>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div> <!-- end .clearfix -->
          <?php if ($this->_tpl_vars['replies']): ?>
            <div class="append_20 clearfix">
              <?php $_from = $this->_tpl_vars['replies']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_post.public.tpl", 'smarty_include_vars' => array('t' => $this->_tpl_vars['t'],'sort' => 'no')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
              <?php endforeach; endif; unset($_from); ?>
            </div>
          <?php endif; ?>
          <div class="append prepend clearfix">
            <a href="#" class="show_replies tt-button ui-state-default tt-button-icon-left ui-corner-all "
               style="display:none;">
              <span class="ui-icon ui-icon-circle-arrow-w"></span>
              Show All Replies
            </a>
          </div>
          <div class="clearfix">
            <div class="<?php if ($this->_tpl_vars['retweets']): ?>grid_13<?php else: ?>grid_19<?php endif; ?>">
              <span class="tweet"></span>
              <div class="grid_10 omega small gray <?php if ($this->_tpl_vars['retweets']): ?>prefix_3 prepend<?php else: ?>prefix_10<?php endif; ?>"></div>
            </div>
            
            <?php if ($this->_tpl_vars['retweets'] && count($this->_tpl_vars['replies']) > 0): ?>
              <div class="grid_7 center big-number omega">
                <div class="bl">
                  <div class="key-stat">
                    <h1><a href="#fwds" name="fwds"><?php echo ((is_array($_tmp=count($this->_tpl_vars['retweets']))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</a>
                    fwds to<br /> <a href="#fwds"><?php echo ((is_array($_tmp=$this->_tpl_vars['rtreach'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
</a></h1>
                    <h3>total reach</h3>
                  </div>
                </div>
              </div>
            <?php endif; ?>
          </div> <!-- end .clearfix -->
          <?php if ($this->_tpl_vars['retweets']): ?>
            <div class="append_20 clearfix">
              <?php $_from = $this->_tpl_vars['retweets']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_post.public.tpl", 'smarty_include_vars' => array('t' => $this->_tpl_vars['t'],'sort' => 'no')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
              <?php endforeach; endif; unset($_from); ?>
            </div>
          <?php endif; ?>
          <div class="append prepend clearfix">
            <a href="#" class="show_forwards tt-button ui-state-default tt-button-icon-left ui-corner-all "
               style="display:none;">
              <span class="ui-icon ui-icon-circle-arrow-w"></span>
              Show All Forwards
            </a>
          </div>
        <div class="append prepend clearfix">
          <a href="<?php echo $this->_tpl_vars['site_root_path']; ?>
public.php" class="tt-button ui-state-default tt-button-icon-left ui-corner-all">
            <span class="ui-icon ui-icon-circle-arrow-w"></span>
            Back to the public timeline
          </a>
        </div>
        <?php else: ?>
          &nbsp;
        <?php endif; ?>
        <?php if ($this->_tpl_vars['posts']): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_pagination.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
        <?php if ($this->_tpl_vars['header']): ?><h1><?php echo $this->_tpl_vars['header']; ?>
</h1><?php endif; ?>
        <?php if ($this->_tpl_vars['description']): ?><h4><?php echo $this->_tpl_vars['description']; ?>
</h4><?php endif; ?>
        <?php if ($this->_tpl_vars['posts']): ?>
          <?php $_from = $this->_tpl_vars['posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_post.public.tpl", 'smarty_include_vars' => array('t' => $this->_tpl_vars['t'],'username_link' => 'internal')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
          <?php endforeach; endif; unset($_from); ?>
          <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_pagination.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php endif; ?>


        <?php if ($this->_tpl_vars['instance']): ?>
        <!--begin public user dashboard-->
          <?php if ($this->_tpl_vars['user_details']): ?>
          <div class="clearfix">
            <div class="grid_2 alpha">
              <img src="<?php echo $this->_tpl_vars['user_details']->avatar; ?>
" class="avatar2">
            </div>
            <div class="grid_19">
              <img src="<?php echo $this->_tpl_vars['site_root_path']; ?>
assets/img/social_icons/<?php echo $this->_tpl_vars['user_details']->network; ?>
.png">
              <span class="tweet"><?php echo $this->_tpl_vars['user_details']->username; ?>
</span>
            </div>
         </div>
         <?php endif; ?>

        <?php if ($this->_tpl_vars['follower_count_history_by_day']['history'] && $this->_tpl_vars['follower_count_history_by_week']['history']): ?>
<br /><br />
        <table width="100%"><tr><td>
        Follower Count By Day<br /><?php if (count($this->_tpl_vars['follower_count_history_by_day']['history']) < 2): ?><i>Not enough data yet</i><?php else: ?><br />
        <img src="http://chart.apis.google.com/chart?chs=425x200&chxt=x,y&chxl=0:|<?php $_from = $this->_tpl_vars['follower_count_history_by_day']['history']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?><?php echo $this->_tpl_vars['t']['date']; ?>
|<?php endforeach; endif; unset($_from); ?>1:|<?php $_from = $this->_tpl_vars['follower_count_history_by_day']['y_axis']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?><?php echo ((is_array($_tmp=$this->_tpl_vars['t'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
<?php if (! ($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>|<?php endif; ?><?php endforeach; endif; unset($_from); ?>&cht=ls&chco=0077CC&chd=t:<?php $_from = $this->_tpl_vars['follower_count_history_by_day']['percentages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?><?php echo $this->_tpl_vars['t']; ?>
<?php if (! ($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>,<?php endif; ?><?php endforeach; endif; unset($_from); ?>&chm=B,76A4FB,0,0,0&chg=33">
        <?php endif; ?>
        </td><td>
        Follower Count By Week<br /><?php if (count($this->_tpl_vars['follower_count_history_by_week']['history']) < 2): ?><i>Not enough data yet</i><?php else: ?><br />
        <img src="http://chart.apis.google.com/chart?chs=425x200&chxt=x,y&chxl=0:|<?php $_from = $this->_tpl_vars['follower_count_history_by_week']['history']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?><?php echo $this->_tpl_vars['t']['date']; ?>
|<?php endforeach; endif; unset($_from); ?>1:|<?php $_from = $this->_tpl_vars['follower_count_history_by_week']['y_axis']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?><?php echo ((is_array($_tmp=$this->_tpl_vars['t'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
<?php if (! ($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>|<?php endif; ?><?php endforeach; endif; unset($_from); ?>&cht=ls&chco=0077CC&chd=t:<?php $_from = $this->_tpl_vars['follower_count_history_by_week']['percentages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?><?php echo $this->_tpl_vars['t']; ?>
<?php if (! ($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>,<?php endif; ?><?php endforeach; endif; unset($_from); ?>&chm=B,76A4FB,0,0,0&chg=33">
        <?php endif; ?>
        </td></tr>
        </table>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['most_replied_to_1wk']): ?>
<hr />
<h2 style="font-size:200%;margin-top:10px">This Week's Most Replied-To Posts</h2>
          <?php $_from = $this->_tpl_vars['most_replied_to_1wk']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_post.public.tpl", 'smarty_include_vars' => array('t' => $this->_tpl_vars['t'],'headings' => 'NONE')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
          <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['least_likely_followers']): ?>
<hr />
<h2 style="font-size:200%;margin-top:10px">Least Likely Followers</h2>
            <?php $_from = $this->_tpl_vars['least_likely_followers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['uid'] => $this->_tpl_vars['u']):
        $this->_foreach['foo']['iteration']++;
?>
                <a href="http://twitter.com/<?php echo $this->_tpl_vars['u']['user_name']; ?>
" title="<?php echo $this->_tpl_vars['u']['user_name']; ?>
">
                  <img src="<?php echo $this->_tpl_vars['u']['avatar']; ?>
"  height="48" width="48" />
                </a> 
            <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['most_replied_to_1wk']): ?>
<hr />
<h2 style="font-size:200%;margin-top:10px">This Week's Most Retweeted</h2>
          <?php $_from = $this->_tpl_vars['most_retweeted_1wk']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_post.public.tpl", 'smarty_include_vars' => array('t' => $this->_tpl_vars['t'],'headings' => 'NONE')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
          <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['conversations']): ?>
<hr />
<h2 style="font-size:200%;margin-top:10px">Conversations</h2>
          <?php $_from = $this->_tpl_vars['conversations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['r']):
        $this->_foreach['foo']['iteration']++;
?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_post.qa.tpl", 'smarty_include_vars' => array('t' => $this->_tpl_vars['t'],'headings' => 'NONE')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
          <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['most_replied_to_alltime']): ?>
<hr />
<h2 style="font-size:200%;margin-top:10px">All-Time Most Replied-To</h2>
          <?php $_from = $this->_tpl_vars['most_replied_to_alltime']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_post.public.tpl", 'smarty_include_vars' => array('t' => $this->_tpl_vars['t'],'headings' => 'NONE')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
          <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['most_retweeted_alltime']): ?>
<hr />
<h2 style="font-size:200%;margin-top:10px">All-Time Most Retweeted</h2>
          <?php $_from = $this->_tpl_vars['most_retweeted_alltime']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_post.public.tpl", 'smarty_include_vars' => array('t' => $this->_tpl_vars['t'],'headings' => 'NONE')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
          <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
        
        <div class="append prepend clearfix">
          <a href="<?php echo $this->_tpl_vars['site_root_path']; ?>
public.php" class="tt-button ui-state-default tt-button-icon-left ui-corner-all">
            <span class="ui-icon ui-icon-circle-arrow-w"></span>
            Back to the public timeline
          </a>
        </div>

        <?php endif; ?>
      </div>
    </div>
  </div> <!-- end .thinkup-canvas -->

  <script type="text/javascript" src="<?php echo $this->_tpl_vars['site_root_path']; ?>
assets/js/linkify.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo $this->_tpl_vars['site_root_path']; ?>
assets/js/easytooltip.js"></script>
  <script type="text/javascript" src="<?php echo $this->_tpl_vars['site_root_path']; ?>
plugins/geoencoder/assets/js/locationfilter.js"></script>
  
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_footer.tpl", 'smarty_include_vars' => array('stats' => 'no')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>