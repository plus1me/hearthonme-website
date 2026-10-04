<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Find Your Perfect Match</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <style>
    :root {
      --pink:      #fd6579;
      --pink-light:#ff8fa0;
      --pink-pale: #ffeef1;
      --bg:        #f3f2f8;
      --dark:      #21182a;
      --text-dark: #1f1730;
      --text-mid:  #6c6778;
      --text-light:#a09aaa;
      --border:    #d0cfd9;
      --grad:      linear-gradient(135deg,#fd6579 0%,#ff8fa0 100%);
      --shadow:    0 4px 20px rgba(253,101,121,.14);
      --r:         14px;
    }
    *,*::before,*::after{box-sizing:border-box;margin:0;padding:0;}
    html,body{height:100%;overflow:hidden;font-family:'Inter',sans-serif;background:var(--bg);color:var(--text-dark);}
    @keyframes pulse{0%,100%{opacity:1;transform:scale(1)}50%{opacity:.5;transform:scale(1.3)}}

    /* NAV */
    nav{
      position:fixed;top:0;left:0;right:0;z-index:100;
      display:flex;align-items:center;justify-content:space-between;
      padding:0 5%;
      background:rgba(255,255,255,.95);backdrop-filter:blur(18px);
      border-bottom:1px solid rgba(253,101,121,.09);
      box-shadow:0 2px 16px rgba(253,101,121,.07);
      flex-wrap:wrap; gap:0;
    }
    .nav-top{
      width:100%; display:flex; align-items:center; justify-content:space-between;
      padding: 12px 0 8px;
    }
    .nav-bottom{
      width:100%; display:flex; align-items:center; gap:4px;
      padding-bottom:10px;
    }
    .logo{display:flex;align-items:center;gap:9px;cursor:pointer;text-decoration:none;}
    .logo-icon{width:36px;height:36px;border-radius:10px;background:var(--grad);display:flex;align-items:center;justify-content:center;font-size:1.1rem;box-shadow:0 3px 12px rgba(253,101,121,.4);}
    .logo-text{font-size:1.35rem;font-weight:800;background:var(--grad);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;}
    nav ul{display:flex;gap:4px;list-style:none;}
    nav ul li a{text-decoration:none;font-weight:500;font-size:.88rem;color:var(--text-mid);padding:7px 13px;border-radius:8px;transition:all .2s;cursor:pointer;display:block;}
    nav ul li a:hover{color:var(--pink);background:rgba(253,101,121,.06);}
    nav ul li a.active{color:var(--pink);font-weight:700;}
    .nav-cta{background:var(--grad)!important;color:#fff!important;border-radius:50px!important;font-weight:700!important;box-shadow:0 3px 14px rgba(253,101,121,.35);}

    /* PAGES */
    .page{display:none;position:fixed;top:108px;left:0;right:0;bottom:0;overflow:hidden;}
    .page.active{display:flex;flex-direction:column;}

    /* ── HOME ── */
    #home{flex-direction:row;align-items:center;padding:0 5%;gap:48px;background:var(--bg);}
    .hero-content{flex:1;max-width:520px;z-index:1;}
    .hero-badge{
      display:inline-flex;align-items:center;gap:7px;
      background:rgba(253,101,121,.08);border:1px solid rgba(253,101,121,.2);
      padding:6px 14px;border-radius:50px;font-size:.78rem;font-weight:600;color:var(--pink);margin-bottom:18px;
    }
    .dot{width:7px;height:7px;border-radius:50%;background:var(--pink);animation:pulse 1.5s infinite;flex-shrink:0;}
    h1{font-size:clamp(2rem,4vw,3.2rem);font-weight:900;line-height:1.1;letter-spacing:-1.5px;margin-bottom:14px;}
    h1 .hl{background:var(--grad);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;}
    .hero-sub{font-size:.95rem;line-height:1.65;color:var(--text-mid);margin-bottom:24px;max-width:420px;}
    .btn-primary{
      display:inline-flex;align-items:center;gap:7px;
      background:var(--grad);color:#fff;padding:13px 28px;border-radius:50px;
      font-weight:700;font-size:.95rem;border:none;cursor:pointer;font-family:inherit;
      box-shadow:0 6px 22px rgba(253,101,121,.38);transition:transform .2s,box-shadow .2s;
    }
    .btn-primary:hover{transform:translateY(-2px);box-shadow:0 10px 30px rgba(253,101,121,.48);}

    /* hero visual */
    .hero-visual{flex:1;display:flex;justify-content:flex-end;align-items:center;position:relative;}
    .hero-img{max-height:calc(100vh - 160px);max-width:100%;object-fit:contain;display:block;}
    .hero-emoji{position:absolute;top:10%;left:0;width:80px;animation:floatY 3s ease-in-out infinite;}
    .hero-bell{position:absolute;bottom:18%;right:0;width:64px;animation:floatY 3.5s ease-in-out infinite reverse;}
    @keyframes floatY{0%,100%{transform:translateY(0)}50%{transform:translateY(-12px)}}

    /* ── ABOUT ── */
    #about{background:var(--bg);overflow-y:auto;}
    .about-wrap{padding:32px 5%;display:flex;flex-direction:column;gap:32px;max-width:1000px;margin:0 auto;width:100%;}
    .about-top{text-align:center;}
    .about-top h2{font-size:clamp(1.5rem,3vw,2.2rem);font-weight:800;letter-spacing:-1px;margin-bottom:10px;}
    .about-top p{color:var(--text-mid);font-size:.9rem;line-height:1.65;max-width:560px;margin:0 auto;}
    .about-grid{display:grid;grid-template-columns:1fr 1fr;gap:24px;}
    .about-card{background:var(--bg);border:1.5px solid rgba(253,101,121,.1);border-radius:var(--r);padding:24px;box-shadow:var(--shadow);}
    .about-card .alabel{font-size:.72rem;font-weight:700;letter-spacing:1.2px;text-transform:uppercase;color:var(--pink);margin-bottom:8px;}
    .about-card h3{font-size:1.05rem;font-weight:800;color:var(--text-dark);margin-bottom:10px;}
    .about-card p{font-size:.85rem;color:var(--text-mid);line-height:1.65;}
    .check-list{list-style:none;margin-top:10px;display:flex;flex-direction:column;gap:8px;}
    .check-list li{display:flex;align-items:flex-start;gap:9px;font-size:.83rem;color:var(--text-mid);line-height:1.5;}
    .check-list li::before{content:'✓';flex-shrink:0;width:18px;height:18px;border-radius:50%;background:var(--grad);color:#fff;font-size:.65rem;font-weight:800;display:flex;align-items:center;justify-content:center;margin-top:1px;}
    .sub-card{background:var(--grad);border-radius:var(--r);padding:28px 32px;text-align:center;box-shadow:0 10px 40px rgba(253,101,121,.28);}
    .sub-card h3{color:#fff;font-size:1.2rem;font-weight:800;margin-bottom:8px;}
    .sub-card p{color:rgba(255,255,255,.75);font-size:.87rem;line-height:1.6;margin-bottom:16px;}
    .btn-white{display:inline-flex;align-items:center;gap:7px;background:#fff;color:var(--pink);font-weight:700;font-size:.9rem;padding:11px 26px;border-radius:50px;border:none;cursor:pointer;font-family:inherit;box-shadow:0 4px 16px rgba(0,0,0,.12);transition:all .2s;}
    .btn-white:hover{transform:translateY(-1px);}

    /* ── CONTACT ── */
    #contact{background:var(--bg);align-items:center;justify-content:center;}
    .contact-wrap{width:100%;max-width:580px;padding:24px 5%;display:flex;flex-direction:column;gap:16px;}
    .contact-head{text-align:center;}
    .contact-head h2{font-size:clamp(1.4rem,3vw,2rem);font-weight:800;letter-spacing:-1px;margin-bottom:6px;}
    .contact-head p{color:var(--text-mid);font-size:.87rem;line-height:1.6;}
    .contact-icon{font-size:2.8rem;text-align:center;}
    .cform{display:flex;flex-direction:column;gap:12px;}
    .form-row{display:grid;grid-template-columns:1fr 1fr;gap:12px;}
    .fg{display:flex;flex-direction:column;gap:4px;}
    .fg label{font-size:.78rem;font-weight:600;color:var(--text-mid);}
    .fg input,.fg textarea,.fg select{
      font-family:inherit;font-size:.88rem;color:var(--text-dark);
      background:var(--bg);border:1.5px solid rgba(253,101,121,.13);
      border-radius:10px;padding:10px 13px;outline:none;transition:border-color .2s;
    }
    .fg input:focus,.fg textarea:focus{border-color:var(--pink);}
    .fg textarea{resize:none;height:72px;}

    /* ── HELP ── */
    #help{background:var(--bg);align-items:center;justify-content:center;}
    .help-wrap{width:100%;max-width:640px;padding:24px 5%;display:flex;flex-direction:column;gap:12px;}
    .help-wrap h2{font-size:clamp(1.4rem,3vw,2rem);font-weight:800;letter-spacing:-1px;text-align:center;margin-bottom:4px;}
    .faq-item{border:1.5px solid rgba(0,0,0,.08);border-radius:var(--r);overflow:hidden;transition:border-color .2s;}
    .faq-item:hover{border-color:rgba(253,101,121,.25);}
    .faq-q{
      display:flex;align-items:center;justify-content:space-between;
      padding:15px 20px;cursor:pointer;gap:12px;
      font-weight:600;font-size:.9rem;color:var(--text-dark);background:#fff;user-select:none;
    }
    .faq-icon{width:24px;height:24px;border-radius:50%;flex-shrink:0;background:var(--grad);color:#fff;display:flex;align-items:center;justify-content:center;font-size:.9rem;font-weight:700;transition:transform .3s;}
    .faq-item.open .faq-icon{transform:rotate(45deg);}
    .faq-a{max-height:0;overflow:hidden;transition:max-height .3s ease,padding .3s;background:var(--bg);font-size:.86rem;color:var(--text-mid);line-height:1.65;padding:0 20px;}
    .faq-item.open .faq-a{max-height:120px;padding:13px 20px;}

    /* g class */
    .g{background:var(--grad);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;}

    /* ── AGE POLICY & PRIVACY ── */
    #age-policy,#privacy{background:var(--bg);align-items:center;justify-content:flex-start;overflow-y:auto;}
    .policy-wrap{width:100%;max-width:760px;padding:32px 5%;display:flex;flex-direction:column;gap:24px;margin:0 auto;}
    .policy-wrap h2{font-size:clamp(1.4rem,3vw,2rem);font-weight:800;letter-spacing:-1px;text-align:center;margin-bottom:4px;}
    .policy-wrap .alabel{font-size:.72rem;font-weight:700;letter-spacing:1.2px;text-transform:uppercase;color:var(--pink);text-align:center;}
    .policy-card{background:#fff;border:1.5px solid rgba(253,101,121,.1);border-radius:var(--r);padding:28px 32px;box-shadow:var(--shadow);display:flex;flex-direction:column;gap:14px;}
    .policy-card p{font-size:.88rem;color:var(--text-mid);line-height:1.75;}
    .policy-card a{color:var(--pink);font-weight:600;text-decoration:none;}
    .policy-card a:hover{text-decoration:underline;}
    .policy-card .section-title{font-size:.95rem;font-weight:800;color:var(--text-dark);margin-bottom:4px;padding-bottom:8px;border-bottom:1.5px solid rgba(253,101,121,.1);}
    .policy-card .sub-label{font-size:.75rem;font-weight:700;letter-spacing:.8px;text-transform:uppercase;color:var(--pink);margin:8px 0 4px;}
    .policy-card ul{list-style:none;padding:0;display:flex;flex-direction:column;gap:6px;}
    .policy-card ul li{display:flex;align-items:flex-start;gap:8px;font-size:.86rem;color:var(--text-mid);line-height:1.6;}
    .policy-card ul li::before{content:'•';flex-shrink:0;color:var(--pink);font-weight:800;}
    .effective{font-size:.82rem;color:var(--text-light);margin-top:4px;text-align:center;}

    /* FOOTER */
    .page-footer{
      text-align:center;font-size:.78rem;color:var(--text-light);
      padding:12px 5%;border-top:1px solid rgba(253,101,121,.07);background:var(--bg);flex-shrink:0;
    }
    .page-footer a{color:var(--pink);text-decoration:none;cursor:pointer;}

    @media(max-width:780px){
      #home{flex-direction:column;justify-content:center;text-align:center;padding:16px 5%;}
      .hero-sub{margin:0 auto 20px;}
      .hero-visual{display:none;}
      .about-grid{grid-template-columns:1fr;}
      .form-row{grid-template-columns:1fr;}
    }
  </style>
</head>
<body>

<nav>
  <div class="nav-top">
    <div class="logo" onclick="showPage('home')">
      <span class="logo-text"> Heartonme </span>
    </div>
    <a class="nav-cta" style="text-decoration:none;font-weight:700;font-size:.88rem;padding:9px 20px;cursor:pointer;">Coming Soon ✨</a>
  </div>
  <div class="nav-bottom">
    <ul>
      <li><a onclick="showPage('home')" id="nav-home" class="active">Home</a></li>
      <li><a onclick="showPage('about')" id="nav-about">About</a></li>
      
      <li><a onclick="showPage('help')" id="nav-help">Help</a></li>
      <li><a onclick="showPage('privacy')" id="nav-age-policy">Privacy Policy</a></li>
    
    </ul>
  </div>
</nav>

<!-- HOME -->
<div id="home" class="page active">
  <div class="hero-content">
    <div class="hero-badge"><span class="dot"></span> Start Your Journey to Love</div>
    <h1>Find your perfect match! <span class="hl">Start love story today.</span></h1>
    <p class="hero-sub">Get started today and embark on your journey to love and happiness.</p>
    <button class="btn-primary">Coming Soon ✨</button>
  </div>
        <!--
         <div class="page-footer">© 2026 Plus1me UG. All Rights Reserved.</div>
        -->
</div>

<!-- ABOUT -->
<div id="about" class="page">
  <div class="about-wrap">
    <div class="about-top">
      <h2>About Us</h2>
      <p>We understand that meaningful connections are at the heart of human experience. Our platform is designed to bring together individuals from diverse backgrounds, fostering authentic relationships that resonate with shared values and interests. Whether you're looking for friendship, romance, or a supportive community, we're here to help you discover connections that last.</p>
    </div>
    <div class="about-grid">
      <div class="about-card">
        <div class="alabel">💖 Purpose</div>
        <h3>Connecting People for Genuine Relationships</h3>
        <p>At Heartonme, our mission is to help people find meaningful connections that go beyond superficial matches. We believe everyone deserves the chance to meet others who share their values, interests, and goals. Our platform is built with a focus on fostering genuine relationships, whether you're looking for friendship, love, or companionship. We're here to provide a space where real connections can thrive in a safe and welcoming environment.</p>
      </div>
      <div class="about-card">
        <div class="alabel">🔥 Results</div>
        <h3>Making Real Connections Possible</h3>
        <p>Since launching, Heartonme has helped countless users meet people who truly resonate with them. With our unique matching algorithm and user-first design, we focus on compatibility and shared interests to create matches that last. Here are just a few ways we're making a difference</p>
        <ul class="check-list">
          <li><strong>High Success Rate</strong> — Users report strong connections and lasting relationships built on compatibility and shared values.</li>
          <li><strong>Growing Community</strong> — Our community is expanding globally, with more people connecting each day.</li>
          <li><strong>User Satisfaction</strong> — Feedback from our users consistently highlights the app's ease of use, safety, and effectiveness in finding meaningful connections.</li>
        </ul>
      </div>
    </div>
    <div class="sub-card">
      <div class="alabel" style="color:rgba(255,255,255,.7)">⚡ Subscription</div>
      <h3>Unlock Premium Features</h3>
      <p>While Heartonme is free to use, we offer premium subscriptions to enhance your experience and help you connect even more effectively. Subscribers gain access to exclusive features designed to maximize their matching potential and connection opportunities.</p>
      <button class="btn-white">Coming Soon ✨</button>
    </div>
  </div>
            <!--
  <div class="page-footer">© 2026 Plus1me UG. All Rights Reserved.</div>
             -->
</div>

<!-- CONTACT -->
<div id="contact" class="page">
  <div class="contact-wrap">
    <div class="contact-head">
      <h2>Your feedback is <span class="g">important to us!</span></h2>
      <p>We're here to help! If you have questions, feedback, or need assistance, reach out to us. Our support team is ready to make your experience seamless.</p>
    </div>
            </div>
            <!--
  <div class="page-footer">© 2026 Plus1me UG. All Rights Reserved.</div>
            -->
</div>
            <!-- HELP -->
            <div id="help" class="page">
              <div class="help-wrap">
                <h2>Frequently Asked <span class="g">Questions</span></h2>
                <div class="faq-item">
                  <div class="faq-q" onclick="toggleFaq(this)">Is Heartonme free to use?<span class="faq-icon">+</span></div>
                  <div class="faq-a">Yes, you can use the app for free. We also offer premium features to enhance your experience.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-q" onclick="toggleFaq(this)">How does the matchmaking algorithm work?<span class="faq-icon">+</span></div>
                  <div class="faq-a">Our algorithm considers your preferences, interests, and interactions to suggest matches who share your values.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-q" onclick="toggleFaq(this)">How does the app ensure privacy and safety?<span class="faq-icon">+</span></div>
                  <div class="faq-a">We use secure technology and offer privacy controls, including profile visibility settings and identity verification.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-q" onclick="toggleFaq(this)">Can I use the app internationally?<span class="faq-icon">+</span></div>
                  <div class="faq-a">Yes, Heartonme is available in multiple regions, so you can connect with people wherever you go.</div>
                </div>
                <div class="faq-item">
                  <div class="faq-q" onclick="toggleFaq(this)">How do I report inappropriate behavior?<span class="faq-icon">+</span></div>
                  <div class="faq-a">We take safety seriously — simply report any inappropriate behavior through the app, and our team will address it promptly.</div>
                </div>
              </div>
                      <!--
              <div class="page-footer">© 2026 Plus1me UG. All Rights Reserved.</div>
                      -->
            </div>
<!-- AGE POLICY -->
<div id="age-policy" class="page">
  <div class="policy-wrap">
    <div class="alabel">📋 Policy</div>
    <h2>Age Policy</h2>
    <div class="policy-card">
      <p> Heartonme is intended exclusively for adults aged <strong>18 years and older</strong>.</p>
      <p>By creating an account and using the Heartonme platform, users confirm that they are at least 18 years of age.</p>
      <p>We do not knowingly allow individuals under the age of 18 to create accounts or use our services. If we become aware that a user is under 18, the account will be removed immediately.</p>
      <p>Users who suspect that an underage individual is using the platform may report the account through the in-app reporting tools or contact us directly.</p>
      <p> Heartonme reserves the right to request age verification and to suspend or terminate accounts that violate this policy.</p>
      <p>If you have any questions regarding this policy, please contact:<br>
        <a href="mailto:sp.c">...</a>
      </p>
    </div>
  </div>
          <!--
  <div class="page-footer">© 2026 Plus1me UG. All Rights Reserved.</div>
          -->
</div>

<!-- PRIVACY -->
<div id="privacy" class="page">
  <div class="policy-wrap">
          <h2>Privacy <span class="g">Policy!</span></h2>

   
    <div class="policy-card">
      <p> Heartonme respects your privacy and is committed to protecting your personal information. This Privacy Policy explains how we collect, use, store, and share information when you use the Heartonme mobile application and related services.</p>
    </div>
    <div class="policy-card">
      <div class="section-title">1. Information We Collect</div>
      <div class="sub-label">Information You Provide</div>
      <ul>
        <li>Name or display name</li>
        
        <li>Profile photos and uploaded content</li>
        <li>Date of birth </li>
        <li>Gender and preferences (if provided)</li>
        <li>Messages and communications within the app</li>
        <li>Customer support requests</li>
      </ul>
      <div class="sub-label">Information Collected Automatically</div>
      <ul>
        <li>Device information &amp; operating system version</li>
        <li>IP address &amp; app usage information</li>
        <li>Log and diagnostic data</li>
        <li>Approximate location derived from your device or network</li>
      </ul>
      <div class="sub-label">Location Information</div>
      <p>If you grant permission, Heartonme may collect location information to help you see relevant users nearby.</p>
    </div>
    <div class="policy-card">
      <div class="section-title">2. How We Use Your Information</div>
      <ul>
        <li>Create and manage your account</li>
        <li>Provide matching and social networking features</li>
        <li>Enable messaging and communication features</li>
        <li>Improve app functionality and user experience</li>
        <li>Monitor security and prevent fraud or abuse</li>
        <li>Respond to support requests</li>
        <li>Comply with legal obligations</li>
      </ul>
    </div>
    <div class="policy-card">
      <div class="section-title">3. How We Share Information</div>
      <p>We do not sell your personal information.</p>
      <div class="sub-label">Service Providers</div>
      <ul>
        <li>Cloud hosting &amp; authentication providers</li>
        <li>Analytics providers</li>
        <li>Customer support tools</li>
      </ul>
      <div class="sub-label">Legal Requirements</div>
      <p>We may disclose information to comply with legal obligations, protect our rights, investigate fraud, or protect user safety.</p>
      <div class="sub-label">Business Transfers</div>
      <p>If Heartonme is involved in a merger or acquisition, user information may be transferred as part of that transaction.</p>
    </div>
    <div class="policy-card">
      <div class="section-title">4. User Content</div>
      <p>Information you include in your profile may be visible to other users. Please exercise caution when sharing personal information publicly.</p>
    </div>
    <div class="policy-card">
      <div class="section-title">5. Data Storage and Security</div>
      <p>We implement reasonable safeguards to protect personal information. However, no method of transmission or storage is completely secure.</p>
    </div>
    <div class="policy-card">
      <div class="section-title">6. Data Retention</div>
      <p>We retain personal information as long as necessary to provide our services, comply with legal obligations, resolve disputes, and enforce agreements. When no longer required, we will delete or anonymize it.</p>
    </div>
    <div class="policy-card">
      <div class="section-title">7. Your Rights</div>
      <ul>
        <li>Access your personal information</li>
        <li>Correct inaccurate information</li>
        <li>Request deletion of your information</li>
        <li>Object to certain processing activities</li>
        <li>Request data portability</li>
      </ul>
      <p>To exercise these rights, contact us using the information below.</p>
    </div>
    <div class="policy-card">
      <div class="section-title">8. Account Deletion</div>
      <p>You may request deletion of your account by using the in-app deletion feature or contacting us directly. We will process requests in accordance with applicable laws.</p>
    </div>
    <div class="policy-card">
      <div class="section-title">9. Children's Privacy</div>
      <p> Heartonme is not intended for person under the age of 18. We do not knowingly collect personal information from children.</p>
    </div>
    <div class="policy-card">
      <div class="section-title">10. International Users</div>
      <p>Your information may be processed and stored in countries other than your country of residence. By using Heartonme, you consent to such transfers where permitted by law.</p>
    </div>
    <div class="policy-card">
      <div class="section-title">11. Changes to This Privacy Policy</div>
      <p>We may update this Privacy Policy from time to time. Continued use of the service after changes become effective constitutes acceptance of the revised policy.</p>
    </div>
          <!--
  <div class="page-footer">© 2026 Plus1me UG. All Rights Reserved.</div>
          -->
</div>



<script>
  function showPage(id) {
    document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
    document.querySelectorAll('nav ul li a[id^="nav-"]').forEach(a => a.classList.remove('active'));
    document.getElementById(id).classList.add('active');
    document.getElementById('nav-' + id).classList.add('active');
  }
  function toggleFaq(el) {
    el.parentElement.classList.toggle('open');
  }
</script>
</body>
</html>
