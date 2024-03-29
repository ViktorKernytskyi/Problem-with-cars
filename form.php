<?php
include 'serviceCenter.php';
require_once('Car.php');

if (!empty($_POST)) {

    if (empty($_POST['brand'])) {
        $errors[] = 'Поле "Бренд авто" порожнє';
    }
    if (empty($_POST['year'])) {
        $errors[] = 'Поле "Рік випуску" порожнє';
    } elseif (!is_numeric($_POST['year'])) {
        $errors[] = 'Поле "Рік випуску" містить не цифри';
    }
    if (empty($_POST['manufacturingLocation'])) {
        $errors[] = 'Поле "Місце виробництва" порожнє';
    }

    if (!empty($errors)) {
        foreach ($errors as $err) {
            echo '<strong>' . $err . '</strong><br>';
        }
    }
}
if (empty($errors)) {

    $car = new Car($_POST['brand'], $_POST['year'], $_POST['color'], $_POST['manufacturingLocation'], $_POST['currentBreakdown']);
    $ServiceCenter = new ServiceCenter();
       $car -> findAvailableEmployee($_POST['brand'],$car);

    //$ServiceCenter->diagnose($car);
    $ServiceCenter->repair($car);

    $car->present();

} else {
    foreach ($errors as $err) {
        echo '<strong>' . $err . '</strong><br>';
    }
}
 //Перевірка наявності даних у масиві $_POST та їх валідація
if(isset($_POST['submit'])) {
    $brand = $_POST['brand'];
    $year = $_POST['year'];

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Repair request</title>
</head>
<body>

    <h3 align="center" style="color:Blue"> Ласкаво просимо на СТО</h3>

<div class="container">
        <div class="col-md-auto">

            <form action="/form.php" method="post">
                <div class="mb-3">
                    <label for="brand" class="form-label">Бренд авто</label>
                    <input placeholder="Введіть бренд авто" name="brand"<?php echo $_POST['brand']; ?> type="text" class="form-control" id="brand" aria-describedby="brandHelp">
                </div>
                <div class="mb-3">
                    <label for="year" class="form-label">Рік випуску</label>
                    <input placeholder="Введіть рік випуску" name="year"<?php echo $_POST['year']; ?> type="number" class="form-control" id="year" aria-describedby="yearHelp">
                </div>
                <div class="mb-3">
                    <label for="manufacturingLocation" class="form-label">Місце виробництва</label>
                    <input placeholder="Введіть місце виробництва" name="manufacturingLocation"<?php echo $_POST['manufacturingLocation']; ?> type="text" class="form-control" id="manufacturingLocation" aria-describedby="manufacturingLocationHelp">
                </div>

                <button align="center" type="submit" class="btn btn-primary"  name="submit" value="відправ мене!">запит на ремонт</button>
            </form>

</body>
</html>

