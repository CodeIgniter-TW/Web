--
-- Table structure for table `ci_file`
--

DROP TABLE IF EXISTS `ci_file`;
CREATE TABLE IF NOT EXISTS `ci_file` (
  `file_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `file_name` varchar(64) DEFAULT NULL,
  `file_alias` varchar(64) DEFAULT NULL,
  `file_count` int(11) unsigned DEFAULT '0',
  PRIMARY KEY (`file_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;

-- --------------------------------------------------------

--
-- Table structure for table `ci_forum_block`
--

DROP TABLE IF EXISTS `ci_forum_block`;
CREATE TABLE IF NOT EXISTS `ci_forum_block` (
  `fb_id` int(11) NOT NULL AUTO_INCREMENT,
  `fb_parent` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  PRIMARY KEY (`fb_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;

-- --------------------------------------------------------

--
-- Table structure for table `ci_forum_reply`
--

DROP TABLE IF EXISTS `ci_forum_reply`;
CREATE TABLE IF NOT EXISTS `ci_forum_reply` (
  `fr_id` int(11) NOT NULL AUTO_INCREMENT,
  `ft_id` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`fr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

-- --------------------------------------------------------

--
-- Table structure for table `ci_forum_topic`
--

DROP TABLE IF EXISTS `ci_forum_topic`;
CREATE TABLE IF NOT EXISTS `ci_forum_topic` (
  `ft_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `content` text NOT NULL,
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ft_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;

-- --------------------------------------------------------

--
-- Table structure for table `ci_news`
--

DROP TABLE IF EXISTS `ci_news`;
CREATE TABLE IF NOT EXISTS `ci_news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(100) NOT NULL DEFAULT '',
  `news_alias` varchar(50) NOT NULL DEFAULT '',
  `news_prefix` varchar(200) NOT NULL DEFAULT '',
  `news_content` text NOT NULL,
  `news_author` varchar(20) NOT NULL DEFAULT '',
  `news_count` int(11) NOT NULL DEFAULT '0',
  `news_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`news_id`),
  KEY `news_date` (`news_date`),
  KEY `news_alias` (`news_alias`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;

-- --------------------------------------------------------

--
-- Table structure for table `ci_projects`
--

DROP TABLE IF EXISTS `ci_projects`;
CREATE TABLE IF NOT EXISTS `ci_projects` (
  `project_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(50) NOT NULL DEFAULT '',
  `project_url` varchar(200) NOT NULL DEFAULT '',
  `project_description` text NOT NULL,
  `project_verify` tinyint(1) NOT NULL DEFAULT '0',
  `project_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`project_id`),
  KEY `project_date` (`project_date`),
  KEY `project_verify` (`project_verify`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ;
