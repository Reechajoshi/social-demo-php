<?php /* Smarty version 2.6.14, created on 2012-03-13 05:39:27
         compiled from admin_ads_add.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'admin_ads_add.tpl', 751, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h2><?php echo $this->_tpl_vars['admin_ads_add9']; ?>
</h2>
<?php echo $this->_tpl_vars['admin_ads_add10']; ?>


<br><br>

<?php if ($this->_tpl_vars['is_error'] == 1): ?>
  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td class='error'>
    <img src='../images/error.gif' border='0' class='icon'> <?php echo $this->_tpl_vars['error_message']; ?>

  </td>
  </tr>
  </table>
  <br>
<?php endif; ?>

<table cellpadding='0' cellspacing='0' width='100%'>
<tr><td class='header'><?php echo $this->_tpl_vars['admin_ads_add11']; ?>
</td></tr>
<tr><td class='setting1'>
<?php echo $this->_tpl_vars['admin_ads_add12']; ?>

</td></tr>
<tr><td class='setting2'>

  <table cellpadding='0' cellspacing='0' width='100%'>
  <tr>
  <td id='bannerborder' class='bannerborder<?php if ($this->_tpl_vars['ad_html'] != ""): ?>2<?php endif; ?>' align='center'>

    <div id='banner_options' style='<?php if ($this->_tpl_vars['ad_html'] != ""): ?>display: none;<?php endif; ?>'>
      <h3><b><a href="javascript:hidediv('banner_options');showdiv('banner_upload');"><?php echo $this->_tpl_vars['admin_ads_add13']; ?>
</a> &nbsp;&nbsp;<?php echo $this->_tpl_vars['admin_ads_add14']; ?>
&nbsp;&nbsp; <a href="javascript:hidediv('banner_options');showdiv('banner_html');"><?php echo $this->_tpl_vars['admin_ads_add15']; ?>
</a></b></h3>
    </div>

    <div id='banner_upload' style='display: none;'>
      <b><?php echo $this->_tpl_vars['admin_ads_add16']; ?>
</b>
      <form action='admin_ads_add.php' enctype='multipart/form-data' method='post' id='uploadform' name='uploadform' target='uploadframe'>
      <table cellpadding='0' cellspacing='0' align='center'>
      <tr>
      <td class='form1'><?php echo $this->_tpl_vars['admin_ads_add17']; ?>
</td>
      <td class='form2'><input type='file' name='file1' size='40' id='bannersrc' class='text'></td>
      </tr>
      <tr>
      <td class='form1'><?php echo $this->_tpl_vars['admin_ads_add18']; ?>
</td>
      <td class='form2'><input type='text' name='link' size='52' id='bannerlink' value='http://' class='text'></td>
      </tr>
      <tr>
      <td class='form1'>&nbsp;</td>
      <td class='form2'>
	<div id='banner_upload_submit'>
          [ <a href="javascript:uploadbanner()"><?php echo $this->_tpl_vars['admin_ads_add19']; ?>
</a> ] &nbsp;
          [ <a href="javascript:hidediv('banner_upload');showdiv('banner_options');"><?php echo $this->_tpl_vars['admin_ads_add20']; ?>
</a> ]
	</div>
	<div id='banner_upload_status' style='display: none;'>
	  <img src='../images/admin_uploading.gif' border='0'>
	</div>
      </td>
      </tr>
      </table>
      <input type='hidden' name='task' value='doupload'>
      </form>
      <iframe id='uploadframe' name='uploadframe' style='display: none;' src="admin_ads_add.php?task=blank"></iframe>
    </div>

    <div id='banner_html' style='display: none;'>
      <b><?php echo $this->_tpl_vars['admin_ads_add21']; ?>
</b><br>
      <textarea rows='4' cols='90' class='text' id='bannerhtml'></textarea>
      <div style='margin-top: 5px;'>
        [ <a href="javascript:savebanner();"><?php echo $this->_tpl_vars['admin_ads_add22']; ?>
</a> ] &nbsp;
        [ <a href="javascript:hidediv('banner_html');showdiv('banner_options');"><?php echo $this->_tpl_vars['admin_ads_add20']; ?>
</a> ]
      </div>
    </div>

    <div id='banner_preview_html' style='display: none;'>
      <div style='margin-bottom: 5px;'><b><?php echo $this->_tpl_vars['admin_ads_add24']; ?>
</b></div>
      <div id='banner_html_content'></div>
      <div style='margin-top: 5px;'>
        [ <a href="javascript:savebanner2();"><?php echo $this->_tpl_vars['admin_ads_add23']; ?>
</a> ] &nbsp;
        [ <a href="javascript:hidediv('banner_preview_html');showdiv('banner_html');"><?php echo $this->_tpl_vars['admin_ads_add20']; ?>
</a> ]
      </div>
    </div>

    <div id='banner_preview_upload' style='display: none;'>
      <div style='margin-bottom: 5px;'><b><?php echo $this->_tpl_vars['admin_ads_add24']; ?>
</b></div>
      <div id='banner_upload_content'></div>
      <div style='margin-top: 5px;'>
        [ <a href="javascript:uploadbanner3();"><?php echo $this->_tpl_vars['admin_ads_add23']; ?>
</a> ] &nbsp;
        [ <a href="javascript:uploadbanner3_cancel();"><?php echo $this->_tpl_vars['admin_ads_add20']; ?>
</a> ]
      </div>
      <form action='admin_ads_add.php' method='post' id='cancelform' name='cancelform' target='uploadframe'>
      <input type='hidden' name='banner_filename_delete' id='banner_filename_delete' value=''>
      <input type='hidden' name='task' value='cancelbanner'>
      </form>
    </div>

    <div id='banner_final_title' style='<?php if ($this->_tpl_vars['ad_html'] == ""): ?>display: none;<?php endif; ?> padding-bottom: 3px;'><b><?php echo $this->_tpl_vars['admin_ads_add24']; ?>
</b></div>
    <div id='banner_final' style='<?php if ($this->_tpl_vars['ad_html'] == ""): ?>display: none;<?php endif; ?>'><?php echo $this->_tpl_vars['ad_html']; ?>
</div>
    <div id='banner_final_startover' style='<?php if ($this->_tpl_vars['ad_html'] == ""): ?>display: none;<?php endif; ?> padding-top: 3px;'><a href="javascript:startover()"><?php echo $this->_tpl_vars['admin_ads_add25']; ?>
</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:backtohtml()"><?php echo $this->_tpl_vars['admin_ads_add65']; ?>
</a></div>

  <?php echo '
  <script language=\'Javascript\'>
  <!--
  function togglefield(id1,id2) {
    if(id2.checked==true) {
      document.getElementById(id1).value=\'\';
      document.getElementById(id1).disabled=true;
      document.getElementById(id1).style.backgroundColor=\'#DDDDDD\';
    } else {
      document.getElementById(id1).disabled=false;
      document.getElementById(id1).style.backgroundColor=\'#FFFFFF\';
    }
  }
  function startover() {
    hidediv(\'banner_final_title\');
    hidediv(\'banner_final\');
    hidediv(\'banner_final_startover\');
    document.getElementById(\'bannerborder\').className=\'bannerborder\';
    showdiv(\'banner_options\');
    document.getElementById(\'cancelform\').submit();
  }
  function backtohtml() {
    hidediv(\'banner_final_title\');
    hidediv(\'banner_final\');
    hidediv(\'banner_final_startover\');
    showdiv(\'banner_html\');
    document.getElementById(\'bannerhtml\').value=document.getElementById(\'ad_html\').value;
  }
  function uploadbanner() {
    var bannersrc = document.getElementById(\'bannersrc\').value;
    if(bannersrc == "") {
      alert(\'';  echo $this->_tpl_vars['admin_ads_add26'];  echo '\');
    } else {
      document.getElementById(\'uploadform\').submit();
      hidediv(\'banner_upload_submit\');
      showdiv(\'banner_upload_status\');
    }
  }
  function uploadbanner2(imagename,iserror,error_message) {
    if(iserror == 1) {
      hidediv(\'banner_upload_status\');
      showdiv(\'banner_upload_submit\');
      alert(\'';  echo $this->_tpl_vars['admin_ads_add27'];  echo '\');
    } else {
      hidediv(\'banner_upload\');
      showdiv(\'banner_preview_upload\');
      var bannersrc = "./uploads_admin/ads/"+imagename;
      var bannerlink = document.getElementById(\'bannerlink\').value;
      var bannerhtml = "<a href=\'"+bannerlink+"\' target=\'_blank\'><img src=\'"+bannersrc+"\' border=\'0\'></a>";
      set_preview(document.getElementById(\'banner_upload_content\'), bannerhtml);
      document.getElementById(\'ad_html\').value=bannerhtml;
      document.getElementById(\'banner_filename_delete\').value=imagename;
      document.getElementById(\'banner_filename\').value=imagename;
    }
  }
  function uploadbanner3() {
    hidediv(\'banner_preview_upload\');
    showdiv(\'banner_final\');
    showdiv(\'banner_final_title\');
    showdiv(\'banner_final_startover\');
    hidediv(\'banner_upload_status\');
    showdiv(\'banner_upload_submit\');
    var bannerhtml = document.getElementById(\'ad_html\').value;
    set_preview(document.getElementById(\'banner_final\'), bannerhtml);
    document.getElementById(\'bannerborder\').className=\'bannerborder2\';
  }
  function uploadbanner3_cancel() {
    hidediv(\'banner_preview_upload\');
    hidediv(\'banner_upload_status\');
    showdiv(\'banner_upload\');
    showdiv(\'banner_upload_submit\');
    document.getElementById(\'cancelform\').submit();
  }
  function savebanner() {
    var bannerhtml = document.getElementById(\'bannerhtml\').value;
    if(bannerhtml == "") {
      alert(\'';  echo $this->_tpl_vars['admin_ads_add28'];  echo '\');
    } else {
      hidediv(\'banner_html\');
      showdiv(\'banner_preview_html\');
      set_preview(document.getElementById(\'banner_html_content\'), bannerhtml);
    }
  }
  function savebanner2() {
    hidediv(\'banner_preview_html\');
    showdiv(\'banner_final\');
    showdiv(\'banner_final_title\');
    showdiv(\'banner_final_startover\');
    var bannerhtml = document.getElementById(\'bannerhtml\').value;
    set_preview(document.getElementById(\'banner_final\'), bannerhtml); 
    document.getElementById(\'bannerborder\').className=\'bannerborder2\';
    document.getElementById(\'ad_html\').value=bannerhtml;
  }
  function set_preview(preview_object, banner_html) {
    var banner_html_string = banner_html;
    banner_html_string = banner_html_string.replace(/(.)\\.\\/uploads\\_admin/gi, "$1../uploads_admin");
    preview_object.innerHTML = banner_html_string;
  }
  //-->
  </script>
  '; ?>


  </td>
  </tr>
  </table>
</td></tr>
</table>

<br>

<form action='admin_ads_add.php' method='post'>
<input type='hidden' name='ad_html' id='ad_html' value='<?php echo $this->_tpl_vars['ad_html_encoded']; ?>
'>
<input type='hidden' name='banner_filename' id='banner_filename' value='<?php echo $this->_tpl_vars['ad_filename']; ?>
'>
<table cellpadding='0' cellspacing='0' width='100%'>
<tr><td class='header'><?php echo $this->_tpl_vars['admin_ads_add29']; ?>
</td></tr>
<tr><td class='setting1'>
<?php echo $this->_tpl_vars['admin_ads_add30']; ?>

<br><br>
<b><?php echo $this->_tpl_vars['admin_ads_add31']; ?>
 <?php echo $this->_tpl_vars['nowdate']; ?>
</b>
</td></tr>
<tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td class='form1'><?php echo $this->_tpl_vars['admin_ads_add32']; ?>
</td>
  <td class='form2'><input type='text' class='text' name='ad_name' size='64' maxlength='250' value='<?php echo $this->_tpl_vars['ad_name']; ?>
'></td>
  </tr>
  <tr>
  <td class='form1'><?php echo $this->_tpl_vars['admin_ads_add33']; ?>
</td>
  <td class='form2'>
    <select class='text' name='ad_date_start_month'>
    <option></option>
    <option<?php if ($this->_tpl_vars['ad_date_start_month'] == ($this->_tpl_vars['admin_ads_add34'])): ?> selected='selected'<?php endif; ?>><?php echo $this->_tpl_vars['admin_ads_add34']; ?>
</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_month'] == ($this->_tpl_vars['admin_ads_add35'])): ?> selected='selected'<?php endif; ?>><?php echo $this->_tpl_vars['admin_ads_add35']; ?>
</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_month'] == ($this->_tpl_vars['admin_ads_add36'])): ?> selected='selected'<?php endif; ?>><?php echo $this->_tpl_vars['admin_ads_add36']; ?>
</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_month'] == ($this->_tpl_vars['admin_ads_add37'])): ?> selected='selected'<?php endif; ?>><?php echo $this->_tpl_vars['admin_ads_add37']; ?>
</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_month'] == ($this->_tpl_vars['admin_ads_add38'])): ?> selected='selected'<?php endif; ?>><?php echo $this->_tpl_vars['admin_ads_add38']; ?>
</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_month'] == ($this->_tpl_vars['admin_ads_add39'])): ?> selected='selected'<?php endif; ?>><?php echo $this->_tpl_vars['admin_ads_add39']; ?>
</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_month'] == ($this->_tpl_vars['admin_ads_add40'])): ?> selected='selected'<?php endif; ?>><?php echo $this->_tpl_vars['admin_ads_add40']; ?>
</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_month'] == ($this->_tpl_vars['admin_ads_add41'])): ?> selected='selected'<?php endif; ?>><?php echo $this->_tpl_vars['admin_ads_add41']; ?>
</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_month'] == ($this->_tpl_vars['admin_ads_add42'])): ?> selected='selected'<?php endif; ?>><?php echo $this->_tpl_vars['admin_ads_add42']; ?>
</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_month'] == ($this->_tpl_vars['admin_ads_add43'])): ?> selected='selected'<?php endif; ?>><?php echo $this->_tpl_vars['admin_ads_add43']; ?>
</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_month'] == ($this->_tpl_vars['admin_ads_add44'])): ?> selected='selected'<?php endif; ?>><?php echo $this->_tpl_vars['admin_ads_add44']; ?>
</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_month'] == ($this->_tpl_vars['admin_ads_add45'])): ?> selected='selected'<?php endif; ?>><?php echo $this->_tpl_vars['admin_ads_add45']; ?>
</option>
    </select>
    <select class='text' name='ad_date_start_day'>
    <option></option>
    <option<?php if ($this->_tpl_vars['ad_date_start_day'] == '1'): ?> selected='selected'<?php endif; ?>>1</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_day'] == '2'): ?> selected='selected'<?php endif; ?>>2</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_day'] == '3'): ?> selected='selected'<?php endif; ?>>3</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_day'] == '4'): ?> selected='selected'<?php endif; ?>>4</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_day'] == '5'): ?> selected='selected'<?php endif; ?>>5</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_day'] == '6'): ?> selected='selected'<?php endif; ?>>6</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_day'] == '7'): ?> selected='selected'<?php endif; ?>>7</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_day'] == '8'): ?> selected='selected'<?php endif; ?>>8</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_day'] == '9'): ?> selected='selected'<?php endif; ?>>9</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_day'] == '10'): ?> selected='selected'<?php endif; ?>>10</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_day'] == '11'): ?> selected='selected'<?php endif; ?>>11</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_day'] == '12'): ?> selected='selected'<?php endif; ?>>12</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_day'] == '13'): ?> selected='selected'<?php endif; ?>>13</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_day'] == '14'): ?> selected='selected'<?php endif; ?>>14</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_day'] == '15'): ?> selected='selected'<?php endif; ?>>15</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_day'] == '16'): ?> selected='selected'<?php endif; ?>>16</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_day'] == '17'): ?> selected='selected'<?php endif; ?>>17</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_day'] == '18'): ?> selected='selected'<?php endif; ?>>18</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_day'] == '19'): ?> selected='selected'<?php endif; ?>>19</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_day'] == '20'): ?> selected='selected'<?php endif; ?>>20</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_day'] == '21'): ?> selected='selected'<?php endif; ?>>21</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_day'] == '22'): ?> selected='selected'<?php endif; ?>>22</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_day'] == '23'): ?> selected='selected'<?php endif; ?>>23</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_day'] == '24'): ?> selected='selected'<?php endif; ?>>24</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_day'] == '25'): ?> selected='selected'<?php endif; ?>>25</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_day'] == '26'): ?> selected='selected'<?php endif; ?>>26</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_day'] == '27'): ?> selected='selected'<?php endif; ?>>27</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_day'] == '28'): ?> selected='selected'<?php endif; ?>>28</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_day'] == '29'): ?> selected='selected'<?php endif; ?>>29</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_day'] == '30'): ?> selected='selected'<?php endif; ?>>30</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_day'] == '31'): ?> selected='selected'<?php endif; ?>>31</option>
    </select>
    <select class='text' name='ad_date_start_year'>
    <option></option>
    <option<?php if ($this->_tpl_vars['ad_date_start_year'] == '2007'): ?> selected='selected'<?php endif; ?>>2007</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_year'] == '2008'): ?> selected='selected'<?php endif; ?>>2008</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_year'] == '2009'): ?> selected='selected'<?php endif; ?>>2009</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_year'] == '2010'): ?> selected='selected'<?php endif; ?>>2010</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_year'] == '2011'): ?> selected='selected'<?php endif; ?>>2010</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_year'] == '2012'): ?> selected='selected'<?php endif; ?>>2011</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_year'] == '2013'): ?> selected='selected'<?php endif; ?>>2012</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_year'] == '2014'): ?> selected='selected'<?php endif; ?>>2013</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_year'] == '2015'): ?> selected='selected'<?php endif; ?>>2014</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_year'] == '2016'): ?> selected='selected'<?php endif; ?>>2015</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_year'] == '2017'): ?> selected='selected'<?php endif; ?>>2016</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_year'] == '2018'): ?> selected='selected'<?php endif; ?>>2017</option>
    </select>
    &nbsp;&nbsp;<b>at</b>&nbsp;&nbsp;
    <select class='text' name='ad_date_start_hour'>
    <option></option>
    <option<?php if ($this->_tpl_vars['ad_date_start_hour'] == '1'): ?> selected='selected'<?php endif; ?>>1</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_hour'] == '2'): ?> selected='selected'<?php endif; ?>>2</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_hour'] == '3'): ?> selected='selected'<?php endif; ?>>3</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_hour'] == '4'): ?> selected='selected'<?php endif; ?>>4</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_hour'] == '5'): ?> selected='selected'<?php endif; ?>>5</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_hour'] == '6'): ?> selected='selected'<?php endif; ?>>6</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_hour'] == '7'): ?> selected='selected'<?php endif; ?>>7</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_hour'] == '8'): ?> selected='selected'<?php endif; ?>>8</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_hour'] == '9'): ?> selected='selected'<?php endif; ?>>9</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_hour'] == '10'): ?> selected='selected'<?php endif; ?>>10</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_hour'] == '11'): ?> selected='selected'<?php endif; ?>>11</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_hour'] == '12'): ?> selected='selected'<?php endif; ?>>12</option>
    </select>&nbsp;<b>:</b>&nbsp;
    <select class='text' name='ad_date_start_minute'>
    <option></option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '00'): ?> selected='selected'<?php endif; ?>>00</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '01'): ?> selected='selected'<?php endif; ?>>01</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '02'): ?> selected='selected'<?php endif; ?>>02</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '03'): ?> selected='selected'<?php endif; ?>>03</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '04'): ?> selected='selected'<?php endif; ?>>04</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '05'): ?> selected='selected'<?php endif; ?>>05</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '06'): ?> selected='selected'<?php endif; ?>>06</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '07'): ?> selected='selected'<?php endif; ?>>07</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '08'): ?> selected='selected'<?php endif; ?>>08</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '09'): ?> selected='selected'<?php endif; ?>>09</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '10'): ?> selected='selected'<?php endif; ?>>10</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '11'): ?> selected='selected'<?php endif; ?>>11</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '12'): ?> selected='selected'<?php endif; ?>>12</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '13'): ?> selected='selected'<?php endif; ?>>13</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '14'): ?> selected='selected'<?php endif; ?>>14</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '15'): ?> selected='selected'<?php endif; ?>>15</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '16'): ?> selected='selected'<?php endif; ?>>16</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '17'): ?> selected='selected'<?php endif; ?>>17</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '18'): ?> selected='selected'<?php endif; ?>>18</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '19'): ?> selected='selected'<?php endif; ?>>19</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '20'): ?> selected='selected'<?php endif; ?>>20</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '21'): ?> selected='selected'<?php endif; ?>>21</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '22'): ?> selected='selected'<?php endif; ?>>22</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '23'): ?> selected='selected'<?php endif; ?>>23</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '24'): ?> selected='selected'<?php endif; ?>>24</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '25'): ?> selected='selected'<?php endif; ?>>25</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '26'): ?> selected='selected'<?php endif; ?>>26</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '27'): ?> selected='selected'<?php endif; ?>>27</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '28'): ?> selected='selected'<?php endif; ?>>28</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '29'): ?> selected='selected'<?php endif; ?>>29</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '30'): ?> selected='selected'<?php endif; ?>>30</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '31'): ?> selected='selected'<?php endif; ?>>31</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '32'): ?> selected='selected'<?php endif; ?>>32</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '33'): ?> selected='selected'<?php endif; ?>>33</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '34'): ?> selected='selected'<?php endif; ?>>34</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '35'): ?> selected='selected'<?php endif; ?>>35</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '36'): ?> selected='selected'<?php endif; ?>>36</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '37'): ?> selected='selected'<?php endif; ?>>37</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '38'): ?> selected='selected'<?php endif; ?>>38</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '39'): ?> selected='selected'<?php endif; ?>>39</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '40'): ?> selected='selected'<?php endif; ?>>40</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '41'): ?> selected='selected'<?php endif; ?>>41</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '42'): ?> selected='selected'<?php endif; ?>>42</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '43'): ?> selected='selected'<?php endif; ?>>43</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '44'): ?> selected='selected'<?php endif; ?>>44</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '45'): ?> selected='selected'<?php endif; ?>>45</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '46'): ?> selected='selected'<?php endif; ?>>46</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '47'): ?> selected='selected'<?php endif; ?>>47</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '48'): ?> selected='selected'<?php endif; ?>>48</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '49'): ?> selected='selected'<?php endif; ?>>49</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '50'): ?> selected='selected'<?php endif; ?>>50</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '51'): ?> selected='selected'<?php endif; ?>>51</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '52'): ?> selected='selected'<?php endif; ?>>52</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '53'): ?> selected='selected'<?php endif; ?>>53</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '54'): ?> selected='selected'<?php endif; ?>>54</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '55'): ?> selected='selected'<?php endif; ?>>55</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '56'): ?> selected='selected'<?php endif; ?>>56</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '57'): ?> selected='selected'<?php endif; ?>>57</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '58'): ?> selected='selected'<?php endif; ?>>58</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_minute'] == '59'): ?> selected='selected'<?php endif; ?>>59</option>
    </select>
    <select class='text' name='ad_date_start_ampm'>
    <option></option>
    <option<?php if ($this->_tpl_vars['ad_date_start_ampm'] == ($this->_tpl_vars['admin_ads_add46'])): ?> selected='selected'<?php endif; ?>><?php echo $this->_tpl_vars['admin_ads_add46']; ?>
</option>
    <option<?php if ($this->_tpl_vars['ad_date_start_ampm'] == ($this->_tpl_vars['admin_ads_add47'])): ?> selected='selected'<?php endif; ?>><?php echo $this->_tpl_vars['admin_ads_add47']; ?>
</option>
    </select>
  </td>
  </tr>
  <tr>
  <td class='form1'><?php echo $this->_tpl_vars['admin_ads_add48']; ?>
</td>
  <td class='form2'>

    <table cellpadding='0' cellspacing='0'>
    <tr>
    <td><input type='radio' name='ad_date_end_options' id='timelimit0' value='0' onClick="hidediv('enddate')"<?php if ($this->_tpl_vars['ad_date_end_options'] == 0 || $this->_tpl_vars['ad_date_end_options'] == ""): ?> checked='checked'<?php endif; ?>></td>
    <td><label for='timelimit0'><?php echo $this->_tpl_vars['admin_ads_add49']; ?>
</label></td>
    </tr>
    <tr>
    <td><input type='radio' name='ad_date_end_options' id='timelimit1' value='1' onClick="showdiv('enddate')"<?php if ($this->_tpl_vars['ad_date_end_options'] == 1): ?> checked='checked'<?php endif; ?>></td>
    <td><label for='timelimit1'><?php echo $this->_tpl_vars['admin_ads_add50']; ?>
</label></td>
    </tr>
    </table>

    <div style='margin-top: 7px; margin-bottom: 2px;<?php if ($this->_tpl_vars['ad_date_end_options'] != 1): ?> display: none;<?php endif; ?>' id='enddate'>
      <select class='text' name='ad_date_end_month'>
      <option></option>
      <option<?php if ($this->_tpl_vars['ad_date_end_month'] == ($this->_tpl_vars['admin_ads_add34'])): ?> selected='selected'<?php endif; ?>><?php echo $this->_tpl_vars['admin_ads_add34']; ?>
</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_month'] == ($this->_tpl_vars['admin_ads_add35'])): ?> selected='selected'<?php endif; ?>><?php echo $this->_tpl_vars['admin_ads_add35']; ?>
</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_month'] == ($this->_tpl_vars['admin_ads_add36'])): ?> selected='selected'<?php endif; ?>><?php echo $this->_tpl_vars['admin_ads_add36']; ?>
</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_month'] == ($this->_tpl_vars['admin_ads_add37'])): ?> selected='selected'<?php endif; ?>><?php echo $this->_tpl_vars['admin_ads_add37']; ?>
</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_month'] == ($this->_tpl_vars['admin_ads_add38'])): ?> selected='selected'<?php endif; ?>><?php echo $this->_tpl_vars['admin_ads_add38']; ?>
</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_month'] == ($this->_tpl_vars['admin_ads_add39'])): ?> selected='selected'<?php endif; ?>><?php echo $this->_tpl_vars['admin_ads_add39']; ?>
</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_month'] == ($this->_tpl_vars['admin_ads_add40'])): ?> selected='selected'<?php endif; ?>><?php echo $this->_tpl_vars['admin_ads_add40']; ?>
</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_month'] == ($this->_tpl_vars['admin_ads_add41'])): ?> selected='selected'<?php endif; ?>><?php echo $this->_tpl_vars['admin_ads_add41']; ?>
</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_month'] == ($this->_tpl_vars['admin_ads_add42'])): ?> selected='selected'<?php endif; ?>><?php echo $this->_tpl_vars['admin_ads_add42']; ?>
</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_month'] == ($this->_tpl_vars['admin_ads_add43'])): ?> selected='selected'<?php endif; ?>><?php echo $this->_tpl_vars['admin_ads_add43']; ?>
</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_month'] == ($this->_tpl_vars['admin_ads_add44'])): ?> selected='selected'<?php endif; ?>><?php echo $this->_tpl_vars['admin_ads_add44']; ?>
</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_month'] == ($this->_tpl_vars['admin_ads_add45'])): ?> selected='selected'<?php endif; ?>><?php echo $this->_tpl_vars['admin_ads_add45']; ?>
</option>
      </select>
      <select class='text' name='ad_date_end_day'>
      <option></option>
      <option<?php if ($this->_tpl_vars['ad_date_end_day'] == '1'): ?> selected='selected'<?php endif; ?>>1</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_day'] == '2'): ?> selected='selected'<?php endif; ?>>2</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_day'] == '3'): ?> selected='selected'<?php endif; ?>>3</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_day'] == '4'): ?> selected='selected'<?php endif; ?>>4</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_day'] == '5'): ?> selected='selected'<?php endif; ?>>5</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_day'] == '6'): ?> selected='selected'<?php endif; ?>>6</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_day'] == '7'): ?> selected='selected'<?php endif; ?>>7</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_day'] == '8'): ?> selected='selected'<?php endif; ?>>8</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_day'] == '9'): ?> selected='selected'<?php endif; ?>>9</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_day'] == '10'): ?> selected='selected'<?php endif; ?>>10</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_day'] == '11'): ?> selected='selected'<?php endif; ?>>11</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_day'] == '12'): ?> selected='selected'<?php endif; ?>>12</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_day'] == '13'): ?> selected='selected'<?php endif; ?>>13</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_day'] == '14'): ?> selected='selected'<?php endif; ?>>14</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_day'] == '15'): ?> selected='selected'<?php endif; ?>>15</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_day'] == '16'): ?> selected='selected'<?php endif; ?>>16</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_day'] == '17'): ?> selected='selected'<?php endif; ?>>17</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_day'] == '18'): ?> selected='selected'<?php endif; ?>>18</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_day'] == '19'): ?> selected='selected'<?php endif; ?>>19</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_day'] == '20'): ?> selected='selected'<?php endif; ?>>20</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_day'] == '21'): ?> selected='selected'<?php endif; ?>>21</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_day'] == '22'): ?> selected='selected'<?php endif; ?>>22</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_day'] == '23'): ?> selected='selected'<?php endif; ?>>23</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_day'] == '24'): ?> selected='selected'<?php endif; ?>>24</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_day'] == '25'): ?> selected='selected'<?php endif; ?>>25</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_day'] == '26'): ?> selected='selected'<?php endif; ?>>26</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_day'] == '27'): ?> selected='selected'<?php endif; ?>>27</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_day'] == '28'): ?> selected='selected'<?php endif; ?>>28</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_day'] == '29'): ?> selected='selected'<?php endif; ?>>29</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_day'] == '30'): ?> selected='selected'<?php endif; ?>>30</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_day'] == '31'): ?> selected='selected'<?php endif; ?>>31</option>
      </select>
      <select class='text' name='ad_date_end_year'>
      <option></option>
      <option<?php if ($this->_tpl_vars['ad_date_end_year'] == '2007'): ?> selected='selected'<?php endif; ?>>2007</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_year'] == '2008'): ?> selected='selected'<?php endif; ?>>2008</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_year'] == '2009'): ?> selected='selected'<?php endif; ?>>2009</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_year'] == '2010'): ?> selected='selected'<?php endif; ?>>2010</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_year'] == '2011'): ?> selected='selected'<?php endif; ?>>2010</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_year'] == '2012'): ?> selected='selected'<?php endif; ?>>2011</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_year'] == '2013'): ?> selected='selected'<?php endif; ?>>2012</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_year'] == '2014'): ?> selected='selected'<?php endif; ?>>2013</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_year'] == '2015'): ?> selected='selected'<?php endif; ?>>2014</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_year'] == '2016'): ?> selected='selected'<?php endif; ?>>2015</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_year'] == '2017'): ?> selected='selected'<?php endif; ?>>2016</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_year'] == '2018'): ?> selected='selected'<?php endif; ?>>2017</option>
      </select>
      &nbsp;&nbsp;<b>at</b>&nbsp;&nbsp;
      <select class='text' name='ad_date_end_hour'>
      <option></option>
      <option<?php if ($this->_tpl_vars['ad_date_end_hour'] == '1'): ?> selected='selected'<?php endif; ?>>1</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_hour'] == '2'): ?> selected='selected'<?php endif; ?>>2</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_hour'] == '3'): ?> selected='selected'<?php endif; ?>>3</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_hour'] == '4'): ?> selected='selected'<?php endif; ?>>4</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_hour'] == '5'): ?> selected='selected'<?php endif; ?>>5</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_hour'] == '6'): ?> selected='selected'<?php endif; ?>>6</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_hour'] == '7'): ?> selected='selected'<?php endif; ?>>7</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_hour'] == '8'): ?> selected='selected'<?php endif; ?>>8</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_hour'] == '9'): ?> selected='selected'<?php endif; ?>>9</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_hour'] == '10'): ?> selected='selected'<?php endif; ?>>10</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_hour'] == '11'): ?> selected='selected'<?php endif; ?>>11</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_hour'] == '12'): ?> selected='selected'<?php endif; ?>>12</option>
      </select>&nbsp;<b>:</b>&nbsp;
      <select class='text' name='ad_date_end_minute'>
      <option></option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '00'): ?> selected='selected'<?php endif; ?>>00</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '01'): ?> selected='selected'<?php endif; ?>>01</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '02'): ?> selected='selected'<?php endif; ?>>02</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '03'): ?> selected='selected'<?php endif; ?>>03</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '04'): ?> selected='selected'<?php endif; ?>>04</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '05'): ?> selected='selected'<?php endif; ?>>05</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '06'): ?> selected='selected'<?php endif; ?>>06</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '07'): ?> selected='selected'<?php endif; ?>>07</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '08'): ?> selected='selected'<?php endif; ?>>08</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '09'): ?> selected='selected'<?php endif; ?>>09</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '10'): ?> selected='selected'<?php endif; ?>>10</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '11'): ?> selected='selected'<?php endif; ?>>11</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '12'): ?> selected='selected'<?php endif; ?>>12</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '13'): ?> selected='selected'<?php endif; ?>>13</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '14'): ?> selected='selected'<?php endif; ?>>14</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '15'): ?> selected='selected'<?php endif; ?>>15</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '16'): ?> selected='selected'<?php endif; ?>>16</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '17'): ?> selected='selected'<?php endif; ?>>17</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '18'): ?> selected='selected'<?php endif; ?>>18</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '19'): ?> selected='selected'<?php endif; ?>>19</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '20'): ?> selected='selected'<?php endif; ?>>20</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '21'): ?> selected='selected'<?php endif; ?>>21</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '22'): ?> selected='selected'<?php endif; ?>>22</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '23'): ?> selected='selected'<?php endif; ?>>23</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '24'): ?> selected='selected'<?php endif; ?>>24</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '25'): ?> selected='selected'<?php endif; ?>>25</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '26'): ?> selected='selected'<?php endif; ?>>26</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '27'): ?> selected='selected'<?php endif; ?>>27</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '28'): ?> selected='selected'<?php endif; ?>>28</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '29'): ?> selected='selected'<?php endif; ?>>29</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '30'): ?> selected='selected'<?php endif; ?>>30</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '31'): ?> selected='selected'<?php endif; ?>>31</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '32'): ?> selected='selected'<?php endif; ?>>32</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '33'): ?> selected='selected'<?php endif; ?>>33</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '34'): ?> selected='selected'<?php endif; ?>>34</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '35'): ?> selected='selected'<?php endif; ?>>35</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '36'): ?> selected='selected'<?php endif; ?>>36</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '37'): ?> selected='selected'<?php endif; ?>>37</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '38'): ?> selected='selected'<?php endif; ?>>38</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '39'): ?> selected='selected'<?php endif; ?>>39</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '40'): ?> selected='selected'<?php endif; ?>>40</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '41'): ?> selected='selected'<?php endif; ?>>41</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '42'): ?> selected='selected'<?php endif; ?>>42</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '43'): ?> selected='selected'<?php endif; ?>>43</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '44'): ?> selected='selected'<?php endif; ?>>44</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '45'): ?> selected='selected'<?php endif; ?>>45</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '46'): ?> selected='selected'<?php endif; ?>>46</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '47'): ?> selected='selected'<?php endif; ?>>47</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '48'): ?> selected='selected'<?php endif; ?>>48</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '49'): ?> selected='selected'<?php endif; ?>>49</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '50'): ?> selected='selected'<?php endif; ?>>50</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '51'): ?> selected='selected'<?php endif; ?>>51</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '52'): ?> selected='selected'<?php endif; ?>>52</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '53'): ?> selected='selected'<?php endif; ?>>53</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '54'): ?> selected='selected'<?php endif; ?>>54</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '55'): ?> selected='selected'<?php endif; ?>>55</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '56'): ?> selected='selected'<?php endif; ?>>56</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '57'): ?> selected='selected'<?php endif; ?>>57</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '58'): ?> selected='selected'<?php endif; ?>>58</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_minute'] == '59'): ?> selected='selected'<?php endif; ?>>59</option>
      </select>
      <select class='text' name='ad_date_end_ampm'>
      <option></option>
      <option<?php if ($this->_tpl_vars['ad_date_end_ampm'] == ($this->_tpl_vars['admin_ads_add46'])): ?> selected='selected'<?php endif; ?>><?php echo $this->_tpl_vars['admin_ads_add46']; ?>
</option>
      <option<?php if ($this->_tpl_vars['ad_date_end_ampm'] == ($this->_tpl_vars['admin_ads_add47'])): ?> selected='selected'<?php endif; ?>><?php echo $this->_tpl_vars['admin_ads_add47']; ?>
</option>
      </select>
    </div>
  </td>
  </tr>
  <tr>
  <td class='form1'><?php echo $this->_tpl_vars['admin_ads_add51']; ?>
</td>
  <td class='form2'>
    <table cellpadding='0' cellspacing='0'>
    <tr>
    <td><input type='text' id='views_field' name='ad_limit_views' class='text' size='7' maxlength='10'<?php if ($this->_tpl_vars['ad_limit_views_unlimited'] != 'unchecked'): ?> disabled='disabled' style='background: #DDDDDD;'<?php endif; ?> value='<?php if ($this->_tpl_vars['ad_limit_views_unlimited'] == 0):  echo $this->_tpl_vars['ad_limit_views'];  endif; ?>'>&nbsp;&nbsp;&nbsp;</td>
    <td><input type='checkbox' id='ad_limit_views' name='ad_limit_views_unlimited' value='1' class='checkbox'<?php if ($this->_tpl_vars['ad_limit_views_unlimited'] != 'unchecked'): ?> checked='checked'<?php endif; ?> onClick="togglefield('views_field', this)"> <label for='ad_limit_views'><?php echo $this->_tpl_vars['admin_ads_add52']; ?>
</label></td>
    </tr>
    </table>
  </td>
  </tr>
  <tr>
  <td class='form1'><?php echo $this->_tpl_vars['admin_ads_add53']; ?>
</td>
  <td class='form2'>
    <table cellpadding='0' cellspacing='0'>
    <tr>
    <td><input type='text' id='clicks_field' name='ad_limit_clicks' class='text' size='7' maxlength='10'<?php if ($this->_tpl_vars['ad_limit_clicks_unlimited'] != 'unchecked'): ?> disabled='disabled' style='background: #DDDDDD;'<?php endif; ?> value='<?php if ($this->_tpl_vars['ad_limit_clicks_unlimited'] == 0):  echo $this->_tpl_vars['ad_limit_clicks'];  endif; ?>'>&nbsp;&nbsp;&nbsp;</td>
    <td><input type='checkbox' id='ad_limit_clicks' name='ad_limit_clicks_unlimited' value='1' class='checkbox'<?php if ($this->_tpl_vars['ad_limit_clicks_unlimited'] != 'unchecked' || $this->_tpl_vars['ad_limit_clicks_unlimited'] == ""): ?> checked='checked'<?php endif; ?> onClick="togglefield('clicks_field', this)"> <label for='ad_limit_clicks'><?php echo $this->_tpl_vars['admin_ads_add52']; ?>
</label></td>
    </tr>
    </table>
  </td>
  </tr>
  <tr>
  <td class='form1'><?php echo $this->_tpl_vars['admin_ads_add54']; ?>
</td>
  <td class='form2'>
    <table cellpadding='0' cellspacing='0'>
    <tr>
    <td><input type='text' id='minctr_field' name='ad_limit_ctr' class='text' size='7' maxlength='7'<?php if ($this->_tpl_vars['ad_limit_ctr_unlimited'] != 'unchecked'): ?> disabled='disabled' style='background: #DDDDDD;'<?php endif; ?> value='<?php if ($this->_tpl_vars['ad_limit_ctr_unlimited'] == 0):  echo $this->_tpl_vars['ad_limit_ctr'];  endif; ?>'>&nbsp;&nbsp;&nbsp;</td>
    <td><input type='checkbox' id='ad_limit_minctr' name='ad_limit_ctr_unlimited' value='1' class='checkbox'<?php if ($this->_tpl_vars['ad_limit_ctr_unlimited'] != 'unchecked' || $this->_tpl_vars['ad_limit_clicks_unlimited'] == ""): ?> checked='checked'<?php endif; ?> onClick="togglefield('minctr_field', this)"> <label for='ad_limit_minctr'><?php echo $this->_tpl_vars['admin_ads_add52']; ?>
</label></td>
    </tr>
    </table>
  </td>
  </tr>
  </table>
</td></tr>
</table>

<br>

<?php echo '
<script language=\'Javascript\'>
<!--
Ads = new Array()
Ads[\'top1\'] = new Image(213,37);
Ads[\'top1\'].src = "../images/admin_ads_top.gif";
Ads[\'top2\'] = new Image(213,37);
Ads[\'top2\'].src = "../images/admin_ads_top2.gif";
Ads[\'top3\'] = new Image(213,37);
Ads[\'top3\'].src = "../images/admin_ads_top3.gif";
Ads[\'belowmenu1\'] = new Image(213,30);
Ads[\'belowmenu1\'].src = "../images/admin_ads_belowmenu.gif";
Ads[\'belowmenu2\'] = new Image(213,30);
Ads[\'belowmenu2\'].src = "../images/admin_ads_belowmenu2.gif";
Ads[\'belowmenu3\'] = new Image(213,30);
Ads[\'belowmenu3\'].src = "../images/admin_ads_belowmenu3.gif";
Ads[\'left1\'] = new Image(37,113);
Ads[\'left1\'].src = "../images/admin_ads_left.gif";
Ads[\'left2\'] = new Image(37,113);
Ads[\'left2\'].src = "../images/admin_ads_left2.gif";
Ads[\'left3\'] = new Image(37,113);
Ads[\'left3\'].src = "../images/admin_ads_left3.gif";
Ads[\'right1\'] = new Image(37,113);
Ads[\'right1\'].src = "../images/admin_ads_right.gif";
Ads[\'right2\'] = new Image(37,113);
Ads[\'right2\'].src = "../images/admin_ads_right2.gif";
Ads[\'right3\'] = new Image(37,113);
Ads[\'right3\'].src = "../images/admin_ads_right3.gif";
Ads[\'bottom1\'] = new Image(213,37);
Ads[\'bottom1\'].src = "../images/admin_ads_bottom.gif";
Ads[\'bottom2\'] = new Image(213,37);
Ads[\'bottom2\'].src = "../images/admin_ads_bottom2.gif";
Ads[\'bottom3\'] = new Image(213,37);
Ads[\'bottom3\'].src = "../images/admin_ads_bottom3.gif";

function highlight1(id1) {
  var position3 = id1+"3";
  var position2 = id1+"2";
  if(document.getElementById(id1).src != Ads[position3].src) {
    document.getElementById(id1).src=Ads[position2].src;
    document.getElementById(id1).style.cursor=\'pointer\';
  }
}
function highlight2(id1) {
  var position3 = id1+"3";
  var position1 = id1+"1";
  if(document.getElementById(id1).src != Ads[position3].src) {
    document.getElementById(id1).src=Ads[position1].src;
  }
}
function highlight3(id1) {
  var position3 = id1+"3";
  var position2 = id1+"2";
  if(document.getElementById(id1).src != Ads[position3].src) {
    document.getElementById(id1).src=Ads[position3].src;
    document.getElementById("banner_position").value=id1;
    var currentval = document.getElementById("banner_position").value;
    if(currentval == "top") {
      highlight4("belowmenu", "left", "right", "bottom");
    }
    if(currentval == "belowmenu") {
      highlight4("top", "left", "right", "bottom");
    }
    if(currentval == "left") {
      highlight4("top", "belowmenu", "right", "bottom");
    }
    if(currentval == "right") {
      highlight4("top", "belowmenu", "left", "bottom");
    }
    if(currentval == "bottom") {
      highlight4("top", "belowmenu", "left", "right");
    }
  } else {
    document.getElementById(id1).src=Ads[position2].src;
    document.getElementById("banner_position").value="";
  }
}
function highlight4(id1,id2,id3,id4) {
  var position1 = id1+"1";
  document.getElementById(id1).src=Ads[position1].src;
  var position1 = id2+"1";
  document.getElementById(id2).src=Ads[position1].src;
  var position1 = id3+"1";
  document.getElementById(id3).src=Ads[position1].src;
  var position1 = id4+"1";
  document.getElementById(id4).src=Ads[position1].src;
}
//-->
</script>
'; ?>


<?php if ($this->_tpl_vars['ad_position'] == 'top'): ?>
  <?php $this->assign('ad_top', '3'); ?>
<?php elseif ($this->_tpl_vars['ad_position'] == 'belowmenu'): ?>
  <?php $this->assign('ad_belowmenu', '3'); ?>
<?php elseif ($this->_tpl_vars['ad_position'] == 'left'): ?>
  <?php $this->assign('ad_left', '3'); ?>
<?php elseif ($this->_tpl_vars['ad_position'] == 'right'): ?>
  <?php $this->assign('ad_right', '3'); ?>
<?php elseif ($this->_tpl_vars['ad_position'] == 'bottom'): ?>
  <?php $this->assign('ad_bottom', '3'); ?>
<?php endif; ?>

<table cellpadding='0' cellspacing='0' width='100%'>
<tr><td class='header'><?php echo $this->_tpl_vars['admin_ads_add55']; ?>
</td></tr>
<tr><td class='setting1'>
  <?php echo $this->_tpl_vars['admin_ads_add56']; ?>

</td></tr>
<tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0' align='center'>
  <tr>
  <td colspan='3'><img src='../images/admin_ads_top<?php echo $this->_tpl_vars['ad_top']; ?>
.gif' border='0' id='top' onMouseOver="highlight1('top')" onMouseOut="highlight2('top')" onClick="highlight3('top')"></td>
  </tr>
  <tr>
  <td colspan='3'><img src='../images/admin_ads_menu.gif' border='0'></td>
  </tr>
  <tr>
  <td colspan='3'><img src='../images/admin_ads_belowmenu<?php echo $this->_tpl_vars['ad_belowmenu']; ?>
.gif' border='0' id='belowmenu' onMouseOver="highlight1('belowmenu')" onMouseOut="highlight2('belowmenu')" onClick="highlight3('belowmenu')"></td>
  </tr>
  <tr>
  <td><img src='../images/admin_ads_left<?php echo $this->_tpl_vars['ad_left']; ?>
.gif' border='0' id='left' onMouseOver="highlight1('left')" onMouseOut="highlight2('left')" onClick="highlight3('left')"></td>
  <td><img src='../images/admin_ads_content.gif' border='0'></td>
  <td><img src='../images/admin_ads_right<?php echo $this->_tpl_vars['ad_right']; ?>
.gif' border='0' id='right' onMouseOver="highlight1('right')" onMouseOut="highlight2('right')" onClick="highlight3('right')"></td>
  </tr>
  <tr>
  <td colspan='3'><img src='../images/admin_ads_bottom<?php echo $this->_tpl_vars['ad_bottom']; ?>
.gif' border='0' id='bottom' onMouseOver="highlight1('bottom')" onMouseOut="highlight2('bottom')" onClick="highlight3('bottom')"></td>
  </tr>
  </table>
  <input type='hidden' name='banner_position' id='banner_position' value='<?php echo $this->_tpl_vars['ad_position']; ?>
'>
</td></tr>
<tr><td class='setting1'>
  <?php echo $this->_tpl_vars['admin_ads_add57']; ?>

  <div style='text-align: center;'>
    <h3><b><?php echo '{$ads->ads_display(\'';  echo $this->_tpl_vars['ad_id_next'];  echo '\')}'; ?>
</b></h3>
  </div>
</td></tr>
</table>

<br>

<?php $this->assign('subnets_total', $this->_tpl_vars['subnets_total']+1); ?>
<?php if ($this->_tpl_vars['levels_total'] > 10 || $this->_tpl_vars['subnets_total'] > 10): ?>
  <?php $this->assign('options_to_show', '10'); ?>
<?php elseif ($this->_tpl_vars['levels_total'] > $this->_tpl_vars['subnets_total']): ?>
  <?php $this->assign('options_to_show', $this->_tpl_vars['levels_total']); ?>
<?php elseif ($this->_tpl_vars['levels_total'] < $this->_tpl_vars['subnets_total']): ?>
  <?php $this->assign('options_to_show', $this->_tpl_vars['subnets_total']); ?>
<?php elseif ($this->_tpl_vars['levels_total'] == $this->_tpl_vars['subnets_total']): ?>
  <?php $this->assign('options_to_show', $this->_tpl_vars['levels_total']); ?>
<?php endif; ?>

<table cellpadding='0' cellspacing='0' width='100%'>
<tr><td class='header'><?php echo $this->_tpl_vars['admin_ads_add58']; ?>
</td></tr>
<tr><td class='setting1'>
  <?php echo $this->_tpl_vars['admin_ads_add59']; ?>

</td></tr>
<tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0' align='center'>
  <tr>
  <td><b>User Levels</b></td>
  <td style='padding-left: 10px;'><b><?php echo $this->_tpl_vars['admin_ads_add60']; ?>
</b></td>
  </tr>
  <tr>
  <td>
    <select size='<?php echo $this->_tpl_vars['options_to_show']; ?>
' class='text' name='ad_levels[]' multiple='multiple' style='width: 335px;'>
    <?php unset($this->_sections['level_loop']);
$this->_sections['level_loop']['name'] = 'level_loop';
$this->_sections['level_loop']['loop'] = is_array($_loop=$this->_tpl_vars['levels']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['level_loop']['show'] = true;
$this->_sections['level_loop']['max'] = $this->_sections['level_loop']['loop'];
$this->_sections['level_loop']['step'] = 1;
$this->_sections['level_loop']['start'] = $this->_sections['level_loop']['step'] > 0 ? 0 : $this->_sections['level_loop']['loop']-1;
if ($this->_sections['level_loop']['show']) {
    $this->_sections['level_loop']['total'] = $this->_sections['level_loop']['loop'];
    if ($this->_sections['level_loop']['total'] == 0)
        $this->_sections['level_loop']['show'] = false;
} else
    $this->_sections['level_loop']['total'] = 0;
if ($this->_sections['level_loop']['show']):

            for ($this->_sections['level_loop']['index'] = $this->_sections['level_loop']['start'], $this->_sections['level_loop']['iteration'] = 1;
                 $this->_sections['level_loop']['iteration'] <= $this->_sections['level_loop']['total'];
                 $this->_sections['level_loop']['index'] += $this->_sections['level_loop']['step'], $this->_sections['level_loop']['iteration']++):
$this->_sections['level_loop']['rownum'] = $this->_sections['level_loop']['iteration'];
$this->_sections['level_loop']['index_prev'] = $this->_sections['level_loop']['index'] - $this->_sections['level_loop']['step'];
$this->_sections['level_loop']['index_next'] = $this->_sections['level_loop']['index'] + $this->_sections['level_loop']['step'];
$this->_sections['level_loop']['first']      = ($this->_sections['level_loop']['iteration'] == 1);
$this->_sections['level_loop']['last']       = ($this->_sections['level_loop']['iteration'] == $this->_sections['level_loop']['total']);
?>
      <option value='<?php echo $this->_tpl_vars['levels'][$this->_sections['level_loop']['index']]['level_id']; ?>
'<?php if ($this->_tpl_vars['levels'][$this->_sections['level_loop']['index']]['level_selected'] == 1): ?> selected='selected'<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['levels'][$this->_sections['level_loop']['index']]['level_name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 75, "...", true) : smarty_modifier_truncate($_tmp, 75, "...", true));  if ($this->_tpl_vars['levels'][$this->_sections['level_loop']['index']]['level_default'] == 1): ?> <?php echo $this->_tpl_vars['admin_ads_add61'];  endif; ?></option>
    <?php endfor; endif; ?>
    </select>
  </td>
  <td style='padding-left: 10px;'>
    <select size='<?php echo $this->_tpl_vars['options_to_show']; ?>
' class='text' name='ad_subnets[]' multiple='multiple' style='width: 335px;'>
    <?php unset($this->_sections['subnet_loop']);
$this->_sections['subnet_loop']['name'] = 'subnet_loop';
$this->_sections['subnet_loop']['loop'] = is_array($_loop=$this->_tpl_vars['subnets']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['subnet_loop']['show'] = true;
$this->_sections['subnet_loop']['max'] = $this->_sections['subnet_loop']['loop'];
$this->_sections['subnet_loop']['step'] = 1;
$this->_sections['subnet_loop']['start'] = $this->_sections['subnet_loop']['step'] > 0 ? 0 : $this->_sections['subnet_loop']['loop']-1;
if ($this->_sections['subnet_loop']['show']) {
    $this->_sections['subnet_loop']['total'] = $this->_sections['subnet_loop']['loop'];
    if ($this->_sections['subnet_loop']['total'] == 0)
        $this->_sections['subnet_loop']['show'] = false;
} else
    $this->_sections['subnet_loop']['total'] = 0;
if ($this->_sections['subnet_loop']['show']):

            for ($this->_sections['subnet_loop']['index'] = $this->_sections['subnet_loop']['start'], $this->_sections['subnet_loop']['iteration'] = 1;
                 $this->_sections['subnet_loop']['iteration'] <= $this->_sections['subnet_loop']['total'];
                 $this->_sections['subnet_loop']['index'] += $this->_sections['subnet_loop']['step'], $this->_sections['subnet_loop']['iteration']++):
$this->_sections['subnet_loop']['rownum'] = $this->_sections['subnet_loop']['iteration'];
$this->_sections['subnet_loop']['index_prev'] = $this->_sections['subnet_loop']['index'] - $this->_sections['subnet_loop']['step'];
$this->_sections['subnet_loop']['index_next'] = $this->_sections['subnet_loop']['index'] + $this->_sections['subnet_loop']['step'];
$this->_sections['subnet_loop']['first']      = ($this->_sections['subnet_loop']['iteration'] == 1);
$this->_sections['subnet_loop']['last']       = ($this->_sections['subnet_loop']['iteration'] == $this->_sections['subnet_loop']['total']);
?>
      <option value='<?php echo $this->_tpl_vars['subnets'][$this->_sections['subnet_loop']['index']]['subnet_id']; ?>
'<?php if ($this->_tpl_vars['subnets'][$this->_sections['subnet_loop']['index']]['subnet_selected'] == 1): ?> selected='selected'<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['subnets'][$this->_sections['subnet_loop']['index']]['subnet_name'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 75, "...", true) : smarty_modifier_truncate($_tmp, 75, "...", true)); ?>
</option>
    <?php endfor; endif; ?>
    </select>
  </td>
  </tr>
  </table>
</td></tr>
<tr><td class='setting2'>
  <table cellpadding='0' cellspacing='0'>
  <tr>
  <td><input type='checkbox' name='ad_public' id='ad_public' value='1'<?php if ($this->_tpl_vars['ad_public'] == 1 || $this->_tpl_vars['task'] == 'main'): ?> checked='checked'<?php endif; ?>></td>
  <td><label for='ad_public'><?php echo $this->_tpl_vars['admin_ads_add62']; ?>
</label></td>
  </tr>
  </table>
</td></tr>
</table>

<br>

<table cellpadding='0' cellspacing='0'>
<tr>
<td>
  <input type='submit' class='button' value='<?php echo $this->_tpl_vars['admin_ads_add63']; ?>
'>&nbsp;
  <input type='hidden' name='task' value='dosave'>
  </form>
</td>
<td>
  <form action='admin_ads.php' method='post'>
  <input type='submit' class='button' value='<?php echo $this->_tpl_vars['admin_ads_add64']; ?>
'>
  </form>
</td>
</tr>
</table>

<br>

</td>
</tr>
</table>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'admin_footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>