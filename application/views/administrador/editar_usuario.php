 <div class="modal fade" id="modal_editar" role="dialog" aria-labelledby="modal_editar">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="titulo_modal">Modificar Usuario</h4>
                </div>
                <div class="modal-body">
                    <form id="form_usuario" name="form_us" class="form-horizontal text-right">
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="usuario" class="control-label">Nombre Usuario:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" id="e_usuario" class="form-control" placeholder="Nombre de Usario" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="correo" class="control-label">Correo:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="email" id="e_email" class="form-control" placeholder="ejemplo@domino.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="telefono" class="control-label">Telefono:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="phonenumber" id="e_telefono" class="form-control" placeholder="6221252301" maxlength="10" minlength="10">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="contrasena1" class="control-label">Contraseña:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="password" id="e_contrasena" class="form-control" placeholder="Contraseña">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="departamento" class="control-label">Departamento</label>
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
                            <input id="b_editar_user" type="button" class="btn btn-primary" Value="Guardar">
                            <button type="reset" class="btn btn-warning">Limpiar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>