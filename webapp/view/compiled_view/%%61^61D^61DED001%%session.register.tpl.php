<?php /* Smarty version 2.6.26, created on 2010-08-29 13:39:20
         compiled from session.register.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_header.tpl", 'smarty_include_vars' => array('title' => 'Registration','statusbar' => 'no')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="container_24 thinkup-canvas round-all">
  <div class="prepend_20">
    <h1>Register</h1>
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
  <?php if (! $this->_tpl_vars['closed'] && ! $this->_tpl_vars['successmsg']): ?>
    <form name="form1" method="post" action="register.php" class="login append_20">
      <div class="clearfix">
        <div class="grid_4 prefix_5 right">
          <label for="full_name">
            Name:
          </label>
        </div>
        <div class="grid_10 left">
          <input name="full_name" type="text" id="full_name"<?php if (isset ( $this->_tpl_vars['name'] )): ?> value="<?php echo $this->_tpl_vars['name']; ?>
"<?php endif; ?>>
          <small>
            <br>
            Example: Angelina Jolie
          </small>
        </div>
      </div>
      <div class="clearfix">
        <div class="grid_4 prefix_5 right">
          <label for="email">
            Email:
          </label>
        </div>
        <div class="grid_10 left">
          <input name="email" type="text" id="email"<?php if (isset ( $this->_tpl_vars['mail'] )): ?> value="<?php echo $this->_tpl_vars['mail']; ?>
"<?php endif; ?>>
          <small>
            <br>
            Example: angie@example.com
          </small>
        </div>
      </div>
      <div class="clearfix">
        <div class="grid_4 prefix_5 right">
          <label for="pass1">
            Password:
          </label>
        </div>
        <div class="grid_10 left">
          <input name="pass1" type="password" id="pass1">
          <small>
            <br>
            At least 5 characters
          </small>
        </div>
      </div>
      <div class="clearfix">
        <div class="grid_6 prefix_3 right">
          <label for="pass2">
            Retype password:
          </label>
        </div>
        <div class="grid_10 left">
          <input name="pass2" type="password" id="pass2">
          <small>
            <br>
          </small>
        </div>
      </div>
      <div class="clearfix">
        <div class="grid_6 prefix_3 right">
          <label for="user_code">
            Prove you&rsquo;re human:
          </label>
        </div>
        <div class="grid_10 left">
          <div class="captcha">
            <?php echo $this->_tpl_vars['captcha']; ?>

          </div>
        </div>
      </div>
      <div class="clearfix">
        <div class="grid_10 prefix_9 left">
          <input type="submit" name="Submit" id="login-save" class="tt-button ui-state-default ui-priority-secondary ui-corner-all" value="Register">
        </div>
      </div>
    </form>
  <?php endif; ?>
  <div class="center prepend_20 append_20">
  <?php if (! $this->_tpl_vars['successmsg']): ?>
    <a href="login.php">Log In</a> |
    <a href="forgot.php">Forgot password</a>
  <?php endif; ?>
  </div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_footer.tpl", 'smarty_include_vars' => array('stats' => 'no')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>