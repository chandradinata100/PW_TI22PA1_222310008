<?php $__env->startSection('main-content'); ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header fw-bold bg-primary text-white">
                        List of Users
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Tgl Lahir</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">No. Telepon</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <th><?php echo e($loop->index + 1); ?></th>
                                            <td><?php echo e($member->email); ?></td>
                                            <td><?php echo e($member->name); ?></td>
                                            <td><?php echo e($member->address); ?></td>
                                            <td><?php echo e($member->birthdate); ?></td>
                                            <td><?php echo e($member->gender); ?></td>
                                            <td><?php echo e($member->phone); ?></td>
                                            <td>
                                                <div class="btn-group btn-group-sm" role="group">
                                                    <a href="/details/<?php echo e($member->id); ?>" class="btn btn-primary btn-sm" title="View Details">
                                                        <i class="bi bi-eye-fill"></i>
                                                    </a>
                                                    <a href="/update/<?php echo e($member->id); ?>" class="btn btn-success btn-sm" title="Edit">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </a>
                                                    <a href="/delete/<?php echo e($member->id); ?>" class="btn btn-danger btn-sm" title="Delete"
                                                        onclick="return confirm('Apakah data tersebut mau dihapus?')">
                                                        <i class="bi bi-trash-fill"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <?php echo e($data->links()); ?>

                </div>
            </div>
            <div class="col-lg-4">
                <?php echo $__env->make('member.modules.identity.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<style>
    .card-header {
        background-color: #007bff;
        color: #fff;
        font-size: 1.25rem;
    }
    .table th, .table td {
        vertical-align: middle;
    }
    .table thead th {
        background-color: #f8f9fa;
    }
    .btn-group .btn {
        margin-right: 5px;
    }
    .btn-group .btn:last-child {
        margin-right: 0;
    }
    .table-hover tbody tr:hover {
        background-color: #f1f1f1;
    }
</style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('member.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\tugas7\resources\views/member/modules/identity/index.blade.php ENDPATH**/ ?>