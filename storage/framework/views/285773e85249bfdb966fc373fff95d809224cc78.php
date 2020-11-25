
<div class="panel panel-info" name="Formulario" id="Formulario" style="display:<?php  echo ($estado=="Activo"?"inline":"none")?>">
    <div class="panel-heading">
        <h3 class="panel-title">
            <strong>
                Registro Clientes
            </strong>
        </h3>
    </div>
    <div class="panel-body panel-info">
        <label class="font-weight-bold">
            DATOS B&Aacute;SICOS
        </label>
        <form action="controladores/guardar.php" method="POST" onsubmit="return checkSubmit();">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Primer Nombre <b class="text-danger">*</b></label>
                    <input type="text" class="form-control" name="PrimerNombre" required autofocus maxlength="25">
                </div>
                <div class="form-group col-md-6">
                    <label>Segundo Nombre</label>
                    <input type="text" class="form-control" name="SegundoNombre" maxlength="25">
                </div>

                <div class="form-group col-md-6">
                    <label>Primer Apellido <b class="text-danger">*</b></label>
                    <input type="text" class="form-control" name="PrimerApellido" required maxlength="25">
                </div>
                <div class="form-group col-md-6">
                    <label>Segundo Apellido</label>
                    <input type="text" class="form-control" name="SegundoApellido" maxlength="25">
                </div>

                <div class="form-group col-md-6">
                    <label>Tipo identificaci&oacute;n <b class="text-danger">*</b></label>
                    <label>Tipo identificaci&oacute;n <b class="text-danger">*</b></label>
                    <select class="form-control" name="TipoDocumento" required>
                        
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>N&uacute;mero de identificaci&oacute;n <b class="text-danger">*</b></label>
                    <input type="number" class="form-control" name="NumeroDocumento" required min="1000" max="99999999999" maxlength="11">
                    <label name="Consulta" id="Consulta"></label>
                </div>

                <div class="form-group col-md-6">
                    <label>Departamento <b class="text-danger">*</b></label>
                    <select class="form-control" name="Departamento" id="Departamento" required>
                        <option value="">Seleccione un Departamento</option>
                        
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>Municipio <b class="text-danger">*</b></label>
                    <select name="Municipio" id="Municipio" class="form-control" required disabled>
                        <option value="">Selecciona un municipio</option>";
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>Celular <b class="text-danger">*</b></label>
                    <input type="number" class="form-control" name="Celular" required min="3000000000" max="3519999999" maxlength="10">
                </div>
                <div class="form-group col-md-6">
                    <label>Celular Alterno</label>
                    <input type="number" class="form-control" name="CelularAlterno" min="3000000000" max="3519999999" maxlength="10">
                </div>
                <div class="form-group col-md-6">
                    <label>Correo Electrónico <b class="text-danger">*</b></label>
                    <input type="email" class="form-control" name="Correo" required maxlength="100">
                </div>
                <div class="form-group col-md-6">
                    <label>Correo Alterno</label>
                    <input type="email" class="form-control" name="CorreoAlterno" maxlength="100">
                </div>
                <div class="form-group col-md-12">
                    <div class="input-group">
                        <input type="checkbox" class="form-check-input" name="HabeasData" id="HabeasData">
                        <label class="" for="HabeasData">Autorizo el tratamiento de mis datos de acuerdo con la finalidad establecida en la política de protección de datos personales. <b class="text-danger">*</b></label>
                        <button type="button" class="a-info" data-toggle="modal" data-target="#HabeasDataTerminos">
                            Haga clic aquí
                        </button>
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <input type="submit" value="Enviar" id="Enviar" name="Enviar" class="btn btn-info" disabled="">
                </div>
            </div>
        </form>
    </div>
</div>
<?php echo $__env->make('emergentes.TerminosCondiciones', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\proyectos\laravel\prueba\resources\views/formularios/RegistroClientes.blade.php ENDPATH**/ ?>