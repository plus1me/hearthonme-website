<!DOCTYPE html>
<html lang="en" data-wf-page="6723f82a39dbcaee295ddcac" data-wf-site="6723f82a39dbcaee295ddc93" data-wf-status="1">
<?php
  $GLOBALS['cid'] = '4';
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

  .faq-page{
    padding:120px 5% 60px!important;
    max-width:760px!important;margin:0 auto!important;width:100%!important;
    display:flex!important;flex-direction:column!important;gap:16px!important;
  }

  /* Title */
  .faq-title{
    text-align:center!important;
    font-size:clamp(1.8rem,4vw,2.6rem)!important;
    font-weight:800!important;letter-spacing:-1px!important;
    margin-bottom:8px!important;color:var(--text-dark)!important;
  }
  .faq-title span{
    background:var(--grad)!important;
    -webkit-background-clip:text!important;-webkit-text-fill-color:transparent!important;background-clip:text!important;
  }

  /* FAQ items */
  .faq-item{
    background:#fff!important;
    border-radius:var(--r)!important;
    overflow:hidden!important;
    box-shadow:0 2px 12px rgba(0,0,0,.06)!important;
    border:1.5px solid rgba(0,0,0,.08)!important;
    transition:border-color .3s!important;
  }
  .faq-item:hover{border-color:rgba(253,101,121,.3)!important;}
  .faq-item.open{border-color:var(--pink)!important;box-shadow:0 4px 20px rgba(253,101,121,.15)!important;}
  .faq-q{
    display:flex!important;align-items:center!important;justify-content:space-between!important;
    padding:18px 22px!important;cursor:pointer!important;gap:16px!important;user-select:none!important;
  }
  .faq-q h3{
    font-size:.95rem!important;font-weight:700!important;color:var(--text-dark)!important;flex:1!important;
    margin:0!important;padding:0!important;
  }
  .faq-toggle{
    width:32px!important;height:32px!important;border-radius:50%!important;flex-shrink:0!important;
    background:var(--grad)!important;color:#fff!important;
    display:flex!important;align-items:center!important;justify-content:center!important;
    font-size:1.1rem!important;font-weight:700!important;line-height:1!important;
    transition:transform .3s!important;
  }
  .faq-item.open .faq-toggle{transform:rotate(45deg)!important;}
  .faq-a{
    max-height:0!important;overflow:hidden!important;
    transition:max-height .3s ease,padding .3s!important;
    font-size:.9rem!important;color:var(--text-mid)!important;line-height:1.7!important;
    padding:0 22px!important;background:#fff!important;
  }
  .faq-item.open .faq-a{max-height:200px!important;padding:0 22px 18px!important;}

  /* Footer */
  .page-footer{
    text-align:center!important;font-size:.78rem!important;color:var(--text-light)!important;
    padding:16px 5%!important;border-top:1px solid rgba(253,101,121,.07)!important;
    background:var(--bg)!important;margin-top:16px!important;
  }
</style>

<body class="body">
  <div class="faq-page">
    <h2 class="faq-title">Frequently Asked <span>Questions</span></h2>

    <div class="faq-item">
      <div class="faq-q" onclick="toggleFaq(this)">
        <h3>Is Plus1me free to use?</h3>
        <span class="faq-toggle">+</span>
      </div>
      <div class="faq-a">Yes, you can use the app for free. We also offer premium features to enhance your experience.</div>
    </div>

    <div class="faq-item">
      <div class="faq-q" onclick="toggleFaq(this)">
        <h3>How does the matchmaking algorithm work?</h3>
        <span class="faq-toggle">+</span>
      </div>
      <div class="faq-a">Our algorithm considers your preferences, interests, and interactions to suggest matches who share your values.</div>
    </div>

    <div class="faq-item">
      <div class="faq-q" onclick="toggleFaq(this)">
        <h3>How does the app ensure privacy and safety?</h3>
        <span class="faq-toggle">+</span>
      </div>
      <div class="faq-a">We use secure technology and offer privacy controls, including profile visibility settings and identity verification.</div>
    </div>

    <div class="faq-item">
      <div class="faq-q" onclick="toggleFaq(this)">
        <h3>Can I use the app internationally?</h3>
        <span class="faq-toggle">+</span>
      </div>
      <div class="faq-a">Yes, Plus1me is available in multiple regions, so you can connect with people wherever you go.</div>
    </div>

    <div class="faq-item">
      <div class="faq-q" onclick="toggleFaq(this)">
        <h3>How do I report inappropriate behavior?</h3>
        <span class="faq-toggle">+</span>
      </div>
      <div class="faq-a">We take safety seriously — simply report any inappropriate behavior through the app, and our team will address it promptly.</div>
    </div>
  </div>

  <div class="page-footer">© 2026 Plus1me. All Rights Reserved.</div>

  <script>
    function toggleFaq(el) {
      el.parentElement.classList.toggle('open');
      el.querySelector('.faq-toggle').textContent = el.parentElement.classList.contains('open') ? '×' : '+';
    }
  </script>
</body>
<footer>
  <?php wp_footer(); ?>
</footer>
</html>
