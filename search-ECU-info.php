<?php
$title = "Search ECU Info";
include "includes/head.php";
?>
<body>
    <?php include "includes/navbar.php"; ?>
    <main>
        <section class="files-hero">
            <div class="container">
                <div class="row justify-content-center">
                    <h1 class="text-center text-uppercase">Bosch ECU hardware decryption</h1>
                </div>
            </div>
        </section>
        <section class="dtc-sec pt-0">
            <div class="container">
                <div class="row justify-content-center mt-5">
                    <div class="col-10">
                        <form action="" class="dtc-form bg-transparent px-0">
                            <h3 class="sec-heading text-start">Search By No:</h3>
                            <div class="row mt-4 align-items-end justify-content-between">
                                <div class="col-6 col-md-8 ps-0">
                                    <div class="form-group d-flex align-items-center justify-content-around">
                                        <label for="make" class="label-custom">Search only by Bosch ECU HW number:</label>
                                        <input type="text" class="form-control w-custom" placeholder="Example: P3400">
                                    </div>
                                </div>
                                <div class="col-6 col-md-4 pe-0">
                                    <button class="main-btn btn">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <table class="table table-lg table-borderless dtc-table ecu-table table-hover">
                            <thead>
                                <tr class="heading">
                                    <th colspan="5">
                                        <h3 class="sec-heading text-start">Recent Searches</h3>
                                    </th>
                                </tr>
                                <tr>
                                    <th scope="col" class="ps-3">Make/Model</th>
                                    <th scope="col">Engine</th>
                                    <th scope="col">ECu</th>
                                    <th scope="col">ECU No.</th>
                                    <th scope="col">CarMake HW No.</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <tr>
                                <td class="ps-3"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr> -->
                                <tr>
                                    <td colspan="5" class="text-center">No results found.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>
    <?php include "includes/footer.php"; ?>