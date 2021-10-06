<?php include_once '../public/dependencias.php';
include_once '../model/Conexao.php';
include_once '../model/Manager.php';

$m = new Manager();

$id = $_POST['id'];

?>

<h2 class="text-center">
    Pagina de registro <i class="fa fa-list"></i>
</h2>

<form action="../controller/update_cliente.php" method="post">
    <div class="container">
        <div class="form-row">
            <?php foreach($m->getInfo('clientes', $id) as $c):?>
            <div class="col-md-6">
                Nome:<i class="fa fa-user"></i>
                <input type="text" class="form-control" value="<?= $c['nome']?>" name="nome" required autofocus>
            </div>
            <div class="col-md-6">
                Email:<i class="fa fa-envelope"></i>
                <input type="email" class="form-control" value="<?= $c['email']?>" name="email" required>
            </div>
            <div class="col-md-4">
                CPF:<i class="fa fa-address-card"></i>
                <input type="text" class="form-control" name="cpf" value="<?= $c['cpf']?>" required id="cpf">
            </div>
            <div class="col-md-4">
                Dt. de Nascimento:<i class="fa fa-calendar"></i>
                <input type="date" class="form-control" name="dtnascimento" value="<?= $c['dtnascimento']?>" required>
            </div>
            <div class="col-md-4">
                Telefone:<i class="fab fa-whatsapp"></i>
                <input type="text" class="form-control" name="telefone" value="<?= $c['telefone']?>" required id="telefone">
            </div>
            <div class="col-md-12">
                Endereço:<i class="fa fa-map"></i>
                <input type="text" class="form-control" name="endereco" value="<?= $c['endereco']?>" required><br>
            </div>
            <input type="hidden" name="id"  value="<?= $c['id']?>">
               <?php endforeach; ?>
            <div class="col-md-4">
                <a href="../index.php" class="btn btn-primary btn-lg">
                    Voltar<i class="fa fa-arrow-circle-left"></i>
                </a>
            </div>
            <div class="col-md-8 text-right">
                <button class="btn btn-warning btn-lg">
                 Alterar Cliente <i class="fa fa-user-edit"></i>
                </button>
            </div>
            <!-- <div class="col-md-6">
                        Nome: <i class="fa fa-user"></i>
                        <input type="text" class="form-control" name="name" required autofocus>
                    </div> -->
        </div>
    </div>
</form>