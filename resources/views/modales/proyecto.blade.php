<!-- Modal -->
<div class="modal fade" id="proyectoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">{{'Agregar proyecto'}}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4">
        <div class="row">
            <div class="col-12 mb-2">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Proviene de una oferta</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">No proviene de una oferta</label>
                </div>
            </div>            
            <div class="col-12 mb-3">
                <label>{{'Nombre'}}</label>
                <input type="text" class="form-control" name="nombre" placeholder="Ingresa el nombre" />
            </div> 
            <div class="col-12">
                <div class="row">
                    <div class="col-10 mb-3">
                        <label>{{'Número de contrato/orden de compra'}}</label>
                        <input type="text" class="form-control" name="numero" placeholder="Ingresa el número" />
                    </div>  
                    <div class="col-2 mt-5">
                        <a href="#"><i class="fa fa-file"></i></a>
                        <a href="#" style="color:red;"><i class="fa fa-file-pdf-o"></i></a>
                    </div>
                </div>
            </div>          
            <div class="col-12 mb-3">
                <label>{{'Cliente'}}</label><br>
                <select class="selectpicker" data-live-search="true" placeholder="Seleccione el cliente">
                    <option value="1">Carlos Rodrigues</option>
                    <option value="2">Jesús Gomez</option>
                    <option value="3">Ricardo Peña</option>
                </select>
            </div>
            <div class="col-6 mb-3">
                <label>{{'Color'}}</label>
                <select class="selectpicker" data-live-search="true" placeholder="Seleccione el Color">
                    <option value="1" style="background-color: pink;">Rosa</option>
                    <option value="2" style="background-color: red;">Rojo</option>
                    <option value="3" style="background-color: blue;">Azul</option>
                </select>
            </div>
            <div class="col-6 mb-3">
                <label>{{'Ícono'}}</label>
                <select class="selectpicker" data-live-search="true" placeholder="Seleccione el ícono">
                    <option value="1" data-icon="fa fa-car">Carro</option>
                    <option value="2" data-icon="fa fa-bell-o">Campana</option>
                    <option value="3" data-icon="fa fa-flag">Bandera</option>
                </select>
            </div>
            <label>Periodo</label>
            <div class="col-12 mb-3">
                <div class="input-group input-daterange">
                    <div class="col-6">
                        <label class="form-control-placeholder" id="start-p" for="start">Fecha inicio</label>
                        <div class="input-group">
                            <input type="text" id="start" class="form-control text-left mr-2">
                            <span class="fa fa-calendar form-control-icon" id="fa-1"></span>
                        </div>                        
                    </div>
                    <div class="col-6">
                        <label class="form-control-placeholder" id="end-p" for="end">Fecha fin</label>
                        <div class="input-group">
                            <input type="text" id="end" class="form-control text-left mr-2">
                            <span class="fa fa-calendar form-control-icon" id="fa-2"></span>
                        </div>                        
                    </div>                    
                </div>
            </div>
            <div class="col-6 mb-3">
                <label>Presupuesto</label>
                <input type="text" class="form-control" name="presupuesto" placeholder="Ingresa el presupueto" /> 
            </div>
            <div class="col-6 mt-4">
                <select class="selectpicker mt-1" data-live-search="true">
                    <option value="1">USD</option>
                    <option value="2">Euro</option>
                    <option value="3">Peso</option>
                </select>
            </div>
            <strong>{{'Instrucciones de entrega'}}</strong><br>
            <div class="col-6 mb-3">
                <label>Dirección</label>
                <input type="text" class="form-control" name="direccion" placeholder="Ingresa el dirección" /> 
            </div>
            <div class="col-6 mb-3">
                <label>Centro de entrega</label>
                <input type="text" class="form-control" name="centro_entrega" placeholder="Ingresa el centro de entrega" /> 
            </div>
            <div class="col-6 mb-3">
                <label>{{'Estado'}}</label>
                <select class="selectpicker" data-live-search="true" placeholder="Seleccione el Estado">
                    <option value="1">Mexico</option>
                    <option value="2">Aguascalientes</option>
                    <option value="3">Baja California</option>
                </select>
            </div>
            <div class="col-6 mb-3">
                <label>{{'País'}}</label>
                <select class="selectpicker" data-live-search="true" placeholder="Seleccione el País">
                    <option value="1">Mexico</option>
                    <option value="2">Estados Unidos</option>
                    <option value="3">Canada</option>
                </select>
            </div>
            <div class="col-6 mb-3">
                <label>Código postal</label>
                <input type="text" class="form-control" name="cp" placeholder="Ingresa el código postal" /> 
            </div>
            <strong>{{'Estatus'}}</strong><br>
            <div class="col-12 mb-2">
                <div class="form-check form-check-inline">
                    <input class="form-check-input mt-1" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">
                        <span class="badge bg-success rounder">{{'Entregado ' }}<i class="fa fa-check"></i></span>
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input mt-1" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">
                        <span class="badge bg-warning rounder">{{'En proceso ' }}<i class="fa fa-clock-o" ></i></span>
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input mt-1" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                    <label class="form-check-label" for="inlineRadio3">
                        <span class="badge bg-danger rounder">{{'Estancado ' }}<i class="fa fa-exclamation-triangle"></i></span>
                    </label>
                </div>
            </div>
            <strong>{{'Seguridad'}}</strong><br>
            <div class="col-12 mb-2">
                <div class="form-check form-check-inline">
                    <input class="form-check-input mt-1" type="checkbox" name="inlineCheckOptions" id="inlineCheck1" value="option1">
                    <label class="form-check-label" for="inlineCheck1">{{'Acceso Abierto ' }}</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input mt-1" type="checkbox" name="inlineCheckOptions" id="inlineCheck2" value="option2">
                    <label class="form-check-label" for="inlineCheck2">{{'Acceso Restringido ' }}</label>
                </div>
            </div>
        </div>
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">{{'Cancelar'}}</button>
        <button type="button" class="btn btn-secondary">{{'Guardar'}}</button>
      </div>
    </div>
  </div>
</div>