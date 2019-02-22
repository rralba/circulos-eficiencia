{{--  <form class="form-horizontal">
    <div class="form-group">
            <label class="control-label col-sm-1" for="idsap">id Sap</label>
            <label class="control-label col-sm-2" for="nombre">Nombre</label>
            <label class="control-label col-sm-2" for="depto">Departamento</label>
            <label class="control-label col-sm-2" for="posicion">Posicion</label>
            <label class="control-label col-sm-1" for="nivel">Nivel</label>
            <label class="control-label col-sm-1" for="rol">Rol</label>
            <label class="control-label col-sm-1" for="direccion">Direccion</label>
            <label class="control-label col-sm-1" for="cia">Compañia</label>
        @foreach ($proyect->empleados as $data)
            <input type="number" class="form-control col-sm-1" id="idsap" placeholder=" {{ $data->id }} " name="idsap">   
            <input type="text" class="form-control col-sm-4" id="nombre" placeholder=" {{ $data->nombre }} " name="nombre">
            <input type="text" class="form-control col-sm-4" id="depto" placeholder=" {{ $data->depto }} " name="depto">
            <input type="text" class="form-control col-sm-4" id="posicion" placeholder=" {{ $data->posicion }} " name="posicion">
            <input type="text" class="form-control col-sm-1" id="nivel" placeholder=" {{ $data->nivel }} " name="nivel">
            <input type="text" class="form-control col-sm-1" id="rol" placeholder=" {{ $data->pivot->rol }} " name="rol">
            <input type="text" class="form-control col-sm-1" id="direccion" placeholder=" {{ $data->direccion }} " name="direccion">
            <input type="text" class="form-control col-sm-1" id="cia" placeholder=" {{ $data->cia }} " name="cia">
        @endforeach
    </div>
</form>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btm-primary']) }}
</div>  --}}
    {{--  <div class="card">
        <div class="card-header">
            Integrantes
        </div>
        <div class="card-body">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Departamento</th>
                    <th>Posicion</th>
                    <th>Nivel</th>
                    <th>Rol</th>
                    <th>Direccion</th>
                    <th>Compañia</th>
                </tr>
            </thead>
            <tbody>
                @foreach($proyect->empleados as $data)
                    <tr>
                        <div class="col-xs-1">    
                            <td><input type="number" class="form-control" id="inputid" placeholder=" {{ $data->id }} "></td>
                        </div>
                        <div class="col-xs-2">
                            <td><input type="text" class="form-control" id="inputnombre" placeholder=" {{ $data->nombre }} "></td>
                        </div>
                        <div class="col-xs-2">
                            <td><input type="text" class="form-control" id="inputdepto" placeholder=" {{ $data->depto }} "></td>
                        </div>
                        <div class="col-xs-3">
                            <td><input type="text" class="form-control" id="inputposicion" placeholder=" {{ $data->posicion }} "></td>
                        </div>
                        <div class="col-xs-1">
                            <td><input type="number" class="form-control" id="inputnivel" placeholder=" {{ $data->nivel }} "></td>
                        </div>
                        <div class="col-xs-1">
                            <td><input type="number" class="form-control" id="inputrol" placeholder=" {{ $data->pivot->rol }} "></td>
                        </div>
                        <div class="col-xs-1">
                            <td><input type="text" class="form-control" id="inputdireccion" placeholder=" {{ $data->direccion }} "></td>
                        </div>
                        <div class="col-xs-1">
                            <td><input type="number" class="form-control"  id="inputcia" placeholder=" {{ $data->cia }} "></td>
                        </div> 
                    </tr>
                @endforeach
            </tbody>
        </table>  
        </div>          
    </div>
    <div class="form-group">
        {{ Form::submit('Guardar', ['class' => 'btn btn-sm btm-primary']) }}
    </div>  --}}
    {{--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.min.js"></script>
<div class="col-md-12">
    
        <div class="card-body">   
            <table id="grid-basic" class="w3-table-all w3-card-4">
                <thead>
                    <tr class="w3-cyan">
                        <th data-column-id="id" data-type="numeric" data-order="asc">Id</th>
                        <th data-column-id="nombre">Nombre</th>
                        <th data-column-id="departamento">Departamento</th>
                        <th data-column-id="posicion">Posicion</th>
                        <th data-column-id="nivel">Nivel</th>
                        <th data-column-id="rol">Rol</th>
                        <th data-column-id="direccion">Direccion</th>
                        <th data-column-id="compañia">Compañia</th>
                        <th data-column-id="actions" data-formatter="actions" data-sortable="false">Actions</th>
                    </tr>
                </thead>
                <tbody>  
                        @foreach($proyect->empleados as $integrante) 
                            <tr>
                                <td>{{ $integrante->id }}</td>
                                <td>{{ $integrante->nombre }}</td>
                                <td>{{ $integrante->depto }}</td>
                                <td>{{ $integrante->posicion }}</td>
                                <td>{{ $integrante->nivel }}</td>
                                <td>{{ $integrante->pivot->rol }}</td> 
                                <td>{{ $integrante->direccion }}</td>
                                <td>{{ $integrante->cia }}</td> 
                                <td></td>
                            </tr>
                        @endforeach   
                </tbody>
            </table>
            <div class="form-group">
                {{ Form::submit('Guardar', ['class' => 'btn btn-sm btm-primary']) }}
            </div>
        </div>
   
</div>
<script>
    $("#grid-basic").bootgrid({
        formatters: {
        "actions": function(column, row)
        {
        return "<button onclick=\"document.getElementById('edit').style.display='block'\" data-id=\"" + row.id + "\" data-first_name=\"" + row.first_name + "\" data-last_name=\"" + row.last_name + "\" data-email=\"" + row.email + "\" data-gender=\"" + row.gender + "\" data-country=\"" + row.country + "\" data-salary=\"" + row.salary + "\" class=\"w3-btn w3-blue w3-small edit\"><span class=\"fa fa-pencil\"></span></button> " +
        "<button onclick=\"document.getElementById('delete').style.display='block'\" data-first_name=\"" + row.first_name + "\" data-last_name=\"" + row.last_name + "\" data-id=\"" + row.id + "\" class=\"w3-btn w3-blue w3-small delete\"><span class=\"fa fa-remove\"></span></button>";
        }
        }});
</script>  --}}