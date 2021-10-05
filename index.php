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
            <table class="table table-hover">
                <thead class="thead">
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
                        <td>Nome</td>
                        <td>Email</td>
                        <td>CPF</td>
                        <td>Dt Nasc</td>
                        <td>Enderelo</td>
                        <td>Telefone</td>
                        <td>
                            <form action="" method="POST">
                                <button class="btn btn-warning btn-xs">
                                    <i class="fa fa-user-edit"></i>
                                </button>
                            </form>
                        </td>
                        <td>
                            <form action="" method="POST">
                                <button class="btn btn-danger btn-xs">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>

                    </tr>
                </tbody>

        </div>
    </div>
</body>

</html>