@extends('layouts.masterAuth')
@section('content')
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form method="post" action="/register" class="user">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="name" placeholder="Full Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="email" placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user" name="password" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" name="password_confirmation" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Register
                                        </button>
                                    </div>
                                    <div class="col">
                                        <a href="/login" class="btn btn-facebook btn-user btn-block">
                                            Login
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
    {{-- <!-- Bootstrap core JavaScript-->
    <script src="/assets/sbadmin2/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/assets/sbadmin2/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/assets/sbadmin2/js/sb-admin-2.min.js"></script>

</body>

</html> --}}