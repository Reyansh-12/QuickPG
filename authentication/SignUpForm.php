<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PG Hotels – Create Account</title>
    <link rel="stylesheet" href="signupForm.css">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;600;700&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <style>

    </style>
</head>

<body>

    <div class="bg"></div>

    <div class="particle" id="p1" style="width:180px;height:180px;top:10%;left:5%"></div>
    <div class="particle" id="p2" style="width:100px;height:100px;bottom:15%;left:25%"></div>
    <div class="particle" id="p3" style="width:60px;height:60px;top:40%;left:38%"></div>

    <div class="wrapper">

        <div class="panel-left">
            <div class="brand-wrap">
                <div class="brand-name">PG Hotels</div>
                <div class="brand-tagline">Luxury Redefined</div>
                <div class="gold-rule"></div>
                <div class="brand-headline">Begin Your Journey<br>to Perfect Stays</div>
                <div class="brand-sub">World-class hospitality.<br>Unforgettable experiences.</div>
                <a href="#" class="signin-link">Sign In →</a>
            </div>
        </div>

        <div class="panel-right">
            <div class="card">
                <div class="card-title">Create Account</div>
                <div class="card-sub">Join PG Hotels and start your story</div>

                <div class="name-row">
                    <div class="field field-anim">
                        <label class="field-label">First Name</label>
                        <input class="field-input" type="text" placeholder="John">
                    </div>
                    <div class="field field-anim">
                        <label class="field-label">Last Name</label>
                        <input class="field-input" type="text" placeholder="Doe">
                    </div>
                </div>

                <div class="field field-anim" style="margin-top:16px">
                    <label class="field-label">Email Address</label>
                    <input class="field-input" type="email" placeholder="you@example.com">
                </div>

                <div class="field field-anim">
                    <label class="field-label">Phone Number</label>
                    <input class="field-input" type="tel" placeholder="+91 98765 43210">
                </div>

                <div class="field field-anim">
                    <label class="field-label">Password</label>
                    <input class="field-input" id="pwInput" type="password" placeholder="Create a strong password">
                    <div class="strength-bar">
                        <div class="strength-seg" id="s1"></div>
                        <div class="strength-seg" id="s2"></div>
                        <div class="strength-seg" id="s3"></div>
                        <div class="strength-seg" id="s4"></div>
                    </div>
                </div>

                <div class="terms-row field-anim">
                    <input type="checkbox" class="checkbox" id="terms">
                    <label class="terms-text" for="terms">
                        I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a> of PG Hotels
                    </label>
                </div>

                <button class="btn-cta"><span>Create My Account →</span></button>

                <div class="divider">
                    <div class="divider-line"></div>
                    <div class="divider-text">or continue with</div>
                    <div class="divider-line"></div>
                </div>

                <div class="social-row">
                    <button class="btn-social">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4" />
                            <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853" />
                            <path d="M5.84 14.1c-.22-.66-.35-1.36-.35-2.1s.13-1.44.35-2.1V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l3.66-2.84z" fill="#FBBC05" />
                            <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z" fill="#EA4335" />
                        </svg>
                        Google
                    </button>
                    <button class="btn-social">
                        <svg viewBox="0 0 24 24" fill="#1877F2">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                        Facebook
                    </button>
                </div>
            </div>
        </div>

    </div>

    <script>
        const pw = document.getElementById('pwInput');
        const segs = [document.getElementById('s1'), document.getElementById('s2'), document.getElementById('s3'), document.getElementById('s4')];
        pw.addEventListener('input', () => {
            const v = pw.value;
            let score = 0;
            if (v.length >= 6) score++;
            if (v.length >= 10) score++;
            if (/[A-Z]/.test(v) && /[0-9]/.test(v)) score++;
            if (/[^A-Za-z0-9]/.test(v)) score++;
            segs.forEach((s, i) => {
                s.classList.toggle('active', i < score);
                gsap.to(s, {
                    scaleX: i < score ? 1 : 0.3,
                    duration: 0.3,
                    ease: 'power2.out'
                });
            });
        });

        const tl = gsap.timeline({
            defaults: {
                ease: 'power3.out'
            }
        });

        gsap.set(['#p1', '#p2', '#p3'], {
            opacity: 0
        });
        gsap.to('#p1', {
            opacity: 1,
            x: 15,
            y: -20,
            duration: 6,
            repeat: -1,
            yoyo: true,
            ease: 'sine.inOut',
            delay: 0.5
        });
        gsap.to('#p2', {
            opacity: 0.7,
            x: -10,
            y: 15,
            duration: 8,
            repeat: -1,
            yoyo: true,
            ease: 'sine.inOut',
            delay: 1
        });
        gsap.to('#p3', {
            opacity: 0.5,
            x: 8,
            y: -12,
            duration: 5,
            repeat: -1,
            yoyo: true,
            ease: 'sine.inOut',
            delay: 0.2
        });

        tl.to('.brand-name', {
                opacity: 1,
                y: 0,
                duration: 0.8
            }, 0.2)
            .to('.brand-tagline', {
                opacity: 1,
                y: 0,
                duration: 0.6
            }, 0.4)
            .to('.gold-rule', {
                opacity: 1,
                scaleX: 1,
                duration: 0.7,
                ease: 'power2.out'
            }, 0.6)
            .to('.brand-headline', {
                opacity: 1,
                y: 0,
                duration: 0.7
            }, 0.8)
            .to('.brand-sub', {
                opacity: 1,
                y: 0,
                duration: 0.6
            }, 1.0)
            .to('.signin-link', {
                opacity: 1,
                y: 0,
                duration: 0.6
            }, 1.2);

        tl.to('.card', {
            opacity: 1,
            y: 0,
            duration: 0.9,
            ease: 'power4.out'
        }, 0.3);
        tl.to('.card-title', {
                opacity: 1,
                x: 0,
                duration: 0.6
            }, 0.7)
            .to('.card-sub', {
                opacity: 1,
                x: 0,
                duration: 0.5
            }, 0.85);

        tl.to('.field-anim', {
            opacity: 1,
            x: 0,
            duration: 0.5,
            stagger: 0.1
        }, 0.95);

        tl.to('.btn-cta', {
                opacity: 1,
                y: 0,
                duration: 0.5
            }, 1.6)
            .to('.divider', {
                opacity: 1,
                duration: 0.4
            }, 1.8)
            .to('.social-row', {
                opacity: 1,
                y: 0,
                duration: 0.5
            }, 1.9);

        document.querySelectorAll('.field-input').forEach(inp => {
            inp.addEventListener('focus', () => {
                gsap.to(inp, {
                    scale: 1.01,
                    duration: 0.2,
                    ease: 'power1.out'
                });
            });
            inp.addEventListener('blur', () => {
                gsap.to(inp, {
                    scale: 1,
                    duration: 0.2,
                    ease: 'power1.in'
                });
            });
        });

        document.querySelector('.btn-cta').addEventListener('click', function() {
            gsap.timeline()
                .to(this, {
                    scale: 0.96,
                    duration: 0.1
                })
                .to(this, {
                    scale: 1.02,
                    duration: 0.15
                })
                .to(this, {
                    scale: 1,
                    duration: 0.1
                });
        });
    </script>
</body>

</html>