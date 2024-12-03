<div class="card-body">
    <h4 class="header-title">formulário</h4>
    <p class="sub-header bg-white p-3">
        Criar usuários
    </p>

    <div class="row">
        <div class="col-12">
            <div class="p-2">
                <form class="form-horizontal" role="form" method="POST">
                    <div class="mb-2 row">
                        <label class="col-md-2 col-form-label" for="simpleinput">nome do usuário</label>
                        <div class="col-md-10">
                            <input type="text" id="simpleinput" class="form-control" name="username" placeholder="username">
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label class="col-md-2 col-form-label" for="simpleinput">Senha</label>
                        <div class="col-md-10">
                            <input type="password" id="simpleinput" class="form-control" name="password" placeholder="password">
                        </div>
                    </div>
                  

                    <div class="mb-2 row">
                        <label class="col-md-2 col-form-label">Função</label>
                        <div class="col-md-10">
                            <select class="form-control" name="function">
                                <option>student</option>
                                <option>admin</option>
         
                            </select>
                        </div>
                    </div>
                
                    <div class="my-5 row">
                        <div class="col-md-2 w-50 mx-auto">
                            <input class="form-control bg-primary text-white" type="submit">
                        </div>
                    </div>