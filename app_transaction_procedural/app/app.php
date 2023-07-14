<?php 

declare(strict_types = 1);

function getTransactionsFiles(string $path): array {
    $files = [];
    foreach (scandir($path) as $file) {
        if (is_dir($file)) { continue; }
        $files[] = $path . $file;
    }
    return $files;
}

function getTransactions($fileName): array {
    
    if (!file_exists($fileName)) {
        trigger_error("Le fichier {$fileName} n'existe pas...", E_USER_ERROR);
    }

    $transactions = [];
    $file = fopen($fileName, 'r');
    fgetcsv($file);
    while (($transaction = fgetcsv($file)) != false) {
        $transactions[] = $transaction;
    }
    fclose($file);
    return $transactions;
}

?>