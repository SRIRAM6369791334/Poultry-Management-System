/**
 * POULTRY MANAGEMENT SYSTEM
 * Navigation System
 */

const Navigation = {
    menuData: [
        {
            title: 'Dashboard',
            icon: '📊',
            url: '/dashboard',
            active: true
        },
        {
            title: 'Masters',
            icon: '📋',
            submenu: [
                {
                    title: 'Customer Master',
                    url: '/masters/customer/list'
                },
                {
                    title: 'Dealer Master',
                    url: '/masters/dealer/list'
                },
                // {
                //     title: 'Vendor Master',
                //     url: '/masters/vendor/list'
                // }
            ]
        },
        // {
        //     title: 'Billing',
        //     icon: '💳',
        //     submenu: [
        //         {
        //             title: 'Weekly Billing',
        //             url: '/billing/weekly/select-cycle'
        //         },
        //         {
        //             title: 'Daily Billing (POS)',
        //             url: '/billing/daily/pos'
        //         },
        //         {
        //             title: 'Daily Sales List',
        //             url: '/billing/daily/daily-sales-list'
        //         }
        //     ]
        // },
        // {
        //     title: 'Purchase Orders',
        //     icon: '🛒',
        //     url: '/purchase/purchase-list'
        // },
        // {
        //     title: 'Payments',
        //     icon: '💰',
        //     submenu: [
        //         {
        //             title: 'Customer Payments',
        //             url: '/payments/customer/payment-list'
        //         },
        //         {
        //             title: 'Dealer Payments',
        //             url: '/payments/dealer/dealer-payment-list'
        //         },
        //         {
        //             title: 'Pending Payments',
        //             url: '/payments/pending-payments'
        //         }
        //     ]
        // },
        // {
        //     title: 'Reports',
        //     icon: '📈',
        //     submenu: [
        //         {
        //             title: 'Sales Report',
        //             url: '/reports/sales-report'
        //         },
        //         {
        //             title: 'Purchase Report',
        //             url: '/reports/purchase-report'
        //         },
        //         {
        //             title: 'Payment Report',
        //             url: '/reports/payment-report'
        //         },
        //         {
        //             title: 'Profit/Loss Report',
        //             url: '/reports/profit-loss-report'
        //         }
        //     ]
        // },
        // {
        //     title: 'Expenses',
        //     icon: '💸',
        //     submenu: [
        //         {
        //             title: 'Expense List',
        //             url: '/expenses/expense-list'
        //         },
        //         {
        //             title: 'Add Expense',
        //             url: '/expenses/add-expense'
        //         },
        //         {
        //             title: 'Monthly Summary',
        //             url: '/expenses/monthly-expense-summary'
        //         },
        //         {
        //             title: 'Expense Categories',
        //             url: '/expenses/expense-categories'
        //         }
        //     ]
        // },
        // {
        //     title: 'Profit Analysis',
        //     icon: '📊',
        //     submenu: [
        //         {
        //             title: 'Daily Profit',
        //             url: '/profit/daily-profit'
        //         },
        //         {
        //             title: 'Weekly Profit',
        //             url: '/profit/weekly-profit'
        //         },
        //         {
        //             title: 'Monthly Profit',
        //             url: '/profit/monthly-profit'
        //         },
        //         {
        //             title: 'Profit Comparison',
        //             url: '/profit/profit-comparison'
        //         }
        //     ]
        // }
    ],

    /**
     * Render navigation menu
     */
    render() {
        const sidebar = document.querySelector('.c-sidebar');
        if (!sidebar) return;

        const navList = sidebar.querySelector('.c-nav');
        if (!navList) return;

        navList.innerHTML = '';

        this.menuData.forEach(item => {
            const navItem = document.createElement('li');
            navItem.className = 'c-nav-item';

            if (item.submenu) {
                // Parent with submenu
                navItem.innerHTML = `
          <a href="#" class="c-nav-link" data-toggle="submenu">
            <span class="c-nav-icon">${item.icon}</span>
            <span class="c-nav-text">${item.title}</span>
            <span class="c-nav-arrow">▼</span>
          </a>
          <ul class="c-nav-submenu" style="display: none;">
            ${item.submenu.map(sub => `
              <li class="c-nav-item">
                <a href="${sub.url}" class="c-nav-link">
                  <span class="c-nav-text">${sub.title}</span>
                </a>
              </li>
            `).join('')}
          </ul>
        `;

                // Toggle submenu
                const link = navItem.querySelector('[data-toggle="submenu"]');
                const submenu = navItem.querySelector('.c-nav-submenu');
                const arrow = navItem.querySelector('.c-nav-arrow');

                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    if (submenu.style.display === 'none') {
                        submenu.style.display = 'block';
                        arrow.style.transform = 'rotate(180deg)';
                    } else {
                        submenu.style.display = 'none';
                        arrow.style.transform = 'rotate(0deg)';
                    }
                });
            } else {
                // Single link
                navItem.innerHTML = `
          <a href="${item.url}" class="c-nav-link ${item.active ? 'is-active' : ''}">
            <span class="c-nav-icon">${item.icon}</span>
            <span class="c-nav-text">${item.title}</span>
          </a>
        `;
            }

            navList.appendChild(navItem);
        });
    },

    /**
     * Highlight active page
     */
    highlightActive() {
        const currentPath = window.location.pathname;
        const links = document.querySelectorAll('.c-nav-link');

        links.forEach(link => {
            const href = link.getAttribute('href');
            if (href && currentPath.includes(href)) {
                link.classList.add('is-active');

                // Expand parent submenu if in submenu
                const submenu = link.closest('.c-nav-submenu');
                if (submenu) {
                    submenu.style.display = 'block';
                    const arrow = submenu.previousElementSibling.querySelector('.c-nav-arrow');
                    if (arrow) arrow.style.transform = 'rotate(180deg)';
                }
            } else {
                link.classList.remove('is-active');
            }
        });
    },

    /**
     * Toggle mobile sidebar
     */
    setupMobileToggle() {
        const toggleBtn = document.querySelector('[data-sidebar-toggle]');
        const sidebar = document.querySelector('.c-sidebar');

        if (toggleBtn && sidebar) {
            toggleBtn.addEventListener('click', () => {
                sidebar.classList.toggle('is-open');
            });

            // Close sidebar on mobile when clicking outside
            document.addEventListener('click', (e) => {
                if (window.innerWidth <= 768) {
                    if (!sidebar.contains(e.target) && !toggleBtn.contains(e.target)) {
                        sidebar.classList.remove('is-open');
                    }
                }
            });
        }
    },

    /**
     * Generate breadcrumb
     */
    generateBreadcrumb(items) {
        const breadcrumb = document.querySelector('.c-breadcrumb');
        if (!breadcrumb) return;

        breadcrumb.innerHTML = items.map((item, index) => {
            if (index === items.length - 1) {
                return `<span class="c-breadcrumb-item">${item}</span>`;
            }
            return `
        <span class="c-breadcrumb-item">
          <a href="#" class="c-breadcrumb-link">${item}</a>
        </span>
      `;
        }).join('');
    },

    /**
     * Initialize navigation
     */
    init() {
        this.render();
        this.highlightActive();
        this.setupMobileToggle();

        console.log('Navigation initialized');
    }
};

// Initialize on DOM ready
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => Navigation.init());
} else {
    Navigation.init();
}

// Export for use in other scripts
window.Navigation = Navigation;
