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
          <li><a href="<?=site_url("blog/{$item['news_alias']}");?>"><?=$item['news_title'];?></a></li>
          <?php endforeach;?>
        </ul>
        <h4>Feeds</h4>
        <ul>
          <li>台灣 CodeIgniter Blog &amp; 新聞 <a href="<?=site_url('feeds/rss/news');?>" title="CodeIgniter 台灣新聞 RSS feed">RSS</a><br /></li>
        </ul>
      </div>
    </div>
    <div id="content">
      <h2>CodeIgniter Blog &amp; 新聞</h2>
      <?php foreach($NewsList as $item):?>
      <div class="entries">
        <h3><?=$item['news_prefix'];?><?=$item['news_title'];?></h3>
        <p>&nbsp;</p>
        <?=$item['news_content'];?>
        <p><em class="date">發布者: <?=$item['news_author'];?>, 日期: <?=$item['news_date'];?></em></p>
      </div>
      <?php endforeach;?>
      <!--
      <div class="paginate"><span class="pagecount">第 <?=$CurrentPage;?> 頁/共 <?=$TotalPages;?> 頁</span> <?=$Pages;?> </div>
      -->
    </div>
    <div class="clear"></div>
  </div>
</div>
