<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card3">
            <div class="card-header">
                <h3>Cadastrar</h3>
            </div>
            <div class="card-body">
                <form>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Nome Completo">
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="email" class="form-control" name="email" id="email" required aria-describedby="emailHelp" placeholder="Seu email">
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-address-card"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="CPF">
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-address-card"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="RA">
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                        </div>
                        <input type="texr" class="form-control" name="nascimento" id="nascimento" placeholder="DD/MM/AAAA" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}" >
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                        <input type="textarea" class="form-control" maxlength="16" name="telefone" placeholder="Telefone" pattern="\([0-9]{2,3}) [0-9]{5}-[0-9]{4}$" />
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="Senha">
                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" placeholder="Repetir Senha">
                    </div>

                    <div class="form-group">
                        <a class="btn float-right login_btn" href="index?page=Biblioteca&name=Biblioteca" role="button">Cadastrar</a>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
