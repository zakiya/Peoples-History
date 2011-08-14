<?php /* Smarty version 2.6.14, created on 2010-12-26 08:06:19
         compiled from CRM/Contribute/Form/Contribution/ReceiptSubject.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Contribute/Form/Contribution/ReceiptSubject.tpl', 2, false),)), $this); ?>
<?php echo '';  $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  echo 'Receipt';  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  echo ' - ';  echo $this->_tpl_vars['title'];  echo ''; ?>
