document.addEventListener("DOMContentLoaded", function () {
  initPremiumAnimations();
  initStatCounters();
  initServicesPageAnimations();
  initTestimonialsPageAnimations();
  initContactPageAnimations();
  initBlogPageAnimations();
  initSingleBlogPageAnimations();
  initSingleServicePageAnimations();
  initDynamicMenuDropdowns();
  initReadMoreToggles();
  window.requestAnimationFrame(() => initStatCounters());
  window.setTimeout(() => initStatCounters(), 100);
  initBeforeAfterSliders();
  initCardSlider({
    root: ".blogs-slider",
    track: ".blogs-track",
    slide: ".blog-slide",
    prev: ".blogs-prev",
    next: ".blogs-next",
    dots: ".blogs-dots",
  });
  initCardSlider({
    root: ".services-slider",
    track: ".services-track",
    slide: ".service-slide",
    prev: ".services-prev",
    next: ".services-next",
    dots: ".service-pagination",
  });
});

function initReadMoreToggles() {
  document.querySelectorAll("[data-read-more]").forEach((block) => {
    const toggle = block.querySelector("[data-read-more-toggle]");
    const content = block.querySelector("[data-read-more-content]");
    const moreLabel = toggle?.querySelector("[data-read-more-label]");
    const lessLabel = toggle?.querySelector("[data-read-less-label]");

    if (!toggle || !content || !moreLabel || !lessLabel) {
      return;
    }

    block.classList.add("has-read-more");
    toggle.addEventListener("click", function () {
      const expanded = toggle.getAttribute("aria-expanded") !== "true";
      toggle.setAttribute("aria-expanded", String(expanded));
      block.classList.toggle("is-expanded", expanded);
      moreLabel.hidden = expanded;
      lessLabel.hidden = !expanded;
    });
  });
}

