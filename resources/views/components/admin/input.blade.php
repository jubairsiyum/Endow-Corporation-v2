@props(['name', 'label', 'type' => 'text', 'value' => null, 'required' => false, 'placeholder' => ''])

<div>
    <label for="{{ $name }}" style="display:block;font-size:11px;font-weight:600;color:var(--text-tertiary);text-transform:uppercase;letter-spacing:1.5px;margin-bottom:6px;">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}"
           value="{{ old($name, $value) }}"
           @required($required)
           placeholder="{{ $placeholder }}"
           style="width:100%;background:var(--hover);border:1px solid var(--border);border-radius:10px;padding:10px 14px;font-size:14px;color:var(--text-primary);outline:none;transition:all 0.2s;font-family:'Inter',system-ui,sans-serif;box-sizing:border-box;"
           onfocus="this.style.borderColor='rgba(239,68,68,0.4)';this.style.boxShadow='0 0 0 3px rgba(239,68,68,0.06)'"
           onblur="this.style.borderColor='rgba(255,255,255,0.06)';this.style.boxShadow='none'">
    @error($name)
        <p style="font-size:12px;color:#F87171;margin-top:4px;">{{ $message }}</p>
    @enderror
</div>
