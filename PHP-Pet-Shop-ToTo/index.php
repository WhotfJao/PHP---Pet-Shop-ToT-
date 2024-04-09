<?php
include_once "topo.php";
?>

<?php
if(isset($_GET['P'])){
    $p = $_GET['p'];
    switch($p){
        case 1: require_once "meio.php";
        break;
        case 2: require_once "servicos.php";
        break;
        case 3: require_once "precos.php";
        break;
        case 4: require_once "tutor.php";
        break;
        case 5: require_once "falecon.php";
        break;
        case 6: require_once "produtos.php";
        break;
    }

}
else{
    require_once "meio.php";
}

?>

<?php
require_once "rodape.php";
?>