function initPremiumAnimations() {
  if (typeof gsap === "undefined" || typeof ScrollTrigger === "undefined")
    return;

  gsap.registerPlugin(ScrollTrigger);

  const reduceMotion = window.matchMedia(
    "(prefers-reduced-motion: reduce)",
  ).matches;
  const isCompact = window.matchMedia("(max-width: 767px)").matches;
  const distance = isCompact ? 22 : 42;

  if (reduceMotion) {
    gsap.set(
      [
        ".hero-content",
        ".hero-form",
        ".about-top",
        ".about-row > div",
        ".services-heading > div",
        ".project-title",
        ".project-image-wrapper",
        ".why-content",
        ".why-images",
        ".gallery-heading",
        ".before-after-card",
        ".faq-heading",
        ".faq-acc",
        ".areas-label",
        ".area-button",
        ".testimonials-heading",
        ".testimonial-card",
        ".blogs-heading",
        ".blog-slide",
        ".ramzi-footer .footer-row > div",
        ".ramzi-footer .footer-bottom",
      ],
      {
        clearProps: "all",
      },
    );
    return;
  }

  const reveal = (targets, trigger, options = {}) => {
    const elements = document.querySelectorAll(targets);
    if (!elements.length) return;

    gsap.from(elements, {
      y: distance,
      opacity: 0,
      duration: options.duration || 0.85,
      delay: options.delay || 0,
      stagger: options.stagger || 0.1,
      ease: "power3.out",
      clearProps: "transform,opacity",
      scrollTrigger: {
        trigger: trigger || elements[0],
        start: options.start || "top 82%",
        once: true,
      },
    });
  };

  const headerTimeline = gsap.timeline({
    defaults: {
      ease: "power3.out",
    },
  });

  headerTimeline
    .from(".ramzi-header", {
      y: -24,
      opacity: 0,
      duration: 0.7,
      clearProps: "transform,opacity",
    })
    .from(
      ".ramzi-logo-link",
      {
        x: -18,
        opacity: 0,
        duration: 0.45,
        clearProps: "transform,opacity",
      },
      "-=.35",
    )
    .from(
      ".navbar-nav .nav-item, .navbar-nav > li",
      {
        y: -10,
        opacity: 0,
        duration: 0.35,
        stagger: 0.07,
        clearProps: "transform,opacity",
      },
      "-=.25",
    )
    .from(
      ".ramzi-header .appointment-button",
      {
        x: 18,
        opacity: 0,
        duration: 0.45,
        clearProps: "transform,opacity",
      },
      "-=.25",
    );

  const heroSection = document.querySelector(".hero-section");
  const whySection = document.querySelector(".why-section");

  if (!isCompact) {
    if (heroSection) {
      gsap.to(".hero-section", {
        backgroundPositionY: "+=45px",
        ease: "none",
        scrollTrigger: {
          trigger: heroSection,
          start: "top top",
          end: "bottom top",
          scrub: 1,
        },
      });
    }

    if (whySection) {
      gsap.to(".why-room-image", {
        y: -18,
        ease: "none",
        scrollTrigger: {
          trigger: whySection,
          start: "top bottom",
          end: "bottom top",
          scrub: 1,
        },
      });
    }
  }

  if (heroSection) {
    gsap.from(".hero-content > *, .hero-form", {
      y: isCompact ? 24 : 36,
      opacity: 0,
      duration: 1,
      stagger: 0.12,
      delay: 0.15,
      ease: "power3.out",
      clearProps: "transform,opacity",
    });
  }

  const aboutHero = document.querySelector(".about-page-hero");
  if (aboutHero) {
    gsap.to(".about-page-hero-bg", {
      y: 35,
      ease: "none",
      scrollTrigger: {
        trigger: aboutHero,
        start: "top top",
        end: "bottom top",
        scrub: 1,
      },
    });

    reveal(".about-page-hero-content > *", aboutHero, {
      stagger: 0.12,
      start: "top 90%",
    });
  }

  reveal(".about-top", ".about-section", {
    start: "top 78%",
  });
  reveal(".about-top-text, .brand-marquee-viewport", ".about-top", {
    stagger: 0.12,
    start: "top 84%",
  });
  reveal(".about-row > div", ".about-row", {
    stagger: 0.16,
  });
  reveal(".about-content > *", ".about-content", {
    stagger: 0.08,
    start: "top 84%",
  });
  reveal(".services-heading > div", ".services-heading", {
    stagger: 0.14,
  });
  reveal(".project-title", ".project-title", {
    start: "top 88%",
  });
  reveal(".project-image-wrapper", ".project-section", {
    start: "top 75%",
  });
  reveal(".why-content, .why-images", ".why-section", {
    stagger: 0.16,
  });
  reveal(".why-stats .why-stat, .why-bottom > *", ".why-content", {
    stagger: 0.1,
    start: "top 78%",
  });
  reveal(".gallery-heading", ".gallery-section", {
    start: "top 78%",
  });
  reveal(".before-after-card", ".gallery-grid", {
    stagger: 0.12,
    start: "top 84%",
  });
  reveal(".gallery-feature", ".gallery-features", {
    stagger: 0.1,
    start: "top 88%",
  });
  reveal(".faq-heading, .faq-acc", ".faq-section", {
    stagger: 0.14,
  });
  reveal(".areas-label", ".areas-section", {
    stagger: 0.045,
    start: "top 84%",
  });
  reveal(".testimonials-heading", ".testimonials-section", {
    start: "top 80%",
  });
  reveal(".testimonial-card", ".testimonials-row", {
    stagger: 0.12,
    start: "top 84%",
  });
  reveal(".blogs-heading", ".blogs-section", {
    start: "top 80%",
  });
  reveal(".blog-slide", ".blogs-slider", {
    stagger: 0.12,
    start: "top 84%",
  });
  reveal(".ramzi-footer .footer-row > div", ".ramzi-footer", {
    stagger: 0.12,
    start: "top 88%",
  });
  reveal(".ramzi-footer .footer-bottom", ".ramzi-footer", {
    start: "top 96%",
    duration: 0.65,
  });

  document
    .querySelectorAll(
      ".service-card, .testimonial-card, .blog-card, .services-page-card, .gallery-feature, .area-button",
    )
    .forEach((card) => {
      card.addEventListener("mouseenter", () => {
        gsap.to(card, {
          y: -6,
          duration: 0.25,
          ease: "power2.out",
          overwrite: true,
        });
      });
      card.addEventListener("mouseleave", () => {
        gsap.to(card, {
          y: 0,
          duration: 0.3,
          ease: "power2.out",
          overwrite: true,
        });
      });
    });

  document
    .querySelectorAll(
      ".footer-social a, .footer-column a, .footer-contact .contact-item",
    )
    .forEach((item) => {
      item.addEventListener("mouseenter", () => {
        gsap.to(item, {
          x: 5,
          duration: 0.25,
          ease: "power2.out",
          overwrite: true,
        });
      });
      item.addEventListener("mouseleave", () => {
        gsap.to(item, {
          x: 0,
          duration: 0.3,
          ease: "power2.out",
          overwrite: true,
        });
      });
    });
}

