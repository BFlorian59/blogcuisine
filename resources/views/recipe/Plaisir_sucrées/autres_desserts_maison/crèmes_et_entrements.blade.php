@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Crèmes et entrements </h1>
</div>

<div>
    <div class= "titre"> 
        <h2>Crème façon Danette à la vanille </h2>
        <h3>origine : France</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>40 cl de lait </li>
                    <li>10 cl de crème fraîche liquide </li>
                    <li>1 pincée de sel  </li>
                    <li>30g de fécule de maïs </li>
                    <li>75g de sucre</li>
                    <li>1 gousse de vanille </li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/danette.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p> En 1969, Daniel Carasso, fondateur de Danone, se rend aux Pays-Bas pour visiter une usine fabriquant le Vla, une crème dessert 
      hollandaise, un peu épaisse. De retour en France, il décide de s'en inspirer pour créer une recette plus onctueuse. En 1970, 
      Danette au chocolat sort des lignes de transformation. Elle est alors conditionnée dans une barquette en plastique ovale de 500 g.
       À l'époque, c'est une nouveauté. Le produit contenu est qualifié d' ultra-frais, par opposition avec les autres crèmes dessert du 
       commerce présentées alors en conserves ou stérilisées. Les publicités de l'époque 
      insistent sur la présence de crème fraîche dans la Danette. Danone revendique la vente de 10 000 tonnes de Danette en 1974.
      </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/kbIGJGI8FVg" title="YouTube video player" frameborder="0" 
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

    @foreach($crèmes_et_entrements as $crèmes_et_entrement)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$crèmes_et_entrement->titre}}</h2>
                <h3>origine : {{$crèmes_et_entrement->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$crèmes_et_entrement->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$crèmes_et_entrement->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$crèmes_et_entrement->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

<hr>

    <div class="button">
        <a tabindex="-1" href="{{ route('form_crèmes_et_entrements')}}">Ajouter une recette</a>
    </div>
<div>

@endsection