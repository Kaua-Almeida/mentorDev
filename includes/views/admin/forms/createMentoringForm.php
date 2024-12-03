<div class="card-body">
    <h4 class="header-title">formulário</h4>
    <p class="sub-header bg-white p-3">
        Criar Mentoria
    </p>

    <div class="row">
        <div class="col-12">
            <div class="p-2">
                <form class="form-horizontal" role="form" method="POST">
                    <div class="mb-2 row">
                        <label class="col-md-2 col-form-label" for="simpleinput">titulo</label>
                        <div class="col-md-10">
                            <input type="text" id="simpleinput" class="form-control" name="title" placeholder="titulo">
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label class="col-md-2 col-form-label" for="example-textarea">Descrição</label>
                        <div class="col-md-10">
                            <textarea class="form-control" id="example-textarea" name="description" rows="5"></textarea>
                        </div>
                    </div>

                    <div class="mb-2 row">
                        <label class="col-md-2 col-form-label">Status</label>
                        <div class="col-md-10">
                            <select class="form-control" name="status">
                                <option selected>não iniciado</option>
                                <option disabled>em andamento</option>
                                <option disabled>finalizado</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label class="col-md-2 col-form-label" for="example-date">Data Início</label>
                        <div class="col-md-10">
                            <input class="form-control" type="date" name="date" id="example-date">
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label class="col-md-2 col-form-label" for="example-time">horário inicio</label>
                        <div class="col-md-10">
                            <input class="form-control" type="time" id="example-time" name="time">
                        </div>
                    </div>
                    <div class="my-5 row">
                        <div class="col-md-2 w-50 mx-auto">
                            <input class="form-control bg-primary text-white" type="submit">
                        </div>
                    </div>