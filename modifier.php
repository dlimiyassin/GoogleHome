<?php require_once('editEtudiant.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
    crossorigin="anonymous"></script>
    <title>Form</title>
</head>
<body>
   
        <nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.html">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" href="etudiant.html">Etudiant</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      <div class="p-3" style="width: 600px; margin: auto">
        <div class="card" >
            <div class="card-header">Modification:</div>
            <div class="p-3">
                <form method="post" action="editEtudiant.php" >
    
                    <div class="mb-2">
                        <label class="form-label">Nom</label>
                        <input type="text" name="nom" class="form-control" value=" <?php echo $nom; ?>">
    
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Prénom</label>
                        <input type="text" name="prenom" class="form-control" value="<?php echo $prenom; ?>">
                    </div>

                    <div class="mb-2">
                        <label class="form-label">Cne</label>
                        <input type="text" name="cne" class="form-control" value="<?php echo $cne; ?>">
    
                    </div>
              
                    <div class="mb-2">
                        <label class="form-label">Cni</label>
                        <input type="text" name="cni" class="form-control" value="<?php echo $cni; ?>">
    
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Date de naissance</label>
                        <input type="date" name="date_naissance" class="form-control" value="<?php echo $date_naissance; ?>">
    
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Téléphone</label>
                        <input type="text" name="tele" class="form-control" value=" <?php echo $tele; ?>">
    
                    </div>
                    <div class="mb-2">
                        <label class="form-label">email</label>
                        <input type="text" name="email" class="form-control" value=" <?php echo $email; ?>">
    
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Mot de passe</label>
                        <input type="text" name="mot_pass" class="form-control" value=" <?php echo $mot_pass; ?>">
                        <span class="text-danger" th:errors="${etudiant.nom}"></span>
    
                    </div>
                    <button class="btn btn-success">Modifier</button>
                </form>
    
            </div>
        </div>
    </div>
    </div>
</body>
</html>
