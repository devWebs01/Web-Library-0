<x-auth>
    <x-slot name="title">Register Pages</x-slot>
    <div class="position-relative">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-4">
                @if (session('success'))
                    <div class="alert alert-primary alert-dismissible mb-3" role="alert">
                        <h4 class="alert-heading d-flex align-items-center"><i
                                class="mdi mdi-check-circle-outline mdi-24px me-2"></i>Well done :)</h4>
                        <hr>
                        <p class="mb-0">{{ session('success') }}</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                @elseif ($errors->any())
                    <div class="alert alert-danger alert-dismissible mb-3" role="alert">
                        <h4 class="alert-heading d-flex align-items-center"><i
                                class="mdi mdi-close-circle mdi-24px me-2"></i>Opps :(</h4>

                        <hr>
                        @foreach ($errors->all() as $error)
                            <p class="mb-0">{{ $error }}</p>
                        @endforeach
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                @endif

                <!-- Register Card -->
                <div class="card p-2">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center mt-5">
                        <a href="/" class="app-brand-link gap-2">
                            <span class="app-brand-logo demo">
                                <span style="color: var(--bs-primary)">
                                    <svg width="30" height="24" viewBox="0 0 250 196" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.3002 1.25469L56.655 28.6432C59.0349 30.1128 60.4839 32.711 60.4839 35.5089V160.63C60.4839 163.468 58.9941 166.097 56.5603 167.553L12.2055 194.107C8.3836 196.395 3.43136 195.15 1.14435 191.327C0.395485 190.075 0 188.643 0 187.184V8.12039C0 3.66447 3.61061 0.0522461 8.06452 0.0522461C9.56056 0.0522461 11.0271 0.468577 12.3002 1.25469Z"
                                            fill="currentColor" />
                                        <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 65.2656L60.4839 99.9629V133.979L0 65.2656Z" fill="black" />
                                        <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 65.2656L60.4839 99.0795V119.859L0 65.2656Z" fill="black" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M237.71 1.22393L193.355 28.5207C190.97 29.9889 189.516 32.5905 189.516 35.3927V160.631C189.516 163.469 191.006 166.098 193.44 167.555L237.794 194.108C241.616 196.396 246.569 195.151 248.856 191.328C249.605 190.076 250 188.644 250 187.185V8.09597C250 3.64006 246.389 0.027832 241.935 0.027832C240.444 0.027832 238.981 0.441882 237.71 1.22393Z"
                                            fill="currentColor" />
                                        <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M250 65.2656L189.516 99.8897V135.006L250 65.2656Z" fill="black" />
                                        <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd"
                                            d="M250 65.2656L189.516 99.0497V120.886L250 65.2656Z" fill="black" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.2787 1.18923L125 70.3075V136.87L0 65.2465V8.06814C0 3.61223 3.61061 0 8.06452 0C9.552 0 11.0105 0.411583 12.2787 1.18923Z"
                                            fill="currentColor" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.2787 1.18923L125 70.3075V136.87L0 65.2465V8.06814C0 3.61223 3.61061 0 8.06452 0C9.552 0 11.0105 0.411583 12.2787 1.18923Z"
                                            fill="white" fill-opacity="0.15" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M237.721 1.18923L125 70.3075V136.87L250 65.2465V8.06814C250 3.61223 246.389 0 241.935 0C240.448 0 238.99 0.411583 237.721 1.18923Z"
                                            fill="currentColor" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M237.721 1.18923L125 70.3075V136.87L250 65.2465V8.06814C250 3.61223 246.389 0 241.935 0C240.448 0 238.99 0.411583 237.721 1.18923Z"
                                            fill="white" fill-opacity="0.3" />
                                    </svg>
                                </span>
                            </span>
                            <span class="app-brand-text demo text-heading fw-semibold">PERPUS</span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <div class="card-body mt-2">
                        <h4 class="mb-2">Adventure starts here 🚀</h4>
                        <p class="mb-4">Make your app management easy and fun!</p>

                        <form id="formAuthentication" class="mb-3" action="{{ route('register') }}" method="POST">
                            @csrf
                            <input type="hidden" name="role" value="Anggota">
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-floating form-floating-outline mb-3">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="name" value="{{ old('name') }}" id="name"
                                            placeholder="Enter your name" autofocus />
                                        <label for="name">Nama Lengkap</label>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating form-floating-outline mb-3">
                                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" placeholder="Enter your email" />
                                        <label for="email">Email</label>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="mb-3 form-password-toggle">
                                        <div class="input-group input-group-merge">
                                            <div class="form-floating form-floating-outline">
                                                <input type="password" id="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password"
                                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                    aria-describedby="password" />
                                                <label for="password">Password</label>
                                            </div>
                                            <span class="input-group-text cursor-pointer"><i
                                                    class="mdi mdi-eye-off-outline"></i></span>
                                        </div>
                                        @error('password')
                                            <small class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="mb-3 form-password-toggle">
                                        <div class="input-group input-group-merge">
                                            <div class="form-floating form-floating-outline">
                                                <input type="password" id="password" class="form-control"
                                                    name="password_confirmation" required autocomplete="new-password"
                                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                    aria-describedby="password" />
                                                <label for="password">{{ __('Confirm Password') }}</label>
                                            </div>
                                            <span class="input-group-text cursor-pointer"><i
                                                    class="mdi mdi-eye-off-outline"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md mb-3">
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text @error('telp') bg-danger text-white border-danger @enderror">+62</span>
                                        <div class="form-floating form-floating-outline">
                                            <input type="number"
                                                class="form-control @error('telp') is-invalid @enderror"
                                                name="telp" value="{{ old('telp') }}" id="telp"
                                                placeholder="852XXXXXX" autofocus />
                                            <label for="telp">Telp</label>
                                        </div>
                                    </div>
                                    @error('telp')
                                        <small class="fw-bold text-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </small>
                                    @enderror
                                </div>
                                <div class="col-md">
                                    <div class="form-floating form-floating-outline mb-3">
                                        <input type="number"
                                            class="form-control @error('identify') is-invalid @enderror"
                                            name="identify" value="{{ old('identify') }}" id="identify"
                                            placeholder="Enter your identify" autofocus />
                                        <label for="identify">NIS/etc.</label>
                                        @error('identify')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating form-floating-outline mb-3">
                                        <input type="text"
                                            class="form-control @error('majors') is-invalid @enderror" name="majors"
                                            value="{{ old('majors') }}" id="majors"
                                            placeholder="Enter your majors" autofocus />
                                        <label for="majors">Jurusan</label>
                                        @error('majors')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-floating form-floating-outline mb-3">
                                        <select class="form-select form-control @error('gender') is-invalid @enderror"
                                            name="gender" id="gender">
                                            <option selected disabled>Pilih satu</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        <label for="gender">Jenis Kelamin</label>
                                        @error('gender')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating form-floating-outline mb-3">
                                        <input type="date"
                                            class="form-control @error('birthdate') is-invalid @enderror"
                                            name="birthdate" value="{{ old('birthdate') }}" id="birthdate"
                                            placeholder="Enter your birthdate" autofocus />
                                        <label for="birthdate">Tanggal Lahir</label>
                                        @error('birthdate')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terms-conditions"
                                        name="terms" required />
                                    <label class="form-check-label" for="terms-conditions">
                                        I agree to
                                        <a href="javascript:void(0);">privacy policy & terms</a>
                                    </label>
                                </div>
                            </div>
                            <button class="btn btn-primary d-grid w-100">Sign up</button>
                        </form>

                        <p class="text-center">
                            <span>Already have an account?</span>
                            <a href="/login">
                                <span>Sign in instead</span>
                            </a>
                        </p>
                    </div>
                </div>
                <!-- Register Card -->
                <img src="/assets/img/illustrations/tree-3.png" alt="auth-tree"
                    class="authentication-image-object-left d-none d-lg-block" />
                <img src="/assets/img/illustrations/auth-basic-mask-light.png"
                    class="authentication-image d-none d-lg-block" alt="triangle-bg"
                    data-app-light-img="illustrations/auth-basic-mask-light.png"
                    data-app-dark-img="illustrations/auth-basic-mask-dark.png" />
                <img src="/assets/img/illustrations/tree.png" alt="auth-tree"
                    class="authentication-image-object-right d-none d-lg-block" />
            </div>
        </div>
    </div>
</x-auth>
