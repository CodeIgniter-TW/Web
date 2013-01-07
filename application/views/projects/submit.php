<!-- Candy comes in a wrapper -->
<div id="wrapperWit">
  <!-- Hard candy outer shell -->
  <!-- Gooey center -->
  <div id="gooey">
    <div id="content">
      <h2>送出 CodeIgniter 的專案網站</h2>
      <div id="project">
      <div style="font-weight:bold;font-size:1.1em;"><?=$this->validation->error_string?></div>
        <form id="entryform" method="post" action="<?=site_url('projects/submit');?>">
      <div><input type="hidden" name="ACT" value="submit" /></div>
          <div style="margin: 10px 0;">網站名稱:<br />
            <input type="text" name="title" id="title" value="<?=$Title?>" size="50" maxlength="100" />
          </div>
          <div style="margin: 10px 0;">網站地址(請輸入完整 URL，例如: http://www.example.com/):<br />
            <input type="text" dir="ltr" name="url" value="<?=$Url?>" maxlength="128" size="50" />
          </div>
          <div style="margin: 10px 0;">用於<b>審核</b>網站是否用 CodeIgniter Framework 開發的<b>相關資料</b>，<br />或者您的<b>聯絡訊息</b>:<br />
            <textarea name="description" cols="40" rows="10"><?=$Description?></textarea>
          </div>
          <div>
            <input type="submit" name="submit" value=" 提交 " />
          </div>
        </form>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
