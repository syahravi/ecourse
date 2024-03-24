<div class="form-group">
    <label>{{ $title }}</label>
    <textarea class="form-control @error($name) is-invalid @enderror" rows="4" placeholder="{{ $placeholder }}"
        name="{{ $name }}" id="{{ $name }}">{{ $value }}</textarea>
    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
