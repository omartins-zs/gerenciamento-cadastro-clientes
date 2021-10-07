<?php
include_once 'model/Conexao.php';
include_once 'model/Manager.php';
include_once 'public/helper.php';

$manager = new Manager();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'public/dependencias.php'?>
</head>

<body>
    <div class="container">
        <h2 class="text-center">
            Lista de Clientes <i class="fa fa-users"></i>
        </h2>
        <h5 class="text-right">
            <a href="views/page_register.php" class="btn btn-primary btn-xs">
                <i class="fa fa-user-plus"></i>
            </a>
        </h5>
        <div class="table-responsive">
            <table class="table table-hover table-dark">
                <thead class="thead-dark">
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>CPF</th>
                        <th>Dt Nasc</th>
                        <th>Endereço</th>
                        <th>Telefone</th>
                        <th colspan="3">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php foreach ($manager->listaCliente('clientes')as $c):?>
                        <td> <?=$c['nome'];  ?></td>
                        <td> <?=$c['email'];  ?></td>
                        <td> <?=$c['cpf'];  ?></td>
                        <td> <?= formatDate($c['dtnascimento']);  ?></td>
                        <td> <?=$c['endereco'];  ?></td>
                        <td> <?=$c['telefone'];  ?></td>
                        <td>
                            <form action="views/page_update.php" method="POST">
                                <input type="hidden" name="id" value="<?= $c['id']?>">
                                <button class="btn btn-warning btn-xs">
                                    <i class="fa fa-user-edit"></i>
                                </button>
                            </form>
                        </td>
                        <td>
                            <form action="controller/delete_cliente.php" method="POST"
                                onclick="return confirm('Voce deseja excluir esse cliente?')">
                                <input type="hidden" name="id" value="<?= $c['id']?>">
                                <button class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>

                    </tr>
                    <?php endforeach; ?>
                </tbody>

        </div>
    </div>
</body>

</html>