function initStatCounters() {
  const statNumbers = document.querySelectorAll(
    ".stat-number[data-count-to], .services-page-stat-number[data-count-to]",
  );
  if (!statNumbers.length) return;

  const animateCount = (el) => {
    if (el.dataset.counterStarted === "true") return;
    el.dataset.counterStarted = "true";

    const target = parseInt(el.getAttribute("data-count-to"), 10) || 0;
    const suffix = el.getAttribute("data-suffix") || "";
    const output = el.querySelector(".counter-value") || el;
    const reduceMotion = window.matchMedia(
      "(prefers-reduced-motion: reduce)",
    ).matches;

    if (reduceMotion) {
      output.textContent = target;
      return;
    }

    if (typeof gsap !== "undefined") {
      const counter = {
        value: 0,
      };

      gsap.to(counter, {
        value: target,
        duration: 1.6,
        ease: "power2.out",
        onUpdate: () => {
          output.textContent = Math.round(counter.value);
        },
        onComplete: () => {
          output.textContent = target;
        },
      });
      return;
    }

    output.textContent = target;
  };

  if (typeof gsap !== "undefined" && typeof ScrollTrigger !== "undefined") {
    statNumbers.forEach((el) => {
      ScrollTrigger.create({
        trigger: el,
        start: "top 85%",
        once: true,
        onEnter: () => animateCount(el),
        onUpdate: (self) => {
          if (self.progress > 0) animateCount(el);
        },
      });
    });
    ScrollTrigger.refresh();
    return;
  }

  const observer = new IntersectionObserver(
    (entries, obs) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          animateCount(entry.target);
          obs.unobserve(entry.target);
        }
      });
    },
    {
      threshold: 0.4,
    },
  );

  statNumbers.forEach((el) => observer.observe(el));
}

function initBeforeAfterSliders() {
  const cards = document.querySelectorAll("[data-before-after]");

  if (!cards.length) return;

  cards.forEach((card) => {
    const beforeWrapper = card.querySelector(".ba-before-wrapper");
    const sliderLine = card.querySelector(".ba-slider-line");
    const handle = card.querySelector(".ba-handle");
    const range = card.querySelector(".ba-range");
    const imageContainer = card.querySelector(".ba-image-container");

    if (!beforeWrapper || !sliderLine || !handle || !range || !imageContainer) {
      return;
    }

    function setPosition(percent) {
      percent = Math.max(0, Math.min(100, percent));

      beforeWrapper.style.width = percent + "%";
      sliderLine.style.left = percent + "%";
      handle.style.left = percent + "%";
      range.value = percent;
    }

    function percentFromClientX(clientX) {
      const rect = imageContainer.getBoundingClientRect();
      return ((clientX - rect.left) / rect.width) * 100;
    }

    setPosition(50);

    range.addEventListener("input", (e) => {
      setPosition(parseFloat(e.target.value));
    });

    handle.addEventListener("pointerdown", (e) => {
      e.preventDefault();

      handle.setPointerCapture(e.pointerId);

      const move = (event) => {
        setPosition(percentFromClientX(event.clientX));
      };

      move(e);

      handle.addEventListener("pointermove", move);

      handle.addEventListener(
        "pointerup",
        () => {
          handle.removeEventListener("pointermove", move);
        },
        { once: true },
      );

      handle.addEventListener(
        "pointercancel",
        () => {
          handle.removeEventListener("pointermove", move);
        },
        { once: true },
      );
    });
  });
}

