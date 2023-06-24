@include('layouts.auth_links')

<div class="container shadow bg-white">
    <div class="row">
        <div class="col-md-12 bg-dark">
            @include('layouts.auth_top')
        </div>
    </div>
    <div class="row mt-3 mb-3">
        <div class="col-md-3">
            @include('layouts.auth_sidebar')
        </div>
        <div class="col-md-9">
            {{ $slot }}
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span> <a href="{{ route('welcome') }}">{{ config('app.name') }}</a> Copyright &copy; {{ date('Y') }}</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</div>

@include('layouts.auth_footer')
