<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wilkommen!</title>
</head>
<body>
    <section>
        <h1>Ingin menjadi mitra kopsis ? ayo</h1>

        <?php if (session()->getFlashdata('pesan')): ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
<?php endif; ?>



        <form action="<?= base_url('siswa/request_penjual');?>" method="post">
            <?= csrf_field();?>
            <div class="mb-3">
                <label for="" class="form-label">Pesan</label>
                <input
                    type="text"
                    class="form-control"
                    name="pesan"
                    id="pesan"
                    aria-describedby="helpId"
                    placeholder="Aku ingin menjadi kopsis"
                />
            </div>
            <button type="submit">Submit</button>
        </form>

    </section>
</body>
</html>