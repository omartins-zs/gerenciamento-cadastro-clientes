<?php include_once '../public/dependencias.php' ?>

<h2 class="text-center">
    Pagina de registro <i class="fa fa-list"></i>
</h2>

<form action="../controller/inserir_cliente.php" method="post">
    <div class="container">
        <div class="form-row">
            <div class="col-md-6">
                Nome:<i class="fa fa-user"></i>
                <input type="text" class="form-control" name="nome" required autofocus>
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
                <input type="date" class="form-control" name="dtnascimento" required>
            </div>
            <div class="col-md-4">
                Telefone:<i class="fab fa-whatsapp"></i>
                <input type="text" class="form-control" name="telefone" required id="telefone">
            </div>
            <div class="col-md-12">
                Endereço:<i class="fa fa-map"></i>
                <input type="text" class="form-control" name="endereco" required><br>
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

<!-- Jquery  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Mask -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $("#cpf").mask("000.000.000-00");
        $("#telefone").mask("(00) 00000-0000");
    })
</script>