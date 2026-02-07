/**
 * POULTRY MANAGEMENT SYSTEM
 * Form Validation Library
 */

const Validator = {
    /**
     * Validation Rules
     */
    rules: {
        required(value) {
            return value.trim() !== '';
        },

        email(value) {
            const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return regex.test(value);
        },

        phone(value) {
            const regex = /^[6-9]\d{9}$/;
            return regex.test(value.replace(/[\s-]/g, ''));
        },

        gst(value) {
            if (!value) return true; // GST is optional
            const regex = /^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/;
            return regex.test(value.toUpperCase());
        },

        min(value, min) {
            return parseFloat(value) >= parseFloat(min);
        },

        max(value, max) {
            return parseFloat(value) <= parseFloat(max);
        },

        minLength(value, length) {
            return value.length >= length;
        },

        maxLength(value, length) {
            return value.length <= length;
        },

        numeric(value) {
            return !isNaN(parseFloat(value)) && isFinite(value);
        },

        alphanumeric(value) {
            const regex = /^[a-zA-Z0-9]+$/;
            return regex.test(value);
        },

        url(value) {
            try {
                new URL(value);
                return true;
            } catch {
                return false;
            }
        },

        date(value) {
            const date = new Date(value);
            return date instanceof Date && !isNaN(date);
        },

        match(value, matchValue) {
            return value === matchValue;
        }
    },

    /**
     * Error Messages
     */
    messages: {
        required: 'This field is required',
        email: 'Please enter a valid email address',
        phone: 'Please enter a valid 10-digit mobile number',
        gst: 'Please enter a valid GST number',
        min: 'Value must be at least {min}',
        max: 'Value must be at most {max}',
        minLength: 'Must be at least {length} characters',
        maxLength: 'Must be at most {length} characters',
        numeric: 'Please enter a valid number',
        alphanumeric: 'Only letters and numbers allowed',
        url: 'Please enter a valid URL',
        date: 'Please enter a valid date',
        match: 'Values do not match'
    },

    /**
     * Validate a single field
     */
    validateField(input, rules) {
        const value = input.value;
        const errors = [];

        for (const rule of rules) {
            const [ruleName, ...params] = rule.split(':');
            const param = params.length > 0 ? params[0] : null;

            if (ruleName === 'required' && !this.rules.required(value)) {
                errors.push(this.messages.required);
                break;
            }

            if (value && this.rules[ruleName]) {
                if (param) {
                    if (!this.rules[ruleName](value, param)) {
                        let message = this.messages[ruleName];
                        message = message.replace('{' + ruleName + '}', param);
                        message = message.replace('{length}', param);
                        errors.push(message);
                    }
                } else {
                    if (!this.rules[ruleName](value)) {
                        errors.push(this.messages[ruleName]);
                    }
                }
            }
        }

        return errors;
    },

    /**
     * Show validation error
     */
    showError(input, errors) {
        input.classList.add('is-invalid');
        input.classList.remove('is-valid');

        let errorEl = input.parentElement.querySelector('.c-form-error');
        if (!errorEl) {
            errorEl = document.createElement('span');
            errorEl.className = 'c-form-error';
            input.parentElement.appendChild(errorEl);
        }
        errorEl.textContent = errors[0];
    },

    /**
     * Show validation success
     */
    showSuccess(input) {
        input.classList.add('is-valid');
        input.classList.remove('is-invalid');

        const errorEl = input.parentElement.querySelector('.c-form-error');
        if (errorEl) {
            errorEl.remove();
        }
    },

    /**
     * Clear validation state
     */
    clearValidation(input) {
        input.classList.remove('is-valid', 'is-invalid');
        const errorEl = input.parentElement.querySelector('.c-form-error');
        if (errorEl) {
            errorEl.remove();
        }
    },

    /**
     * Validate form
     */
    validateForm(formId) {
        const form = document.getElementById(formId);
        if (!form) return false;

        let isValid = true;
        const inputs = form.querySelectorAll('[data-validate]');

        inputs.forEach(input => {
            const rules = input.getAttribute('data-validate').split('|');
            const errors = this.validateField(input, rules);

            if (errors.length > 0) {
                this.showError(input, errors);
                isValid = false;
            } else {
                this.showSuccess(input);
            }
        });

        return isValid;
    },

    /**
     * Real-time validation setup
     */
    setupRealTimeValidation(formId) {
        const form = document.getElementById(formId);
        if (!form) return;

        const inputs = form.querySelectorAll('[data-validate]');

        inputs.forEach(input => {
            // Validate on blur
            input.addEventListener('blur', () => {
                const rules = input.getAttribute('data-validate').split('|');
                const errors = this.validateField(input, rules);

                if (errors.length > 0) {
                    this.showError(input, errors);
                } else if (input.value) {
                    this.showSuccess(input);
                }
            });

            // Clear error on input
            input.addEventListener('input', () => {
                if (input.classList.contains('is-invalid')) {
                    this.clearValidation(input);
                }
            });
        });

        // Validate on submit
        form.addEventListener('submit', (e) => {
            e.preventDefault();

            if (this.validateForm(formId)) {
                // Form is valid, proceed with submission
                const submitHandler = form.getAttribute('data-submit-handler');
                if (submitHandler && typeof window[submitHandler] === 'function') {
                    window[submitHandler](form);
                } else {
                    // Default submission (can be customized)
                    console.log('Form is valid, submitting...');
                    PMS.toast.success('Form submitted successfully!');
                    // form.submit(); // Uncomment for actual form submission
                }
            } else {
                PMS.toast.error('Please fix the errors in the form');
            }
        });
    },

    /**
     * Auto-initialize all forms with validation
     */
    init() {
        document.querySelectorAll('form[data-validate-form]').forEach(form => {
            this.setupRealTimeValidation(form.id);
        });

        console.log('Validator initialized');
    }
};

// Initialize on DOM ready
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => Validator.init());
} else {
    Validator.init();
}

// Export for use in other scripts
window.Validator = Validator;
