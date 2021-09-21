@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Gâteaux maison </h1>
</div>

<div>
    <div class= "titre"> 
        <h2>Kasutera</h2>
        <h3>origine : Japon</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>6 oeufs</li>
                    <li>200g de farine</li>
                    <li>300g de sucre</li>
                    <li>4 cuil/soupe de miel</li>
                    <li>4 cuil/soupe d'eau chaude</li>
                    <li> un peu d'huile pour le moule </li>
                    <li> Sucre glace : facultatif </li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/kasutera.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p> Il y a plusieurs théories quant aux origines du Kasutera (ou Castella), mais il est généralement admis qu'une recette 
      pâtissière portugaise s’est répandue à Nagasaki à la fin de la période Muromachi, par l'entremise de missionnaires portugais. 
      Le nom dérivé du portugais castela pourrait aussi venir de castelo, indiquant la manière 
      dont les blancs d’œufs sont montés en neige (claras em castelo). Son parent le plus proche est le pão-de-ló, un gâteau portugais.
      Le castella apparut à Nagasaki bien avant la période isolationniste qui débuta, en partie, justement par l'éviction et l'éradication
       des Portugais 
      et chrétiens par Iemitsu Tokugawa entre 1641 et 1853. On retrouve sa trace à l'époque Muromachi, au xvie à Hirado et Nagasaki.
      </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/_HrQyPwwqgo" title="YouTube video player" frameborder="0" 
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

    @foreach($gâteaux_maison as $gâteaux_maisons)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$gâteaux_maisons->titre}}</h2>
                <h3>origine : {{$gâteaux_maisons->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$gâteaux_maisons->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$gâteaux_maisons->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$gâteaux_maisons->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

<hr>

    <div class="button">
        <a tabindex="-1" href="{{ route('form_gâteaux_maison')}}">Ajouter une recette</a>
    </div>
<div>

@endsection