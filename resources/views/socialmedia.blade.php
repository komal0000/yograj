<style>
    /* General Styling */
    body {
        font-family: 'Poppins', sans-serif;
    }

    .social-media {
        background-color: white;
    }

    .platform-icon {
        width: 80px;
        height: 80px;
    }

    .platform-title {
        font-size: 1.5rem;
        font-weight: 700;
    }

    .follower-count {
        font-size: 1rem;
        color: #555;
        margin: 0.5rem 0;
    }

    .btn-outline-danger, .btn-outline-primary, .btn-outline-info, .btn-outline-secondary {
        font-size: 0.9rem;
        border-radius: 30px;
        padding: 0.5rem 1.5rem;
        transition: all 0.3s ease;
    }

    .btn-outline-danger:hover {
        background-color: #ff4a4a;
        color: #fff;
    }

    .btn-outline-primary:hover {
        background-color: #0056b3;
        color: #fff;
    }

    .btn-outline-info:hover {
        background-color: #1c8ef1;
        color: #fff;
    }

    .btn-outline-secondary:hover {
        background-color: #0077b5;
        color: #fff;
    }

    .custom-card {
        border: none;
        background: #fff;
        border-radius: 20px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .custom-card:hover {
        transform: scale(1.05);
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
    }

    .youtube-card {
        border-top: 5px solid #ff0000;
    }

    .facebook-card {
        border-top: 5px solid #4267b2;
    }

    .instagram-card {
        border-top: 5px solid #e4405f;
    }

    .twitter-card {
        border-top: 5px solid #000000;
    }

    .linkedin-card {
        border-top: 5px solid #0077b5;
    }

    /* Mobile Responsive Styling */
    @media (max-width: 767px) {
        .platform-title {
            font-size: 1.2rem;
        }

        .platform-icon {
            width: 60px;
            height: 60px;
        }

        .custom-card {
            margin-bottom: 20px;
        }

        .social-media .container {
            padding-left: 15px;
            padding-right: 15px;
        }

        .social-media .row {
            flex-direction: column;
        }

        .col-md-3, .col-md-9 {
            width: 100%;
            text-align: center;
        }

        .col-6 {
            width: 100%;
            margin-bottom: 20px;
        }
    }
</style>

<section class="social-media py-5">
    <div class="container">
        <!-- Section Heading -->
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold" style="color: #222;">Social Media Influence</h1>
            <p class="text-muted" style="font-size: 1.2rem;">
                Dive into my online presence and explore my growing community.
            </p>
        </div>

        <!-- Unique Layout -->
        <div class="row">
            <!-- Left Block -->
            <div class="col-md-3 d-flex align-items-center">
                <div>
                    <h2 class="mb-4" style="font-size: 2rem; color: #6C63FF;">Connect with Me</h2>
                    <p class="text-muted mb-4" style="font-size: 1rem;">
                        Discover the stories, tips, and conversations that inspire and engage my audience across platforms.
                    </p>
                    <a href="#" class="btn btn-primary btn-lg" style="pointer-events: none; border-radius: 30px;">Explore All Platforms</a>
                </div>
            </div>

            <!-- Right Block - Social Media Cards -->
            <div class="col-md-9">
                <div class="row">
                    <!-- YouTube Card -->
                    <div class="col-6 col-md-4">
                        <div class="card custom-card youtube-card">
                            <div class="card-body text-center">
                                <img src="Images/youtube.png" alt="YouTube" class="platform-icon">
                                <h5 class="platform-title mt-3">YouTube</h5>
                                <a target="_blank" href="#" class="btn btn-outline-danger">Subscribe</a>
                            </div>
                        </div>
                    </div>

                    <!-- Facebook Card -->
                    <div class="col-6 col-md-4">
                        <div class="card custom-card facebook-card">
                            <div class="card-body text-center">
                                <img src="Images/facebook.png" alt="Facebook" class="platform-icon">
                                <h5 class="platform-title mt-3">Facebook</h5>
                                <a target="_blank" href="https://www.facebook.com/yogarajdahal01?mibextid=ZbWKwL" class="btn btn-outline-primary">Follow</a>
                            </div>
                        </div>
                    </div>

                    <!-- Instagram Card -->
                    <div class="col-6 col-md-4">
                        <div class="card custom-card instagram-card">
                            <div class="card-body text-center">
                                <img src="Images/instagram.png" alt="Instagram" class="platform-icon">
                                <h5 class="platform-title mt-3">Instagram</h5>
                                <a target="_blank" href="https://www.instagram.com/yogarajdahal02/profilecard/?igsh=MWI0M3BrbXVmd3NkNw%3D%3D" class="btn btn-outline-danger">Follow</a>
                            </div>
                        </div>
                    </div>

                    <!-- Twitter Card -->
                    <div class="col-6 col-md-4">
                        <div class="card custom-card twitter-card">
                            <div class="card-body text-center">
                                <img src="https://img.freepik.com/premium-vector/twitter-new-logo-twitter-icons-new-twitter-logo-x-2023_929078-218.jpg" alt="Twitter" class="platform-icon">
                                <h5 class="platform-title mt-3">Twitter</h5>
                                <a target="_blank" href="https://x.com/Yogarajdahal326?t=7KVb4zxfSjS-MGHkKb_ppA&s=09" class="btn btn-outline-info">Follow</a>
                            </div>
                        </div>
                    </div>

                    <!-- LinkedIn Card -->
                    <div class="col-6 col-md-4">
                        <div class="card custom-card linkedin-card">
                            <div class="card-body text-center">
                                <img src="Images/li.png" alt="LinkedIn" class="platform-icon">
                                <h5 class="platform-title mt-3">LinkedIn</h5>
                                <a target="_blank" href="https://www.linkedin.com/in/yogarajdahal?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="btn btn-outline-secondary">Connect</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
