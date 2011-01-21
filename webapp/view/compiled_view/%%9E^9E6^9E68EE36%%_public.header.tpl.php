<?php /* Smarty version 2.6.26, created on 2010-08-19 14:38:17
         compiled from _public.header.tpl */ ?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title><?php if ($this->_tpl_vars['controller_title']): ?><?php echo $this->_tpl_vars['controller_title']; ?>
 | <?php endif; ?><?php echo $this->_tpl_vars['app_title']; ?>
</title>
  <link rel="shortcut icon" href="<?php echo $this->_tpl_vars['site_root_path']; ?>
assets/img/favicon.ico">
  <link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['site_root_path']; ?>
assets/css/base.css">
  <link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['site_root_path']; ?>
assets/css/positioning.css">
  <link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['site_root_path']; ?>
assets/css/style.css">
  <link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['site_root_path']; ?>
assets/css/jquery-ui-1.7.1.custom.css">

  <!-- jquery -->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>	
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

  <?php echo '
  <style>
  #status-bar {
  background-image:url(\''; ?>
<?php echo $this->_tpl_vars['site_root_path']; ?>
<?php echo 'assets/img/statusbar-bkgd.png\');
  }
  #page-bkgd {
  background-image:url(\''; ?>
<?php echo $this->_tpl_vars['site_root_path']; ?>
<?php echo 'assets/img/statusbar-shadow.png\');
  background-repeat:repeat-x;
  }
  .line { background:url(\''; ?>
<?php echo $this->_tpl_vars['site_root_path']; ?>
<?php echo 'assets/img/border-line-470.gif\') no-repeat center bottom;
  margin: 8px auto;
  height: 1px;
  }
  </style>
  '; ?>


</head>
<body>