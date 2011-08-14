<?php /* Smarty version 2.6.14, created on 2010-01-04 14:28:51
         compiled from CRM/Contribute/Form/Contribution/Main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Contribute/Form/Contribution/Main.tpl', 30, false),)), $this); ?>
<?php echo '
<script type="text/javascript">
<!--
// Putting these functions directly in template so they are available for standalone forms

function useAmountOther() {
    for( i=0; i < document.Main.elements.length; i++) {
        element = document.Main.elements[i];
        if (element.type == \'radio\' && element.name == \'amount\') {
            if (element.value == \'amount_other_radio\' ) {
                element.checked = true;
            } else {
                element.checked = false;
            }
        }
    }
}

function clearAmountOther() {
  if (document.Main.amount_other == null) return; // other_amt field not present; do nothing
  document.Main.amount_other.value = "";
}

//-->
</script>
'; ?>

<?php if ($this->_tpl_vars['action'] & 1024): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contribute/Form/Contribution/PreviewHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif;  ob_start(); ?><span class="marker"  title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This field is required.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>">*</span><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('reqMark', ob_get_contents());ob_end_clean(); ?>
<div class="form-item">
   <div id="intro_text">
    <p>
    <?php echo $this->_tpl_vars['intro_text']; ?>

    </p>
    </div>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contribute/Form/Contribution/MembershipBlock.tpl", 'smarty_include_vars' => array('context' => 'makeContribution')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>     
 
    <table class="form-layout-compressed">
    <tr>
        <td class="label nowrap"><?php echo $this->_tpl_vars['form']['amount']['label']; ?>
</td><td><?php echo $this->_tpl_vars['form']['amount']['html']; ?>
</td>
    </tr>
    <?php if ($this->_tpl_vars['is_allow_other_amount']): ?>
        <tr><td class="label"><?php echo $this->_tpl_vars['form']['amount_other']['label']; ?>
</td><td><?php echo $this->_tpl_vars['config']->defaultCurrencySymbol(); ?>
&nbsp;<?php echo $this->_tpl_vars['form']['amount_other']['html']; ?>
</td></tr>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['form']['is_recur']): ?>  
        <tr>
           <td>&nbsp;</td><td><strong><?php echo $this->_tpl_vars['form']['is_recur']['html']; ?>
 <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>every<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> &nbsp; <?php echo $this->_tpl_vars['form']['frequency_interval']['html']; ?>
 &nbsp; <?php echo $this->_tpl_vars['form']['frequency_unit']['html']; ?>
 &nbsp; <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>for<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> &nbsp; <?php echo $this->_tpl_vars['form']['installments']['html']; ?>
 &nbsp; <?php echo $this->_tpl_vars['form']['installments']['label']; ?>
</strong><br />
                           <p><span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Your recurring contribution will be processed automatically for the number of installments you specify. You can leave the number of installments blank if you want to make an open-ended commitment. In either case, you can choose to cancel at any time.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                           <?php if ($this->_tpl_vars['is_email_receipt']): ?>
                                <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You will receive an email receipt for each recurring contribution. The receipts will include a link you can use if you decide to modify or cancel your future contributions.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                           <?php endif; ?>
                           </p>
           </td>
       </tr>
    <?php endif; ?>
    <tr>
	<?php $this->assign('n', "email-".($this->_tpl_vars['bltID'])); ?>
        <td class="label"><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['n']]['label']; ?>
</td><td><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['n']]['html']; ?>
</td>
    </tr>
    </table>

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/CMSUser.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contribute/Form/Contribution/PremiumBlock.tpl", 'smarty_include_vars' => array('context' => 'makeContribution')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <?php if ($this->_tpl_vars['honor_block_is_active']): ?>
    <fieldset><legend><?php echo $this->_tpl_vars['honor_block_title']; ?>
</legend>
        <?php echo $this->_tpl_vars['honor_block_text']; ?>

      <table class="form-layout-compressed">
      <tr><td><?php echo $this->_tpl_vars['form']['honor_prefix_id']['label']; ?>
</td><td><?php echo $this->_tpl_vars['form']['honor_prefix_id']['html']; ?>
</td></tr>
	  <tr><td><?php echo $this->_tpl_vars['form']['honor_first_name']['label']; ?>
</td><td><?php echo $this->_tpl_vars['form']['honor_first_name']['html']; ?>
</td></tr>
	  <tr><td><?php echo $this->_tpl_vars['form']['honor_last_name']['label']; ?>
</td><td><?php echo $this->_tpl_vars['form']['honor_last_name']['html']; ?>
</td></tr>
      <tr><td><?php echo $this->_tpl_vars['form']['honor_email']['label']; ?>
</td><td><?php echo $this->_tpl_vars['form']['honor_email']['html']; ?>
</td></tr>
      </table>
    </fieldset>
    <?php endif; ?>
    
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/UF/Form/Block.tpl", 'smarty_include_vars' => array('fields' => $this->_tpl_vars['customPre'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['is_monetary']):  if ($this->_tpl_vars['form']['credit_card_number']): ?>
    <fieldset><legend><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Credit or Debit Card Information<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
    <?php if ($this->_tpl_vars['paymentProcessor']['billing_mode'] & 2): ?>
        <table class="form-layout-compressed">
        <tr><td class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If you have a PayPal account, you can click the PayPal button to continue. Otherwise, fill in the credit card and billing information on this form and click <strong>Continue</strong> at the bottom of the page.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td></tr>
        <tr><td><?php echo $this->_tpl_vars['form']['_qf_Main_next_express']['html']; ?>
 <span style="font-size:11px; font-family: Arial, Verdana;">Save time.  Checkout securely.  Pay without sharing your financial information. </span></td></tr>
        </table>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['paymentProcessor']['billing_mode'] & 1): ?>
        <table class="form-layout-compressed">
        <tr><td class="label"><?php echo $this->_tpl_vars['form']['credit_card_type']['label']; ?>
</td><td><?php echo $this->_tpl_vars['form']['credit_card_type']['html']; ?>
</td></tr>
        <tr><td class="label"><?php echo $this->_tpl_vars['form']['credit_card_number']['label']; ?>
</td><td><?php echo $this->_tpl_vars['form']['credit_card_number']['html']; ?>
<br />
            <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Enter numbers only, no spaces or dashes.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td></tr>
        <tr><td class="label"><?php echo $this->_tpl_vars['form']['cvv2']['label']; ?>
</td><td><?php echo $this->_tpl_vars['form']['cvv2']['html']; ?>
 &nbsp; <img src="<?php echo $this->_tpl_vars['config']->resourceBase; ?>
i/mini_cvv2.gif" alt="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Security Code Location on Credit Card<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" style="vertical-align: text-bottom;" /><br />
            <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Usually the last 3-4 digits in the signature area on the back of the card.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td></tr>
        <tr><td class="label"><?php echo $this->_tpl_vars['form']['credit_card_exp_date']['label']; ?>
</td><td><?php echo $this->_tpl_vars['form']['credit_card_exp_date']['html']; ?>
</td></tr>
        </table>
        </fieldset>
        
        <fieldset><legend><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Billing Name and Address<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
        <table class="form-layout-compressed">
        <tr><td colspan="2" class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Enter the name as shown on your credit or debit card, and the billing address for this card.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td></tr>
        <tr><td class="label"><?php echo $this->_tpl_vars['form']['billing_first_name']['label']; ?>
 </td><td><?php echo $this->_tpl_vars['form']['billing_first_name']['html']; ?>
</td></tr>
        <tr><td class="label"><?php echo $this->_tpl_vars['form']['billing_middle_name']['label']; ?>
</td><td><?php echo $this->_tpl_vars['form']['billing_middle_name']['html']; ?>
</td></tr>
        <tr><td class="label"><?php echo $this->_tpl_vars['form']['billing_last_name']['label']; ?>
</td><td><?php echo $this->_tpl_vars['form']['billing_last_name']['html']; ?>
</td></tr>
	<?php $this->assign('n', "street_address-".($this->_tpl_vars['bltID'])); ?>
        <tr><td class="label"><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['n']]['label']; ?>
</td><td><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['n']]['html']; ?>
</td></tr>
        <?php $this->assign('n', "city-".($this->_tpl_vars['bltID'])); ?>
        <tr><td class="label"><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['n']]['label']; ?>
</td><td><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['n']]['html']; ?>
</td></tr>
        <?php $this->assign('n', "state_province_id-".($this->_tpl_vars['bltID'])); ?>
        <tr><td class="label"><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['n']]['label']; ?>
</td><td><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['n']]['html']; ?>
</td></tr>
        <?php $this->assign('n', "postal_code-".($this->_tpl_vars['bltID'])); ?>
        <tr><td class="label"><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['n']]['label']; ?>
</td><td><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['n']]['html']; ?>
</td></tr>
        <?php $this->assign('n', "country_id-".($this->_tpl_vars['bltID'])); ?>
        <tr><td class="label"><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['n']]['label']; ?>
</td><td><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['n']]['html']; ?>
</td></tr>
        </table>
    <?php endif; ?>
    </fieldset>
<?php endif;  endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/UF/Form/Block.tpl", 'smarty_include_vars' => array('fields' => $this->_tpl_vars['customPost'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['is_monetary']):  if ($this->_tpl_vars['paymentProcessor']['payment_processor_type'] == 'PayPal_Express'): ?>
    <fieldset><legend><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Checkout with PayPal<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
    <table class="form-layout-compressed">
    <tr><td class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click the PayPal button to continue.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td></tr>
    <tr><td><?php echo $this->_tpl_vars['form']['_qf_Main_next_express']['html']; ?>
 <span style="font-size:11px; font-family: Arial, Verdana;">Checkout securely.  Pay without sharing your financial information. </span></td></tr>
    </table>
    </fieldset>
<?php endif;  endif; ?>

<div id="crm-submit-buttons">
    <?php echo $this->_tpl_vars['form']['buttons']['html']; ?>

</div>
<?php if ($this->_tpl_vars['footer_text']): ?>
    <div id="footer_text">
    <p>
    <?php echo $this->_tpl_vars['footer_text']; ?>

    </p>
    </div>
<?php endif; ?>
</div>