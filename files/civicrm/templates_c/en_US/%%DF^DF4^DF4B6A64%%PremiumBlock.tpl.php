<?php /* Smarty version 2.6.14, created on 2010-01-04 14:28:52
         compiled from CRM/Contribute/Form/Contribution/PremiumBlock.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Contribute/Form/Contribution/PremiumBlock.tpl', 39, false),array('modifier', 'crmMoney', 'CRM/Contribute/Form/Contribution/PremiumBlock.tpl', 59, false),array('modifier', 'cat', 'CRM/Contribute/Form/Contribution/PremiumBlock.tpl', 62, false),)), $this); ?>
<?php if ($this->_tpl_vars['products']): ?>
<div id="premiums">
    <?php if ($this->_tpl_vars['context'] == 'makeContribution'): ?>

<?php echo '
<script type="text/javascript">
<!--
// Selects the product (radio button) if user selects an option for that product.
// Putting this function directly in template so they are available for standalone forms.
function selectPremium(optionField) {
    premiumId = optionField.name.slice(8);
    for( i=0; i < document.Main.elements.length; i++) {
        if (document.Main.elements[i].type == \'radio\' && document.Main.elements[i].name == \'selectProduct\' && document.Main.elements[i].value == premiumId ) {
            element = document.Main.elements[i];
            element.checked = true;
        }
    }
}
//-->
</script>
'; ?>


        <fieldset>
        <?php if ($this->_tpl_vars['premiumBlock']['premiums_intro_title']): ?>
            <legend><?php echo $this->_tpl_vars['premiumBlock']['premiums_intro_title']; ?>
</legend>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['premiumBlock']['premiums_intro_text']): ?>
            <div id=premiums-intro>
                <p><?php echo $this->_tpl_vars['premiumBlock']['premiums_intro_text']; ?>
</p>
            </div> 
        <?php endif; ?>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['context'] == 'confirmContribution' || $this->_tpl_vars['context'] == 'thankContribution'): ?>
        <div class="header-dark">
            <?php if ($this->_tpl_vars['premiumBlock']['premiums_intro_title']): ?>
                <?php echo $this->_tpl_vars['premiumBlock']['premiums_intro_title']; ?>

            <?php else: ?>
                <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Your Premium Selection<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php endif; ?>
        </div>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['preview']): ?>
        <?php $this->assign('showSelectOptions', '1'); ?>
    <?php endif; ?>
    <?php echo '<table id="premiums-listings" class="no-border">';  $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
 echo '<tr ';  if ($this->_tpl_vars['context'] == 'makeContribution'):  echo 'class="odd-row" ';  endif;  echo 'valign="top">';  if ($this->_tpl_vars['showRadioPremium']):  echo '';  $this->assign('pid', $this->_tpl_vars['row']['id']);  echo '<td>';  echo $this->_tpl_vars['form']['selectProduct'][$this->_tpl_vars['pid']]['html'];  echo '</td>';  endif;  echo '<td>';  if ($this->_tpl_vars['row']['thumbnail']):  echo '<a href="javascript:popUp(\'';  echo $this->_tpl_vars['row']['image'];  echo '\')" ><img src="';  echo $this->_tpl_vars['row']['thumbnail'];  echo '" alt="';  echo $this->_tpl_vars['row']['name'];  echo '" class="no-border" /></a>';  endif;  echo '</td><td><strong>';  echo $this->_tpl_vars['row']['name'];  echo '</strong><br />';  echo $this->_tpl_vars['row']['description'];  echo ' &nbsp;';  if (( ( $this->_tpl_vars['premiumBlock']['premiums_display_min_contribution'] && $this->_tpl_vars['context'] == 'makeContribution' ) || $this->_tpl_vars['preview'] == 1 ) && $this->_tpl_vars['row']['min_contribution'] > 0):  echo '';  $this->_tag_stack[] = array('ts', array('1' => ((is_array($_tmp=$this->_tpl_vars['row']['min_contribution'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)))); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  echo '(Contribute at least %1 to be eligible for this gift.)';  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  echo '';  endif;  echo '';  if ($this->_tpl_vars['showSelectOptions']):  echo '';  $this->assign('pid', ((is_array($_tmp='options_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['row']['id']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['row']['id'])));  echo '';  if ($this->_tpl_vars['pid']):  echo '<div id="product-options"><p>';  echo $this->_tpl_vars['form'][$this->_tpl_vars['pid']]['html'];  echo '</p></div>';  endif;  echo '';  else:  echo '<div id="product-options"><p><strong>';  echo $this->_tpl_vars['row']['options'];  echo '</strong></p></div>';  endif;  echo '';  if ($this->_tpl_vars['context'] == 'thankContribution' && $this->_tpl_vars['is_deductible'] && $this->_tpl_vars['row']['price']):  echo '<div id="premium-tax-disclaimer"><p>';  $this->_tag_stack[] = array('ts', array('1' => ((is_array($_tmp=$this->_tpl_vars['row']['price'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)))); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  echo 'The value of this premium is %1. This may affect the amount of the tax deduction you can claim. Consult your tax advisor for more information.';  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  echo '</p></div>';  endif;  echo '</td></tr>';  endforeach; endif; unset($_from);  echo '';  if ($this->_tpl_vars['showRadioPremium'] && ! $this->_tpl_vars['preview']):  echo '<tr class="odd-row"><td colspan="4">';  echo $this->_tpl_vars['form']['selectProduct']['no_thanks']['html'];  echo '</td></tr>';  endif;  echo '</table>'; ?>

    <?php if ($this->_tpl_vars['context'] == 'makeContribution'): ?>
        </fieldset>
    <?php endif; ?>
</div>
<?php echo '
<script type="text/javascript">
function popUp(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, \'" + id + "\', \'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=640,height=420,left = 202,top = 184\');");
}
</script>
'; ?>

<?php endif; ?>
