<?php $this->load->view('header'); ?>
<!-- Candy comes in a wrapper -->
<div id="wrapperWit">
  <!-- Hard candy outer shell -->
  <!-- Gooey center -->
  <div id="gooey">
    <div id="sidebar">
      <div class="archives">
        <h4>最新 15 篇文章</h4>
        <ul>
		  <?php foreach($LastNewsList as $item):?>
          <li><a href="<?=site_url("news/{$item['news_alias']}");?>"><?=$item['news_title'];?></a></li>
		  <?php endforeach;?>
        </ul>
        <h4>Feeds</h4>
        <ul>
          <li>CodeIgniter 新闻 <a href="<?=site_url('feeds/rss/news');?>" title="CodeIgniter 中国新闻 RSS feed">RSS</a><br /></li>
          <li>幸福家园 <a href="http://www.ourhf.com/rss.xml" title="幸福家园 RSS feed">RSS</a></li>
        </ul>
      </div>
    </div>
    <div id="content">
      <h2>CodeIgniter 新闻</h2>
	  <?php foreach($NewsList as $item):?>
      <div class="entries">
        <h3><?=$item['news_prefix'];?><?=$item['news_title'];?></h3>
        <?=$item['news_content'];?>
        <p><em class="date">发布人: <?=$item['news_author'];?>, 日期: <?=$item['news_date'];?></em></p>
      </div>
	  <?php endforeach;?>
      <div class="paginate"><span class="pagecount">第 <?=$CurrentPage;?> 页/共 <?=$TotalPages;?> 页</span> <?=$Pages;?> </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<?php $this->load->view('footer'); ?>