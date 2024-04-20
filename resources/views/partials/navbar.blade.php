<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="#">JM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ( $title === "dashboard") ? 'active' : ''  }}" aria-current="page" href="/dashboard">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ( $title === "suratJalan") ? 'active' : ''  }}" href="/suratJalan">Surat Jalan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ( $title === "repeatOrder") ? 'active' : ''  }}" href="/repeatOrder">Repeat Order</a>
          </li>
      </div>
    </div>
  </nav>