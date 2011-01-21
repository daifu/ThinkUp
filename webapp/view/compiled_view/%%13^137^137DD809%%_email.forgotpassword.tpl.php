<?php /* Smarty version 2.6.26, created on 2010-08-30 14:27:17
         compiled from _email.forgotpassword.tpl */ ?>
Hi there!

Looks like you forgot your <?php echo $this->_tpl_vars['apptitle']; ?>
 password. Go to this URL to reset it:
http://<?php echo $this->_tpl_vars['server']; ?>
<?php echo $this->_tpl_vars['site_root_path']; ?>
<?php echo $this->_tpl_vars['recovery_url']; ?>


Or, if you remembered it, you can log in here and disregard this email:
http://<?php echo $this->_tpl_vars['server']; ?>
<?php echo $this->_tpl_vars['site_root_path']; ?>
session/login.php