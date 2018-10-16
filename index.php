<?php

// Global functions
include_once 'core.php';

// Application code
include_once 'app.php';

// Load the page's header
get_header( 'dsthedev\'s dashboard' );

// Place program code here: ?>

		<main class="cell auto">

			<?php new App(); ?>

		</main>

		<section>

			<?php //debug($_SERVER); ?>

		</section>

<?php get_footer(); ?>