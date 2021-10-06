<html>
<head>
    <title>Form Input Matakuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/view-form-matakuliah.css">
</head>
<body class="bg-light">
    <div class="container ">
        <h2 class="mb-4 mt-4">Form Input Matakuliah</h2>
        <form action="<?= base_url('matakuliah/cetak'); ?>" method="POST">
            <div class="row m-auto d-flex justify-content-around align-items-center p-4 bg-white shadow-sm">
                <div class="form-input col-md-5 mb-2">
                    <label class="col-sm-5 col-form-label">Kode Matakuliah</label>
                    <input class="form-control" type="text" placeholder="Input Kode" name="kode">
                    <?= form_error('kode','<small class="text-danger pl-3">','</small> '); ?>
                </div>
                <div class="form-input col-md-5 mb-2">
                    <label class="col-sm-5 col-form-label">Nama Matakuliah</label>
                    <input class="form-control" type="text" placeholder="Input Kode" name="nama">
                    <?= form_error('kode','<small class="text-danger pl-3">','</small> '); ?>
                </div>
                <div class="form-input col-md-5 mb-2">
                    <label class="col-sm-5 col-form-label">SKS</label>
                    <select name="sks" id="sks" class="form-select">
                        <option selected >Pilih SKS</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <div class="form-input col-5 mb-2 text-center">
                    <input type="submit" value="Submit" class="btn btn-primary">
                </div>  
            </div>

        </form>
    </div>
</body>
</html>