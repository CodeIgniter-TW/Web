<div id="wrapperWit">
    <div id="gooey">
        <div id="home_banner">
            <h2 class="hide">CodeIgniter 是開放原始碼的framework 減少開發的時間。</h2>
            <ul>
                <li><a href="<?=base_url();?>downloads/file/CodeIgniter_3.1.2" class="home_banner_links"><img src="/assets/images/design/icon_download.png" alt="icon_download" width="32" height="32" />下載 CodeIgniter<br />
                  <em>版本 3.1.2</em></a></li>
                <li><a href="<?=base_url();?>downloads/file/CodeIgniter_2.2.6" class="home_banner_links"><img src="/assets/images/design/icon_download.png" alt="icon_download" width="32" height="32" />下載 CodeIgniter<br />
                  <em>版本 2.2.6</em></a></li>
                <li><a href="<?=base_url();?>userguide3"><img src="/assets/images/design/icon_docs.png" alt="icon_docs" width="32" height="32" />閱讀使用手冊<br />
                    <em>CodeIgniter 有清晰完善的文件</em></a></li>
                <li><a href="<?=base_url();?>forum"><img src="/assets/images/design/icon_talk.png" alt="icon_talk" width="32" height="32" />論壇交流<br />
                    <em>加入論壇</em></a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <div id="content">
            <h3>歡迎來到 CodeIgniter 繁體中文！</h3>
            <p>CodeIgniter 是一套小巧但功能强大的 PHP 框架，做為一個簡單而“優雅”的工具包，它是一套專為 PHP 開發者建立功能完善的 Web 應用程序。如果你是一個使用虛擬主機，並且為客戶所要求的期限而煩惱的開發人員，如果你已经厭倦那些難而且效率不高的框架</p>
            <h4>那麼 CodeIgniter 就是你所需要的，如果...</h4>
            <ul id="column1">
                <li>你想要一個小巧的框架。</li>
                <li>你需要出色的性能。</li>
                <li>你需要廣泛兼容標準主機上的各種 PHP 版本和設定。</li>
                <li>你想要一個幾乎只需 0 設定的框架。</li>
                <li>你想要一個不需使用命令列(command line)的框架。</li>
                <li>你想要一個不需堅守限制性編碼規則的框架。</li>
            </ul>
            <ul id="column2">
                <li>你對 PEAR 這種大規模集成類不感興趣。</li>
                <li>你不希望被侷限在某一套模板(雖然你可以自己選擇用不用模板)。</li>
                <li>你不喜歡複雜，熱愛簡單。</li>
                <li>你需要清晰、完整的文件。</li>
            </ul>
            <div class="clear"></div>
        </div>
        <div id="news">
            <h4><span>CodeIgniter 最新訊息</span></h4>
            <?php foreach ($NewsList as $item):?>
            <h5><?=$item['news_title'];?></h5>
            <p><a href="<?=site_url("blog/{$item['news_alias']}");?>">閱讀全文&#8230;</a></p>
            <p><em class="date">發佈者: <?=$item['news_author'];?>, 日期: <?=$item['news_date'];?></em></p>
            <?php endforeach;?>
            <p class="archives"><a href="<?=site_url('blog');?>">閱讀所有最新訊息</a></p>
        </div>
        <div class="clear"></div>
    </div>
</div>
