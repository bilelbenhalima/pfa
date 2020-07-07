@extends('adminlte::page')

@section('title', 'Gestion Cabinet Medical')

@section('content_header')

<h3>Edit Profile </h3>

<form action="admin/{{$docteur->id}}" method="post">
{{ csrf_field() }}
<div class="modal-body">
  <div class="bootstrap-iso">
     <div class="container-fluid">
      <div class="row">
       <div class="col-md-6 col-sm-6 col-xs-12">
         <div class="form-group ">
          <label class="control-label requiredField" for="nom">
           Nom Dr
           <span class="asteriskField">
            *
           </span>
          </label>
          <input class="form-control" id="Nom" name="nom" type="text" value="{{$docteur->nom}}" required/>
         </div>
         <div class="form-group ">
          <label class="control-label requiredField" for="prenom">
           Prenom
           <span class="asteriskField">
            *
           </span>
          </label>
          <input class="form-control" id="prenom" name="prenom" type="text" value="{{$docteur->prenom}}" required/>
         </div>
         <div class="form-group ">
          <label class="control-label " for="addresse">
           Adresse
          </label>
          <input class="form-control" id="addresse" name="addresse" type="text" value="{{$docteur->addresse}}" required/>
         </div>

         <div class="form-group ">
          <label class="control-label " for="codepostal">
           Code Postal
          </label>
          <input class="form-control" id="codepostal" name="codepostal"  type="text" value="{{$docteur->codepostal}}" required/>
         </div>
         <div class="form-group ">
          <label class="control-label " for="ville">
           Ville
          </label>
          <input class="form-control" id="ville" name="ville"  type="text" value="{{$docteur->ville}}" required/>
         </div>


         <div class="form-group ">
          <label class="control-label " for="telfixe">
           Telephonne Fixe
          </label>
          <input class="form-control" id="telfixe" name="telfixe" type="number" value="{{$docteur->telfixe}}" required/>
         </div>
         <div class="form-group ">
          <label class="control-label " for="telmobile">
           Telephone Mobile
          </label>
          <input class="form-control" id="telmobile" name="telmobile" type="number" value="{{$docteur->telmobile}}" required/>
         </div>
         <div class="form-group ">
          <label class="control-label " for="mail">
           Email
          </label>
          <input class="form-control" id="mail" name="mail" type="email" value="{{$docteur->mail}}" required/>
         </div>

         <div class="form-group ">
          <label class="control-label " for="specialite">
           Specialite
          </label>
          <input class="form-control" id="specialite" name="specialite" type="text" value="{{$docteur->specialite}}" required/>
         </div>
         <div class="form-group ">
          <label class="control-label " for="web">
           Page web
          </label>
          <input class="form-control" id="web" name="web" placeholder="https://wwww.site.web" value="{{$docteur->web}}" type="text"/>
         </div>

         <input name="users_id" type="hidden" value="{{$docteur->users_id}}">
         <input name="id" type="hidden" value="{{$docteur->id}}">

         <div class="form-group">
          <div>

          </div>
         </div>

         <div class="modal-footer">
           <button type="submit" class="btn btn-primary pull-right">Sauvgarder</button>
         </div>

       </div>
      </div>
     </div>
    </div>


</div>

</form>

@endsection
