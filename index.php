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
    <div class="container">
      <div class="row">
        <div class="col-6">
          <form action="index.php" method="GET">
            <div class="mb-3">
              <label for="exampleInput1" class="form-label">Lunghezza password:</label>
              <input type="text" class="form-control" id="exampleInput1" placeholder="Digita la lunghezza della Password" name="password">
              <?php if (isset($_GET['password']) && intval($_GET['password']) <= 0): ?>
                <p class="text-danger">La lunghezza della password deve essere un numero positivo.</p>
              <?php endif; ?>
            </div>
            <button type="submit" class="btn btn-primary">Genera Password</button>
          </form>
          <?php if (!empty($password_generata)): ?>
            <div class="mt-3">
              <h4>Password generata:</h4>
              <p><?php echo $password_generata; ?></p>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
</main>

</body>
</html>