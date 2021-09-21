@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Couscous </h1>
</div>

<div>
    <div class= "titre"> 
        <h2> Couscous d'agneau</h2>
        <h3>origine : Maghreb</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>Graines de couscous "Moyen"</li>
                    <li>1 kg de poitrine d'agneau découpée en morceaux </li>
                    <li>10 morceaux de collier d'agneau </li>
                    <li>6 carottes </li>
                    <li>2 artichauts</li>
                    <li>6 navets </li>
                    <li>4 courgettes </li>
                    <li>6 oignons </li>
                    <li>6 à 8 tomates </li>
                    <li>Huile d'arachide </li>
                    <li>Sel et poivre </li>
                    <li>Ras el hanout </li>
                    <li>Paprika </li>
                    <li>Cumin en poudre  </li>
                    <li>Beurre </li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/couscous.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p> Différentes thèses sont répandues quant à l’origine du couscous, mais la plus admise est celle qui atteste d’une origine berbère.
        L’historienne culinaire Lucie Bolens décrit des pots primitifs de couscous trouvés dans des tombes qui remontent au règne du roi 
        berbère Massinissa, c’est-à-dire entre 238 et 149 avant Jésus-Christ. Cette région d'Afrique du Nord était particulièrement 
        prospère et était considérée comme le « grenier de Rome ».
        Les Arabes, après leur conquête l’ont adopté.
        On retrouve les vestiges des premiers ustensiles (connus) dans la région de Tiaret (actuelle Algérie), où les outils de cuisine 
        datant du ixe siècle qui ont été découverts ressemblent très fortement à l’outil principal de cuisson du couscous : 
        le couscoussier.
        Ainsi, la semoule, bien connue dans les pays du Maghreb avant la conquête arabe, ne l’est pas par les conquérants du 
        Moyen-Orient. Lors de l’islamisation de l’Afrique du Nord, ils découvrent et adoptent la semoule (semid en arabe) qui devient 
        la base d’un plat des plus importants dans leurs habitudes alimentaires. Ils intègrent ce plat d’origine communément attestée 
        berbère, tant et si bien qu’une histoire connue en Algérie et en Tunisie raconte qu’un « chef de tribu menaça sa femme, 
        fraîchement convertie à l’islam, de la tuer dans le cas où elle serait incapable de préparer ce plat, pour elle encore inconnu ».
      </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/VqlbYFRzpSE" title="YouTube video player" frameborder="0" 
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

    @foreach($couscous as $couscou)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$couscou->titre}}</h2>
                <h3>origine : {{$couscou->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$couscou->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$couscou->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$couscou->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

<hr>

    <div class="button">
        <a tabindex="-1" href="{{ route('form_couscous')}}">Ajouter une recette</a>
    </div>
<div>

@endsection