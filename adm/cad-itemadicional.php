<?php include('inc/header.php')?>
    <?php include('inc/navbar.php')?>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <?php include('inc/navegacao-lateral.php')?>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center px-4 py-4 mb-3 border-bottom">
                    <h3 class="h2 mb-0">Cadastro - item adicional</h3>
                </div>
                <div class="p-3" style="height:100vh">
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="row no-gutters">
                                <div class="col-6">
                                    <form id="cadItemAd" method="" action="">
                                        <div class="row no-gutters justify-content-end">
                                            <div class="col-7">
                                                <div class="form-group mb-0">
                                                    <label for="">Nome Item adicional</label>
                                                    <input type="text" class="form-control" data-name="Categoria do Produto">
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="mx-1">
                                                    <label for="">Valor</label>
                                                    <div class="form-group d-flex mb-0">
                                                        <input type="text" class="form-control" data-name="" name="">&nbsp;
                                                        <button type="submit" class="btn btn-primary p-1 w-100">Cadastrar item</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="col-6">
                            <div class="mx-1">
                                <h5 class="mb-2">Itens Adicionais Ativos</h5>
                            </div>
                            <div class="my-3">
                                <ul class="list-group">
                                    <li class="list-group-item bg-light d-flex align-items-center justify-content-between">
                                        <strong class="h6 mb-0">Nome do Item Adicional | R$ 00.00</strong> 
                                        <div class="btn-area">
                                            <a href="" class="btn btn-danger" title="deletar"><i class="fa-solid fa-trash"></i></a>
                                            <a href="" class="btn btn-primary" title="editar"><i class="fa-solid fa-pencil"></i></a>
                                            <a href="" class="btn btn-secondary" title="ocultar"><i class="fa-solid fa-eye-slash"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mx-3">         
                                <div class="mx-1">
                                    <h5 class="mb-2">Itens Adicionais Inativos</h5>
                                </div>
                                <div class="my-3">
                                    <ul class="list-group">
                                        <li class="list-group-item d-flex align-items-center justify-content-between">
                                            <strong class="h6 mb-0">Nome do item Adicional | R$ 00.00</strong> 
                                            <div class="btn-area-two">
                                                <a href="" class="btn btn-danger" title="deletar"><i class="fa-solid fa-trash"></i></a>
                                                <a href="" class="btn btn-secondary" title="mostrar"><i class="fa-solid fa-eye"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

<?php include('inc/footer.php')?>
