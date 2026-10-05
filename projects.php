<?php
/**
 * Template Name: Projects
 */
?>

<?php get_header(); ?>

<?php
$theme_uri = get_template_directory_uri();
?>

<main class="projects-page">

	<section class="projects-hero">
		<div class="projects-hero-bg"></div>
		<div class="projects-hero-overlay"></div>

		<div class="container projects-hero-inner">
			<div class="projects-breadcrumb">
				<a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
				<span>/</span>
				<span>Projects</span>
			</div>

			<div class="projects-hero-content">
				<span class="projects-kicker">Our Gallery</span>
				<h1>Spaces shaped<br><strong>with intention.</strong></h1>
				<p>Explore the finishes, transformations and details that make every Ramzi Interior project feel
					considered.</p>
			</div>
		</div>
	</section>

	<section class="projects-gallery-section">
		<div class="container">
			<div class="projects-gallery-box">
				<div class="projects-gallery-heading-simple">
					<span class="projects-section-label">Selected Work</span>
					<h2><strong>Our Gallery</strong><br>Made to be lived in.</h2>
					<p>A closer look at the finishes, textures and spaces shaped by the Ramzi Interior team.</p>
				</div>

				<div class="projects-gallery-cards">
					<figure class="projects-image-card">
						<a href="<?php echo esc_url($theme_uri . '/assets/gallery1.png'); ?>"
							data-fancybox="projects-gallery" data-caption="Interior painting project">
							<img src="<?php echo esc_url($theme_uri . '/assets/gallery1.png'); ?>"
								alt="Interior painting project" loading="lazy">
							<span class="projects-image-zoom" aria-hidden="true"><i class="bi bi-zoom-in"></i></span>
						</a>
					</figure>
					<figure class="projects-image-card">
						<a href="<?php echo esc_url($theme_uri . '/assets/gallery2.png'); ?>"
							data-fancybox="projects-gallery" data-caption="Polished plaster interior project">
							<img src="<?php echo esc_url($theme_uri . '/assets/gallery2.png'); ?>"
								alt="Polished plaster interior project" loading="lazy">
							<span class="projects-image-zoom" aria-hidden="true"><i class="bi bi-zoom-in"></i></span>
						</a>
					</figure>
					<figure class="projects-image-card">
						<a href="<?php echo esc_url($theme_uri . '/assets/gallery3.png'); ?>"
							data-fancybox="projects-gallery" data-caption="Plastering project">
							<img src="<?php echo esc_url($theme_uri . '/assets/gallery3.png'); ?>"
								alt="Plastering project" loading="lazy">
							<span class="projects-image-zoom" aria-hidden="true"><i class="bi bi-zoom-in"></i></span>
						</a>
					</figure>
					<figure class="projects-image-card">
						<a href="<?php echo esc_url($theme_uri . '/assets/gallery4.png'); ?>"
							data-fancybox="projects-gallery" data-caption="Finished interior project">
							<img src="<?php echo esc_url($theme_uri . '/assets/gallery4.png'); ?>"
								alt="Finished interior project" loading="lazy">
							<span class="projects-image-zoom" aria-hidden="true"><i class="bi bi-zoom-in"></i></span>
						</a>
					</figure>
					<figure class="projects-image-card">
						<a href="<?php echo esc_url($theme_uri . '/assets/gallery5.png'); ?>"
							data-fancybox="projects-gallery" data-caption="Interior finishing project">
							<img src="<?php echo esc_url($theme_uri . '/assets/gallery5.png'); ?>"
								alt="Interior finishing project" loading="lazy">
							<span class="projects-image-zoom" aria-hidden="true"><i class="bi bi-zoom-in"></i></span>
						</a>
					</figure>
					<figure class="projects-image-card">
						<a href="<?php echo esc_url($theme_uri . '/assets/gallery6.png'); ?>"
							data-fancybox="projects-gallery" data-caption="Exterior painting project">
							<img src="<?php echo esc_url($theme_uri . '/assets/gallery6.png'); ?>"
								alt="Exterior painting project" loading="lazy">
							<span class="projects-image-zoom" aria-hidden="true"><i class="bi bi-zoom-in"></i></span>
						</a>
					</figure>
				</div>
			</div>
		</div>
	</section>

</main>


<?php get_footer(); ?>