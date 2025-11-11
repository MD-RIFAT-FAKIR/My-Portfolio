<nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          My-<span>Portfolio</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">Components</li>
          <li class="nav-item">
            <a href="{{ route('hero.section') }}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Hero Section</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
              <i class="link-icon" data-feather="feather"></i>
              <span class="link-title">Services</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="uiComponents">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ route('add.service') }}" class="nav-link">Add Service</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('all.service') }}" class="nav-link">All Service</a>
                </li>
              </ul>
            </div>
          </li>         
      </div>
    </nav>