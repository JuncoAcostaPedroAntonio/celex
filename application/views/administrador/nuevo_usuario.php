<div class="modal fade" id="modal_usuario" role="dialog" aria-labelledby="titulo_modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="titulo_modal">Nuevo usuario</h4>
                </div>
                <div class="modal-body">
                    <form id="form_usuario" name="form_ns" class="form-horizontal text-right">
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="usuario" class="control-label">Nombre usuario:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" id="usuario" class="form-control" placeholder="Nombre de usuario" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="correo" class="control-label">Correo:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="email" id="email" class="form-control" placeholder="Ejemplo@domino.com" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="telefono" class="control-label">Teléfono:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" id="telefono" class="form-control" placeholder="6221252301" maxlength="10" minlength="10" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="contrasena1" class="control-label">Contraseña:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="password" id="contrasena1" class="form-control" placeholder="Contraseña" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="contrasena2" class="control-label">Repetir contraseña:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="password" id="contrasena2" class="form-control" placeholder="Repetir contraseña" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="departamento" class="control-label">Departamento</label>
                            </div>
                            <div class="col-sm-8">
                                <select class="form-control" id="departamento" required autofocus>
                                    <option value="0">--Departamento--</option>
                                    <?php 
                                        foreach($departamentos as $value){
                                            echo '<option value="'.$value['id_depto'].'">'.$value['departamento'].'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="text-center">
                            <input id="b_new_user" type="button" class="btn btn-primary" Value="Guardar">
                            <button type="reset" class="btn btn-warning">Limpiar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>