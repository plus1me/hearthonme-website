<!DOCTYPE html>
<html lang="en" data-wf-page="672c9cc70d513a6484baa540" data-wf-site="6723f82a39dbcaee295ddc93" data-wf-status="1">
<?php
  $GLOBALS['cid'] = '2';
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
  body{font-family:'Plus Jakarta Sans','Inter',sans-serif!important;background:var(--bg)!important;color:var(--text-dark)!important;}

  .about-page{
    padding:90px 5% 40px!important;
    display:flex!important;flex-direction:column!important;gap:32px!important;
    max-width:1000px!important;margin:0 auto!important;width:100%!important;
  }
  .about-top{text-align:center!important;}
  .about-top h2{font-size:clamp(1.5rem,3vw,2.2rem)!important;font-weight:800!important;letter-spacing:-1px!important;margin-bottom:10px!important;}
  .about-top p{color:var(--text-mid)!important;font-size:.9rem!important;line-height:1.65!important;max-width:560px!important;margin:0 auto!important;}
  .about-grid{display:grid!important;grid-template-columns:1fr 1fr!important;gap:24px!important;}
  .about-card{background:#fff!important;border:1.5px solid rgba(253,101,121,.1)!important;border-radius:var(--r)!important;padding:24px!important;box-shadow:var(--shadow)!important;}
  .about-card .alabel{font-size:.72rem!important;font-weight:700!important;letter-spacing:1.2px!important;text-transform:uppercase!important;color:var(--pink)!important;margin-bottom:8px!important;}
  .about-card h3{font-size:1.05rem!important;font-weight:800!important;color:var(--text-dark)!important;margin-bottom:10px!important;}
  .about-card p{font-size:.85rem!important;color:var(--text-mid)!important;line-height:1.65!important;}
  .check-list{list-style:none!important;padding-left:0!important;margin-top:10px!important;display:flex!important;flex-direction:column!important;gap:8px!important;}
      .check-list li::before {
        content: '✓'!important;
        flex-shrink: 0!important;
        width: 18px!important;
        height: 18px!important;
        border-radius: 50%!important;
        background: var(--grad)!important;
        color: #fff;
        font-size: .65rem!important;
        font-weight: 800!important;
        display: flex!important;
        align-items: center!important;
        justify-content: center!important;
        margin-top: 1px!important;
      }
  .sub-card{background:var(--grad)!important;border-radius:var(--r)!important;padding:28px 32px!important;text-align:center!important;box-shadow:0 10px 40px rgba(253,101,121,.28)!important;}
  .sub-card h3{color:#fff!important;font-size:1.2rem!important;font-weight:800!important;margin-bottom:8px!important;}
  .sub-card p{color:rgba(255,255,255,.75)!important;font-size:.87rem!important;line-height:1.6!important;margin-bottom:16px!important;}
  .btn-white{display:inline-flex!important;align-items:center!important;gap:7px!important;background:#fff!important;color:var(--pink)!important;font-weight:700!important;font-size:.9rem!important;padding:11px 26px!important;border-radius:50px!important;border:none!important;cursor:pointer!important;font-family:inherit!important;box-shadow:0 4px 16px rgba(0,0,0,.12)!important;transition:all .2s!important;}
  .btn-white:hover{transform:translateY(-1px)!important;}
  .page-footer{text-align:center!important;font-size:.78rem!important;color:var(--text-light)!important;padding:16px 5%!important;border-top:1px solid rgba(253,101,121,.07)!important;background:var(--bg)!important;margin-top:32px!important;}

  @media(max-width:780px){.about-grid{grid-template-columns:1fr!important;}}
</style>

<body class="body-2">
  <div class="about-page">
    <div class="about-top">
      <h2>About Us!</h2>
      <p>We understand that meaningful connections are at the heart of human experience. Our platform is designed to bring together individuals from diverse backgrounds, fostering authentic relationships that resonate with shared values and interests. Whether you're looking for friendship, romance, or a supportive community, we're here to help you discover connections that last.</p>
    </div>

    <div class="about-grid">
      <div class="about-card">
        <div class="alabel">💖 Purpose</div>
        <h3>Connecting People for Genuine Relationships</h3>
        <p>At Plus1me, our mission is to help people find meaningful connections that go beyond superficial matches. We believe everyone deserves the chance to meet others who share their values, interests, and goals. Our platform is built with a focus on fostering genuine relationships, whether you're looking for friendship, love, or companionship. We're here to provide a space where real connections can thrive in a safe and welcoming environment.</p>
      </div>
      <div class="about-card">
        <div class="alabel">🔥 Results</div>
        <h3>Making Real Connections Possible</h3>
        <p>Since launching, Plus1me has helped countless users meet people who truly resonate with them. With our unique matching algorithm and user-first design, we focus on compatibility and shared interests to create matches that last. Here are just a few ways we're making a difference</p>
        <ul class="check-list">
          <li><strong>High Success Rate</strong> — Users report strong connections and lasting relationships built on compatibility and shared values.</li>
          <li><strong>Growing Community</strong> — Our community is expanding globally, with more people connecting each day.</li>
          <li><strong>User Satisfaction</strong> — Feedback from our users consistently highlights the app's ease of use, safety, and effectiveness in finding meaningful connections.</li>
        </ul>
      </div>
    </div>

    <div class="sub-card">
      <div style="font-size:.72rem;font-weight:700;letter-spacing:1.2px;text-transform:uppercase;color:rgba(255,255,255,.7);margin-bottom:8px;">⚡ Subscription</div>
      <h3>Unlock Premium Features</h3>
      <p>While Plus1me is free to use, we offer premium subscriptions to enhance your experience and help you connect even more effectively. Subscribers gain access to exclusive features designed to maximize their matching potential and connection opportunities.</p>
      <button class="btn-white">Coming Soon</button>
    </div>
  </div>

  <div class="page-footer">© 2026 Plus1me. All Rights Reserved.</div>
</body>

<footer>
  <?php wp_footer(); ?>
</footer>
</html>
