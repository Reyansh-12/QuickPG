<?php
include "dbConnection.php";

$message = "";

if (isset($_POST["submit"])) {
    $firstName = $_POST["user_FirstName"];
    $lastName = $_POST["user_LastName"];
    $email = $_POST["user_email"];
    $contact = $_POST["user_contact"];
    $password = $_POST["user_password"];
    $status = $_POST["status"];
    $role = $_POST["role"];

    $fullName = $firstName . " " . $lastName;

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $con->prepare("INSERT INTO `auth_roles` (`user_name`, `user_email`, `user_contact`, `password`, `status`, `role`) VALUES (?, ?, ?, ?, ?, ?)");
    
    if ($stmt) {
        $stmt->bind_param("ssssss", $fullName, $email, $contact, $hashedPassword, $status, $role);

        if ($stmt->execute()) {
            header("Location: LoginForm.php");
            exit();
        } else {
            $message = "Error: Could not register user. " . $stmt->error;
        }
        $stmt->close();
    } 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickPG – Create Account</title>
    
    <link rel="stylesheet" href="signUPForm.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;600;700&family=Montserrat:wght@300;400;500;600&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.css">
    
    <style>
        .parsley-errors-list { color: #ff4d4d; font-size: 12px; margin-top: 5px; list-style: none; padding: 0; }
        .parsley-error { border: 1px solid #ff4d4d !important; }
        .msg-box { padding: 10px; margin-bottom: 10px; border-radius: 5px; font-size: 14px; background: rgba(255,0,0,0.1); }
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
                <div class="brand-chip">Create your tenant account</div>
                <div class="brand-name">QuickPG</div>
                <div class="brand-tagline">Verified Stays. Better Living.</div>
                <div class="gold-rule"></div>
                <div class="brand-headline">Start your journey to<br>your perfect PG stay</div>
                <div class="brand-sub">Find trusted listings, compare amenities,<br>and move in stress free.</div>
                <a href="LoginForm.php" class="signin-link">Already have an account? Sign In →</a>
            </div>
        </div>

        <div class="panel-right">
            <div class="card">
                <div class="card-chip">Secure Registration</div>
                <div class="card-title">Create Account</div>
                <div class="card-sub">Join QuickPG and book your stay with confidence</div>
                
                <?php if($message) echo "<div class='msg-box' style='color:red; text-align:center;'>$message</div>"; ?>

                <form action="SignUpForm.php" method="POST" id="signupForm" data-parsley-validate>
                    <div class="name-row">
                        <div class="field field-anim" style="margin-top:16px">
                            <label class="field-label" for="firstName">First Name</label>
                            <input class="field-input" type="text" id="firstName" name="user_FirstName"
                                placeholder="John" required data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="change" data-parsley-required-message="First name is required.">
                        </div>
                        <div class="field field-anim">
                            <label class="field-label" for="lastName">Last Name</label>
                            <input class="field-input" type="text" id="lastName" name="user_LastName" placeholder="Doe" required data-parsley-required-message="Last name is required.">
                        </div>
                    </div>

                    <div class="field field-anim" style="margin-top:16px">
                        <label class="field-label" for="email">Email Address</label>
                        <input class="field-input" type="email" id="email" name="user_email"
                            placeholder="you@example.com" required data-parsley-type="email" data-parsley-required-message="A valid email is required.">
                    </div>

                    <div class="field field-anim">
                        <label class="field-label" for="phone">Phone Number</label>
                        <input class="field-input" type="tel" id="phone" name="user_contact"
                            placeholder="+91 98765 43210" maxlength="10" required data-parsley-type="number" data-parsley-length="[10, 10]" data-parsley-required-message="A valid 10-digit number is required.">
                    </div>

                    <div class="field field-anim">
                        <label class="field-label" for="pwInput">Password</label>
                        <input class="field-input" id="pwInput" type="password" name="user_password"
                            placeholder="Create a strong password" required data-parsley-minlength="6" data-parsley-required-message="Password must be at least 6 characters.">
                        <div class="strength-bar">
                            <div class="strength-seg" id="s1"></div>
                            <div class="strength-seg" id="s2"></div>
                            <div class="strength-seg" id="s3"></div>
                            <div class="strength-seg" id="s4"></div>
                        </div>
                    </div>
                    <select name="status" id="" style="display: none;">
                        <option value="active">Active</option>
                    </select>
                    <div class="field field-anim" style="margin-top: 16px;">
                        <label class="field-label"> User Role</label>
                        <select name="role" id="" class="field-input" required data-parsley-required-message="Please select a role.">
                            <option value="user">User</option>
                            <option value="pg_owner">PG Owner</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn-cta" name="submit"><span>Create My Account →</span></button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>

    <script>
        $('#signupForm').parsley();

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
                gsap.to(s, { scaleX: i < score ? 1 : 0.3, duration: 0.3, ease: 'power2.out' });
            });
        });

        const tl = gsap.timeline({ defaults: { ease: 'power3.out' } });

        gsap.set(['#p1', '#p2', '#p3'], { opacity: 0 });
        gsap.to('#p1', { opacity: 1, x: 15, y: -20, duration: 6, repeat: -1, yoyo: true, ease: 'sine.inOut', delay: 0.5 });
        gsap.to('#p2', { opacity: 0.7, x: -10, y: 15, duration: 8, repeat: -1, yoyo: true, ease: 'sine.inOut', delay: 1 });
        gsap.to('#p3', { opacity: 0.5, x: 8, y: -12, duration: 5, repeat: -1, yoyo: true, ease: 'sine.inOut', delay: 0.2 });

        tl.to('.brand-name', { opacity: 1, y: 0, duration: 0.8 }, 0.2)
          .to('.brand-tagline', { opacity: 1, y: 0, duration: 0.6 }, 0.4)
          .to('.gold-rule', { opacity: 1, scaleX: 1, duration: 0.7, ease: 'power2.out' }, 0.6)
          .to('.brand-headline', { opacity: 1, y: 0, duration: 0.7 }, 0.8)
          .to('.brand-sub', { opacity: 1, y: 0, duration: 0.6 }, 1.0)
          .to('.signin-link', { opacity: 1, y: 0, duration: 0.6 }, 1.2)
          .to('.card', { opacity: 1, y: 0, duration: 0.9, ease: 'power4.out' }, 0.3)
          .to('.card-title', { opacity: 1, x: 0, duration: 0.6 }, 0.7)
          .to('.card-sub', { opacity: 1, x: 0, duration: 0.5 }, 0.85)
          .to('.field-anim', { opacity: 1, x: 0, duration: 0.5, stagger: 0.1 }, 0.95)
          .to('.btn-cta', { opacity: 1, y: 0, duration: 0.5 }, 1.6);
    </script>
</body>
</html>