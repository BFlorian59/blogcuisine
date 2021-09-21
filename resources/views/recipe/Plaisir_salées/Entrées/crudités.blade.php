@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Crudités </h1>
</div>

<div >
    <div class= "titre"> 
        <h2> Salade thaï</h2>
        <h3>origine : Laos</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>1 c à table d’huile végétale </li>
                    <li>1 c à café d’ail haché </li>
                    <li>1 c à café de gingembre haché</li>
                    <li>1 c à café de purée de piment </li>
                    <li>1 c à table de sauce soja</li>
                    <li>1 c à table de sirop d’érable </li>
                    <li>1 c à café de vinaigre de riz </li>
                    <li>1/4 de tasse (60ml) de beurre d’arachide </li>
                    <li>1/2 tasse (25ml) de lait de coco </li>
                    <li>3 tasses (750ml) carottes râpées </li>
                    <li>3 tasses (750ml) de fèves germées </li>
                    <li>2 oignons verts hachés </li>
                    <li>1/2 tasse  (60ml) de coriandre </li>
                    <li>1/2 tasse (60ml) d’arachides broyées </li>
                    <li>Le jus d’1/2 lime </li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/thai.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p>La salade de papaye verte est une création des Lao qui a été introduite en 
      Thaïlande centrale et dans le reste du monde par des migrants laos et isans installés à Bangkok pour chercher du travail.
 
    </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/RLomWY-OlYE" title="YouTube video player" frameborder="0" 
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    
    </div>
</div>
<hr>

<style>
  .uper {
    margin-top: 40px;
  }
</style> 

 <div class="uper">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

    @foreach($crudités as $crudité)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$crudité->titre}}</h2>
                <h3>origine : {{$crudité->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$crudité->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$crudité->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$crudité->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

<hr>

    <div class="button">
        <a tabindex="-1" href="{{ route('form_crudités')}}">Ajouter une recette</a>
    </div>
<div>

@endsection