    <script src="resources/vendor/js/jquery/jquery-3.5.1.min.js"></script>
    <script src="resources/vendor/js/jquery/jquery-ui.js"></script>
    <script src="resources/vendor/js/bootstrap/bootstrap.min.js"></script>
    <script src="resources/js/main.js"></script>

    <!-- Alertify JS -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script>
        <?php if (isset($_SESSION['message'])): ?>
            alertify.set('notifier', 'position', 'bottom-right');
            <?php if ($_SESSION['message_type'] === 'success'): ?>
                alertify.success('<?= $_SESSION['message']; ?>');
            <?php elseif ($_SESSION['message_type'] === 'danger'): ?>
                alertify.error('<?= $_SESSION['message']; ?>');
            <?php else: ?>
                alertify.message('<?= $_SESSION['message']; ?>');
            <?php endif; ?>
            <?php
            // Unset the session message after displaying it
            unset($_SESSION['message']);
            unset($_SESSION['message_type']);
            ?>
        <?php endif; ?>
    </script>
