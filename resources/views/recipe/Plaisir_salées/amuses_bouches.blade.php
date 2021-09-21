@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Amuses Bouches </h1>
</div>

<div >
    <div class= "titre"> 
        <h2> Bouchées de jambon cru au chèvre et à la figue</h2>
        <h3>origine : France</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>4 figues fraîches  </li>
                    <li>du fromage chèvre en bûche (quantité selon des figues) </li>
                    <li>8 tranches de jambon cru</li>
                    <li>poivre noir </li>
                    <li>roquette pour servir </li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/bjc.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p>nous vous proposons cette recette de "bouchées de jambon cru au chèvre et à la figue" bon marché qui éblouira vos convives 
      pour un repas de fête de rêve.
 
    </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/JYaMSc8I_P4" title="YouTube video player" frameborder="0" 
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

    @foreach($amuses_bouches as $amuses_bouche)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$amuses_bouche->titre}}</h2>
                <h3>origine : {{$amuses_bouche->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$amuses_bouche->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$amuses_bouche->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$amuses_bouche->video}}"></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

    <div class="button">
        <a tabindex="-1" href="{{ route('form_amuses_bouches')}}">Ajouter une recette</a>
    </div>
<div>

@endsection