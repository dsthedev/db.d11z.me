<?php

/**
 * App - The app's main class.
 */
class App {

	function __construct() {

		$this->main_content();

		// $this->get_input();
		// $this->get_output();
		// $this->get_debug();

	}

	function main_content() {

		echo <<<HTML
<ul class="dropdown menu" data-dropdown-menu>
  <li class="is-dropdown-submenu-parent">
    <a href="#">Local Hosts</a>
    <ul class="menu">
			<li><a href="http://localhost/" target="_blank">localhost</a></li>
			<li><a href="http://localhost:3030/" target="_blank">localhost:3030</a></li>
			<li><a href="http://172.16.64.202:8706/" target="_blank">172.16.64.202:8706</a></li>
    </ul>
  </li>
</ul>

HTML;

	}

	/**
	 * Build a form to get user input.
	 */
	function get_input() {

		echo <<<HTML

<form method="POST">
	<div class="input-group">
		<label class="input-group-label show-for-sr">User Input:</label>

		<input type="text" class="input-group-field" name="user_input" placeholder="Enter input here...">

		<div class="input-group-button">
			<button class="button" type="submit">Submit</button>
		</div>
	</div>
</form>

HTML;

	}

	/**
	 * Display output if something was entered.
	 */
	function get_output() {
		$output = '';

		if ( ! empty( $_POST['user_input'] ) ) {

			$output = <<<HTML

	<section>
		<h2>Input: <small>{$_POST['user_input']}</small></h2>
	</section>

HTML;

		}

		echo $output;

	}

	/**
	 * "Custom" debug function that uses core's.
	 */
	function get_debug() {
		$output = '';
		$debug_output = debug( $_POST );

		if ( isset( $_POST['user_input'] ) ) {
			$output = <<<HTML

	<section class="cell">
		$debug_output
	</section>

HTML;
		}

		echo $output;

	}
}
// FIN