<?php /* Smarty version 2.6.26, created on 2010-08-27 15:17:47
         compiled from _header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'urlencode', '_header.tpl', 86, false),)), $this); ?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title><?php if ($this->_tpl_vars['controller_title']): ?><?php echo $this->_tpl_vars['controller_title']; ?>
 | <?php endif; ?><?php echo $this->_tpl_vars['app_title']; ?>
</title>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->_tpl_vars['site_root_path']; ?>
assets/img/favicon.ico">
  
  <!-- jquery -->
  <link type="text/css" rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  
  <?php if ($this->_tpl_vars['header_scripts']['0']): ?><!-- controller specific scripts -->
  <script type="text/javascript">
  var site_root_path = '<?php echo $this->_tpl_vars['site_root_path']; ?>
';
  </script>
  <?php endif; ?>

  <?php $_from = $this->_tpl_vars['header_scripts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['script']):
?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['site_root_path']; ?>
<?php echo $this->_tpl_vars['script']; ?>
"></script>
  <?php endforeach; endif; unset($_from); ?>


  <!-- custom css -->
  <link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['site_root_path']; ?>
assets/css/base.css">
  <link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['site_root_path']; ?>
assets/css/positioning.css">
  <link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['site_root_path']; ?>
assets/css/style.css">


  <script type="text/javascript">
    <?php echo '
      // tabs functionality
      $(function() {
        $("#tabs").tabs();
      });
      
      // buttons functionality
      $(function() {
        //all hover and click logic for buttons
        $(".tt-button:not(.ui-state-disabled)")
        .hover(
          function() {
            $(this).addClass("ui-state-hover"); 
          },
          function() {
            $(this).removeClass("ui-state-hover"); 
          }
        )
        .mousedown(function() {
            $(this).parents(\'.tt-buttonset-single:first\').find(".tt-button.ui-state-active").removeClass("ui-state-active");
            if ($(this).is(\'.ui-state-active.tt-button-toggleable, .tt-buttonset-multi .ui-state-active\')) {
              $(this).removeClass("ui-state-active");
            }
            else {
              $(this).addClass("ui-state-active");
            }
        })
        .mouseup(function() {
          if (! $(this).is(\'.tt-button-toggleable, .tt-buttonset-single .tt-button,  .tt-buttonset-multi .tt-button\') ) {
            $(this).removeClass("ui-state-active");
          }
        });
      });
    '; ?>

    <?php if ($this->_tpl_vars['load'] != 'no'): ?>
      <?php echo '
        $(document).ready(function() {
          // References
          var sections = $(".menu li");
          
          var loading = $("#loading");
          var loading_replies = $("#loading_replies");
          var loading_followers = $("#loading_followers");
          var loading_friends = $("#loading_friends");
          var loading_links =  $("#loading_links");
          
          var posts_content = $("#posts_content");
          var replies_content = $("#replies_content");
          var followers_content = $("#followers_content");
          var friends_content = $("#friends_content");
          var links_content =  $("#links_content");
      '; ?>

      showLoading();
      posts_content.load("<?php echo $this->_tpl_vars['site_root_path']; ?>
inline.view.php?u=<?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->network_username)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&n=<?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->network)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&d=<?php echo $this->_tpl_vars['post_tabs'][0]->short_name; ?>
", hideLoading);
      replies_content.load("<?php echo $this->_tpl_vars['site_root_path']; ?>
inline.view.php?u=<?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->network_username)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&n=<?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->network)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&d=<?php echo $this->_tpl_vars['replies_tabs'][0]->short_name; ?>
", hideLoading);
      followers_content.load("<?php echo $this->_tpl_vars['site_root_path']; ?>
inline.view.php?u=<?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->network_username)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&n=<?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->network)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&d=<?php echo $this->_tpl_vars['followers_tabs'][0]->short_name; ?>
", hideLoading);
      friends_content.load("<?php echo $this->_tpl_vars['site_root_path']; ?>
inline.view.php?u=<?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->network_username)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&n=<?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->network)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&d=<?php echo $this->_tpl_vars['friends_tabs'][0]->short_name; ?>
", hideLoading);
      links_content.load("<?php echo $this->_tpl_vars['site_root_path']; ?>
inline.view.php?u=<?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->network_username)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&n=<?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->network)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&d=<?php echo $this->_tpl_vars['links_tabs'][0]->short_name; ?>
", hideLoading);
      <?php echo '
          // Manage click events.
          sections.click(function() {
            $(this).siblings().removeClass(\'selected\');
            $(this).addClass(\'selected\');
            
            // Show the loading bar.
            showLoading();
            
            // Load selected section.
            switch (this.id) { '; ?>

            //posts tabs
            <?php $_from = $this->_tpl_vars['post_tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['tabloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['tabloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['ptkey'] => $this->_tpl_vars['pt']):
        $this->_foreach['tabloop']['iteration']++;
?>
                case "<?php echo $this->_tpl_vars['pt']->short_name; ?>
": 
                    posts_content.load("inline.view.php?u=<?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->network_username)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&n=<?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->network)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&d=<?php echo $this->_tpl_vars['pt']->short_name; ?>
", hideLoading);
                    break;
            <?php endforeach; endif; unset($_from); ?>
            //replies tabs
            <?php $_from = $this->_tpl_vars['replies_tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['tabloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['tabloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['ptkey'] => $this->_tpl_vars['pt']):
        $this->_foreach['tabloop']['iteration']++;
?>
                case "<?php echo $this->_tpl_vars['pt']->short_name; ?>
":
                    replies_content.load("inline.view.php?u=<?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->network_username)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&n=<?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->network)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&d=<?php echo $this->_tpl_vars['pt']->short_name; ?>
", hideLoading);
                    break;
            <?php endforeach; endif; unset($_from); ?>
            <?php $_from = $this->_tpl_vars['followers_tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['tabloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['tabloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['ptkey'] => $this->_tpl_vars['pt']):
        $this->_foreach['tabloop']['iteration']++;
?>
                case "<?php echo $this->_tpl_vars['pt']->short_name; ?>
":
                    followers_content.load("inline.view.php?u=<?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->network_username)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&n=<?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->network)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&d=<?php echo $this->_tpl_vars['pt']->short_name; ?>
", hideLoading);
                    break;
            <?php endforeach; endif; unset($_from); ?>
            <?php $_from = $this->_tpl_vars['friends_tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['tabloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['tabloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['ptkey'] => $this->_tpl_vars['pt']):
        $this->_foreach['tabloop']['iteration']++;
?>
                case "<?php echo $this->_tpl_vars['pt']->short_name; ?>
":
                    friends_content.load("inline.view.php?u=<?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->network_username)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&n=<?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->network)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&d=<?php echo $this->_tpl_vars['pt']->short_name; ?>
", hideLoading);
                    break;
            <?php endforeach; endif; unset($_from); ?>
            <?php $_from = $this->_tpl_vars['links_tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['tabloop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['tabloop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['ptkey'] => $this->_tpl_vars['pt']):
        $this->_foreach['tabloop']['iteration']++;
?>
                case "<?php echo $this->_tpl_vars['pt']->short_name; ?>
":
                    links_content.load("inline.view.php?u=<?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->network_username)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&n=<?php echo ((is_array($_tmp=$this->_tpl_vars['instance']->network)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&d=<?php echo $this->_tpl_vars['pt']->short_name; ?>
", hideLoading);
                    break;
            <?php endforeach; endif; unset($_from); ?>
              default:
                // Hide loading bar if there is no selected section.
                hideLoading();
                break;
            }
          });
      <?php echo '
          // Show loading bar
          function showLoading() {
            loading
              .css({visibility:"visible", opacity:"1", display:"block"})
            loading_replies
              .css({visibility:"visible", opacity:"1", display:"block"})
            loading_followers
              .css({visibility:"visible", opacity:"1", display:"block"})
            loading_friends
              .css({visibility:"visible", opacity:"1", display:"block"})
            loading_links
              .css({visibility:"visible", opacity:"1", display:"block"})
          }
          
          // Hide loading bar
          function hideLoading() {
            loading.fadeTo(1000, 0);
            loading_replies.fadeTo(1000, 0);
            loading_followers.fadeTo(1000, 0);
            loading_friends.fadeTo(1000, 0);
            loading_links.fadeTo(1000, 0);
          };
        }); // end $(document).ready(function() {
      '; ?>

    <?php endif; ?>
  </script>
</head>

<body>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_header.login.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>