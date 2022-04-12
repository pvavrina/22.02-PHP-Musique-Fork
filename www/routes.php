<?php

// ---- TODO : Commenter ce bout de code, qu'est-ce qu'il recherche ? ----
require_once __DIR__ . "/controllers/BaseController.php";
require_once __DIR__ . "/controllers/ArtisteController.php";
require_once __DIR__ . "/controllers/MusiqueController.php";
require_once __DIR__ . "/controllers/StyleController.php";
// require_once __DIR__ . "/controllers/ArtisteMusiqueController.php";

// ---- TODO : Commenter ce bout de code ----
$routes = [
  "/api/artistes/list" => ['GET', 'ArtisteController', 'getList'],
  "/api/artistes/get" => ['GET', 'ArtisteController', 'get'],
  "/api/artistes/add" => ['POST', 'ArtisteController', 'store'],
  "/api/artistes/update" => ['PUT', 'ArtisteController', 'update'],
  "/api/artistes/remove" => ['DELETE', 'ArtisteController', 'destroy'],
  "/api/artiste_groupe_musique/get" => ['GET', 'ArtisteController', 'getArtisteGroupeMusique'],

  "/api/musique/list" => ['GET', 'MusiqueController', 'getList'],
  "/api/musique/get" => ['GET', 'MusiqueController', 'get'],
  "/api/musique/artistetitle" => ['GET', 'MusiqueController', 'getArtisteTitle'],
  "/api/musique/add" => ['POST', 'MusiqueController', 'store'],
  "/api/musique/update" => ['PUT', 'MusiqueController', 'update'],
  "/api/musique/remove" => ['DELETE', 'MusiqueController', 'destroy'],
  

  "/api/style/list" => ['GET', 'StyleController', 'getList'],
  "/api/style/get" => ['GET', 'StyleController', 'get'],
  "/api/style/add" => ['POST', 'StyleController', 'store'],
  "/api/style/update" => ['PUT', 'StyleController', 'update'],
  "/api/style/remove" => ['DELETE', 'StyleController', 'destroy'],
  "/api/style_musique/get" => ['GET', 'StyleController', 'getStyleMusique' ],

];
