<?php

use App\PostTypes\CustomPost;
use App\PostTypes\GlobalSettings;
use App\PostTypes\GlobalThemeOptions;

// Initialise tous les Custom Post Types
new CustomPost();  // EXEMPLE : Custom Post Type universel

new GlobalThemeOptions(); // Options globales via ACF Pro (si actif)
new GlobalSettings(); // Paramètres globaux via CPT (fallback sans ACF Pro)
