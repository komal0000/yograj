<footer>
    <div class="container">
        @php
        $data = App\Helper::getFooterSetting();
        @endphp

        <div class="row">

            <div class="col-md-12 col-xl-7 text-center text-xl-start">
                <div class="logo">
                    <h1 style="padding: 0;"><span style="color: #FF8976;">{!! $data->footer_heading_logo !!}</span></h1>
                </div>
                <p>{!! $data->footer_paragraph !!}</p>
                <p>&copy; All Rights Reserved 2024</p>
            </div>


            <div class="col-md-12 col-xl-5 text-center">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <h3>Find Me in Social</h3>
                        <ul id="fsocial-media" class="d-flex justify-content-center list-unstyled">
                            <li><a href="https://www.facebook.com/{!! $data->facebook_link !!}" class="fa fa-facebook text-white" style="text-decoration: none;"></a></li>
                            <li><a href="https://www.linkedin.com/{!! $data->linkedin_link !!}" class="fa fa-linkedin text-white" style="text-decoration: none;"></a></li>
                            <li><a href="https://www.instagram.com/{!! $data->instagram_link !!}" class="fa fa-instagram text-white" style="text-decoration: none;"></a></li>
                            <li><a href="https://www.twitter.com/{!! $data->twitter_link !!}" class="fa fa-twitter text-white" style="text-decoration: none;"></a></li>
                        </ul>
                    </div>


                    <div class="col-md-4 d-flex flex-column align-items-center mt-3">
                        <a href="/" style="text-decoration: none">
                            <div id="arrow" class="arrow-container">
                                <i class="fa fa-arrow-up" aria-hidden="true"></i>
                            </div>
                        </a>
                        <div class="privacy mt-3 text-center">
                            <h4><a href="#" style="text-decoration: none; color: #fff;">Privacy Policy</a></h4>
                            <h4><a href="#" style="text-decoration: none; color: #fff;">Terms of Service</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
    .arrow-container {
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        background-color: #FF8976;
        color: #fff;
        font-size: 1.5rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    }

    .arrow-container:hover {
        background-color: #ff6a5d;
        color: #fff;
        cursor: pointer;
    }
</style>
