<?php $this->layout('layouts/template', ['title' => 'User Profile']) ?>

<?php $this->start('page') ?>
<div class="row">
    <form class="form-horizontal">
        <div class="col-md-12">
            <div class="col-md-6 enterprise">
                <h1>REGISTRO DE EMPRESAS</h1>
            </div>
            <div class="col-md-6">
                <button class="btn btn-primary save-enterprise pull-right">Guardar cambios</button>
            </div>
        </div>
        <hr style="width: 95%; color: #d2d2d2; height: 4px; margin-top: 20px !important;"/>
        <div class="col-md-12 form-enterprise">
            <div class="col-md-7" style="margin-left: 15px;">
                <h2>INFORMACIÓN BÁSICA</h2>
                <div class="container-form">
                    <div class="form-group groups">
                        <div class="col-md-6">
                            <label class="control-label" for="textinput">Nombre comercial empresa</label>
                            <input type="text" class="form-control" name="name" id="name"/>
                        </div>
                        <div class="col-md-6">
                            <label class="control-label" for="textinput">Tipologia de empresa</label>
                            <select class="form-control" name="type_enterprise" id="type_enterprise">
                                <option value="">Seleccione</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group groups">
                        <div class="col-md-4">
                            <label class="control-label" for="textinput">Pais</label>
                            <select name="country" id="country" class="form-control">
                                <option value="">Seleccione</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label class="control-label" for="textinput">Estado</label>
                            <input type="text" class="form-control" name="state" id="state"/>
                        </div>

                        <div class="col-md-4">
                            <label class="control-label" for="textinput">Ciudad</label>
                            <input type="text" class="form-control" name="city" id="city"/>
                        </div>
                    </div>
                </div>
                <h2>INFORMACIÓN DE REGISTRO</h2>
                <div class="container-form">
                    <div class="form-group groups">
                        <div class="col-md-4">
                            <label class="control-label" for="textinput">Email/Usuario</label>
                            <input type="text" class="form-control" name="user" id="user"/>
                        </div>

                        <div class="col-md-4">
                            <label class="control-label" for="textinput">Password</label>
                            <input type="password" class="form-control" name="password" id="password"/>
                        </div>

                        <div class="col-md-4">
                            <label class="control-label" for="textinput">Repetir Password</label>
                            <input type="password" class="form-control" name="re-password" id="re-password"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="margin-top: 48px; margin-left: 45px;">
                <div class="form-group container-form">
                    <label class="control-label" for="textinput">Text Input</label>
                    <textarea class="form-control" rows="11"></textarea>
                </div>
            </div>
        </div>
    </form>
</div>
<?php $this->stop() ?>
