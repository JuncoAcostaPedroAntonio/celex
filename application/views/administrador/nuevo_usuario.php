<div class="modal fade" id="contenido" tabindex="-1" role="dialog" aria-labelledby="titulo_modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="titulo_modal">Nuevo Usuario</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal text-right" action="<?php echo base_url();?>c_administrador/nuevo_usuario">
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="usuario" class="control-label">Nombre Usuario:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Nombre de Usario">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="correo" class="control-label">Correo:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="email" name="email" class="form-control" id="correo" placeholder="ejemplo@domino.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="contrasena1" class="control-label">Contraseña:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="passowrd" name="contrasena1" class="form-control" id="contrasena1" placeholder="Contraseña">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="contrasena2" class="control-label">Repetir Contraseña:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="password" name="contraseña2" class="form-control" id="contrasena2" placeholder="Repetir Contraseña">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="departamento" class="control-label">Departamento</label>
                            </div>
                            <div class="col-sm-8">
                                <select class="form-control" name="departamento" id="departamento">
                                    <option value="00">--Departamento--</option>

                                </select>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <button type="reset" class="btn btn-default">Limpiar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>