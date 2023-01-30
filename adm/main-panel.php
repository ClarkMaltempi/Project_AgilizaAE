<?php include('inc/header.php')?>
    <?php include('inc/navbar.php')?>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <?php include('inc/navegacao-lateral.php')?>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center px-4 py-4 mb-3 border-bottom">
                    <h3 class="h2 mb-0">McDonald's - Santa Casa</h3>
                </div>
                <div class="p-3" style="height:100vh">
                    <div class="row no-gutters">
                        <div class="col-6">
                            <h4 class="mb-3">Informações da Loja</h4>
                            <div class="row no-gutters">
                                <div class="col-12 border">
                                    <div class="m-2">
                                        <label>Razão Social</label>
                                        <h6>Lorenzo & Capadocci Alimentos ltda</h6>
                                    </div>                      
                                </div>
                                <div class="col-7 border">
                                    <div class="m-2">                                   
                                        <label>Nome Fantasia</label>
                                        <h6>McDonald's - Unidade Santa Casa</h6>
                                    </div>                      
                                </div>
                                <div class="col-5 border">
                                    <div class="m-2">
                                        <label>CNPJ</label>
                                        <h6>02.293.577/0001-64</h6>
                                    </div>                      
                                </div>
                                <div class="col-6 border">
                                    <div class="m-2">
                                        <label>Rua</label>
                                        <h6>Av. Dr. Cláudio Luiz da Costa</h6>
                                    </div>
                                </div>
                                <div class="col-2 border">
                                    <div class="m-2">
                                        <label>Nº</label>
                                        <h6>129</h6>
                                    </div>
                                </div>
                                <div class="col-4 border">
                                    <div class="m-2">
                                        <label>Bairro</label>
                                        <h6>Vila Belmiro</h6>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <h4 class="mb-3">Informações do Usuário</h4>
                            <div class="row no-gutters">
                                <div class="col-12 border">
                                    <div class="m-2">
                                        <label>Nome</label>
                                        <h6>Alcidez Lorenzo Bertoldi</h6>
                                    </div>                      
                                </div>
                                <div class="col-7 border">
                                    <div class="m-2">                                   
                                        <label>Email</label>
                                        <h6>alcidez_lb@macdonalds.com.br</h6>
                                    </div>                      
                                </div>
                                <div class="col-5 border">
                                    <div class="m-2">
                                        <label>Telefone</label>
                                        <h6>(13) 98710-6934</h6>
                                    </div>                      
                                </div>
                            </div>
                            <br>
                            <br>
                            <h4 class="mb-3">Cadastrar Horário de Funcionamento</h4>
                            <a href="cad-funcionamento" class="btn btn-primary">Incluir horários</a>
                        </div>
                        <div class="col-6">
                            <div class="mx-4">
                                <h4 class="mb-3">Alterar Cadastro</h4>
                                <h6 class="mb-0">Deseja <strong>alterar</strong> seu cadastro? Envie o formulário abaixo com os dados novos completos e nossa equipe, <strong>após a análise de sua solicitação</strong>, entrará em contato com você.</h6> 
                                <br>
                                <br>
                                <form>
                                    <div class="row no-gutters">
                                        <div class="col-12">
                                            <div class="m-1">
                                                <h6 class="mb-0">Informações da Loja</h6>
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
                                                <h6 class="mb-0">Informações do Usuário</h6>
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
                                            <div class="mt-3 mb-0 mx-1">
                                                <button type="submit" class="btn btn-primary">Enviar Solicitação</button> 
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>


<?php include('inc/footer.php')?>
