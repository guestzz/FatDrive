<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mdui@1.0.0/dist/css/mdui.min.css" integrity="sha384-2PJ2u4NYg6jCNNpv3i1hK9AoAqODy6CdiC+gYiL2DVx+ku5wzJMFNdE3RoWfBIRP" crossorigin="anonymous" />
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

      <a href="./index.php" class="mdui-list-item mdui-list-item-active mdui-ripple">
        <i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-blue">assignment</i>
        <div class="mdui-list-item-content">简介</div>
      </a>
      <a href="./storage.php" class="mdui-list-item mdui-ripple">
        <i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-amber">folder</i>
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
    <ul class="mdui-list">
      <li class="mdui-list-item mdui-ripple">
        <div class="mdui-list-item-avatar"><img src="./static/img/wjh.png" /></div>
        <div class="mdui-list-item-content">王家和</div>
      </li>
      <li class="mdui-list-item mdui-ripple">
        <div class="mdui-list-item-avatar"><img src="./static/img/stf.jpg" /></div>
        <div class="mdui-list-item-content">沈天赋</div>
      </li>
      <li class="mdui-list-item mdui-ripple">
        <div class="mdui-list-item-avatar"><img src="./static/img/wb.jpg" /></div>
        <div class="mdui-list-item-content">吴波</div>
      </li>
      <li class="mdui-list-item mdui-ripple">
        <div class="mdui-list-item-avatar"><img src="./static/img/myh.jpg" /></div>
        <div class="mdui-list-item-content">梅逸豪</div>
      </li>
      <li class="mdui-list-item mdui-ripple">
        <div class="mdui-list-item-avatar"><img src="./static/img/pjl.jpg" /></div>
        <div class="mdui-list-item-content">潘俊霖</div>
      </li>
      <li class="mdui-list-item mdui-ripple">
        <div class="mdui-list-item-avatar"><img src="./static/img/szs.jpg" /></div>
        <div class="mdui-list-item-content">舒忠山</div>
      </li>
      <li class="mdui-list-item mdui-ripple">
        <div class="mdui-list-item-avatar"><img src="./static/img/shc.jpg" /></div>
        <div class="mdui-list-item-content">宋赫淳</div>
      </li>
    </ul>
  </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/mdui@1.0.0/dist/js/mdui.min.js" integrity="sha384-aB8rnkAu/GBsQ1q6dwTySnlrrbhqDwrDnpVHR2Wgm8pWLbwUnzDcIROX3VvCbaK+" crossorigin="anonymous"></script>