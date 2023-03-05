<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">{{'Agregar estatus'}}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4">
        <div class="row">
            <div class="col-12 mb-3">
                <label>{{'Descripción'}}</label>
                <input type="text" class="form-control" name="descripcion" placeholder="Ingresa la descripción" />
            </div>            
            <div class="col-6">
                <label>{{'Color'}}</label>
                <select class="selectpicker" data-live-search="true" placeholder="Seleccione el Color">
                    <option value="1" style="background-color: pink;">Rosa</option>
                    <option value="2" style="background-color: red;">Rojo</option>
                    <option value="3" style="background-color: blue;">Azul</option>
                </select>
            </div>
            <div class="col-6">
                <label>{{'Ícono'}}</label>
                <select class="selectpicker" data-live-search="true" placeholder="Seleccione el ícono">
                    <option value="1" data-icon="fa fa-car">Carro</option>
                    <option value="2" data-icon="fa fa-bell-o">Campana</option>
                    <option value="3" data-icon="fa fa-flag">Bandera</option>
                </select>
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