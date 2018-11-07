<?php /* Smarty version 2.6.14, created on 2012-03-03 02:18:55
         compiled from invite.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['setting']['setting_signup_invite'] == 2 & $this->_tpl_vars['user']->user_info['user_invitesleft'] == 0): ?>

  <img src='./images/icons/invite48.gif' border='0' class='icon_big'>
  <div class='page_header'><?php echo $this->_tpl_vars['invite2']; ?>
</div>
  <div><?php echo $this->_tpl_vars['invite3']; ?>
</div>
  <br><br>

    <?php if ($this->_tpl_vars['user']->user_exists == 0): ?>
    <table cellpadding='0' cellspacing='0'>
    <tr>
    <td class='error'><img src='./images/icons/error16.gif' border='0' class='icon'> You must be logged in to invite other people.</td>
    </tr>
    </table>
  <?php else: ?>
    <table cellpadding='0' cellspacing='0'>
    <tr>
    <td class='result'><img src='./images/icons/bulb16.gif' border='0' class='icon'> <?php echo $this->_tpl_vars['invite4']; ?>
 <?php echo $this->_tpl_vars['user']->user_info['user_invitesleft']; ?>
 <?php echo $this->_tpl_vars['invite5']; ?>
</td>
    </tr>
    </table>
  <?php endif; ?>


<?php else: ?>

  <img src='./images/icons/invite48.gif' border='0' class='icon_big'>
  <div class='page_header'><?php echo $this->_tpl_vars['invite2']; ?>
</div>
  <div><?php echo $this->_tpl_vars['invite3']; ?>
</div>
  <?php if ($this->_tpl_vars['setting']['setting_signup_invite'] == 2): ?> <?php echo $this->_tpl_vars['invite6'];  endif; ?>
  <br><br>

    <?php if ($this->_tpl_vars['setting']['setting_signup_invite'] != 0): ?>
    <table cellpadding='0' cellspacing='0'>
    <tr>
    <td class='result'><img src='./images/icons/bulb16.gif' border='0' class='icon'> <?php echo $this->_tpl_vars['invite4']; ?>
 <?php echo $this->_tpl_vars['user']->user_info['user_invitesleft']; ?>
 <?php echo $this->_tpl_vars['invite5']; ?>
</td>
    </tr>
    </table>
    <br>
  <?php endif; ?>

    <?php if ($this->_tpl_vars['result'] != ""): ?>
    <table cellpadding='0' cellspacing='0'>
    <tr>
    <td class='success'><img src='./images/success.gif' border='0' class='icon'><?php echo $this->_tpl_vars['result']; ?>
</td>
    </tr>
    </table>
  <?php endif; ?>

    <?php if ($this->_tpl_vars['error_message'] != ""): ?>
    <table cellpadding='0' cellspacing='0'>
    <tr>
    <td class='error'><img src='./images/error.gif' border='0' class='icon'><?php echo $this->_tpl_vars['error_message']; ?>
</td>
    </tr>
    </table>
  <?php endif; ?>

  <form action='invite.php' method='POST'>
  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td class='form1'><?php echo $this->_tpl_vars['invite7']; ?>
</td>
  <td class='form2'>
  <textarea name='invite_emails' rows='2' cols='60'></textarea><br>
  <?php echo $this->_tpl_vars['invite8']; ?>

  </td>
  </tr>
  <tr>
  <td class='form1'><?php echo $this->_tpl_vars['invite9']; ?>
</td>
  <td class='form2'>
  <textarea name='invite_message' rows='5' cols='60'></textarea><br>
  <?php echo $this->_tpl_vars['invite10']; ?>

  </td>
  </tr>
  <?php if ($this->_tpl_vars['setting']['setting_invite_code'] == 1): ?>
    <tr>
    <td class='form1'>&nbsp;</td>
    <td class='form2'>
      <table cellpadding='0' cellspacing='0'>
      <tr>
      <td><input type='text' name='invite_secure' class='text' size='6' maxlength='10'>&nbsp;</td>
      <td><img src='./images/secure.php' border='0' height='20' width='67' class='signup_code'>&nbsp;&nbsp;</td>
      <td><img src='./images/icons/tip.gif' border='0' class='icon' onMouseover="tip('<?php echo $this->_tpl_vars['invite15']; ?>
')"; onMouseout="hidetip()"></td>
      </tr>
      </table>
    </td>
    </tr>
  <?php endif; ?>
  <tr>
  <td class='form1'>&nbsp;</td>
  <td class='form2'><input type='submit' class='button' value='<?php echo $this->_tpl_vars['invite11']; ?>
'></td>
  </tr>
  <input type='hidden' name='task' value='doinvite'>
  </form>
  </table>

<?php endif; ?>
  
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>