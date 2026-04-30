<?php
include "dbConnection.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST["user_email"] ?? "");
    $password = $_POST["user_password"] ?? "";

    if ($email === "" || $password === "") {
        $message = "Please enter email and password.";
    } else {
        $stmt = $con->prepare("SELECT user_name, user_email, password, role, status FROM auth_roles WHERE user_email = ? LIMIT 1");

        if ($stmt) {
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            $user = $result ? $result->fetch_assoc() : null;
            $stmt->close();

            if (!$user) {
                $message = "Account not found.";
            } elseif (($user["status"] ?? "") !== "active") {
                $message = "Your account is not active. Please contact support.";
            } elseif (!password_verify($password, $user["password"])) {
                $message = "Invalid password.";
            } else {
                if (session_status() === PHP_SESSION_NONE) {
                    session_start();
                }

                $_SESSION["user_name"] = $user["user_name"];
                $_SESSION["user_email"] = $user["user_email"];
                $_SESSION["role"] = $user["role"];

                if ($user["role"] === "pg_owner") {
                    header("Location: ../Admin/dashboard/home.php");
                    exit();
                }

                if ($user["role"] === "user") {
                    header("Location: ../Student/frontend/");
                    exit();
                }

                $message = "Unknown role. Please contact support.";
            }
        } else {
            $message = "Something went wrong. Please try again.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>QuickPG — Login</title>
    <link rel="stylesheet" href="loginForm.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.css">

    <style>
        .msg-box {
            padding: 10px;
            margin-bottom: 12px;
            border-radius: 8px;
            font-size: 13px;
            color: #ffb7b7;
            border: 1px solid rgba(255, 77, 77, 0.45);
            background: rgba(255, 77, 77, 0.12);
            text-align: center;
        }

        .pg-input-wrap {
            position: relative;
            display: flex;
            align-items: center;
        }

        .pg-input-wrap .icon {
            position: absolute;
            left: 15px;
            color: #ccc; 
            pointer-events: none;
            z-index: 2;
        }

        .pg-input-wrap input {
            width: 100%;
            padding-left: 45px !important; 
            box-sizing: border-box;
        }

        .parsley-errors-list {
            color: #ff4d4d;
            font-size: 12px;
            margin-top: 5px;
            list-style: none;
            padding: 0;
            display: block;
        }

        .parsley-error {
            border: 1px solid #ff4d4d !important;
        }
        
        .error-container {
            min-height: 15px; 
        }
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
                <div class="pg-logo-wrap" id="pgLogo">QP</div>
                <div class="pg-brand" id="pgBrand">QuickPG</div>
                <div class="pg-tagline" id="pgTagline">Verified Stays. Better Living.</div>
                <div class="pg-divider" id="pgDivider"></div>

                <h1 class="pg-headline" id="pgHeadline">
                    Find Your Perfect PG<br>in Minutes
                </h1>
                <p class="pg-subtext" id="pgSubtext">
                    Trusted listings, instant booking support,<br>
                    and zero brokerage surprises.
                </p>

                <a class="pg-signup-btn" id="signupBtn" href="SignUpForm.php">
                    <span>Create Account</span>
                    <svg class="arrow" width="14" height="14" viewBox="0 0 14 14" fill="none">
                        <path d="M2 7h10M7.5 2.5L12 7l-4.5 4.5" stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
        </div>

        <div class="pg-right">
            <div class="pg-right-bg"></div>
            <div class="pg-card" id="pgCard">
                <span class="pg-chip">Secure Login</span>
                <div class="pg-card-title" id="cardTitle">Welcome Back</div>
                <p class="pg-card-sub" id="cardSub">Sign in to your account</p>
                
                <?php if($message) echo "<div class='msg-box'>$message</div>"; ?>

                <form action="" method="POST" data-parsley-validate>
                    
                    <div class="pg-field" id="fEmail">
                        <label for="email">Email Address</label>
                        <div class="pg-input-wrap">
                            <i class="icon bi bi-envelope"></i>
                            <input type="email" id="email" name="user_email" required
                                data-parsley-required-message="Please enter a valid email address"
                                data-parsley-errors-container="#email-errors"
                                placeholder="you@example.com" autocomplete="email" autofocus />
                        </div>
                        <div id="email-errors" class="error-container"></div>
                    </div>

                    <div class="pg-field" id="fPass">
                        <label for="password">Password</label>
                        <div class="pg-input-wrap">
                            <i class="icon bi bi-lock"></i>
                            <input type="password" id="password" name="user_password" required
                                data-parsley-required-message="Please enter valid password"
                                data-parsley-errors-container="#pass-errors"
                                placeholder="••••••••" autocomplete="current-password" />
                            <svg class="pg-eye" id="eyeToggle" width="18" height="18" viewBox="0 0 20 20" fill="none">
                                <path d="M2 10s3-6 8-6 8 6 8 6-3 6-8 6-8-6-8-6z" stroke="white" stroke-width="1.4" />
                                <circle cx="10" cy="10" r="2.5" stroke="white" stroke-width="1.4" />
                            </svg>
                        </div>
                        <div id="pass-errors" class="error-container"></div>
                    </div>

                    <div class="pg-row" id="fRow">
                        <label class="pg-check-label">
                            <input type="checkbox" id="remember" />
                            Remember me
                        </label>
                        <button type="button" class="pg-forgot">Forgot password?</button>
                    </div>

                    <button type="submit" class="pg-btn-submit" id="submitBtn">Sign In</button>
                </form>

                <div class="pg-or" id="fOr">
                    <span>or continue with</span>
                </div>

                <div class="pg-socials" id="fSocial">
                    <button class="pg-social-btn">Google</button>
                    <button class="pg-social-btn">Facebook</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
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

        const leftItems = ["#pgLogo", "#pgBrand", "#pgTagline", "#pgDivider", "#pgHeadline", "#pgSubtext", "#signupBtn"];
        gsap.from(leftItems, { opacity: 0, y: 22, stagger: 0.1, delay: 0.55, duration: 0.65, ease: "power2.out" });

        const formItems = ["#cardTitle", "#cardSub", "#fEmail", "#fPass", "#fRow", "#submitBtn", "#fOr", "#fSocial"];
        gsap.from(formItems, { opacity: 0, x: 30, stagger: 0.08, delay: 0.7, duration: 0.55, ease: "power2.out" });

        const eye = document.getElementById("eyeToggle");
        const passInput = document.getElementById("password");
        let eyeOpen = false;
        eye.addEventListener("click", () => {
            eyeOpen = !eyeOpen;
            passInput.type = eyeOpen ? "text" : "password";
            eye.style.opacity = eyeOpen ? "0.9" : "0.4";
        });
    </script>
</body>
</html>