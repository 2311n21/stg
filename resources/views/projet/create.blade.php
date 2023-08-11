@extends('adminlte::page')

@section('title', 'Gestion des projets | Ajouter')

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
                        Ajouter un projet
                    </h3>
                </div>
                <div class="card-body">
                    <form method="POST" class="mt-3" action="{{ route('projet.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="aon" class="form-label fw-bold">Numéro d'AO</label>
                            <input type="text" name="aon" value="{{old('aon')}}" placeholder="Numéro d'AO" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="intitule">Intitulé</label>
                            <input type="text" class="form-control" value="{{old('intitule')}}"  name="intitule" placeholder="Intitule">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="date_debut">Date de début</label>
                            <input type="date" id="date_debut" name="date_debut">
                        </div>
                        
                         <div class="col">
                          <label class="form-label fw-bold" for="duree" mx-2>Durée (en mois)</label>
                          <input type="number" id="duree" name="duree" value="1" min="1" max="100">
                         </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="mt_acquisition">Montant d'acquisition</label>
                            <input type="text" class="form-control" value="{{old('mt_acquisition')}}"  name="mt_acquisition" placeholder="Montant d'acquisition">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="mt_maintenance">Montant de maintenance</label>
                            <input type="text" class="form-control" value="{{old('mt_maintenance')}}"  name="mt_maintenance" placeholder="Montant de maintenance">
                        </div>
                        <form action="/upload" method="post" enctype="multipart/form-data">
                           @csrf 
                           <label for="pv" class="form-label fw-bold mx-2">PV</label>
                           <input type="file" name="pdf_file" accept=".pdf">
                         </form>
                         <div class="form-group">
                           <label for="exampleFormControlTextarea1">Consistance</label>
                               <textarea class="form-control" value="{{old('consistance')}}" id="consistance" rows="3" placeholder="Consistance"></textarea>
                        </div>
                        <form method="post">
        @csrf
        <label>
        <label for="maintenance" class="form-label fw-bold mx-2">Maintenance</label>

            <input type="radio" name="choix" value="oui" onclick="toggleCasesSupplementaires(true)" mr-3>
            Oui
        </label>

        <label>
            <input type="radio" name="choix" value="non" onclick="toggleCasesSupplementaires(false)">
            Non
        </label>

        <div id="casesSupplementaires" style="display: none;">
         <div class="form-group mb-3">
                            <label class="form-label fw-bold" for="type_maintenance">Type</label>
                         <select name="type_maintenance" id="type_maintenance">
                            <option value="">--Choisissez une option--</option>
                            <option value="sed">Etude & Dev</option>
                            <option value="ses">SES</option>
                            <option value="amoa">AMOA</option>
                         </select>
                        </label>
                        </div>
            <label mr-4>Durée <input type="text" name="duree"></label>
            <label for="nb_jour_assis" mx-3>Journées d'assistance </label>
              <input type="number" id="nb_jour_assis" name="nb_jour_assis" value="1" min="1" max="100">

                  <script>
                     function incrementer() {
                       var input = document.getElementById('nb_jour_assis');
                       var value = parseInt(input.value);
                       input.value = value + 1;
                     }

                    function decrementer() {
                       var input = document.getElementById('nb_jour_assis');
                       var value = parseInt(input.value);
                         if (value > 1) {
                           input.value = value - 1;
                        }
                    }
                </script>

        </div>
        

    </form>

    <script>
        function toggleCasesSupplementaires(afficher) {
            var casesSupplementaires = document.getElementById('casesSupplementaires');
            casesSupplementaires.style.display = afficher ? 'block' : 'none';
        }
    </script>
                        

                     
                        <div class="form-group row mb-0">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary">
                                    Ajouter
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
