<?php /* Smarty version 2.6.14, created on 2010-01-04 14:00:37
         compiled from CRM/Contact/Page/View/InlineCustomData.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'ts', 'CRM/Contact/Page/View/InlineCustomData.tpl', 12, false),array('modifier', 'cat', 'CRM/Contact/Page/View/InlineCustomData.tpl', 21, false),)), $this); ?>
    <?php if ($this->_tpl_vars['action'] == 1 || $this->_tpl_vars['action'] == 2): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/InlineCustomData.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>

    <?php echo '';  if ($this->_tpl_vars['action'] == 16 || $this->_tpl_vars['action'] == 4):  echo ' ';  echo '';  if ($this->_tpl_vars['groupTree']):  echo '<div class="form-item">';  $_from = $this->_tpl_vars['groupTree']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['group_id'] => $this->_tpl_vars['cd']):
 echo '<div id="';  echo $this->_tpl_vars['cd']['name'];  echo '_show" class="section-hidden section-hidden-border"><a href="#" onclick="hide(\'';  echo $this->_tpl_vars['cd']['name'];  echo '_show\'); show(\'';  echo $this->_tpl_vars['cd']['name'];  echo '\'); return false;"><img src="';  echo $this->_tpl_vars['config']->resourceBase;  echo 'i/TreePlus.gif" class="action-icon" alt="';  $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  echo 'open section';  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  echo '"/></a><label>';  $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  echo '';  echo $this->_tpl_vars['cd']['title'];  echo '';  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  echo '</label><br /></div><div id="';  echo $this->_tpl_vars['cd']['name'];  echo '"  class="section-shown"><fieldset><legend><a href="#" onclick="hide(\'';  echo $this->_tpl_vars['cd']['name'];  echo '\'); show(\'';  echo $this->_tpl_vars['cd']['name'];  echo '_show\'); return false;"><img src="';  echo $this->_tpl_vars['config']->resourceBase;  echo 'i/TreeMinus.gif" class="action-icon" alt="';  $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  echo 'close section';  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  echo '"/></a>';  $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start();  echo '';  echo $this->_tpl_vars['cd']['title'];  echo '';  $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack);  echo '</legend><dl>';  $_from = $this->_tpl_vars['cd']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field_id'] => $this->_tpl_vars['cd_value']):
 echo '';  if ($this->_tpl_vars['cd_value']['options_per_line'] != 0):  echo '';  $this->assign('element_name', ((is_array($_tmp='custom_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['field_id']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['field_id'])));  echo '<dt>';  echo $this->_tpl_vars['cd_value']['label'];  echo ' </dt><dd class="html-adjust">';  if ($this->_tpl_vars['viewForm'][$this->_tpl_vars['element_name']]):  echo '';  $this->assign('count', '1');  echo '';  $this->assign('no', '1');  echo '';  echo '<table class="form-layout-compressed"><tr>';  unset($this->_sections['rowLoop']);
$this->_sections['rowLoop']['name'] = 'rowLoop';
$this->_sections['rowLoop']['start'] = (int)1;
$this->_sections['rowLoop']['loop'] = is_array($_loop=$this->_tpl_vars['viewForm'][$this->_tpl_vars['element_name']]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['rowLoop']['show'] = true;
$this->_sections['rowLoop']['max'] = $this->_sections['rowLoop']['loop'];
$this->_sections['rowLoop']['step'] = 1;
if ($this->_sections['rowLoop']['start'] < 0)
    $this->_sections['rowLoop']['start'] = max($this->_sections['rowLoop']['step'] > 0 ? 0 : -1, $this->_sections['rowLoop']['loop'] + $this->_sections['rowLoop']['start']);
else
    $this->_sections['rowLoop']['start'] = min($this->_sections['rowLoop']['start'], $this->_sections['rowLoop']['step'] > 0 ? $this->_sections['rowLoop']['loop'] : $this->_sections['rowLoop']['loop']-1);
if ($this->_sections['rowLoop']['show']) {
    $this->_sections['rowLoop']['total'] = min(ceil(($this->_sections['rowLoop']['step'] > 0 ? $this->_sections['rowLoop']['loop'] - $this->_sections['rowLoop']['start'] : $this->_sections['rowLoop']['start']+1)/abs($this->_sections['rowLoop']['step'])), $this->_sections['rowLoop']['max']);
    if ($this->_sections['rowLoop']['total'] == 0)
        $this->_sections['rowLoop']['show'] = false;
} else
    $this->_sections['rowLoop']['total'] = 0;
if ($this->_sections['rowLoop']['show']):

            for ($this->_sections['rowLoop']['index'] = $this->_sections['rowLoop']['start'], $this->_sections['rowLoop']['iteration'] = 1;
                 $this->_sections['rowLoop']['iteration'] <= $this->_sections['rowLoop']['total'];
                 $this->_sections['rowLoop']['index'] += $this->_sections['rowLoop']['step'], $this->_sections['rowLoop']['iteration']++):
$this->_sections['rowLoop']['rownum'] = $this->_sections['rowLoop']['iteration'];
$this->_sections['rowLoop']['index_prev'] = $this->_sections['rowLoop']['index'] - $this->_sections['rowLoop']['step'];
$this->_sections['rowLoop']['index_next'] = $this->_sections['rowLoop']['index'] + $this->_sections['rowLoop']['step'];
$this->_sections['rowLoop']['first']      = ($this->_sections['rowLoop']['iteration'] == 1);
$this->_sections['rowLoop']['last']       = ($this->_sections['rowLoop']['iteration'] == $this->_sections['rowLoop']['total']);
 echo '';  $this->assign('index', $this->_sections['rowLoop']['index']);  echo '';  if ($this->_tpl_vars['viewForm'][$this->_tpl_vars['element_name']][$this->_tpl_vars['index']]['html'] != ""):  echo '';  if ($this->_tpl_vars['no'] != '1'):  echo ' ';  endif;  echo '<td>';  echo $this->_tpl_vars['viewForm'][$this->_tpl_vars['element_name']][$this->_tpl_vars['index']]['html'];  echo '</td>';  $this->assign('no', ($this->_tpl_vars['no']+1));  echo '';  if ($this->_tpl_vars['count'] == $this->_tpl_vars['cd_value']['options_per_line']):  echo '</tr><tr>';  $this->assign('count', '1');  echo '';  else:  echo '';  $this->assign('count', ($this->_tpl_vars['count']+1));  echo '';  endif;  echo '';  else:  echo '<td></td>';  endif;  echo '';  endfor; endif;  echo '</tr></table>';  echo '';  else:  echo '&nbsp;';  endif;  echo '</dd>';  else:  echo '';  $this->assign('name', ($this->_tpl_vars['cd_value']['name']));  echo '';  $this->assign('element_name', ((is_array($_tmp='custom_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['field_id']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['field_id'])));  echo '<dt>';  echo $this->_tpl_vars['cd_value']['label'];  echo '</dt>';  if ($this->_tpl_vars['groupTree'][$this->_tpl_vars['group_id']]['fields'][$this->_tpl_vars['field_id']]['data_type'] == 'File'):  echo '';  if ($this->_tpl_vars['viewForm'][$this->_tpl_vars['element_name']]['html']):  echo '';  if ($this->_tpl_vars['groupTree'][$this->_tpl_vars['group_id']]['fields'][$this->_tpl_vars['field_id']]['customValue']['displayURL']):  echo '';  echo '<dd class="html-adjust"><a href="javascript:popUp(\'';  echo $this->_tpl_vars['groupTree'][$this->_tpl_vars['group_id']]['fields'][$this->_tpl_vars['field_id']]['customValue']['displayURL'];  echo '\')" ><img src="';  echo $this->_tpl_vars['groupTree'][$this->_tpl_vars['group_id']]['fields'][$this->_tpl_vars['field_id']]['customValue']['displayURL'];  echo '" height = "100" width="100"></a></dd>';  else:  echo '<dd class="html-adjust"><a href="';  echo $this->_tpl_vars['groupTree'][$this->_tpl_vars['group_id']]['fields'][$this->_tpl_vars['field_id']]['customValue']['fileURL'];  echo '">';  echo $this->_tpl_vars['groupTree'][$this->_tpl_vars['group_id']]['fields'][$this->_tpl_vars['field_id']]['customValue']['fileName'];  echo '</a></dd>';  endif;  echo '';  endif;  echo '';  else:  echo '<dd class="html-adjust">';  echo $this->_tpl_vars['viewForm'][$this->_tpl_vars['element_name']]['html'];  echo '&nbsp;</dd>';  endif;  echo '';  endif;  echo '';  endforeach; endif; unset($_from);  echo '</dl><div class="spacer"></div></fieldset></div>';  endforeach; endif; unset($_from);  echo '</div>';  endif;  echo '';  endif;  echo ''; ?>

<script type="text/javascript">
    var showBlocks1 = new Array(<?php echo $this->_tpl_vars['showBlocks1']; ?>
);
    var hideBlocks1 = new Array(<?php echo $this->_tpl_vars['hideBlocks1']; ?>
);

    on_load_init_blocks( showBlocks1, hideBlocks1 );
<?php echo '



function popUp(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, \'" + id + "\', \'toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=640,height=420,left = 202,top = 184\');");
}
'; ?>

</script>