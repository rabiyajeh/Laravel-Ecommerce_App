<?php if($paginator->hasPages()): ?>
    <nav class="page-section">
        <ul class="pagination">
            <?php if($paginator->onFirstPage()): ?>
                <li class="page-item disabled">
                    <a class="page-link" href="javascript:void(0)" aria-label="Previous"
                        style="color:#6c757d;">
                        <span aria-hidden="true">
                            <i class="fas fa-chevron-left"></i>
                        </span>
                    </a>
                </li>
            <?php else: ?>
                <li class="page-item">
                    <a class="page-link" href="<?php echo e($paginator->previousPageUrl()); ?>" aria-label="Previous">
                        <span aria-hidden="true">
                            <i class="fas fa-chevron-left"></i>
                        </span>
                    </a>
                </li>
            <?php endif; ?>
            
            
            <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(is_string($element)): ?>
                    <li class="page-item disabled">
                        <a class="page-link" href="javascript:void(0)"><?php echo e($element); ?></a>
                    </li>
                <?php endif; ?>

                <?php if(is_array($element)): ?>
                    <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page=>$url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($page == $paginator->currentPage()): ?>
                            <li class="page-item active">
                                <a class="page-link" href="javascript:void(0)"><?php echo e($page); ?></a>
                            </li>
                        <?php else: ?>
                            <li class="page-item">
                                <a class="page-link" href="<?php echo e($url); ?>"><?php echo e($page); ?></a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            


            <?php if($paginator->hasMorePages()): ?>
                <li class="page-item">
                    <a href="<?php echo e($paginator->nextPageUrl()); ?>" class="page-link" aria-label="Next">
                        <span aria-hidden="true">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </a>
                </li>
            <?php else: ?>
                <li class="page-item disabled">
                    <a href="javascript:void(0)" class="page-link" aria-label="Next" style="color:#6c757d;">
                        <span aria-hidden="true">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\laravel\laravel_ecommerce\resources\views/pagination/default.blade.php ENDPATH**/ ?>