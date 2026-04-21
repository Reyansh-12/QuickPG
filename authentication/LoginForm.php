<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PG Hotels — Login</title>
    <link rel="stylesheet" href="loginForm.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=DM+Sans:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    <style>

    </style>
</head>

<body>

    <div class="pg-layout">

        <div class="pg-left" id="pgLeft">
            <div class="pg-left-bg" id="bgZoom"></div>
            <div class="pg-left-overlay"></div>
            <div class="blob blob-1" id="blob1"></div>
            <div class="blob blob-2" id="blob2"></div>
            <div class="pg-corner tl"></div>
            <div class="pg-corner br"></div>

            <div class="pg-left-content" id="leftContent">

                <div class="pg-logo-wrap" id="pgLogo">P</div>

                <div class="pg-brand" id="pgBrand">PG Hotels</div>
                <div class="pg-tagline" id="pgTagline">Luxury Redefined</div>
                <div class="pg-divider" id="pgDivider"></div>

                <h1 class="pg-headline" id="pgHeadline">
                    Find Your Perfect Stay<br>in Nagpur &amp; Beyond
                </h1>
                <p class="pg-subtext" id="pgSubtext">
                    World-class hospitality.<br>
                    Unforgettable experiences await you.
                </p>

                <button class="pg-signup-btn" id="signupBtn">
                    <span><a href="SignUpForm.php" class="">Create Account</a></span>
                    <svg class="arrow" width="14" height="14" viewBox="0 0 14 14" fill="none">
                        <path d="M2 7h10M7.5 2.5L12 7l-4.5 4.5" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>

            </div>
        </div>

        <div class="pg-right">
            <div class="pg-right-bg"></div>

            <div class="pg-card" id="pgCard">

                <div class="pg-card-title" id="cardTitle">Welcome Back</div>
                <p class="pg-card-sub" id="cardSub">Sign in to your account</p>

                <div class="pg-field" id="fEmail">
                    <label for="email">Email Address</label>
                    <div class="pg-input-wrap">
                        <svg class="icon" viewBox="0 0 20 20" fill="none">
                            <path
                                d="M2 5.5A1.5 1.5 0 013.5 4h13A1.5 1.5 0 0118 5.5v9A1.5 1.5 0 0116.5 16h-13A1.5 1.5 0 012 14.5v-9z"
                                stroke="white" stroke-width="1.4" />
                            <path d="M2 6l8 5.5L18 6" stroke="white" stroke-width="1.4" stroke-linecap="round" />
                        </svg>
                        <input type="email" id="email" placeholder="you@example.com" autocomplete="email" />
                    </div>
                </div>

                <div class="pg-field" id="fPass">
                    <label for="password">Password</label>
                    <div class="pg-input-wrap">
                        <svg class="icon" viewBox="0 0 20 20" fill="none">
                            <rect x="4" y="8" width="12" height="9" rx="2" stroke="white" stroke-width="1.4" />
                            <path d="M7 8V6a3 3 0 016 0v2" stroke="white" stroke-width="1.4" stroke-linecap="round" />
                            <circle cx="10" cy="12.5" r="1.2" fill="white" />
                        </svg>
                        <input type="password" id="password" placeholder="••••••••" autocomplete="current-password" />
                        <svg class="pg-eye" id="eyeToggle" width="18" height="18" viewBox="0 0 20 20" fill="none">
                            <path d="M2 10s3-6 8-6 8 6 8 6-3 6-8 6-8-6-8-6z" stroke="white" stroke-width="1.4" />
                            <circle cx="10" cy="10" r="2.5" stroke="white" stroke-width="1.4" />
                        </svg>
                    </div>
                </div>

                <div class="pg-row" id="fRow">
                    <label class="pg-check-label">
                        <input type="checkbox" id="remember" />
                        Remember me
                    </label>
                    <button class="pg-forgot">Forgot password?</button>
                </div>

                <button class="pg-btn-submit" id="submitBtn">Sign In</button>

                <div class="pg-or" id="fOr">
                    <span>or continue with</span>
                </div>

                <div class="pg-socials" id="fSocial">
                    <button class="pg-social-btn">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"
                                fill="#4285F4" />
                            <path
                                d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"
                                fill="#34A853" />
                            <path
                                d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z"
                                fill="#FBBC05" />
                            <path
                                d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"
                                fill="#EA4335" />
                        </svg>
                        Google
                    </button>
                    <button class="pg-social-btn">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="#1877F2">
                            <path
                                d="M24 12.073C24 5.405 18.627 0 12 0S0 5.405 0 12.073C0 18.1 4.388 23.094 10.125 24v-8.437H7.078v-3.49h3.047V9.41c0-3.025 1.792-4.697 4.533-4.697 1.312 0 2.686.235 2.686.235v2.97h-1.513c-1.491 0-1.956.93-1.956 1.874v2.25h3.328l-.532 3.49h-2.796V24C19.612 23.094 24 18.1 24 12.073z" />
                        </svg>
                        Facebook
                    </button>
                </div>

            </div>
        </div>
    </div>

    <script>
        gsap.set(["#pgLeft", "#pgCard"], { opacity: 0 });

        gsap.to("#pgLeft", {
            opacity: 1, x: 0, duration: 1,
            ease: "power3.out",
            onStart() { gsap.set("#pgLeft", { x: -60 }); }
        });

        gsap.fromTo("#pgCard",
            { opacity: 0, y: 50 },
            { opacity: 1, y: 0, duration: 1, delay: 0.25, ease: "power3.out" }
        );

        const leftItems = [
            "#pgLogo", "#pgBrand", "#pgTagline", "#pgDivider",
            "#pgHeadline", "#pgSubtext", "#signupBtn"
        ];
        gsap.from(leftItems, {
            opacity: 0, y: 22,
            stagger: 0.1, delay: 0.55,
            duration: 0.65, ease: "power2.out"
        });
        gsap.from("#pgLogo", {
            scale: 0, rotation: -15, duration: 0.75,
            delay: 0.55, ease: "back.out(1.7)"
        });

        const formItems = [
            "#cardTitle", "#cardSub", "#fEmail", "#fPass",
            "#fRow", "#submitBtn", "#fOr", "#fSocial"
        ];
        gsap.from(formItems, {
            opacity: 0, x: 30,
            stagger: 0.08, delay: 0.7,
            duration: 0.55, ease: "power2.out"
        });

        gsap.to("#blob1", { x: 25, y: 35, duration: 6, repeat: -1, yoyo: true, ease: "sine.inOut" });
        gsap.to("#blob2", { x: -18, y: -22, duration: 7, repeat: -1, yoyo: true, ease: "sine.inOut", delay: 1.5 });

        setTimeout(() => document.getElementById("bgZoom").classList.add("zoomed"), 100);

        const eye = document.getElementById("eyeToggle");
        const passInput = document.getElementById("password");
        let eyeOpen = false;
        eye.addEventListener("click", () => {
            eyeOpen = !eyeOpen;
            passInput.type = eyeOpen ? "text" : "password";
            eye.style.opacity = eyeOpen ? "0.9" : "0.4";
        });

        const submitBtn = document.getElementById("submitBtn");
        submitBtn.addEventListener("click", function (e) {
            this.classList.remove("ripple");
            void this.offsetWidth;
            this.classList.add("ripple");
            gsap.fromTo(this,
                { scale: 1 },
                { scale: 0.97, duration: 0.1, yoyo: true, repeat: 1, ease: "power1.inOut" }
            );
        });

        const signupBtn = document.getElementById("signupBtn");
        signupBtn.addEventListener("mouseenter", () =>
            gsap.to(signupBtn, { scale: 1.04, duration: 0.25, ease: "power2.out" })
        );
        signupBtn.addEventListener("mouseleave", () =>
            gsap.to(signupBtn, { scale: 1, duration: 0.25, ease: "power2.out" })
        );
    </script>

</body>

</html>