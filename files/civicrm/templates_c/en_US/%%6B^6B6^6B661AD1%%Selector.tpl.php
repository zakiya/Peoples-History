<?php /* Smarty version 2.6.14, created on 2010-01-28 11:39:54
         compiled from CRM/Member/Form/Selector.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'CRM/Member/Form/Selector.tpl', 33, false),array('function', 'cycle', 'CRM/Member/Form/Selector.tpl', 35, false),array('function', 'crmURL', 'CRM/Member/Form/Selector.tpl', 40, false),array('modifier', 'truncate', 'CRM/Member/Form/Selector.tpl', 43, false),array('modifier', 'crmDate', 'CRM/Member/Form/Selector.tpl', 43, false),array('block', 'ts', 'CRM/Member/Form/Selector.tpl', 54, false),)), $this); ?>
<?php if ($this->_tpl_vars['context'] == 'Search'): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/pager.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif; ?>

<?php if ($this->_tpl_vars['context'] == 'Contact Summary'): ?>
    <?php $this->assign('columnHeaders', $this->_tpl_vars['member_columnHeaders']); ?>
    <?php $this->assign('rows', $this->_tpl_vars['member_rows']); ?>
    <?php $this->assign('single', $this->_tpl_vars['member_single']); ?>
    <?php $this->assign('limit', $this->_tpl_vars['member_limit']);  endif;  echo '<table class="selector"><tr class="columnheader">';  if (! $this->_tpl_vars['single'] && ! $this->_tpl_vars['limit']):  echo '<th scope="col" title="Select Rows">';  echo $this->_tpl_vars['form']['toggleSelect']['html'];  echo '</th>';  endif;  echo '';  $_from = $this->_tpl_vars['columnHeaders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['header']):
 echo '<th scope="col">';  if ($this->_tpl_vars['header']['sort']):  echo '';  $this->assign('key', $this->_tpl_vars['header']['sort']);  echo '';  if ($this->_tpl_vars['context'] == 'Contact Summary'):  echo '';  echo $this->_tpl_vars['member_sort']->_response[$this->_tpl_vars['key']]['link'];  echo '';  else:  echo '';  echo $this->_tpl_vars['sort']->_response[$this->_tpl_vars['key']]['link'];  echo '';  endif;  echo '';  else:  echo '';  echo $this->_tpl_vars['header']['name'];  echo '';  endif;  echo '</th>';  endforeach; endif; unset($_from);  echo '</tr>';  echo smarty_function_counter(array('start' => 0,'skip' => 1,'print' => false), $this); echo '';  $_from = $this->_tpl_vars['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
 echo '<tr id=\'rowid';  echo $this->_tpl_vars['row']['membership_id'];  echo '\' class="';  echo smarty_function_cycle(array('values' => "odd-row,even-row"), $this); echo '';  echo '">';  if (! $this->_tpl_vars['single'] && ! $this->_tpl_vars['limit']):  echo '';  $this->assign('cbName', $this->_tpl_vars['row']['checkbox']);  echo '<td>';  echo $this->_tpl_vars['form'][$this->_tpl_vars['cbName']]['html'];  echo '</td><td>';  echo $this->_tpl_vars['row']['contact_type'];  echo '</td><td><a href="';  echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view','q' => "reset=1&cid=".($this->_tpl_vars['row']['contact_id'])), $this); echo '">';  echo $this->_tpl_vars['row']['sort_name'];  echo '</a></td>';  endif;  echo '<td>';  echo $this->_tpl_vars['row']['membership_type'];  echo '</td><td>';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['row']['join_date'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 10, '') : smarty_modifier_truncate($_tmp, 10, '')))) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp));  echo '</td><td>';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['row']['start_date'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 10, '') : smarty_modifier_truncate($_tmp, 10, '')))) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp));  echo '</td><td>';  echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['row']['end_date'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 10, '') : smarty_modifier_truncate($_tmp, 10, '')))) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp));  echo '</td><td>';  echo $this->_tpl_vars['row']['source'];  echo '</td><td>';  echo $this->_tpl_vars['row']['status'];  echo '</td><td>';  echo $this->_tpl_vars['row']['action'];  echo '</td></tr>';  endforeach; endif; unset($_from);  echo '';  echo '';  if (( $this->_tpl_vars['context'] == 'Contact Summary' ) && $this->_tpl_vars['member_pager']->_totalItems > $this->_tpl_vars['limit']):  echo '<tr class="even-row"><td colspan="7"><a href="';  echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view','q' => "reset=1&force=1&selectedChild=member&cid=".($this->_tpl_vars['contactId'])), $this); echo '">&raquo; ';  $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  echo 'View all memberships for this contact';  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  echo '...</a></td></tr></tr>';  endif;  echo '';  echo '</table>'; ?>


<?php if ($this->_tpl_vars['context'] == 'Search'): ?>
 <script type="text/javascript">
     var fname = "<?php echo $this->_tpl_vars['form']['formName']; ?>
";	
    on_load_init_checkboxes(fname);
 </script>
<?php endif; ?>

<?php if ($this->_tpl_vars['context'] == 'Search'): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/pager.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif; ?>