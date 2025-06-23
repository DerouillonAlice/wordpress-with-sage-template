<?php

use App\PostTypes\Services;
use App\PostTypes\CustomPost;
use App\PostTypes\GlobalSettings;

// Initialise tous les Custom Post Types
new Services();
new CustomPost();  // EXEMPLE : Custom Post Type universel
new GlobalSettings(); // Paramètres globaux du site