function initCardSlider(config) {
  const slider = document.querySelector(config.root);
  if (!slider) return;

  const track = slider.querySelector(config.track);
  const slides = Array.from(track.querySelectorAll(config.slide));
  const prevBtn = slider.querySelector(config.prev);
  const nextBtn = slider.querySelector(config.next);
  const dotsWrap = document.querySelector(config.dots);

  if (!slides.length) return;

  let currentIndex = 0;

  function slidesPerView() {
    const width = window.innerWidth;

    if (width <= 767) return 1;
    if (width <= 991) return 2;

    return 3;
  }

  function maxIndex() {
    return Math.max(0, slides.length - slidesPerView());
  }

  function buildDots() {
    if (!dotsWrap) return;

    dotsWrap.innerHTML = "";

    for (let i = 0; i <= maxIndex(); i++) {
      const dot = document.createElement("span");

      if (i === currentIndex) {
        dot.classList.add("pagination-active", "active");
      }

      dot.addEventListener("click", () => goTo(i));
      dotsWrap.appendChild(dot);
    }
  }

  function updateDots() {
    if (!dotsWrap) return;

    Array.from(dotsWrap.children).forEach((dot, i) => {
      dot.classList.toggle("pagination-active", i === currentIndex);
      dot.classList.toggle("active", i === currentIndex);
    });
  }

  function updateNavButtons() {
    if (prevBtn) {
      prevBtn.disabled = currentIndex === 0;
    }

    if (nextBtn) {
      nextBtn.disabled = currentIndex >= maxIndex();
    }
  }

  function goTo(index) {
    currentIndex = Math.max(0, Math.min(index, maxIndex()));

    const slideWidth = slides[0].getBoundingClientRect().width;
    const gap = parseFloat(getComputedStyle(track).gap) || 0;

    track.scrollTo({
      left: currentIndex * (slideWidth + gap),
      behavior: "smooth",
    });

    updateDots();
    updateNavButtons();
  }

  if (prevBtn) {
    prevBtn.addEventListener("click", () => {
      goTo(currentIndex - 1);
    });
  }

  if (nextBtn) {
    nextBtn.addEventListener("click", () => {
      goTo(currentIndex + 1);
    });
  }

  let resizeTimer;

  window.addEventListener("resize", () => {
    clearTimeout(resizeTimer);

    resizeTimer = setTimeout(() => {
      buildDots();
      goTo(Math.min(currentIndex, maxIndex()));
    }, 200);
  });

  buildDots();
  updateNavButtons();
}

