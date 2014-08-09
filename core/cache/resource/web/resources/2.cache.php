<?php  return array (
  'resourceClass' => 'ArticlesContainer',
  'resource' => 
  array (
    'id' => 2,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Blog',
    'longtitle' => '',
    'description' => '',
    'alias' => 'blog',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 1,
    'introtext' => NULL,
    'content' => '[[+articles]]

[[!+page.nav:notempty=`
<div class=\'paging\'>
	<ul class=\'pageList\'>
		[[+paging]]
	</ul>
</div>
`]]',
    'richtext' => 1,
    'template' => 4,
    'menuindex' => 1,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1407266673,
    'editedby' => 1,
    'editedon' => 1407581870,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1407266673,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'ArticlesContainer',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'blog/',
    'uri_override' => 0,
    'hide_children_in_tree' => 1,
    'show_in_tree' => 1,
    'properties' => '{"articles":{"articleTemplate":"5","tplArticleRow":"sample.ArticleRowTpl","updateServicesEnabled":"1","articlesRichtext":"1","sortBy":"publishedon","sortDir":"DESC","archivesIncludeTVs":"1","includeTVsList":"","archivesProcessTVs":"0","processTVsList":"","otherGetArchives":"","articleUriTemplate":"%Y\\/%m\\/%d\\/%alias\\/","articlesPerPage":"10","pageLimit":"5","pageNavTpl":"<li[[+classes]]><a[[+classes]][[+title]] href=\\"[[+href]]\\">[[+pageNo]]<\\/a><\\/li>","pageActiveTpl":"<li[[+activeClasses]]><a[[+activeClasses:default=` class=\\"active\\"`]][[+title]] href=\\"[[+href]]\\">[[+pageNo]]<\\/a><\\/li>","pageFirstTpl":"<li class=\\"control\\"><a[[+classes]][[+title]] href=\\"[[+href]]\\">First<\\/a><\\/li>","pageLastTpl":"<li class=\\"control\\"><a[[+classes]][[+title]] href=\\"[[+href]]\\">Last<\\/a><\\/li>","pagePrevTpl":"<li class=\\"control\\"><a[[+classes]][[+title]] href=\\"[[+href]]\\">&lt;&lt;<\\/a><\\/li>","pageNextTpl":"<li class=\\"control\\"><a[[+classes]][[+title]] href=\\"[[+href]]\\">&gt;&gt;<\\/a><\\/li>","pageOffset":"0","pageVarKey":"page","pageTotalVar":"total","pageNavVar":"page.nav","tplArchiveMonth":"row","archiveListingsLimit":"10","archiveByMonth":"1","archiveCls":"","archiveAltCls":"arc-row-alt","archiveGroupByYear":"0","archiveGroupByYearTpl":"sample.ArchiveGroupByYear","tplTagRow":"tag","tagsLimit":"10","tagCls":"tl-tag","tagAltCls":"tl-tag-alt","rssAlias":"feed.rss,rss","rssItems":"10","tplRssFeed":"sample.ArticlesRss","tplRssItem":"sample.ArticlesRssItem","latestPostsTpl":"sample.ArticlesLatestPostTpl","latestPostsLimit":"5","latestPostsOffset":"0","otherLatestPosts":"","notifyTwitter":"0","notifyTwitterConsumerKey":"","notifyTwitterConsumerKeySecret":"","notifyTwitterTpl":"","notifyTwitterTagLimit":"3","shorteningService":"tinyurl","commentsEnabled":"1","commentsThreaded":"0","commentsReplyResourceId":"","commentsMaxDepth":"5","commentsRequirePreview":"0","commentsCloseAfter":"0","commentsDateFormat":"%b %d, %Y at %I:%M %p","commentsAutoConvertLinks":"1","commentsLimit":"0","commentsTplComment":"quipComment","commentsTplCommentOptions":"quipCommentOptions","commentsTplComments":"quipComments","commentsTplAddComment":"quipAddComment","commentsTplLoginToComment":"quipLoginToComment","commentsTplPreview":"quipPreviewComment","commentsUseCss":"1","commentsAltRowCss":"quip-comment-alt","commentsSortDir":"ASC","commentsRequireAuth":"0","commentsModerate":"1","commentsModerators":"","commentsModeratorGroup":"Administrator","commentsModerateAnonymousOnly":"0","commentsModerateFirstPostOnly":"1","commentsReCaptcha":"0","commentsDisableReCaptchaWhenLoggedIn":"1","commentsAllowRemove":"1","commentsRemoveThreshold":"3","commentsAllowReportAsSpam":"1","latestCommentsTpl":"quipLatestComment","latestCommentsLimit":"10","latestCommentsBodyLimit":"300","latestCommentsRowCss":"quip-latest-comment","latestCommentsAltRowCss":"quip-latest-comment-alt","commentsGravatar":"1","commentsGravatarIcon":"identicon","commentsGravatarSize":"50","commentsNameField":"name","commentsShowAnonymousName":"0","commentsAnonymousName":"Anonymous","notificationServices":""}}',
    'articlestags' => 
    array (
      0 => 'articlestags',
      1 => NULL,
      2 => '',
      3 => NULL,
      4 => 'hidden',
    ),
    '_content' => '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Blog | [[++site_title]]</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->

	<link rel="stylesheet" href="/site/styles/css/normalize.css">
	<link rel="stylesheet" href="/site/styles/css/main.css">
	<script src="/site/js/vendor/modernizr-latest.js"></script>
</head>
<body>
	<!--[if lt IE 7]>
	<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	<![endif]-->


<div class="wrap">[[!getPage?
          &elementClass=`modSnippet`
          &element=`getArchives`
          &makeArchive=`0`
          &cache=`1`
          &parents=`2`
          &where=`{"class_key":"Article"}`
          &showHidden=`1`
          &includeContent=`1`
          &includeTVs=`1`
          &includeTVsList=``
          &processTVs=`0`
          &processTVsList=``
          &tagKey=`articlestags`
          &tagSearchType=`contains`
          &sortby=`publishedon`
          &sortdir=`DESC`
          &tpl=`sample.ArticleRowTpl`

          &limit=`10`
          &pageLimit=`5`
          &pageVarKey=`page`
          &pageNavVar=`page.nav`
          &totalVar=`total`
          &offset=`0`

          &pageNavTpl=`<li[[+classes]]><a[[+classes]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>`
          &pageActiveTpl=`<li[[+activeClasses]]><a[[+activeClasses:default=` class="active"`]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>`
          &pageFirstTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">First</a></li>`
          &pageLastTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Last</a></li>`
          &pagePrevTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&lt;&lt;</a></li>`
          &pageNextTpl=`<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&gt;&gt;</a></li>`

          
        ]]

[[!+page.nav:notempty=`
<div class=\'paging\'>
	<ul class=\'pageList\'>
		[[!+page.nav]]
	</ul>
</div>
`]]</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script>window.jQuery || document.write(\'<script src="/site/js/vendor/jquery-2.1.1.min.js"><\\/script>\')</script>
	<script src="/site/js/plugins.js"></script>
	<script src="/site/js/main.js"></script>

	<!-- Google Analytics: change UA-XXXXX-X to be your site\'s ID. -->
	<script>
	    var _gaq=[[\'_setAccount\',\'UA-XXXXX-X\'],[\'_trackPageview\']];
	    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	    g.src=(\'https:\'==location.protocol?\'//ssl\':\'//www\')+\'.google-analytics.com/ga.js\';
	    s.parentNode.insertBefore(g,s)}(document,\'script\'));
	</script>
</body>
</html>',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[*pagetitle]]' => 'Blog',
    '[[*longtitle:default=`Blog`]]' => 'Blog',
    '[[*description]]' => '',
    '[[$head]]' => '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Blog | [[++site_title]]</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->

	<link rel="stylesheet" href="/site/styles/css/normalize.css">
	<link rel="stylesheet" href="/site/styles/css/main.css">
	<script src="/site/js/vendor/modernizr-latest.js"></script>
</head>
<body>
	<!--[if lt IE 7]>
	<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	<![endif]-->
',
    '[[$foot]]' => '	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script>window.jQuery || document.write(\'<script src="/site/js/vendor/jquery-2.1.1.min.js"><\\/script>\')</script>
	<script src="/site/js/plugins.js"></script>
	<script src="/site/js/main.js"></script>

	<!-- Google Analytics: change UA-XXXXX-X to be your site\'s ID. -->
	<script>
	    var _gaq=[[\'_setAccount\',\'UA-XXXXX-X\'],[\'_trackPageview\']];
	    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	    g.src=(\'https:\'==location.protocol?\'//ssl\':\'//www\')+\'.google-analytics.com/ga.js\';
	    s.parentNode.insertBefore(g,s)}(document,\'script\'));
	</script>
</body>
</html>',
    '[[~3]]' => 'blog/2014/08/09/blog/',
    '[[%articles.posted_by]]' => 'Posted by',
    '[[*id]]' => 2,
    '[[~2]]' => 'blog/',
    '[[%articles.tags]]' => 'Tags',
    '[[%articles.read_more]]' => 'Read more',
    '[[%articles.comments]]' => 'Comments',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'head' => 
      array (
        'fields' => 
        array (
          'id' => 7,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'head',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>[[*longtitle:default=`[[*pagetitle]]`]] | [[++site_title]]</title>
	<meta name="description" content="[[*description]]">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->

	<link rel="stylesheet" href="/site/styles/css/normalize.css">
	<link rel="stylesheet" href="/site/styles/css/main.css">
	<script src="/site/js/vendor/modernizr-latest.js"></script>
</head>
<body>
	<!--[if lt IE 7]>
	<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	<![endif]-->
',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => true,
          'static_file' => 'site/elements/chunks/page/head.html',
          'content' => '<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>[[*longtitle:default=`[[*pagetitle]]`]] | [[++site_title]]</title>
	<meta name="description" content="[[*description]]">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->

	<link rel="stylesheet" href="/site/styles/css/normalize.css">
	<link rel="stylesheet" href="/site/styles/css/main.css">
	<script src="/site/js/vendor/modernizr-latest.js"></script>
</head>
<body>
	<!--[if lt IE 7]>
	<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	<![endif]-->
',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'foot' => 
      array (
        'fields' => 
        array (
          'id' => 8,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'foot',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script>window.jQuery || document.write(\'<script src="/site/js/vendor/jquery-2.1.1.min.js"><\\/script>\')</script>
	<script src="/site/js/plugins.js"></script>
	<script src="/site/js/main.js"></script>

	<!-- Google Analytics: change UA-XXXXX-X to be your site\'s ID. -->
	<script>
	    var _gaq=[[\'_setAccount\',\'UA-XXXXX-X\'],[\'_trackPageview\']];
	    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	    g.src=(\'https:\'==location.protocol?\'//ssl\':\'//www\')+\'.google-analytics.com/ga.js\';
	    s.parentNode.insertBefore(g,s)}(document,\'script\'));
	</script>
</body>
</html>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => true,
          'static_file' => 'site/elements/chunks/page/foot.html',
          'content' => '	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script>window.jQuery || document.write(\'<script src="/site/js/vendor/jquery-2.1.1.min.js"><\\/script>\')</script>
	<script src="/site/js/plugins.js"></script>
	<script src="/site/js/main.js"></script>

	<!-- Google Analytics: change UA-XXXXX-X to be your site\'s ID. -->
	<script>
	    var _gaq=[[\'_setAccount\',\'UA-XXXXX-X\'],[\'_trackPageview\']];
	    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	    g.src=(\'https:\'==location.protocol?\'//ssl\':\'//www\')+\'.google-analytics.com/ga.js\';
	    s.parentNode.insertBefore(g,s)}(document,\'script\'));
	</script>
</body>
</html>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modSnippet' => 
    array (
      'getPage' => 
      array (
        'fields' => 
        array (
          'id' => 12,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'getPage',
          'description' => '<b>1.2.3-pl</b> A generic wrapper snippet for returning paged results and navigation from snippets that return limitable collections.',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '/**
 * @package getpage
 */
$output = \'\';

$properties =& $scriptProperties;
$properties[\'page\'] = (isset($_GET[$properties[\'pageVarKey\']]) && ($page = intval($_GET[$properties[\'pageVarKey\']]))) ? $page : null;
if ($properties[\'page\'] === null) {
    $properties[\'page\'] = (isset($_REQUEST[$properties[\'pageVarKey\']]) && ($page = intval($_REQUEST[$properties[\'pageVarKey\']]))) ? $page : 1;
}
$properties[\'limit\'] = (isset($_GET[\'limit\'])) ? intval($_GET[\'limit\']) : null;
if ($properties[\'limit\'] === null) {
    $properties[\'limit\'] = (isset($_REQUEST[\'limit\'])) ? intval($_REQUEST[\'limit\']) : intval($limit);
}
$properties[\'offset\'] = (!empty($properties[\'limit\']) && !empty($properties[\'page\'])) ? ($properties[\'limit\'] * ($properties[\'page\'] - 1)) : 0;
$properties[\'totalVar\'] = empty($totalVar) ? "total" : $totalVar;
$properties[\'total\'] = !empty($properties[\'total\']) && $total = intval($properties[\'total\']) ? $total : 0;
$properties[\'pageOneLimit\'] = (!empty($pageOneLimit) && $pageOneLimit = intval($pageOneLimit)) ? $pageOneLimit : $properties[\'limit\'];
$properties[\'actualLimit\'] = $properties[\'limit\'];
$properties[\'pageLimit\'] = isset($pageLimit) && is_numeric($pageLimit) ? intval($pageLimit) : 5;
$properties[\'element\'] = empty($element) ? \'\' : $element;
$properties[\'elementClass\'] = empty($elementClass) ? \'modChunk\' : $elementClass;
$properties[\'pageNavVar\'] = empty($pageNavVar) ? \'page.nav\' : $pageNavVar;
$properties[\'pageNavTpl\'] = !isset($pageNavTpl) ? "<li[[+classes]]><a[[+classes]][[+title]] href=\\"[[+href]]\\">[[+pageNo]]</a></li>" : $pageNavTpl;
$properties[\'pageNavOuterTpl\'] = !isset($pageNavOuterTpl) ? "[[+first]][[+prev]][[+pages]][[+next]][[+last]]" : $pageNavOuterTpl;
$properties[\'pageActiveTpl\'] = !isset($pageActiveTpl) ? "<li[[+activeClasses:default=` class=\\"active\\"`]]><a[[+activeClasses:default=` class=\\"active\\"`]][[+title]] href=\\"[[+href]]\\">[[+pageNo]]</a></li>" : $pageActiveTpl;
$properties[\'pageFirstTpl\'] = !isset($pageFirstTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">First</a></li>" : $pageFirstTpl;
$properties[\'pageLastTpl\'] = !isset($pageLastTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">Last</a></li>" : $pageLastTpl;
$properties[\'pagePrevTpl\'] = !isset($pagePrevTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">&lt;&lt;</a></li>" : $pagePrevTpl;
$properties[\'pageNextTpl\'] = !isset($pageNextTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">&gt;&gt;</a></li>" : $pageNextTpl;
$properties[\'toPlaceholder\'] = !empty($toPlaceholder) ? $toPlaceholder : \'\';
$properties[\'cache\'] = isset($cache) ? (boolean) $cache : (boolean) $modx->getOption(\'cache_resource\', null, false);
if (empty($cache_key)) $properties[xPDO::OPT_CACHE_KEY] = $modx->getOption(\'cache_resource_key\', null, \'resource\');
if (empty($cache_handler)) $properties[xPDO::OPT_CACHE_HANDLER] = $modx->getOption(\'cache_resource_handler\', null, \'xPDOFileCache\');
if (empty($cache_expires)) $properties[xPDO::OPT_CACHE_EXPIRES] = (integer) $modx->getOption(\'cache_resource_expires\', null, 0);

if ($properties[\'page\'] == 1 && $properties[\'pageOneLimit\'] !== $properties[\'actualLimit\']) {
    $properties[\'limit\'] = $properties[\'pageOneLimit\'];
}

if ($properties[\'cache\']) {
    $properties[\'cachePageKey\'] = $modx->resource->getCacheKey() . \'/\' . $properties[\'page\'] . \'/\' . md5(http_build_query($modx->request->getParameters()));
    $properties[\'cacheOptions\'] = array(
        xPDO::OPT_CACHE_KEY => $properties[xPDO::OPT_CACHE_KEY],
        xPDO::OPT_CACHE_HANDLER => $properties[xPDO::OPT_CACHE_HANDLER],
        xPDO::OPT_CACHE_EXPIRES => $properties[xPDO::OPT_CACHE_EXPIRES],
    );
}
$cached = false;
if ($properties[\'cache\']) {
    if ($modx->getCacheManager()) {
        $cached = $modx->cacheManager->get($properties[\'cachePageKey\'], $properties[\'cacheOptions\']);
    }
}
if (empty($cached) || !isset($cached[\'properties\']) || !isset($cached[\'output\'])) {
    $elementObj = $modx->getObject($properties[\'elementClass\'], array(\'name\' => $properties[\'element\']));
    if ($elementObj) {
        $elementObj->setCacheable(false);
        if (!empty($properties[\'toPlaceholder\'])) {
            $elementObj->process($properties);
            $output = $modx->getPlaceholder($properties[\'toPlaceholder\']);
        } else {
            $output = $elementObj->process($properties);
        }
    }

    include_once $modx->getOption(\'getpage.core_path\',$properties,$modx->getOption(\'core_path\', $properties, MODX_CORE_PATH) . \'components/getpage/\').\'include.getpage.php\';

    $qs = $modx->request->getParameters();
    $properties[\'qs\'] =& $qs;

    $totalSet = $modx->getPlaceholder($properties[\'totalVar\']);
    $properties[\'total\'] = (($totalSet = intval($totalSet)) ? $totalSet : $properties[\'total\']);
    if (!empty($properties[\'total\']) && !empty($properties[\'actualLimit\'])) {
        if ($properties[\'pageOneLimit\'] !== $properties[\'actualLimit\']) {
            $adjustedTotal = $properties[\'total\'] - $properties[\'pageOneLimit\'];
            $properties[\'pageCount\'] = $adjustedTotal > 0 ? ceil($adjustedTotal / $properties[\'actualLimit\']) + 1 : 1;
        } else {
            $properties[\'pageCount\'] = ceil($properties[\'total\'] / $properties[\'actualLimit\']);
        }
    } else {
        $properties[\'pageCount\'] = 1;
    }
    if (empty($properties[\'total\']) || empty($properties[\'actualLimit\']) || $properties[\'total\'] <= $properties[\'actualLimit\'] || ($properties[\'page\'] == 1 && $properties[\'total\'] <= $properties[\'pageOneLimit\'])) {
        $properties[\'page\'] = 1;
    } else {
        $pageNav = getpage_buildControls($modx, $properties);
        $properties[$properties[\'pageNavVar\']] = $modx->newObject(\'modChunk\')->process(array_merge($properties, $pageNav), $properties[\'pageNavOuterTpl\']);
        if ($properties[\'page\'] > 1) {
            $qs[$properties[\'pageVarKey\']] = $properties[\'page\'];
        }
    }
    
    $properties[\'firstItem\'] = $properties[\'offset\'] + 1;
    $properties[\'lastItem\'] = ($properties[\'offset\'] + $properties[\'limit\']) < $totalSet ? ($properties[\'offset\'] + $properties[\'limit\']) : $totalSet;

    $properties[\'pageUrl\'] = $modx->makeUrl($modx->resource->get(\'id\'), \'\', $qs);
    if ($properties[\'cache\'] && $modx->getCacheManager()) {
        $cached = array(\'properties\' => $properties, \'output\' => $output);
        $modx->cacheManager->set($properties[\'cachePageKey\'], $cached, $properties[xPDO::OPT_CACHE_EXPIRES], $properties[\'cacheOptions\']);
    }
} else {
    $properties = $cached[\'properties\'];
    $output = $cached[\'output\'];
}
$modx->setPlaceholders($properties, $properties[\'namespace\']);
if (!empty($properties[\'toPlaceholder\'])) {
    $modx->setPlaceholder($properties[\'toPlaceholder\'], $output);
    $output = \'\';
}

return $output;',
          'locked' => false,
          'properties' => 
          array (
            'namespace' => 
            array (
              'name' => 'namespace',
              'desc' => 'An execution namespace that serves as a prefix for placeholders set by a specific instance of the getPage snippet.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'An execution namespace that serves as a prefix for placeholders set by a specific instance of the getPage snippet.',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'The result limit per page; can be overridden in the $_REQUEST.',
              'type' => 'textfield',
              'options' => '',
              'value' => '10',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The result limit per page; can be overridden in the $_REQUEST.',
              'area_trans' => '',
            ),
            'offset' => 
            array (
              'name' => 'offset',
              'desc' => 'The offset, or record position to start at within the collection for rendering results for the current page; should be calculated based on page variable set in pageVarKey.',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The offset, or record position to start at within the collection for rendering results for the current page; should be calculated based on page variable set in pageVarKey.',
              'area_trans' => '',
            ),
            'page' => 
            array (
              'name' => 'page',
              'desc' => 'The page to display; this is determined based on the value indicated by the page variable set in pageVarKey, typically in the $_REQUEST.',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The page to display; this is determined based on the value indicated by the page variable set in pageVarKey, typically in the $_REQUEST.',
              'area_trans' => '',
            ),
            'pageVarKey' => 
            array (
              'name' => 'pageVarKey',
              'desc' => 'The key of a property that indicates the current page.',
              'type' => 'textfield',
              'options' => '',
              'value' => 'page',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The key of a property that indicates the current page.',
              'area_trans' => '',
            ),
            'totalVar' => 
            array (
              'name' => 'totalVar',
              'desc' => 'The key of a placeholder that must contain the total records in the limitable collection being paged.',
              'type' => 'textfield',
              'options' => '',
              'value' => 'total',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The key of a placeholder that must contain the total records in the limitable collection being paged.',
              'area_trans' => '',
            ),
            'pageLimit' => 
            array (
              'name' => 'pageLimit',
              'desc' => 'The maximum number of pages to display when rendering paging controls',
              'type' => 'textfield',
              'options' => '',
              'value' => '5',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The maximum number of pages to display when rendering paging controls',
              'area_trans' => '',
            ),
            'elementClass' => 
            array (
              'name' => 'elementClass',
              'desc' => 'The class of element that will be called by the getPage snippet instance.',
              'type' => 'textfield',
              'options' => '',
              'value' => 'modSnippet',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The class of element that will be called by the getPage snippet instance.',
              'area_trans' => '',
            ),
            'pageNavVar' => 
            array (
              'name' => 'pageNavVar',
              'desc' => 'The key of a placeholder to be set with the paging navigation controls.',
              'type' => 'textfield',
              'options' => '',
              'value' => 'page.nav',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The key of a placeholder to be set with the paging navigation controls.',
              'area_trans' => '',
            ),
            'pageNavTpl' => 
            array (
              'name' => 'pageNavTpl',
              'desc' => 'Content representing a single page navigation control.',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li[[+classes]]><a[[+classes]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Content representing a single page navigation control.',
              'area_trans' => '',
            ),
            'pageNavOuterTpl' => 
            array (
              'name' => 'pageNavOuterTpl',
              'desc' => 'Content representing the layout of the page navigation controls.',
              'type' => 'textfield',
              'options' => '',
              'value' => '[[+first]][[+prev]][[+pages]][[+next]][[+last]]',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Content representing the layout of the page navigation controls.',
              'area_trans' => '',
            ),
            'pageActiveTpl' => 
            array (
              'name' => 'pageActiveTpl',
              'desc' => 'Content representing the current page navigation control.',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li[[+activeClasses]]><a[[+activeClasses:default=` class="active"`]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Content representing the current page navigation control.',
              'area_trans' => '',
            ),
            'pageFirstTpl' => 
            array (
              'name' => 'pageFirstTpl',
              'desc' => 'Content representing the first page navigation control.',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">First</a></li>',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Content representing the first page navigation control.',
              'area_trans' => '',
            ),
            'pageLastTpl' => 
            array (
              'name' => 'pageLastTpl',
              'desc' => 'Content representing the last page navigation control.',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Last</a></li>',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Content representing the last page navigation control.',
              'area_trans' => '',
            ),
            'pagePrevTpl' => 
            array (
              'name' => 'pagePrevTpl',
              'desc' => 'Content representing the previous page navigation control.',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&lt;&lt;</a></li>',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Content representing the previous page navigation control.',
              'area_trans' => '',
            ),
            'pageNextTpl' => 
            array (
              'name' => 'pageNextTpl',
              'desc' => 'Content representing the next page navigation control.',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&gt;&gt;</a></li>',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Content representing the next page navigation control.',
              'area_trans' => '',
            ),
            'cache' => 
            array (
              'name' => 'cache',
              'desc' => 'If true, unique page requests will be cached according to addition cache properties.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'If true, unique page requests will be cached according to addition cache properties.',
              'area_trans' => '',
            ),
            'cache_key' => 
            array (
              'name' => 'cache_key',
              'desc' => 'The key of the cache provider to use; leave empty to use the cache_resource_key cache partition (default is "resource").',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The key of the cache provider to use; leave empty to use the cache_resource_key cache partition (default is "resource").',
              'area_trans' => '',
            ),
            'cache_handler' => 
            array (
              'name' => 'cache_handler',
              'desc' => 'The cache provider implementation to use; leave empty unless you are caching to a custom cache_key.',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The cache provider implementation to use; leave empty unless you are caching to a custom cache_key.',
              'area_trans' => '',
            ),
            'cache_expires' => 
            array (
              'name' => 'cache_expires',
              'desc' => 'The number of seconds before the cached pages expire and must be regenerated; leave empty to use the cache provider option for cache_expires.',
              'type' => 'textfield',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The number of seconds before the cached pages expire and must be regenerated; leave empty to use the cache provider option for cache_expires.',
              'area_trans' => '',
            ),
            'pageNavScheme' => 
            array (
              'name' => 'pageNavScheme',
              'desc' => 'Optionally specify a scheme for use when generating page navigation links; will use link_tag_scheme if empty or not specified (default is empty).',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Optionally specify a scheme for use when generating page navigation links; will use link_tag_scheme if empty or not specified (default is empty).',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * @package getpage
 */
$output = \'\';

$properties =& $scriptProperties;
$properties[\'page\'] = (isset($_GET[$properties[\'pageVarKey\']]) && ($page = intval($_GET[$properties[\'pageVarKey\']]))) ? $page : null;
if ($properties[\'page\'] === null) {
    $properties[\'page\'] = (isset($_REQUEST[$properties[\'pageVarKey\']]) && ($page = intval($_REQUEST[$properties[\'pageVarKey\']]))) ? $page : 1;
}
$properties[\'limit\'] = (isset($_GET[\'limit\'])) ? intval($_GET[\'limit\']) : null;
if ($properties[\'limit\'] === null) {
    $properties[\'limit\'] = (isset($_REQUEST[\'limit\'])) ? intval($_REQUEST[\'limit\']) : intval($limit);
}
$properties[\'offset\'] = (!empty($properties[\'limit\']) && !empty($properties[\'page\'])) ? ($properties[\'limit\'] * ($properties[\'page\'] - 1)) : 0;
$properties[\'totalVar\'] = empty($totalVar) ? "total" : $totalVar;
$properties[\'total\'] = !empty($properties[\'total\']) && $total = intval($properties[\'total\']) ? $total : 0;
$properties[\'pageOneLimit\'] = (!empty($pageOneLimit) && $pageOneLimit = intval($pageOneLimit)) ? $pageOneLimit : $properties[\'limit\'];
$properties[\'actualLimit\'] = $properties[\'limit\'];
$properties[\'pageLimit\'] = isset($pageLimit) && is_numeric($pageLimit) ? intval($pageLimit) : 5;
$properties[\'element\'] = empty($element) ? \'\' : $element;
$properties[\'elementClass\'] = empty($elementClass) ? \'modChunk\' : $elementClass;
$properties[\'pageNavVar\'] = empty($pageNavVar) ? \'page.nav\' : $pageNavVar;
$properties[\'pageNavTpl\'] = !isset($pageNavTpl) ? "<li[[+classes]]><a[[+classes]][[+title]] href=\\"[[+href]]\\">[[+pageNo]]</a></li>" : $pageNavTpl;
$properties[\'pageNavOuterTpl\'] = !isset($pageNavOuterTpl) ? "[[+first]][[+prev]][[+pages]][[+next]][[+last]]" : $pageNavOuterTpl;
$properties[\'pageActiveTpl\'] = !isset($pageActiveTpl) ? "<li[[+activeClasses:default=` class=\\"active\\"`]]><a[[+activeClasses:default=` class=\\"active\\"`]][[+title]] href=\\"[[+href]]\\">[[+pageNo]]</a></li>" : $pageActiveTpl;
$properties[\'pageFirstTpl\'] = !isset($pageFirstTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">First</a></li>" : $pageFirstTpl;
$properties[\'pageLastTpl\'] = !isset($pageLastTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">Last</a></li>" : $pageLastTpl;
$properties[\'pagePrevTpl\'] = !isset($pagePrevTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">&lt;&lt;</a></li>" : $pagePrevTpl;
$properties[\'pageNextTpl\'] = !isset($pageNextTpl) ? "<li class=\\"control\\"><a[[+title]] href=\\"[[+href]]\\">&gt;&gt;</a></li>" : $pageNextTpl;
$properties[\'toPlaceholder\'] = !empty($toPlaceholder) ? $toPlaceholder : \'\';
$properties[\'cache\'] = isset($cache) ? (boolean) $cache : (boolean) $modx->getOption(\'cache_resource\', null, false);
if (empty($cache_key)) $properties[xPDO::OPT_CACHE_KEY] = $modx->getOption(\'cache_resource_key\', null, \'resource\');
if (empty($cache_handler)) $properties[xPDO::OPT_CACHE_HANDLER] = $modx->getOption(\'cache_resource_handler\', null, \'xPDOFileCache\');
if (empty($cache_expires)) $properties[xPDO::OPT_CACHE_EXPIRES] = (integer) $modx->getOption(\'cache_resource_expires\', null, 0);

if ($properties[\'page\'] == 1 && $properties[\'pageOneLimit\'] !== $properties[\'actualLimit\']) {
    $properties[\'limit\'] = $properties[\'pageOneLimit\'];
}

if ($properties[\'cache\']) {
    $properties[\'cachePageKey\'] = $modx->resource->getCacheKey() . \'/\' . $properties[\'page\'] . \'/\' . md5(http_build_query($modx->request->getParameters()));
    $properties[\'cacheOptions\'] = array(
        xPDO::OPT_CACHE_KEY => $properties[xPDO::OPT_CACHE_KEY],
        xPDO::OPT_CACHE_HANDLER => $properties[xPDO::OPT_CACHE_HANDLER],
        xPDO::OPT_CACHE_EXPIRES => $properties[xPDO::OPT_CACHE_EXPIRES],
    );
}
$cached = false;
if ($properties[\'cache\']) {
    if ($modx->getCacheManager()) {
        $cached = $modx->cacheManager->get($properties[\'cachePageKey\'], $properties[\'cacheOptions\']);
    }
}
if (empty($cached) || !isset($cached[\'properties\']) || !isset($cached[\'output\'])) {
    $elementObj = $modx->getObject($properties[\'elementClass\'], array(\'name\' => $properties[\'element\']));
    if ($elementObj) {
        $elementObj->setCacheable(false);
        if (!empty($properties[\'toPlaceholder\'])) {
            $elementObj->process($properties);
            $output = $modx->getPlaceholder($properties[\'toPlaceholder\']);
        } else {
            $output = $elementObj->process($properties);
        }
    }

    include_once $modx->getOption(\'getpage.core_path\',$properties,$modx->getOption(\'core_path\', $properties, MODX_CORE_PATH) . \'components/getpage/\').\'include.getpage.php\';

    $qs = $modx->request->getParameters();
    $properties[\'qs\'] =& $qs;

    $totalSet = $modx->getPlaceholder($properties[\'totalVar\']);
    $properties[\'total\'] = (($totalSet = intval($totalSet)) ? $totalSet : $properties[\'total\']);
    if (!empty($properties[\'total\']) && !empty($properties[\'actualLimit\'])) {
        if ($properties[\'pageOneLimit\'] !== $properties[\'actualLimit\']) {
            $adjustedTotal = $properties[\'total\'] - $properties[\'pageOneLimit\'];
            $properties[\'pageCount\'] = $adjustedTotal > 0 ? ceil($adjustedTotal / $properties[\'actualLimit\']) + 1 : 1;
        } else {
            $properties[\'pageCount\'] = ceil($properties[\'total\'] / $properties[\'actualLimit\']);
        }
    } else {
        $properties[\'pageCount\'] = 1;
    }
    if (empty($properties[\'total\']) || empty($properties[\'actualLimit\']) || $properties[\'total\'] <= $properties[\'actualLimit\'] || ($properties[\'page\'] == 1 && $properties[\'total\'] <= $properties[\'pageOneLimit\'])) {
        $properties[\'page\'] = 1;
    } else {
        $pageNav = getpage_buildControls($modx, $properties);
        $properties[$properties[\'pageNavVar\']] = $modx->newObject(\'modChunk\')->process(array_merge($properties, $pageNav), $properties[\'pageNavOuterTpl\']);
        if ($properties[\'page\'] > 1) {
            $qs[$properties[\'pageVarKey\']] = $properties[\'page\'];
        }
    }
    
    $properties[\'firstItem\'] = $properties[\'offset\'] + 1;
    $properties[\'lastItem\'] = ($properties[\'offset\'] + $properties[\'limit\']) < $totalSet ? ($properties[\'offset\'] + $properties[\'limit\']) : $totalSet;

    $properties[\'pageUrl\'] = $modx->makeUrl($modx->resource->get(\'id\'), \'\', $qs);
    if ($properties[\'cache\'] && $modx->getCacheManager()) {
        $cached = array(\'properties\' => $properties, \'output\' => $output);
        $modx->cacheManager->set($properties[\'cachePageKey\'], $cached, $properties[xPDO::OPT_CACHE_EXPIRES], $properties[\'cacheOptions\']);
    }
} else {
    $properties = $cached[\'properties\'];
    $output = $cached[\'output\'];
}
$modx->setPlaceholders($properties, $properties[\'namespace\']);
if (!empty($properties[\'toPlaceholder\'])) {
    $modx->setPlaceholder($properties[\'toPlaceholder\'], $output);
    $output = \'\';
}

return $output;',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'tolinks' => 
      array (
        'fields' => 
        array (
          'id' => 20,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'tolinks',
          'description' => 'Builds links from tags.',
          'editor_type' => 0,
          'category' => 4,
          'cache_type' => 0,
          'snippet' => '/**
 * tagLister
 *
 * Copyright 2010 by Shaun McCormick <shaun@modxcms.com>
 *
 * This file is part of tagLister, a simple tag listing snippet for MODx
 * Revolution.
 *
 * tagLister is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * tagLister is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * tagLister; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package taglister
 */
/**
 * tolinks snippet. Creates links out of tags.
 *
 * @var modX $modx
 * @var tagLister $tagLister
 * @var array $scriptProperties
 * 
 * @package taglister
 */
$tagLister = $modx->getService(\'taglister\',\'TagLister\',$modx->getOption(\'taglister.core_path\',null,$modx->getOption(\'core_path\').\'components/taglister/\').\'model/taglister/\',$scriptProperties);
if (!($tagLister instanceof TagLister)) return \'\';

/* setup default properties */
$inputDelim = $modx->getOption(\'inputDelim\',$scriptProperties,\',\');
$outputDelim = $modx->getOption(\'outputDelim\',$scriptProperties,\', \');
$tagRequestParam = $modx->getOption(\'tagRequestParam\',$scriptProperties,\'tag\');
$tagKeyVar = $modx->getOption(\'tagKeyVar\',$scriptProperties,\'key\');
$tagKey = $modx->getOption(\'tagKey\',$scriptProperties,\'tags\');
$target = !empty($scriptProperties[\'target\']) ? $scriptProperties[\'target\'] : $modx->resource->get(\'id\');
$tpl = $modx->getOption(\'tpl\',$scriptProperties,\'link\');
$cls = $modx->getOption(\'cls\',$scriptProperties,\'tl-tag\');
$useTagsFurl = $modx->getOption(\'useTagsFurl\',$scriptProperties,false);

/* get items */
$items = $modx->getOption(\'items\',$scriptProperties,\'\');
if (empty($items)) return \'\';
$items = explode($inputDelim,$items);

/* if extra params, set em */
$extraParams = $modx->getOption(\'extraParams\',$scriptProperties,\'\');
if (!empty($extraParams)) {
    $extraParams = trim(trim(trim($extraParams,\'?\'),\'&\'),\'&amp;\');
    $eps= explode(\',\',$extraParams);
    $extraParams = array();
    foreach ($eps as $ep) {
        $ep = explode(\'=\',$ep);
        if (!empty($ep[1])) {
            $extraParams[$ep[0]] = $ep[1];
        }
    }
}

/* iterate */
$tags = array();
foreach ($items as $item) {
    $itemArray = array();
    $itemArray[\'item\'] = trim($item);
    $params = array();
    if (empty($useTagsFurl)) {
        $params = array(
            $tagRequestParam => $itemArray[\'item\'],
            $tagKeyVar => $tagKey,
        );
    }

    if (!empty($extraParams)) {
        $params = array_merge($extraParams,$params);
    }
    $itemArray[\'url\'] = $modx->makeUrl($target,\'\',$params);
    if (!empty($useTagsFurl)) {
         $itemArray[\'url\'] = rtrim($itemArray[\'url\'],\'/\').\'/\'.$tagKey.\'/\'.$itemArray[\'item\'];
    }
    $itemArray[\'url\'] = str_replace(\' \',\'+\',$itemArray[\'url\']);
    $itemArray[\'cls\'] = $cls;
    $tags[] = $tagLister->getChunk($tpl,$itemArray);
}

/* output */
$toPlaceholder = $modx->getOption(\'toPlaceholder\',$scriptProperties,false);
$output = trim(implode($outputDelim,$tags),$outputDelim);
if ($toPlaceholder) {
    $modx->setPlaceholder($toPlaceholder,$output);
    return \'\';
}
return $output;',
          'locked' => false,
          'properties' => 
          array (
            'items' => 
            array (
              'name' => 'items',
              'desc' => 'prop_tolinks.items_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The items to turn into links.',
              'area_trans' => '',
            ),
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'prop_tolinks.tpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'link',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Name of a Chunk that will be used for each result.',
              'area_trans' => '',
            ),
            'target' => 
            array (
              'name' => 'target',
              'desc' => 'prop_tolinks.target_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The ID of the Resource that links will point to. Defaults to the current Resource.',
              'area_trans' => '',
            ),
            'inputDelim' => 
            array (
              'name' => 'inputDelim',
              'desc' => 'prop_tolinks.inputdelim_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => ',',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The delimiter that is used on the items property. Defaults to a comma.',
              'area_trans' => '',
            ),
            'outputDelim' => 
            array (
              'name' => 'outputDelim',
              'desc' => 'prop_tolinks.outputdelim_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => ', ',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The delimiter that separates the links that are outputted. Defaults to a comma.',
              'area_trans' => '',
            ),
            'tagRequestParam' => 
            array (
              'name' => 'tagRequestParam',
              'desc' => 'prop_tolinks.tagrequestparam_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'tag',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The REQUEST var key that will be used in generating the links.',
              'area_trans' => '',
            ),
            'tagKeyVar' => 
            array (
              'name' => 'tagKeyVar',
              'desc' => 'prop_tolinks.tagkeyvar_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'key',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The REQUEST var of the tv name. Used in the links generated for each tag result',
              'area_trans' => '',
            ),
            'tagKey' => 
            array (
              'name' => 'tagKey',
              'desc' => 'prop_tolinks.tagkey_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'tags',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'The REQUEST var of the tag value. Used in the links generated for each tag result.',
              'area_trans' => '',
            ),
            'cls' => 
            array (
              'name' => 'cls',
              'desc' => 'prop_tolinks.cls_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'tl-tag',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'Name of a CSS class to add to each result.',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'prop_tolinks.toplaceholder_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'taglister:properties',
              'area' => '',
              'desc_trans' => 'If set, will set the output of this snippet to this placeholder rather than output it.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * tagLister
 *
 * Copyright 2010 by Shaun McCormick <shaun@modxcms.com>
 *
 * This file is part of tagLister, a simple tag listing snippet for MODx
 * Revolution.
 *
 * tagLister is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * tagLister is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * tagLister; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package taglister
 */
/**
 * tolinks snippet. Creates links out of tags.
 *
 * @var modX $modx
 * @var tagLister $tagLister
 * @var array $scriptProperties
 * 
 * @package taglister
 */
$tagLister = $modx->getService(\'taglister\',\'TagLister\',$modx->getOption(\'taglister.core_path\',null,$modx->getOption(\'core_path\').\'components/taglister/\').\'model/taglister/\',$scriptProperties);
if (!($tagLister instanceof TagLister)) return \'\';

/* setup default properties */
$inputDelim = $modx->getOption(\'inputDelim\',$scriptProperties,\',\');
$outputDelim = $modx->getOption(\'outputDelim\',$scriptProperties,\', \');
$tagRequestParam = $modx->getOption(\'tagRequestParam\',$scriptProperties,\'tag\');
$tagKeyVar = $modx->getOption(\'tagKeyVar\',$scriptProperties,\'key\');
$tagKey = $modx->getOption(\'tagKey\',$scriptProperties,\'tags\');
$target = !empty($scriptProperties[\'target\']) ? $scriptProperties[\'target\'] : $modx->resource->get(\'id\');
$tpl = $modx->getOption(\'tpl\',$scriptProperties,\'link\');
$cls = $modx->getOption(\'cls\',$scriptProperties,\'tl-tag\');
$useTagsFurl = $modx->getOption(\'useTagsFurl\',$scriptProperties,false);

/* get items */
$items = $modx->getOption(\'items\',$scriptProperties,\'\');
if (empty($items)) return \'\';
$items = explode($inputDelim,$items);

/* if extra params, set em */
$extraParams = $modx->getOption(\'extraParams\',$scriptProperties,\'\');
if (!empty($extraParams)) {
    $extraParams = trim(trim(trim($extraParams,\'?\'),\'&\'),\'&amp;\');
    $eps= explode(\',\',$extraParams);
    $extraParams = array();
    foreach ($eps as $ep) {
        $ep = explode(\'=\',$ep);
        if (!empty($ep[1])) {
            $extraParams[$ep[0]] = $ep[1];
        }
    }
}

/* iterate */
$tags = array();
foreach ($items as $item) {
    $itemArray = array();
    $itemArray[\'item\'] = trim($item);
    $params = array();
    if (empty($useTagsFurl)) {
        $params = array(
            $tagRequestParam => $itemArray[\'item\'],
            $tagKeyVar => $tagKey,
        );
    }

    if (!empty($extraParams)) {
        $params = array_merge($extraParams,$params);
    }
    $itemArray[\'url\'] = $modx->makeUrl($target,\'\',$params);
    if (!empty($useTagsFurl)) {
         $itemArray[\'url\'] = rtrim($itemArray[\'url\'],\'/\').\'/\'.$tagKey.\'/\'.$itemArray[\'item\'];
    }
    $itemArray[\'url\'] = str_replace(\' \',\'+\',$itemArray[\'url\']);
    $itemArray[\'cls\'] = $cls;
    $tags[] = $tagLister->getChunk($tpl,$itemArray);
}

/* output */
$toPlaceholder = $modx->getOption(\'toPlaceholder\',$scriptProperties,false);
$output = trim(implode($outputDelim,$tags),$outputDelim);
if ($toPlaceholder) {
    $modx->setPlaceholder($toPlaceholder,$output);
    return \'\';
}
return $output;',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'QuipCount' => 
      array (
        'fields' => 
        array (
          'id' => 15,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'QuipCount',
          'description' => 'An assistance snippet for getting thread/user comment counts.',
          'editor_type' => 0,
          'category' => 3,
          'cache_type' => 0,
          'snippet' => '/**
 * Quip
 *
 * Copyright 2010-11 by Shaun McCormick <shaun@modx.com>
 *
 * This file is part of Quip, a simple commenting component for MODx Revolution.
 *
 * Quip is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Quip is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Quip; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package quip
 */
/**
 * QuipCount
 *
 * Gets the total # of comments in a thread or by a user.
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var Quip $quip
 *
 * @name QuipCount
 * @author Shaun McCormick <shaun@modx.com>
 * @package quip
 */
$quip = $modx->getService(\'quip\',\'Quip\',$modx->getOption(\'quip.core_path\',null,$modx->getOption(\'core_path\').\'components/quip/\').\'model/quip/\',$scriptProperties);
if (!($quip instanceof Quip)) return \'\';
$quip->initialize($modx->context->get(\'key\'));
$controller = $quip->loadController(\'ThreadCount\');
$output = $controller->run($scriptProperties);
return $output;',
          'locked' => false,
          'properties' => 
          array (
            'type' => 
            array (
              'name' => 'type',
              'desc' => 'quip.prop_count_type_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'quip.thread',
                  'value' => 'thread',
                  'name' => 'Thread',
                ),
                1 => 
                array (
                  'text' => 'quip.user',
                  'value' => 'user',
                  'name' => 'User',
                ),
                2 => 
                array (
                  'text' => 'quip.family',
                  'value' => 'family',
                  'name' => 'Family',
                ),
              ),
              'value' => 'thread',
              'lexicon' => 'quip:properties',
              'area' => '',
              'desc_trans' => 'If contains `thread`, will count the # of comments in a thread. If contains `user`, will grab # of total comments by a User. Supports a comma-delimited list of types.',
              'area_trans' => '',
            ),
            'thread' => 
            array (
              'name' => 'thread',
              'desc' => 'quip.prop_count_thread_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'quip:properties',
              'area' => '',
              'desc_trans' => 'The thread ID to pull from. Only if type contains `thread`.',
              'area_trans' => '',
            ),
            'user' => 
            array (
              'name' => 'user',
              'desc' => 'quip.prop_count_user_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'quip:properties',
              'area' => '',
              'desc_trans' => 'The User ID or username to pull from. Only if type contains `user`.',
              'area_trans' => '',
            ),
            'family' => 
            array (
              'name' => 'family',
              'desc' => 'quip.prop_count_family_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'quip:properties',
              'area' => '',
              'desc_trans' => 'The family of threads to pull from. Only if type contains `family`.',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'quip.prop_count_toplaceholder_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'quip:properties',
              'area' => '',
              'desc_trans' => 'If set, will output the content to the placeholder specified in this property, rather than outputting the content directly.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * Quip
 *
 * Copyright 2010-11 by Shaun McCormick <shaun@modx.com>
 *
 * This file is part of Quip, a simple commenting component for MODx Revolution.
 *
 * Quip is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Quip is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Quip; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package quip
 */
/**
 * QuipCount
 *
 * Gets the total # of comments in a thread or by a user.
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @var Quip $quip
 *
 * @name QuipCount
 * @author Shaun McCormick <shaun@modx.com>
 * @package quip
 */
$quip = $modx->getService(\'quip\',\'Quip\',$modx->getOption(\'quip.core_path\',null,$modx->getOption(\'core_path\').\'components/quip/\').\'model/quip/\',$scriptProperties);
if (!($quip instanceof Quip)) return \'\';
$quip->initialize($modx->context->get(\'key\'));
$controller = $quip->loadController(\'ThreadCount\');
$output = $controller->run($scriptProperties);
return $output;',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);