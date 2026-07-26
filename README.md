# Dammar Khadayat — Portfolio

Personal professional portfolio website for Dammar Khadayat, built with semantic HTML, Tailwind CSS (via CDN) and vanilla JavaScript. No build step required.

**Live site:** [dammarkhadayat.com.np](https://dammarkhadayat.com.np)

---

## Overview

| Detail | Value |
|--------|-------|
| Type | Single-page portfolio with supplementary pages |
| Stack | HTML5, Tailwind CSS (CDN), Vanilla JS |
| Author | Dammar Khadayat |
| Location | Pokhara, Kaski, Gandaki Province, Nepal |

The site serves as a central hub for Dammar's professional presence — teaching, research, workshops, portfolio projects, poetry and community engagement.

---

## File Structure

```
portfilioD/
├── index.html          # Main single-page portfolio
├── resume.html         # Print-ready A4 CV (print-optimised)
├── poetry.html         # Animated poetry collection
├── blog-detail.html    # Blog article template
├── privacy.html        # Privacy Policy
├── terms.html          # Terms of Service
├── sitemap.xml         # XML sitemap for search engines
├── robots.txt          # Crawler directives and AI crawl-rate rules
└── img/                # Site images
    ├── dammar-main.png
    ├── dammar1.jpg
    ├── dammar4.jpg
    ├── dammar5.jpg
    └── dammar6.jpg
```

---

## Sections (`index.html`)

| Section | ID | Description |
|---------|----|-------------|
| Hero | `#home` | Name, headline, tag chips, CTA buttons |
| Affiliations | — | Gandaki University, JCI Pokhara, ResearchGate logos |
| About | `#about` | Bio, stats, metadata table |
| Stats | — | Experience, projects, workshops, repositories counter |
| Expertise | `#expertise` | 6 areas of expertise cards |
| Skills | `#skills` | Icon + title + description cards (2-col grid) |
| Resume | `#resume` | Timeline: education, experience, certifications |
| Research | `#research` | Published paper card |
| Portfolio | `#portfolio` | Filterable project grid (All / Development / Design / Academic) |
| Workshops | `#workshops` | Stats ribbon + timeline of featured workshops |
| Blogs | `#blogs` | Article cards |
| Speaking | `#speaking` | Talks and invited lectures |
| CTA | — | Call-to-action banner |
| Gallery | `#gallery` | Photo grid |
| Contact | `#contact` | Form + address + social links |
| Footer | — | Quick links, contact, legal links |

Additionally, a **sticky sidebar** (`<aside>`) provides persistent navigation on desktop and a slide-in drawer on mobile (< 1024px).

---

## Design Tokens

| Token | Hex | Usage |
|-------|-----|-------|
| Navy | `#0B2447` | Primary brand, headings, buttons |
| Gold | `#B8873B` | Accent, dividers, highlights |
| Gold Light | `#D4A96A` | Hover states |
| Mist | `#F6F8FA` | Alternating section backgrounds |
| Line | `#E4E8ED` | Borders, dividers |
| Body | `#334155` | Paragraph text |

---

## Features

- **Responsive** — Mobile-first with consistent `px-5 sm:px-6` horizontal padding across all sections
- **Sidebar navigation** — Fixed left panel (desktop) / slide-in drawer with backdrop overlay (mobile)
- **Portfolio filters** — Client-side category filtering (Development / Design / Academic)
- **Scroll-triggered animations** — Intersection Observer-based reveal on scroll
- **Animated counters** — Stat numbers count up when visible
- **Affiliations carousel** — Auto-scrolling logo ribbon with pause-on-hover
- **Print-optimised CV** — `resume.html` with A4-specific `@media print` rules
- **Floating chat widget** — Bottom-right chat UI for quick contact
- **SEO metadata** — Open Graph, Twitter Cards, JSON-LD structured data, canonical URLs
- **Legal pages** — Privacy Policy and Terms of Service with matching design system
- **AI crawl-rate rules** — `robots.txt` includes polite `Crawl-delay` for GPTBot, ClaudeBot, CCBot, etc.

---

## Getting Started

### Local Development

No build tools required. Open `index.html` in a browser:

```bash
# Option 1:直接打开
start index.html          # Windows
open index.html           # macOS

# Option 2: local server (recommended for fetch/JS features)
npx serve .
# or
python -m http.server 8000
```

### Deployment

Upload all files to any static host. Recommended providers:

| Provider | Notes |
|----------|-------|
| [Netlify](https://netlify.com) | Drag-and-drop, free SSL, instant rollback |
| [Vercel](https://vercel.com) | Git-connected, edge network |
| [Cloudflare Pages](https://pages.cloudflare.com) | Free tier, global CDN |
| GitHub Pages | Free for public repos |

Ensure the following files are in the root directory:

```
index.html
resume.html
poetry.html
blog-detail.html
privacy.html
terms.html
sitemap.xml
robots.txt
img/
```

---

## SEO Checklist

- [x] `<title>` tag on every page
- [x] `<meta name="description">` with target keywords
- [x] Open Graph tags (`og:title`, `og:description`, `og:type`)
- [x] Twitter Card meta tags
- [x] JSON-LD structured data (Person schema)
- [x] `<link rel="canonical">` on legal pages
- [x] `sitemap.xml` with all 6 pages
- [x] `robots.txt` with `Sitemap:` directive
- [x] Semantic HTML (`<header>`, `<nav>`, `<main>`, `<article>`, `<section>`, `<aside>`, `<footer>`)
- [x] `alt` text on all images
- [x] `aria-label` on icon-only links
- [x] `loading="lazy"` on below-fold images

---

## Accessibility

- All interactive elements are keyboard-navigable
- `aria-label` on social/icon-only links
- Focus-visible styles on buttons and links
- Colour contrast ratios meet WCAG 2.1 AA for body text
- Print styles hide sidebar and reset layout

---

## Content & Copyright

| Content type | Copyright |
|-------------|-----------|
| Written content (articles, bio, workshop descriptions) | Dammar Khadayat |
| Poetry | Dammar Khadayat |
| Code / layout | Dammar Khadayat |
| SVG icons | [Lucide](https://lucide.dev) (ISC License) |
| Google Fonts | Inter, Playfair Display (SIL Open Font License) |
| Third-party logos | Gandaki University, JCI, ResearchGate — used for identification |

You may quote brief passages with attribution and a link to the original page. Full reproduction requires written permission.

---

## Contact

**Dammar Khadayat**
Pokhara, Kaski, Gandaki Province, Nepal

- Email: [dammar.24063@gandakiuniversity.edu.np](mailto:dammar.24063@gandakiuniversity.edu.np)
- Email: [info@dammarkhadayat.com.np](mailto:info@dammarkhadayat.com.np)
- Website: [dammarkhadayat.com.np](https://dammarkhadayat.com.np)

---

## License

This project is proprietary. All rights reserved by Dammar Khadayat. Unauthorized reproduction or distribution of site content is prohibited.
