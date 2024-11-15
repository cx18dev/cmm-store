@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm alert alert-success alert-dismissible fade show border-2', 'role' => 'alert']) }}>
        {{ $status }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
