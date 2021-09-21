@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="recipe uper">
  <div class="recipe-header">
    Ajouter une recette
  </div>

  <div class="recipe-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <form method="post" action="{{ route('aïd.store') }} "enctype="multipart/form-data">
.         @csrf
        <div class="form-group">
            <label for="titre">Entrez la recette :</label>
            <input type="titre" class="form-control" name="titre" id="titre" placeholder="Entrez la recette">
            
        </div>
        <div class="form-group">
            <label for="origine">Entrez l'origine de la recette</label>
            <input type="origine" class="form-control" name="origine" id="origine" placeholder="Entrez le pays d'origine de la recette">
        </div>

        <div class="form-group">
            <label for="ingredient">Entrez les ingrédients: </label>
            <input type="ingredient" class="form-control" name="ingredient" id="ingredient" placeholder="Entrez les ingrédients">
        </div>

        <div class="form-group">
            <label for="histoire">Entrez l'histoire de la recette</label>
            <input type="histoire" class="form-control" name="histoire" id="histoire" placeholder="Entrez l'histoire">
        </div>

        <div >
          <label>Mettre une vidéo</label>
          <input type="file"  name="video">
        </div>

        <div >
          <label>Mettre une image</label>
          <input type="file"  name="image">
        </div>

        <button type="submit" class="btn btn-primary">Créer une nouvelle recette</button>
      </form>
  </div>
</div>
@endsection
