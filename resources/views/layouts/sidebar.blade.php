<!-- sidebar codes -->
<div class="flex-shrink-0 p-3" style="width: 280px; background-color: #f8f9fa; border-right: 1px solid #dee2e6;">
    <a href="/" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
        <svg class="bi pe-none me-2" width="30" height="24">
            <use xlink:href="#bootstrap"></use>
        </svg>
        <span class="fs-5 fw-semibold">Collapsible</span>
    </a>
    <ul class="list-unstyled ps-0">
        <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true"
                aria-controls="home-collapse">
                <i class="fas fa-home me-2"></i> Home
            </button>
            <div class="collapse show" id="home-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#"
                            class="link-body-emphasis d-inline-flex text-decoration-none rounded px-2 py-1">Overview</a>
                    </li>
                    <li><a href="#"
                            class="link-body-emphasis d-inline-flex text-decoration-none rounded px-2 py-1">Updates</a>
                    </li>
                    <li><a href="#"
                            class="link-body-emphasis d-inline-flex text-decoration-none rounded px-2 py-1">Reports</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false"
                aria-controls="dashboard-collapse">
                <i class="fas fa-tachometer-alt me-2"></i> Dashboard
            </button>
            <div class="collapse" id="dashboard-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#"
                            class="link-body-emphasis d-inline-flex text-decoration-none rounded px-2 py-1">Overview</a>
                    </li>
                    <li><a href="#"
                            class="link-body-emphasis d-inline-flex text-decoration-none rounded px-2 py-1">Weekly</a>
                    </li>
                    <li><a href="#"
                            class="link-body-emphasis d-inline-flex text-decoration-none rounded px-2 py-1">Monthly</a>
                    </li>
                    <li><a href="#"
                            class="link-body-emphasis d-inline-flex text-decoration-none rounded px-2 py-1">Annually</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false"
                aria-controls="orders-collapse">
                <i class="fas fa-box me-2"></i> Orders
            </button>
            <div class="collapse" id="orders-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#"
                            class="link-body-emphasis d-inline-flex text-decoration-none rounded px-2 py-1">New</a></li>
                    <li><a href="#"
                            class="link-body-emphasis d-inline-flex text-decoration-none rounded px-2 py-1">Processed</a>
                    </li>
                    <li><a href="#"
                            class="link-body-emphasis d-inline-flex text-decoration-none rounded px-2 py-1">Shipped</a>
                    </li>
                    <li><a href="#"
                            class="link-body-emphasis d-inline-flex text-decoration-none rounded px-2 py-1">Returned</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="border-top my-3"></li>
        <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false"
                aria-controls="account-collapse">
                <i class="fas fa-user me-2"></i> Account
            </button>
            <div class="collapse" id="account-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a href="#"
                            class="link-body-emphasis d-inline-flex text-decoration-none rounded px-2 py-1">New...</a>
                    </li>
                    <li><a href="#"
                            class="link-body-emphasis d-inline-flex text-decoration-none rounded px-2 py-1">Profile</a>
                    </li>
                    <li><a href="#"
                            class="link-body-emphasis d-inline-flex text-decoration-none rounded px-2 py-1">Settings</a>
                    </li>
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded px-2 py-1">Sign
                            out</a></li>
                </ul>
            </div>
        </li>
    </ul>
</div>

<!-- CSS Styles -->
<style>
    .btn-toggle:hover,
    .btn-toggle:focus {
        background-color: #e2e6ea;
    }

    .btn-toggle-nav a:hover {
        background-color: #e2e6ea;
        text-decoration: none;
    }
</style>

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>