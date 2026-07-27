<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class FilledHtmlContent implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $text = trim(strip_tags(str_replace('&nbsp;', '', $value ?? '')));

        if (blank($text)) {
            $fail('Write the post content before saving.');
        }
    }
}
