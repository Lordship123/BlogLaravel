<?php $__env->startSection('title', $post['title']); ?>;

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('includes.categories', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
        <article>
            <?php echo $post->text; ?> 
        </article>

        <a href="<?php echo e(route('getPostByCategory', $slug_category)); ?>" class="btn btn-outline-primary mb-4">Back</a>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.main-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\BlogLaravelTest\resources\views/pages/show_post.blade.php ENDPATH**/ ?>