<?php /* Smarty version 2.6.14, created on 2010-09-02 17:50:47
         compiled from CRM/Contact/Form/Search/BasicCriteria.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'crmURL', 'CRM/Contact/Form/Search/BasicCriteria.tpl', 2, false),array('block', 'ts', 'CRM/Contact/Form/Search/BasicCriteria.tpl', 4, false),)), $this); ?>
<?php ob_start();  echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/search/advanced','q' => "reset=1"), $this); $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('advSearchURL', ob_get_contents());ob_end_clean(); ?>
<fieldset>
    <legend><?php if ($this->_tpl_vars['context'] == 'smog'): ?><span id="searchForm_hide"><a href="#" onclick="hide('searchForm','searchForm_hide'); show('searchForm_show'); return false;"><img src="<?php echo $this->_tpl_vars['config']->resourceBase; ?>
i/TreeMinus.gif" class="action-icon" alt="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>close section<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" /></a></span><?php endif; ?>
        <?php if ($this->_tpl_vars['context'] == 'smog'):  $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Find Members within this Group<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php elseif ($this->_tpl_vars['context'] == 'amtg'):  $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Find Contacts to Add to this Group<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php else:  $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Search Criteria<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  endif; ?>
    </legend>
 <div class="form-item">
    <?php echo '<table class="form-layout"><tr><td class="font-size12pt">';  echo $this->_tpl_vars['form']['contact_type']['label'];  echo '</td><td>';  echo $this->_tpl_vars['form']['contact_type']['html'];  echo '</td><td class="label">';  if ($this->_tpl_vars['context'] == 'smog'):  echo '';  echo $this->_tpl_vars['form']['group_contact_status']['label'];  echo '<br/>';  $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['form']['group']['html'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  echo '(for %1)';  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  echo '';  else:  echo '';  echo $this->_tpl_vars['form']['group']['label'];  echo '';  endif;  echo '</td><td>';  if ($this->_tpl_vars['context'] == 'smog'):  echo '';  echo $this->_tpl_vars['form']['group_contact_status']['html'];  echo '';  else:  echo '';  echo $this->_tpl_vars['form']['group']['html'];  echo '';  endif;  echo '</td><td class="label">';  echo $this->_tpl_vars['form']['tag']['label'];  echo '</td><td>';  echo $this->_tpl_vars['form']['tag']['html'];  echo '</td></tr><tr><td class="label">';  echo $this->_tpl_vars['form']['sort_name']['label'];  echo '</td><td colspan=';  if ($this->_tpl_vars['context'] == 'smog'):  echo '"7"';  else:  echo '"5"';  endif;  echo '>';  echo $this->_tpl_vars['form']['sort_name']['html'];  echo '</td></tr><tr><td>&nbsp;</td><td colspan=';  if ($this->_tpl_vars['context'] == 'smog'):  echo '"6"';  else:  echo '"4" class="report"';  endif;  echo '><div class="description font-italic">';  $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['advSearchURL'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  echo 'To search by first AND last name, enter \'lastname, firstname\'. Example: \'Doe, Jane\'. For partial name search, use \'%partialname\' (\'%\' equals \'begins with any combination of letters\'). To search by email address, use <a href="%1">Advanced Search</a>.';  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  echo '</div></td><td class="label">';  echo $this->_tpl_vars['form']['buttons']['html'];  echo '</td></tr><tr><td class="label" colspan=';  if ($this->_tpl_vars['context'] == 'smog'):  echo '"8"';  else:  echo '"6"';  endif;  echo '>';  if ($this->_tpl_vars['context'] == 'smog'):  echo '<a href="';  echo CRM_Utils_System::crmURL(array('p' => 'civicrm/group/search/advanced','q' => "gid=".($this->_tpl_vars['group']['id'])."&reset=1&force=1"), $this); echo '">&raquo; ';  $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  echo 'Advanced Search';  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  echo '</a>';  elseif ($this->_tpl_vars['context'] == 'amtg'):  echo '<a href="';  echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/search/advanced','q' => "context=amtg&amtgID=".($this->_tpl_vars['group']['id'])."&reset=1&force=1"), $this); echo '">&raquo; ';  $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  echo 'Advanced Search';  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  echo '</a>';  else:  echo '<a href="';  echo $this->_tpl_vars['advSearchURL'];  echo '">&raquo; ';  $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  echo 'Advanced Search';  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  echo '</a>';  endif;  echo '</td></tr></table>'; ?>


 </div>
</fieldset>