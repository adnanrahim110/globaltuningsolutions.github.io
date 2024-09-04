    
	<script src="resources/vendor/js/jquery/jquery-3.5.1.min.js"></script>
	<script src="resources/vendor/js/jquery/jquery-ui.js"></script>
	<script src="resources/vendor/js/bootstrap/bootstrap.min.js"></script>
	<script src="resources/js/main.js"></script>

	<!-- Alertify JS -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <script>
        <?php
        if (isset($_SESSION['message'])) { ?>
            alertify.set('notifier', 'position', 'top-right');
            alertify.success('<?= $_SESSION['message']; ?>');
        <?php
            unset($_SESSION['message']);
        }
        ?>
    </script>