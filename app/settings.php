<?php
// this file should be in the theme

onepager()->optionsPanel("onepager")
  ->tab("general", "General")
  ->add(
    array("name" => "title"),
    array("name" => "type")
  )
  ->tab("options", "Options")
  ->add(
    array("name" => "title 1"),
    array("name" => "type 1")
  );

