<div class="pull-right">
    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#proyectoModal">Agregar</button>
</div>
<div class="table-responsive">
<caption>{{'Listado de proyectos'}}</caption>
    <table id="tabla-proyecto" class="table table-sm caption-top" width="100%">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Proyectos</th>
                <th scope="col">Estatus</th>
                <th scope="col">Periodo</th>
                <th scope="col">Días restantes</th>
                <th scope="col">Avance</th>
                <th scope="col">Participantes</th>
                <th scope="col">Owner</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"><a href="#" data-bs-toggle="modal" data-bs-target="#proyectoModal"><i class="fa fa-pencil" aria-hidden="true"></i></a></th>
                <td><span class="img-circle btn btn-info"><i class="fa fa-laptop"></i></span> Plan de trabajo</td>
                <td><span class="badge bg-success rounder">{{'Entregado ' }}<i class="fa fa-check"></i></span></td>
                <td>{{'October 31 - November 31'}}</td>
                <th><span style="color:red;">2</span></th>
                <td>
                    <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-success" style="width: 100%">{{'100%'}}</div>
                    </div>
                </td>
                <td width="20">
                    <img src="{{ asset('image/user.png') }}" class="rounded-circle" alt="..." width="20%">
                    <img src="{{ asset('image/user.png') }}" class="rounded-circle" alt="..." width="20%">
                    <img src="{{ asset('image/user.png') }}" class="rounded-circle" alt="..." width="20%">
                </td>
                <td width="20"><img src="{{ asset('image/user.png') }}" class="rounded-circle" alt="..." width="30%"></td>
            </tr>
            <tr>
                <th scope="row"><a href="#" data-bs-toggle="modal" data-bs-target="#proyectoModal"><i class="fa fa-pencil" aria-hidden="true"></i></a></th>
                <td><span class="img-circle btn btn-warning"><i class="fa fa-cubes"></i></span> Fraccionamientos</td>
                <td><span class="badge bg-warning rounder">{{'En proceso ' }}<i class="fa fa-clock-o" ></i></span></td>
                <td>{{'October 31 - November 31'}}</td>
                <th><span style="color:green;">55</span></th>
                <td>
                    <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-warning" style="width: 60%">{{'60%'}}</div>
                    </div>
                </td>
                <td width="20"> 
                    <img src="{{ asset('image/user.png') }}" class="rounded-circle" alt="..." width="20%">
                    <img src="{{ asset('image/user.png') }}" class="rounded-circle" alt="..." width="20%">
                    <img src="{{ asset('image/user.png') }}" class="rounded-circle" alt="..." width="20%">
                </td>
                <td width="20"><img src="{{ asset('image/user.png') }}" class="rounded-circle" alt="..." width="30%"></td>
            </tr>
            <tr>
                <th scope="row"><a href="#" data-bs-toggle="modal" data-bs-target="#proyectoModal"><i class="fa fa-pencil" aria-hidden="true"></i></a></th>
                <td><span class="img-circle btn btn-primary"><i class="fa fa-car"></i></span> Taritaxi</td>
                <td><span class="badge bg-danger rounder">{{'Estancado ' }}<i class="fa fa-exclamation-triangle"></i></span></td>
                <td>{{'October 31 - November 31'}}</td>
                <th><span style="color:orange;">12</span></th>
                <td>
                    <div class="progress" role="progressbar" aria-label="Danger example" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-danger" style="width: 35%">{{'35%'}}</div>
                    </div>
                </td>
                <td width="20">
                    <img src="{{ asset('image/user.png') }}" class="rounded-circle" alt="..." width="20%">
                    <img src="{{ asset('image/user.png') }}" class="rounded-circle" alt="..." width="20%">
                    <img src="{{ asset('image/user.png') }}" class="rounded-circle" alt="..." width="20%">
                </td>
                <td width="20"><img src="{{ asset('image/user.png') }}" class="rounded-circle" alt="..." width="30%"></td>
            </tr>
        </tbody>
    </table>
</div>