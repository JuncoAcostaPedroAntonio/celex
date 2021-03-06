 <div class="modal fade" id="modal_editar" role="dialog" aria-labelledby="modal_editar">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="titulo_modal">Modificar usuario</h4>
                </div>
                <div class="modal-body">
                    <form id="form_usuario" name="form_us" class="form-horizontal text-right">
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="e_usuario" class="control-label">Nombre usuario:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" id="e_usuario" class="form-control" placeholder="Nombre de usario" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="e_email" class="control-label">Correo:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="email" id="e_email" class="form-control" placeholder="Ejemplo@domino.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="e_telefono" class="control-label">Teléfono:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="number" id="e_telefono" class="form-control" placeholder="6221252301" maxlength="10" minlength="10">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="e_contrasena" class="control-label">Contraseña:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="password" id="e_contrasena" class="form-control" placeholder="Contraseña">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="e_departamento" class="control-label">Departamento</label>
                            </div>
                            <div class="col-sm-8">
                                <select class="form-control" id="e_departamento" >
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
                            <button class="btn btn-primary b_editar_user" >Guardar cambios</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>