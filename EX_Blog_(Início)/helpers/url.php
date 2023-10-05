<?php
//Constrói a URL base do site combinando o protocolo,
//nome do servidor. diretorio atual e barra final
$BASE_URL ="http://" .$_SERVER['SERVER NAME'].dirname($_SERVER["REQUEST_URI"]. '?'). '';
?>