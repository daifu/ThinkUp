<?php /* Smarty version 2.6.26, created on 2010-08-30 14:23:56
         compiled from session.forgot.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_header.tpl", 'smarty_include_vars' => array('title' => 'Forgot password','statusbar' => 'no')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="container_24 thinkup-canvas round-all">
  <div class="prepend_20">
    <h1>Forgot Password</h1>
  </div>
  <div class="clearfix prepend_20">
    <div class="grid_17 prefix_3 left">
      <?php if (isset ( $this->_tpl_vars['errormsg'] )): ?>
        <div class="error">
          <?php echo $this->_tpl_vars['errormsg']; ?>

        </div>
      <?php endif; ?>
      <?php if (isset ( $this->_tpl_vars['successmsg'] )): ?>
        <div class="success">
          <?php echo $this->_tpl_vars['successmsg']; ?>

        </div>
      <?php endif; ?>
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

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_footer.tpl", 'smarty_include_vars' => array('stats' => 'no')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>