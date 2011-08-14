<?php /* Smarty version 2.6.14, created on 2010-01-28 11:42:16
         compiled from CRM/Contact/Form/Task/Email.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Contact/Form/Task/Email.tpl', 4, false),array('modifier', 'escape', 'CRM/Contact/Form/Task/Email.tpl', 15, false),)), $this); ?>
<div class="form-item">
<?php if ($this->_tpl_vars['config']->smtpAuth && ( $this->_tpl_vars['config']->smtpUsername == '' || $this->_tpl_vars['config']->smtpPassword == '' )): ?>
<div class="status">
<p><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Your setup enforces SMTP authentication, but does not provide SMTP username and/or password. Please fix your civicrm.settings.php file.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
</div>
<?php else: ?>
<fieldset>
<legend><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Send an Email<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
<?php if ($this->_tpl_vars['suppressedEmails'] > 0): ?>
    <div class="status">
        <p><?php $this->_tag_stack[] = array('ts', array('count' => $this->_tpl_vars['suppressedEmails'],'plural' => 'Email will NOT be sent to %count contacts - communication preferences specify DO NOT EMAIL.')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Email will NOT be sent to %count contact - communication preferences specify DO NOT EMAIL.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
    </div>
<?php endif; ?>
<dl>
<dt><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>From<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dt><dd><?php echo ((is_array($_tmp=$this->_tpl_vars['from'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</dd>
<?php if ($this->_tpl_vars['single'] == false): ?>
<dt><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Recipient(s)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dt><dd><?php echo ((is_array($_tmp=$this->_tpl_vars['to'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</dd>
<?php else: ?>
<dt><?php echo $this->_tpl_vars['form']['to']['label']; ?>
</dt><dd><?php echo $this->_tpl_vars['form']['to']['html'];  if ($this->_tpl_vars['noEmails'] == true): ?>&nbsp;&nbsp;<?php echo $this->_tpl_vars['form']['emailAddress']['html'];  endif; ?></dd>
<?php endif; ?>
  <dt><?php echo $this->_tpl_vars['form']['template']['label']; ?>
</dt><dd><?php echo $this->_tpl_vars['form']['template']['html']; ?>
</dd>
  <dt><?php echo $this->_tpl_vars['form']['subject']['label']; ?>
</dt><dd><?php echo $this->_tpl_vars['form']['subject']['html']; ?>
</dd>
  <dt><?php echo $this->_tpl_vars['form']['message']['label']; ?>
</dt><dd><?php echo $this->_tpl_vars['form']['message']['html']; ?>
</dd>
<?php if ($this->_tpl_vars['single'] == false): ?>
    <dt></dt><dd><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Task.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></dd>
<?php endif;  if ($this->_tpl_vars['suppressedEmails'] > 0): ?>
    <dt></dt><dd><?php $this->_tag_stack[] = array('ts', array('count' => $this->_tpl_vars['suppressedEmails'],'plural' => 'Email will NOT be sent to %count contacts.')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Email will NOT be sent to %count contact.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></dd>
<?php endif; ?>

<div id="editMessageDetails" class="form-item">

<dl>
    <dt>&nbsp;</dt><dd><?php echo $this->_tpl_vars['form']['updateTemplate']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['form']['updateTemplate']['label']; ?>
</dd>
    <dt>&nbsp;</dt><dd><?php echo $this->_tpl_vars['form']['saveTemplate']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['form']['saveTemplate']['label']; ?>
</dd>
</dl>
</div>
<div id="saveDetails" class="form-item">
<dl>
    <dt><?php echo $this->_tpl_vars['form']['saveTemplateName']['label']; ?>
</dt><dd><?php echo $this->_tpl_vars['form']['saveTemplateName']['html']; ?>
</dd>
</dl>
</div>

<dt></dt><dd><?php echo $this->_tpl_vars['form']['buttons']['html']; ?>
</dd>
</dl>
</fieldset>
<?php endif; ?>
</div>
 <div>

<?php if ($this->_tpl_vars['dojoIncludes']):  echo '
<script type="text/javascript" >
     function selectValue(val)
     {
       var tokens = val.split( "^A" );
       dojo.byId(\'message\').value=tokens[0];
       dojo.byId(\'subject\').value=tokens[1];
     }
     function verify( select )
     {
	if ( document.getElementsByName("saveTemplate")[0].checked  == false) {
	    document.getElementById("saveDetails").style.display = "none";
	}

	document.getElementById("editMessageDetails").style.display = "block";
	document.getElementById("saveTemplateName").disabled = false;
     }
   
     function showSaveDetails(chkbox) 
     {
	if (chkbox.checked) {
	    document.getElementById("saveDetails").style.display = "block";
	    document.getElementById("saveTemplateName").disabled = false;
	} else {
	    document.getElementById("saveDetails").style.display = "none";
	    document.getElementById("saveTemplateName").disabled = true;
	}
     }

    document.getElementById("saveDetails").style.display = "none";
    document.getElementById("editMessageDetails").style.display = "none";
</script>
'; ?>

<?php endif; ?>
