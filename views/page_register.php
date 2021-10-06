<?php include_once '../public/dependencias.php' ?>

<h2 class="text-center">
    Pagina de registro <i class="fa fa-list"></i>
</h2>

<form action="" method="post">
    <div class="container">
        <div class="form-row">
            <div class="col-md-6">
                Nome:<i class="fa fa-user"></i>
                <input type="text" class="form-control" name="name" required autofocus>
            </div>
            <div class="col-md-6">
                Email:<i class="fa fa-envelope"></i>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="col-md-4">
                CPF:<i class="fa fa-address-card"></i>
                <input type="text" class="form-control" name="cpf" required id="cpf">
            </div>
            <div class="col-md-4">
                Dt. de Nascimento:<i class="fa fa-calendar"></i>
                <input type="data" class="form-control" name="birth" required>
            </div>
            <div class="col-md-4">
                Telefone:<i class="fab fa-whatsapp"></i>
                <input type="text" class="form-control" name="phone" required id="phone">
            </div>
            <div class="col-md-12">
                Endereço:<i class="fa fa-map"></i>
                <input type="text" class="form-control" name="address" required><br>
            </div>
            <div class="col-md-4">
                <a href="../index.php" class="btn btn-success btn-lg">
                    Voltar<i class="fa fa-arrow-circle-left"></i>
                </a>
            </div>
            <div class="col-md-8 text-right">
                <button class="btn btn-primary btn-lg">
                    Inserir Cliente <i class="fa fa-user-plus"></i>
                </button>
            </div>
            <!-- <div class="col-md-6">
                        Nome: <i class="fa fa-user"></i>
                        <input type="text" class="form-control" name="name" required autofocus>
                    </div> -->
        </div>
    </div>
</form>