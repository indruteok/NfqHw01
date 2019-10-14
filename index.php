<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

try {
    require __DIR__ . '/vendor/autoload.php';

    $root = new Nfq\Root();
    echo 'calculateHomeWorkSum: ' .
        $root->calculateHomeWorkSum(3, 2.2, '1') . '<br>';

    $notTyped = new Nfq\Akademija\NotTyped\NotTyped();
    echo 'Nfq\Akademija\NotTyped\calculateHomeWorkSum: ' .
        $notTyped->calculateHomeWorkSum(3, 2.2, '1') . '<br>';

    $soft = new Nfq\Akademija\Soft\Soft();
    echo 'Nfq\Akademija\Soft\calculateHomeWorkSum: ' .
        $soft->calculateHomeWorkSum(3, 2.2, '1') . '<br>';

    $strict = new Nfq\Akademija\Strict\Strict();
    echo 'Nfq\Akademija\Strict\calculateHomeWorkSum: ' .
        $strict->calculateHomeWorkSum(3, 2.2, '1') . '<br>';


} catch (\Throwable $exp) {
    var_export($exp);
}
?>