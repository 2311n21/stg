
@extends('adminlte::page')

@section('title', 'Gestion des utilisateurs | Modifier')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row my-5">
                <div class="col-md-6 mx-auto">
                </div>
            </div>
            <div class="card my-5">
                <div class="card-header bg-white text-center p-3">
                    <h3 class="text-dark">
                        Modifier un utilisateur 
                    </h3>
                </div>
                <div class="card-body">
                    <form method="POST" class="mt-3" action="" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                        <label for="role" class="form-label fw-bold">Role</label>
                         <select name="role" id="cadre_role">
                            <option value="">--Choisissez une option--</option>
                            <option value="chef_dpt">Chef de département</option>
                            <option value="chef_ser">Chef de service</option>
                            <option value="cadre">Cadre</option>
                         </select>
                        </label>
                        </div>
                        <select name="role" id="cadre_role">
                            <option value="">--Choisissez une option--</option>
                            <option value="sed">Etude & Dev</option>
                            <option value="ses">SES</option>
                            <option value="amoa">AMOA</option>
                         </select>
                        </label>
                        </div>
                        <div class="form-group mb-3">
                            <label for="name" class="form-label fw-bold">Nom</label>
                            <input type="text" name="name" value="{{old('name')}}" placeholder="Nom" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="service">Service</label>
                            <input type="text" class="form-control" value="{{old('service')}}"  name="service" placeholder="Service">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="mail">Email</label>
                            <input type="mail" class="form-control" value="{{old('mail')}}"  placeholder="Email" name="mail">
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary">
                                    Modifier
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection