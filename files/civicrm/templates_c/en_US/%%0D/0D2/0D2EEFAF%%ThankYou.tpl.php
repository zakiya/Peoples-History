<?php /* Smarty version 2.6.14, created on 2010-12-26 08:06:20
         compiled from CRM/Contribute/Form/Contribution/ThankYou.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Contribute/Form/Contribution/ThankYou.tpl', 15, false),array('modifier', 'crmMoney', 'CRM/Contribute/Form/Contribution/ThankYou.tpl', 36, false),array('modifier', 'crmDate', 'CRM/Contribute/Form/Contribution/ThankYou.tpl', 43, false),array('modifier', 'nl2br', 'CRM/Contribute/Form/Contribution/ThankYou.tpl', 87, false),array('modifier', 'truncate', 'CRM/Contribute/Form/Contribution/ThankYou.tpl', 101, false),)), $this); ?>
<?php if ($this->_tpl_vars['action'] & 1024): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contribute/Form/Contribution/PreviewHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif; ?>

<div class="form-item">
    <div id="thankyou_text">
        <p>
        <?php echo $this->_tpl_vars['thankyou_text']; ?>

        </p>
    </div>
    <div id="help">
                <?php if ($this->_tpl_vars['contributeMode'] == 'notify'): ?>
            <p>
            <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Your contribution has been submitted to <?php if ($this->_tpl_vars['paymentProcessor']['payment_processor_type'] == 'Google_Checkout'): ?>Google<?php else: ?>PayPal<?php endif; ?> for processing. Please print this page for your records.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php if ($this->_tpl_vars['is_email_receipt']): ?>
                <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['email'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?> An email receipt will be sent to %1 once the transaction is processed successfully.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
            <?php endif; ?>
            </p>
        <?php else: ?>
            <p><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Your transaction has been processed successfully. Please print this page for your records.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
            <?php if ($this->_tpl_vars['is_email_receipt']): ?>
                <p><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['email'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>An email receipt has also been sent to %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
            <?php endif; ?>
        <?php endif; ?>
    </div>
    
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contribute/Form/Contribution/MembershipBlock.tpl", 'smarty_include_vars' => array('context' => 'thankContribution')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <?php if ($this->_tpl_vars['amount'] > 0 || $this->_tpl_vars['minimum_fee'] > 0): ?>
    <div class="header-dark">
        <?php if ($this->_tpl_vars['membershipBlock'] && ! $this->_tpl_vars['is_separate_payment']):  $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership Fee<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  else:  $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contribution Information<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  endif; ?>
    </div>
    <div class="display-block">
        <?php if ($this->_tpl_vars['membership_amount']): ?> 
              <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contribution Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <strong><?php echo ((is_array($_tmp=$this->_tpl_vars['amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>
</strong><br />
              <?php echo $this->_tpl_vars['membership_name']; ?>
 <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <strong><?php echo ((is_array($_tmp=$this->_tpl_vars['membership_amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>
</strong><br />
              <strong> -------------------------------------------</strong><br />
              <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <strong><?php echo ((is_array($_tmp=$this->_tpl_vars['amount']+$this->_tpl_vars['membership_amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>
</strong><br />
        <?php else: ?>
              <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <strong><?php echo ((is_array($_tmp=$this->_tpl_vars['amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>
 <?php if ($this->_tpl_vars['amount_level']): ?> - <?php echo $this->_tpl_vars['amount_level']; ?>
 <?php endif; ?></strong><br />
         <?php endif; ?>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <strong><?php echo ((is_array($_tmp=$this->_tpl_vars['receive_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>
</strong><br />
        <?php if ($this->_tpl_vars['contributeMode'] != 'notify' && $this->_tpl_vars['is_monetary']): ?>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Transaction #<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo $this->_tpl_vars['trxn_id']; ?>
<br />
        <?php endif; ?>
        <?php if ($this->_tpl_vars['membership_trx_id']): ?>
           <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Membership Transaction #<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo $this->_tpl_vars['membership_trx_id']; ?>

        <?php endif; ?>
        
                <?php if ($this->_tpl_vars['is_recur']): ?>
            <?php if ($this->_tpl_vars['installments']): ?>
                <p><strong><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['frequency_interval'],'2' => $this->_tpl_vars['frequency_unit'],'3' => $this->_tpl_vars['installments'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This recurring contribution will be automatically processed every %1 %2(s) for a total %3 installments (including this initial contribution).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong></p>
            <?php else: ?>
                <p><strong><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['frequency_interval'],'2' => $this->_tpl_vars['frequency_unit'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This recurring contribution will be automatically processed every %1 %2(s).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong></p>
            <?php endif; ?>
            <p>
            <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['cancelSubscriptionUrl'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You can modify or cancel future contributions at any time by <a href="%1">logging in to your account</a>.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php if ($this->_tpl_vars['is_email_receipt']): ?>
                <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You will receive an email receipt for each recurring contribution. The receipts will also include a link you can use if you decide to modify or cancel your future contributions.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php endif; ?>
            </p>
        <?php endif; ?>
    </div>
    <?php endif; ?>
    
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contribute/Form/Contribution/Honor.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php if ($this->_tpl_vars['customPre']): ?>
         <?php $_from = $this->_tpl_vars['customPre']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cname'] => $this->_tpl_vars['field']):
?>
              <?php if ($this->_tpl_vars['field']['groupTitle']): ?>
                <?php $this->assign('groupTitlePre', $this->_tpl_vars['field']['groupTitle']); ?> 
              <?php endif; ?>
         <?php endforeach; endif; unset($_from); ?>
        <div class="header-dark">
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  echo $this->_tpl_vars['groupTitlePre'];  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
         </div>  
         <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/UF/Form/Block.tpl", 'smarty_include_vars' => array('fields' => $this->_tpl_vars['customPre'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['contributeMode'] != 'notify' && $this->_tpl_vars['is_monetary']): ?>    
    <div class="header-dark">
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Billing Name and Address<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </div>
    <div class="display-block">
        <strong><?php echo $this->_tpl_vars['name']; ?>
</strong><br />
        <?php echo ((is_array($_tmp=$this->_tpl_vars['address'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

    </div>
    <div class="display-block">
        <?php echo $this->_tpl_vars['email']; ?>

    </div>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['contributeMode'] == 'direct'): ?>
    <div class="header-dark">
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Credit or Debit Card Information<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </div>
    <div class="display-block">
        <?php echo $this->_tpl_vars['credit_card_type']; ?>
<br />
        <?php echo $this->_tpl_vars['credit_card_number']; ?>
<br />
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Expires<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>: <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['credit_card_exp_date'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 7, '') : smarty_modifier_truncate($_tmp, 7, '')))) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>

    </div>
    <?php endif; ?>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contribute/Form/Contribution/PremiumBlock.tpl", 'smarty_include_vars' => array('context' => 'thankContribution')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <?php if ($this->_tpl_vars['customPost']): ?>
         <?php $_from = $this->_tpl_vars['customPost']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cname'] => $this->_tpl_vars['field']):
?>
              <?php if ($this->_tpl_vars['field']['groupTitle']): ?>
                <?php $this->assign('groupTitlePost', $this->_tpl_vars['field']['groupTitle']); ?> 
              <?php endif; ?>
         <?php endforeach; endif; unset($_from); ?>
        <div class="header-dark">
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  echo $this->_tpl_vars['groupTitlePost'];  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
         </div>  
         <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/UF/Form/Block.tpl", 'smarty_include_vars' => array('fields' => $this->_tpl_vars['customPost'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>

    <div id="thankyou_footer">
        <p>
        <?php echo $this->_tpl_vars['thankyou_footer']; ?>

        </p>
    </div>
</div>