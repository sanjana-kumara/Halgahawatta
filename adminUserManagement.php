<?php

session_start();
if (isset($_SESSION["ad"])) {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
        <link rel="stylesheet" href="style.css">
        <title>Halgahawatta Hardware Admin Panel</title>
    </head>

    <body class="addminBody" onload="loadUser(0);">
        <?php include "connection.php"; ?>

        <div class="container-fluid vh-100">

            <?php include "adminNaveBar.php"; ?>

            <div class="row">

                <div class="col-12">

                    <div class="row justify-content-center">

                        <div class="col-11 mt-3 mb-3">

                            <div class="row">

                                <div class="fs-1 text-center p-3 border border-black border-2 rounded-4 shadow-lg" style="background-color: rgba(68, 68, 68, 1);">

                                    <span class="fs-1 fw-bold text-light">All User's</span>

                                    <div class="row justify-content-end mt-3">

                                        <div class="col-4 text-center d-none d-md-block">

                                            <input type="text" class="form form-control" placeholder="Enter User Name OR Email">

                                        </div>
                                        <div class="col-2 text-center d-none d-md-block">

                                            <button class="btn btn-outline-warning fs-4 me-5 w-100">Search</button>

                                        </div>

                                    </div>

                                    <div class="row justify-content-center">

                                        <div class="mt-4 mb-4">

                                            <table class="table table-hover prmainput">

                                                <thead>

                                                    <tr class="table prmainput">

                                                        <th class="fs-4 fw-bold d-none d-md-block">#</th>
                                                        <th class="fs-4 fw-bold ">Id</th>
                                                        <th class="fs-4 fw-bold d-none d-md-block">Uname</th>
                                                        <th class="fs-4 fw-bold">Email</th>
                                                        <th class="fs-4 fw-bold d-none d-md-block">Mobile</th>
                                                        <th class="fs-4 fw-bold">Status</th>
                                                        <th class="fs-4 fw-bold d-none d-md-block">#</th>

                                                    </tr>

                                                </thead>

                                                <tbody id="uid">

                                                <!-- Loade Users In LoadeUserProcess.php -->
                                                   
                                                </tbody>


                                            </table>

                                        </div>

                                    </div>



                                </div>


                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </body>

    </html>

<?php

} else {

    header("location:adminLogin.php");

    // echo ("Invalide Admin");
}

?>