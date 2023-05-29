<section id="footer_bot">
    <div class="container d-flex justify-content-between align-items-center">
        <a href="#" class="border-primary btn text-light text-decoration-none">SIGN-UP NOW!</a>
        <div class="d-flex justify-content-between align-items-center gap-3">
            <span class="text-primary">FOLLOW US</span>
            <ul class="list-unstyled d-flex justify-content-between align-items-center mb-0 gap-3">
                @foreach($socials as $social)
                <li>
                    <a href="#"><img src="{{ Vite::asset('resources/img/footer-'.$social) }}" alt="{{$social}} Logo"></a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>