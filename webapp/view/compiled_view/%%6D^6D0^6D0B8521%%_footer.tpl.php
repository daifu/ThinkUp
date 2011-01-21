<?php /* Smarty version 2.6.26, created on 2010-08-19 14:38:17
         compiled from _footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'number_format', '_footer.tpl', 7, false),)), $this); ?>
  <div class="container small center">
  
    <div id="ft" role="contentinfo">
      <p>
        <?php if ($this->_tpl_vars['stats'] != 'no'): ?>
          Status:
          <cite title="<?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->total_posts_in_system)) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
 of <?php echo ((is_array($_tmp=$this->_tpl_vars['owner_stats']->post_count)) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
"><strong><?php echo ((is_array($_tmp=$this->_tpl_vars['percent_tweets_loaded'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
%</strong></cite> of your posts loaded: <a href="<?php echo $this->_tpl_vars['site_root_path']; ?>
post/export.php?u=<?php echo $this->_tpl_vars['instance']->network_username; ?>
&n=<?php echo $this->_tpl_vars['instance']->network; ?>
">Export</a> | 
          <cite title="<?php echo ((is_array($_tmp=$this->_tpl_vars['total_follows_with_full_details'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
 of <?php echo ((is_array($_tmp=$this->_tpl_vars['owner_stats']->follower_count)) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['percent_followers_loaded'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
%</cite> of your followers' profiles loaded  |
          <cite title="<?php echo ((is_array($_tmp=$this->_tpl_vars['total_friends'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
 of <?php echo ((is_array($_tmp=$this->_tpl_vars['owner_stats']->friend_count)) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['percent_friends_loaded'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
%</cite> of your friends' profiles loaded |
        <?php else: ?>
          <a href="<?php echo $this->_tpl_vars['site_root_path']; ?>
">Go to the public timeline.</a><br>
          Set up your own <a href="http://thinkupapp.com">ThinkUp</a>.<br>
        <?php endif; ?>
        It is nice to be nice.
      </p>
    </div> <!-- #ft -->
  
  </div> <!-- .content -->

</body>

</html>