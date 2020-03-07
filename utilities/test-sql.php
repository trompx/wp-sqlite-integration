<?php

include("../query_alter.class.php");

$alter = new AlterQuery();

var_dump($alter->rewrite_query("ALTER TABLE `wp_redirection_items` ADD `match_url` VARCHAR(2000) NULL DEFAULT NULL AFTER `url`","ALTER"));

?>
