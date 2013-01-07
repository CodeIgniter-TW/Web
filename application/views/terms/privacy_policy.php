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
                <h3>介绍</h3>
<p style="font-weight: bold;">請注意，本隱私政策適用於EllisLab 旗下的所有站點（包括CodeIgniter 台灣）：EllisLab.com、ExpressionEngine.com、CodeIgniter.com 和pMachinePro.com。 。 </p>

<p>
在EllisLab 公司和我們的附屬公司中，我們致力於尊重和保護您的網上隱私。我們已經制定了《在線隱私政策》，以便您瞭解我們關於您個人信息的政策
</p>
<h3>收集和使用信息</h3>
<p>
EllisLab 公司將只在下列情況下收集您的個人信息：在您購買我們的產品時；當您自願註冊會員帳戶，以便訪問本站的某些內容時；當您註冊我們的郵件列表時。訪問我們的網站一般是不受限制的，並且您可匿名瀏覽。
</p>
<p>
我們從您那收集的信息將永遠不會出售、出租或共享給第三方。然而，我們可能需要共享您的信息給我們的附屬公司，以提供您已購買或請求的服務。我們將讓您瞭解到這種情況。
</p>
<h3>Cookie</h3>
<p>
我們的網站採用了「Cookie」技術。 「Cookie」是一種小的文本文件，使我們能夠識別您的瀏覽器，以個性化您的體驗，或允許您訪問限制區域。 Cookie 不包含個人信息。
</p>
<h3>IP 地址</h3>
<p>
您的Internet 協議（「IP」）地址通常是與您的上網地點相關的，比如您的Internet 服務提供商，您的公司或您的大學。我們可能會使用您的IP 地址來幫助診斷我們服務器存在的問題，廣泛收集用戶統計信息，和管理我們的網站。
</p>
<h3>郵件列表</h3>
<p>
作為我們網站的會員，您可能偶爾會收到一封關於新產品和新服務的Email。您可以選擇不接收任何Email，方法是點擊Email 底部的「取消訂閱」鏈接。
</p>
<h3>承諾</h3>
<p>
我們正在致力於保護Internet 上的個人隱私權，並支持行業倡議。關於這個政策的疑問可以發送到：<?=safe_mailto('corporate@ellislab.com', 'corporate@ellislab.com')?>
</p>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
