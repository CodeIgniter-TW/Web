<?='<?xml version="1.0" encoding="utf-8"?>'?>

<rss version="2.0"
    xmlns:dc="http://purl.org/dc/elements/1.1/"
    xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
    xmlns:admin="http://webns.net/mvcb/"
    xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
    xmlns:content="http://purl.org/rss/1.0/modules/content/">

    <channel>

    <title>CodeIgniter 台灣 - Blog &amp; 新聞</title>
    <link><?=site_url('blog');?></link>
    <description>CodeIgniter：幫助你撰寫 PHP 程式的開放原始碼的 Web 應用用程式框架</description>
    <dc:language>zh-TW</dc:language>
    <dc:creator>appleboy.tw@gmail.com</dc:creator>

    <dc:rights>版權所有 2007-2013</dc:rights>
    <dc:date><?=date('Y-m-d H:i:s');?>+08:00</dc:date>
    <admin:generatorAgent rdf:resource="<?=base_url();?>" />

    <image>
    <title><![CDATA[CodeIgniter 台灣]]></title>
    <link><![CDATA[<?=base_url();?>]]></link>
    <url><![CDATA[<?=base_url();?>images/design/favicon.ico]]></url>
    </image>

<?php foreach($NewsList as $item):?>
    <item>
      <title><?=$item['news_title'];?></title>
      <link><?=site_url("blog/{$item['news_alias']}");?></link>
      <description><![CDATA[<?=$item['news_content'];?>]]></description>
      <dc:subject></dc:subject>
      <dc:date><?=$item['news_date'];?>+08:00</dc:date>
    </item>
<?php endforeach;?>

    </channel>
</rss>