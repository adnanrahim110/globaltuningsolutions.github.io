<!doctype html>
<html lang="en" dir="ltr">

<?php $title = 'File Service' ?>
<?php $page_title = 'File Service' ?>

<?php include 'partials/head.php' ?>
<style>
    .geex-content__summary__count__single__title {
        line-height: 28px;
        font-size: 20px;
        margin-bottom: 20px;
    }

    .geex-content__summary__count__single__subtitle {
        line-height: 15px;
    }
</style>

<body class="geex-dashboard demo-invoice">
    <main class="geex-main-content">
        <?php include 'partials/sidebar.php' ?>
        <?php include 'partials/customizer.php' ?>
        <div class="geex-content">
            <?php include 'partials/header.php' ?>
            <div class="geex-content__wrapper">
                <div class="geex-content__section-wrapper">
                    <div class="geex-content__summary">
                        <div class="geex-content__summary__count">
                            <div class="geex-content__summary__count__single success-bg">
                                <div class="geex-content__summary__count__single__content">
                                    <h4 class="geex-content__summary__count__single__title">Welcome to our file service
                                    </h4>
                                    <p class="geex-content__summary__count__single__subtitle">
                                        Use the form below to submit your file for modification. We will work on your
                                        file as soon as you upload it to our system. Our team will do the best job to
                                        satisfy you.
                                    </p>
                                </div>
                            </div>
                            <div class="geex-content__summary__count__single success-bg">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <div class="geex-content__summary__count__single__content">
                                            <h4 class="geex-content__summary__count__single__title">
                                                Estimated delivery time for your files after upload is the next working
                                                day.
                                            </h4>
                                            <p class="geex-content__summary__count__single__subtitle">
                                                Upload your car's original files to let Dieselfiles modify them.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="geex-content__invoice">
                        <div class="geex-content__invoice__chat">
                            <div class="geex-content__invoice__chat__wrapper">
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
                                            <div class="input-wrapper">
                                                <select name="" id="" class="form-control" disabled>
                                                    <option value="default" disabled selected class="form-control">
                                                        Select an ECU Type
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="input-icon">
                                                <input placeholder="Power" class="form-control" id="geex-input1">
                                            </div>
                                            <div class="input-wrapper">
                                                <select name="" id="" class="form-control">
                                                    <option value="default" disabled selected class="form-control">
                                                        Select a Year
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="input-wrapper">
                                                <select name="" id="" class="form-control" disabled>
                                                    <option value="default" disabled selected class="form-control">
                                                        Select a Gearbox
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="input-icon">
                                                <input placeholder="HW Number" class="form-control" id="geex-input1">
                                            </div>
                                            <div class="input-icon">
                                                <input placeholder="SW Number" class="form-control" id="geex-input1">
                                            </div>
                                            <div class="input-wrapper">
                                                <select name="" id="" class="form-control" disabled>
                                                    <option value="default" disabled selected class="form-control">
                                                        Select a Method
                                                    </option>
                                                </select>
                                            </div>
                                            <div class="input-wrapper">
                                                <button class="geex-btn geex-btn--primary-transparent w-100 text-center">
                                                    <i class="uil-arrow-from-right"></i> Next Step
                                                </button>
                                            </div>
                                        </div>
                                    </form>
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