<div id="wrapperWit">
  <div id="gooey">
    <div id="content">
      <h2>CodeIgniter 應用案例</h2>
      <div id="project">
        <p>你的網站還沒有列在這嗎？趕快<a href="<?=site_url('projects/submit');?>">傳送資料</a>到 CodeIgniter 應用案例列表中！</p>
        <p>&nbsp;</p>
        <ul class="ci_sites">
        <?php foreach($ProjectsList as $item):?>
          <li><a href="<?=$item['project_url'];?>" target="_blank"><?=$item['project_name'];?></a></li>
        <?php endforeach;?>
        </ul>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