function initServicesPageAnimations() {
  const page = document.querySelector(".services-page");

  if (
    !page ||
    typeof gsap === "undefined" ||
    typeof ScrollTrigger === "undefined"
  ) {
    return;
  }

  gsap.registerPlugin(ScrollTrigger);

  if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
    return;
  }

  const heroTl = gsap.timeline({
    defaults: {
      ease: "power3.out",
    },
  });

  heroTl
    .from(".services-page-breadcrumb", {
      y: -18,
      opacity: 0,
      duration: 0.7,
    })
    .from(
      ".services-page-kicker",
      {
        y: 25,
        opacity: 0,
        duration: 0.6,
      },
      "-=0.35",
    )
    .from(
      ".services-page-hero-content h1",
      {
        y: 45,
        opacity: 0,
        duration: 0.9,
      },
      "-=0.35",
    )
    .from(
      ".services-page-hero-content p",
      {
        y: 30,
        opacity: 0,
        duration: 0.7,
      },
      "-=0.45",
    )
    .from(
      ".services-page-hero-button",
      {
        y: 25,
        opacity: 0,
        duration: 0.65,
      },
      "-=0.35",
    );

  gsap.to(".services-page-hero-bg", {
    yPercent: 8,
    ease: "none",
    scrollTrigger: {
      trigger: ".services-page-hero",
      start: "top top",
      end: "bottom top",
      scrub: 1,
    },
  });

  gsap.from(".services-page-intro-head", {
    y: 55,
    opacity: 0,
    duration: 1,
    ease: "power3.out",
    scrollTrigger: {
      trigger: ".services-page-intro",
      start: "top 78%",
    },
  });

  gsap.from(".services-page-intro-copy", {
    y: 45,
    opacity: 0,
    duration: 0.9,
    delay: 0.12,
    ease: "power3.out",
    scrollTrigger: {
      trigger: ".services-page-intro",
      start: "top 78%",
    },
  });

  gsap.from(".services-page-card", {
    y: 55,
    scale: 0.985,
    duration: 0.8,
    stagger: {
      each: 0.12,
      from: "start",
    },
    ease: "power3.out",
    scrollTrigger: {
      trigger: ".services-page-grid",
      start: "top 82%",
      once: true,
    },
  });

  gsap.from(".services-page-cta-inner > *", {
    y: 40,
    opacity: 0,
    duration: 0.9,
    stagger: 0.12,
    ease: "power3.out",
    scrollTrigger: {
      trigger: ".services-page-cta",
      start: "top 82%",
    },
  });

  gsap.to(".services-page-cta-glow", {
    x: -80,
    y: 55,
    duration: 7,
    repeat: -1,
    yoyo: true,
    ease: "sine.inOut",
  });

  document.querySelectorAll(".services-page-card").forEach((card) => {
    const image = card.querySelector(".services-page-card-image img");
    const icon = card.querySelector(".services-page-card-icon");
    const arrow = card.querySelector(".services-page-card-arrow");

    card.addEventListener("mouseenter", () => {
      gsap.to(image, {
        scale: 1.07,
        duration: 0.75,
        ease: "power2.out",
      });

      gsap.to(icon, {
        y: -5,
        rotate: -4,
        duration: 0.35,
        ease: "power2.out",
      });

      gsap.to(arrow, {
        x: 3,
        y: -3,
        duration: 0.3,
        ease: "power2.out",
      });
    });

    card.addEventListener("mouseleave", () => {
      gsap.to(image, {
        scale: 1,
        duration: 0.75,
        ease: "power2.out",
      });

      gsap.to(icon, {
        y: 0,
        rotate: 0,
        duration: 0.35,
        ease: "power2.out",
      });

      gsap.to(arrow, {
        x: 0,
        y: 0,
        duration: 0.3,
        ease: "power2.out",
      });
    });
  });
}

function initTestimonialsPageAnimations() {
  const page = document.querySelector(".testimonials-page");

  if (
    !page ||
    typeof gsap === "undefined" ||
    typeof ScrollTrigger === "undefined"
  ) {
    return;
  }

  if (page.dataset.testimonialsAnimated === "true") {
    return;
  }

  page.dataset.testimonialsAnimated = "true";

  gsap.registerPlugin(ScrollTrigger);

  if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
    return;
  }

  gsap.from(
    ".testimonials-page-breadcrumb, .testimonials-page-kicker, .testimonials-page-hero-content h1, .testimonials-page-hero-content p",
    {
      y: 35,
      duration: 0.8,
      stagger: 0.1,
      ease: "power3.out",
      clearProps: "transform",
    },
  );

  gsap.to(".testimonials-page-hero-bg", {
    yPercent: 6,
    ease: "none",
    scrollTrigger: {
      trigger: ".testimonials-page-hero",
      start: "top top",
      end: "bottom top",
      scrub: 1,
    },
  });

  gsap.from(".testimonials-page-heading", {
    y: 40,
    duration: 0.8,
    ease: "power3.out",
    scrollTrigger: {
      trigger: ".testimonials-page-heading",
      start: "top 82%",
      once: true,
    },
  });

  gsap.from(".testimonials-page-card", {
    y: 45,
    duration: 0.75,
    stagger: 0.12,
    ease: "power3.out",
    scrollTrigger: {
      trigger: ".testimonials-page-row",
      start: "top 82%",
      once: true,
    },
  });

  gsap.from(".testimonials-page-callout", {
    y: 30,
    duration: 0.7,
    ease: "power3.out",
    scrollTrigger: {
      trigger: ".testimonials-page-callout",
      start: "top 88%",
      once: true,
    },
  });
}

