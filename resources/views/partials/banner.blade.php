<section id="sites" class="bg-primary">
    <ul class="container d-flex justify-content-between align-items-center py-5 text-light list-unstyled mb-0">
        @foreach($banners as $banner_name => $banner)
        <li>
            <a class="text-light text-uppercase text-decoration-none" href="#">
                <img class="img-fluid" width=70 src="{{ Vite::asset('resources/img/'.$banner) }}" alt="{{$banner_name}} Logo"> {{$banner_name}}
            </a>
        </li>
        @endforeach
    </ul>
</section>