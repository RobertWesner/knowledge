<?php

require_once __DIR__ . '/../src/load.php';

/** @var list<KnowledgeCollection> $knowledgeCollections */
$knowledgeCollections = require __DIR__ . '/../config/knowledge.php';

$result = [];
foreach ($knowledgeCollections as $collection) {
    $result[$collection->getName()] = [];

    foreach ($collection->getAll() as $knowledge) {
        $result[$collection->getName()][$knowledge->getSanitizedName()] = [
            'name' => $knowledge->getName(),
            'level' => $knowledge->getLevel(),
            'years' => $knowledge->getYears(),
        ];
    }
}

echo json_encode($result);
