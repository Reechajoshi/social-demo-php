<?php /* Smarty version 2.6.14, created on 2012-03-03 03:46:05
         compiled from profile_blog.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'profile_blog.tpl', 15, false),)), $this); ?>
<?php if ($this->_tpl_vars['owner']->level_info['level_blog_allow'] != 0 && $this->_tpl_vars['total_entries'] > 0): ?>

  <table cellpadding='0' cellspacing='0' width='100%' style='margin-bottom: 10px;'>
  <tr><td class='header'>
    <?php echo $this->_tpl_vars['header_blog2']; ?>
 (<?php echo $this->_tpl_vars['total_entries']; ?>
)
        <?php if ($this->_tpl_vars['total_entries'] > 5): ?>&nbsp;[ <a href='<?php echo $this->_tpl_vars['url']->url_create('blog',$this->_tpl_vars['owner']->user_info['user_username']); ?>
'><?php echo $this->_tpl_vars['header_blog3']; ?>
</a> ]<?php endif; ?>
  </td></tr>
  <tr>
  <td class='profile'>
        <?php unset($this->_sections['entry_loop']);
$this->_sections['entry_loop']['name'] = 'entry_loop';
$this->_sections['entry_loop']['loop'] = is_array($_loop=$this->_tpl_vars['entries']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['entry_loop']['show'] = true;
$this->_sections['entry_loop']['max'] = $this->_sections['entry_loop']['loop'];
$this->_sections['entry_loop']['step'] = 1;
$this->_sections['entry_loop']['start'] = $this->_sections['entry_loop']['step'] > 0 ? 0 : $this->_sections['entry_loop']['loop']-1;
if ($this->_sections['entry_loop']['show']) {
    $this->_sections['entry_loop']['total'] = $this->_sections['entry_loop']['loop'];
    if ($this->_sections['entry_loop']['total'] == 0)
        $this->_sections['entry_loop']['show'] = false;
} else
    $this->_sections['entry_loop']['total'] = 0;
if ($this->_sections['entry_loop']['show']):

            for ($this->_sections['entry_loop']['index'] = $this->_sections['entry_loop']['start'], $this->_sections['entry_loop']['iteration'] = 1;
                 $this->_sections['entry_loop']['iteration'] <= $this->_sections['entry_loop']['total'];
                 $this->_sections['entry_loop']['index'] += $this->_sections['entry_loop']['step'], $this->_sections['entry_loop']['iteration']++):
$this->_sections['entry_loop']['rownum'] = $this->_sections['entry_loop']['iteration'];
$this->_sections['entry_loop']['index_prev'] = $this->_sections['entry_loop']['index'] - $this->_sections['entry_loop']['step'];
$this->_sections['entry_loop']['index_next'] = $this->_sections['entry_loop']['index'] + $this->_sections['entry_loop']['step'];
$this->_sections['entry_loop']['first']      = ($this->_sections['entry_loop']['iteration'] == 1);
$this->_sections['entry_loop']['last']       = ($this->_sections['entry_loop']['iteration'] == $this->_sections['entry_loop']['total']);
?>
      <div class='profile_blogentry'>
        <a href='<?php echo $this->_tpl_vars['url']->url_create('blog_entry',$this->_tpl_vars['owner']->user_info['user_username'],$this->_tpl_vars['entries'][$this->_sections['entry_loop']['index']]['blogentry_id']); ?>
'><img src='./images/icons/blog16.gif' border='0' class='icon'><?php if ($this->_tpl_vars['entries'][$this->_sections['entry_loop']['index']]['blogentry_title'] == ""):  echo $this->_tpl_vars['header_blog4'];  else:  echo ((is_array($_tmp=$this->_tpl_vars['entries'][$this->_sections['entry_loop']['index']]['blogentry_title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 35, "...", true) : smarty_modifier_truncate($_tmp, 35, "...", true));  endif; ?></a>
      </div>
      <div class='profile_blogentry_date'>
        <?php echo $this->_tpl_vars['header_blog5']; ?>
 <?php echo $this->_tpl_vars['datetime']->time_since($this->_tpl_vars['entries'][$this->_sections['entry_loop']['index']]['blogentry_date']); ?>

      </div>
    <?php endfor; endif; ?>
  </td>
  </tr>
  </table>

<?php endif; ?>