<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('bootstrap/bootstrap.min.css'); ?>">
</head>

<body>
    <h1>Request Penjual</h1>

    <?php if(session()->getFlashdata('success')): ?>
        <h1><?= session()->getFlashdata('success');?></h1>
    <?php endif ?>

    <div
        class="table-responsive">
        <table
            class="table">
            <thead class="table-primary">
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">pesan</th>
                    <th scope="col">status</th>
                    <th class="col">Created At</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($request_penjual)): ?>
                    <?php foreach ($request_penjual_pending as $request_penjual): ?>
                        <tr>
                            <td><?= $request_penjual['nama']; ?></td>
                            <td><?= $request_penjual['pesan']; ?></td>
                            <td><?= $request_penjual['status']; ?></td>
                            <td><?= $request_penjual['created_at']; ?></td>
                            <td>
                                <a href="admin/accept_request/<?= $request_penjual['request_id']; ?>">Accept Request</a>
                                <a href="admin/reject_request/<?= $request_penjual['request_id']; ?>">Reject Request</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center">tidak ada request</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>


</body>

</html>