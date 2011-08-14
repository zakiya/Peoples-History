<?php /* Smarty version 2.6.14, created on 2010-01-04 14:00:56
         compiled from CRM/Contact/Page/View/Contribution.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Contact/Page/View/Contribution.tpl', 8, false),array('function', 'crmURL', 'CRM/Contact/Page/View/Contribution.tpl', 10, false),)), $this); ?>
<div class="view-content">
<?php if ($this->_tpl_vars['action'] == 1 || $this->_tpl_vars['action'] == 2 || $this->_tpl_vars['action'] == 8): ?>             
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contribute/Form/Contribution.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  elseif ($this->_tpl_vars['action'] == 4): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contribute/Form/ContributionView.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  else: ?>
<div id="help">
    <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['displayName'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contributions received from %1 since inception.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> 
    <?php if ($this->_tpl_vars['permission'] == 'edit'): ?>
     <?php ob_start();  echo CRM_Utils_System::crmURL(array('p' => "civicrm/contact/view/contribution",'q' => "reset=1&action=add&cid=".($this->_tpl_vars['contactId'])."&context=contribution"), $this); $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('newContribURL', ob_get_contents());ob_end_clean(); ?>
     <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['newContribURL'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click <a href="%1">Record Offline Contribution</a> to record a new offline contribution received from this contact.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
     <?php if ($this->_tpl_vars['newCredit']): ?>
       <?php ob_start();  echo CRM_Utils_System::crmURL(array('p' => "civicrm/contribute/offline",'q' => "reset=1&cid=".($this->_tpl_vars['contactId'])), $this); $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('newCreditURL', ob_get_contents());ob_end_clean(); ?>
       <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['newCreditURL'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click <a href="%1">Submit Credit Card Contribution</a> to process a new contribution on behalf of the contributor using their credit or debit card.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
     <?php endif; ?>
    <?php endif; ?>
</div>

<?php if ($this->_tpl_vars['action'] == 16 && $this->_tpl_vars['permission'] == 'edit'): ?>
    <div class="action-link">
        <a href="<?php echo $this->_tpl_vars['newContribURL']; ?>
">&raquo; <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Record Offline Contribution<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
        <?php if ($this->_tpl_vars['newCredit']): ?>
            &nbsp; &nbsp; <a href="<?php echo $this->_tpl_vars['newCreditURL']; ?>
">&raquo; <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Submit Credit Card Contribution<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
        <?php endif; ?>
    </div>
<?php endif; ?>


<?php if ($this->_tpl_vars['rows']): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contribute/Page/ContributionTotals.tpl", 'smarty_include_vars' => array('mode' => 'view')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <p> </p>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contribute/Form/Selector.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    
<?php else: ?>
   <div class="messages status">
       <dl>
       <dt><img src="<?php echo $this->_tpl_vars['config']->resourceBase; ?>
i/Inform.gif" alt="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>status<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" /></dt>
       <dd>
            <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>No contributions have been recorded from this contact.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
       </dd>
       </dl>
  </div>
<?php endif; ?>

<?php if ($this->_tpl_vars['honor']): ?>	
    <div class="description">
        <p><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['displayName'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contributions made in honor of %1.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
    </div>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contribute/Page/ContributionHonor.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>	
<?php endif; ?> 

<?php endif; ?>
</div>