function initContactPageAnimations() {
  const page = document.querySelector(".contact-page");

  if (
    !page ||
    typeof gsap === "undefined" ||
    typeof ScrollTrigger === "undefined"
  ) {
    return;
  }

  if (page.dataset.contactAnimated === "true") {
    return;
  }

  page.dataset.contactAnimated = "true";

  gsap.registerPlugin(ScrollTrigger);

  if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
    return;
  }

  gsap.from(
    ".contact-page-breadcrumb, .contact-page-kicker, .contact-page-hero-content h1, .contact-page-hero-content p",
    {
      y: 30,
      duration: 0.8,
      stagger: 0.1,
      ease: "power3.out",
      clearProps: "transform",
    },
  );

  gsap.from(".contact-page-heading", {
    y: 40,
    duration: 0.8,
    ease: "power3.out",
    scrollTrigger: {
      trigger: ".contact-page-heading",
      start: "top 82%",
      once: true,
    },
  });

  gsap.from(".contact-page-form-card, .contact-page-info", {
    y: 45,
    duration: 0.8,
    stagger: 0.15,
    ease: "power3.out",
    scrollTrigger: {
      trigger: ".contact-page-layout",
      start: "top 82%",
      once: true,
    },
  });

  gsap.from(".contact-map-section", {
    y: 35,
    duration: 0.8,
    ease: "power3.out",
    scrollTrigger: {
      trigger: ".contact-map-section",
      start: "top 88%",
      once: true,
    },
  });
}

function initBlogPageAnimations() {
  const page = document.querySelector(".blog-page");

  if (
    !page ||
    typeof gsap === "undefined" ||
    typeof ScrollTrigger === "undefined"
  ) {
    return;
  }

  if (page.dataset.blogAnimated === "true") {
    return;
  }

  page.dataset.blogAnimated = "true";

  gsap.registerPlugin(ScrollTrigger);

  if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
    return;
  }

  gsap.from(
    ".blog-page-breadcrumb, .blog-page-kicker, .blog-page-hero-content h1, .blog-page-hero-content p",
    {
      y: 35,
      duration: 0.8,
      stagger: 0.1,
      ease: "power3.out",
      clearProps: "transform",
    },
  );

  gsap.from(".blog-page-heading", {
    y: 40,
    duration: 0.8,
    ease: "power3.out",
    scrollTrigger: {
      trigger: ".blog-page-heading",
      start: "top 82%",
      once: true,
    },
  });

  gsap.from(".blog-page-card", {
    y: 45,
    duration: 0.8,
    stagger: 0.1,
    ease: "power3.out",
    scrollTrigger: {
      trigger: ".blog-page-grid",
      start: "top 82%",
      once: true,
    },
  });

  gsap.from(".blog-page-cta-inner", {
    y: 40,
    duration: 0.8,
    ease: "power3.out",
    scrollTrigger: {
      trigger: ".blog-page-cta",
      start: "top 82%",
      once: true,
    },
  });
}

