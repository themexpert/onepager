<?php
// this file should be in the theme

$onepagerOptionsPanel = onepager()->optionsPanel("onepager");

$onepagerOptionsPanel->addMenuPage(
	"onepager title", //page title
	"onepager", //menu name
	onepager()->url( 'assets/images/dashicon-onepager.svg' ) //menu icon
);

$onepagerOptionsPanel
->tab("general", "General")
->add(
	array("name"=>"title"),
	array("name"=>"type")
)
->tab("options", "Options")
->add(
	array("name"=>"title 1"),
	array("name"=>"type 1")
);