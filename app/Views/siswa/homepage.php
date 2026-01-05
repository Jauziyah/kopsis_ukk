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
<?php if($request_status == 'no_request'):?>
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
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

<?php elseif($request_status == 'pending'): ?>
    <div class="alert alert-info">
        <h1>Terima kasih! Request anda sedang diproses</h1>
    </div>

<?php elseif($request_status == 'approved'): ?>
    <div class="alert alert-success">
        <h1>Selamat! Request anda telah disetujui</h1>
    </div>

<?php elseif($request_status == 'rejected'): ?>
    <div class="alert alert-danger">
        <h1>Request anda ditolak</h1>
        <?php if(isset($request['alasan_penolakan']) && !empty($request['alasan_penolakan'])): ?>
            <p><strong>Alasan:</strong> <?= $request['alasan_penolakan']; ?></p>
        <?php endif; ?>
    </div>
<?php endif; ?>

    </section>
</body>
</html>