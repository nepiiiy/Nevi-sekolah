<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/bootstrap.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?= BASE_URL; ?>">
                <img src="<?= BASE_URL; ?>/img/icon.png" alt="Logo Sekolah" width="50">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="<?= BASE_URL; ?>">Home <span class="sr-only" style="display: none;">(current)</span></a>
                    <a class="nav-item nav-link" href="<?= BASE_URL; ?>/guru/index">Data Guru</a>
                    <a class="nav-item nav-link" href="<?= BASE_URL; ?>/siswa/index">Data Siswa</a>
                    <a class="nav-item nav-link" href="<?= BASE_URL; ?>/user/profile">About</a>
                </div>
            </div>
            <form class="d-flex justify-content-end" role="search">
                <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search">
                <button class="btn btn-outline-warning" type="submit">Cari</button>
            </form>
        </div>
    </nav>