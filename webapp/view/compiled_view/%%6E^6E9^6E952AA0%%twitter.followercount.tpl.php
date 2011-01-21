<?php /* Smarty version 2.6.26, created on 2010-08-19 15:05:21
         compiled from /Users/daifuye/ThinkUp/webapp/plugins/twitter/view/twitter.followercount.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', '/Users/daifuye/ThinkUp/webapp/plugins/twitter/view/twitter.followercount.tpl', 12, false),array('modifier', 'number_format', '/Users/daifuye/ThinkUp/webapp/plugins/twitter/view/twitter.followercount.tpl', 13, false),)), $this); ?>

 <div class="">
  <?php if ($this->_tpl_vars['description']): ?><i><?php echo $this->_tpl_vars['description']; ?>
</i><?php endif; ?>
</div>
    <?php if ($this->_tpl_vars['error']): ?>
    <p class="error">
        <?php echo $this->_tpl_vars['error']; ?>

    </p>    
    <?php endif; ?>

<br /><br />
<h2>By Day</h2><?php if (count($this->_tpl_vars['historybyday']['history']) < 2): ?><i>Not enough data yet</i><?php else: ?><br />
<img src="http://chart.apis.google.com/chart?chs=800x200&chxt=x,y&chxl=0:|<?php $_from = $this->_tpl_vars['historybyday']['history']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?><?php echo $this->_tpl_vars['t']['date']; ?>
|<?php endforeach; endif; unset($_from); ?>1:|<?php $_from = $this->_tpl_vars['historybyday']['y_axis']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?><?php echo ((is_array($_tmp=$this->_tpl_vars['t'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
<?php if (! ($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>|<?php endif; ?><?php endforeach; endif; unset($_from); ?>&cht=ls&chco=0077CC&chd=t:<?php $_from = $this->_tpl_vars['historybyday']['percentages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?><?php echo $this->_tpl_vars['t']; ?>
<?php if (! ($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>,<?php endif; ?><?php endforeach; endif; unset($_from); ?>&chm=B,76A4FB,0,0,0&chg=33">
<?php endif; ?>

<br /><br />
<h2>By Week</h2><?php if (count($this->_tpl_vars['historybyweek']['history']) < 2): ?><i>Not enough data yet</i><?php else: ?><br />
<img src="http://chart.apis.google.com/chart?chs=800x200&chxt=x,y&chxl=0:|<?php $_from = $this->_tpl_vars['historybyweek']['history']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?><?php echo $this->_tpl_vars['t']['date']; ?>
|<?php endforeach; endif; unset($_from); ?>1:|<?php $_from = $this->_tpl_vars['historybyweek']['y_axis']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?><?php echo ((is_array($_tmp=$this->_tpl_vars['t'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
<?php if (! ($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>|<?php endif; ?><?php endforeach; endif; unset($_from); ?>&cht=ls&chco=0077CC&chd=t:<?php $_from = $this->_tpl_vars['historybyweek']['percentages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?><?php echo $this->_tpl_vars['t']; ?>
<?php if (! ($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>,<?php endif; ?><?php endforeach; endif; unset($_from); ?>&chm=B,76A4FB,0,0,0&chg=33">
<?php endif; ?>
<br /><br />
<h2>By Month</h2><?php if (count($this->_tpl_vars['historybymonth']['history']) < 2): ?><i>Not enough data yet</i><?php else: ?>
<img src="http://chart.apis.google.com/chart?chs=800x200&chxt=x,y&chxl=0:|<?php $_from = $this->_tpl_vars['historybymonth']['history']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?><?php echo $this->_tpl_vars['t']['date']; ?>
|<?php endforeach; endif; unset($_from); ?>1:||<?php $_from = $this->_tpl_vars['historybymonth']['history']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?><?php echo ((is_array($_tmp=$this->_tpl_vars['t']['count'])) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>
|<?php endforeach; endif; unset($_from); ?>&cht=ls&chco=0077CC&chd=t:<?php $_from = $this->_tpl_vars['historybymonth']['percentages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['tid'] => $this->_tpl_vars['t']):
        $this->_foreach['foo']['iteration']++;
?><?php echo $this->_tpl_vars['t']; ?>
<?php if (! ($this->_foreach['foo']['iteration'] == $this->_foreach['foo']['total'])): ?>,<?php endif; ?><?php endforeach; endif; unset($_from); ?>">
<?php endif; ?>