function initSingleBlogPageAnimations() {
  const page = document.querySelector(".ramzi-single-blog-page");

  if (!page) return;

  if (typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") {
    return;
  }

  if (page.dataset.singleBlogAnimated === "true") return;

  page.dataset.singleBlogAnimated = "true";

  gsap.registerPlugin(ScrollTrigger);

  const reduceMotion = window.matchMedia(
    "(prefers-reduced-motion: reduce)",
  ).matches;

  if (reduceMotion) {
    gsap.set(
      [
        ".ramzi-single-blog-breadcrumb",
        ".ramzi-single-blog-image-wrap",
        ".ramzi-single-blog-meta",
        ".ramzi-single-blog-title",
        ".ramzi-single-blog-content",
        ".ramzi-single-blog-author",
        ".ramzi-single-blog-sidebar > *",
        ".ramzi-single-blog-cta-inner",
      ],
      {
        clearProps: "all",
      },
    );

    return;
  }

  gsap.from(".ramzi-single-blog-breadcrumb", {
    y: 18,
    opacity: 0,
    duration: 0.7,
    ease: "power3.out",
    clearProps: "transform,opacity",
  });

  gsap.from(".ramzi-single-blog-image-wrap", {
    y: 35,
    opacity: 0,
    duration: 1,
    delay: 0.1,
    ease: "power3.out",
    clearProps: "transform,opacity",
    scrollTrigger: {
      trigger: ".ramzi-single-blog-top",
      start: "top 82%",
      once: true,
    },
  });

  gsap.from([".ramzi-single-blog-meta", ".ramzi-single-blog-title"], {
    y: 28,
    opacity: 0,
    duration: 0.8,
    stagger: 0.12,
    ease: "power3.out",
    clearProps: "transform,opacity",
    scrollTrigger: {
      trigger: ".ramzi-single-blog-image-wrap",
      start: "bottom 82%",
      once: true,
    },
  });

  gsap.from(".ramzi-single-blog-content", {
    y: 35,
    opacity: 0,
    duration: 0.9,
    ease: "power3.out",
    clearProps: "transform,opacity",
    scrollTrigger: {
      trigger: ".ramzi-single-blog-content",
      start: "top 84%",
      once: true,
    },
  });

  gsap.from(".ramzi-single-blog-sidebar > *", {
    x: 30,
    opacity: 0,
    duration: 0.8,
    stagger: 0.15,
    ease: "power3.out",
    clearProps: "transform,opacity",
    scrollTrigger: {
      trigger: ".ramzi-single-blog-sidebar",
      start: "top 82%",
      once: true,
    },
  });

  gsap.from(".ramzi-single-blog-author, .ramzi-single-blog-back", {
    y: 25,
    opacity: 0,
    duration: 0.75,
    stagger: 0.12,
    ease: "power3.out",
    clearProps: "transform,opacity",
    scrollTrigger: {
      trigger: ".ramzi-single-blog-author",
      start: "top 88%",
      once: true,
    },
  });

  gsap.from(".ramzi-single-blog-cta-inner", {
    y: 35,
    opacity: 0,
    duration: 0.9,
    ease: "power3.out",
    clearProps: "transform,opacity",
    scrollTrigger: {
      trigger: ".ramzi-single-blog-cta",
      start: "top 82%",
      once: true,
    },
  });

  if (window.matchMedia("(min-width: 992px)").matches) {
    gsap.to(".ramzi-single-blog-featured-image", {
      y: -18,
      ease: "none",
      scrollTrigger: {
        trigger: ".ramzi-single-blog-image-wrap",
        start: "top bottom",
        end: "bottom top",
        scrub: 1,
      },
    });
  }

  ScrollTrigger.refresh();
}

function initSingleServicePageAnimations() {
  const page = document.querySelector(".single-service-page");

  if (!page) return;

  if (typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") {
    return;
  }

  if (page.dataset.serviceAnimated === "true") {
    return;
  }

  page.dataset.serviceAnimated = "true";

  gsap.registerPlugin(ScrollTrigger);

  if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
    return;
  }

  gsap.from(".single-service-breadcrumb, .single-service-hero-content > *", {
    y: 28,
    opacity: 0,
    duration: 0.8,
    stagger: 0.12,
    ease: "power3.out",
    clearProps: "transform,opacity",
  });

  gsap.from(".single-service-main-image", {
    y: 35,
    opacity: 0,
    duration: 0.9,
    ease: "power3.out",
    clearProps: "transform,opacity",
    scrollTrigger: {
      trigger: ".single-service-main-section",
      start: "top 82%",
      once: true,
    },
  });

  gsap.from(".single-service-article", {
    y: 35,
    opacity: 0,
    duration: 0.85,
    ease: "power3.out",
    clearProps: "transform,opacity",
    scrollTrigger: {
      trigger: ".single-service-article",
      start: "top 84%",
      once: true,
    },
  });

  gsap.from(".single-service-sidebar > *", {
    x: 30,
    opacity: 0,
    duration: 0.8,
    stagger: 0.12,
    ease: "power3.out",
    clearProps: "transform,opacity",
    scrollTrigger: {
      trigger: ".single-service-sidebar",
      start: "top 82%",
      once: true,
    },
  });

  gsap.from(".single-service-areas .area-button", {
    y: 24,
    opacity: 0,
    duration: 0.6,
    stagger: 0.05,
    ease: "power3.out",
    clearProps: "transform,opacity",
    scrollTrigger: {
      trigger: ".single-service-areas",
      start: "top 84%",
      once: true,
    },
  });

  gsap.from(".single-service-areas .areas-label", {
    y: 20,
    opacity: 0,
    duration: 0.7,
    ease: "power3.out",
    clearProps: "transform,opacity",
    scrollTrigger: {
      trigger: ".single-service-areas",
      start: "top 88%",
      once: true,
    },
  });

  if (window.matchMedia("(min-width: 992px)").matches) {
    gsap.to(".single-service-hero-bg", {
      y: 35,
      ease: "none",
      scrollTrigger: {
        trigger: ".single-service-hero",
        start: "top top",
        end: "bottom top",
        scrub: 1,
      },
    });
  }

  ScrollTrigger.refresh();
}

