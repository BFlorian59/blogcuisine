@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Bricks </h1>
</div>

<div >
    <div class= "titre"> 
        <h2> Brick au thon</h2>
        <h3>origine : Maghreb</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>1 paquet de feuilles de brick </li>
                    <li>1 boîte de thon à l'huile </li>
                    <li>Quelques brins de persil hachés</li>
                    <li>1 oeuf </li>
                    <li>2 c à s de fromage râpé </li>
                    <li>10 olives verte dénoyautées  </li>
                    <li>1 pincée de sel </li>
                    <li>¼ de c a c de poivre noir </li>
                    <li>Huile pour la friture </li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/brickthon.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p>L'origine de la feuille de brick remonte au XIe siècle. Revendiquée par plusieurs pays la 
      feuille de brick à une longue histoire. La feuille de brick est apparue avec les cultures nomades depuis l'origine de la 
      civilisation. Elle s'est développée par cette culture nomade qui avait besoin de transporter et cuisiner facilement 
      les denrées alimentaires. Ces feuilles se sont répandues dans l'Afrique du nord : 
      les feuilles de brick étaient connues dans la culture berbère (Maroc, Algérie, Tunisie).
 
    </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/4FRXmTT6vxM" title="YouTube video player" frameborder="0" 
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

    @foreach($bricks as $brick)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$brick->titre}}</h2>
                <h3>origine : {{$brick->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$brick->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$brick->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$brick->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

<hr>

    <div class="button">
        <a tabindex="-1" href="{{ route('form_bricks')}}">Ajouter une recette</a>
    </div>
<div>

@endsection