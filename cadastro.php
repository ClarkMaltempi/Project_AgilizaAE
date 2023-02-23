

<?php include('inc/header.php')?>


<div class="container-cad">
    <div class="container">
        <div class="row no-gutters justify-content-center">
            <div class="col-7">
                <div class="d-flex justify-content-center">
                    <img src="assets/img/logotipo/logo_app.png" class="w-50">
                </div>
                <br>
                <h3 class="mb-3 text-center">Criar Cadastro</h3>
                <br>
                <form action="" class="cad-geral" method="POST">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="m-1">
                                <h5 class="mb-0 text-center">Informações da Loja</h5>
                            </div>
                        </div>
                       
                        <div class="col-7">
                            <div class="m-1">
                                <div class="form-group mb-0">
                                    <label for="">Nome Fantasia</label>
                                    <input type="text" class="form-control" data-name="nome da empresa" name="nm_empresa">
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="m-1">
                                <div class="form-group mb-0">
                                    <label for="">CNPJ</label>
                                    <input type="text" class="form-control" data-name="cnpj da empresa" name="cnpj">
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="m-1">
                                <div class="form-group mb-0">
                                    <label for="">Rua</label>
                                    <input type="text" class="form-control" data-name="endereco da empresa" name="endereco">
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="m-1">
                                <div class="form-group mb-0">
                                    <label for="">Nº</label>
                                    <input type="text" class="form-control" data-name="numero_" name="numero">
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="m-1">
                                <div class="form-group mb-0">
                                    <label for="">Bairro</label>
                                    <input type="text" class="form-control" data-name="bairro_" name="bairro">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="m-1">
                                <h5 class="mb-0 text-center">Horario de Funcionamento</h5>
                            </div>
                        </div>

                        <div class="col-2">
                            <div class="m-1">
                                <div class="form-group mb-0">
                                    <label for="">Inicio</label>
                                    <input type="text" class="form-control" data-name="hora inicio" name="hr_inicio">
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="m-1">
                                <div class="form-group mb-0">
                                    <label for="">Fim</label>
                                    <input type="text" class="form-control" data-name="hora final" name="hr_final">
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="m-1">
                                <div class="form-group mb-0">
                                    <label for="">Dia Fechado</label>
                                    <input type="text" class="form-control" data-name="Dia da semana Fechado_" name="dsfechado">
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="mt-5 mb-1 mx-1">
                                <h5 class="mb-0 text-center">Informações do Usuário</h5>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="m-1">
                                <div class="form-group mb-0">
                                    <label for="">Nome</label>
                                    <input type="text" class="form-control" data-name="nome do gestor" name="gestor">
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="m-1">
                                <div class="form-group mb-0">
                                    <label for="">CPF</label>
                                    <input type="text" class="form-control" data-name="cpf do gestor" name="cpf">
                                </div>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="m-1">
                                <div class="form-group mb-0">
                                    <label for="">E-mail</label>
                                    <input type="text" class="form-control" data-name="email do gestor" name="emailgestor">
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="m-1">
                                <div class="form-group mb-0">
                                    <label for="">Telefone</label>
                                    <input type="text" class="form-control" data-name="telefone do gestor" name="telgestor">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mt-5 mb-0 mx-1 d-flex justify-content-center">
                                <input type="submit" class="btn btn-primary"></input> 
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php


    //if ($_SERVER["REQUEST_METHOD"] == "POST") { //Escuta evento Formulário
    include("conexao_.php");

    //$nomerestaurante = $_POST['nm_empresa'];
    //$cnpj = $_POST['cnpj'];
    if (isset($_POST['nm_empresa'])) {
        //cod_restaurantes	cod_gestor	nm_restaurante	cnpj	ds_endereco = Dados Restaurantes
        $sql = $pdo->prepare("INSERT INTO restaurantes VALUES (null,null,?,?,?)");
        $sql->execute(array($_POST['nm_empresa'],$_POST['cnpj'],$_POST['endereco']));
        

        //cod_funcionamento	cod_restaurantes	ds_diasemana	hr_inicio	hr_final	= Funcionamento horário
        $sql = $pdo->prepare("INSERT INTO funcionamento VALUES (null,null,?,?,?)");
        $sql->execute(array($_POST['dsfechado'],$_POST['hr_inicio'],$_POST['hr_final']));

        //cod_gestor	cpf	telefone	email	nm_gestor
        $sql = $pdo->prepare("INSERT INTO administrador VALUES (null,?,?,?,?)");
        $sql->execute(array($_POST['cpf'],$_POST['telgestor'],$_POST['emailgestor'],$_POST['gestor']));

    echo '<script>alert("Inserido com sucesso");</script>';
    }

    
    //echo "nome: ".$nomerestaurante;

    //$cnpj = mysqli_real_escape_string($conexao, trim($_POST["cnpj"]));
    //$endereco = mysqli_real_escape_string($conexao, trim($_POST["endereco"]));
    //$nmempresa = mysqli_real_escape_string($conexao, trim($_POST["nm_empresa"]));
    //$bairro = mysqli_real_escape_string($conexao, trim($_POST["bairro"]));
    //$gestor = mysqli_real_escape_string($conexao, trim($_POST["gestor"]));
    //$cpf = mysqli_real_escape_string($conexao, trim($_POST["cpf"]));
    //$emailgestor = mysqli_real_escape_string($conexao, trim($_POST["emailgestor"]));
    //$telgestor = mysqli_real_escape_string($conexao, trim($_POST["telgestor"]));

    //$hr_inicio = mysqli_real_escape_string($conexao, trim($_POST["hr_inicio"]));
    //$hr_final = mysqli_real_escape_string($conexao, trim($_POST["hr_final"]));
    //$dsfechado = mysqli_real_escape_string($conexao, trim($_POST["dsfechado"]));

    //$a = NULL;

    //$sql = "INSERT INTO funcionamento (cod_funcionamento, cod_restaurantes, ds_diasemana, hr_inicio, hr_final) 
    //VALUES ('".$a."','".$a. "','".$dsfechado."','".$hr_inicio."','".$hr_final."')";
    //$conexao->query($sql);

    //$sql = "INSERT INTO restaurantes (cod_restaurantes,	cod_gestor,	nm_restaurante,	cnpj, ds_endereco) 
    //VALUES ('".$a."','".$a."','".$nmempresa."','".$cnpj."','".$endereco."')";
    //$conexao->query($sql);


    //$sqlid = "SELECT cod_restaurante FROM funcionamento ORDER BY cod_restaurante DESC LIMIT 1";
    //$r = $conexao->query($sqlid);
    //$rowid = $r->fetch_assoc();
    //$cd_gestor = $rowid["cod_restaurante"];

    //$sqlid = "SELECT cod_restaurante FROM restaurantes ORDER BY cod_restaurante DESC LIMIT 1";
    //$r = $conexao->query($sqlid);
    //$rowid = $r->fetch_assoc();
    //$cd_gestor = $rowid["cod_restaurante"];


    
    
//}

?>



<?php include('inc/footer.php')?>