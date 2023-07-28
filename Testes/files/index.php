<?php
$origem = 'texto.php';
$destino = './testes/newClass.php';
if (mkdir('./testes', 07777)) {
    echo 'pasta criada';
    if (copy($origem, $destino)) {
        echo 'copiado';
        $file = fopen($destino, 'w');
        fwrite($file, '<?php' . PHP_EOL);
        fwrite($file, '//insira seu codigo aqui' . PHP_EOL);
        fwrite($file, '?>' . PHP_EOL);
        fclose($file);
    }else {
        echo 'erro';
    }
}else {
    echo 'pasta nao criada';
}

?>