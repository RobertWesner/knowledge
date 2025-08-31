#! /bin/bash

(
  cd $(dirname "$0")
  php scripts/index.php > index.html
  php scripts/json.php > knowledge.json
)
