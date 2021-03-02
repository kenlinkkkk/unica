<section id="navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/client/images/logo.png') }}" height="40" class="img-fluid d-inline-block align-top" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span><i class="fas fa-th"></i></span> Danh mục
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="input-group input-group-custom">
                <input type="text" class="form-control" placeholder="Tìm kiếm" aria-label="Tìm kiếm" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-custom" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                </div>
            </div>
            <a href="#" class="ml-3 btn btn-primary"><span><i class="fas fa-history"></i></span> Lịch sử học</a>
            <a href="#" class="ml-3 text-color-primary"><span><i class="fas fa-shopping-cart"></i></span></a>
            <a href="{{ route('home.login') }}" class="ml-3 text-secondary url-login">ĐĂNG NHẬP</a>
            <a href="{{ route('home.register') }}" class="ml-3 btn btn-color-primary">ĐĂNG KÝ</a>
        </div>
    </nav>
</section>
