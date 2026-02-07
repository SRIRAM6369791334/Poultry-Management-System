/**
 * Login Page JavaScript
 */

// Handle login form submission
function handleLogin(form) {
    const formData = new FormData(form);
    const username = formData.get('username');
    const password = formData.get('password');
    const remember = formData.get('remember') === 'on';

    // Show loading state
    const submitBtn = form.querySelector('button[type="submit"]');
    const originalText = submitBtn.textContent;
    submitBtn.disabled = true;
    submitBtn.innerHTML = '<span class="c-loader"></span> Logging in...';

    // Simulate API call (replace with actual API call)
    setTimeout(() => {
        // For demo purposes, accept any credentials
        if (username && password) {
            // Store user session
            PMS.storage.set('user', {
                username: username,
                loggedIn: true,
                loginTime: new Date().toISOString()
            });

            if (remember) {
                PMS.storage.set('rememberMe', true);
            }

            // Show success message
            PMS.toast.success('Login successful! Redirecting...');

            // Redirect to dashboard
            setTimeout(() => {
                window.location.href = '/dashboard';
            }, 1000);
        } else {
            // Show error
            PMS.toast.error('Invalid credentials. Please try again.');
            submitBtn.disabled = false;
            submitBtn.textContent = originalText;
        }
    }, 1500);
}

// Check if already logged in
document.addEventListener('DOMContentLoaded', () => {
    const user = PMS.storage.get('user');
    if (user && user.loggedIn) {
        // Redirect to dashboard if already logged in
        window.location.href = '/dashboard';
    }

    // Pre-fill username if remembered
    const rememberMe = PMS.storage.get('rememberMe');
    if (rememberMe) {
        const savedUser = PMS.storage.get('user');
        if (savedUser && savedUser.username) {
            document.getElementById('username').value = savedUser.username;
            document.getElementById('remember').checked = true;
        }
    }
});

// Forgot password handler
document.querySelector('.login-forgot').addEventListener('click', (e) => {
    e.preventDefault();
    PMS.toast.info('Password reset feature coming soon!');
});
