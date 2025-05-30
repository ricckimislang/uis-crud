import './bootstrap';
import './toastr-setup';

// Display flash messages
document.addEventListener('DOMContentLoaded', () => {
    const success = document.getElementById('flash-success');
    const error = document.getElementById('flash-error');
    const validationErrors = document.getElementById('flash-validationErrors');
    const warning = document.getElementById('flash-warning');
    const info = document.getElementById('flash-info');

    if (success && success.value) {
        toastr.success(success.value);
    }

    if (error && error.value) {
        toastr.error(error.value);
    }

    if (warning && warning.value) {
        toastr.warning(warning.value);
    }

    if (info && info.value) {
        toastr.info(info.value);
    }
    if (validationErrors && validationErrors.value) {
        const errors = validationErrors.value.split('|');
        errors.forEach(error => {
            toastr.error(error);
        });
    }
});
