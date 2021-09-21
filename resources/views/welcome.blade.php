@extends('layouts.app')
@section('content')

<div class="Catégorie"> 
    <h1> Bienvenue sur le blog de cuisine </h1>
</div>

<div class= "titre"> 
    <h2>Voici un menu que j'apprécie:</h2>  
    <br>
</div>
<hr>

<div class= "titre"> 
    <h2>Boisson:</h2>  
    <br>
</div>

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

<div class= "titre"> 
    <h2>Entrée:</h2>  
    <br>
</div>

<div >
    <div class= "titre"> 
        <h2> Salade thaï</h2>
        <h3>origine : Laos</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>1 c à table d’huile végétale </li>
                    <li>1 c à café d’ail haché </li>
                    <li>1 c à café de gingembre haché</li>
                    <li>1 c à café de purée de piment </li>
                    <li>1 c à table de sauce soja</li>
                    <li>1 c à table de sirop d’érable </li>
                    <li>1 c à café de vinaigre de riz </li>
                    <li>1/4 de tasse (60ml) de beurre d’arachide </li>
                    <li>1/2 tasse (25ml) de lait de coco </li>
                    <li>3 tasses (750ml) carottes râpées </li>
                    <li>3 tasses (750ml) de fèves germées </li>
                    <li>2 oignons verts hachés </li>
                    <li>1/2 tasse  (60ml) de coriandre </li>
                    <li>1/2 tasse (60ml) d’arachides broyées </li>
                    <li>Le jus d’1/2 lime </li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/thai.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p>La salade de papaye verte est une création des Lao qui a été introduite en 
      Thaïlande centrale et dans le reste du monde par des migrants laos et isans installés à Bangkok pour chercher du travail.
 
    </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/RLomWY-OlYE" title="YouTube video player" frameborder="0" 
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    
    </div>
</div>
<hr>

<div class= "titre"> 
    <h2>Plat:</h2>  
    <br>
</div>

<div>
    <div class= "titre"> 
        <h2> Pâtes à la carbonara</h2>
        <h3>origine : Italie</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>400g de spaghettis</li>
                    <li>4 œufs</li>
                    <li>200g de parmesan râpé </li>
                    <li>200g de lardons </li>
                    <li>Sel</li>
                    <li>Poivre du moulin </li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/carbonara.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p> La région du Latium a toujours revendiqué la paternité de cette fameuse recette, mais l'origine réelle de ces « pâtes à la 
        charbonnière » est en fait très discutée et plusieurs versions plus ou moins fantaisistes circulent.
        Selon une légende répandue, le nom de la recette proviendrait des Carbonari, membres d'une société secrète à vocation 
        politique créée au début du xixe siècle. Mais le rapport avec la pasta est en fait assez flou.
 
    </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/hGu2hmir-ic" title="YouTube video player" frameborder="0" 
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    
    </div>
</div>
<hr>

<div class= "titre"> 
    <h2>Dessert:</h2>  
    <br>
</div>

<div>
    <div class= "titre"> 
        <h2>Gâteau au chocolat </h2>
        <h3>origine : France</h3>   
        <br>
    </div>
    
    
    <div class= "row">
        <div class="col-md-6">
            <div class="recipe">
            
                <h3> Les ingrédients:</h3>
                <ul>
                    <li>200g de chocolat</li>
                    <li>125g de farine </li>
                    <li>125g de beurre</li>
                    <li>250g de sucre </li>
                    <li>5 œufs</li>
                    <li> 1/2 sachet de levure chimique </li>
                </ul>
            </div>
        </div> 
        
        <div class="col-md-6"> 
            <img src="{{asset('assets/img/chocolat.jpg')}}">
        </div>
    </div>
    
   
    
    <h3>L'histoire de la recette</h3>
    <p> Il existe de nombreuses recettes à travers le monde. Cette forme de gâteau aurait été imaginée à la fin du xviiie siècle, 
      après plusieurs siècles d'utilisation du chocolat uniquement en boisson.
      </p>

    <div class="video">
        <h3> Réalisation de la recette en vidéo: </h3>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/9ZOEZ-iC6z4" title="YouTube video player" frameborder="0" 
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    
    </div>
</div>
<hr>

@endsection