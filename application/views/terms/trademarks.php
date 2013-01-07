<div id="wrapperWit">
  <div id="gooey">
    <div id="sidebar">
      <div class="archives">
        <h4>最新 15 篇文章</h4>
        <ul>
      <?php foreach($NewsList as $item):?>
          <li><a href="<?=site_url("blog/{$item['news_alias']}");?>"><?=$item['news_title'];?></a></li>
      <?php endforeach;?>
        </ul>
      </div>
    </div>
    <div id="content">
      <h2><?=$NewsTitle;?></h2>
      <div class="entries">
<p>下面是 <a href="http://ellislab.com" target="_blank">EllisLab 公司</a>的註冊商標：</p>
<ul>
<li>ExpressionEngine &reg;</li>
<li>pMachine &reg;</li>
<li>CodeIgniter &reg;</li>
<li>Publish Your Universe &reg;</li>
</ul>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
