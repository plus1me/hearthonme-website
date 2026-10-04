<!DOCTYPE html>
<html lang="en" data-wf-page="6723f82a39dbcaee295ddcac" data-wf-site="6723f82a39dbcaee295ddc93">
<?php
  $GLOBALS['cid'] = '1';
  get_header();
?>

<style>
  :root {
    --pink:      #fd6579;
    --pink-light:#ff8fa0;
    --bg:        #f3f2f8;
    --text-dark: #1f1730;
    --text-mid:  #6c6778;
    --text-light:#a09aaa;
    --grad:      linear-gradient(135deg,#fd6579 0%,#ff8fa0 100%);
    --shadow:    0 4px 20px rgba(253,101,121,.14);
    --r:         14px;
  }
  *,*::before,*::after{box-sizing:border-box;margin:0;padding:0;}
  body{font-family:'Plus Jakarta Sans','Inter',sans-serif;background:var(--bg);color:var(--text-dark);}
  @keyframes pulse{0%,100%{opacity:1;transform:scale(1)}50%{opacity:.5;transform:scale(1.3)}}
  @keyframes floatY{0%,100%{transform:translateY(0)}50%{transform:translateY(-12px)}}

  /* HOME LAYOUT */
  html,body{height:100%;overflow:hidden;}
  .home-wrap{
    height:calc(100vh - 44px);
    display:flex;flex-direction:row;align-items:center;
    padding:0 5%;gap:32px;background:var(--bg);
    overflow:hidden;
  }
  .hero-content{flex:1;max-width:480px;}
  .hero-badge{
    display:inline-flex;align-items:center;gap:7px;
    background:rgba(253,101,121,.08);border:1px solid rgba(253,101,121,.2);
    padding:5px 12px;border-radius:50px;font-size:.74rem;font-weight:600;color:var(--pink);margin-bottom:12px;
  }
  .dot{width:6px;height:6px;border-radius:50%;background:var(--pink);animation:pulse 1.5s infinite;flex-shrink:0;display:inline-block;}
  h1{font-size:clamp(1.6rem,3.2vw,2.6rem);font-weight:900;line-height:1.1;letter-spacing:-1.2px;margin-bottom:10px;}
  h1 .hl{background:var(--grad);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;}
  .hero-sub{font-size:.88rem;line-height:1.6;color:var(--text-mid);margin-bottom:18px;max-width:380px;}
  .btn-primary{
    display:inline-flex;align-items:center;gap:7px;
    background:var(--grad);color:#fff;padding:11px 24px;border-radius:50px;
    font-weight:700;font-size:.88rem;border:none;cursor:pointer;font-family:inherit;
    box-shadow:0 6px 22px rgba(253,101,121,.38);transition:transform .2s,box-shadow .2s;
    text-decoration:none;
  }
  .btn-primary:hover{transform:translateY(-2px);box-shadow:0 10px 30px rgba(253,101,121,.48);}

  /* HERO VISUAL */
  .hero-visual{flex:1;display:flex;justify-content:flex-end;align-items:center;position:relative;height:100%;}
  .hero-img{max-height:85vh;max-width:100%;object-fit:contain;display:block;}
  .hero-emoji{position:absolute;top:8%;left:0;width:64px;animation:floatY 3s ease-in-out infinite;}
  .hero-bell{position:absolute;bottom:12%;right:0;width:50px;animation:floatY 3.5s ease-in-out infinite reverse;}

  /* FOOTER */
  .page-footer{
    text-align:center;font-size:.74rem;color:var(--text-light);
    padding:8px 5%;border-top:1px solid rgba(253,101,121,.07);background:var(--bg);
  }
  .page-footer a{color:var(--pink);text-decoration:none;}

  @media(max-width:780px){
    .home-wrap{flex-direction:column;justify-content:center;text-align:center;padding:20px 5%;gap:16px;}
    .hero-sub{margin:0 auto 14px;}
    .hero-visual{justify-content:center;height:auto;}
    .hero-img{max-height:40vh;}
    .hero-emoji{width:44px;}
    .hero-bell{width:36px;}
  }
</style>

<body class="body">
  <div class="home-wrap">
    <div class="hero-content">
      <div class="hero-badge"><span class="dot"></span> Start Your Journey to Love</div>
      <h1>Find your perfect match. <span class="hl">Start love story today.</span></h1>
      <p class="hero-sub">Get started today and embark on your journey to love and happiness.</p>
      <a href="#" class="btn-primary">Coming Soon</a>
    </div>
    <div class="hero-visual">
      <img class="hero-emoji" src="<?php echo get_template_directory_uri(); ?>/images/hero-emoji-chat.png" loading="lazy" alt="" />
      <img class="hero-img" src="<?php echo get_template_directory_uri(); ?>/images/hero-main-image.png" loading="lazy" alt="Plus1me App" />
      <img class="hero-bell" src="<?php echo get_template_directory_uri(); ?>/images/hero-bell.png" loading="lazy" alt="" />
    </div>
  </div>
  <div class="page-footer">© 2026 Plus1me. All Rights Reserved.</div>
</body>

<footer>
  <?php wp_footer(); ?>
</footer>
</html>
