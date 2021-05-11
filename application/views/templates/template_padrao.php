<!DOCTYPE html>
<html lang="pt-br">

<style>
    .toast {
        opacity: 1 !important;
    }
</style>

<head>
    <meta charset="utf-8">
    <title>CRUD CodeIgniter3</title>
    <script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
    <link href="<?= base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/helpers.js"></script>
    <script src="<?= base_url(); ?>assets/js/toastr.min.js"></script>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/toastr.min.css">
    <script src="<?= base_url(); ?>assets/js/jquery-3.5.1.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/dataTables.bootstrap4.min.js"></script>
</head>

<script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
</script>

<body>
    <?php include 'header.php'; ?>
    <div class="container-fluid">
        <?php
        if ($this->session->flashdata('error')) {
        ?>
            <script>
                toastr["error"]("<?php echo $this->session->flashdata('error'); ?>", "CRUD-CI3");
            </script>
        <?php
        }
        if ($this->session->flashdata('success')) {
        ?>
            <script>
                toastr["success"]("<?php echo $this->session->flashdata('success'); ?>", "CRUD-CI3");
            </script>
        <?php
        }
        if ($this->session->flashdata('warning')) {
        ?>
            <script>
                toastr["warning"]("<?php echo $this->session->flashdata('warning'); ?>", "CRUD-CI3");
            </script>
        <?php
        }
        if ($this->session->flashdata('info')) {
        ?>
            <script>
                toastr["info"]("<?php echo $this->session->flashdata('info'); ?>", "CRUD-CI3");
            </script>
        <?php
        }
        ?>
        <?php echo $contents; ?>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>