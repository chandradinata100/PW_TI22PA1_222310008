<nav class="navbar navbar-expand-lg navbar-light bg-primary shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="/">
            <i class="bi bi-person-circle"></i> Data User
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?php echo e(request()->is('/') ? 'active' : ''); ?>" href="/">
                        <i class="bi bi-house-door text-white"></i> <span class="text-white">Home</span>
                    </a>
              
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH D:\xampp\htdocs\tugas7\resources\views/member/layouts/header/navigation.blade.php ENDPATH**/ ?>