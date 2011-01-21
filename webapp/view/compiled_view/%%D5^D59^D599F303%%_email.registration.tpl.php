<?php /* Smarty version 2.6.26, created on 2010-08-19 14:57:54
         compiled from _email.registration.tpl */ ?>
Click on the link below to activate your new <?php echo $this->_tpl_vars['app_title']; ?>
 account:

http://<?php echo $this->_tpl_vars['server']; ?>
<?php echo $this->_tpl_vars['site_root_path']; ?>
session/activate.php?usr=<?php echo $this->_tpl_vars['email']; ?>
&code=<?php echo $this->_tpl_vars['activ_code']; ?>


Thanks for registering!