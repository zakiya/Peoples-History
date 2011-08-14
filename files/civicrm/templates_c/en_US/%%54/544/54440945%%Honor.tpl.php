<?php /* Smarty version 2.6.14, created on 2010-11-24 14:12:06
         compiled from CRM/Contribute/Form/Contribution/Honor.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Contribute/Form/Contribution/Honor.tpl', 3, false),)), $this); ?>
<?php if ($this->_tpl_vars['honor_block_is_active']): ?>
    <div class="header-dark">
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  echo $this->_tpl_vars['honor_block_title'];  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </div>
    <div class="display-block">
         <?php echo $this->_tpl_vars['honor_prefix']; ?>
&nbsp;<?php echo $this->_tpl_vars['honor_first_name']; ?>
&nbsp;<?php echo $this->_tpl_vars['honor_last_name']; ?>
<br />
         <strong>Email      : </strong><?php echo $this->_tpl_vars['honor_email']; ?>
<br />
    </div>

<?php endif; ?>