<?php /* Smarty version 2.6.26, created on 2010-08-19 15:04:46
         compiled from /Users/daifuye/ThinkUp/webapp/plugins/twitter/view/twitter.account.index.tpl */ ?>
<div class="append_20">
<h2 class="subhead">Twitter Configuration</h2>
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
<?php if ($this->_tpl_vars['owner']->is_admin): ?>
	<div class="ui-state-highlight ui-corner-all" style="margin: 20px 0px; padding: .5em 0.7em;"> 
		<p><span class="ui-icon ui-icon-info" style="float: left; margin:.3em 0.3em 0 0;"></span>
		As an administrator you can see all accounts in the system.</p>
	</div>
<?php endif; ?>

<?php if (count ( $this->_tpl_vars['owner_instances'] ) > 0): ?>
    <?php $_from = $this->_tpl_vars['owner_instances']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['iid'] => $this->_tpl_vars['i']):
        $this->_foreach['foo']['iteration']++;
?>
        <div class="clearfix">
        <div class="grid_4 right" style="padding-top:.5em;">
            <a href="<?php echo $this->_tpl_vars['site_root_path']; ?>
?u=<?php echo $this->_tpl_vars['i']->network_username; ?>
"><?php echo $this->_tpl_vars['i']->network_username; ?>
</a>
        </div>
        <div class="grid_8">
            <span id="div<?php echo $this->_tpl_vars['i']->id; ?>
"><input type="submit" name="submit" class="tt-button ui-state-default ui-priority-secondary ui-corner-all
            <?php if ($this->_tpl_vars['i']->is_public): ?>btnPriv<?php else: ?>btnPub<?php endif; ?>" id="<?php echo $this->_tpl_vars['i']->id; ?>
" value="<?php if ($this->_tpl_vars['i']->is_public): ?>remove from public timeline<?php else: ?>include on public timeline<?php endif; ?>" /></span>
        </div>
        <?php if ($this->_tpl_vars['user_is_admin']): ?>
        <div class="grid_9">
    		<span id="divactivate<?php echo $this->_tpl_vars['i']->id; ?>
"><input type="submit" name="submit" class="tt-button ui-state-default ui-priority-secondary ui-corner-all <?php if ($this->_tpl_vars['i']->is_active): ?>btnPause<?php else: ?>btnPlay<?php endif; ?>" id="<?php echo $this->_tpl_vars['i']->id; ?>
" value="<?php if ($this->_tpl_vars['i']->is_active): ?>pause crawling<?php else: ?>start crawling<?php endif; ?>" /></span>
        </div>
        <?php endif; ?>
        </div>
    <?php endforeach; endif; unset($_from); ?>
<?php else: ?>
    You have no Twitter accounts configured.
<?php endif; ?>
</div>

<h2 class="subhead">Add a Twitter account</h2>

<p>Click on this button to authorize ThinkUp to access your Twitter account.</p>
<a href="<?php echo $this->_tpl_vars['oauthorize_link']; ?>
" class="tt-button ui-state-default tt-button-icon-left ui-corner-all"><span class="ui-icon ui-icon-circle-arrow-e"></span>Authorize ThinkUp on Twitter</a>
<br /><br /><br />

<p>Alternately, add a public Twitter username for ThinkUp capture data about:</p>
<form method="get" action="index.php"><input type="hidden" name="p" value="twitter"><input name="twitter_username" /> <input type="submit" value="Add this Public User to ThinkUp"></form>


<?php if ($this->_tpl_vars['options_markup']): ?>
<div style="border: solid gray 1px;padding:10px;margin:20px">
<h2 class="subhead">Configure the Twitter Plugin</h2>
<ol style="margin-left:40px"><li><a href="http://twitter.com/oauth_clients/">Register your ThinkUp application on Twitter</a>.</li>
<li>Set the callback URL to <pre>http://<?php echo $_SERVER['SERVER_NAME']; ?>
<?php echo $this->_tpl_vars['site_root_path']; ?>
plugins/twitter/auth.php</pre></li>
<li>Enter the Twitter-provided consumer key and secret here.</li></ol>
<p>
<?php echo $this->_tpl_vars['options_markup']; ?>

</p>
</div>
<?php endif; ?>
