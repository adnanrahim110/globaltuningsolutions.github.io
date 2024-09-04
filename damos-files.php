<?php
$title = "Damos Files";
include('config/dbconn.php');

// Fetch car brands
$brandsQuery = "SELECT id, name FROM brands WHERE status = 1";
$brandsResult = mysqli_query($con, $brandsQuery);
include "includes/head.php";
?>

<body class="files_pages">
    <header class="files-padding">
        <div class="container">
            <div class="header-wrapper">
                <div class="row justify-content-between">
                    <div class="col-lg-5">
                        <div class="logo">
                            <a href="index.php">
                                <h3>Global Tuning Solutions</h3>
                                <!-- <img src="assets/images/logo.png" alt="logo"> -->
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="original_files-sec">
            <div class="container">
                <div class="box_shadow">
                    <div class="of_wrapper">
                        <div class="row justify-content-between of-header">
                            <div class="col-lg-5">
                                <h3 class="text-second">Damos Files Database</h3>
                            </div>
                            <div class="col-lg-4 text-end">
                                <a href="index.php" class="btn main-btn">Website &nbsp;
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <form action="" method="POST" class="original_files_form">
                            <div class="row justify-content-between">
                                <div class="col-lg-4">
                                    <select name="brand" id="brand" class="form-select">
                                        <option class="form-control" selected disabled>Choose a brand</option>
                                        <?php while ($row = mysqli_fetch_assoc($brandsResult)): ?>
                                            <option class="form-control" value="<?= $row['id']; ?>">
                                                <?php echo $row['name']; ?>
                                            </option>
                                        <?php endwhile; ?>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <select name="model" id="model" class="form-select" disabled>
                                        <option disabled selected>Choose a Model</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <select name="generation" id="generation" class="form-select" disabled>
                                        <option disabled selected>Select Generation</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <select name="engine" id="engine" class="form-select" disabled>
                                        <option disabled selected>Choose an Engine</option>
                                    </select>
                                </div>
                                <div class="col-lg-2 pe-0">
                                    <p class="text-second" style="margin-top: 28px; font-weight: 700; text-align: end;">
                                        &#10034; Search By Text:
                                    </p>
                                </div>
                                <div class="col-lg-3">
                                    <input type="text" name="searchText" class="form-control"
                                        placeholder="Example: 1E007AD">
                                </div>
                                <div class="col-lg-3">
                                    <button type="submit" class="main-btn btn">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="of_table">
                        <div class="row">
                            <div class="col-lg-12">
                                <table class="table table-striped table-hover table-borderless table-sm table-damos">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-start" colspan="10">Title</th>
                                            <th scope="col">Price</th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider" id="resultsTable">
                                        <!-- Data will be dynamically loaded here based on search -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include 'includes/files_js.php'; ?>
    <script>
        $(document).ready(function(){
            // When a brand is selected, fetch the models
            $('#brand').change(function(){
                var brand_id = $(this).val();
                $('#model').prop('disabled', false);

                $.ajax({
                    url: 'fetch_models.php',
                    method: 'POST',
                    data: {brand_id: brand_id},
                    success: function(data){
                        $('#model').html(data);
                    }
                });
            });

            // When a model is selected, fetch the generations
            $('#model').change(function(){
                var model_id = $(this).val();
                $('#generation').prop('disabled', false);

                $.ajax({
                    url: 'fetch_generations.php',
                    method: 'POST',
                    data: {model_id: model_id},
                    success: function(data){
                        $('#generation').html(data);
                    }
                });
            });

            // When a generation is selected, fetch the engines
            $('#generation').change(function(){
                var generation_id = $(this).val();
                $('#engine').prop('disabled', false);

                $.ajax({
                    url: 'fetch_engines.php',
                    method: 'POST',
                    data: {generation_id: generation_id},
                    success: function(data){
                        $('#engine').html(data);
                    }
                });
            });

            // When the form is submitted, fetch the related data in the table
            $('form.original_files_form').submit(function(e){
                e.preventDefault();
                
                var brand = $('#brand').val();
                var model = $('#model').val();
                var generation = $('#generation').val();
                var engine = $('#engine').val();

                $.ajax({
                    url: 'fetch_results.php',
                    method: 'POST',
                    data: {
                        brand: brand,
                        model: model,
                        generation: generation,
                        engine: engine
                    },
                    success: function(data){
                        $('#resultsTable').html(data);
                    }
                });
            });
        });
    </script>
</body>

</html>