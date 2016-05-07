<div class="modal fade" id="modal_editaralumno" role="dialog" aria-labelledby="titulo_editar">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="titulo_editar">Editar Alumno</h4>
                </div>
                <div class="modal-body">
                    <form id="form_alumno" name="form_ns" class="form-horizontal text-right" onsubmit="return revisar()">
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="alumno" class="control-label">Nombre Alumno:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" id="alumno" class="form-control" placeholder="Nombre de Alumno" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="ape_paterno" class="control-label">Apellido Paterno:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" id="ape_paterno" class="form-control" placeholder="Apellido Paterno" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="ape_materno" class="control-label">Apellido Materno:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" id="ape_materno" class="form-control" placeholder="Apellido Materno" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="fecha_nac" class="control-label">Fecha de nacimiento:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="date" id="fecha_nac" class="form-control" placeholder="Fecha de Na" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="rfc" class="control-label">RFC:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" id="rfc" class="form-control" placeholder="RFC" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="sexo" class="control-label">Sexo:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" id="sexo" class="form-control" placeholder="Sexo" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="telefono" class="control-label">Telefono:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" id="telefono" class="form-control" placeholder="Telefono" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="correo" class="control-label">Email:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="varchar" id="correo" class="form-control" placeholder="Email" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="ul_gra_estud" class="control-label">Ultimo grado de estudios:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" id="ul_gra_estud" class="form-control" placeholder="Ultimo grado de estudios" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="ins_de_egreso" class="control-label">Institucion de egreso:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" id="ins_de_egreso" class="form-control" placeholder="Institucion de egreso" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="anio_egreso" class="control-label">Año de egreso:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" id="anio_egreso" class="form-control" placeholder="Año de egreso" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="como_entero" class="control-label">Como se entero:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" id="como_entero" class="form-control" placeholder="Como se entero" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="inversion" class="control-label">Inversion:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="varchar" id="inversion" class="form-control" placeholder="Inversion" required autofocus>
                            </div>
                        </div>
                        <div class="text-center">
                            <input id="b_edit_user" type="button" class="btn btn-primary" Value="Guardar">
                            <button type="reset" class="btn btn-warning">Restablecer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>