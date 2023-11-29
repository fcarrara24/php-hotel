<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary container d-flex flex-row justify-content-between ">
            <div class="container-fluid ">
                <a class="navbar-brand" href="#">Navbar</a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="d-flex" method="GET" action="index.php">
                        <select class="form-control mr-sm-2" name="park">
                            <option value="all">all</option>
                            <option value="true">PARK</option>
                            <option value="false">NO PARK&nbsp;</option>
                        </select>
                        <select class="form-control mr-sm-2" name="vote">
                            <?php
                            //da 0 a 9 stelle
                            for ($i = 0; $i < 5; $i++) {
                                echo '<option value="' . $i . '">' . $i . '</option>';
                            }


                            ?>
                        </select>
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

</body>