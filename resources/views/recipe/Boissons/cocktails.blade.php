@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Cocktails </h1>
</div>

<div >
    <div class= "titre"> 
        <h2> Mojito</h2>
        <h3>origine : Cuba</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>12 feuilles de menthe  </li>
                    <li>1 c à c de sucre en poudre </li>
                    <li>2 cl de jus de citron vert  </li>
                    <li>1 tranche de citron vert  </li>
                    <li>5 cl de rhum Cubain  </li>
                    <li>5 cl d'eau gazeuse (type Perrier) </li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/mojito.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p>La légende raconte que l'histoire du mojito remonterait au début du xvie siècle 
      (la date de naissance officieuse du prédécesseur du mojito est 1586) lorsque le corsaire explorateur anglais Francis Drake, 
      entre deux pillages de La Havane, appréciait siroter des feuilles de menthe pilées avec du tafia (rhum industriel).
       Cette tradition explique que des clients actuels demandent dans certains bars « give me a Drake » (« donnez moi un Drake » 
       en anglais) 
    </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/6CF64RMZ1II" title="YouTube video player" frameborder="0" 
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    
    </div>
</div>
<hr>

<div >
    <div class= "titre"> 
        <h2> Margarita</h2>
        <h3>origine :Mexique</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>1 cl de jus de citron vert</li>
                    <li>2 cl de Cointreau</li>
                    <li>4 cl de téquila  </li>
                    <li>1 tranche de citron vert pour le décor  </li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/Margarita.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p>Ce cocktail aurait été créé en 1948 à Acapulco par une Américaine, Margaret Sames, dite « Margarita », et porte comme nom la 
      traduction en espagnol du prénom Margaret. Une autre version dit qu'il fut créé par Carlos « Danny » Herrera dans son restaurant 
      au sud de Tijuana en hommage à une actrice américaine nommée Marjorie King.
       On évoque aussi le cocktail Tequila Daisy (« marguerite » en français, « margarita » en espagnol) comme source possible du nom. 
    </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/ox1RxE17Qz0" title="YouTube video player" frameborder="0"
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

    @foreach($cocktails as $cocktail)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$cocktail->titre}}</h2>
                <h3>origine : {{$cocktail->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$cocktail->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$cocktail->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$cocktail->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

    <div class="button">
        <a tabindex="-1" href="{{ route('form_cocktails')}}">Ajouter une recette</a>
    </div>
<div>

@endsection