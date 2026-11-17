HeartOnMe - website + web app
=============================

Website pages (plain HTML/CSS): index.html, web-app.html, about.html, contact.html,
help.html, age-policy.html, 404.html. Assets: css/, images/.

Web app (React + Firebase): webapp/  ->  published at https://heartonme.com/app/
See webapp/README.md for what the app does and the Firebase/Google settings it needs.

Publishing
----------
GitHub Actions publishes everything on every push to main (.github/workflows/pages.yml):
the HTML pages as they are, and the web app built into /app.

One-time setup on GitHub:
1. Settings -> Pages -> Build and deployment -> Source: "GitHub Actions".
   The custom domain heartonme.com stays configured.
2. Settings -> Secrets and variables -> Actions -> Variables tab -> add these
   (values from your webapp .env file):
     VITE_FIREBASE_API_KEY, VITE_FIREBASE_APP_ID, VITE_FIREBASE_AUTH_DOMAIN,
     VITE_FIREBASE_PROJECT_ID, VITE_FIREBASE_STORAGE_BUCKET,
     VITE_FIREBASE_MESSAGING_SENDER_ID, VITE_FUNCTIONS_URL,
     VITE_DATE_CREDITS_URL, VITE_GOOGLE_MAPS_API_KEY
   These are browser keys (visible in any website), not secrets.
3. Firebase -> Authentication -> Settings -> Authorized domains: heartonme.com
   Google Cloud -> your Maps key -> Websites: https://heartonme.com/*

Deep links like heartonme.com/app/matches work after a reload: 404.html forwards
/app/... paths to the app.

Editing pages
-------------
The menu is repeated at the top of each page (now 6 pages), so update it in all files.

Running the web app locally
---------------------------
  cd webapp
  cp .env.example .env      (fill in the keys)
  npm install
  npm run dev               -> http://localhost:5173
