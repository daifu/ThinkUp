<?php /* Smarty version 2.6.26, created on 2010-08-19 15:03:45
         compiled from /Users/daifuye/ThinkUp/webapp/plugins/facebook/view/facebook.account.index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'urlencode', '/Users/daifuye/ThinkUp/webapp/plugins/facebook/view/facebook.account.index.tpl', 32, false),array('modifier', 'escape', '/Users/daifuye/ThinkUp/webapp/plugins/facebook/view/facebook.account.index.tpl', 85, false),array('modifier', 'substr', '/Users/daifuye/ThinkUp/webapp/plugins/facebook/view/facebook.account.index.tpl', 85, false),)), $this); ?>
<div class="append_20">
    <h2 class="subhead">Facebook Configuration</h2>
	<?php if ($this->_tpl_vars['error']): ?>
	<p class="error">
		<?php echo $this->_tpl_vars['error']; ?>

	</p>	
	<?php endif; ?>
	<?php if ($this->_tpl_vars['info']): ?>
    <p class="info">
        <?php echo $this->_tpl_vars['info']; ?>

    </p>    
    <?php endif; ?>
    <?php if ($this->_tpl_vars['success']): ?>
    <p class="success">
        <?php echo $this->_tpl_vars['success']; ?>

    </p>    
    <?php endif; ?>
<br />
    <p>Set up the Facebook plugin.</p><br />

	<h2 class="subhead">Facebook User Accounts</h2>
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
index.php?u=<?php echo ((is_array($_tmp=$this->_tpl_vars['i']->network_username)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&n=<?php echo ((is_array($_tmp=$this->_tpl_vars['i']->network)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
"><?php echo $this->_tpl_vars['i']->network_username; ?>
</a> 
        </div>
        <div class="grid_8">
            <span id="div<?php echo $this->_tpl_vars['i']->id; ?>
"><input type="submit" name="submit" id="<?php echo $this->_tpl_vars['i']->id; ?>
" class="tt-button ui-state-default ui-priority-secondary ui-corner-all <?php if ($this->_tpl_vars['i']->is_public): ?>btnPriv<?php else: ?>btnPub<?php endif; ?>" value="<?php if ($this->_tpl_vars['i']->is_public): ?>remove from public timeline<?php else: ?>include on public timeline<?php endif; ?>" /></span>
        </div>
        <div class="grid_7">
            <span id="divactivate<?php echo $this->_tpl_vars['i']->id; ?>
"><input type="submit" name="submit" id="<?php echo $this->_tpl_vars['i']->id; ?>
" class="tt-button ui-state-default ui-priority-secondary ui-corner-all <?php if ($this->_tpl_vars['i']->is_active): ?>btnPause<?php else: ?>btnPlay<?php endif; ?>" value="<?php if ($this->_tpl_vars['i']->is_active): ?>pause crawling<?php else: ?>start crawling<?php endif; ?>" /></span>
        </div>
    </div><?php endforeach; endif; unset($_from); ?>
    <br />

    <h2 class="subhead">Facebook Pages</h2>
    <?php if ($this->_tpl_vars['owner']->is_admin): ?>
    <div class="ui-state-highlight ui-corner-all" style="margin: 20px 0px; padding: .5em 0.7em;"> 
        <p><span class="ui-icon ui-icon-info" style="float: left; margin:.3em 0.3em 0 0;"></span>
        As an administrator you can see all accounts in the system.</p>
    </div>
    <?php endif; ?>
    <?php if (count ( $this->_tpl_vars['owner_instance_pages'] ) > 0): ?>
    <?php $_from = $this->_tpl_vars['owner_instance_pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['iid'] => $this->_tpl_vars['i']):
        $this->_foreach['foo']['iteration']++;
?>
    <div class="clearfix">
        <div class="grid_4 right" style="padding-top:.5em;">
            <a href="<?php echo $this->_tpl_vars['site_root_path']; ?>
index.php?u=<?php echo ((is_array($_tmp=$this->_tpl_vars['i']->network_username)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&n=<?php echo ((is_array($_tmp=$this->_tpl_vars['i']->network)) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
"><?php echo $this->_tpl_vars['i']->network_username; ?>
</a> 
        </div>
        <div class="grid_8">
            <span id="div<?php echo $this->_tpl_vars['i']->id; ?>
"><input type="submit" name="submit" class="tt-button ui-state-default ui-priority-secondary ui-corner-all <?php if ($this->_tpl_vars['i']->is_public): ?>btnPriv<?php else: ?>btnPub<?php endif; ?>" id="<?php echo $this->_tpl_vars['i']->id; ?>
" value="<?php if ($this->_tpl_vars['i']->is_public): ?>remove from public timeline<?php else: ?>include on public timeline<?php endif; ?>" /></span>
        </div>
        <div class="grid_7">
            <span id="divactivate<?php echo $this->_tpl_vars['i']->id; ?>
"><input type="submit" name="submit" class="tt-button ui-state-default ui-priority-secondary ui-corner-all <?php if ($this->_tpl_vars['i']->is_active): ?>btnPause<?php else: ?>btnPlay<?php endif; ?>" id="<?php echo $this->_tpl_vars['i']->id; ?>
" value="<?php if ($this->_tpl_vars['i']->is_active): ?>pause crawling<?php else: ?>start crawling<?php endif; ?>" /></span>
        </div>
    </div><?php endforeach; endif; unset($_from); ?>
    <br />
    <?php endif; ?>



        <h2 class="subhead">Add a Facebook Page</h2>
<?php $_from = $this->_tpl_vars['owner_instances']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['iid'] => $this->_tpl_vars['i']):
        $this->_foreach['foo']['iteration']++;
?>
  <?php $this->assign('facebook_user_id', $this->_tpl_vars['i']->network_user_id); ?>
  <?php if ($this->_tpl_vars['user_pages'][$this->_tpl_vars['facebook_user_id']]): ?>
    <div class="clearfix">
        <div class="grid_4 right" style="padding-top:.5em;">
            <?php echo $this->_tpl_vars['i']->network_username; ?>
&nbsp;likes:
        </div>
        <form name="addpage" action="index.php?p=facebook">
        <div class="grid_8">
            <?php if ($this->_tpl_vars['user_pages'][$this->_tpl_vars['facebook_user_id']]): ?>
            <input type="hidden" name="instance_id" value="<?php echo $this->_tpl_vars['i']->id; ?>
">
            <input type="hidden" name="p" value="facebook">
            <input type="hidden" name ="viewer_id" value="<?php echo $this->_tpl_vars['i']->network_user_id; ?>
" />
            <input type="hidden" name ="owner_id" value="<?php echo $this->_tpl_vars['owner']->id; ?>
" />
            <select name="facebook_page_id">
                <?php $_from = $this->_tpl_vars['user_pages'][$this->_tpl_vars['facebook_user_id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['p'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['p']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['page_id'] => $this->_tpl_vars['page']):
        $this->_foreach['p']['iteration']++;
?>
                    <option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['page']['json'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"><?php if (strlen ( $this->_tpl_vars['page']['name'] ) > 27): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['page']['name'])) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 27) : substr($_tmp, 0, 27)); ?>
...<?php else: ?><?php echo $this->_tpl_vars['page']['name']; ?>
<?php endif; ?></option> <br />
                <?php endforeach; endif; unset($_from); ?>
             </select>
             <?php endif; ?>
        </div>
        <div class="grid_7">
             <span id="divaddpage<?php echo $this->_tpl_vars['i']->network_username; ?>
"><input type="submit" name="action" class="tt-button ui-state-default ui-priority-secondary ui-corner-all
addPage"  id="<?php echo $this->_tpl_vars['i']->network_username; ?>
" value="add page" /></span>
        </div>
        </form>
    </div>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>    
    <?php else: ?>
    You have no Facebook accounts configured.
    <?php endif; ?>
    
    
</div> <?php if ($this->_tpl_vars['fbconnect_link']): ?><h2 class="subhead">Add a Facebook User</h2><?php echo $this->_tpl_vars['fbconnect_link']; ?>
<?php endif; ?>
<div id="offlineAccess">
    <fb:prompt-permission perms="read_stream,publish_stream,offline_access" next_fbjs="save_session()">
        Click here to grant offline access!
    </fb:prompt-permission>
</div>
<script src="http://static.ak.connect.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php" type="text/javascript">
</script>
<script type="text/javascript">
                FB.init("<?php echo $this->_tpl_vars['fb_api_key']; ?>
", "<?php echo $this->_tpl_vars['site_root_path']; ?>
plugins/facebook/xd_receiver.php", <?php echo '{
                    permsToRequestOnConnect: "read_stream,offline_access",
                });
</script>
<script>
    function save_session(){
        session = FB.Facebook.apiClient.get_session();
        var sessionKey = session.session_key;
        $.ajax({
            type: "GET",
            url: \''; ?>
<?php echo $this->_tpl_vars['site_root_path']; ?>
<?php echo 'plugins/facebook/auth.php\',
            data: {
                sessionKey: sessionKey
            },
            dataType: "json",
            async: false,
            time: 10,
            success: function(msg){
            
            }
        })
    };
</script>

<script src="'; ?>
<?php echo $this->_tpl_vars['site_root_path']; ?>
<?php echo 'plugins/facebook/assets/js/fbconnect.js" type="text/javascript">
</script>
<script type="text/javascript">
    window.onload = function(){
        facebook_onload(true);
    };
</script>
'; ?>

<?php if ($this->_tpl_vars['options_markup']): ?>
<div style="border: solid gray 1px;padding:10px;margin:20px">
<h2 class="subhead">Configure the Facebook Plugin</h2>
<ol style="margin-left:40px">
<li><a href="http://www.facebook.com/developers/#!/developers/apps.php">Register your ThinkUp application on Facebook</a>.</li>
<li>Set the Facebook Connect URL to <pre>http://<?php echo $_SERVER['SERVER_NAME']; ?>
<?php echo $this->_tpl_vars['site_root_path']; ?>
plugins/facebook/</pre></li>
<li>Enter the Facebook-provided API key and secret here.</li></ol>
<p>
<?php echo $this->_tpl_vars['options_markup']; ?>

</p>
</div>
<?php endif; ?>
