<?php
echo '<ul>';
foreach (scandir('Testes') as $pasta ) {
    if ($pasta !== '.' || $pasta !== '..') {
        echo "
            <li>
            <a href='Testes/".$pasta."/index.php'>$pasta</a> 
            </li>";
    }
}
echo '</ul>';
?>
