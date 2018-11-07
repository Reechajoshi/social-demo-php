<?php /* Smarty version 2.6.14, created on 2012-03-03 03:47:44
         compiled from user_messages_new.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table class='tabs' cellpadding='0' cellspacing='0'>
<tr>
<td class='tab0'>&nbsp;</td>
<td class='tab1' NOWRAP><a href='user_messages.php'><?php echo $this->_tpl_vars['user_messages_new5']; ?>
</a></td>
<td class='tab'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_messages_outbox.php'><?php echo $this->_tpl_vars['user_messages_new6']; ?>
</a></td>
<td class='tab'>&nbsp;</td>
<td class='tab2' NOWRAP><a href='user_messages_settings.php'><?php echo $this->_tpl_vars['user_messages_new4']; ?>
</a></td>
<td class='tab3'>&nbsp;</td>
</tr>
</table>

<img src='./images/icons/sendmessage48.gif' border='0' class='icon_big'>
<div class='page_header'><?php echo $this->_tpl_vars['user_messages_new7']; ?>
</div>
<div><?php echo $this->_tpl_vars['user_messages_new8']; ?>
</div>

<br><br>

    <?php if ($this->_tpl_vars['is_error']): ?>
    <table cellpadding='0' cellspacing='0'>
      <tr><td class='error'>
        <img src='./images/error.gif' border='0' class='icon'> <?php echo $this->_tpl_vars['error_message']; ?>

      </td></tr>
    </table>
  <?php endif; ?>


    <iframe name="validation_frame" id="validation_frame" src="about:blank" style="display:none;" onload="in_validation=false;"></iframe>


    <?php echo '
  <script language=\'Javascript\'>
  <!--

    var default_target;
    var default_task;
    var last_to_field = \'\';

    var in_validation = false;
    var pause_validation = false;
    var validation_result = false;

    function send_validation()
    {
      if( default_target!=document.message_form.target && !typeof(default_target)=="undefined" ) return;
      in_validation = true;

      default_target = document.message_form.target;
      default_task = document.message_form.task.value;

      document.message_form.target = \'validation_frame\';
      document.message_form.task.value = \'validate\';

      document.message_form.submit();
    }

    function recv_validation(result, message)
    {
      if( default_target==document.message_form.target ) return;

      document.message_form.target = default_target;
      document.message_form.task.value = default_task;

      if( result==\'0\' )
      {
        showdiv(\'errordiv\');
        document.getElementById(\'errormessagediv\').innerHTML = message;
        validation_result = false;
      }
      else
      {
        hidediv(\'errordiv\');
	validation_result = true;
      }
    }






    // Modified suggest script
    function multisuggest(fieldname, divname, match_string)
    {
      var keyword_string_raw = document.getElementById(fieldname).value;
      var keyword_string = keyword_string_raw.toLowerCase();

      var keyword_array_raw = keyword_string_raw.split(/[\\s;,]+/ig);
      var keyword_array = keyword_string.split(/[\\s;,]+/ig);

      var match_array = match_string.split(/[\\s;,]+/ig);

      var result_count = 0;
      var suggestion_list_html = "";

      var keyword_index;
      var username_index;

      //alert(keyword_array_raw.join("&&"));

      for(keyword_index in keyword_array)
      {
        if( keyword_array[keyword_index]=="" || typeof(keyword_array[keyword_index])=="undefined" ) continue;

        for(match_index in match_array)
        {
          var match_item = match_array[match_index].toLowerCase();

          if( match_item.indexOf(keyword_array[keyword_index])==-1 ) continue;

          var match_regex = new RegExp("("+keyword_array[keyword_index]+")", "i");
          var match_label = match_array[match_index].replace(match_regex, "<b>$1</b>");

          suggestion_list_html +=
            "<div class=\'suggest_item\'>" +
            "<a class=\'suggest\' href=\\"javascript:insertTo(\'" + fieldname + "\', \'" + divname + "\', \'" + keyword_index + "\', \'" + match_array[match_index] + "\')\\">" +
              match_label +
            "</a>" +
            "</div>";

          result_count++;
        }
      }

      if( result_count>0)
      {
        document.getElementById(divname).innerHTML = suggestion_list_html;
        document.getElementById(divname).style.display = "block";
      }
      else
      {
        document.getElementById(divname).innerHTML = "";
        document.getElementById(divname).style.display = "none";
      }
    }

    function insertTo(fieldname, divname, keyword_index, matched_string)
    {
      var keyword_string_raw = document.getElementById(fieldname).value;
      var keyword_array = keyword_string_raw.split(/[\\s;,]+/ig);

      keyword_array[keyword_index] = matched_string;


      document.getElementById(fieldname).value = keyword_array.join(\'; \');
      document.getElementById(divname).style.display = "none";
    }




    function submit_validation()
    {
      if( validation_result==false || in_validation==true )
      {
        showdiv(\'errordiv\');
        document.getElementById(\'errormessagediv\').innerHTML = "';  echo $this->_tpl_vars['user_messages_new1'];  echo '";
        return false;
      }

      else if( document.message_form.message.value==\'\' || typeof(document.message_form.message.value)=="undefined" )
      {
        showdiv(\'errordiv\');
        document.getElementById(\'errormessagediv\').innerHTML = "';  echo $this->_tpl_vars['user_messages_new2'];  echo '";
        return false;
      }

      return true;
    }

  //-->
  </script>
  '; ?>


  <table cellpadding='0' cellspacing='0'>
  <form action='user_messages_new.php' method='POST' name="message_form" onsubmit="return submit_validation();">
    <tr>
    <td class='form1'><?php echo $this->_tpl_vars['user_messages_new9']; ?>
</td>
    <td class='form2' valign='bottom'><b><a href='<?php echo $this->_tpl_vars['url']->url_create('profile',$this->_tpl_vars['user']->user_info['user_username']); ?>
'><?php echo $this->_tpl_vars['user']->user_info['user_username']; ?>
</a></b></td>
    </tr>
    <tr>
    <td class='form1' valign='top'><?php echo $this->_tpl_vars['user_messages_new10']; ?>
</td>
    <td class='form2' valign='top'>

      <table cellpadding='0' cellspacing='0'>
      <tr>
        <td valign='top'>
          <input
            type='text'
            class='text'
            name='to'
            id='to'
            value='<?php echo $this->_tpl_vars['to']; ?>
'
            tabindex='1'
            size='30'
            maxlength='50'
            autocomplete='off'
            onblur='setTimeout("send_validation();", 500);'
            onkeyup="multisuggest('to', 'suggest', '<?php unset($this->_sections['friends_loop']);
$this->_sections['friends_loop']['name'] = 'friends_loop';
$this->_sections['friends_loop']['loop'] = is_array($_loop=$this->_tpl_vars['friends']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['friends_loop']['show'] = true;
$this->_sections['friends_loop']['max'] = $this->_sections['friends_loop']['loop'];
$this->_sections['friends_loop']['step'] = 1;
$this->_sections['friends_loop']['start'] = $this->_sections['friends_loop']['step'] > 0 ? 0 : $this->_sections['friends_loop']['loop']-1;
if ($this->_sections['friends_loop']['show']) {
    $this->_sections['friends_loop']['total'] = $this->_sections['friends_loop']['loop'];
    if ($this->_sections['friends_loop']['total'] == 0)
        $this->_sections['friends_loop']['show'] = false;
} else
    $this->_sections['friends_loop']['total'] = 0;
if ($this->_sections['friends_loop']['show']):

            for ($this->_sections['friends_loop']['index'] = $this->_sections['friends_loop']['start'], $this->_sections['friends_loop']['iteration'] = 1;
                 $this->_sections['friends_loop']['iteration'] <= $this->_sections['friends_loop']['total'];
                 $this->_sections['friends_loop']['index'] += $this->_sections['friends_loop']['step'], $this->_sections['friends_loop']['iteration']++):
$this->_sections['friends_loop']['rownum'] = $this->_sections['friends_loop']['iteration'];
$this->_sections['friends_loop']['index_prev'] = $this->_sections['friends_loop']['index'] - $this->_sections['friends_loop']['step'];
$this->_sections['friends_loop']['index_next'] = $this->_sections['friends_loop']['index'] + $this->_sections['friends_loop']['step'];
$this->_sections['friends_loop']['first']      = ($this->_sections['friends_loop']['iteration'] == 1);
$this->_sections['friends_loop']['last']       = ($this->_sections['friends_loop']['iteration'] == $this->_sections['friends_loop']['total']);
 echo $this->_tpl_vars['friends'][$this->_sections['friends_loop']['index']]->user_info['user_username'];  if ($this->_sections['friends_loop']['last'] != true): ?>,<?php endif;  endfor; endif; ?>');"
          >
      <?php echo '
      <script language=\'Javascript\'>
      <!--
        window.onload = document.getElementById(\'to\').focus();
      //-->
      </script>
      '; ?>


        </td>
        <td>

          <div id="errordiv" style="display:none;" class="result">
            <img src='./images/error.gif' border='0' class='icon' style="margin-left:20px; float:left;">
            <div class='error' id="errormessagediv" style="display:inline;"></div>
          </div>

        </td>
      </tr>
      <tr>
        <td>
          <div id="suggest" class='suggest'></div> 
        </td>
      </tr>
      </table> 
</td>
</tr>
<tr>
<td class='form1'><?php echo $this->_tpl_vars['user_messages_new11']; ?>
</td>
<td class='form2'><input type='text' class='text' name='subject' tabindex='2' value='<?php echo $this->_tpl_vars['subject']; ?>
' size='30' maxlength='250' onfocus="hidediv('suggest');"></td>
</tr>
<tr>
<td class='form1'><?php echo $this->_tpl_vars['user_messages_new12']; ?>
</td>
<td class='form2'><textarea rows='10' cols='70' tabindex='3' name='message'><?php echo $this->_tpl_vars['message']; ?>
</textarea></td>
</tr>
<tr>
<td class='form1'>&nbsp;</td>
<td class='form2'>
  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td><input type='submit' class='button' value='<?php echo $this->_tpl_vars['user_messages_new13']; ?>
'>&nbsp;</td>
  <input type='hidden' name='task' value='send'>
  <input type='hidden' name='convo_id' value='<?php echo $this->_tpl_vars['convo_id']; ?>
'>
  </form>
  <td><input type='button' class='button' value='<?php echo $this->_tpl_vars['user_messages_new14']; ?>
' onClick='history.go(-1)'></td>
  </tr>
  </form>
  </table>
</td>
</tr>
</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>