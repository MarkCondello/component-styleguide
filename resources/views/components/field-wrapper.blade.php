<div @error($fieldName)class="form-error"@enderror>
    <label for="{{ $fieldName }}" @isset($labelClass) class="{{ $labelClass }}" @endisset>{{ $labelName }}</label>
    {{ $slot ?? null }}
    @error($fieldName)
    <small><span>⚠</span>{{ $message }}</small>
    @enderror
</div>