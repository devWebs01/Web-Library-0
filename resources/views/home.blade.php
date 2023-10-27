<x-auth.layout>
    <x-slot name="title">Home</x-slot>
    <div class="card">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="card-body">
                    <h4 class="card-title display-6 mb-4 text-truncate lh-sm">Hello {{ Auth()->user()->name }}!🎉</h4>
                    <p class="mb-0">You have done <span class="fw-semibold">68%</span>😎 more sales today.</p>
                    <p class="mb-0">Check your new badge in your profile.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 position-relative text-center">
                <img src="https://demos.themeselection.com/materio-bootstrap-html-admin-template/assets/img/illustrations/illustration-john-2.png"
                    class="card-img-position bottom-0 w-50 end-0 scaleX-n1-rtl" alt="View Profile">
            </div>
        </div>
    </div>

</x-auth.layout>
