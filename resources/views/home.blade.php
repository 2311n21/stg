@extends('adminlte::page')

@section('title')
HOME - Service 
@endsection

@section('content_header')
<h1> Dashboard</h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{\App\Models\Cadres::count()}}</h3>
                    <p>Cadres</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="{{url('admin/cadres')}}" class="small-box-footer">
                    Plus d'infos <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
            <div> {{Auth::user()->name}} </div>
        </div>
    </div>
@stop

@section('css')

@stop

@section('js')

@stop
