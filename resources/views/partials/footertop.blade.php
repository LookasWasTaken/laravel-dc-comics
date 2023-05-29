<section id="footer_top">
        <div class="container position-relative">
            <div id="lists" class="d-flex justify-content-between w-50">
                <div class="double_list">
                    <ul class="list-unstyled">
                        @foreach($links["1"] as $link)
                        <li>{{$link}}</li>
                        @endforeach
                    </ul>
                    <ul class="list-unstyled">
                        @foreach($links["2"] as $link)
                        <li>{{$link}}</li>
                        @endforeach
                    </ul>
                </div>
                <ul class="list-unstyled">
                        @foreach($links["3"] as $link)
                        <li>{{$link}}</li>
                        @endforeach
                    </ul>
                    <ul class="list-unstyled">
                        @foreach($links["4"] as $link)
                        <li>{{$link}}</li>
                        @endforeach
                    </ul>
            </div>
            <p>All Site Content &trade; and 2023 &copy; 2023 DC Entertainment, unless otherwise <span class="text-primary">noted here</span>. All Rights Reserved. </p>
            <p><span class="text-primary">Cookie Settings</span></p>
            <div class="img-wrapper position-absolute">
                <img width=600 src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="DC Logo">
            </div>
        </div>
    </section>