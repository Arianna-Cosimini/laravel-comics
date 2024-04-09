<footer>

    <div class="footer-top">
        <div class="container">

            <div class="links">

                @foreach ($links as $linkItem)
                    <div class="link-list">
                        <h4>{{ $linkItem['title'] }}</h4>
                        <ul>
                            @foreach ($linkItem['links'] as $link)
                                <li>{{ $link }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach

            </div>

            <div class="big-logo">
                <img src="{{ asset('img/dc-logo-bg.png') }}" alt="">
            </div>

        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">

            <div class="cta">
                <button class="btn">
                    Sign-up now!
                </button>
            </div>

            <div class="social-links">
                <strong>Follow Us</strong>
                <ul>
                    @foreach($socials as $social)
                    <li>
                        <img src="{{$social['icon']}}" alt="">
                    </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </div>
</footer>
