<html>

<head>

    <meta charset="utf-8">
    <title>Accueil</title>

    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/">

</head>

<body>
    <?php include("header.html"); ?>

    <div id="formulaireInscription">
        <h3 id="titreIncrivez">Inscrivez-vous!</h3>
        <div id="numstyle">


    </div>
        <form action="Inscription.php" method="POST">
          <div class="form-group">
              <div id="renseignementgenerale" class="form-group">
                <label for="userName">Nom:
                  <input type="text" class="form-control" name="userName" placeholder="Entrez votre nom" required="required"></label><br />

                <label for="firstName">Prénom:</label>
                <input type="text" class="form-control" name="firstName" placeholder="Entrez votre prénom" required="required">

                <div class="form-group" id="birthdate">
                    <label>Date de naissance:</label>
                        <label for="dayInput">Jour</label>
                        <select name="day">
                          <option value="0">Jour</option>
                             <?php
                                for ($i = 1; $i <= 31; $i++)
                                {
                                    echo '<option value="' . $i . '">' . $i . '</option>';
                                }
                            ?>

                        </select>

                  <label for"monthInput">Mois</label>
                    <select name="month">
                        <option value="00">Mois</option>
                        <option value="01">Janvier</option>
                        <option value="02">Février</option>
                        <option value="03">Mars</option>
                        <option value="04">Avril</option>
                        <option value="05">Mai</option>
                        <option value="06">Juin</option>
                        <option value="07">juillet</option>
                        <option value="08">Aout</option>
                        <option value="09">Septembre</option>
                        <option value="10">Octobre</option>
                        <option value="11">Novembre</option>
                        <option value="12">Décembre</option>
                    </select>
                  <label for"yearInput">Année</label>
                  <select name="year">
                       <option value="0">Année</option>
                        <?php
                            for ($i = 2014; $i >= 1930; $i--)
                            {
                                echo '<option value="' . $i . '">' . $i . '</option>';
                            }
                        ?>  

                  </select>
                </div>
                <div class="form-group" id="langueM">

                    <label>Langue maternelle:</label>

                    <select  name="langueM"> 
                        <option value="français">Français</option> 
                        <option value="anglais">Anglais</option> 
                        <option value="espagnol">Espagnol</option> 
                    </select>
                </div>

                <div class="form-group" id="langueE">

                    <label>Langue étudiée:</label>

                    <select  name="langueE"> 
                        <option value="français">Français</option> 
                        <option value="anglais">Anglais</option> 
                        <option value="espagnol">Espagnol</option> 
                    </select>
                    **<input id="i1" type="text">**
                   **<img id="plus" src="../res/images/boutons/plus.png">**

                    <label>Niveau:</label>
                    <select name=level id="niveau">
                        <option value="B1">B1</option>
                        <option value="B2">B2</option>
                        <option value="C1">C1</option>
                        <option value="C2">C2</option>
                    </select>
                    <a class="level" href=""><strong><em>Comment choisir mon niveau?</em></strong>
                        <span>
                            B1:Je participe à des conversations sur des sujets<br /> simples et familiers.<br /> 
                            B2:Je peux discuter avec aisance et une certaine<br /> spontanéité.<br />
                            C1:Je m’exprime spontanément sans trop chercher<br /> mes mots<br />
                            C2:Je m’exprime et comprends sans efforts et<br /> je souhaite maintenir mon niveau.
                        </span>

                    </a>
                </div>

              </div>

            <label >Adresse email:</label>

            <div>
                <div class="mailliste">
                    <input name="mailInput" type="text" placeholder="Entrez votre email" required="required"> @
                    <select name="schools" onchange="VerifListe();"> 
                       <option value="rms.fr">rms.fr</option> 
                       <option value="icade.es">icade.es</option> 
                       <option value="esb.de">esb.de</option> 
                    </select> 
                    <a href=""><img id="question" src="../res/images/boutons/question.png">
                        <span>
                            Vous pouvez vous inscrire<br /> uniquement avec <strong><em>votre adresse Email<br /> de votre école.</em></strong>
                            Pour consulter la liste<br /> des écoles patenaires cliquez ici.
                        </span>
                    </a>

                </div><br>
            </div>
          </div>
          <div class="form-group">
            <label for="inscriptionInputPassword1">Mot de passe:</label>
            <input type="password" class="form-control" name="password1" placeholder="Entrez votre mode passe" required="required"><br>
            <input type="password" class="form-control" name="password2" placeholder="Répétez votre mode passe" required="required">
          </div>
            <div class="myButtons">
                <input type="submit" name="submit" value="Inscription"/> <input type="button" value="Retour"                                                            onclick="document.location.href='Index.php';" />
            </div>

        </form>    
    </div>

</body>
</html>