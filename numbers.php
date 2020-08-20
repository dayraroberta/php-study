<?php

echo 'Começando script de exibir número ímpar...' . PHP_EOL;
for ($counter = 1; $counter <= 100; $counter++) {
    if ($counter % 2 != 0) {
        echo $counter . PHP_EOL;
    } else {
        echo 'Número par' . PHP_EOL;
    }
}
