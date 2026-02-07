/**
 * POULTRY MANAGEMENT SYSTEM
 * Global JavaScript Utilities
 */

const PMS = {
    /**
     * Toast Notification System
     */
    toast: {
        container: null,

        init() {
            if (!this.container) {
                this.container = document.createElement('div');
                this.container.className = 'toast-container';
                this.container.style.cssText = `
          position: fixed;
          top: 20px;
          right: 20px;
          z-index: 9999;
          display: flex;
          flex-direction: column;
          gap: 10px;
        `;
                document.body.appendChild(this.container);
            }
        },

        show(message, type = 'info', duration = 3000) {
            this.init();

            const toast = document.createElement('div');
            toast.className = `toast toast-${type} anim-slide-in-right`;

            const colors = {
                success: '#10b981',
                error: '#ef4444',
                warning: '#f59e0b',
                info: '#3b82f6'
            };

            toast.style.cssText = `
        background: rgba(15, 23, 42, 0.95);
        backdrop-filter: blur(20px);
        border-left: 4px solid ${colors[type] || colors.info};
        border-radius: 8px;
        padding: 16px 20px;
        min-width: 300px;
        max-width: 400px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
        color: #fff;
        font-size: 14px;
      `;

            toast.textContent = message;
            this.container.appendChild(toast);

            setTimeout(() => {
                toast.style.animation = 'slideInRight 0.3s ease-out reverse';
                setTimeout(() => toast.remove(), 300);
            }, duration);
        },

        success(message, duration) {
            this.show(message, 'success', duration);
        },

        error(message, duration) {
            this.show(message, 'error', duration);
        },

        warning(message, duration) {
            this.show(message, 'warning', duration);
        },

        info(message, duration) {
            this.show(message, 'info', duration);
        }
    },

    /**
     * Modal Management
     */
    modal: {
        open(modalId) {
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.classList.add('is-active');
                document.body.style.overflow = 'hidden';
            }
        },

        close(modalId) {
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.classList.remove('is-active');
                document.body.style.overflow = '';
            }
        },

        closeAll() {
            document.querySelectorAll('.c-modal-backdrop').forEach(modal => {
                modal.classList.remove('is-active');
            });
            document.body.style.overflow = '';
        }
    },

    /**
     * Local Storage Helper
     */
    storage: {
        set(key, value) {
            try {
                localStorage.setItem(key, JSON.stringify(value));
                return true;
            } catch (e) {
                console.error('Storage set error:', e);
                return false;
            }
        },

        get(key, defaultValue = null) {
            try {
                const item = localStorage.getItem(key);
                return item ? JSON.parse(item) : defaultValue;
            } catch (e) {
                console.error('Storage get error:', e);
                return defaultValue;
            }
        },

        remove(key) {
            try {
                localStorage.removeItem(key);
                return true;
            } catch (e) {
                console.error('Storage remove error:', e);
                return false;
            }
        },

        clear() {
            try {
                localStorage.clear();
                return true;
            } catch (e) {
                console.error('Storage clear error:', e);
                return false;
            }
        }
    },

    /**
     * Date Formatting Utilities
     */
    date: {
        format(date, format = 'DD/MM/YYYY') {
            const d = new Date(date);
            const day = String(d.getDate()).padStart(2, '0');
            const month = String(d.getMonth() + 1).padStart(2, '0');
            const year = d.getFullYear();
            const hours = String(d.getHours()).padStart(2, '0');
            const minutes = String(d.getMinutes()).padStart(2, '0');
            const seconds = String(d.getSeconds()).padStart(2, '0');

            return format
                .replace('DD', day)
                .replace('MM', month)
                .replace('YYYY', year)
                .replace('HH', hours)
                .replace('mm', minutes)
                .replace('ss', seconds);
        },

        today() {
            return this.format(new Date(), 'YYYY-MM-DD');
        },

        now() {
            return this.format(new Date(), 'YYYY-MM-DD HH:mm:ss');
        },

        isValid(dateString) {
            const date = new Date(dateString);
            return date instanceof Date && !isNaN(date);
        }
    },

    /**
     * Currency Formatting
     */
    currency: {
        format(amount, symbol = '₹') {
            const formatted = parseFloat(amount).toLocaleString('en-IN', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            });
            return `${symbol} ${formatted}`;
        },

        parse(formattedAmount) {
            return parseFloat(formattedAmount.replace(/[^0-9.-]+/g, ''));
        }
    },

    /**
     * Number Utilities
     */
    number: {
        format(number, decimals = 2) {
            return parseFloat(number).toLocaleString('en-IN', {
                minimumFractionDigits: decimals,
                maximumFractionDigits: decimals
            });
        },

        isNumeric(value) {
            return !isNaN(parseFloat(value)) && isFinite(value);
        },

        random(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }
    },

    /**
     * String Utilities
     */
    string: {
        capitalize(str) {
            return str.charAt(0).toUpperCase() + str.slice(1).toLowerCase();
        },

        truncate(str, length = 50, suffix = '...') {
            if (str.length <= length) return str;
            return str.substring(0, length) + suffix;
        },

        slugify(str) {
            return str
                .toLowerCase()
                .trim()
                .replace(/[^\w\s-]/g, '')
                .replace(/[\s_-]+/g, '-')
                .replace(/^-+|-+$/g, '');
        }
    },

    /**
     * Array Utilities
     */
    array: {
        unique(arr) {
            return [...new Set(arr)];
        },

        shuffle(arr) {
            const shuffled = [...arr];
            for (let i = shuffled.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [shuffled[i], shuffled[j]] = [shuffled[j], shuffled[i]];
            }
            return shuffled;
        },

        groupBy(arr, key) {
            return arr.reduce((result, item) => {
                const group = item[key];
                if (!result[group]) result[group] = [];
                result[group].push(item);
                return result;
            }, {});
        }
    },

    /**
     * DOM Utilities
     */
    dom: {
        show(selector) {
            const el = typeof selector === 'string' ? document.querySelector(selector) : selector;
            if (el) el.style.display = 'block';
        },

        hide(selector) {
            const el = typeof selector === 'string' ? document.querySelector(selector) : selector;
            if (el) el.style.display = 'none';
        },

        toggle(selector) {
            const el = typeof selector === 'string' ? document.querySelector(selector) : selector;
            if (el) {
                el.style.display = el.style.display === 'none' ? 'block' : 'none';
            }
        },

        addClass(selector, className) {
            const el = typeof selector === 'string' ? document.querySelector(selector) : selector;
            if (el) el.classList.add(className);
        },

        removeClass(selector, className) {
            const el = typeof selector === 'string' ? document.querySelector(selector) : selector;
            if (el) el.classList.remove(className);
        },

        toggleClass(selector, className) {
            const el = typeof selector === 'string' ? document.querySelector(selector) : selector;
            if (el) el.classList.toggle(className);
        }
    },

    /**
     * API Call Wrapper (for future backend integration)
     */
    api: {
        async request(url, options = {}) {
            try {
                const response = await fetch(url, {
                    headers: {
                        'Content-Type': 'application/json',
                        ...options.headers
                    },
                    ...options
                });

                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }

                return await response.json();
            } catch (error) {
                console.error('API request error:', error);
                PMS.toast.error('Network error. Please try again.');
                throw error;
            }
        },

        async get(url, options = {}) {
            return this.request(url, { ...options, method: 'GET' });
        },

        async post(url, data, options = {}) {
            return this.request(url, {
                ...options,
                method: 'POST',
                body: JSON.stringify(data)
            });
        },

        async put(url, data, options = {}) {
            return this.request(url, {
                ...options,
                method: 'PUT',
                body: JSON.stringify(data)
            });
        },

        async delete(url, options = {}) {
            return this.request(url, { ...options, method: 'DELETE' });
        }
    },

    /**
     * Confirmation Dialog
     */
    confirm(message, callback) {
        const confirmed = window.confirm(message);
        if (confirmed && typeof callback === 'function') {
            callback();
        }
        return confirmed;
    },

    /**
     * Debounce Function
     */
    debounce(func, wait = 300) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    },

    /**
     * Throttle Function
     */
    throttle(func, limit = 300) {
        let inThrottle;
        return function executedFunction(...args) {
            if (!inThrottle) {
                func(...args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        };
    },

    /**
     * Initialize Global Features
     */
    init() {
        // Close modals on backdrop click
        document.addEventListener('click', (e) => {
            if (e.target.classList.contains('c-modal-backdrop')) {
                this.modal.closeAll();
            }
        });

        // Close modals on ESC key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                this.modal.closeAll();
            }
        });

        // Initialize toast container
        this.toast.init();

        console.log('PMS Global Utilities Initialized');
    }
};

// Initialize on DOM ready
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => PMS.init());
} else {
    PMS.init();
}

// Export for use in other scripts
window.PMS = PMS;
