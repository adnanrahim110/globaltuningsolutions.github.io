<!doctype html>
<html lang="en" dir="ltr">

<?php $title = 'Download Files' ?>
<?php $page_title = 'Download Files' ?>

<?php include 'partials/head.php' ?>

<body class="geex-dashboard demo-invoice">
    <main class="geex-main-content">
        <?php include 'partials/sidebar.php' ?>
        <?php include 'partials/customizer.php' ?>
        <div class="geex-content">
            <?php include 'partials/header.php' ?>
            <div class="geex-content__wrapper">
                <div class="geex-content__section-wrapper">
                    <div class="geex-content__pricing__wrapper">
                        <div class="geex-content__invoice__chat__content">
                            <form action="" class="py-3">
                                <div class="geex-content__form__single__box mb-20">
                                    <div class="input-wrapper">
                                        <select name="" id="" class="form-control">
                                            <option value="default" disabled selected class="form-control">
                                                Select Make
                                            </option>
                                            <option value="default" class="form-control">
                                                make 1
                                            </option>
                                            <option value="default" class="form-control">
                                                make 2
                                            </option>
                                            <option value="default" class="form-control">
                                                make 3
                                            </option>
                                        </select>
                                    </div>
                                    <div class="input-wrapper">
                                        <select name="" id="" class="form-control" disabled>
                                            <option value="default" disabled selected class="form-control">
                                                Select Model
                                            </option>
                                        </select>
                                    </div>
                                    <div class="input-wrapper">
                                        <select name="" id="" class="form-control" disabled>
                                            <option value="default" disabled selected class="form-control">
                                                Select a Generation
                                            </option>
                                        </select>
                                    </div>
                                    <div class="input-wrapper">
                                        <select name="" id="" class="form-control" disabled>
                                            <option value="default" disabled selected class="form-control">
                                                Select an Engine
                                            </option>
                                        </select>
                                    </div>
                                    <div class="input-icon">
                                        <i class="uil-text-fields"></i>
                                        <input placeholder="Search By Text" class="form-control" id="geex-input1">
                                    </div>
                                    <div class="input-wrapper">
                                        <button class="geex-btn geex-btn--dark-transparent w-100 text-center">
                                            <i class="uil-arrow-from-right"></i> Search
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="geex-content__invoice">
                        <div class="geex-content__invoice__chat w-100">
                            <div class="geex-content__invoice__chat__wrapper">
                                <div class="p-5 white-bg" style="border-radius: 24px;">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr>
                                                <td>Make/Model</td>
                                                <td>Engine</td>
                                                <td>Type</td>
                                                <td>File</td>
                                                <td>Date</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                    <div class="alert alert-secondary text-center">
                                        No Items Found
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include 'partials/script.php' ?>
</body>

</html>