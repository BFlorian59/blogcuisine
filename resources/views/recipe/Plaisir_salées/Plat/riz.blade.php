@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Riz </h1>
</div>

<div>
    <div class= "titre"> 
        <h2> Riz aux haricots azuki (sekihan)</h2>
        <h3>origine : Japon</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>500 g de riz</li>
                    <li>eau 55 cl (au lieu de 5 cl + 5 cl dans la vidéo c'est plutot 10 et 10 cl)</li>
                    <li>1 boîte de 400g haricot rouge </li>
                    <li>1 petit bout d'eau </li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/Sekihan.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p> Le sekihan était préparé à chaque évènement marquant le passage d'une étape de la vie : à la naissance d'un enfant, 
      à la première présentation d'un bébé à la divinité tutélaire du sanctuaire local, aux premières menstruations d'une jeune fille, 
      aux mariages.
        Aujourd'hui, le sekihan est souvent servi lors d'occasions spéciales tout au long de l'année au Japon, comme les anniversaires, 
        les réussites personnelles ou professionnelles et pour certains jours fériés, comme Shichi-go-san, ou O-bon.
 
    </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/fFyy4vrS2mg" title="YouTube video player" frameborder="0" 
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

    @foreach($riz as $rizs)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$rizs->titre}}</h2>
                <h3>origine : {{$rizs->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$rizs->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$rizs->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$rizs->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

<hr>

    <div class="button">
        <a tabindex="-1" href="{{ route('form_riz')}}">Ajouter une recette</a>
    </div>
<div>

@endsection