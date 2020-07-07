@extends('adminlte::page')

@section('title', 'Gestion Cabinet Medical')

@section('content_header')

<h3>Ajouter une Secretaire</h3>
Veuillez Remplir ce formulaire afin d' ajouter une secretaire.
Merci.
<form action="{{ route('Secretaire.store') }}" method="post">
          {{ csrf_field() }}
<div class="modal-body">
  <div class="bootstrap-iso">
     <div class="container-fluid">
      <div class="row">
       <div class="col-md-6 col-sm-6 col-xs-12">
         <div class="form-group ">
          <label class="control-label requiredField" for="nom">
           Nom Secretaire
           <span class="asteriskField">
            *
           </span>
          </label>
          <input class="form-control" id="Nom" name="nom" type="text" require/>
         </div>
         <div class="form-group ">
          <label class="control-label " for="mail">
           Email
          </label>
          <input class="form-control" id="mail" name="mail" type="email" require/>
         </div>
         <div class="form-group ">
          <label class="control-label " for="mail">
           Password
          </label>
          <input class="form-control" id="password" name="password" type="password" require/>
         </div>
         <div class="form-group">
          <div>

          </div>
         </div>

         <div class="modal-footer">
           <button type="submit" class="btn btn-primary pull-right">Ajouter</button>
         </div>

       </div>
      </div>
     </div>
    </div>


</div>

</form>

@endsection
