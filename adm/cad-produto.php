<?php include('inc/header.php')?>
    <?php include('inc/navbar.php')?>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <?php include('inc/navegacao-lateral.php')?>
            </nav>
            <main id="cadArea" role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center px-4 py-4 mb-3 border-bottom">
                    <h3 class="h2 mb-0">Cadastro - Produto</h3>
                </div>
                <div class="p-3" style="height:100vh">
                    <div class="row no-gutters">
                        <div class="col-12 col-sm-6">
                            <div class="mx-1">
                                <h5 class="mb-2">Cadastrar Produto</h5>
                            </div>
                            <form id="" method="" action="">
                                <div class="row no-gutters">
                                    <div class="col-6">
                                        <div class="m-1">
                                            <div class="form-group mb-0">
                                                <label for="">Nome do Produto</label>
                                                <input type="text" class="form-control" data-name="" name="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="m-1">
                                            <div class="form-group mb-0">
                                                <label for="">Escolha a categoria</label>
                                                <select class="form-control" id="">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="m-1">
                                            <div class="form-group mb-0">
                                                <label for="">Valor do Produto</label>
                                                <input type="text" class="form-control" data-name="" name="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="m-1">
                                            <label for="">Itens Adicionais</label>
                                            <div class="form-group mb-0 d-flex">
                                                <select class="form-control" id="">
                                                    <option selected>Choose...</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>&emsp;
                                                <button type="submit" class="btn btn-primary w-75">Incluir Item</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="m-1">
                                            <label>Item Adicional Incluso</label>
                                            <ul class="list-group">
                                                <li class="list-group-item bg-light d-flex align-items-center justify-content-between">
                                                    <strong class="h6 mb-0">Nome do Item Adicional | R$ 00.00</strong> 
                                                    <div class="btn-area-two">
                                                        <a href="" class="btn btn-danger" title="deletar"><i class="fa-solid fa-trash"></i></a>
                                                        <a href="" class="btn btn-primary" title="editar"><i class="fa-solid fa-pencil"></i></a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="m-1">
                                            <div class="form-group mb-0">
                                                <label for="">Descrição do produto</label>
                                                <textarea class="form-control" id="" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="m-1">
                                            <button type="submit" class="btn btn-primary w-100">Cadastrar Produto</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="mx-3">
                                <div class="mx-1">
                                    <h5 class="mb-2">Últimos Produtos Cadastrados</h5>
                                </div>
                                <div class="my-3">
                                    <ul class="list-group">
                                        <li class="list-group-item bg-light d-flex align-items-center justify-content-between">
                                            <strong class="h6 mb-0">Nome do Produto | R$ 00.00</strong> 
                                            <div class="btn-area">
                                                <a href="" class="btn btn-danger" title="deletar"><i class="fa-solid fa-trash"></i></a>
                                                <a href="produto" class="btn btn-primary" title="editar"><i class="fa-solid fa-pencil"></i></a>
                                                <a href="produto" class="btn btn-secondary"title="visualizar"><i class="fa-solid fa-magnifying-glass"></i></a>
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