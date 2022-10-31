<?php
    $file = "lista.csv";
    $current = file_get_contents($file);
    $current .= $_POST['email'] . "\n";
    file_put_contents($file, $current);


    header("Location: https://pay.hotmart.com/W7656322K?off=mby07vit&checkoutMode=10&bid=1571328415877");
exit();

?>