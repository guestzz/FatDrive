<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mdui@1.0.0/dist/css/mdui.min.css" integrity="sha384-2PJ2u4NYg6jCNNpv3i1hK9AoAqODy6CdiC+gYiL2DVx+ku5wzJMFNdE3RoWfBIRP" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="https://cdn.bootcss.com/dplayer/1.25.0/DPlayer.min.css">
  <link rel="stylesheet" type="text/css" href="static/css/prism.css">
  <script type="text/javascript" src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.staticfile.org/plupload/2.1.9/plupload.full.min.js"></script>
</head>




<body class="mdui-drawer-body-left mdui-appbar-with-toolbar  mdui-theme-primary-indigo mdui-theme-accent-pink mdui-theme-layout-auto">
  <header class="mdui-appbar mdui-appbar-fixed">
    <div class="mdui-toolbar mdui-color-theme">
      <span class="mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white" mdui-drawer="{target: '#main-drawer', swipe: true}"><i class="mdui-icon material-icons">menu</i></span>
      <a href="./" class="mdui-typo-headline mdui-hidden-xs">肥仔之家</a>
      <a href="./" class="mdui-typo-title">网盘</a>
      <div class="mdui-toolbar-spacer"></div>
      <a href="https://github.com/QWERTYisme" target="_blank" class="mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white" mdui-tooltip="{content: '查看 Github'}">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36 36" enable-background="new 0 0 36 36" xml:space="preserve" class="mdui-icon" style="width: 24px;height:24px;">
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#ffffff" d="M18,1.4C9,1.4,1.7,8.7,1.7,17.7c0,7.2,4.7,13.3,11.1,15.5
	c0.8,0.1,1.1-0.4,1.1-0.8c0-0.4,0-1.4,0-2.8c-4.5,1-5.5-2.2-5.5-2.2c-0.7-1.9-1.8-2.4-1.8-2.4c-1.5-1,0.1-1,0.1-1
	c1.6,0.1,2.5,1.7,2.5,1.7c1.5,2.5,3.8,1.8,4.7,1.4c0.1-1.1,0.6-1.8,1-2.2c-3.6-0.4-7.4-1.8-7.4-8.1c0-1.8,0.6-3.2,1.7-4.4
	c-0.2-0.4-0.7-2.1,0.2-4.3c0,0,1.4-0.4,4.5,1.7c1.3-0.4,2.7-0.5,4.1-0.5c1.4,0,2.8,0.2,4.1,0.5c3.1-2.1,4.5-1.7,4.5-1.7
	c0.9,2.2,0.3,3.9,0.2,4.3c1,1.1,1.7,2.6,1.7,4.4c0,6.3-3.8,7.6-7.4,8c0.6,0.5,1.1,1.5,1.1,3c0,2.2,0,3.9,0,4.5
	c0,0.4,0.3,0.9,1.1,0.8c6.5-2.2,11.1-8.3,11.1-15.5C34.3,8.7,27,1.4,18,1.4z"></path>
        </svg>
      </a>
    </div>
  </header>
  <!-- 默认抽屉栏在左侧 -->
  <div class="mdui-drawer" id="main-drawer">
    <div class="mdui-list" style="margin-bottom: 76px;">

      <a href="./index.php" class="mdui-list-item mdui-ripple">
        <i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-blue">assignment</i>
        <div class="mdui-list-item-content">简介</div>
      </a>
      <a href="./storage.php" class="mdui-list-item mdui-list-item-active mdui-ripple">
        <i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-amber">folder_open</i>
        <div class="mdui-list-item-content">所有文件</div>
      </a>
      <a href="./video.php" class="mdui-list-item mdui-ripple"><i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-indigo">video_library</i>
        <div class="mdui-list-item-content">
          视频
        </div>
      </a>
      <a href="./music.php" class="mdui-list-item mdui-ripple"><i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-cyan">library_music</i>
        <div class="mdui-list-item-content">
          音频
        </div>
      </a>
      <a href="./image.php" class="mdui-list-item mdui-ripple"><i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-pink">photo_library</i>
        <div class="mdui-list-item-content">
          图片
        </div>
      </a>
      <a href="./doc.php" class="mdui-list-item mdui-ripple"><i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-orange">library_books</i>
        <div class="mdui-list-item-content">
          文档
        </div>
      </a>
    </div>

  </div>
  <div class="mdui-container" style="margin-top: 16px;">
    <div id="page-index">

      <div id="topbar">

        <button style="position: relative;overflow: inherit;" class="mdui-btn mdui-btn mdui-ripple mdui-color-theme mdui-btn-dense" mdui-dialog="{target: '#upload_queue'}"><i class="mdui-icon material-icons">file_upload</i>上传<span class="tag_num"></span></button>
        <div class="mdui-textfield mdui-textfield-expandable mdui-float-right">
          <button class="mdui-textfield-icon mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">search</i></button>
          <input class="mdui-textfield-input" type="text" placeholder="Search" />
          <button class="mdui-textfield-close mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">close</i></button>
        </div>



      </div>
      <div id="file-list" partent_dir_key="0">

        <ul class="mdui-list">

        </ul>
      </div>
    </div>
    <!-- 扩展 -->


    <ul id="file-item-menu" class="mdui-menu">
      <li id="open_file" class="mdui-menu-item">
        <a href="javascript:;" class="mdui-ripple"><i class="mdui-icon material-icons">open_in_new</i> 打开</a>
      </li>
      <li class="mdui-divider"></li>
      <li id="download_file" class="mdui-menu-item">
        <a href="javascript:;" class="mdui-ripple"><i class="mdui-icon material-icons">file_download</i> 下载</a>
      </li>

      <li id="rename_file" class="mdui-menu-item">
        <a href="javascript:;" class="mdui-ripple"><i class="mdui-icon material-icons">border_color</i> 重命名</a>
      </li>

      <li id="delete_file" class="mdui-menu-item">
        <a href="javascript:;" class="mdui-ripple"><i class="mdui-icon material-icons">delete</i> 删除</a>
      </li>

    </ul>

    <!-- 透明遮罩 -->
    <div id="cover_o" style="width: 100%;min-height: 100%;position: absolute;z-index: 9999;top:0px;display: none;left: 0px;"></div>




    <!-- 文件上传队列 -->

    <div class="mdui-dialog" id="upload_queue">
      <div style="color: #fff;background-color: #3f51b5;height: 50px;width: 100%;padding-top: 1px;position: relative;">
        <h4 style="padding-left: 20px;line-height: 12px;">文件上传</h4>
        <button class="mdui-btn mdui-btn-icon" style="position: absolute;float: right;top: 8px;right: 20px;">
          <input id="select_file_btn" style="position: relative;z-index: 999;opacity: 0;width: 100%" type="file" name="file">
          <i class="mdui-icon material-icons">add</i>
        </button>
      </div>

      <ul class="mdui-list" style="height: 250px;overflow-y: overlay;margin-top: -8px;">
        <!--  -->
      </ul>
    </div>

    <!-- 视频预览 -->
    <div id="video" class="mdui-shadow-5">
      <div id="dplayer"></div>
    </div>

    <!-- 文件下载(在当前页面) -->
    <iframe id="download-file" src="" style="display: none"></iframe>

    <!-- 文档预览 -->
    <div id="view_txt">
      <pre class="line-numbers"><code class="language-php"></code></pre>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/mdui@1.0.0/dist/js/mdui.min.js" integrity="sha384-aB8rnkAu/GBsQ1q6dwTySnlrrbhqDwrDnpVHR2Wgm8pWLbwUnzDcIROX3VvCbaK+" crossorigin="anonymous"></script>
</body>

<script type="text/javascript" src="https://cdn.bootcss.com/dplayer/1.25.0/DPlayer.min.js"></script>
<script type="text/javascript" src="./static/js/getfilelist.js"></script>
<script type="text/javascript" src="./static/js/checkfile.js"></script>
<script type="text/javascript" src="./static/js/menu.js"></script>
<script type="text/javascript" src="./static/js/upload.js"></script>