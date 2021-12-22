<?php

include_once __DIR__ .'./db.php';

header('Content-Type: application/jason');
echo json_encode($db);


?>