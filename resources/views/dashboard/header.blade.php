<div class="card border-0">
    <div class="row">
        <div class="col-sm-12 col-lg-6">
            <div class="row">
                <div class="col-5">        
                    <select class="selectpicker" data-live-search="true" placeholder="Filtrar por proyecto">
                        <option value="1">Todos</option>
                        <option value="2">Plan de trabajo</option>
                        <option value="3">Taritaxi</option>
                    </select>
                </div>
                <div class="col-5">
                    <select 
                        class="selectpicker" data-live-search="true" placeholder="Filtrar por estatus" multiple="multiple">
                        <option data-tokens="1" style="background: green; color: #fff;" data-icon="fa fa-check">Entregado</option>
                        <option data-tokens="2" style="background: orange; color: #fff;" data-icon="fa fa-clock-o">En Proceso</option>
                        <option data-tokens="3" style="background: red; color: #fff;" data-icon="fa fa-exclamation-triangle">Estancado</option>
                    </select>
                </div>
                <div class="col-2 mt-1">
                    <a 
                        href="#" 
                        class="btn btn-light btn-sm plus" 
                        data-bs-toggle="modal" 
                        data-bs-target="#exampleModal">
                        <i class="fa fa-plus"></i>
                    </a>
                </div>
            </div>        
        </div>        
    </div>
</div>
<div class="card mt-3 p-2">
    <div class="row">
        <div class="col-md-6 col-lg-1">
            <div class="row">
                <div class="col">
                    <img src="{{ asset('image/logo.png') }}" width="70%"/>            
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="row">
                <div class="col-12 mb-2">
                    <span class="otro"><strong>{{'SET 01'}}</strong></span>&nbsp;&nbsp;
                    <span class="header">{{'Estado: '}}</span> 
                    <span class="badge bg-success rounder">{{' Activo' }}</span>
                </div>
                <div class="col-12">
                    <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                    <span class="header">{{'PECOMM4244323445'}}</span>&nbsp;
                    <i class="fa fa-building-o" aria-hidden="true"></i>
                    <span class="header">{{'Cliente: '}}</span>
                    <span class="badge bg-info rounder">{{' Cobra' }}</span>&nbsp;
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <span class="header">{{ '01 Sep, 2022 - ' }}</span><span class="header"><strong>{{ '28 Abr, 2023' }}</strong></span>
                </div>   
            </div>    
        </div>
        <div class="col-md-12 col-lg-3">
            <div class="row">
                <div class="col-12 mb-2">
                    <img src="{{ asset('image/user.png') }}" class="rounded-circle float-end" alt="..." width="7%">
                    <img src="{{ asset('image/user.png') }}" class="rounded-circle float-end" alt="..." width="7%">
                    <img src="{{ asset('image/user.png') }}" class="rounded-circle float-end" alt="..." width="7%">
                    <img src="{{ asset('image/user.png') }}" class="rounded-circle float-end" alt="..." width="7%">
                </div>
                <div class="col-12">
                    <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar" style="width: 50%">50%</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-2">
            <div class="row">
                <div class="col-12 mt-2">
                    <button class="btn btn-success">
                        <i class="fa fa-calendar-minus-o"></i>
                        {{ 'Días restantes 256' }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>