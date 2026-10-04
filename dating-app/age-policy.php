<!DOCTYPE html>
<html lang="en" data-wf-page="672c9cc70d513a6484baa540" data-wf-site="6723f82a39dbcaee295ddc93" data-wf-status="1">
<?php
  $GLOBALS['cid'] = '5';
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
  body{font-family:'Plus Jakarta Sans','Inter',sans-serif!important;background:var(--bg)!important;color:var(--text-dark)!important;margin-top:0!important;padding-top:0!important;}

  .policy-page{
    padding:20px 5% 40px!important;
    display:flex!important;flex-direction:column!important;gap:32px!important;
    max-width:800px!important;margin:0 auto!important;width:100%!important;
  }
  .policy-top{text-align:center!important;}
  .policy-top h2{font-size:clamp(1.5rem,3vw,2.2rem)!important;font-weight:800!important;letter-spacing:-1px!important;margin-bottom:10px!important;}
  .policy-top .alabel{font-size:.72rem!important;font-weight:700!important;letter-spacing:1.2px!important;text-transform:uppercase!important;color:var(--pink)!important;margin-bottom:12px!important;}
  .policy-card{background:#fff!important;border:1.5px solid rgba(253,101,121,.1)!important;border-radius:var(--r)!important;padding:32px!important;box-shadow:var(--shadow)!important;display:flex!important;flex-direction:column!important;gap:18px!important;}
  .policy-card p{font-size:.9rem!important;color:var(--text-mid)!important;line-height:1.75!important;}
  .policy-card a{color:var(--pink)!important;font-weight:600!important;text-decoration:none!important;}
  .policy-card a:hover{text-decoration:underline!important;}
  .page-footer{text-align:center!important;font-size:.78rem!important;color:var(--text-light)!important;padding:16px 5%!important;border-top:1px solid rgba(253,101,121,.07)!important;background:var(--bg)!important;margin-top:32px!important;}
</style>

<body class="body-2">
  <div class="policy-page">
    <div class="policy-top">
      <div class="alabel">📋 Policy</div>
      <h2>Age Policy</h2>
    </div>

    <div class="policy-card">
      <p>Plus1me is intended exclusively for adults aged <strong>18 years and older</strong>.</p>
      <p>By creating an account and using the Plus1me platform, users confirm that they are at least 18 years of age.</p>
      <p>We do not knowingly allow individuals under the age of 18 to create accounts or use our services. If we become aware that a user is under 18, the account will be removed immediately.</p>
      <p>Users who suspect that an underage individual is using the platform may report the account through the in-app reporting tools or contact us directly.</p>
      <p>Plus1me reserves the right to request age verification and to suspend or terminate accounts that violate this policy.</p>
      <p>If you have any questions regarding this policy, please contact:<br>
        <a href="mailto:support@plus1me.com">support@plus1me.com</a>
      </p>
    </div>
  </div>

  <div class="page-footer">© 2026 Plus1me. All Rights Reserved.</div>
</body>

<footer>
  <?php wp_footer(); ?>
</footer>
</html>
