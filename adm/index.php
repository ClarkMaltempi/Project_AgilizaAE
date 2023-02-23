<?php include('inc/header.php')?>


    <div class="container">
        <div class="loginAdmArea">
            <div class="col-12 col-sm-11 col-md-7 col-lg-5">
                <div class="institucionalWrapper">
                    <img src="../assets/img/logotipo/logo_app_v2.png">
                </div>
                <div class="loginAdmContent">
                    <div class="col-12">
                        <h5 class="text-center mb-3">Acesse sua conta.</h5>
                    </div>
                    <form id="admLogin" method="POST" action="main-panel">
                        <div class="form-group">
                            <input type="email" class="form-control" data-name="E-mail" id="email" name="nome" placeholder="Digite seu e-mail">
                        </div>
                        <div class="form-group mb-4">
                            <input type="password" class="form-control" data-name="Senha" name="senha" id="senha" placeholder="Digite sua Senha">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">ENTRAR</button>
                    </form>
                </div>
                <div class="redefinirArea">
                    <small>Esqueceu sua senha? <br><strong><a href="">Clique aqui</a></strong> para redefini-la.</small>
                </div>
            </div>
        </div>
    </div>


<?php include('inc/footer.php')?>