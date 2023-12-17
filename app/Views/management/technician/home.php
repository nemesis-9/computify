<?= $this->extend("layouts/staff-main.php") ?>

<?= $this->section("content") ?>

<div class="hero">

    <?= $this->include("partials/technician-sidebar.php") ?>

    <h1>Dashboard</h1>

    <?= $this->renderSection("main-content") ?>

</div>

<?= $this->endSection() ?>