function initServiceSwitcher() {
  const toggle = document.querySelector(".service-switcher-toggle");
  const menu = document.querySelector(".service-switcher-menu");
  const close = document.querySelector(".service-switcher-close");

  if (!toggle || !menu) {
    return;
  }

  function openMenu() {
    toggle.classList.add("is-open");
    menu.classList.add("is-open");
    toggle.setAttribute("aria-expanded", "true");
    document.body.classList.add("service-menu-open");
  }

  function closeMenu() {
    toggle.classList.remove("is-open");
    menu.classList.remove("is-open");
    toggle.setAttribute("aria-expanded", "false");
    document.body.classList.remove("service-menu-open");
  }

  toggle.addEventListener("click", function () {
    if (menu.classList.contains("is-open")) {
      closeMenu();
    } else {
      openMenu();
    }
  });

  if (close) {
    close.addEventListener("click", closeMenu);
  }

  document.addEventListener("click", function (event) {
    if (
      menu.classList.contains("is-open") &&
      !menu.contains(event.target) &&
      !toggle.contains(event.target)
    ) {
      closeMenu();
    }
  });

  document.addEventListener("keydown", function (event) {
    if (event.key === "Escape") {
      closeMenu();
    }
  });
}
function initDynamicMenuDropdowns() {
  const menuItems = document.querySelectorAll(
    ".ramzi-header .navbar-nav .menu-item-has-children",
  );

  if (!menuItems.length) {
    return;
  }

  menuItems.forEach((item) => {
    const link = item.querySelector(":scope > a");
    const submenu = item.querySelector(":scope > .sub-menu");

    if (!link || !submenu) {
      return;
    }

    if (item.querySelector(":scope > .submenu-toggle")) {
      return;
    }

    /* Wrap link + button */
    const wrapper = document.createElement("div");
    wrapper.className = "nav-link-wrap";

    link.parentNode.insertBefore(wrapper, link);
    wrapper.appendChild(link);

    /* Create dropdown button */
    const button = document.createElement("button");

    button.type = "button";
    button.className = "submenu-toggle";
    button.setAttribute("aria-expanded", "false");
    button.setAttribute("aria-label", "Open submenu");

    button.innerHTML = `
            <svg viewBox="0 0 24 24" aria-hidden="true">
                <path
                    d="M6 9l6 6 6-6"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round">
                </path>
            </svg>
        `;

    wrapper.appendChild(button);

    /* Toggle submenu */
    button.addEventListener("click", function (event) {
      event.preventDefault();
      event.stopPropagation();

      const isOpen = item.classList.contains("submenu-open");

      /* Close sibling dropdowns */
      const parent = item.parentElement;

      parent
        .querySelectorAll(":scope > .menu-item-has-children.submenu-open")
        .forEach((sibling) => {
          if (sibling !== item) {
            sibling.classList.remove("submenu-open");

            const siblingButton = sibling.querySelector(
              ":scope > .nav-link-wrap > .submenu-toggle",
            );

            if (siblingButton) {
              siblingButton.setAttribute("aria-expanded", "false");
            }
          }
        });

      if (isOpen) {
        item.classList.remove("submenu-open");
        button.setAttribute("aria-expanded", "false");
      } else {
        item.classList.add("submenu-open");
        button.setAttribute("aria-expanded", "true");
      }
    });
  });
}

(function () {
  var visual = document.querySelector(".ssh-visual");

  if (!visual || !("IntersectionObserver" in window)) return;
  if (!window.matchMedia("(max-width: 900px)").matches) return;
  if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) return;

  visual.classList.add("ssh-armed");

  var observer = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          visual.classList.add("is-visible");
          observer.disconnect();
        }
      });
    },
    { threshold: 0.2 },
  );

  observer.observe(visual);
})();
