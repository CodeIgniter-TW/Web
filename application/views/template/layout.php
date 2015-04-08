<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--><html class="no-js" lang="<?php echo $lang; ?>"> <!--<![endif]-->
<head>
<meta charset="<?php echo $meta_charset; ?>">
<title><?php echo $site_title; ?></title>
<meta name="description" content="<?php echo $site_description; ?>" />
<meta name="keywords" content="<?php echo $site_keywords; ?>" />
<link rel="shortcut icon" href="/assets/images/design/favicon.ico" type="image/x-icon" />
<link rel="home" href="http://www.codeigniter.org.tw/" title="首頁" />
<link rel="alternate" type="application/rss+xml" title="CodeIgniter 繁體中文 RSS Feed" href="<?=site_url('feeds/rss/full');?>" />
<!-- Reverse Links from EllisLab network sites -->
<link rev="expressionengine" href="http://expressionengine.com/" title="The most flexible publishing system you'll ever meet" />
<link rev="ellislab" href="http://ellislab.com/" title="Where ideas hatch!" />
<?php echo $meta_tag; ?>
<?php echo $styles; ?>
<link rel="stylesheet" href="/assets/stylesheets/screen.css" type="text/css" media="screen, projection" charset="utf-8" />
<!-- JS -->
<?php echo $scripts_header; ?>
</head>
<body id="<?php echo $body_class; ?>">
<div id="masthead"><a href="http://codeigniter.com/" target="_blank"><img src="/assets/images/design/ellislab_network.gif" width="287" height="23" alt="CodeIgniter 英文官方網站" /></a></div>
<div id="header">
    <h1><a href="<?=site_url();?>" title="CodeIgniter 繁體中文"><img src="/assets/images/design/ci_logo2.gif" alt="CodeIgniter 臺灣" width="250" height="73" /></a></h1>
</div>
<div id="siteNav">
    <ul>
        <li id="homenav"><a href="<?=site_url();?>">首頁</a></li>
        <li id="downloadsnav"><a href="<?=site_url('downloads');?>">下載</a></li>
        <li id="newsnav"><a href="<?=site_url('blog');?>">最新訊息</a></li>
        <li id="manualnav3"><a href="<?=base_url();?>userguide3" target="_blank">使用手冊 3.x</a></li>
        <li id="manualnav2"><a href="<?=base_url();?>user_guide" target="_blank">使用手冊 2.x</a></li>
        <li id="forumnav"><a href="<?=base_url();?>forum" >論壇交流</a></li>
        <li id="projectnav"><a href="<?=site_url('projects');?>">CodeIgniter 案例</a></li>
        <li id="ircnav"><a href="<?=site_url('irc');?>">IRC 頻道</a></li>
        <li id="bugnav"><a href="https://github.com/bcit-ci/CodeIgniter/issues" target="_blank">Bug 追蹤(英文)</a></li>
    </ul>
    <div class="clear"></div>
</div>
<?php echo $content; ?>
<div id="footer">
    <div id="elements">
        <div class="item one">
            <h4><img src="/assets/images/design/text_built_on_ci.gif" alt="CodeIgniter 展示" width="129" height="15" /></h4>
            <div class="image"><img src="/assets/images/design/icon_new_07.png" alt="New!" width="49" height="49" /></div>
            <?php
            $i = 0;
            foreach($BottomProjectsList as $item):
                if ($i%4 == 0) echo '<ul class="ci_sites">';
            ?>
                <li><a href="<?=$item['project_url'];?>" target="_blank"><?=$item['project_name'];?></a></li>
                <!--<li><a href="<?=site_url('projects');?>">查看更多案例&hellip;</a></li>-->
            <?php
                if ($i%4 == 3 and $i != 0) echo '</ul>';
                $i++;
            ?>
            <?php endforeach;?>
        </div>
        <div class="clear"></div>
    </div>
    <!--elements-->
</div>
<!--footer-->
<div id="copyright">
    <div class="line"><a href="<?=site_url('terms');?>">服務條款</a> | <a href="<?=site_url('terms/privacy_policy');?>">隱私政策</a> | <a href="<?=site_url('terms/trademarks');?>">商標</a></div>
    <div class="line">本站由 <a href="http://ellislab.com/" target="_blank">EllisLab, Inc.</a> 原創設計 &middot; 使用 CodeIgniter 框架</div>
    <div class="line">版權所有 2001- <?=date("Y")?> &middot; <a href="http://ellislab.com" target="_blank">EllisLab, Inc.</a> &middot; CodeIgniter 台灣繁體中文 &middot; 保留所有權利</div>
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-5766319-11");
pageTracker._trackPageview();
} catch(err) {}</script>
<?php echo $scripts_footer; ?>
</body>
</html>
