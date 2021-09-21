@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Soupes </h1>
</div>
<div class="page"> 
    <div >
        <div class= "titre"> 
            <h2>Soupe aux lentilles</h2>
            <h3>origine : Turquie</h3>   
            <br>
        </div>
        
        
        <div class= "row">
            <div class="col-md-6">
                <div class="recipe">
                
                    <h3> Les ingrédients:</h3>
                    <ul>
                        <li>Poitrine de poulet  </li>
                        <li>1/2 tasse de lentilles rouges  </li>
                        <li>1 cuillère à soupe de concentré de tomate  </li>
                        <li>4 carottes  </li>
                        <li>Citrouille rouge  </li>
                        <li>1 pomme de terre  </li>
                        <li>1 oignon  </li>
                        <li>1 tomate  </li>
                        <li>1 céleri  </li>
                        <li>6 gousses d'ail </li>
                        <li>1 cuillère à café de poivron rouge  </li>
                        <li>1 cuillère à café de coriandre et de carvi  </li>
                        <li>1 cuillère à café de poivre noir  </li>
                        <li>1 cuillère à café de cumin  </li>
                        <li>1 cuillère à café de curcuma  </li>
                        <li>1 cuillère à café de sel </li>
                    </ul>
                </div>
            </div> 
            
            <div class="col-md-6"> 
                <img src="{{asset('assets/img/mercimek.jpg')}}">
            </div>
        </div>
        
    
        
        <h3>L'histoire de la recette</h3>
        <p>C’est la soupe turque aux lentilles rouges, soit le “kırmızı mercimek çorbası” en turc. Cette soupe de lentilles dites aussi
            lentilles corail est bien parfumée à la menthe séchée et simple et rapide à réaliser. Cette soupe de différentes saveurs est au menu dans tous les restaurants turcs lokanta), quelque soit la saison et quelque soit l’heure de la journée. À la maison, 
            elle est également indispensable dans les tables turques, où nous apprécions de sentir l’odeur de la soupe envahir la cuisine..
        </p>

        <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/FES989Ivb4Q" title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
    </div>

    <hr class="hr">

    <div >
        <div class= "titre"> 
            <h2>Soupe Miso</h2>
            <h3>origine : Japon</h3>   
            <br>
        </div>
        
        
        <div class= "row">
            <div class="col-md-6">
                <div class="recipe">
                
                    <h3> Les ingrédients:</h3>
                    <ul>
                        <li>350～400 ml de l'eau  </li>
                        <li>125 g de tofu  </li>
                        <li>1 cuillerée à café d'algue  </li>
                        <li>1/4 d'oignon en émincée  </li>
                        <li>1 cuillerée à soupe de Miso  </li>
                        <li>1 cuillerée à café de poudre de poisson (DASHI)  </li>
                        
                    </ul>
                </div>
            </div> 
            
            <div class="col-md-6"> 
                <img src="{{asset('assets/img/miso.jpg')}}">
            </div>
        </div>
        
    
        
        <h3>L'histoire de la recette</h3>
        <p>Ce plat traditionnel très ancien de l'histoire de la cuisine japonaise, 
            à base de miso originaire de Chine, est couramment consommé par les Japonais depuis la période Muromachi (1392-1573).
        </p>

        <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/RPiL8VBaKXY" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        
    </div>
    

</div>



<hr class="hr">

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

    @foreach($soupe as $soupes)
        <div class= "titre"> 
                
                <h2>{{$soupes->titre}}</h2>
                <h3>origine : {{$soupes->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$soupes->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$soupes->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$soupes->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>

   
    
    @endforeach


    <div class="button">
        <a tabindex="-1" href="{{ route('form_soupe')}}">Ajouter une recette</a>
    </div>
<div>


@endsection
