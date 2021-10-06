<?php
include_once '../model/Conexao.php';
include_once '../model/Manager.php';

$manager = new Manager();

$data = $_POST;

if (isset($data) && !empty($data)) {
    $manager->inserirCliente("clientes", $data);

    header("Location: ../index.php?cliente_inserido_sucesso");
}
