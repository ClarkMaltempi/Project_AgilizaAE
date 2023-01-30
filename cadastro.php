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
                <form id="cad-geral" method="POST" action="">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="m-1">
                                <h5 class="mb-0 text-center">Informações da Loja</h5>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="m-1">
                                <div class="form-group mb-0">
                                    <label for="">Razão Social</label>
                                    <input type="text" class="form-control" data-name="" name="">
                                </div>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="m-1">
                                <div class="form-group mb-0">
                                    <label for="">Nome Fantasia</label>
                                    <input type="text" class="form-control" data-name="" name="">
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="m-1">
                                <div class="form-group mb-0">
                                    <label for="">CNPJ</label>
                                    <input type="text" class="form-control" data-name="" name="">
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="m-1">
                                <div class="form-group mb-0">
                                    <label for="">Rua</label>
                                    <input type="text" class="form-control" data-name="" name="">
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="m-1">
                                <div class="form-group mb-0">
                                    <label for="">Nº</label>
                                    <input type="text" class="form-control" data-name="" name="">
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="m-1">
                                <div class="form-group mb-0">
                                    <label for="">Bairro</label>
                                    <input type="text" class="form-control" data-name="" name="">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mt-5 mb-1 mx-1">
                                <h5 class="mb-0 text-center">Informações do Usuário</h5>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="m-1">
                                <div class="form-group mb-0">
                                    <label for="">Nome</label>
                                    <input type="text" class="form-control" data-name="" name="">
                                </div>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="m-1">
                                <div class="form-group mb-0">
                                    <label for="">E-mail</label>
                                    <input type="text" class="form-control" data-name="" name="">
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="m-1">
                                <div class="form-group mb-0">
                                    <label for="">Telefone</label>
                                    <input type="text" class="form-control" data-name="" name="">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mt-5 mb-0 mx-1 d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">Criar Cadastro</button> 
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('inc/footer.php')?>
