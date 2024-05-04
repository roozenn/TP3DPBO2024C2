   <!-- Saya Nama Roshan Syalwan Nurilham [2203142] mengerjakan soal TP3 dalam mata kuliah DPBO untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin
-->

<?php
include "db_conn.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>TP3 Restoran</title>
</head>

<body>
  <div class="container">
  <nav class="navbar navbar-light justify-content-center fs-3 mb-3" style="background-color: gray; color:white">
    Restoran
  </nav>
  <a href="index.php" class="btn btn-danger mb-3">Menu</a>
  <a href="chef.php" class="btn mb-3">Chef</a>
  <a href="kelompok.php" class="btn mb-3">Kelompok Menu</a>
  </div>

  <div class="container">
    <?php if (isset($_GET["msg"])) {
        $msg = $_GET["msg"];
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' .
            $msg .
            '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    } ?>
    <a href="add-new.php" class="btn btn-dark mb-3">Add New</a>

    <nav class="navbar navbar-light justify-content-center fs-5" style="background-color: black; color:white">
    Menu
  </nav>

    <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
        <div class="tab-content">
            <div id="tab-1" class="tab-pane fade show p-0 active">
                <div class="row g-4">
                <?php
                $sql = "SELECT * FROM `menu`";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center">
                            <div class="w-100 d-flex flex-column text-start ps-4">
                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                    <span><?php echo $row[
                                        "name"
                                    ]; ?></span>
                                    <span class="text-primary">RP. <?php echo $row[
                                        "price"
                                    ]; ?></span>
                                </h5>
                                <small class="fst-italic"><td><?php echo $row[
                                    "description"
                                ]; ?></small>
                            </div>
                            <div class="w-20 d-flex flex-column text-start ps-4">
                              <a href="edit.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                              <a href="delete.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>       
                            </div>
                        </div>
                    </div>
                <?php }
                ?>
                </div>
            </div>
        </div>
    </div>
  </div>



  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
