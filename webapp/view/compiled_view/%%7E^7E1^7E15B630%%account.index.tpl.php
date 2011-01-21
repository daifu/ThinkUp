<?php /* Smarty version 2.6.26, created on 2010-08-19 15:02:27
         compiled from account.index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'capitalize', 'account.index.tpl', 119, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_header.tpl", 'smarty_include_vars' => array('load' => 'no')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="container_24">
  <div role="application" id="tabs">
    
    <ul>
      <li><a href="#plugins">Plug-ins</a></li>
      <li><a href="#instances">Your ThinkUp Password</a></li>
      <?php if ($this->_tpl_vars['user_is_admin']): ?><li><a href="#ttusers">All ThinkUp Accounts</a></li><?php endif; ?>
    </ul>
    
    <div class="section thinkup-canvas clearfix" id="plugins">
      <div class="alpha omega grid_22 prefix_1 clearfix prepend_20 append_20">
        <div class="append_20 clearfix">
        <?php if ($this->_tpl_vars['user_is_admin']): ?>
        <div class="ui-state-highlight ui-corner-all" style="margin: 20px 0px; padding: .5em 0.7em;">
              <p>
                <span class="ui-icon ui-icon-info" style="float: left; margin:.3em 0.3em 0 0;"></span>
                As an administrator you can configure all installed plugins.
              </p>
            </div>
        <?php endif; ?>
          <?php if ($this->_tpl_vars['installed_plugins']): ?>
            <?php $_from = $this->_tpl_vars['installed_plugins']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['ipindex'] => $this->_tpl_vars['ip']):
        $this->_foreach['foo']['iteration']++;
?>
              <?php if (($this->_foreach['foo']['iteration'] <= 1)): ?>
                <div class="clearfix header">
                  <div class="grid_4 alpha">configure</div>
                  <div class="grid_4">version/author</div>
                  <div class="grid_10">description</div>
                  <?php if ($this->_tpl_vars['is_user_admin']): ?>
                  <div class="grid_4 omega">activate/deactivate</div>
                  <?php endif; ?>
                </div>
              <?php endif; ?>
              <?php if ($this->_tpl_vars['user_is_admin'] || $this->_tpl_vars['ip']->is_active): ?>
              <div class="clearfix bt append prepend">
                <div class="grid_4 small alpha"><img src="<?php echo $this->_tpl_vars['site_root_path']; ?>
plugins/<?php echo $this->_tpl_vars['ip']->folder_name; ?>
/<?php echo $this->_tpl_vars['ip']->icon; ?>
" class="float-l"><?php if ($this->_tpl_vars['ip']->is_active): ?><a href="?p=<?php echo $this->_tpl_vars['ip']->folder_name; ?>
"><?php endif; ?><?php echo $this->_tpl_vars['ip']->name; ?>
<?php if ($this->_tpl_vars['ip']->is_active): ?></a><?php endif; ?></div>
                <div class="grid_4 small"><!--(Currently <?php if ($this->_tpl_vars['ip']->is_active): ?>Active<?php else: ?>Inactive<?php endif; ?>)<br />-->Version <?php echo $this->_tpl_vars['ip']->version; ?>
<br />by <?php echo $this->_tpl_vars['ip']->author; ?>
</div>
                <div class="grid_10">
                  <?php echo $this->_tpl_vars['ip']->description; ?>

                  <a href="<?php echo $this->_tpl_vars['ip']->homepage; ?>
">[Plug-in home]</a>
                </div>
                <?php if ($this->_tpl_vars['user_is_admin']): ?>
                <div class="grid_4 omega">
                  <span id="divpluginactivation<?php echo $this->_tpl_vars['ip']->id; ?>
"><input type="submit" name="submit" class="tt-button ui-state-default ui-priority-secondary ui-corner-all <?php if ($this->_tpl_vars['ip']->is_active): ?>btnDeactivate<?php else: ?>btnActivate<?php endif; ?>" id="<?php echo $this->_tpl_vars['ip']->id; ?>
" value="<?php if ($this->_tpl_vars['ip']->is_active): ?>Deactivate<?php else: ?>Activate<?php endif; ?>" /></span>
                </div>
                <?php endif; ?>
              </div>
              <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
          <?php else: ?>
            <a href="?m=manage" class="tt-button ui-state-default tt-button-icon-left ui-corner-all"><span class="ui-icon ui-icon-circle-arrow-w"></span>Back to plugins</a>
          <?php endif; ?>
        </div>
        <?php if ($this->_tpl_vars['body']): ?>
          <?php echo $this->_tpl_vars['body']; ?>

        <?php endif; ?>
      </div>
    </div> <!-- end #plugins -->
    
    <div class="section" id="instances">
      <div class="thinkup-canvas clearfix">
        <div class="alpha omega grid_22 prefix_1 clearfix prepend_20 append_20">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_usermessage.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
          <form name="changepass" method="post" action="index.php?m=manage#instances" class="login prepend_20 append_20">
            <div class="clearfix">
              <div class="grid_9 prefix_1 right"><label for="oldpass">Current password:</label></div>
              <div class="grid_9 left"><input name="oldpass" type="password" id="oldpass"></div>
            </div>
            <div class="clearfix">
              <div class="grid_9 prefix_1 right"><label for="pass1">New password:</label></div>
              <div class="grid_9 left">
                <input name="pass1" type="password" id="pass1">
                <br>
                <div class="ui-state-highlight ui-corner-all" style="margin-top: 10px; padding: .5em 0.7em;"> 
                  <p>
                    <span class="ui-icon ui-icon-info" style="float: left; margin:.3em 0.3em 0 0;"></span>
                    Must be at least 5 characters.
                  </p>
                </div>
              </div>
              <div class="clearfix append_bottom">
                <div class="grid_9 prefix_1 right">
                  <label for="pass2">Re-type new password:</label>
                </div>
                <div class="grid_9 left">
                  <input name="pass2" type="password" id="pass2">
                </div>
              </div>
              <div class="prefix_10 grid_9 left">
                <input type="submit" id="login-save" name="changepass" value="Change password" class="tt-button ui-state-default ui-priority-secondary ui-corner-all">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div> <!-- end #instances -->
    
    <?php if ($this->_tpl_vars['user_is_admin']): ?>
      <div class="section" id="ttusers">
        <div class="thinkup-canvas clearfix">
          <div class="alpha omega grid_20 prefix_1 clearfix prepend_20 append_20">
            <h2 class="subhead">User accounts in this ThinkUp installation</h2>
            <div class="ui-state-highlight ui-corner-all" style="margin: 20px 0px; padding: .5em 0.7em;">
              <p>
                <span class="ui-icon ui-icon-info" style="float: left; margin:.3em 0.3em 0 0;"></span>
                As an administrator you can see all accounts in the system.
              </p>
            </div>
            <ul class="user-accounts">
              <?php $_from = $this->_tpl_vars['owners']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oid'] => $this->_tpl_vars['o']):
?>
                <li>
                  <b><?php echo $this->_tpl_vars['o']->full_name; ?>
 (<?php echo $this->_tpl_vars['o']->email; ?>
)</b><?php if ($this->_tpl_vars['o']->last_login != '0000-00-00'): ?>, last logged in <?php echo $this->_tpl_vars['o']->last_login; ?>
<?php endif; ?>
                  <br /><?php if ($this->_tpl_vars['o']->is_activated): ?>Activated<?php else: ?>Not activated<?php endif; ?><?php if ($this->_tpl_vars['o']->is_admin): ?>, Administrator<?php endif; ?>
                  <?php if ($this->_tpl_vars['o']->instances != null): ?>
                    <ul>
                      <?php $_from = $this->_tpl_vars['o']->instances; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['iid'] => $this->_tpl_vars['i']):
?>
                        <li>
                          <?php echo $this->_tpl_vars['i']->network_username; ?>
 (<?php echo ((is_array($_tmp=$this->_tpl_vars['i']->network)) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
)
                          <?php if (! $this->_tpl_vars['i']->is_active): ?> (paused)<?php endif; ?>
                        </li>
                      <?php endforeach; endif; unset($_from); ?>
                    </ul>
                  <?php endif; ?>
                </li>
              <?php endforeach; endif; unset($_from); ?>
            </ul>
          </div>
        </div> <!-- end .thinkup-canvas -->
      </div> <!-- end #ttusers -->
    <?php endif; ?> <!-- end is_admin -->
    
  </div>
</div>

<script type="text/javascript">
  <?php echo '
  $(function() {
    $(".btnPub").click(function() {
      var element = $(this);
      var u = element.attr("id");
      var dataString = \'u=\' + u + "&p=1";
      $.ajax({
        type: "GET",
        url: "'; ?>
<?php echo $this->_tpl_vars['site_root_path']; ?>
<?php echo 'account/toggle-public.php",
        data: dataString,
        success: function() {
          $(\'#div\' + u).html("<span class=\'success\' id=\'message" + u + "\'></span>");
          $(\'#message\' + u).html("Added to public timeline!").hide().fadeIn(1500, function() {
            $(\'#message\' + u);
          });
        }
      });
      return false;
    });
    
    $(".btnPriv").click(function() {
      var element = $(this);
      var u = element.attr("id");
      var dataString = \'u=\' + u + "&p=0";
      $.ajax({
        type: "GET",
        url: "'; ?>
<?php echo $this->_tpl_vars['site_root_path']; ?>
<?php echo 'account/toggle-public.php",
        data: dataString,
        success: function() {
          $(\'#div\' + u).html("<span class=\'success\' id=\'message" + u + "\'></span>");
          $(\'#message\' + u).html("Removed from public timeline!").hide().fadeIn(1500, function() {
            $(\'#message\' + u);
          });
        }
      });
      return false;
    });
  });
  
  $(function() {
    $(".btnPlay").click(function() {
      var element = $(this);
      var u = element.attr("id");
      var dataString = \'u=\' + u + "&p=1";
      $.ajax({
        type: "GET",
        url: "'; ?>
<?php echo $this->_tpl_vars['site_root_path']; ?>
<?php echo 'account/toggle-active.php",
        data: dataString,
        success: function() {
          $(\'#divactivate\' + u).html("<span class=\'success mt_10\' id=\'message" + u + "\'></span>");
          $(\'#message\' + u).html("Crawling has started!").hide().fadeIn(1500, function() {
            $(\'#message\' + u);
          });
        }
      });
      return false;
    });
    
    $(".btnPause").click(function() {
      var element = $(this);
      var u = element.attr("id");
      var dataString = \'u=\' + u + "&p=0";
      $.ajax({
        type: "GET",
        url: "'; ?>
<?php echo $this->_tpl_vars['site_root_path']; ?>
<?php echo 'account/toggle-active.php",
        data: dataString,
        success: function() {
          $(\'#divactivate\' + u).html("<span class=\'success mt_10\' id=\'message" + u + "\'></span>");
          $(\'#message\' + u).html("Crawling has paused!").hide().fadeIn(1500, function() {
            $(\'#message\' + u);
          });
        }
      });
      return false;
    });
  });
  
  $(function() {
    $(".btnActivate").click(function() {
      var element = $(this);
      var u = element.attr("id");
      var dataString = \'pid=\' + u + "&a=1";
      $.ajax({
        type: "GET",
        url: "'; ?>
<?php echo $this->_tpl_vars['site_root_path']; ?>
<?php echo 'account/toggle-pluginactive.php",
        data: dataString,
        success: function() {
          $(\'#divpluginactivation\' + u).html("<span class=\'success mt_10\' id=\'message" + u + "\'></span>");
          $(\'#message\' + u).html("Activated!").hide().fadeIn(1500, function() {
            $(\'#message\' + u);
          });
        }
      });
      return false;
    });
    
    $(".btnDeactivate").click(function() {
      var element = $(this);
      var u = element.attr("id");
      var dataString = \'pid=\' + u + "&a=0";
      $.ajax({
        type: "GET",
        url: "'; ?>
<?php echo $this->_tpl_vars['site_root_path']; ?>
<?php echo 'account/toggle-pluginactive.php",
        data: dataString,
        success: function() {
          $(\'#divpluginactivation\' + u).html("<span class=\'success mt_10\' id=\'message" + u + "\'></span>");
          $(\'#message\' + u).html("Deactivated!").hide().fadeIn(1500, function() {
            $(\'#message\' + u);
          });
        }
      });
      return false;
    });
  });
  '; ?>

</script>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_footer.tpl", 'smarty_include_vars' => array('stats' => 'no')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>