<!doctype html>
<html lang="en" dir="ltr">

<?php $title = 'Support Center' ?>
<?php $page_title = 'Support Center' ?>

<?php include 'partials/head.php' ?>

<body class="geex-dashboard demo-invoice">
    <main class="geex-main-content">
        <?php include 'partials/sidebar.php' ?>
        <?php include 'partials/customizer.php' ?>
        <div class="geex-content">
            <?php include 'partials/header.php' ?>
            <div class="geex-content__pricing">
                <div class="geex-content__pricing__wrapper">
                    <div class="row">
                        <div class="col-lg-6 mb-40">
                            <div class="geex-content__pricing__single">
                                <div class="geex-content__pricing__header">
                                    <div class="geex-content__pricing__tag">
                                        Support Center
                                    </div>
                                    <span class="geex-content__pricing__subtitle">
                                        Here you can contact with us if you have a problem or just want to ask
                                        something. We usually reply within few hours, but sometimes you have to wait up
                                        to 24 hours.
                                    </span>
                                </div>
                                <div class="mt-4">
                                    <span>Tickets:&nbsp;</span>
                                </div>
                                <div class="d-flex flex-wrap align-items-center justify-content-between mt-2">
                                    <a href="#" class="geex-content__todo__list__single__tag__item info">
                                        <i class="uil uil-tag-alt"></i>
                                        New
                                    </a>
                                    <a href="#" class="geex-content__todo__list__single__tag__item warning">
                                        <i class="uil uil-tag-alt"></i>
                                        Waiting For Response
                                    </a>
                                    <a href="#" class="geex-content__todo__list__single__tag__item success">
                                        <i class="uil uil-tag-alt"></i>
                                        Solved
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-40">
                            <div class="geex-content__pricing__single active">
                                <div class="geex-content__pricing__header">
                                    <h3 class="mb-2">Open new support ticket</h3>
                                    <span class="geex-content__pricing__subtitle">
                                        Use the form below to contact us.
                                    </span>
                                </div>
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
                                        <div class="input-wrapper" style="display: none;">
                                            <select name="" id="" class="form-control" disabled>
                                                <option value="default" disabled selected class="form-control">
                                                    Select Model
                                                </option>
                                            </select>
                                        </div>
                                        <div class="input-icon">
                                        <i class="uil-text-fields"></i>
                                            <input placeholder="Title" class="form-control" id="geex-input1">
                                        </div>
                                        <div class="input-icon">
                                            <textarea placeholder="Message" rows="5" class="form-control"
                                                id="geex-input1"></textarea>
                                        </div>
                                        <div class="input-icon">
                                            <input type="file" class="form-control" id="geex-input1">
                                        </div>
                                        <div class="input-wrapper">
                                            <button class="geex-btn geex-btn--primary-transparent w-100 text-center">
                                                <i class="uil-arrow-from-right"></i> Send
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
    </main>

    <?php include 'partials/script.php' ?>
</body>

</html>