<?php

$options = [
  'app_name'           => "PirateBox",

  'base_path'          => "/var/www/piratebox/",
  'base_uri'           => "/",
  'max_space'          => 90, // in percent of the partition usage

  #'base_uploads'       => "/var/spool/piratebox/public/uploads/",
  #'base_chat'          => "/var/spool/piratebox/public/chat/",

  'allow_renaming'     => true,
  'allow_deleting'     => true,
  'allow_newfolders'   => true,

  'enable_chat'        => true,
  'default_pseudo'     => "anonymous",

  'time_format'        => "d/m/y H:i",
  'fancyurls'          => true,
];

?>
