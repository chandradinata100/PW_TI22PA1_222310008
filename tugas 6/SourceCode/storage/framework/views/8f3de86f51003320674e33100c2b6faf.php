<?php $__env->startSection('content'); ?>
    <div class="d-flex justify-content-center mt-5">
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered border-dark">
                    <thead class="table-secondary fs-4 text-center">
                        <tr>
                            <th scope="col">Course</th>
                            <th scope="col">Type</th>
                            <th scope="col">Rate</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $isFirstMatkul = true;
                            $colspan = count(array_filter($data['skill'], function($item) {
                                return $item['course'] === 'Matematika';
                            }));
                        ?>
                        <?php $__currentLoopData = $data['skill']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($result['course'] === 'Matematika'): ?>
                                <?php if($isFirstMatkul): ?>
                                    <tr>
                                        <td rowspan="<?php echo e($colspan); ?>"><?php echo e($result['course']); ?></td>
                                        <td><?php echo e($result['type']); ?></td>
                                        <td class="text-center">
                                            <?php for($i = 0; $i < 5; $i++): ?>
                                                <i class="bi bi-star<?php echo e($i < $result['rate'] ? '-fill' : ''); ?>"></i>
                                            <?php endfor; ?>
                                        </td>
                                    </tr>
                                    <?php
                                        $isFirstMatkul = false;
                                    ?>
                                <?php else: ?>
                                    <tr>
                                        <td><?php echo e($result['type']); ?></td>
                                        <td class="text-center">
                                            <?php for($i = 0; $i < 5; $i++): ?>
                                                <i class="bi bi-star<?php echo e($i < $result['rate'] ? '-fill' : ''); ?>"></i>
                                            <?php endfor; ?>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            <?php else: ?>
                                <tr>
                                    <td><?php echo e($result['course']); ?></td>
                                    <td><?php echo e($result['type']); ?></td>
                                    <td class="text-center">
                                        <?php for($i = 0; $i < 5; $i++): ?>
                                            <i class="bi bi-star<?php echo e($i < $result['rate'] ? '-fill' : ''); ?>"></i>
                                        <?php endfor; ?>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\semester 4\LAB. PEMOGRAMAN WEB\tes\PemrogramanWeb_TI-22-PA_222310008\TugasPertemuan6\SourceCode\resources\views/modules/home/home.blade.php ENDPATH**/ ?>