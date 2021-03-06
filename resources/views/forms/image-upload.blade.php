@php
$name = $name ?? $key;
$value = $value ?? $image;
@endphp
<div class="form-group image-upload {{ $errors->has($name) ? 'has-error' : '' }}">
    <label for="{{ $name }}" class="control-label">{{ $label }}</label>
    <input id="{{ $name }}" name="{{ $name }}" type="file" {{ isset($required) && $required ? 'required' : '' }}>

    @if ($errors->has($name))
        <div class="form-error text-danger">
            {{ $errors->first($name) }}
        </div>
    @endif

    @if(!empty($value))
        <img src="{{ $value }}" style="display: block; max-width: 300px; max-height: 300px; margin: 15px 0; padding: 5px; box-shadow: 0 0 5px rgba(0,0,0,0.5);">
    @endif
</div>
