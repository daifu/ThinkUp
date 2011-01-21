<?php /* Smarty version 2.6.26, created on 2010-08-19 15:03:45
         compiled from _plugin.options.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '_plugin.options.tpl', 64, false),array('modifier', 'count', '_plugin.options.tpl', 112, false),)), $this); ?>
<script type="text/javascript">
var option_elements = <?php echo $this->_tpl_vars['option_elements_json']; ?>
;
var option_not_required = <?php echo $this->_tpl_vars['option_not_required_json']; ?>
;
var option_required_message = <?php echo $this->_tpl_vars['option_required_message_json']; ?>
;
var plugin_id = '<?php echo $this->_tpl_vars['plugin_id']; ?>
';
var site_root = '<?php echo $this->_tpl_vars['site_root_path']; ?>
';
var is_admin = <?php if ($this->_tpl_vars['is_admin']): ?>true;<?php else: ?>false;<?php endif; ?>
</script>

<form id="plugin_option_form" onsubmit="return false;">

<p class="success" id="plugin_options_success" style="display: none;">
    Saved!
</p>

<div id="plugin_option_server_error" 
    class="ui-state-error ui-corner-all" style="margin: 20px 0px; padding: 0.5em 0.7em; display: none;">
    <p>
        <span class="ui-icon ui-icon-alert" style="float: left; margin:.3em 0.3em 0 0;"></span>
        <span id="plugin_option_server_error_message"></span>
    </p>
</div>

<div id="plugin_option_error" 
    class="ui-state-error ui-corner-all" style="margin: 20px 0px; padding: 0.5em 0.7em; display: none;">
    <p>
        <span class="ui-icon ui-icon-alert" style="float: left; margin:.3em 0.3em 0 0;"></span>
        Please complete all required fields
    </p>
</div>

<?php $_from = $this->_tpl_vars['option_elements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['option_name'] => $this->_tpl_vars['option_obj']):
?>

    <?php if ($this->_tpl_vars['option_headers'][$this->_tpl_vars['option_name']]): ?>
        <div id="plugin_options_<?php echo $this->_tpl_vars['option_obj']['name']; ?>
_header" style="font-weight: bold; margin: 10px 0px 0px 0px;">
            <?php echo $this->_tpl_vars['option_headers'][$this->_tpl_vars['option_name']]; ?>

        </div>
    <?php endif; ?>

<div class="ui-state-highlight ui-corner-all" style="margin-top: 10px; padding: 0.5em 0.7em; display: none;" 
    id="plugin_options_error_<?php echo $this->_tpl_vars['option_obj']['name']; ?>
">
    <p>
        <span class="ui-icon ui-icon-info" style="float: left; margin: 0.3em 0.3em 0pt 0pt;">&nbsp;</span>
        <span id="plugin_options_error_message_<?php echo $this->_tpl_vars['option_obj']['name']; ?>
">&nbsp;</span>
    </p>
</div>

<div style="float: left; margin-top: 10px;">
    <label id="plugin_options_<?php echo $this->_tpl_vars['option_obj']['name']; ?>
_label">
    <?php if ($this->_tpl_vars['option_not_required'][$this->_tpl_vars['option_name']]): ?><i>*</i><?php endif; ?>
    <?php if ($this->_tpl_vars['option_obj']['label']): ?>
        <?php echo $this->_tpl_vars['option_obj']['label']; ?>
:
    <?php else: ?>
        <?php echo $this->_tpl_vars['option_obj']['name']; ?>
:
    <?php endif; ?>
    </label>
</div>

<div style="float: left; margin: 10px 0px 0px 5px;">

    <?php if ($this->_tpl_vars['option_obj']['type'] == 'text_element'): ?>

        <input type="text" 
        value="<?php if (isset ( $this->_tpl_vars['option_obj']['value'] )): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['option_obj']['value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
<?php endif; ?>"
            name="plugin_options_<?php echo $this->_tpl_vars['option_obj']['name']; ?>
" id="plugin_options_<?php echo $this->_tpl_vars['option_obj']['name']; ?>
" 
            <?php if (! $this->_tpl_vars['is_admin']): ?> disabled="true"<?php endif; ?> />
    <?php endif; ?>
    <?php if ($this->_tpl_vars['option_obj']['type'] == 'radio_element'): ?>
    
        <div id="plugin_options_<?php echo $this->_tpl_vars['option_obj']['name']; ?>
">
        
            <?php $_from = $this->_tpl_vars['option_obj']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['radio_name'] => $this->_tpl_vars['radio_value']):
?>
                <div style="float: left;">
                    <input type="radio" name="plugin_options_<?php echo $this->_tpl_vars['option_obj']['name']; ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['radio_value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" 
                        <?php if (! $this->_tpl_vars['is_admin']): ?> disabled="true"<?php endif; ?> 
                        <?php if (isset ( $this->_tpl_vars['option_obj']['value'] ) && $this->_tpl_vars['option_obj']['value'] == $this->_tpl_vars['radio_value']): ?> checked="true"<?php endif; ?> 
                        /> <?php echo ((is_array($_tmp=$this->_tpl_vars['radio_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
 &nbsp;
                </div>
            <?php endforeach; endif; unset($_from); ?>

            <div style="clear: both;"></div>

        </div>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['option_obj']['type'] == 'select_element'): ?>
        <div style="float: left;">
        <select name="plugin_options_<?php echo $this->_tpl_vars['option_obj']['name']; ?>
" id="plugin_options_<?php echo $this->_tpl_vars['option_obj']['name']; ?>
" 
        <?php if (! $this->_tpl_vars['is_admin']): ?> disabled="true"<?php endif; ?> >
        <?php $_from = $this->_tpl_vars['option_obj']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['select_name'] => $this->_tpl_vars['select_value']):
?>
                <option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['select_value'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"
                <?php if (isset ( $this->_tpl_vars['option_obj']['value'] ) && $this->_tpl_vars['option_obj']['value'] == $this->_tpl_vars['select_value']): ?>selected="true"<?php endif; ?>>
                <?php echo $this->_tpl_vars['select_name']; ?>
</option>
        <?php endforeach; endif; unset($_from); ?>
        </select>
        </div>
        <div style="clear: both;"></div>
    <?php endif; ?>

</div>

<div style="clear: both;"></div>

<?php endforeach; endif; unset($_from); ?>
<p style="margin-top: 10px;" id="plugin_option_submit_p">
<?php if ($this->_tpl_vars['is_admin']): ?>
<input type="submit" value="save options" />
<?php else: ?>
<b>Note:</b> Editing disabled for non admin users
<?php endif; ?>
</p>

<?php if (count($this->_tpl_vars['option_not_required']) > 0): ?>
<p>
    <i style="font-size: 12px;">* not required</i>
</p>
<?php endif; ?>

</form> 