<?php  return array (
  'properties' => 
  array (
    'namespace' => '',
    'limit' => 10,
    'offset' => 0,
    'page' => 1,
    'pageVarKey' => 'page',
    'totalVar' => 'total',
    'pageLimit' => 5,
    'elementClass' => 'modSnippet',
    'pageNavVar' => 'page.nav',
    'pageNavTpl' => '<li[[+classes]]><a[[+classes]][[+title]] href="[[+href]]">[[+pageNo]]</a></li>',
    'pageNavOuterTpl' => '[[+first]][[+prev]][[+pages]][[+next]][[+last]]',
    'pageActiveTpl' => '<li[[+activeClasses]]><a class="active"[[+title]] href="[[+href]]">[[+pageNo]]</a></li>',
    'pageFirstTpl' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">First</a></li>',
    'pageLastTpl' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">Last</a></li>',
    'pagePrevTpl' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&lt;&lt;</a></li>',
    'pageNextTpl' => '<li class="control"><a[[+classes]][[+title]] href="[[+href]]">&gt;&gt;</a></li>',
    'cache' => true,
    'cache_key' => 'resource',
    'cache_handler' => 'xPDOFileCache',
    'cache_expires' => 0,
    'pageNavScheme' => '',
    'element' => 'getArchives',
    'makeArchive' => '0',
    'parents' => '2',
    'where' => '{"class_key":"Article"}',
    'showHidden' => '1',
    'includeContent' => '1',
    'includeTVs' => '1',
    'includeTVsList' => '',
    'processTVs' => '0',
    'processTVsList' => '',
    'tagKey' => 'articlestags',
    'tagSearchType' => 'contains',
    'sortby' => 'publishedon',
    'sortdir' => 'DESC',
    'tpl' => 'sample.ArticleRowTpl',
    'total' => 1,
    'pageOneLimit' => 10,
    'actualLimit' => 10,
    'toPlaceholder' => '',
    'cachePageKey' => 'web/resources/2/1/d41d8cd98f00b204e9800998ecf8427e',
    'cacheOptions' => 
    array (
      'cache_key' => 'resource',
      'cache_handler' => 'xPDOFileCache',
      'cache_expires' => 0,
    ),
    'qs' => 
    array (
    ),
    'pageCount' => 1,
    'firstItem' => 1,
    'lastItem' => 1,
    'pageUrl' => 'blog/',
  ),
  'output' => '<div class="post">
    <h2 class="title"><a href="blog/2014/08/09/blog/">Blog</a></h2>
    <p class="post-info">Posted by <a href="blog/author/admin">admin</a> </p>
    <div class="entry">
	    <p>Test summary</p>
    </div>
    <p class="postmeta">
      <span class="links">
        <a href="blog/2014/08/09/blog/" class="readmore">Read more</a>
        | <a href="blog/2014/08/09/blog/#comments" class="comments">Comments (0)</a>
        | <span class="date">Aug 09, 2014</span>
      </span>
    </p>
</div>',
);