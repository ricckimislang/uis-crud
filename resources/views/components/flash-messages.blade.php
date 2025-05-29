@if (session('success'))
    <input type="hidden" id="flash-success" value="{{ session('success') }}">
@endif

@if (session('error'))
    <input type="hidden" id="flash-error" value="{{ session('error') }}">
@endif

@if (session('warning'))
    <input type="hidden" id="flash-warning" value="{{ session('warning') }}">
@endif

@if (session('info'))
    <input type="hidden" id="flash-info" value="{{ session('info') }}">
@endif 