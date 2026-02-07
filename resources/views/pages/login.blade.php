<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Poultry Management System</title>
    <link rel="stylesheet" href="{{ asset('assets/css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animations.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
</head>
<body>
    <div class="login-wrapper">
        <div class="login-container anim-fade-in-up">
            <!-- Logo & Title -->
            <div class="login-header">
                <div class="login-logo">🐔</div>
                <h1 class="login-title">Poultry Management System</h1>
                <p class="login-subtitle">Welcome back! Please login to continue</p>
            </div>

            <!-- Login Form -->
            <form id="loginForm" class="login-form" onsubmit="handleLogin(this); return false;">
                <!-- Email/Username -->
                <div class="c-form-group">
                    <label class="c-label c-label-required" for="username">Email or Username</label>
                    <input 
                        type="text" 
                        id="username" 
                        name="username" 
                        class="c-input" 
                        placeholder="Enter your email or username"
                        required
                        autofocus
                        autocomplete="username"
                    >
                </div>

                <!-- Password -->
                <div class="c-form-group">
                    <label class="c-label c-label-required" for="password">Password</label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        class="c-input" 
                        placeholder="Enter your password"
                        required
                        autocomplete="current-password"
                    >
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="login-options">
                    <label class="c-checkbox">
                        <input type="checkbox" name="remember" id="remember">
                        <span>Remember me</span>
                    </label>
                    <a href="#" class="login-forgot">Forgot Password?</a>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="c-btn c-btn-primary c-btn-lg c-btn-block">
                    Login
                </button>
            </form>

            <!-- Footer -->
            <div class="login-footer">
                <p>© 2026 Poultry Management System. All rights reserved.</p>
            </div>
        </div>

        <!-- Background Decorations -->
        <div class="login-bg-circle login-bg-circle-1"></div>
        <div class="login-bg-circle login-bg-circle-2"></div>
        <div class="login-bg-circle login-bg-circle-3"></div>
    </div>

    <script src="{{ asset('assets/js/global.js') }}"></script>
    <script src="{{ asset('assets/js/login.js') }}"></script>
</body>
</html>
