<?php
// Thin wrapper — real connection logic lives in config/db.php
require_once __DIR__ . '/../config/db.php';
$conn = xtrac_connect('main');
$dbname = 'xlens';
