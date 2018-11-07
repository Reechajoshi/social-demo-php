<?php /* Smarty version 2.6.14, created on 2012-03-03 02:17:54
         compiled from user_blog_newentry.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'user_blog_newentry.tpl', 86, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table class='tabs' cellpadding='0' cellspacing='0'>
<tr>
<td class='tab0'>&nbsp;</td>
<td class='tab1' NOWRAP><a href='user_blog.php'><?php echo $this->_tpl_vars['user_blog_newentry1']; ?>
</a></td>
<td class='tab'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_blog_settings.php'><?php echo $this->_tpl_vars['user_blog_newentry2']; ?>
</a></td>
<td class='tab3'>&nbsp;</td>
</tr>
</table>

<table cellpadding='0' cellspacing='0' width='100%'><tr><td class='page'>

<img src='./images/icons/blog48.gif' border='0' class='icon_big'>
<div class='page_header'><?php echo $this->_tpl_vars['user_blog_newentry3']; ?>
</div>
<div><?php echo $this->_tpl_vars['user_blog_newentry4']; ?>
</div>

<br><br>


<?php echo '
<script type="text/javascript">
<!--
  var blog_form_object;
  var default_blog_target;
  var default_blog_action;

  function do_blog_preview()
  {
    if( typeof(blog_form_object)=="undefined" )
    {
      blog_form_object      = document.getElementById(\'blogform\');
      default_blog_target   = blog_form_object.target;
      default_blog_action   = blog_form_object.action;
    }
    
    blog_form_object.target = \'blogframe\';
    blog_form_object.action = \'user_blog_preview.php\';
    blog_form_object.submit();
    
    showdiv(\'entry_preview\');
    hidediv(\'entry_main\');
  }
  
  function do_blog_main()
  {
    blog_form_object.target = default_blog_target;
    blog_form_object.action = default_blog_action;
    
    showdiv(\'entry_main\');
    hidediv(\'entry_preview\');

    var d = document.getElementById(\'previewpane\');
    if(document.getElementById(\'mydiv\')) {
      var olddiv = document.getElementById(\'mydiv\');
      d.removeChild(olddiv);
    }
  }

  function show_preview()
  {
    table = parent.frames[\'blogframe\'].document.getElementById(\'blogpreview\');
    var ni = document.getElementById(\'previewpane\');
    var newdiv = document.createElement(\'div\');
    newdiv.setAttribute(\'id\',\'mydiv\');
    newdiv.innerHTML = \'<table cellpadding="0" cellspacing="0">\'+table.innerHTML+\'</table>\';
    ni.appendChild(newdiv);
  }
//-->
</script>
'; ?>


<div id="entry_main">

  <form action='user_blog_newentry.php' method='post' name='info' id="blogform">
  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td class='form1'><?php echo $this->_tpl_vars['user_blog_newentry5']; ?>
</td>
  <td class='form2'><input type='text' name='blogentry_title' class='text' size='50' maxlength='100'></td>
  </tr>

    <?php if (count($this->_tpl_vars['blogentrycats']) > 0): ?>
  <tr>
  <td class='form1'><?php echo $this->_tpl_vars['user_blog_newentry6']; ?>
</td>
  <td class='form2'>
  <select name='blogentry_blogentrycat_id'>
  <option value='0'></option>
  <?php unset($this->_sections['blogentrycat_loop']);
$this->_sections['blogentrycat_loop']['name'] = 'blogentrycat_loop';
$this->_sections['blogentrycat_loop']['loop'] = is_array($_loop=$this->_tpl_vars['blogentrycats']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['blogentrycat_loop']['show'] = true;
$this->_sections['blogentrycat_loop']['max'] = $this->_sections['blogentrycat_loop']['loop'];
$this->_sections['blogentrycat_loop']['step'] = 1;
$this->_sections['blogentrycat_loop']['start'] = $this->_sections['blogentrycat_loop']['step'] > 0 ? 0 : $this->_sections['blogentrycat_loop']['loop']-1;
if ($this->_sections['blogentrycat_loop']['show']) {
    $this->_sections['blogentrycat_loop']['total'] = $this->_sections['blogentrycat_loop']['loop'];
    if ($this->_sections['blogentrycat_loop']['total'] == 0)
        $this->_sections['blogentrycat_loop']['show'] = false;
} else
    $this->_sections['blogentrycat_loop']['total'] = 0;
if ($this->_sections['blogentrycat_loop']['show']):

            for ($this->_sections['blogentrycat_loop']['index'] = $this->_sections['blogentrycat_loop']['start'], $this->_sections['blogentrycat_loop']['iteration'] = 1;
                 $this->_sections['blogentrycat_loop']['iteration'] <= $this->_sections['blogentrycat_loop']['total'];
                 $this->_sections['blogentrycat_loop']['index'] += $this->_sections['blogentrycat_loop']['step'], $this->_sections['blogentrycat_loop']['iteration']++):
$this->_sections['blogentrycat_loop']['rownum'] = $this->_sections['blogentrycat_loop']['iteration'];
$this->_sections['blogentrycat_loop']['index_prev'] = $this->_sections['blogentrycat_loop']['index'] - $this->_sections['blogentrycat_loop']['step'];
$this->_sections['blogentrycat_loop']['index_next'] = $this->_sections['blogentrycat_loop']['index'] + $this->_sections['blogentrycat_loop']['step'];
$this->_sections['blogentrycat_loop']['first']      = ($this->_sections['blogentrycat_loop']['iteration'] == 1);
$this->_sections['blogentrycat_loop']['last']       = ($this->_sections['blogentrycat_loop']['iteration'] == $this->_sections['blogentrycat_loop']['total']);
?>
    <option value='<?php echo $this->_tpl_vars['blogentrycats'][$this->_sections['blogentrycat_loop']['index']]['blogentrycat_id']; ?>
'><?php echo $this->_tpl_vars['blogentrycats'][$this->_sections['blogentrycat_loop']['index']]['blogentrycat_title']; ?>
</option>
  <?php endfor; endif; ?>
  </select>
  </td>
  </tr>
  <?php endif; ?>

  </table>

  <br>

  <script type="text/javascript">
  <!--
  var sBasePath = "./include/fckeditor/" ;
  var sToolbar ;
  var oFCKeditor = new FCKeditor( 'blogentry_body' ) ;
  oFCKeditor.BasePath	= sBasePath ;
  oFCKeditor.Height = "300" ;
  if ( sToolbar != null )
    oFCKeditor.ToolbarSet = sToolbar ;
  oFCKeditor.Value = '' ;
  oFCKeditor.Create() ;
  //-->
  </script>

  <?php echo '
  <script type="text/javascript">
  <!--
  function fill() {
    window.document.preview.blogentry_title.value = window.document.info.blogentry_title.value;
    var oEditor = FCKeditorAPI.GetInstance(\'blogentry_body\');
    window.document.preview.blogentry_body.value = oEditor.GetXHTML( false );
    window.document.preview.blogentry_blogentrycat_id.value = window.document.info.blogentry_blogentrycat_id.options[window.document.info.blogentry_blogentrycat_id.selectedIndex].value;
  }
  //-->
  </script>
  '; ?>


    <?php if (count($this->_tpl_vars['privacy_options']) > 1 || count($this->_tpl_vars['comment_options']) > 1): ?>
    <table cellpadding='0' cellspacing='0' width='100%'>
    <tr>
    <td class='blog_options'>
      <div id='settings_show'>
        <a href="javascript:showdiv('entry_settings');showdiv('settings_hide');hidediv('settings_show');"><?php echo $this->_tpl_vars['user_blog_newentry7']; ?>
</a>
      </div>
      <div id='settings_hide' style='display: none;'>
        <a href="javascript:hidediv('entry_settings');hidediv('settings_hide');showdiv('settings_show');"><?php echo $this->_tpl_vars['user_blog_newentry8']; ?>
</a>
      </div>
    </td>
    </tr>
    </table>
  <?php endif; ?>

  <div id='entry_settings' class='blog_settings' style='display: none;'>


        <?php if ($this->_tpl_vars['user']->level_info['level_blog_search'] == 1): ?>
      <b><?php echo $this->_tpl_vars['user_blog_newentry9']; ?>
</b>
      <table cellpadding='0' cellspacing='0'>
        <tr><td><input type='radio' name='blogentry_search' id='blogentry_search_1' value='1' CHECKED></td><td><label for='blogentry_search_1'><?php echo $this->_tpl_vars['user_blog_newentry10']; ?>
</label></td></tr>
        <tr><td><input type='radio' name='blogentry_search' id='blogentry_search_0' value='0'></td><td><label for='blogentry_search_0'><?php echo $this->_tpl_vars['user_blog_newentry11']; ?>
</label></td></tr>
      </table>
    <?php endif; ?>

        <?php if ($this->_tpl_vars['user']->level_info['level_blog_search'] == 1 && ( count($this->_tpl_vars['privacy_options']) > 1 || count($this->_tpl_vars['comment_options']) > 1 )): ?><br><?php endif; ?>

        <?php if (count($this->_tpl_vars['privacy_options']) > 1): ?>
      <b><?php echo $this->_tpl_vars['user_blog_newentry12']; ?>
</b>
      <table cellpadding='0' cellspacing='0'>
        <?php unset($this->_sections['privacy_loop']);
$this->_sections['privacy_loop']['name'] = 'privacy_loop';
$this->_sections['privacy_loop']['loop'] = is_array($_loop=$this->_tpl_vars['privacy_options']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['privacy_loop']['show'] = true;
$this->_sections['privacy_loop']['max'] = $this->_sections['privacy_loop']['loop'];
$this->_sections['privacy_loop']['step'] = 1;
$this->_sections['privacy_loop']['start'] = $this->_sections['privacy_loop']['step'] > 0 ? 0 : $this->_sections['privacy_loop']['loop']-1;
if ($this->_sections['privacy_loop']['show']) {
    $this->_sections['privacy_loop']['total'] = $this->_sections['privacy_loop']['loop'];
    if ($this->_sections['privacy_loop']['total'] == 0)
        $this->_sections['privacy_loop']['show'] = false;
} else
    $this->_sections['privacy_loop']['total'] = 0;
if ($this->_sections['privacy_loop']['show']):

            for ($this->_sections['privacy_loop']['index'] = $this->_sections['privacy_loop']['start'], $this->_sections['privacy_loop']['iteration'] = 1;
                 $this->_sections['privacy_loop']['iteration'] <= $this->_sections['privacy_loop']['total'];
                 $this->_sections['privacy_loop']['index'] += $this->_sections['privacy_loop']['step'], $this->_sections['privacy_loop']['iteration']++):
$this->_sections['privacy_loop']['rownum'] = $this->_sections['privacy_loop']['iteration'];
$this->_sections['privacy_loop']['index_prev'] = $this->_sections['privacy_loop']['index'] - $this->_sections['privacy_loop']['step'];
$this->_sections['privacy_loop']['index_next'] = $this->_sections['privacy_loop']['index'] + $this->_sections['privacy_loop']['step'];
$this->_sections['privacy_loop']['first']      = ($this->_sections['privacy_loop']['iteration'] == 1);
$this->_sections['privacy_loop']['last']       = ($this->_sections['privacy_loop']['iteration'] == $this->_sections['privacy_loop']['total']);
?>
          <tr><td><input type='radio' name='blogentry_privacy' id='<?php echo $this->_tpl_vars['privacy_options'][$this->_sections['privacy_loop']['index']]['privacy_id']; ?>
' value='<?php echo $this->_tpl_vars['privacy_options'][$this->_sections['privacy_loop']['index']]['privacy_value']; ?>
'<?php if ($this->_sections['privacy_loop']['first']): ?> CHECKED<?php endif; ?>></td><td><label for='<?php echo $this->_tpl_vars['privacy_options'][$this->_sections['privacy_loop']['index']]['privacy_id']; ?>
'><?php echo $this->_tpl_vars['privacy_options'][$this->_sections['privacy_loop']['index']]['privacy_option']; ?>
</label></td></tr>
        <?php endfor; endif; ?>
      </table>
    <?php endif; ?>

        <?php if (count($this->_tpl_vars['privacy_options']) > 1 && count($this->_tpl_vars['comment_options']) > 1): ?><br><?php endif; ?>

        <?php if (count($this->_tpl_vars['comment_options']) > 1): ?>
      <b><?php echo $this->_tpl_vars['user_blog_newentry13']; ?>
</b>
      <table cellpadding='0' cellspacing='0'>
        <?php unset($this->_sections['comment_loop']);
$this->_sections['comment_loop']['name'] = 'comment_loop';
$this->_sections['comment_loop']['loop'] = is_array($_loop=$this->_tpl_vars['comment_options']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['comment_loop']['show'] = true;
$this->_sections['comment_loop']['max'] = $this->_sections['comment_loop']['loop'];
$this->_sections['comment_loop']['step'] = 1;
$this->_sections['comment_loop']['start'] = $this->_sections['comment_loop']['step'] > 0 ? 0 : $this->_sections['comment_loop']['loop']-1;
if ($this->_sections['comment_loop']['show']) {
    $this->_sections['comment_loop']['total'] = $this->_sections['comment_loop']['loop'];
    if ($this->_sections['comment_loop']['total'] == 0)
        $this->_sections['comment_loop']['show'] = false;
} else
    $this->_sections['comment_loop']['total'] = 0;
if ($this->_sections['comment_loop']['show']):

            for ($this->_sections['comment_loop']['index'] = $this->_sections['comment_loop']['start'], $this->_sections['comment_loop']['iteration'] = 1;
                 $this->_sections['comment_loop']['iteration'] <= $this->_sections['comment_loop']['total'];
                 $this->_sections['comment_loop']['index'] += $this->_sections['comment_loop']['step'], $this->_sections['comment_loop']['iteration']++):
$this->_sections['comment_loop']['rownum'] = $this->_sections['comment_loop']['iteration'];
$this->_sections['comment_loop']['index_prev'] = $this->_sections['comment_loop']['index'] - $this->_sections['comment_loop']['step'];
$this->_sections['comment_loop']['index_next'] = $this->_sections['comment_loop']['index'] + $this->_sections['comment_loop']['step'];
$this->_sections['comment_loop']['first']      = ($this->_sections['comment_loop']['iteration'] == 1);
$this->_sections['comment_loop']['last']       = ($this->_sections['comment_loop']['iteration'] == $this->_sections['comment_loop']['total']);
?>
          <tr><td><input type='radio' name='blogentry_comments' id='<?php echo $this->_tpl_vars['comment_options'][$this->_sections['comment_loop']['index']]['comment_id']; ?>
' value='<?php echo $this->_tpl_vars['comment_options'][$this->_sections['comment_loop']['index']]['comment_value']; ?>
'<?php if ($this->_sections['comment_loop']['first']): ?> CHECKED<?php endif; ?>></td><td><label for='<?php echo $this->_tpl_vars['comment_options'][$this->_sections['comment_loop']['index']]['comment_id']; ?>
'><?php echo $this->_tpl_vars['comment_options'][$this->_sections['comment_loop']['index']]['comment_option']; ?>
</label></td></tr>
        <?php endfor; endif; ?>
      </table>
    <?php endif; ?>

  </div>

  <br>

  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td>
    <input type='submit' class='button' value='<?php echo $this->_tpl_vars['user_blog_newentry14']; ?>
'>&nbsp;
    <input type='hidden' name='task' value='dosave'>
    </form>
  </td>
  <td>
    <input type='button' class='button' value='<?php echo $this->_tpl_vars['user_blog_newentry15']; ?>
' onClick="do_blog_preview();">&nbsp;
  </td>
  <td>
    <form action='user_blog.php' method='post'>
    <input type='submit' class='button' value='<?php echo $this->_tpl_vars['user_blog_newentry16']; ?>
'>
    </form>
  </td>
  </tr>
  </table>



</div>
<div id="entry_preview" style='display: none;'>
  <h2>Preview: (<a href="javascript:void()" onClick="do_blog_main();">Return to Editing</a>)</h2>
  <iframe id="blogframe" name="blogframe" src="about:blank" scrolling="no" style="display:none;width:100%;border:1px solid #000000;height:800px;"></iframe>
  <div id='previewpane' style='padding:0px;border:1px dashed #AAAAAA;'></div>
</div>


</td></tr></table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>