<nav class="navbar bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Cozy Literasi
            <img src="https://e7.pngegg.com/pngimages/382/847/png-clipart-logo-brand-line-book-top-view-angle-white.png"
                alt="Logo" width="45" height="34" class="d-inline-block align-text-top">
        </a>
    </div>
</nav>
<nav class="navbar navbar-dark navbar-expand-lg bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="/pages">PROJECT BETA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/pages/dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/items">Item-Penyimpanan </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pembelian">Pembelian </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/penjualan">Penjualan </a>
                </li>
                <ul class="navbar-nav ml-auto">
                    <li class="navbar-item ml-auto">
                        <form action="/sessions/logout" method="post">
                            <button type="submit" class="btn btn-link nav-link">Admin | Keluar</button>
                        </form>
                    </li>
                </ul>
            </ul>
        </div>
    </div>
</nav>