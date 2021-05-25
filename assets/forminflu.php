<?php
include 'headerClient.php'
?>
  <script src="app.js" type="text/javascript"></script>
<div id="svg_wrap"></div>

 <h1 class="contactUs">Contactez-nous</h1>
<section class="sectionForm">
  <p>Infos Personnelles</p>
  <input type="text" placeholder="Nom" class="inputPartName" require />
  <input type="text" placeholder="Prénom" require/>
  <input type="text" placeholder="Birthdate" require />
  <input type="text" placeholder="Adresse" />
  <input type="text" placeholder="Mobile" require />
  <input type="Email" placeholder="Email" require />
</section>

<section class="sectionForm">
  <p>Réseaux sociaux</p>
  <input type="text" placeholder="Instagram" />
  <input type="text" placeholder="Facebook" />
  <input type="text" placeholder="Snapchat" />
  <input type="text" placeholder="Youtube" />
</section>

<section class="sectionForm">
  <p>Descriptions</p>
  <textarea type="text" placeholder="Descrivez vous en quelques lignes"></textarea>
  <textarea type="text" placeholder="Pourquoi nous contactez vous ?"></textarea>
  
</section>


<section class="sectionForm">
  <p>General condtitions</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</section>

  <div class="buttonForm" id="prev">&larr; Précédent</div>
<div class="buttonForm" id="next">Suivant &rarr;</div>
<div class="buttonForm" id="submit">Acceptez et envoyer les informations</div>
<?php
include 'footer.php'
?>
