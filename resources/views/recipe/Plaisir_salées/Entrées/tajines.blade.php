@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Tajines </h1>
</div>

<div >
    <div class= "titre"> 
        <h2>Tajine marocain au poulet</h2>
        <h3>origine : Maghreb</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>Des morceaux de poulet  </li>
                    <li>Des pommes de terre  </li>
                    <li>Un citron confit </li>
                    <li>Un oignon  </li>
                    <li>Trois gousses d’ail hachés  </li>
                    <li>De l’huile d’olive   </li>
                    <li>Une cuillère à café de sel, curcuma, gingembre et poivre  </li>
                    <li>Une demi cuillère à café de piment doux </li>
                    <li>Des olives vertes et violettes </li>
                    <li>Un mélange de persil et coriandre  </li>
                    <li>Du safran  </li>
                    <li>De l’eau 150ml  </li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/tajinepoulet.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p>Répandu dans tous les pays du Maghreb, le tajine est une spécialité traditionnelle selon des sources d'origine berbère, 
      selon certaines sources, 
      le tajine est d'origine marocaine, alors que d'autres sources le font remonter au califat abbasside en Irak.
 
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

    @foreach($tajines as $tajine)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$tajine->titre}}</h2>
                <h3>origine : {{$tajine->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$tajine->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$tajine->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$tajine->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

<hr>

    <div class="button">
        <a tabindex="-1" href="{{ route('form_tajines')}}">Ajouter une recette</a>
    </div>
<div>

@endsection