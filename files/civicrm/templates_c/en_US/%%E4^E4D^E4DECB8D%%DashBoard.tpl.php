<?php /* Smarty version 2.6.14, created on 2010-01-28 11:39:54
         compiled from CRM/Member/Page/DashBoard.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'crmURL', 'CRM/Member/Page/DashBoard.tpl', 3, false),array('block', 'ts', 'CRM/Member/Page/DashBoard.tpl', 7, false),)), $this); ?>
<div id="help" class="solid-border-bottom">
    <?php ob_start();  echo CRM_Utils_System::crmURL(array('p' => "civicrm/contact/search/basic",'q' => "reset=1"), $this); $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('findContactURL', ob_get_contents());ob_end_clean(); ?>
    <?php ob_start();  echo CRM_Utils_System::crmURL(array('p' => "civicrm/admin/contribute",'q' => "reset=1"), $this); $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('contribPagesURL', ob_get_contents());ob_end_clean(); ?>
    <?php ob_start();  echo CRM_Utils_System::crmURL(array('p' => "civicrm/admin/member/membershipType",'q' => "reset=1"), $this); $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('memberTypesURL', ob_get_contents());ob_end_clean(); ?>
    <?php ob_start();  echo CRM_Utils_System::crmURL(array('p' => "civicrm/member/import",'q' => "reset=1"), $this); $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('importURL', ob_get_contents());ob_end_clean(); ?>
    <?php ob_start();  $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Opens online documentation in a new window.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('docURLTitle', ob_get_contents());ob_end_clean(); ?>
    <p><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['contribPagesURL'],'2' => $this->_tpl_vars['memberTypesURL'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>CiviMember allows you to create customized membership types as well as page(s) for online membership sign-up and renewal. Administrators can create or modify Membership Types <a href="%2">here</a>, and configure Online Contribution Pages which include membership sign-up <a href="%1">here</a>.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
    <p><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['findContactURL'],'2' => "http://wiki.civicrm.org/confluence//x/ui",'3' => $this->_tpl_vars['importURL'],'4' => $this->_tpl_vars['docURLTitle'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You can also input and track membership sign-ups offline. To record memberships manually for individual contacts, use <a href="%1">Find Contacts</a> to locate the contact. Then click <strong>View</strong> to go to their summary page and click on the <strong>New Membership</strong> link. You can also <a href="%3">import batches of membership records</a> from other sources. Refer to the <a href="%2" target="_blank" title="%4">CiviMember Guide</a> for more information.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
</div>

<h3><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership Summary<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
<div class="description">
    <?php ob_start();  echo CRM_Utils_System::crmURL(array('p' => "civicrm/member/search/basic",'q' => "reset=1"), $this); $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('findMembersURL', ob_get_contents());ob_end_clean(); ?>
    <p><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['findMembersURL'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This table provides a summary of <strong>Membership Signup and Renewal Activity</strong>, and includes shortcuts to view the details for these commonly used search criteria. To run your own customized searches - click <a href="%1">Find Members</a>. You can search by Member Name, Membership Type, Status, and Signup Date Ranges.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
</div>
<table class="report">
<tr class="columnheader-dark">
    <th scope="col"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Members by Type<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
    <th scope="col"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  echo $this->_tpl_vars['currentMonth']; ?>
-New/Renew (MTD)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
    <th scope="col"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  echo $this->_tpl_vars['currentYear']; ?>
-New/Renew (YTD)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
    <th scope="col"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Current #<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
</tr>

<?php $_from = $this->_tpl_vars['membershipSummary']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>
<tr>
    <td><strong><?php echo $this->_tpl_vars['row']['month']['name']; ?>
</strong></td>
    <td class="label"><a href="<?php echo $this->_tpl_vars['row']['month']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['row']['month']['count']; ?>
</a></td>     <td class="label"><a href="<?php echo $this->_tpl_vars['row']['year']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['row']['year']['count']; ?>
</a></td>     <td class="label"><a href="<?php echo $this->_tpl_vars['row']['current']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['row']['current']['count']; ?>
</a></td> </tr>
<?php endforeach; endif; unset($_from); ?>

<tr class="columnfooter">
    <td><strong><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Totals (all types)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong></td>
    <td class="label"><a href="<?php echo $this->_tpl_vars['totalCount']['month']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['totalCount']['month']['count']; ?>
</a></td>     <td class="label"><a href="<?php echo $this->_tpl_vars['totalCount']['year']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['totalCount']['year']['count']; ?>
</a></td>     <td class="label"><a href="<?php echo $this->_tpl_vars['totalCount']['current']['url']; ?>
" title="view details"><?php echo $this->_tpl_vars['totalCount']['current']['count']; ?>
</a></td> </tr>
</table>

<?php if ($this->_tpl_vars['rows']): ?>
    <h3><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Recent Memberships<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
    <div class="form-item">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Member/Form/Selector.tpl", 'smarty_include_vars' => array('context' => 'dashboard')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
<?php endif; ?>