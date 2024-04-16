<?php 
require_once __DIR__ . '/data/functions.php';
?>

<?php 
include_once __DIR__ . '/partials/head.php';
?>
<body>

<?php 
include_once __DIR__ . '/partials/header.php';
?>

<main>
    <div class="container bg-white p-5 ">
      <div class="row">
        <div class="col-6 mx-auto ">
          <form action="index.php" method="GET" class="">
            <div class="mb-3">
              <label for="exampleInput1" class="form-label mb-4 ">Lunghezza password:</label>
              <input type="text" class="form-control" id="exampleInput1" placeholder="Digita la lunghezza della Password" name="password">
              <?php if (isset($_GET['password']) && intval($_GET['password']) <= 0): ?>
                <p class="text-danger mt-3">La lunghezza della password deve essere un numero positivo.</p>
              <?php endif; ?>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Genera Password</button>
          </form>
          <?php if (!empty($password_generata)): ?>
            
          <?php endif; ?>
        </div>
      </div>
    </div>
</main>

</body>
</html>

<style>
  body{
    background-color: rgb(192, 220, 192);
  }
</style>