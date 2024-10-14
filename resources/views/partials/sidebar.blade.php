<ul class="navbar-nav bg-dark d-flex flex-column align-items-start p-3">
    <li class="nav-item mb-3">
        <a class="nav-link fs-4 py-2 px-4 rounded-3" href="{{ route('admin.projects.index') }}">
            <i class="bi bi-briefcase-fill me-2"></i>{{ __('Projects') }}
        </a>
    </li>
    <li class="nav-item mb-3">
        <a class="nav-link fs-4 py-2 px-4 rounded-3" href="{{ route('admin.types.index') }}">
            <i class="bi bi-briefcase-fill me-2"></i>{{ __('Types') }}
        </a>
    </li>
</ul>
