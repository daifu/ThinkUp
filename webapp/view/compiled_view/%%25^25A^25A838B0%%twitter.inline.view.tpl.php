<?php /* Smarty version 2.6.26, created on 2010-08-22 21:48:07
         compiled from /Users/daifuye/ThinkUp/webapp/plugins/twitter/view/twitter.inline.view.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '/Users/daifuye/ThinkUp/webapp/plugins/twitter/view/twitter.inline.view.tpl', 127, false),)), $this); ?>
<div class="">
  <?php if ($this->_tpl_vars['description']): ?><i><?php echo $this->_tpl_vars['description']; ?>
</i><?php endif; ?>
</div>
    <?php if ($this->_tpl_vars['error']): ?>
    <p class="error">
        <?php echo $this->_tpl_vars['error']; ?>

    </p>    
    <?php endif; ?>
<?php if (( $this->_tpl_vars['display'] == 'tweets-all' && ! $this->_tpl_vars['all_tweets'] ) || ( $this->_tpl_vars['display'] == 'tweets-mostreplies' && ! $this->_tpl_vars['most_replied_to_tweets'] ) || ( $this->_tpl_vars['display'] == 'tweets-mostretweeted' && ! $this->_tpl_vars['most_retweeted'] ) || ( $this->_tpl_vars['display'] == 'tweets-convo' && ! $this->_tpl_vars['author_replies'] )): ?>
  <div class="ui-state-highlight ui-corner-all" style="margin: 20px 0px; padding: .5em 0.7em;"> 
    <p>
      <span class="ui-icon ui-icon-info" style="float: left; margin:.3em 0.3em 0 0;"></span>
      No tweets to display.
    </p>
  </div>
<?php endif; ?>

<?php if ($this->_tpl_vars['all_tweets'] && $this->_tpl_vars['display'] == 'tweets-all'): ?>
  <?php $_from = $this->_tpl_vars['all_tweets']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_post.mine.tpl", 'smarty_include_vars' => array('t' => $this->_tpl_vars['t'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['most_replied_to_tweets']): ?>
  <?php $_from = $this->_tpl_vars['most_replied_to_tweets']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_post.mine.tpl", 'smarty_include_vars' => array('t' => $this->_tpl_vars['t'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['most_retweeted']): ?>
  <?php $_from = $this->_tpl_vars['most_retweeted']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_post.mine.tpl", 'smarty_include_vars' => array('t' => $this->_tpl_vars['t'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['author_replies']): ?>
  <?php $_from = $this->_tpl_vars['author_replies']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tahrt'] => $this->_tpl_vars['r']):
        $this->_foreach['foo']['iteration']++;
?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_post.qa.tpl", 'smarty_include_vars' => array('t' => $this->_tpl_vars['t'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

<?php if (( $this->_tpl_vars['display'] == 'mentions-all' && ! $this->_tpl_vars['all_mentions'] ) || ( $this->_tpl_vars['display'] == 'mentions-allreplies' && ! $this->_tpl_vars['all_replies'] ) || ( $this->_tpl_vars['display'] == 'mentions-orphan' && ! $this->_tpl_vars['orphan_replies'] ) || ( $this->_tpl_vars['display'] == 'mentions-standalone' && ! $this->_tpl_vars['standalone_replies'] )): ?>
  <div class="ui-state-highlight ui-corner-all" style="margin: 20px 0px; padding: .5em 0.7em;"> 
    <p>
      <span class="ui-icon ui-icon-info" style="float: left; margin:.3em 0.3em 0 0;"></span>
      No data to display.
    </p>
  </div>
<?php endif; ?>

<?php if ($this->_tpl_vars['orphan_replies']): ?>
  <?php $_from = $this->_tpl_vars['orphan_replies']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_post.otherorphan.tpl", 'smarty_include_vars' => array('t' => $this->_tpl_vars['t'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <?php endforeach; endif; unset($_from); ?>
  </form>
<?php endif; ?> 

<?php if ($this->_tpl_vars['all_mentions']): ?>
  <?php $_from = $this->_tpl_vars['all_mentions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_post.otherorphan.tpl", 'smarty_include_vars' => array('t' => $this->_tpl_vars['t'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['all_replies']): ?>
  <?php $_from = $this->_tpl_vars['all_replies']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_post.other.tpl", 'smarty_include_vars' => array('t' => $this->_tpl_vars['t'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['standalone_replies']): ?>
  <?php $_from = $this->_tpl_vars['standalone_replies']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_post.otherorphan.tpl", 'smarty_include_vars' => array('t' => $this->_tpl_vars['t'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

<?php if (( $this->_tpl_vars['display'] == 'friends-mostactive' && ! $this->_tpl_vars['people'] ) || ( $this->_tpl_vars['display'] == 'friends-leastactive' && ! $this->_tpl_vars['people'] ) || ( $this->_tpl_vars['display'] == 'friends-mostfollowed' && ! $this->_tpl_vars['people'] ) || ( $this->_tpl_vars['display'] == 'friends-former' && ! $this->_tpl_vars['people'] ) || ( $this->_tpl_vars['display'] == 'friends-notmutual' && ! $this->_tpl_vars['people'] ) || ( $this->_tpl_vars['display'] == 'followers-mostfollowed' && ! $this->_tpl_vars['people'] ) || ( $this->_tpl_vars['display'] == 'followers-leastlikely' && ! $this->_tpl_vars['people'] ) || ( $this->_tpl_vars['display'] == 'followers-former' && ! $this->_tpl_vars['people'] ) || ( $this->_tpl_vars['display'] == 'followers-earliest' && ! $this->_tpl_vars['people'] )): ?>
  <div class="ui-state-highlight ui-corner-all" style="margin: 20px 0px; padding: .5em 0.7em;"> 
    <p>
      <span class="ui-icon ui-icon-info" style="float: left; margin:.3em 0.3em 0 0;"></span>
      No users found.
    </p>
  </div>
<?php endif; ?>

<?php if ($this->_tpl_vars['people']): ?>
  <?php $_from = $this->_tpl_vars['people']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['fid'] => $this->_tpl_vars['f']):
        $this->_foreach['foo']['iteration']++;
?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_user.tpl", 'smarty_include_vars' => array('t' => $this->_tpl_vars['f'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

<?php if (( $this->_tpl_vars['display'] == 'links-friends' && ! $this->_tpl_vars['links'] ) || ( $this->_tpl_vars['display'] == 'links-favorites' && ! $this->_tpl_vars['links'] )): ?>
  <div class="ui-state-highlight ui-corner-all" style="margin: 20px 0px; padding: .5em 0.7em;">
    <p>
      <span class="ui-icon ui-icon-info" style="float: left; margin:.3em 0.3em 0 0;"></span>
      No data to display.
    </p>
  </div>
<?php endif; ?>

<?php if ($this->_tpl_vars['links']): ?>
  <?php $_from = $this->_tpl_vars['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['lid'] => $this->_tpl_vars['l']):
        $this->_foreach['foo']['iteration']++;
?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_link.tpl", 'smarty_include_vars' => array('t' => $this->_tpl_vars['f'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <?php endforeach; endif; unset($_from); ?>  
<?php endif; ?>

<script type="text/javascript" src="<?php echo $this->_tpl_vars['site_root_path']; ?>
assets/js/linkify.js"></script>

<script type="text/javascript">
  <?php echo '
  $(function() {
    // Begin reply assignment actions.
    $(".button").click(function() {
      var element = $(this);
      var Id = element.attr("id");
      var oid = Id;
      var pid = $("select#pid" + Id + " option:selected").val();
      var u = \''; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['i']->network_username)) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
<?php echo '\';
      var t = \'inline.view.tpl\';
      var ck = \''; ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['i']->network_username)) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
-<?php echo $_SESSION['user']; ?>
-<?php echo $this->_tpl_vars['display']; ?>
<?php echo '\';
      var dataString = \'u=\' + u + \'&pid=\' + pid + \'&oid[]=\' + oid + \'&t=\' + t + \'&ck=\' + ck;
      $.ajax({
        type: "GET",
        url: "'; ?>
<?php echo $this->_tpl_vars['site_root_path']; ?>
<?php echo 'post/mark-parent.php",
        data: dataString,
        success: function() {
          $(\'#div\' + Id).html("<div class=\'success\' id=\'message" + Id + "\'></div>");
          $(\'#message\' + Id).html("<p>Saved!</p>").hide().fadeIn(1500, function() {
            $(\'#message\'+Id);  
          });
        }
      });
      return false;
    });
  });
  '; ?>

</script>