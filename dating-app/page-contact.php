<!DOCTYPE html>
<html lang="en" data-wf-page="6723f82a39dbcaee295ddcac" data-wf-site="6723f82a39dbcaee295ddc93" data-wf-status="1">
<?php
  $GLOBALS['cid'] = '3';
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
    --r:         14px;
  }
  *,*::before,*::after{box-sizing:border-box;margin:0;padding:0;}
  body{font-family:'Plus Jakarta Sans','Inter',sans-serif!important;background:var(--bg)!important;color:var(--text-dark)!important;}

  .contact-page{
    padding:120px 5% 60px!important;
    max-width:600px!important;margin:0 auto!important;width:100%!important;
    display:flex!important;flex-direction:column!important;align-items:center!important;gap:20px!important;
    text-align:center!important;
  }
  .contact-title{
    font-size:clamp(1.8rem,4vw,2.6rem)!important;
    font-weight:800!important;letter-spacing:-1px!important;color:var(--text-dark)!important;
  }
  .contact-title span{
    background:var(--grad)!important;
    -webkit-background-clip:text!important;-webkit-text-fill-color:transparent!important;background-clip:text!important;
  }
  .contact-sub{
    font-size:.95rem!important;color:var(--text-mid)!important;line-height:1.7!important;max-width:460px!important;
  }
  .contact-emoji{
    width:120px!important;height:120px!important;object-fit:contain!important;margin:8px 0!important;
  }
  .page-footer{
    text-align:center!important;font-size:.78rem!important;color:var(--text-light)!important;
    padding:16px 5%!important;border-top:1px solid rgba(253,101,121,.07)!important;
    background:var(--bg)!important;margin-top:16px!important;
  }
</style>

<body class="body">
  <div class="contact-page">
    <h2 class="contact-title">Your feedback Is <span>important to us!</span></h2>
    <p class="contact-sub">We're here to help! If you have questions, feedback, or need assistance, reach out to us. Our support team is ready to make your experience seamless.</p>
    <img class="contact-emoji" src="<?php echo get_template_directory_uri(); ?>/images/contact-emoji.svg" loading="lazy" alt="" />
  </div>

  <div class="page-footer">© 2026 Plus1me. All Rights Reserved.</div>
</body>
<footer><?php wp_footer(); ?></footer>
</html>
