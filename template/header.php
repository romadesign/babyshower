<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baby shower CHLOE / ELIOT </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>

<nav class="navbar navbar-expand-lg ">
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <div class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <h2 class="accordion-header" id="flush-headingOne">
                        Listas
                    </h2>
                    <i class="fa-solid fa-bars"></i>
                </div>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <?php
                    include('db/dbconnect.php');
                    $sql = "SELECT * FROM `listas`";
                    $result = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $title = $row['title'];
                    ?>
                        <div class="subtitlemenu"><?php echo $title ?> :</div>
                        <div class="accordion-body acordion_data">
                            <?php
                            $sql = "SELECT * FROM `product_list` WHERE list_id =  $id";
                            $sel_query = mysqli_query($conn, $sql)  or die(mysqli_error($conn));
                            while ($row = mysqli_fetch_assoc($sel_query)) {
                                $id = $row['id'];
                                $estado = $row['estado'];
                                $descripcion = $row['descripcion']; ?>
                                <div>
                                    <div class="d-flex gap-3 title">
                                        <?php
                                        echo '- ', $descripcion;
                                        if ($estado == 0) { ?>
                                            <div class="check">&#x2713;</div>
                                        <?php } ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>

        </div>

        <div class="day">
            <div id="day_data">
                40 dias
            </div>
        </div>
    </nav>