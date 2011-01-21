<?php /* Smarty version 2.6.26, created on 2010-08-19 14:40:42
         compiled from session.login.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_header.tpl", 'smarty_include_vars' => array('title' => 'Log In','statusbar' => 'no')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="container_24 thinkup-canvas round-all">
  <div class="prepend_20">
    <h1>Log In</h1>
  </div>
  <div class="clearfix prepend_20">
    <div class="grid_17 prefix_3 left">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_usermessage.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
  </div>
  <form name="form1" method="post" action="<?php echo $this->_tpl_vars['site_root_path']; ?>
session/login.php" class="login">
    <div class="clearfix">
      <div class="grid_4 prefix_5 right">
        <label for="email">
          Email:
        </label>
      </div>
      <div class="grid_10 left">
        <input type="text" name="email" id="email"<?php if (isset ( $this->_tpl_vars['email'] )): ?> value="<?php echo $this->_tpl_vars['email']; ?>
"<?php endif; ?>>
      </div>
    </div>
    <div class="clearfix">
      <div class="grid_4 prefix_5 right">
        <label for="pwd">
          Password:
        </label>
      </div>
      <div class="grid_10 left">
        <input type="password" name="pwd" id="pwd">
      </div>
    </div>
    <div class="clearfix">
      <div class="grid_10 prefix_9 left">
        <input type="submit" id="login-save" name="Submit" class="tt-button ui-state-default ui-priority-secondary ui-corner-all" value="Log In">
      </div>
    </div>
  </form>
  <div class="center prepend_20 append_20">
    <a href="register.php">Register</a> |
    <a href="forgot.php">Forgot password</a>
  </div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_footer.tpl", 'smarty_include_vars' => array('stats' => 'no')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>