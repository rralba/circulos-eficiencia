@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <br>
    <div class="table-responsive">
       <table class="table table-striped table-hover table-bordered">
            <thead class="">
                <tr>
                    <th data-column-id="id" width="10px">Id</th>
                </tr>
            </thead>
            <tbody id="developers">
                @foreach($nproy as $proyect)
                    <tr>
                        <td>{{ $proyect }}</td>
                    </tr>
                @endforeach
            </tbody>
       </table>
    </div>
</div>
@endsection