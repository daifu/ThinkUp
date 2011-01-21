<?php /* Smarty version 2.6.26, created on 2010-08-30 15:02:37
         compiled from session.resetpassword.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_header.tpl", 'smarty_include_vars' => array('title' => 'Reset Password','statusbar' => 'no')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="container_24 thinkup-canvas round-all">
  <div class="prepend_20">
    <h1>Reset Password</h1>
  </div>
  <div class="clearfix prepend_20">
    <div class="grid_17 prefix_3 left">
      <?php if (isset ( $this->_tpl_vars['errormsg'] )): ?>
        <div class="error">
          <?php echo $this->_tpl_vars['errormsg']; ?>

        </div>
      <?php endif; ?>
    </div>
  </div>
  <form method="post" action="" class="reset_password">
    <div class="clearfix">
      <div class="grid_4 prefix_5 right">
        <label for="password">
          New password:
        </label>
      </div>
      <div class="grid_10 left">
        <input type="password" name="password" id="password">
      </div>
    </div>
    <div class="clearfix">
      <div class="grid_4 prefix_5 right">
        <label for="password_confirm">
          Retype password:
        </label>
      </div>
      <div class="grid_10 left">
        <input type="password" name="password_confirm" id="password_confirm">
      </div>
    </div>
    <div class="clearfix">
      <div class="grid_10 prefix_9 left">
        <input type="submit" id="login-save" name="Submit" class="tt-button ui-state-default ui-priority-secondary ui-corner-all" value="Submit">
      </div>
    </div>
  </form>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_footer.tpl", 'smarty_include_vars' => array('stats' => 'no')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>