<nav class="navbar navbar-inverse fixed-top">  
    
  <div class="navbar-header">
    <a class="navbar-brand" href="#">Blog de cuisine</a>
  </div>
  <ul class="nav navbar-nav">
      <li class="active"><a href="{{ route('welcome')}}">Accueil</a></li>             
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Plaisir Salés</span> <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a tabindex="-1" href="{{ route('amuses_bouches.index')}}">Amuse bouche</a></li>
        <li class="dropdown-submenu">
          <a class="test" tabindex="-1" href="#">Entrées <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a tabindex="-1" href="{{ route('crudités.index')}}">Crudités</a></li>
            <li><a tabindex="-1" href="{{ route('soupe.index')}}">Soupe</a></li>
            <li><a tabindex="-1" href="{{ route('tajines.index')}}">Tajines</a></li>
            <li><a tabindex="-1" href="{{ route('bricks.index')}}">Bricks</a></li>
          </ul>
        </li>
        <li class="dropdown-submenu">
          <a class="test" tabindex="-1" href="#">Plats <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a tabindex="-1" href="{{ route('quiches.index')}}">Quiches</a></li>
            <li><a tabindex="-1" href="{{ route('tartes.index')}}">Tartes</a></li>
            <li><a tabindex="-1" href="{{ route('pizzas.index')}}">Pizzas</a></li>
            <li><a tabindex="-1" href="{{ route('viande.index')}}">Viande</a></li>
            <li><a tabindex="-1" href="{{ route('poulet.index')}}">Poulet</a></li>
            <li><a tabindex="-1" href="{{ route('poissons.index')}}">Poissons</a></li>
            <li><a tabindex="-1" href="{{ route('légumes.index')}}">Légumes</a></li>
            <li><a tabindex="-1" href="{{ route('pommes_de_terres.index')}}">Pommes de terres</a></li>
            <li><a tabindex="-1" href="{{ route('oeufs.index')}}">Oeufs</a></li>
            <li><a tabindex="-1" href="{{ route('rizs.index')}}">Riz</a></li>
            <li><a tabindex="-1" href="{{ route('pâtes.index')}}">Pâtes</a></li>
            <li><a tabindex="-1" href="{{ route('couscous.index')}}">Couscous</a></li>
            <li><a tabindex="-1" href="{{ route('sauces.index')}}">Sauces</a></li>
          </ul>
        </li>
      </ul>
      
    </li>

    <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Plaisirs sucrés</span> <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li class="dropdown-submenu">
            <a class="test" tabindex="-1" href="#">Gâteaux à partager <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a tabindex="-1" href="{{ route('cakes.index')}}">Cakes</a></li>
              <li><a tabindex="-1" href="{{ route('cheese_cakes.index')}}">Cheese cakes</a></li>
              <li><a tabindex="-1" href="{{ route('gâteaux_maison.index')}}">Gâteaux maison</a></li>
              <li><a tabindex="-1" href="{{ route('gâteaux_au_chocolat.index')}}">Gâteaux au chocolat</a></li>
              <li><a tabindex="-1" href="{{ route('tartes_ds.index')}}">Tartes</a></li>
            </ul>
          </li>
          <li class="dropdown-submenu">
            <a class="test" tabindex="-1" href="#">Pour le Goûters <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a tabindex="-1" href="{{ route('gâteaux.index')}}">Gâteaux</a></li>
              <li><a tabindex="-1" href="{{ route('biscuits_moelleux.index')}}">Biscuis moelleux</a></li>
              <li><a tabindex="-1" href="{{ route('biscuits_secs.index')}}">Biscuits secs</a></li>
              <li><a tabindex="-1" href="{{ route('crèpes.index')}}">Crèpes</a></li>
              <li><a tabindex="-1" href="{{ route('gauffres.index')}}">Gauffres</a></li>
            </ul>
          </li>
          <li class="dropdown-submenu">
            <a class="test" tabindex="-1" href="#">Autres desserts maison<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a tabindex="-1" href="{{ route('yaourts.index')}}">Yaourts</a></li>
              <li><a tabindex="-1" href="{{ route('crèmes_et_entrements.index')}}">Crèmes et entrements</a></li>
            </ul>
          </li>
          <li class="dropdown-submenu">
            <a class="test" tabindex="-1" href="#">Gâteaux thématiques<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li class="dropdown-submenu">
                <a class="test" tabindex="-1" href="#">Desserts de Noël<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a tabindex="-1" href="{{ route('bûche.index')}}">Bûches</a></li>
                  <li><a tabindex="-1" href="{{ route('biscuits.index')}}">Biscuits</a></li>
                  <li><a tabindex="-1" href="{{ route('boissons.index')}}">Boissons</a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
        
    </li>

    <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Boissons</span> <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a tabindex="-1" href="{{ route('thés.index')}}">Thés</a></li>
        <li><a tabindex="-1" href="{{ route('cafés.index')}}">Cafés</a></li>
        <li><a tabindex="-1" href="{{ route('cocktails.index')}}">Cocktails</a></li>
        <li><a tabindex="-1" href="{{ route('boissons_fraîches.index')}}">Boissons fraîches</a></li>
        <li><a tabindex="-1" href="{{ route('boissons_chaudes.index')}}">Boissons chaudes</a></li>
        <li><a tabindex="-1" href="{{ route('jus.index')}}">Jus de fruits</a></li>
        <li><a tabindex="-1" href="{{ route('smoothies.index')}}">Smoothies</a></li>
        </ul>
    </li>

    <ul class="nav navbar-nav">
      <li><a href="{{ route('pain.index')}}">Le pain</a></li>
    </ul>

    <ul class="nav navbar-nav">
      <li><a href="{{ route('epices.index')}}">Les épices</a></li>
    </ul>

    <ul class="nav navbar-nav">
      <li><a href="{{ route('condiments.index')}}">Les condiments</a></li>
    </ul>

    <ul class="nav navbar-nav">
      <li><a href="{{ route('conserves.index')}}">Les conserves traditionnels</a></li>
    </ul>

    <ul class="nav navbar-nav">
      <li><a href="{{ route('supermarchés')}}">Comme au supermarché</a></li>
    </ul>
        
    <ul class="nav navbar-nav">
      <li><a href="{{ route('menu')}}">Idées Menu</a></li>
    </ul>
        
    <ul class="nav navbar-nav">
      <li><a href="{{ route('brunch')}}">Idées Brunch</a></li>
    </ul>
        
    <ul class="nav navbar-nav">
      <li><a href="{{ route('ramadhan.index')}}">Recettes sucrées pour Ramadhan</a></li>
    </ul>

    <ul class="nav navbar-nav">
      <li><a href="{{ route('aïd.index')}}">Recettes sucrées pour l'Aïd</a></li>
    </ul>
  </ul>
</nav>


<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>

