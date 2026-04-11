# Display Doctor - PHP & Tailwind CSS Architecture

This repository holds the modernized, component-based PHP architecture for **Display Doctor** — an expert TV repair service website based in Kolkata.

The setup utilizes **PHP** for robust, server-side component inclusion and **Tailwind CSS v4** for rapid utility-first styling.

---

## 📂 Folder Structure

- `/components/` - Reusable PHP modules keeping the codebase DRY (Don't Repeat Yourself). Contains files like `navbar.php`, `footer.php`, and `calltoaction.php`.
- `/src/` - Contains the raw CSS input file (`input.css`) with Tailwind imports and custom theme variables (`primary`, `secondary`, etc.).
- `/dist/` - Automatically generated output folder where `output.css` (minified Tailwind) is compiled.
- `/public/` - Static assets including images (e.g., logos, hero images).
- `/js/` - Vanilla JavaScript logic specifically handling client-side UX interactions like the mobile hamburger menu. 
- `/hostinger/` - An auto-generated staging directory created by our deployment script containing the exact files ready for server deployment.
- `index.php`, `about.php`, `contact.php` - Primary page routes rendering component fragments together.

---

## 🛠 Local Development Tools

A suite of NPM scripts is available natively in the `package.json` to make local development highly efficient:

1. **Local Server Only**
   Runs a local PHP server on port 8000.
   ```bash
   npm run serve
   # Note: Alternatively execute `php -S localhost:8000` via terminal
   ```

2. **Simultaneous Dev Workflow**
   Spins up the PHP server while simultaneously tracking and recompiling your Tailwind CSS anytime changes are made.
   ```bash
   npm run dev
   ```

3. **Manual Build**
   Manually compile and minify your `dist/output.css` for production.
   ```bash
   npm run build
   ```

---

## 🚀 Deployment to Hostinger

When you are ready to upload the latest changes to your live Hostinger (or similar cPanel-like) server environment, run the dedicated package script:

```bash
npm run hostinger
```

### What `npm run hostinger` Does:
1. It immediately runs a hard build to ensure the Tailwind file is fully minified and up-to-date.
2. It executes a local node script (`deploy.js`).
3. The script meticulously isolates required assets (`index.php`, `components`, `dist`, `js`, `public`, `pages`) away from bulk developer files (like `node_modules`).
4. The isolated assets are dropped neatly into an automatically created footprint folder named `hostinger/`.

**Final Step**: Simply open the `/hostinger/` folder from your File Explorer, zip its contents, and upload/extract them directly into your static `public_html` domain folder on Hostinger!
