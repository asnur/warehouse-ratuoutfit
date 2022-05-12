<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from sb-admin-pro.startbootstrap.com/auth-login-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Aug 2021 11:45:34 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login Gudang</title>
    <link href="{{ asset('asset_admin/sb-admin-pro.startbootstrap.com/css/styles.css') }}" rel="stylesheet" />
    <!-- <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" /> -->
    <script data-search-pseudo-elements="" defer="" src="{{ asset('asset_admin/cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('asset_admin/cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js') }}" crossorigin="anonymous"></script>
    <!-- <script async src="cdn-cgi/bm/cv/669835187/api.js"></script> -->
</head>

<body style="background-color: #f66d9b;">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container-xl px-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <!-- Basic login form-->
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-body">
                                    <!-- Login form-->
                                    <center>
                                        <img class="img-fluid mb-4" src="{{ asset('asset_admin/sb-admin-pro.startbootstrap.com/assets/img/logo.png') }}">
                                    </center>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <!-- Form Group (email address)-->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="inputEmailAddress"><b><i data-feather="mail"></i> Email</b></label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Masukan Email " />

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <!-- Form Group (password)-->
                                        <div class="mb-3">
                                            <label class="small mb-1" for="inputPassword"><b><i data-feather="lock"></i> Password</b></label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Masukan Password" />

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="mb-5 mt-3">
                                            <button type="submit" class="btn btn-success"><i data-feather="log-in"></i> &nbsp; Login</button>
                                        </div>
                                    </form>
                                    <!-- Form Group (login box)-->
                                </div>
                            </div>
                        </div>
                    </div>
            </main>
        </div>
    </div>
    <script src=" {{ asset('asset_admin/cdn.jsdelivr.net/npm/bootstrap%405.1.0/dist/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('asset_admin/sb-admin-pro.startbootstrap.com/js/scripts.js') }}"></script>

    <!-- <script src="../assets.startbootstrap.com/js/sb-customizer.js"></script> -->
    <!-- <sb-customizer project="sb-admin-pro"></sb-customizer> -->
    <!-- <script type="text/javascript">(function(){window['__CF$cv$params']={r:'684ccf06defa3285',m:'9370bf40db65b8db4ca36deadba0383e70be4379-1629978272-1800-AZcIKnGc82TKYNf0h4Bgku26HhSCkHZbgUNCbHj/MD/NdPX7UheCFgT3HAugnH1Z7VRUpx37Bwvfdiz/8O2UoaJedNU8vIzkzummQ0sTP+9cK3KWKrCgYI01868mSynC3YlBvGW4hmzFqqCEmq5IKh8=',s:[0x2ef85fffc7,0x8e19e3a34a],}})();</script><script defer src="../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"684ccf06defa3285","token":"6e2c2575ac8f44ed824cef7899ba8463","version":"2021.8.1","si":10}'></script> -->
</body>

<!-- Mirrored from sb-admin-pro.startbootstrap.com/auth-login-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Aug 2021 11:45:34 GMT -->

</html>