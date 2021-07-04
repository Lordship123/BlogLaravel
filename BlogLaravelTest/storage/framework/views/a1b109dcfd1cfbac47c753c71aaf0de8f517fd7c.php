<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/home.css">
    <script src="/js/bootstrap.min.js"></script>
</head>
<body>
<?php $__env->startSection('admin_navbar'); ?>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/private/<?php echo $__env->yieldContent('href'); ?>"><?php echo $__env->yieldContent('second-nav-item'); ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
<?php echo $__env->yieldSection(); ?>
<div class="container blog_home_container">
    <h1 class="mt-5 mb-4 text-center"><?php echo $__env->yieldContent('title'); ?></h1>
    <?php echo $__env->yieldContent('content'); ?>
</div>
</body>
</html>
<?php /**PATH /home/u685868368/domains/pankotelegram521.site/public_html/resources/views/layouts/main-layout.blade.php ENDPATH**/ ?>