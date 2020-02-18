<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD PROJET & CLIENTS</title>
    <link rel="stylesheet" href="assets/css/addprojet.css">
</head>
<body>
    <section id="projet">
        <div class="contact-text">
            <h2 class="projet-title">ADD CLIENT</h2>
        </div>
        <div class="row">
            <form action="incprojet.php" method="post"  name="form">
                <div>
                   <label for="projetName">Entreprise</label>
                   <input type="text" value="" size="35" name="entreprise">
                </div>
                <div>
                   <label for="projetName">Prenom</label>
                   <input type="text" value="" size="35" name="prenom">
                </div>
                <div>
                   <label for="projetName">Nom</label>
                   <input type="text" value="" size="35" name="nom">
                </div>
                <div>
                   <label for="projetDate">Date</label>
                   <input type="date" id="start" name="date" value="yyyy-MM-dd">
                </div>
                <div>
                   <label for="projetSujet">Sujet</label>
                   <input type="text" value="" size="35" name="sujet">
                </div>
                <div>
                    <label for="contactMessage">Description</label>
                    <textarea cols="50" rows="15" name="description"></textarea>
                </div>
                <div>
                   <label for="projetSujet">Logo</label>
                   <input type="text" value="" size="35" name="logo">
                </div>
                   <button class="submit">Soumettre</button>
                </div>
            </form> 
        </div>
    </section>
    <section id="display">
    <div class="contact-text">
            <h2 class="display-title">DISPLAY CLIENT</h2>
        </div>
        <div class="row-clients">
            <form action="displayclient.php" method="post"  name="form">
                <div>
                   <label for="projetName">Entreprise</label>
                   <input type="text" value="" size="35" name="id">
                </div>
                   <button class="submit">Soumettre</button>
                </div>
            </form> 
        </div>  
    </section>
</body>
</html>