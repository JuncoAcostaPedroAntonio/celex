<div class="modal fade " id="modal_editar" role="dialog" aria-labelledby="modal_editar">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="titulo_modal"><b>Modificar información del alumno</b></h4>
                </div>
                <div class="modal-body">
                    <form id="form_usuario" name="form_us" class="form-horizontal text-right">
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="i_nombre" class="control-label">Nombre alumno:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="i_nombre" placeholder="Nombre alumno" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="i_fecha" class="control-label">Fecha de nacimiento:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" id="i_fecha" max="2005-12-31" placeholder="Fecha nacimiento" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="i_sexo" class="control-label">Sexo:</label>
                            </div>
                            <div class="col-sm-8">
                                <select id="i_sexo" class="form-control" required autofocus>
									<option value="0">Sexo</option>
									<option value="1">Femenino</option>
									<option value="2">Masculino</option>
								</select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="i_rfc" class="control-label">RFC:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="i_rfc" placeholder="RFC" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="i_telefono" class="control-label">Teléfono:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="i_telefono" placeholder="Teléfono" maxlength="10" minlength="10" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="i_correo" class="control-label">Correo:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="varchar" class="form-control" id="i_correo" placeholder="Email" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="i_ultest" class="control-label">Último grado de estudios:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="i_ultest" placeholder="Último grado de estudios" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="i_instegre" class="control-label">Institución de egreso:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="i_instegre" placeholder="Institución de egreso" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="i_anioegreso" class="control-label">Año de egreso:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="i_anioegreso" placeholder="Año de egreso" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="i_entero" class="control-label">Como se entero del curso:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="i_entero" placeholder="¿Cómo se enteró del curso?" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="i_inversion" class="control-label">inversión:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="i_inversion" placeholder="Inversión" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="s_grupo" class="control-label">Grupo:</label>
                            </div>
                            <div class="col-sm-8">
                                <select class="form-control" id="s_grupo" onchange="mostrar_info_grupo_insc()" required autofocus>
									<option value="0">Seleccione el grupo</option>
										<?php 
											foreach ($l_grupos as $value) {
												echo "<option value='".$value['id']."'>".$value['nombre']."</option>";
											}
										?>
								</select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="g_modulo" class="control-label">Módulo:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="g_modulo" placeholder="Módulo" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="g_nivel" class="control-label">Nivel:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="g_nivel" placeholder="Nivel" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="g_horario" class="control-label">Horario:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="g_horario" placeholder="Horario" disabled>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary mod_alumno" >Guardar cambios</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>