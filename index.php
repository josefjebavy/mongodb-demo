

<?php

$m = new MongoClient();

$db = $m->comedy;

$collection = $db->cartoons;

$document = array( "title" => "mongodb navod", "author" => "josef jebavy" );

$collection->insert($document);


$cursor = $collection->find();

foreach ($cursor as $document) {
    echo $document["title"] . " - ".   $document["author"]."<br> \n";

}

?>
