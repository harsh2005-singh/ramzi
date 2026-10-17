# Ramzi Interior

> A custom, fully responsive and dynamic WordPress website for an Auckland-based interior finishing and painting company.

![WordPress](https://img.shields.io/badge/WordPress-Custom_Theme-21759B?logo=wordpress&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?logo=bootstrap&logoColor=white)
![GSAP](https://img.shields.io/badge/GSAP-88CE02?logo=greensock&logoColor=black)
![Status](https://img.shields.io/badge/Status-Live-success)

**Client:** Ramzi Interior · **Agency:** Proclivity Digitech Pvt. Ltd. · **Location:** Auckland, New Zealand

## 🌐 Live Site

| Environment | URL |
| --- | --- |
| **Production** | [ramziinterior.co.nz](https://ramziinterior.co.nz/) |
| Demo / staging | [proclivitydemo.co.in/demoh/ramzi](https://proclivitydemo.co.in/demoh/ramzi/) |

---

## 📑 Table of Contents

- [Overview](#-overview)
- [My Contribution](#-my-contribution)
- [Key Features](#-key-features)
- [Tech Stack](#️-tech-stack)
- [Theme Structure](#-theme-structure)
- [Dynamic Content](#-dynamic-content)
- [Responsive Design](#-responsive-design)
- [Getting Started](#-getting-started)
- [Development Journey](#-development-journey)
- [Learning Outcomes](#-learning-outcomes)
- [Project Note](#️-project-note)

---

## 📌 Overview

**Ramzi Interior** is a client website that presents professional interior finishing, painting, plastering and renovation services through a modern, fast and user-friendly experience.

I built it during the **first month of my internship at Proclivity Digitech Pvt. Ltd.**, taking it from an initial front-end design to a complete responsive, dynamic WordPress implementation. The work combined **front-end development** and **custom WordPress theme development**, with a focus on responsive layouts, reusable components, editable content and smooth interactions.

---

## 👨‍💻 My Contribution

**1. Front-end design**
Built the initial site with HTML5, CSS3, JavaScript and Bootstrap: page structure, styling and interactive UI components.

**2. Responsive development**
Made the layout work across desktop, laptop, tablet and mobile, covering navigation, service sections, cards, galleries, forms, typography and spacing.

**3. WordPress development**
Converted the static front end into a dynamic WordPress site:

- Custom theme with reusable PHP templates
- Custom service management and dynamic service pages
- Dynamic navigation and service ordering
- Responsive service sliders
- ACF-powered FAQ management
- Blog integration
- Contact form integration
- Permalink and content management setup

---

## ✨ Key Features

- Custom WordPress theme, fully responsive
- Dynamic Services section with individual detail pages
- Service dropdown navigation and configurable service ordering
- Dynamic blog powered by WordPress posts
- Before/after image comparison slider
- ACF-powered service FAQs with accordion
- Contact Form 7 integration
- Responsive mobile navigation
- GSAP and ScrollTrigger scroll animations
- Services and blog carousels
- Fully editable through the WordPress dashboard

---

## 🛠️ Tech Stack

| Layer | Technologies |
| --- | --- |
| **Frontend** | HTML5, CSS3, JavaScript, Bootstrap |
| **Backend / CMS** | WordPress, PHP, Custom Post Types, WP_Query, Template Hierarchy, Navigation Menus |
| **Plugins** | Advanced Custom Fields (ACF), Contact Form 7 |
| **Animation** | GSAP, ScrollTrigger |

---

## 📂 Theme Structure

```text
ramzi/
├── assets/              # CSS, JS, images and fonts
├── about.php
├── blog.php
├── contact.php
├── footer.php
├── front-page.php       # Home page
├── functions.php        # Theme setup, CPTs, enqueues
├── header.php
├── index.php
├── projects.php
├── services.php
├── single-blog.php      # Single blog post
├── single-service.php   # Single service detail
├── style.css            # Theme metadata and base styles
└── testimonials.php
```

---

## 🧩 Dynamic Content

### Services

Services are managed through WordPress instead of being hardcoded. Current services include:

- Venetian Plastering
- Renovations
- Plastering
- Gib Fixing
- Exterior Painting
- Interior Painting

New services can be added from the dashboard and appear automatically in the listing, navigation dropdown and detail pages.

### Service FAQs

Each service has its own FAQs managed with **ACF repeater fields**, so admins can add or edit questions and answers without touching code.

### Blog

Blog content uses native WordPress posts, so new articles are published and displayed straight from the dashboard.

---

## 📱 Responsive Design

The layout adapts from **Desktop → Tablet → Mobile**, with particular attention to:

- Navigation and mobile menu behaviour
- Typography and section spacing
- Image sizing and card layouts
- Sliders and carousels
- Forms and touch interactions

---

## 🚀 Getting Started

> Requires a WordPress installation (local or hosted) with PHP.

1. Copy the `ramzi/` folder into `wp-content/themes/`.
2. In **Appearance → Themes**, activate **Ramzi**.
3. Install and activate the required plugins:
   - Advanced Custom Fields (ACF)
   - Contact Form 7
4. Set up the navigation menus under **Appearance → Menus**.
5. Go to **Settings → Permalinks** and click **Save Changes** to refresh rewrite rules.
6. Add services, FAQs and blog posts from the dashboard.

---

## 🧭 Development Journey

```text
Initial Design
      ↓
HTML / CSS / JavaScript
      ↓
Responsive Front End
      ↓
WordPress Theme Development
      ↓
Dynamic Content
      ↓
ACF & Plugin Integration
      ↓
Responsive & Interactive Refinement
      ↓
Final Client Website
```

---

## 📖 Learning Outcomes

- Building websites from the ground up and converting designs into responsive interfaces
- Writing reusable HTML, CSS and JavaScript
- Developing custom WordPress themes with PHP templates
- Working with Custom Post Types, WordPress queries and ACF repeater fields
- Integrating plugins such as Contact Form 7
- Creating sliders, responsive navigation and GSAP animations
- Debugging responsive layouts
- Structuring and delivering a real-world client project

---

## ⚠️ Project Note

This repository contains work completed during an internship/client project at **Proclivity Digitech Pvt. Ltd.** and is kept for **portfolio, learning and reference purposes**. Proprietary client assets, credentials, production data and confidential information are not included.

---

## 👤 Developer

Developed during my internship at **Proclivity Digitech Pvt. Ltd.**

**Project:** Ramzi Interior, Auckland, New Zealand
**Live:** [ramziinterior.co.nz](https://ramziinterior.co.nz/)
