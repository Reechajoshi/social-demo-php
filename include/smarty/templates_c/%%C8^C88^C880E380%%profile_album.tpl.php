<?php /* Smarty version 2.6.14, created on 2012-03-03 02:14:39
         compiled from profile_album.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'profile_album.tpl', 46, false),)), $this); ?>
<?php if ($this->_tpl_vars['owner']->level_info['level_album_allow'] != 0 && $this->_tpl_vars['total_albums'] > 0): ?>

  <table cellpadding='0' cellspacing='0' width='100%' style='margin-bottom: 10px;'>
  <tr><td class='header'>
    <?php echo $this->_tpl_vars['header_album2']; ?>
 (<?php echo $this->_tpl_vars['total_albums']; ?>
)
        <?php if ($this->_tpl_vars['total_albums'] > 3): ?>&nbsp;[ <a href='<?php echo $this->_tpl_vars['url']->url_create('albums',$this->_tpl_vars['owner']->user_info['user_username']); ?>
'><?php echo $this->_tpl_vars['header_album3']; ?>
</a> ]<?php endif; ?>
  </td></tr>
  <tr>
  <td class='profile'>
        <?php unset($this->_sections['album_loop']);
$this->_sections['album_loop']['name'] = 'album_loop';
$this->_sections['album_loop']['loop'] = is_array($_loop=$this->_tpl_vars['albums']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['album_loop']['show'] = true;
$this->_sections['album_loop']['max'] = $this->_sections['album_loop']['loop'];
$this->_sections['album_loop']['step'] = 1;
$this->_sections['album_loop']['start'] = $this->_sections['album_loop']['step'] > 0 ? 0 : $this->_sections['album_loop']['loop']-1;
if ($this->_sections['album_loop']['show']) {
    $this->_sections['album_loop']['total'] = $this->_sections['album_loop']['loop'];
    if ($this->_sections['album_loop']['total'] == 0)
        $this->_sections['album_loop']['show'] = false;
} else
    $this->_sections['album_loop']['total'] = 0;
if ($this->_sections['album_loop']['show']):

            for ($this->_sections['album_loop']['index'] = $this->_sections['album_loop']['start'], $this->_sections['album_loop']['iteration'] = 1;
                 $this->_sections['album_loop']['iteration'] <= $this->_sections['album_loop']['total'];
                 $this->_sections['album_loop']['index'] += $this->_sections['album_loop']['step'], $this->_sections['album_loop']['iteration']++):
$this->_sections['album_loop']['rownum'] = $this->_sections['album_loop']['iteration'];
$this->_sections['album_loop']['index_prev'] = $this->_sections['album_loop']['index'] - $this->_sections['album_loop']['step'];
$this->_sections['album_loop']['index_next'] = $this->_sections['album_loop']['index'] + $this->_sections['album_loop']['step'];
$this->_sections['album_loop']['first']      = ($this->_sections['album_loop']['iteration'] == 1);
$this->_sections['album_loop']['last']       = ($this->_sections['album_loop']['iteration'] == $this->_sections['album_loop']['total']);
?>

            <?php if ($this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_cover_id'] == 0): ?>
        <?php $this->assign('album_cover_src', './images/icons/folder_big.gif'); ?>
      <?php else: ?>
                <?php if ($this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_cover_ext'] == 'jpeg' || $this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_cover_ext'] == 'jpg' || $this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_cover_ext'] == 'gif' || $this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_cover_ext'] == 'png' || $this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_cover_ext'] == 'bmp'): ?>
          <?php $this->assign('album_cover_dir', $this->_tpl_vars['url']->url_userdir($this->_tpl_vars['owner']->user_info['user_id'])); ?>
          <?php $this->assign('album_cover_src', ($this->_tpl_vars['album_cover_dir']).($this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_cover_id'])."_thumb.jpg"); ?>
                <?php elseif ($this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_cover_ext'] == 'mp3' || $this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_cover_ext'] == 'mp4' || $this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_cover_ext'] == 'wav'): ?>
          <?php $this->assign('album_cover_src', './images/icons/audio_big.gif'); ?>
                <?php elseif ($this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_cover_ext'] == 'mpeg' || $this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_cover_ext'] == 'mpg' || $this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_cover_ext'] == 'mpa' || $this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_cover_ext'] == 'avi' || $this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_cover_ext'] == 'swf' || $this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_cover_ext'] == 'mov' || $this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_cover_ext'] == 'ram' || $this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_cover_ext'] == 'rm'): ?>
          <?php $this->assign('album_cover_src', './images/icons/video_big.gif'); ?>
                <?php else: ?>
          <?php $this->assign('album_cover_src', './images/icons/file_big.gif'); ?>
        <?php endif; ?>
      <?php endif; ?>

            <?php if ($this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_title'] != ""): ?>
        <?php $this->assign('album_title', $this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_title']); ?>
      <?php else: ?>
        <?php $this->assign('album_title', $this->_tpl_vars['header_album4']); ?>
      <?php endif; ?>

      <table cellpadding='0' cellspacing='0'>
      <tr>
      <td width='1' style='padding: 5px 5px 5px 0px;' valign='top'><a href='<?php echo $this->_tpl_vars['url']->url_create('album',$this->_tpl_vars['owner']->user_info['user_username'],$this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_id']); ?>
'><img src='<?php echo $this->_tpl_vars['album_cover_src']; ?>
' border='0' class='photo' width='<?php echo $this->_tpl_vars['misc']->photo_size($this->_tpl_vars['album_cover_src'],'75','75','w'); ?>
'></a></td>
      <td valign='top' style='padding: 2px 0px 0px 0px;'>
        <b><a href='<?php echo $this->_tpl_vars['url']->url_create('album',$this->_tpl_vars['owner']->user_info['user_username'],$this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_id']); ?>
'><?php echo ((is_array($_tmp=$this->_tpl_vars['album_title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 17, "...", true) : smarty_modifier_truncate($_tmp, 17, "...", true)); ?>
</a></b>
        <?php if ($this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_dateupdated'] > 0): ?><br><?php echo $this->_tpl_vars['header_album5']; ?>
 <?php echo $this->_tpl_vars['datetime']->time_since($this->_tpl_vars['albums'][$this->_sections['album_loop']['index']]['album_dateupdated']);  endif; ?>
      </td>
      </tr>
      </table>

    <?php endfor; endif; ?>
  </td>
  </tr>
  </table>

<?php endif; ?>