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
      <p style="font-weight: bold;">請注意，本服務條款適用於 EllisLab 旗下的所有站點（包括 CodeIgniter 台灣）：EllisLab.com、ExpressionEngine.com、CodeIgniter.com 和 pMachinePro.com。</p>
      <p>
      網友在本站發佈的內容中所表達的是其個人的觀點，並不代表本站和本站管理員的觀點。
      </p>
      <p>
      在本站註冊表明您同意不發佈任何包含淫穢、粗俗、誹謗、煽動仇恨、威脅或任何違反法律的內容。我們將永久屏蔽違反上述規定的用戶。
      </p>
      <p>
      我們有權以任何理由刪除、編輯或移動任何內容。
      </p>
      <p>
      關於這些條款的疑問可以發送到：<?=safe_mailto('corporate@ellislab.com', 'corporate@ellislab.com')?>
      </p>
      <p style="font-weight: bold;">
      台灣用戶請於討論區提出：<?=anchor("forum", "繁體中文討論區");?>
      </p>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
