@extends('layouts.app')

@section('content')
<div class="Catégorie"> 
    <h1> Catégorie: Boissons fraîches </h1>
</div>

<div >
    <div class= "titre"> 
        <h2> Ice tea</h2>
        <h3>origine : États-Unis</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>Thé Oolong ou thé blanc, ou encore thé vert ou thé noir qui va bien avec la pêche </li>
                    <li>1 Pêche jaune et 1 pêche blanche </li>
                    <li>150 gr de chocolat minimum 60% de cacao </li>
                    <li>1 cuil. à soupe de miel ou sirop d'agave ou sucre (facultatif)  </li>
                    <li>1 litre d'eau </li>
                    <li>Quelques feuilles de verveine ou de menthe </li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/chocolat_epices.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p>Les Britanniques sont les premiers à ajouter de la glace à leur thé pendant les journées chaudes. Le thé arrive aux États-Unis vers 1795 grâce à l'explorateur botaniste français André Michaux. 
      Les livres de recettes britanniques et américains commencent alors presque immédiatement à évoquer l'utilisation de thé vert froid dans des punches très alcoolisés. Le thé glacé se démocratise dans la deuxième moitié du xixe siècle. 
    </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/aUKVfbJfbbU" title="YouTube video player" frameborder="0" 
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
    
    </div>
</div>

<hr>

<div >
    <div class= "titre"> 
        <h2> Limonade</h2>
        <h3>origine : France</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li> 1 citron jaune </li>
                    <li>1 citron vert </li>
                    <li>75 cl d'eau pétillante </li>
                    <li>150gr de sucre </li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/limonade.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p> La limonade a fait ses débuts à Paris le 20 août 1630. Composée d’eau pétillante, de jus de limon et de miel, elle a été vendue par des vendeurs dans des réservoirs attachés au dos. 
      Bien que populaire dans toute l’Europe, la limonade est devenue tellement à la mode à Paris qu’en 1676, les vendeurs ont formé un syndicat appelé Compagnie de Limonadiers. 
      L’engouement pour la limonade a même aidé Paris à se protéger de la peste. 
    </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/kItLQuuLgBI" title="YouTube video player" frameborder="0" 
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
           
    </div>
</div>

<hr>

<div >
    <div class= "titre"> 
        <h2>La sangria</h2>
        <h3>origine : Antilles ou Amérique du sud</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li> 4,5 litres de vin rouge </li>
                    <li>1,5 kg d’oranges non-traitées</li>
                    <li>700 gr de citrons jaunes non-traités </li>
                    <li>1L jus d’orange frais  </li>
                    <li>20 cl du brandy espagnol ( ou Cognac )  </li>
                    <li>250 g de sucre de canne  </li>
                    <li>2 cuillères à café de cannelle ou un bâton vanille ( facultatif )  </li>
                    <li>1 bouteille de limonade ( facultatif car la vraie sangria n’a pas d’eau pétillante ! ) </li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/sangria.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p> La sangria est une boisson alcoolisée aux origines controversées. Selon certaines sources, la sangria ne proviendrait pas d'Espagne,
       mais plutôt des Antilles ou d’Amérique du Sud. C'est au xixe siècle que les premières références à cette boisson sont faites, toutes sur le continent américain. Toutefois, le père Esteban Torres aurait rapporté dès 1788 que cette boisson délicieuse, 
       inventée par les Anglais, se buvait beaucoup dans les colonies françaises et britanniques aux Antilles.
       De nos jours, la sangria reste la boisson alcoolisée typique de l'Espagne et du Portugal.
       Concernant le commerce de cette préparation alcoolisée, en 2014, la Commission Européenne a enregistré, au bénéfice de ces deux pays, une protection via une AOP pour cette appellation d'origine.

    </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/5Z7oA0N7Kms" title="YouTube video player" frameborder="0" 
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

    @foreach($boissons_fraîches as $boissons_fraîche)
    <hr>
        <div class= "titre"> 
                
                <h2>{{$boissons_fraîche->titre}}</h2>
                <h3>origine : {{$boissons_fraîche->origine}}</h3>   
                <br>
        </div>

        <div class= "row">
                <div class="col-md-6">
                    <div class="recipe">
                    
                        <h3> Les ingrédients:</h3>
                        <ul>
                            <li>{{$boissons_fraîche->ingredient}} </li>
                            
                        </ul>
                    </div>
                </div> 
                
                <div class="col-md-6"> 
                
                </div>
        </div>

        <h3>L'histoire de la recette</h3>
            <p>   {{$boissons_fraîche->histoire}}    </p>

        
            <div class="video">
            <h3> Réalisation de la recette en vidéo: </h3>
            
            <iframe width="560" height="315" src="{{$boissons_fraîche->video}}" title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        </div>
        <hr>

   
    
    @endforeach

    <div class="button">
        <a tabindex="-1" href="{{ route('form_boissons_fraîches')}}">Ajouter une recette</a>
    </div>
<div>

@endsection