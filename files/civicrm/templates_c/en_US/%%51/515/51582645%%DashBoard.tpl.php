<?php /* Smarty version 2.6.14, created on 2010-10-19 16:49:07
         compiled from CRM/Contribute/Page/DashBoard.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'crmURL', 'CRM/Contribute/Page/DashBoard.tpl', 3, false),array('block', 'ts', 'CRM/Contribute/Page/DashBoard.tpl', 6, false),array('modifier', 'crmMoney', 'CRM/Contribute/Page/DashBoard.tpl', 22, false),)), $this); ?>
<div id="help" class="solid-border-bottom">
    <?php ob_start();  echo CRM_Utils_System::crmURL(array('p' => "civicrm/contact/search/basic",'q' => "reset=1"), $this); $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('findContactURL', ob_get_contents());ob_end_clean(); ?>
    <?php ob_start();  echo CRM_Utils_System::crmURL(array('p' => "civicrm/contribute/import",'q' => "reset=1"), $this); $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('importURL', ob_get_contents());ob_end_clean(); ?>
    <?php ob_start();  echo CRM_Utils_System::crmURL(array('p' => "civicrm/admin/contribute",'q' => "reset=1"), $this); $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('configPagesURL', ob_get_contents());ob_end_clean(); ?>
    <p><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['configPagesURL'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>CiviContribute allows you to create customized page(s) for collecting online contributions. Administrators can create or modify your Online Contribution Pages from <a href="%1">here</a>.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
    <p><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['findContactURL'],'2' => $this->_tpl_vars['importURL'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You can also input and track offline contributions. To enter contributions manually for individual contacts, use <a href="%1">Find Contacts</a> to locate the contact. Then click <strong>View</strong> to go to their summary page and click on the <strong>New Contribution</strong> link. You can also <a href="%2">import batches of offline contributions</a> from other sources.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
</div>

<h3><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contributions Summary<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
<div class="description">
    <?php ob_start();  echo CRM_Utils_System::crmURL(array('p' => "civicrm/contribute/search/basic",'q' => "reset=1"), $this); $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('findContribsURL', ob_get_contents());ob_end_clean(); ?>
    <p><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['findContribsURL'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This table provides a summary of <strong>Contribution Totals</strong>, and includes shortcuts to view the contribution details for these commonly used search periods. To run your own customized searches - click <a href="%1">Find Contributions</a>. You can search by Contributor Name, Amount Range, and a variety of other criteria.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
</div>
<table class="report">
<tr class="columnheader-dark">
    <th scope="col"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Period<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
    <th scope="col"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
    <th scope="col" title="Contribution Count"><strong>#</strong></th><th></th></tr>
<tr>
    <td><strong><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Current Month-To-Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong></td>
    <td class="label"><?php if (! $this->_tpl_vars['monthToDate']['Valid']['amount']):  $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>(n/a)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  else:  echo ((is_array($_tmp=$this->_tpl_vars['monthToDate']['Valid']['amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp));  endif; ?></td>
    <td class="label"><?php echo $this->_tpl_vars['monthToDate']['Valid']['count']; ?>
</td>
    <td><a href="<?php echo $this->_tpl_vars['monthToDate']['Valid']['url']; ?>
"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>view details<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>...</a></td>
</tr>
<tr>
    <td><strong><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Current Year-To-Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong></td>
    <td class="label"><?php if (! $this->_tpl_vars['yearToDate']['Valid']['amount']):  $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>(n/a)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  else:  echo ((is_array($_tmp=$this->_tpl_vars['yearToDate']['Valid']['amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp));  endif; ?></td>
    <td class="label"><?php echo $this->_tpl_vars['yearToDate']['Valid']['count']; ?>
</td>
    <td><a href="<?php echo $this->_tpl_vars['yearToDate']['Valid']['url']; ?>
"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>view details<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>...</a></td>
</tr>
<tr>
    <td><strong><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Cumulative<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong><br /><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>(since inception)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
    <td class="label"><?php if (! $this->_tpl_vars['startToDate']['Valid']['amount']):  $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>(n/a)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  else:  echo ((is_array($_tmp=$this->_tpl_vars['startToDate']['Valid']['amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp));  endif; ?></td>
    <td class="label"><?php echo $this->_tpl_vars['startToDate']['Valid']['count']; ?>
</td>
    <td><a href="<?php echo $this->_tpl_vars['startToDate']['Valid']['url']; ?>
"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>view details<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>...</a></td>
</tr>
</table>

<?php if ($this->_tpl_vars['pager']->_totalItems): ?>
    <h3><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Recent Contributions<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
    <div class="form-item">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contribute/Form/Selector.tpl", 'smarty_include_vars' => array('context' => 'dashboard')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
<?php endif; ?>