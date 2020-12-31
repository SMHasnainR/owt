<header class="section-header">

    <section class="header-main border-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-4">
                    <a href="http://bootstrap-ecommerce.com" class="brand-wrap">
                        <img class="logo" src="{{ asset('assets/img/owt-logo-real.png') }}">
                    </a> <!-- brand-wrap.// -->
                </div>
                <div class="col-lg-6 col-sm-12">
                    <form action="#" class="search">
                        <div class="input-group w-100">
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form> <!-- search-wrap .end// -->
                </div> <!-- col.// -->
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="widgets-wrap float-md-right">
                        <div class="widget-header  mr-3">
                            <a href="#" class="icon icon-sm rounded-circle border"><i
                                    class="fa fa-shopping-cart"></i></a>
                            <span class="badge badge-pill badge-danger notify">0</span>
                        </div>
                        <div id="authDiv" class="widget-header icontext">
                            <a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>

                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}" data-toggle="modal"
                                            data-target='#loginModal'>{{ __('Login') }}</a>
                                    </li>

                                    <!-- Modal -->
                                    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    ...
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}" data-toggle='modal'
                                            data-target='#registerModal'>{{ __('Register') }}</a>
                                    </li>

                                    <!-- Modal -->
                                    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">

                                                    <!-- ============================ COMPONENT SIGNUP ================================= -->
                                                    <div class="card">
                                                        <article class="card-body">
                                                            <header class="mb-4">
                                                                <h4 class="card-title">Sign up</h4>
                                                            </header>
                                                            <form>
                                                                <div class="form-row">
                                                                    <div class="col form-group">
                                                                        <label>First name</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="">
                                                                    </div> <!-- form-group end.// -->
                                                                    <div class="col form-group">
                                                                        <label>Last name</label>
                                                                        <input type="text" class="form-control"
                                                                            placeholder="">
                                                                    </div> <!-- form-group end.// -->
                                                                </div> <!-- form-row end.// -->
                                                                <div class="form-group">
                                                                    <label>Email</label>
                                                                    <input type="email" class="form-control" placeholder="">
                                                                    <small class="form-text text-muted">We'll never share
                                                                        your email with anyone else.</small>
                                                                </div> <!-- form-group end.// -->
                                                                <div class="form-group">
                                                                    <label
                                                                        class="custom-control custom-radio custom-control-inline">
                                                                        <input class="custom-control-input" checked=""
                                                                            type="radio" name="gender" value="option1">
                                                                        <span class="custom-control-label"> Male </span>
                                                                    </label>
                                                                    <label
                                                                        class="custom-control custom-radio custom-control-inline">
                                                                        <input class="custom-control-input" type="radio"
                                                                            name="gender" value="option2">
                                                                        <span class="custom-control-label"> Female </span>
                                                                    </label>
                                                                </div> <!-- form-group end.// -->
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label>City</label>
                                                                        <input type="text" class="form-control">
                                                                    </div> <!-- form-group end.// -->
                                                                    <div class="form-group col-md-6">
                                                                        <label>Country</label>
                                                                        <select id="inputState" class="form-control">
                                                                            <option> Choose...</option>
                                                                            <option>Uzbekistan</option>
                                                                            <option>Russia</option>
                                                                            <option selected="">United States</option>
                                                                            <option>India</option>
                                                                            <option>Afganistan</option>
                                                                        </select>
                                                                    </div> <!-- form-group end.// -->
                                                                </div> <!-- form-row.// -->
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <label>Create password</label>
                                                                        <input class="form-control" type="password">
                                                                    </div> <!-- form-group end.// -->
                                                                    <div class="form-group col-md-6">
                                                                        <label>Repeat password</label>
                                                                        <input class="form-control" type="password">
                                                                    </div> <!-- form-group end.// -->
                                                                </div>
                                                                <div class="form-group mt-3">
                                                                    <button type="submit" class="btn btn-primary btn-block">
                                                                        Register </button>
                                                                </div> <!-- form-group// -->
                                                                <p class="text-muted">By clicking the 'Sign Up' button, you
                                                                    confirm that you accept our Terms of use and Privacy
                                                                    Policy.</p>
                                                            </form>
                                                            <hr>
                                                            <p class="text-center">Have an account? <a href="">Log In</a>
                                                            </p>
                                                        </article> <!-- card-body end .// -->
                                                    </div> <!-- card.// -->
                                                    <!-- ============================ COMPONENT SIGNUP  END .// ================================= -->

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </div>

                        {{--
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->



                        </ul> --}}


                    </div> <!-- widgets-wrap.// -->
                </div> <!-- col.// -->
            </div> <!-- row.// -->
        </div> <!-- container.// -->
    </section> <!-- header-main .// -->
</header> <!-- section-header.// -->
