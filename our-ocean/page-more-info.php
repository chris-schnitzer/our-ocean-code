<?php
/**
 * Template Name: More Info
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Our_Ocean
 */

get_header();
?>

	<main id="primary" class="site-main more-info-main">
		<section id="opening">
			<h1>Our Ocean is dedicated to restoring the ocean to health by addressing the many types of marine pollution.</h1>
			<p>Marine pollution occurs when harmful effects, tor potentially harmful effects, can result from the entry into the ocean of chemicals, particles, industrial, agricultural and residential waste, noise, or the spread of invasive organisms. ... In this way, the toxins are concentrated upward within ocean food chains.</p>
		</section>

		<section id="types-poll-wrap">
			<h2>The many “flavours” of marine pollution:</h2>
			<article class="poll-wrapper">
				<img src="<?php echo get_template_directory_uri(); ?>/img/chem_poll_thumb.jpg" alt="Chemical Pollution">
				<h3>Chemical Pollution</h3>
				<p>Chemical pollution is the introduction of harmful contaminants. Common man-made pollutants that reach the ocean include pesticides, herbicides, fertilizers, detergents, oil, industrial chemicals, and sewage.</p>
				<a href="chemical-pollution">Read More</a>
			</article>
			<article class="poll-wrapper poll-wrap-2">
				<img src="<?php echo get_template_directory_uri(); ?>/img/noise_poll_thumb.jpg" alt="Noise Pollution">
				<h3>Noise Pollution</h3>
				<p>Pollution is not always visible. In large bodies of water, sound waves can carry undiminished for miles. The increased presence of loud or persistent sounds from ships, sonar devices, and oil rigs disrupts natural noises in the marine environment.</p>
				<a href="noise-pollution">Read More</a>
			</article>
			<article class="poll-wrapper">
				<img src="<?php echo get_template_directory_uri(); ?>/img/light_poll_thumb.jpg" alt="Light Pollution">
				<h3>Light Pollution</h3>
				<p>Since the invention of the lightbulb, light has spread across the globe, reaching almost every ecosystem. Often thought of as a terrestrial problem, scientists are starting to understand how artificial light at night affects many marine organisms.</p>
				<a href="light-pollution">Read More</a>
			</article>
			<article class="poll-wrapper poll-wrap-4">
				<img src="<?php echo get_template_directory_uri(); ?>/img/plastic_poll_thumb.jpg" alt="Plastic Pollution">
				<h3>Plastic Pollution</h3>
				<p>Plastic pollution seeps into the ocean through run-off and even purposeful dumping. The amount of plastic in the Atlantic Ocean has tripled since the 1960s. The garbage patch floating in the Pacific Ocean, almost 620,000 square miles...</p>
				<a href="plastic-pollution">Read More</a>
			</article>
		</section>

		<section class="sollution-wrap">
			<h2>Is there a fix to Marine Pollution?</h2>
			<p>Many national laws, as well as international agreements, now forbid dumping of harmful materials into the ocean, although enforcing these regulations remains a challenge.</p>
			<p>Many pollutants still persist in the environment, difficult to fully remove. Chemical pollutants often cannot be broken down for long periods of time, or they increase in concentration as they move up the food web. Because plastic is thought to take hundreds of years to break down, it poses a threat to the marine environment for centuries.</p>
			<p>Isolated efforts to restore estuaries and bays have met with some success, but pollution gets trapped in marine sediment and makes complete clean-ups nearly impossible.</p>
			<p>Moving forward, encouraging recycling and reuse can minimize plastic pollution. Dampening unnecessary lights at night can limit light pollution. And encouraging responsible chemical-use through consumer and political actions can protect the environment for the future.</p>
		</section>
	</main><!-- #main -->
<?php

get_footer();
