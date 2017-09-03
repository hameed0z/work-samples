<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('partials.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="row">
        <div class="col-md-12">
            <form action="<?php echo e(route('admin.update')); ?>" method="post">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text"
                            class="form-control"
                            id="title"
                            name="title"
                            value="<?php echo e($post->title); ?>">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <input type="text"
                            class="form-control"
                            id="content"
                            name="content"
                            value="<?php echo e($post->content); ?>" >
                </div>
                <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="tags[]" value="<?php echo e($tag->id); ?>"
                            <?php echo e($post->tags->contains($tag->id)?'checked':''); ?>>
                            <?php echo e($tag->name); ?>

                        </label>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php echo e(csrf_field()); ?>

                <input type="hidden" name="id" value="<?php echo e($post->id); ?>" />
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>