<head>
  <?php
  wp_head();
  ?>
  <meta charset="utf-8" />
  <title>Dating App</title>
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <meta content="Webflow" name="generator" />
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous" />
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({ google: { families: ["Plus Jakarta Sans:500,600,700"] } });</script>
  <script
    type="text/javascript">!function (o, c) { var n = c.documentElement, t = " w-mod-"; n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch") }(window, document);</script>
  <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon" />
  <link href="images/app-icon.png" rel="apple-touch-icon" />
  <style>
    :root{--pink:#fd6579;--pink-light:#ff8fa0;--bg:#f3f2f8;--text-dark:#1f1730;--text-mid:#6c6778;--grad:linear-gradient(135deg,#fd6579 0%,#ff8fa0 100%);}
    /* Navbar */
    .navbar.w-nav{background:#fff!important;box-shadow:0 2px 16px rgba(253,101,121,.07)!important;border-bottom:1px solid rgba(253,101,121,.09)!important;font-family:'Plus Jakarta Sans','Inter',sans-serif!important;}
    /* Brand */
    .brand{text-decoration:none!important;display:flex!important;align-items:center!important;}
    .brand-text{font-size:1.35rem!important;font-weight:800!important;background:var(--grad)!important;-webkit-background-clip:text!important;-webkit-text-fill-color:transparent!important;background-clip:text!important;letter-spacing:-.5px!important;}
    /* Nav links */
    .w-nav-link{font-family:'Plus Jakarta Sans','Inter',sans-serif!important;font-weight:500!important;font-size:.88rem!important;color:var(--text-mid)!important;padding:7px 13px!important;border-radius:8px!important;transition:color .2s,background .2s!important;}
    .w-nav-link:hover,.w-nav-link.w--current,.w-nav-link.active{color:var(--pink)!important;background:rgba(253,101,121,.06)!important;}
    /* Coming Soon button */
    .button.w-button{background:var(--grad)!important;color:#fff!important;border-radius:50px!important;font-weight:700!important;font-size:.88rem!important;padding:9px 20px!important;box-shadow:0 3px 14px rgba(253,101,121,.35)!important;border:none!important;}
    /* Hide Webflow badge */
    .w-webflow-badge{display:none!important;visibility:hidden!important;}
  </style>
  <script>
    document.addEventListener('DOMContentLoaded',function(){
      var b=document.querySelector('.w-webflow-badge');if(b)b.remove();
    });
    new MutationObserver(function(){
      var b=document.querySelector('.w-webflow-badge');if(b)b.remove();
    }).observe(document.documentElement,{childList:true,subtree:true});
  </script>
</head>
 <div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease"
  role="banner" class="navbar w-nav">
  <div class="container w-container">
    <nav role="navigation" class="nav-menu w-nav-menu">
			<a id="Home" href="home" class="nav-link w-nav-link <?php echo ( $foo = $GLOBALS['cid'] == 1 ) ? 'active' : '' ?>">Home</a>
			<a href="about" class="nav-link-2 w-nav-link <?php echo ( $foo = $GLOBALS['cid'] == 2 ) ? 'active' : '' ?>">About</a>
      <a href="contact" class="nav-link-3 w-nav-link <?php echo ( $foo = $GLOBALS['cid'] == 3 ) ? 'active' : '' ?>">Contact</a>
			<a href="help" class="nav-link-4 w-nav-link <?php echo ( $foo = $GLOBALS['cid'] == 4 ) ? 'active' : '' ?>">Help</a>
			<a href="age-policy" class="nav-link-5 w-nav-link <?php echo ( $foo = $GLOBALS['cid'] == 5 ) ? 'active' : '' ?>">Age Policy</a>
			<a href="#" class="button w-button">Coming Soon ✨</a>
		</nav>
    <div class="menu-button w-nav-button">
      <div class="icon-2 w-icon-nav-menu"></div>
    </div>
  </div>
</div>

