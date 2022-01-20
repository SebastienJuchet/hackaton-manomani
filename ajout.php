<?php
require 'component/head.php';

require 'component/header.php';
?>

<body>
    <div class="container-fluid">
        <h1 class="mt-5 mb-3 text-center text-mano">Ajoutez votre produit</h1>
        <div class="row text-profil">
            <div class="col-4 mx-auto mt-5">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nom du produit</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                               value="5 Projecteurs LED 50W ProLine Blanc chaud 3000K Haute Luminosité"
                        >
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Déscription</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" >Bonjour, je vend 2 projecteur sur les 5 reçus.</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="prix" class="form-label">Prix de vente</label>
                        <input type="price" class="form-control" id="prix" aria-describedby="emailHelp" value="12 €">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Image du produit</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <a href="segundoFake.php" class="btn btn-mano text-white mt-3">Mettre en ligne</a>
                </form>
            </div>
        </div>
    </div>

    <img src="assets/footer.png" alt="" class="w-100 mt-5">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>