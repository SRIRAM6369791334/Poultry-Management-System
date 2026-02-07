/**
 * Dashboard Page JavaScript
 */

// Check authentication
document.addEventListener('DOMContentLoaded', () => {
    const user = PMS.storage.get('user');
    if (!user || !user.loggedIn) {
        window.location.href = 'login';
        return;
    }

    // Update welcome message
    const topbarUser = document.querySelector('.topbar-user');
    if (topbarUser && user.username) {
        topbarUser.textContent = `Welcome, ${user.username}`;
    }

    // Generate breadcrumb
    Navigation.generateBreadcrumb(['Dashboard']);

    // Load dashboard data
    loadDashboardData();
});

// Load dashboard data
function loadDashboardData() {
    // In a real application, this would fetch data from an API
    // For now, we're using static demo data shown in the HTML

    // Simulate loading animation
    setTimeout(() => {
        console.log('Dashboard data loaded');
    }, 500);
}

// Logout handler
const logoutBtn = document.querySelector('a[href="logout"]');
if (logoutBtn) {
    logoutBtn.addEventListener('click', (e) => {
        e.preventDefault();

        if (PMS.confirm('Are you sure you want to logout?', () => {
            PMS.storage.remove('user');
            PMS.toast.success('Logged out successfully');
            setTimeout(() => {
                window.location.href = 'logout';
            }, 500);
        }));
    });
}
