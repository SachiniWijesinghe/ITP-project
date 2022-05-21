<div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Your Name</th>
                                        <th>Email</th>
                                        <th>Overall Experience</th>
                                        <th>Timely Response</th>
                                        <th>Our Support</th>
                                        <th>Overall Satisfaction</th>
                                        <th>Comments</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($item->Name); ?></td>
                                        <td><?php echo e($item->Email); ?></td>
                                        <td><?php echo e($item->Overall_Experience); ?></td>
                                        <td><?php echo e($item->Timely_Response); ?></td>
                                        <td><?php echo e($item->Our_Support); ?></td>
                                        <td><?php echo e($item->Overall_Satisfaction); ?></td>
                                        <td><?php echo e($item->Comment); ?></td>
 
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div><?php /**PATH C:\Users\INSIGHT\OneDrive\Desktop\addContact\resources\views/feedback-report.blade.php ENDPATH**/ ?>