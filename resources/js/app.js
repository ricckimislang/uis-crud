import './bootstrap';
import './toastr-setup';

// Display flash messages
document.addEventListener('DOMContentLoaded', () => {
    const success = document.getElementById('flash-success');
    const error = document.getElementById('flash-error');
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
});
