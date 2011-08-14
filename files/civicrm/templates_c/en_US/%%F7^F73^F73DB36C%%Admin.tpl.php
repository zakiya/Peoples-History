<?php /* Smarty version 2.6.14, created on 2010-01-04 13:51:59
         compiled from CRM/Admin/Page/Admin.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Admin/Page/Admin.tpl', 5, false),)), $this); ?>
<?php if ($this->_tpl_vars['newVersion']): ?>
    <div class="messages status">
        <dl>
        <dt><img src="<?php echo $this->_tpl_vars['config']->resourceBase; ?>
i/Inform.gif" alt="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>status<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"/></dt>
        <dd>
            <p><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['newVersion'],'2' => $this->_tpl_vars['localVersion'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>A newer version of CiviCRM is available: %1 (this site is currently running %2).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
            <p><?php $this->_tag_stack[] = array('ts', array('1' => 'http://civicrm.org/','2' => 'http://civicrm.org/download/')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Read about the new version on <a href="%1">our website</a> and <a href="%2">download it here</a>.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
        </dd>
      </dl>
    </div>
<?php endif; ?>

<div id="help" class="description section-hidden-border">
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Administer your CiviCRM site using the links on this page. Click <img src="<?php echo $this->_tpl_vars['config']->resourceBase; ?>
/i/TreePlus.gif" alt="Plus sign." style="vertical-align: bottom; height: 20px; width: 20px;"> for descriptions of the options in each section.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</div>

<?php echo '';  $_from = $this->_tpl_vars['adminPanel']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['adminLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['adminLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['groupName'] => $this->_tpl_vars['group']):
        $this->_foreach['adminLoop']['iteration']++;
 echo '<div id = "id_';  echo $this->_tpl_vars['groupName'];  echo '_show" class="section-hidden label';  if (($this->_foreach['adminLoop']['iteration'] == $this->_foreach['adminLoop']['total']) == false):  echo ' section-hidden-border';  endif;  echo '"><table class="form-layout"><tr><td width="20%" class="font-size11pt" style="vertical-align: top; padding: 0px;">';  echo $this->_tpl_vars['group']['show'];  echo ' ';  echo $this->_tpl_vars['groupName'];  echo '</td><td width="80%" style="white-space: nowrap; padding: 0px;"><table class="form-layout" width="100%"><tr><td width="50%" style="padding: 0px;">';  $_from = $this->_tpl_vars['group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['groupLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['groupLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['panelName'] => $this->_tpl_vars['panelItem']):
        $this->_foreach['groupLoop']['iteration']++;
 echo '';  if ($this->_tpl_vars['panelName'] != 'show' && $this->_tpl_vars['panelName'] != 'hide' && $this->_tpl_vars['panelName'] != 'perColumn'):  echo '&raquo;&nbsp;<a href="';  echo $this->_tpl_vars['panelItem']['url'];  echo '"';  if ($this->_tpl_vars['panelItem']['extra']):  echo ' ';  echo $this->_tpl_vars['panelItem']['extra'];  echo '';  endif;  echo ' id="idc_';  echo $this->_tpl_vars['panelItem']['id'];  echo '">';  echo $this->_tpl_vars['panelItem']['title'];  echo '</a><br />';  if ($this->_foreach['groupLoop']['iteration'] == $this->_tpl_vars['group']['perColumn']):  echo '</td><td width="50%" style="padding: 0px;">';  endif;  echo '';  endif;  echo '';  endforeach; endif; unset($_from);  echo '</td></tr></table></td></tr></table></div><div id="id_';  echo $this->_tpl_vars['groupName'];  echo '"><fieldset><legend><strong>';  echo $this->_tpl_vars['group']['hide'];  echo '';  echo $this->_tpl_vars['groupName'];  echo '</strong></legend><table class="form-layout">';  $_from = $this->_tpl_vars['group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['groupLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['groupLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['panelName'] => $this->_tpl_vars['panelItem']):
        $this->_foreach['groupLoop']['iteration']++;
 echo '';  if ($this->_tpl_vars['panelName'] != 'show' && $this->_tpl_vars['panelName'] != 'hide' && $this->_tpl_vars['panelName'] != 'perColumn'):  echo '<tr><td style="vertical-align: top;"><a href="';  echo $this->_tpl_vars['panelItem']['url'];  echo '"';  if ($this->_tpl_vars['panelItem']['extra']):  echo ' ';  echo $this->_tpl_vars['panelItem']['extra'];  echo '';  endif;  echo ' ><img src="';  echo $this->_tpl_vars['config']->resourceBase;  echo 'i/';  echo $this->_tpl_vars['panelItem']['icon'];  echo '" alt="';  echo $this->_tpl_vars['panelItem']['title'];  echo '"/></a></td><td class="report font-size11pt" style="vertical-align: text-top;" width="20%"><a href="';  echo $this->_tpl_vars['panelItem']['url'];  echo '"';  if ($this->_tpl_vars['panelItem']['extra']):  echo ' ';  echo $this->_tpl_vars['panelItem']['extra'];  echo '';  endif;  echo ' id="id_';  echo $this->_tpl_vars['panelItem']['id'];  echo '">';  echo $this->_tpl_vars['panelItem']['title'];  echo '</a></td><td class="description"  style="vertical-align: text-top;" width="75%">';  echo $this->_tpl_vars['panelItem']['desc'];  echo '</td></tr>';  endif;  echo '';  endforeach; endif; unset($_from);  echo '</table></fieldset></div>';  endforeach; endif; unset($_from);  echo ''; ?>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHide.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>