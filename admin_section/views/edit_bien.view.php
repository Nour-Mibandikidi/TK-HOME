<?php include('partials/_header.php'); ?>

<!-- Content
================================================== -->
<div class="dashboard-content">

<!-- Titlebar -->
<div id="titlebar">
  <div class="row">
    <div class="col-md-12">
      <h2>Ajoutez un Bien</h2>
      <!-- Breadcrumbs -->
      <nav id="breadcrumbs">
        <ul>
          <li><a href="../index.php">Accueil</a></li>
          <li><a href="ajout.php">Ajoutez un Bien</a></li>
          <li>Ajoutez un Bien</li>
        </ul>
      </nav>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">

    <div id="add-listing">
      <?php
    $id_ajout=$_GET['id_ajout'];
    $sql = "SELECT * from  ajouter a,users u,profil p,categorie c WHERE  a.id=u.id AND u.id=p.id AND a.id_cat=c.id_cat AND a.id_ajout='$id_ajout' ";
    $query = $db -> prepare($sql);
    $query->execute();
    $result=$query->fetch(PDO::FETCH_OBJ);
       ?>
      <!-- Section -->
      <form class=""  method="post">
      <div class="">
      <div class="add-listing-section">

        <!-- Headline -->
        <div class="add-listing-headline">
          <h3><i class="sl sl-icon-doc"></i> Les informations de base</h3>
        </div>

        <!-- Title -->
        <div class="row with-forms">
          <div class="col-md-12">
            <h5>Titre du Bien<i class="tip" data-tip-content="Name of your business"></i></h5>
            <input class="search-field" type="text" placeholder="Intitulé de votre bien" name="titre" value="<?= get_input('titre') ? get_input('titre') : e($result->titre) ?>"  required="required"/>
          </div>
        </div>

        <!-- Row -->
        <div class="row with-forms">

          <!-- Status -->
          <div class="col-md-6">
            <h5>Categorie</h5>
            <?php $ret="select id_cat,nom_cat from categorie";
            $query= $db -> prepare($ret);
            //$query->bindParam(':id',$id, PDO::PARAM_STR);
            $query-> execute();
            $results = $query -> fetchAll(PDO::FETCH_OBJ);?>
            <select class="chosen-select-no-single" name="id_cat" >
              <?php if($query -> rowCount() > 0)
              {
              foreach($results as $zoe)
              {
              ?>
              <option value="<?php echo htmlentities($zoe->id_cat);?>" <?= $zoe->nom_cat == $zoe->id_cat ? "selected" : "" ?>><?php echo htmlentities($zoe->nom_cat);?></option>
              <?php }} ?>
            </select>
          </div>

          <!-- Type -->
          <div class="col-md-6">
            <h5>Supplement <i class="tip" data-tip-content="Maximum of 15 keywords related with your business"></i></h5>
            <input type="text" name="cle" value="<?=  get_input('cle') ? get_input('cle') : e($result->cle) ?>" placeholder="">
          </div>

        </div>
        <!-- Row / End -->

      </div>
      <!-- Section / End -->

      <!-- Section -->
      <div class="add-listing-section margin-top-45">

        <!-- Headline -->
        <div class="add-listing-headline">
          <h3><i class="sl sl-icon-location"></i> Localisation</h3>
        </div>

        <div class="submit-section">

          <!-- Row -->
          <div class="row with-forms">

            <!-- City -->
            <div class="col-md-6">
              <h5>Ville</h5>
              <input type="text" name="ville"  value="<?=  get_input('ville') ? get_input('ville') : e($result->ville) ?>" placeholder="Eg: Libreville">
            </div>

            <!-- Address -->
            <div class="col-md-6">
              <h5>Addresse</h5>
              <input type="text" name="adresse"  value="<?=  get_input('adresse') ? get_input('adresse') : e($result->adresse) ?>" placeholder="Numéro et nom de rue">
            </div>

            <!-- City -->
            <div class="col-md-6">
              <h5>Pays</h5>
              <select class="chosen-select-no-single" name="pays">
                <option label="blank">Selectionner le pays du Bien</option>
                                <option>Afghanistan</option>
                                <option>Angola</option>
                                <option>Afrique du Sud</option>
                                <option>Albanie</option>
                                <option>Algérie</option>
                                <option>Allemagne</option>
                                <option>Andorre</option>
                                <option>Anguilla</option>
                                <option>Antarctique</option>
                                <option>Antigua-et-Barbuda</option>
                                <option>Arabie Saoudite</option>
                                <option>Argentine</option>
                                <option>Arménie</option>
                                <option>Aruba</option>
                                <option>Australie</option>
                                <option>Autriche</option>
                                <option>Azerbaïdjan</option>
                                <option>Bahamas</option>
                                <option>Bahreïn</option>
                                <option>Bangladesh</option>
                                <option>Barbade</option>
                                <option>Belgique</option>
                                <option>Bélize</option>
                                <option>Bénin</option>
                                <option>Bermudes</option>
                                <option>Bhoutan</option>
                                <option>Biélorussie</option>
                                <option>Birmanie</option>
                                <option>Bolivie</option>
                                <option>Bonaire, Saint Eustache et Saba</option>
                                <option>Bosnie-Herzégovine</option>
                                <option>Botswana</option>
                                <option>Brésil</option>
                                <option>Brunei</option>
                                <option>Bulgarie</option>
                                <option>Burkina Faso</option>
                                <option>Burundi</option>
                                <option>Cambodge</option>
                                <option>Cameroun</option>
                                <option>Canada</option>
                                <option>Cap-Vert</option>
                                <option>Chili</option>
                                <option>Chine</option>
                                <option>Chypre</option>
                                <option>Colombie</option>
                                <option>Comores</option>
                                <option>Congo</option>
                                <option>Corée du Nord</option>
                                <option>Corée du Sud</option>
                                <option>Costa Rica</option>
                                <option>Côte d'Ivoire</option>
                                <option>Croatie</option>
                                <option>Cuba</option>
                                <option>Curaçao</option>
                                <option>Danemark</option>
                                <option>Djibouti</option>
                                <option>Dominique</option>
                                <option>Égypte</option>
                                <option>Émirats arabes unis</option>
                                <option>Équateur</option>
                                <option>Érythrée</option>
                                <option>Espagne</option>
                                <option>Estonie</option>
                                <option>Etats Unis d'Amérique</option>
                                <option>Éthiopie</option>
                                <option>Fidji</option>
                                <option>Finlande</option>
                                <option>France</option>
                                <option>Gabon</option>
                                <option>Gambie</option>
                                <option>Géorgie</option>
                                <option>Géorgie du Sud-et-les Îles Sandwich du Sud</option>
                                <option>Ghana</option>
                                <option>Gibraltar</option>
                                <option>Grèce</option>
                                <option>Grenade</option>
                                <option>Groenland</option>
                                <option>Guadeloupe</option>
                                <option>Guam</option>
                                <option>Guatémala</option>
                                <option>Guernesey</option>
                                <option>Guinée</option>
                                <option>Guinée équatoriale</option>
                                <option>Guinée-Bissau</option>
                                <option>Guyane</option>
                                <option>Guyane française</option>
                                <option>Haïti</option>
                                <option>Honduras</option>
                                <option>Hong Kong </option>
                                <option>Hongrie</option>
                                <option>Île Bouvet</option>
                                <option>Île Christmas</option>
                                <option>Île de Man</option>
                                <option>Île Jan Mayen</option>
                                <option>Île Norfolk</option>
                                <option>Île Pitcairn</option>
                                <option>Îles Åland</option>
                                <option>Îles Caïmans</option>
                                <option>Îles Cocos</option>
                                <option>Îles Cook</option>
                                <option>Îles Féroé</option>
                                <option>Îles Heard-et-MacDonald</option>
                                <option>Îles Malouines</option>
                                <option>Îles Mariannes du Nord</option>
                                <option>Îles Marshal</option>
                                <option>Îles mineures éloignées des États-Unis</option>
                                <option>Îles Turques-et-Caïques</option>
                                <option>Îles Vierges britanniques</option>
                                <option>Îles Vierges des États-Unis</option>
                                <option>Inde</option>
                                <option>Indonésie</option>
                                <option>Irak</option>
                                <option>Iran</option>
                                <option>Irlande</option>
                                <option>Islande</option>
                                <option>Israël</option>
                                <option>Italie</option>
                                <option>Jamaïque</option>
                                <option>Japon</option>
                                <option>Jersey</option>
                                <option>Jordanie</option>
                                <option>Kazakhstan</option>
                                <option>Kenya</option>
                                <option>Kirghizistan</option>
                                <option>Kiribati</option>
                                <option>Koweït</option>
                                <option>Laos</option>
                                <option>Lesotho</option>
                                <option>Lettonie</option>
                                <option>Liban</option>
                                <option>Libéria</option>
                                <option>Libye</option>
                                <option>Liechtenstein</option>
                                <option>Lituanie</option>
                                <option>Luxembourg</option>
                                <option>Macao</option>
                                <option>Macédoine</option>
                                <option>Madagascar</option>
                                <option>Malaisie</option>
                                <option>Malawi</option>
                                <option>Maldives</option>
                                <option>Mali</option>
                                <option>Malte</option>
                                <option>Maroc</option>
                                <option>Martinique</option>
                                <option>Maurice</option>
                                <option>Mauritanie</option>
                                <option>Mayotte</option>
                                <option>Mexique</option>
                                <option>Micronésie (Etats Fédérés de)</option>
                                <option>Moldavie</option>
                                <option>Monaco</option>
                                <option>Mongolie</option>
                                <option>Monténégro</option>
                                <option>Montserrat</option>
                                <option>Mozambique</option>
                                <option>Namibie</option>
                                <option>Nauru</option>
                                <option>Népal</option>
                                <option>Nicaragua</option>
                                <option>Niger</option>
                                <option>Nigeria</option>
                                <option>Niue</option>
                                <option>Norvège</option>
                                <option>Nouvelle-Calédonie</option>
                                <option>Nouvelle-Zélande</option>
                                <option>Oman</option>
                                <option>Ouganda</option>
                                <option>Ouzbékistan</option>
                                <option>Pakistan</option>
                                <option>Palaos</option>
                                <option>Palestine, État de</option>
                                <option>Panama</option>
                                <option>Papouasie-Nouvelle-Guinée</option>
                                <option>Paraguay</option>
                                <option>Pays-Bas</option>
                                <option>Pérou</option>
                                <option>Philippines</option>
                                <option>Pologne</option>
                                <option>Polynésie française</option>
                                <option>Porto Rico</option>
                                <option>Portugal</option>
                                <option>Qatar</option>
                                <option>République centrafricaine</option>
                                <option>République démocratique du Congo</option>
                                <option>République dominicaine</option>
                                <option>République tchèque</option>
                                <option>Réunion, La</option>
                                <option>Roumanie</option>
                                <option>Royaume Uni de Grande Bretagne et d'Irlande du Nord</option>
                                <option>Russie</option>
                                <option>Rwanda</option>
                                <option>Sahara occidental</option>
                                <option>Saint Barthélemy</option>
                                <option>Saint-Christophe-et-Niévès</option>
                                <option>Saint-Marin</option>
                                <option>Saint-Martin (Antilles françaises)</option>
                                <option>Saint-Martin (Royaume des Pays-Bas)</option>
                                <option>Saint-Pierre-et-Miquelon</option>
                                <option>Saint-Siège</option>
                                <option>Saint-Vincent-et-les-Grenadines</option>
                                <option>Sainte-Hélène, Ascension et Tristan da Cunha</option>
                                <option>Sainte-Lucie</option>
                                <option>Salomon</option>
                                <option>Salvador</option>
                                <option>Samoa</option>
                                <option>Samoa américaines</option>
                                <option>Sao Tomé-et-Principe</option>
                                <option>Sénégal</option>
                                <option>Serbie</option>
                                <option>Seychelles</option>
                                <option>Sierra Leone</option>
                                <option>Singapour</option>
                                <option>Slovaquie</option>
                                <option>Slovénie</option>
                                <option>Somalie</option>
                                <option>Soudan</option>
                                <option>Soudan du Sud</option>
                                <option>Sri Lanka</option>
                                <option>Suède</option>
                                <option>Suisse</option>
                                <option>Suriname</option>
                                <option>Swaziland</option>
                                <option>Syrie</option>
                                <option>Tadjikistan</option>
                                <option>Taiwan</option>
                                <option>Tanzanie</option>
                                <option>Tchad</option>
                                <option>Terres australes et antarctiques françaises</option>
                                <option>Territoire britannique de l'océan Indien</option>
                                <option>Thaïlande</option>
                                <option>Timor Oriental</option>
                                <option>Togo</option>
                                <option>Tokelau</option>
                                <option>Tonga</option>
                                <option>Trinidad et Tobago</option>
                                <option>Tunisie</option>
                                <option>Turkménistan</option>
                                <option>Turquie</option>
                                <option>Tuvalu</option>
                                <option>Ukraine</option>
                                <option>Uruguay</option>
                                <option>Vanuatu</option>
                                <option>Venezuela</option>
                                <option>Viêt Nam </option>
                                <option>Wallis et Futuna</option>
                                <option>Yémen</option>
                                <option>Zambie</option>
                                <option>Zimbabwe</option>
              </select>
            </div>

            <!-- Zip-Code -->
            <div class="col-md-6">
              <h5>Adresse postal</h5>
              <input type="text" name="bp"  value="<?=  get_input('bp') ? get_input('bp') : e($result->bp) ?>">
            </div>

            <div class="col-md-12">
              <h5>Batiment ou immeuble (facultatif)</h5>
              <input type="text" name="batiment"  value="<?=  get_input('batiment') ? get_input('batiment') : e($result->batiment) ?>">
            </div>

          </div>
          <!-- Row / End -->

        </div>
      </div>
      <!-- Section / End -->

      <!-- Section -->
      <div class="add-listing-section margin-top-45">

        <!-- Headline -->
        <div class="add-listing-headline">
          <h3><i class="sl sl-icon-docs"></i> Details du Bien</h3>
        </div>

        <!-- Description -->
        <div class="form">
          <h5>Description</h5>
          <textarea class="WYSIWYG"  cols="40" rows="3" id="summary" spellcheck="true" name="decrire"  value="<?=  get_input('decrire') ? get_input('decrire') : e($result->decrire) ?>" required="required"></textarea>
        </div>

        <!-- Row -->
        <div class="row with-forms">

          <!-- Phone -->
          <div class="col-md-4">
            <h5>Numéro à contacter</h5>
            <input type="text" name="numero"  value="<?=  get_input('numero') ? get_input('numero') : e($result->numero) ?>">
          </div>

          <!-- E-mail-->
          <div class="col-md-4">
            <h5>E-mail à contacter</h5>
            <input type="text" name="email"  value="<?=  get_input('email') ? get_input('email') : e($result->email) ?>" placeholder="email à contacter">
          </div>

          <!-- DEVICE -->
          <div class="col-md-4">
            <h5>Device utiliseé</h5>
            <select class="chosen-select-no-single" name="device">
              <option label="blank">Selectionner une device</option>
              <option>FCFA</option>
              <option>EURO</option>
              <option>DOLLAR</option>
              <option>LIVRE</option>
            </select>
          </div>

          <div class="col-md-12">
            <h5>Prix du Bien</h5>
            <input type="text" name="prix"  value="<?=  get_input('prix') ? get_input('prix') : e($result->prix) ?>">
          </div>
          <h5 class="margin-top-30 margin-bottom-10">Les caractéristiques du Bien <span>(facultatif)</span></h5>
          <div class="col-md-4">
            <h5>Caractéristique 1</h5>
            <input type="text" name="caracteristique1"  value="<?=  get_input('caracteristique1') ? get_input('caracteristique1') : e($result->caracteristique1) ?>">
          </div>

          <div class="col-md-4">
            <h5>Caractéristique 2</h5>
            <input type="text" name="caracteristique2" value="<?=  get_input('caracteristique2') ? get_input('caracteristique2') : e($result->caracteristique2) ?>">
          </div>

          <div class="col-md-4">
            <h5>Caractéristique 3</h5>
            <input type="text" name="caracteristique3" value="<?=  get_input('caracteristique3') ? get_input('caracteristique3') : e($result->caracteristique3) ?>">
          </div>

          <div class="col-md-4">
            <h5>Caractéristique 4</h5>
            <input type="text" name="caracteristique4" value="<?=  get_input('caracteristique4') ? get_input('caracteristique4') : e($result->caracteristique4) ?>">
          </div>

          <div class="col-md-4">
            <h5>Caractéristique 5</h5>
            <input type="text" name="caracteristique5" value="<?=  get_input('caracteristique5') ? get_input('caracteristique5') : e($result->caracteristique5) ?>">
          </div>

          <div class="col-md-4">
            <h5>Caractéristique 6</h5>
            <input type="text" name="caracteristique6" value="<?=  get_input('caracteristique6') ? get_input('caracteristique6') : e($result->caracteristique6) ?>">
          </div>

        </div>
        <!-- Row / End -->

        <!-- Checkboxes / End -->

      </div>
      <!-- Section / End -->



      <!-- Section -->
      <div class="add-listing-section margin-top-45">

        <!-- Headline -->
        <div class="add-listing-headline">
          <h3><i class="sl sl-icon-clock"></i> Les heures d'ouvertures (facultatif)</h3>
          <!-- Switcher -->
          <label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>
        </div>

        <!-- Switcher ON-OFF Content -->
        <div class="switcher-content">

          <!-- Day -->
          <div class="row opening-day">
            <div class="col-md-2"><h5>Lundi</h5></div>
            <div class="col-md-5">
              <select class="chosen-select" name="lundi1" data-placeholder="Heure d'ouverture">
                <option label="Heure d'ouverture"></option>
                <option>Fermez</option>
                <option>1 HEURE</option>
                <option>2 HEURE</option>
                <option>3 HEURE</option>
                <option>4 HEURE</option>
                <option>5 HEURE</option>
                <option>6 HEURE</option>
                <option>7 HEURE</option>
                <option>8 HEURE</option>
                <option>9 HEURE</option>
                <option>10 HEURE</option>
                <option>11 HEURE</option>
                <option>12 HEURE</option>
                <option>13 HEURE</option>
                <option>14 HEURE</option>
                <option>15 HEURE</option>
                <option>16 HEURE</option>
                <option>17 HEURE</option>
                <option>18 HEURE</option>
                <option>19 HEURE</option>
                <option>20 HEURE</option>
                <option>21 HEURE</option>
                <option>22 HEURE</option>
                <option>23 HEURE</option>
                <option>24 HEURE</option>
              </select>
            </div>
            <div class="col-md-5">
              <select class="chosen-select" name="lundi2" data-placeholder="Heure de ferméture">
                <option label="Heure de ferméture"></option>
                <option>Fermez</option>
                <option>1 HEURE</option>
                <option>2 HEURE</option>
                <option>3 HEURE</option>
                <option>4 HEURE</option>
                <option>5 HEURE</option>
                <option>6 HEURE</option>
                <option>7 HEURE</option>
                <option>8 HEURE</option>
                <option>9 HEURE</option>
                <option>10 HEURE</option>
                <option>11 HEURE</option>
                <option>12 HEURE</option>
                <option>13 HEURE</option>
                <option>14 HEURE</option>
                <option>15 HEURE</option>
                <option>16 HEURE</option>
                <option>17 HEURE</option>
                <option>18 HEURE</option>
                <option>19 HEURE</option>
                <option>20 HEURE</option>
                <option>21 HEURE</option>
                <option>22 HEURE</option>
                <option>23 HEURE</option>
                <option>24 HEURE</option>
              </select>
            </div>
          </div>
          <!-- Day / End -->

          <!-- Day -->
          <div class="row opening-day js-demo-hours">
            <div class="col-md-2"><h5>Mardi</h5></div>
            <div class="col-md-5">
              <select class="chosen-select" name="mardi1" data-placeholder="Heure d'ouverture">
                <option label="Heure d'ouverture"></option>
                <option>Fermez</option>
                <option>1 HEURE</option>
                <option>2 HEURE</option>
                <option>3 HEURE</option>
                <option>4 HEURE</option>
                <option>5 HEURE</option>
                <option>6 HEURE</option>
                <option>7 HEURE</option>
                <option>8 HEURE</option>
                <option>9 HEURE</option>
                <option>10 HEURE</option>
                <option>11 HEURE</option>
                <option>12 HEURE</option>
                <option>13 HEURE</option>
                <option>14 HEURE</option>
                <option>15 HEURE</option>
                <option>16 HEURE</option>
                <option>17 HEURE</option>
                <option>18 HEURE</option>
                <option>19 HEURE</option>
                <option>20 HEURE</option>
                <option>21 HEURE</option>
                <option>22 HEURE</option>
                <option>23 HEURE</option>
                <option>24 HEURE</option>
              </select>
            </div>
            <div class="col-md-5">
              <select class="chosen-select" name="mardi2" data-placeholder="Heure de ferméture">
                <option label="Heure de ferméture"></option>
                <option>Fermez</option>
                <option>1 HEURE</option>
                <option>2 HEURE</option>
                <option>3 HEURE</option>
                <option>4 HEURE</option>
                <option>5 HEURE</option>
                <option>6 HEURE</option>
                <option>7 HEURE</option>
                <option>8 HEURE</option>
                <option>9 HEURE</option>
                <option>10 HEURE</option>
                <option>11 HEURE</option>
                <option>12 HEURE</option>
                <option>13 HEURE</option>
                <option>14 HEURE</option>
                <option>15 HEURE</option>
                <option>16 HEURE</option>
                <option>17 HEURE</option>
                <option>18 HEURE</option>
                <option>19 HEURE</option>
                <option>20 HEURE</option>
                <option>21 HEURE</option>
                <option>22 HEURE</option>
                <option>23 HEURE</option>
                <option>24 HEURE</option>
              </select>
            </div>
          </div>
          <!-- Day / End -->

          <!-- Day -->
          <div class="row opening-day js-demo-hours">
            <div class="col-md-2"><h5>Mercredi</h5></div>
            <div class="col-md-5">
              <select class="chosen-select" name="mercredi1" data-placeholder="Heure d'ouverture">
                <option label="Heure d'ouverture"></option>
                <option>Fermez</option>
                <option>1 HEURE</option>
                <option>2 HEURE</option>
                <option>3 HEURE</option>
                <option>4 HEURE</option>
                <option>5 HEURE</option>
                <option>6 HEURE</option>
                <option>7 HEURE</option>
                <option>8 HEURE</option>
                <option>9 HEURE</option>
                <option>10 HEURE</option>
                <option>11 HEURE</option>
                <option>12 HEURE</option>
                <option>13 HEURE</option>
                <option>14 HEURE</option>
                <option>15 HEURE</option>
                <option>16 HEURE</option>
                <option>17 HEURE</option>
                <option>18 HEURE</option>
                <option>19 HEURE</option>
                <option>20 HEURE</option>
                <option>21 HEURE</option>
                <option>22 HEURE</option>
                <option>23 HEURE</option>
                <option>24 HEURE</option>
              </select>
            </div>
            <div class="col-md-5">
              <select class="chosen-select" name="mercredi2" data-placeholder="Heure de ferméture">
                <option label="Heure de ferméture"></option>
                <option>Fermez</option>
                <option>1 HEURE</option>
                <option>2 HEURE</option>
                <option>3 HEURE</option>
                <option>4 HEURE</option>
                <option>5 HEURE</option>
                <option>6 HEURE</option>
                <option>7 HEURE</option>
                <option>8 HEURE</option>
                <option>9 HEURE</option>
                <option>10 HEURE</option>
                <option>11 HEURE</option>
                <option>12 HEURE</option>
                <option>13 HEURE</option>
                <option>14 HEURE</option>
                <option>15 HEURE</option>
                <option>16 HEURE</option>
                <option>17 HEURE</option>
                <option>18 HEURE</option>
                <option>19 HEURE</option>
                <option>20 HEURE</option>
                <option>21 HEURE</option>
                <option>22 HEURE</option>
                <option>23 HEURE</option>
                <option>24 HEURE</option>
              </select>
            </div>
          </div>
          <!-- Day / End -->

          <!-- Day -->
          <div class="row opening-day js-demo-hours">
            <div class="col-md-2"><h5>Jeudi</h5></div>
            <div class="col-md-5">
              <select class="chosen-select"  name="jeudi1" data-placeholder="Heure d'ouverture">
                <option label="Heure d'ouverture"></option>
                <option>Fermez</option>
                <option>1 HEURE</option>
                <option>2 HEURE</option>
                <option>3 HEURE</option>
                <option>4 HEURE</option>
                <option>5 HEURE</option>
                <option>6 HEURE</option>
                <option>7 HEURE</option>
                <option>8 HEURE</option>
                <option>9 HEURE</option>
                <option>10 HEURE</option>
                <option>11 HEURE</option>
                <option>12 HEURE</option>
                <option>13 HEURE</option>
                <option>14 HEURE</option>
                <option>15 HEURE</option>
                <option>16 HEURE</option>
                <option>17 HEURE</option>
                <option>18 HEURE</option>
                <option>19 HEURE</option>
                <option>20 HEURE</option>
                <option>21 HEURE</option>
                <option>22 HEURE</option>
                <option>23 HEURE</option>
                <option>24 HEURE</option>
              </select>
            </div>
            <div class="col-md-5">
              <select class="chosen-select" name="jeudi2" data-placeholder="Heure de ferméture">
                <option label="Heure de ferméture"></option>
                <option>Fermez</option>
                <option>1 HEURE</option>
                <option>2 HEURE</option>
                <option>3 HEURE</option>
                <option>4 HEURE</option>
                <option>5 HEURE</option>
                <option>6 HEURE</option>
                <option>7 HEURE</option>
                <option>8 HEURE</option>
                <option>9 HEURE</option>
                <option>10 HEURE</option>
                <option>11 HEURE</option>
                <option>12 HEURE</option>
                <option>13 HEURE</option>
                <option>14 HEURE</option>
                <option>15 HEURE</option>
                <option>16 HEURE</option>
                <option>17 HEURE</option>
                <option>18 HEURE</option>
                <option>19 HEURE</option>
                <option>20 HEURE</option>
                <option>21 HEURE</option>
                <option>22 HEURE</option>
                <option>23 HEURE</option>
                <option>24 HEURE</option>
              </select>
            </div>
          </div>
          <!-- Day / End -->

          <!-- Day -->
          <div class="row opening-day js-demo-hours">
            <div class="col-md-2"><h5>Vendredi</h5></div>
            <div class="col-md-5">
              <select class="chosen-select" name="vendredi1" data-placeholder="Heure d'ouverture">
                <option label="Heure d'ouverture"></option>
                <option>Fermez</option>
                <option>1 HEURE</option>
                <option>2 HEURE</option>
                <option>3 HEURE</option>
                <option>4 HEURE</option>
                <option>5 HEURE</option>
                <option>6 HEURE</option>
                <option>7 HEURE</option>
                <option>8 HEURE</option>
                <option>9 HEURE</option>
                <option>10 HEURE</option>
                <option>11 HEURE</option>
                <option>12 HEURE</option>
                <option>13 HEURE</option>
                <option>14 HEURE</option>
                <option>15 HEURE</option>
                <option>16 HEURE</option>
                <option>17 HEURE</option>
                <option>18 HEURE</option>
                <option>19 HEURE</option>
                <option>20 HEURE</option>
                <option>21 HEURE</option>
                <option>22 HEURE</option>
                <option>23 HEURE</option>
                <option>24 HEURE</option>
              </select>
            </div>
            <div class="col-md-5">
              <select class="chosen-select" name="vendredi2" data-placeholder="Heure de ferméture">
                <option label="Heure de ferméture"></option>
                <option>Fermez</option>
                <option>1 HEURE</option>
                <option>2 HEURE</option>
                <option>3 HEURE</option>
                <option>4 HEURE</option>
                <option>5 HEURE</option>
                <option>6 HEURE</option>
                <option>7 HEURE</option>
                <option>8 HEURE</option>
                <option>9 HEURE</option>
                <option>10 HEURE</option>
                <option>11 HEURE</option>
                <option>12 HEURE</option>
                <option>13 HEURE</option>
                <option>14 HEURE</option>
                <option>15 HEURE</option>
                <option>16 HEURE</option>
                <option>17 HEURE</option>
                <option>18 HEURE</option>
                <option>19 HEURE</option>
                <option>20 HEURE</option>
                <option>21 HEURE</option>
                <option>22 HEURE</option>
                <option>23 HEURE</option>
                <option>24 HEURE</option>
              </select>
            </div>
          </div>
          <!-- Day / End -->

          <!-- Day -->
          <div class="row opening-day js-demo-hours">
            <div class="col-md-2"><h5>Samedi</h5></div>
            <div class="col-md-5">
              <select class="chosen-select" name="samedi1" data-placeholder="Heure d'ouverture">
                <option label="Heure d'ouverture"></option>
                <option>Fermez</option>
                <option>1 HEURE</option>
                <option>2 HEURE</option>
                <option>3 HEURE</option>
                <option>4 HEURE</option>
                <option>5 HEURE</option>
                <option>6 HEURE</option>
                <option>7 HEURE</option>
                <option>8 HEURE</option>
                <option>9 HEURE</option>
                <option>10 HEURE</option>
                <option>11 HEURE</option>
                <option>12 HEURE</option>
                <option>13 HEURE</option>
                <option>14 HEURE</option>
                <option>15 HEURE</option>
                <option>16 HEURE</option>
                <option>17 HEURE</option>
                <option>18 HEURE</option>
                <option>19 HEURE</option>
                <option>20 HEURE</option>
                <option>21 HEURE</option>
                <option>22 HEURE</option>
                <option>23 HEURE</option>
                <option>24 HEURE</option>
              </select>
            </div>
            <div class="col-md-5">
              <select class="chosen-select" name="samedi2" data-placeholder="Heure de ferméture">
                <option label="Heure de ferméture"></option>
                <option>Fermez</option>
                <option>1 HEURE</option>
                <option>2 HEURE</option>
                <option>3 HEURE</option>
                <option>4 HEURE</option>
                <option>5 HEURE</option>
                <option>6 HEURE</option>
                <option>7 HEURE</option>
                <option>8 HEURE</option>
                <option>9 HEURE</option>
                <option>10 HEURE</option>
                <option>11 HEURE</option>
                <option>12 HEURE</option>
                <option>13 HEURE</option>
                <option>14 HEURE</option>
                <option>15 HEURE</option>
                <option>16 HEURE</option>
                <option>17 HEURE</option>
                <option>18 HEURE</option>
                <option>19 HEURE</option>
                <option>20 HEURE</option>
                <option>21 HEURE</option>
                <option>22 HEURE</option>
                <option>23 HEURE</option>
                <option>24 HEURE</option>
              </select>
            </div>
          </div>
          <!-- Day / End -->

          <!-- Day -->
          <div class="row opening-day js-demo-hours">
            <div class="col-md-2"><h5>Dimanche</h5></div>
            <div class="col-md-5">
              <select class="chosen-select" name="dimanche1" data-placeholder="Heure d'ouverture">
                <option label="Heure d'ouverture"></option>
                <option>Fermez</option>
                <option>1 HEURE</option>
                <option>2 HEURE</option>
                <option>3 HEURE</option>
                <option>4 HEURE</option>
                <option>5 HEURE</option>
                <option>6 HEURE</option>
                <option>7 HEURE</option>
                <option>8 HEURE</option>
                <option>9 HEURE</option>
                <option>10 HEURE</option>
                <option>11 HEURE</option>
                <option>12 HEURE</option>
                <option>13 HEURE</option>
                <option>14 HEURE</option>
                <option>15 HEURE</option>
                <option>16 HEURE</option>
                <option>17 HEURE</option>
                <option>18 HEURE</option>
                <option>19 HEURE</option>
                <option>20 HEURE</option>
                <option>21 HEURE</option>
                <option>22 HEURE</option>
                <option>23 HEURE</option>
                <option>24 HEURE</option>
              </select>
            </div>
            <div class="col-md-5">
              <select class="chosen-select" name="dimanche2" data-placeholder="Heure de ferméture">
                <option label="Heure de ferméture"></option>
                <option>Fermez</option>
                <option>1 HEURE</option>
                <option>2 HEURE</option>
                <option>3 HEURE</option>
                <option>4 HEURE</option>
                <option>5 HEURE</option>
                <option>6 HEURE</option>
                <option>7 HEURE</option>
                <option>8 HEURE</option>
                <option>9 HEURE</option>
                <option>10 HEURE</option>
                <option>11 HEURE</option>
                <option>12 HEURE</option>
                <option>13 HEURE</option>
                <option>14 HEURE</option>
                <option>15 HEURE</option>
                <option>16 HEURE</option>
                <option>17 HEURE</option>
                <option>18 HEURE</option>
                <option>19 HEURE</option>
                <option>20 HEURE</option>
                <option>21 HEURE</option>
                <option>22 HEURE</option>
                <option>23 HEURE</option>
                <option>24 HEURE</option>
              </select>
            </div>
          </div>
          <!-- Day / End -->

        </div>
        <!-- Switcher ON-OFF Content / End -->

      </div>
      <!-- Section / End -->


      <!-- Section -->
      <div class="add-listing-section margin-top-45">

        <!-- Headline -->
        <div class="add-listing-headline">
          <h3><i class="sl sl-icon-book-open"></i>Les articles (pour les hotels, boutiques, restaurants uniquement)</h3>
          <!-- Switcher -->
          <label class="switch"><input type="checkbox"  checked><span class="slider round"></span></label>
        </div>

        <!-- Switcher ON-OFF Content -->
        <div class="switcher-content">

          <div class="row">
            <div class="col-md-12">
              <table id="pricing-list-container">
                <tr class="pricing-list-item pattern">
                  <td>
                    <div class="fm-move"><i class="sl sl-icon-cursor-move"></i></div>
                    <div class="fm-input pricing-name"><input type="text" name="articlename" value="<?=  get_input('articlename') ? get_input('articlename') : e($result->articlename) ?>" /></div>
                    <div class="fm-input pricing-ingredients"><input type="text" name="articledes" value="<?=  get_input('articledes') ? get_input('articledes') : e($result->articledes) ?>" /></div>
                    <div class="fm-input pricing-price"><input type="text" name="articlepri" value="<?=  get_input('articlepri') ? get_input('articlepri') : e($result->articlepri) ?>" /></div>
                    <div class="fm-close"><a class="delete" href="#"><i class="fa fa-remove"></i></a></div>
                  </td>
                </tr>
              </table>
            </div>
          </div>

        </div>
        <!-- Switcher ON-OFF Content / End -->

      </div>
      <!-- Section / End -->

      <button type="submit" class="button preview" name="update">Mettre à jour l'article<i class="fa fa-arrow-circle-right"></i></button>
    </div>
    </form>
    </div>
  </div>

<?php include('partials/_footer.php'); ?>
