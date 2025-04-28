<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm px-3">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand fw-bold" href="index.html">FLN</a>

        <!-- Right Side -->
        <div class="d-flex align-items-center ms-auto gap-3">

            <!-- User Dropdown -->
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-decoration-none" data-bs-toggle="dropdown">
                    <!-- <img src="assets/images/users/avatar-1.jpg" alt="avatar" class="rounded-circle me-2" width="32"> -->
                    <span class="d-none d-lg-inline fw-semibold">Mahrab Hossen</span>
                    <i class="ri-arrow-down-s-line ms-1"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end shadow-sm mt-2">
                    <li><h6 class="dropdown-header">Welcome!</h6></li>
                    <li><a class="dropdown-item" href="#"><i class="ri-user-line me-2"></i>My Account</a></li>
                    <li><a class="dropdown-item" href="#"><i class="ri-settings-3-line me-2"></i>Settings</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item text-danger" href="{{Route('log.out')}}"><i class="ri-logout-box-r-line me-2"></i>Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<!-- Optional: Add tooltips -->
<script>
    document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(el => new bootstrap.Tooltip(el));
</script>
