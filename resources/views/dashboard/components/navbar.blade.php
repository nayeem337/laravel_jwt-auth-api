<nav class="navbar navbar-expand-lg bg-white border-bottom px-3 py-3">

    <div class="container-fluid">

        {{-- Sidebar Toggle --}}
        {{-- Mobile Sidebar Toggle --}}
        <button class="btn btn-light border me-3 d-lg-none" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#dashboardSidebar" aria-controls="dashboardSidebar" aria-label="Toggle sidebar">

            <i class="bi bi-list fs-5"></i>

        </button>

        {{-- Search --}}
        <form class="d-none d-md-flex me-auto" role="search">
            <div class="input-group">
                <span class="input-group-text bg-light border-end-0">
                    <i class="bi bi-search"></i>
                </span>

                <input type="search" class="form-control bg-light border-start-0" placeholder="Search anything..."
                    aria-label="Search">
            </div>
        </form>

        {{-- Right Navigation --}}
        <div class="d-flex align-items-center gap-3 ms-auto">

            {{-- Notifications --}}
            <button type="button" class="btn btn-light position-relative" aria-label="Notifications">
                <i class="bi bi-bell fs-5"></i>
            </button>

            {{-- User Profile --}}
            <div class="dropdown">

                <button class="btn btn-light dropdown-toggle d-flex align-items-center gap-2" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle fs-5"></i>

                    <span class="d-none d-sm-inline">
                        {{ auth()->user()?->name ?? 'Account' }}
                    </span>
                </button>

                <ul class="dropdown-menu dropdown-menu-end">

                    <li>
                        <span class="dropdown-item-text">
                            {{ auth()->user()?->email ?? 'Not authenticated' }}
                        </span>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="bi bi-person me-2"></i>
                            Profile
                        </a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="bi bi-gear me-2"></i>
                            Settings
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </div>

</nav>
