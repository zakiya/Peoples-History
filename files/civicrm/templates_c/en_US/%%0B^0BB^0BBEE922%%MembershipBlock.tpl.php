<?php /* Smarty version 2.6.14, created on 2010-01-04 14:28:51
         compiled from CRM/Contribute/Form/Contribution/MembershipBlock.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Contribute/Form/Contribution/MembershipBlock.tpl', 32, false),array('modifier', 'crmMoney', 'CRM/Contribute/Form/Contribution/MembershipBlock.tpl', 58, false),array('modifier', 'date_format', 'CRM/Contribute/Form/Contribution/MembershipBlock.tpl', 69, false),array('modifier', 'crmDate', 'CRM/Contribute/Form/Contribution/MembershipBlock.tpl', 70, false),)), $this); ?>
<?php if ($this->_tpl_vars['membershipBlock']): ?>
<div id="membership">
  <?php if ($this->_tpl_vars['context'] == 'makeContribution'): ?>
  <fieldset>    
      <?php if ($this->_tpl_vars['renewal_mode']): ?>
        <?php if ($this->_tpl_vars['membershipBlock']['renewal_title']): ?>
            <legend><?php echo $this->_tpl_vars['membershipBlock']['renewal_title']; ?>
</legend>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['membershipBlock']['renewal_text']): ?>
            <div id=membership-intro>
                <p><?php echo $this->_tpl_vars['membershipBlock']['renewal_text']; ?>
</p>
            </div> 
        <?php endif; ?>

      <?php else: ?>        
        <?php if ($this->_tpl_vars['membershipBlock']['new_title']): ?>
            <legend><?php echo $this->_tpl_vars['membershipBlock']['new_title']; ?>
</legend>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['membershipBlock']['new_text']): ?>
            <div id=membership-intro>
                <p><?php echo $this->_tpl_vars['membershipBlock']['new_text']; ?>
</p>
            </div> 
        <?php endif; ?>
      <?php endif; ?>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['context'] != 'makeContribution'): ?>
        <div class="header-dark">
            <?php if ($this->_tpl_vars['renewal_mode']): ?>
                    <?php if ($this->_tpl_vars['membershipBlock']['renewal_title']): ?>
                        <?php echo $this->_tpl_vars['membershipBlock']['renewal_title']; ?>

                    <?php else: ?>
                        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select a Membership Renewal Level<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                    <?php endif; ?>

            <?php else: ?>
                    <?php if ($this->_tpl_vars['membershipBlock']['new_title']): ?>
                        <?php echo $this->_tpl_vars['membershipBlock']['new_title']; ?>

                    <?php else: ?>
                        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select a Membership Level<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                    <?php endif; ?>
            <?php endif; ?>
        </div>
    <?php endif; ?>
   
    <?php echo '<table id="membership-listings" class="no-border">';  $_from = $this->_tpl_vars['membershipTypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
 echo '<tr ';  if ($this->_tpl_vars['context'] == 'makeContribution' || $this->_tpl_vars['context'] == 'thankContribution'):  echo 'class="odd-row" ';  endif;  echo 'valign="top">';  if ($this->_tpl_vars['showRadio']):  echo '';  $this->assign('pid', $this->_tpl_vars['row']['id']);  echo '<td>';  echo $this->_tpl_vars['form']['selectMembership'][$this->_tpl_vars['pid']]['html'];  echo '</td>';  endif;  echo '<td><strong>';  echo $this->_tpl_vars['row']['name'];  echo '</strong><br />';  echo $this->_tpl_vars['row']['description'];  echo ' &nbsp;';  if (( $this->_tpl_vars['membershipBlock']['display_min_fee'] && $this->_tpl_vars['context'] == 'makeContribution' ) && $this->_tpl_vars['row']['minimum_fee'] > 0):  echo '';  if ($this->_tpl_vars['is_separate_payment'] || ! $this->_tpl_vars['form']['amount']['label']):  echo '';  $this->_tag_stack[] = array('ts', array('1' => ((is_array($_tmp=$this->_tpl_vars['row']['minimum_fee'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)))); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  echo '(membership fee - %1)';  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  echo '';  else:  echo '';  $this->_tag_stack[] = array('ts', array('1' => ((is_array($_tmp=$this->_tpl_vars['row']['minimum_fee'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)))); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  echo '(contribute at least %1 to be eligible for this membership)';  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  echo '';  endif;  echo '';  endif;  echo '</td><td>';  echo '';  if ($this->_tpl_vars['row']['current_membership'] && $this->_tpl_vars['context'] == 'makeContribution'):  echo '';  if (((is_array($_tmp=$this->_tpl_vars['row']['current_membership'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y%m%d") : smarty_modifier_date_format($_tmp, "%Y%m%d")) < ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y%m%d") : smarty_modifier_date_format($_tmp, "%Y%m%d"))):  echo '<br /><em>';  $this->_tag_stack[] = array('ts', array('1' => ((is_array($_tmp=$this->_tpl_vars['row']['current_membership'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)),'2' => $this->_tpl_vars['row']['name'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  echo 'Your <strong>%2</strong> membership expired on %1.';  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  echo '</em>';  else:  echo '<br /><em>';  $this->_tag_stack[] = array('ts', array('1' => ((is_array($_tmp=$this->_tpl_vars['row']['current_membership'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)),'2' => $this->_tpl_vars['row']['name'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  echo 'Your <strong>%2</strong> membership expires on %1.';  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  echo '</em>';  endif;  echo '';  else:  echo '&nbsp;';  endif;  echo '</td></tr>';  endforeach; endif; unset($_from);  echo '';  if ($this->_tpl_vars['showRadio']):  echo '';  if ($this->_tpl_vars['showRadioNoThanks']):  echo '<tr class="odd-row"><td>';  echo $this->_tpl_vars['form']['selectMembership']['no_thanks']['html'];  echo '</td><td colspan="2"><strong>No thank you</strong></td></tr>';  endif;  echo '';  endif;  echo '</table>'; ?>

    <?php if ($this->_tpl_vars['context'] == 'makeContribution'): ?>
        </fieldset>
    <?php endif; ?>
</div>
<?php endif; ?>