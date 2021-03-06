<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tier List Maker</title>
    <link rel="icon" href="asset/icon.png">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container-fluid p-5">
      <h1 class="text-center mt-3 fw-bold">Tier List Maker <p class="h5">by Aeck</p></h1>

      <div class="d-flex mt-5">
        <div class="me-4 col-2">
          <input id="itemLink" type="text" class="w-100 form-control" placeholder="Ajouter un item (img url)">
          <button type="button" class="btn btn-success w-100 mt-3" onclick="addItem()">Valider</button>
          <button type="button" class="btn btn-danger w-100 mt-3" onclick="delItem()">Vider</button>
          <div class="d-flex justify-content-center">
            <div id="itemList" class="mt-3 itemList border border-secondary w-100 d-flex flex-wrap justify-content-center">

            </div>
          </div>
        </div>

        <table id="table" class="table table-secondary table-bordered border-secondary">
          <tr class="cat">
            <td class="w-25 p-4 text-center bg-danger h1">God Tier</td>
            <td id="cat0" class="d-flex flex-wrap cat"></td>
          </tr>
          <tr>
            <td class="w-25 p-4 text-center bg-warning h1">Incroyable</td>
            <td id="cat1" class="d-flex flex-wrap cat"></td>
          </tr>
          <tr>
            <td class="w-25 p-4 text-center bg-success h1">Pas mal</td>
            <td id="cat2" class="d-flex flex-wrap cat"></td>
          </tr>
          <tr>
            <td class="w-25 p-4 text-center bg-primary h1">Ca passe</td>
            <td id="cat3" class="d-flex flex-wrap cat"></td>
          </tr>
          <tr>
            <td class="w-25 p-4 text-center bg-secondary h1">Pas ouf</td>
            <td id="cat4" class="d-flex flex-wrap cat"></td>
          </tr>
        </table>
      </div>

      <!-- <div class="input-group">
        <input id="catName" type="text" class="form-control mt-5 mx-5" placeholder="Ajouter une catégorie (max 6)">
      </div>
      <div class="d-grid gap-2 col-10 mx-auto mt-3">
        <button class="btn btn-success" type="button" onclick="addCategory()">Valider</button>
      </div> -->

    </div>
  </body>
  <script src="Sortable.js"></script>
  <script type="text/javascript" src="script.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
</html>

<img src="" alt="">
