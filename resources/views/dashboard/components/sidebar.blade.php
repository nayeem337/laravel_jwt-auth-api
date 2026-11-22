<aside class="offcanvas-lg offcanvas-start bg-dark text-white min-vh-100 p-3" tabindex="-1" id="dashboardSidebar"
    aria-labelledby="sidebarLabel" style="width: 260px; flex-shrink: 0;">

    {{-- Application Brand --}}
    <div class="d-flex justify-content-between align-items-start mb-4 pb-3 border-bottom border-secondary">

        <div>
            <h4 class="fw-bold mb-1" id="sidebarLabel">
                BusinessFlow
            </h4>

            <small class="text-secondary">
                ERP Management
            </small>
        </div>

        {{-- Mobile Close Button --}}
        <button type="button" class="btn-close btn-close-white d-lg-none" data-bs-dismiss="offcanvas"
            data-bs-target="#dashboardSidebar" aria-label="Close sidebar">
        </button>

    </div>

    {{-- Navigation --}}
    <nav>
        <ul class="nav nav-pills flex-column gap-2">

            <li class="nav-item">
                <a href="#" class="nav-link active" aria-current="page">
                    <i class="bi bi-speedometer2 me-2"></i>
                    Dashboard
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link text-white">
                    <i class="bi bi-person me-2"></i>
                    Profile
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link text-white">
                    <i class="bi bi-gear me-2"></i>
                    Account Settings
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link text-white">
                    <i class="bi bi-code-slash me-2"></i>
                    API Information
                </a>
            </li>

        </ul>
    </nav>

    {{-- Bottom Navigation --}}
    <div class="mt-5 pt-3 border-top border-secondary">

        <a href="#" class="nav-link text-danger">
            <i class="bi bi-box-arrow-right me-2"></i>
            Logout
        </a>

    </div>

</aside>
