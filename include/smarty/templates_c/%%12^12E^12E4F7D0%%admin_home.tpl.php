<?php /* Smarty version 2.6.14, created on 2012-03-13 05:26:37
         compiled from admin_home.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'admin_home.tpl', 35, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table width='100%' cellpadding='0' cellspacing='0' class='stats'>
  <tr>
<td class='stat0'>Philomena social networking Administrator Account</td>
</tr>
</table>

<table width='100%' cellpadding='0' cellspacing='0' class='stats' style='margin-top: 10px;'>
<tr>
<td class='stat0'>
  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td><b><?php echo $this->_tpl_vars['admin_home5']; ?>
</b> <?php echo $this->_tpl_vars['total_users_num']; ?>
</td>
  <td style='padding-left: 60px;' align='right'><b><?php echo $this->_tpl_vars['admin_home6']; ?>
</b> <?php echo $this->_tpl_vars['total_comments_num']; ?>
</td>
  <td style='padding-left: 60px;' align='right'><b><?php echo $this->_tpl_vars['admin_home7']; ?>
</b> <?php echo $this->_tpl_vars['total_messages_num']; ?>
</td>
  <td style='padding-left: 60px;' align='right'><b><?php echo $this->_tpl_vars['admin_home11']; ?>
</b> <?php echo $this->_tpl_vars['total_user_levels']; ?>
</td>
  </tr>
  <tr>
  <td><b>Subnetworks:</b> <?php echo $this->_tpl_vars['total_subnetworks']; ?>
</td>
  <td style='padding-left: 60px;' align='right'><b><?php echo $this->_tpl_vars['admin_home12']; ?>
</b> <?php echo $this->_tpl_vars['total_reports']; ?>
</td>
  <td style='padding-left: 60px;' align='right'><b><?php echo $this->_tpl_vars['admin_home13']; ?>
</b> <?php echo $this->_tpl_vars['total_friendships']; ?>
</td>
  <td style='padding-left: 60px;' align='right'><b><?php echo $this->_tpl_vars['admin_home14']; ?>
</b> <?php echo $this->_tpl_vars['total_announcements']; ?>
</td>
  </tr>
  <tr>
  <td><b>Views Today:</b> <?php echo $this->_tpl_vars['views_today']; ?>
</td>
  <td style='padding-left: 60px;' align='right'><b><?php echo $this->_tpl_vars['admin_home15']; ?>
</b> <?php echo $this->_tpl_vars['signups_today']; ?>
</td>
  <td style='padding-left: 60px;' align='right'><b><?php echo $this->_tpl_vars['admin_home16']; ?>
</b> <?php echo $this->_tpl_vars['logins_today']; ?>
</td>
  <td style='padding-left: 60px;' align='right'><b><?php echo $this->_tpl_vars['admin_home17']; ?>
</b> <?php echo $this->_tpl_vars['total_admins']; ?>
</td>
  </tr>
  </table>

    <?php if (count($this->_tpl_vars['online_users']) > 0): ?>
    <br><b><?php echo count($this->_tpl_vars['online_users']); ?>
 <?php echo $this->_tpl_vars['admin_home8']; ?>
</b> 
    <?php unset($this->_sections['online_users_loop']);
$this->_sections['online_users_loop']['name'] = 'online_users_loop';
$this->_sections['online_users_loop']['loop'] = is_array($_loop=$this->_tpl_vars['online_users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['online_users_loop']['show'] = true;
$this->_sections['online_users_loop']['max'] = $this->_sections['online_users_loop']['loop'];
$this->_sections['online_users_loop']['step'] = 1;
$this->_sections['online_users_loop']['start'] = $this->_sections['online_users_loop']['step'] > 0 ? 0 : $this->_sections['online_users_loop']['loop']-1;
if ($this->_sections['online_users_loop']['show']) {
    $this->_sections['online_users_loop']['total'] = $this->_sections['online_users_loop']['loop'];
    if ($this->_sections['online_users_loop']['total'] == 0)
        $this->_sections['online_users_loop']['show'] = false;
} else
    $this->_sections['online_users_loop']['total'] = 0;
if ($this->_sections['online_users_loop']['show']):

            for ($this->_sections['online_users_loop']['index'] = $this->_sections['online_users_loop']['start'], $this->_sections['online_users_loop']['iteration'] = 1;
                 $this->_sections['online_users_loop']['iteration'] <= $this->_sections['online_users_loop']['total'];
                 $this->_sections['online_users_loop']['index'] += $this->_sections['online_users_loop']['step'], $this->_sections['online_users_loop']['iteration']++):
$this->_sections['online_users_loop']['rownum'] = $this->_sections['online_users_loop']['iteration'];
$this->_sections['online_users_loop']['index_prev'] = $this->_sections['online_users_loop']['index'] - $this->_sections['online_users_loop']['step'];
$this->_sections['online_users_loop']['index_next'] = $this->_sections['online_users_loop']['index'] + $this->_sections['online_users_loop']['step'];
$this->_sections['online_users_loop']['first']      = ($this->_sections['online_users_loop']['iteration'] == 1);
$this->_sections['online_users_loop']['last']       = ($this->_sections['online_users_loop']['iteration'] == $this->_sections['online_users_loop']['total']);
 if ($this->_sections['online_users_loop']['rownum'] != 1): ?>, <?php endif; ?><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['online_users'][$this->_sections['online_users_loop']['index']]); ?>
' target='_blank'><?php echo $this->_tpl_vars['online_users'][$this->_sections['online_users_loop']['index']]; ?>
</a><?php endfor; endif; ?>
  <?php endif; ?>

</td>
</tr>
</table>
<br>

 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>