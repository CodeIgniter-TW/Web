<?php $this->load->view('header'); ?>
<!-- Candy comes in a wrapper -->
<div id="wrapperWit">
    <!-- Hard candy outer shell -->
    <!-- Gooey center -->
    <div id="gooey">
        <div id="content">
            <h2>CodeIgniter 應用案例</h2>
            <div id="project">
                <div>
                    <p>我們已經收到您的訊息，管理員會對網站進行審核。如果您的網站通過審核，將立即顯示在 <a href="<?=site_url('projects');?>">CodeIgniter 應用案例</a>页上！</p>
              </div>
                <div>
                    <p>你的網站還沒有列在這嗎？趕快<a href="<?=site_url('projects/submit');?>">提交</a>到 CodeIgniter 應用案例列表中！</p>
                </div>
                <ul class="ci_sites">
        					<?php foreach($ProjectsList as $item):?>
        					<li><a href="<?=$item['project_url'];?>"><?=$item['project_name'];?></a></li>
        					<?php endforeach;?>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<?php $this->load->view('footer'); ?>