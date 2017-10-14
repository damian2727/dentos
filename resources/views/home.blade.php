@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-8 col-xl-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Escritorio</div>

                <div class="panel-body">
                    @foreach($Users as $row)
                  <p><strong>Nombre: </strong>{{ $row->name }}</p>
                  <p><strong>Email: </strong>{{ $row->email }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
