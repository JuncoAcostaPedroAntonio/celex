<div class="modal fade" id="modal_pago" role="dialog" aria-labelledby="modal_pago">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="titulo_modal">Registrar Pago</h4>
                </div>
                <div class="modal-body">
                    <form id="form_pagos" name="form_us" class="form-horizontal text-right">
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="p_alumno" class="control-label">Nombre Del Alumno:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" id="p_alumno" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="p_email" class="control-label">Correo:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" id="p_email" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2">
                                <label for="p_grupo" class="control-label">Grupo:</label>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="p_grupo" class="form-control" disabled>
                            </div>
                            <div class="col-sm-2">
                                <label for="p_modulo" class="control-label">Modulo:</label>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="p_modulo" class="form-control" disabled>
                            </div>
                            <div class="col-sm-2">
                                <label for="p_nivel" class="control-label">Nivel:</label>
                            </div>
                            <div class="col-sm-2">
                                <input type="text" id="p_nivel" class="form-control" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="p_inversion" class="control-label" >Cantidad: $</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" id="p_inversion" class="form-control" placeholder="700" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="p_descripcion" class="control-label">Concepto:</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" id="p_descripcion" class="form-control" placeholder="Concepto del pago" required>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary b_guardar_pago" >Realizar Pago</button>
                            <button type="reset" class="btn btn-warning">Limpiar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>