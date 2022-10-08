#!/usr/bin/php

<!--
	Page to provide ways people can support me.
-->

<?php
	include "helpers/body_open.php";
?>

		<h1>Support</h1>
		<p>	
			While I do not ask for anything, and prefer to take care of myself,
			I acknowledge that some people enjoy gift giving and would like to
			help me out. Below are my preferred ways that this be done.
		</p>

<?php
	include "helpers/section_open.php";
	include "subpages/support/gifts.php";
	include "helpers/section_close.php";

	include "helpers/section_open.php";
	include "subpages/support/donate.php";
	include "helpers/section_close.php";

	include "helpers/body_close.php";
?>

