<?php

namespace MohammedHamad\TranslatedResource\Tables\Columns;

use Closure;
use Filament\Support\Enums\ArgumentValue;
use Illuminate\Contracts\Support\Htmlable;

class TextColumn extends \Filament\Tables\Columns\TextColumn
{

    protected bool | \Closure $isTranslatedLabel = true;

    public function numeric(int|Closure|null $decimalPlaces = null, Closure|string|ArgumentValue|null $decimalSeparator = ArgumentValue::Default, Closure|string|ArgumentValue|null $thousandsSeparator = ArgumentValue::Default, int|Closure|null $maxDecimalPlaces = null, Closure|string|null $locale = null): static
    {
        if($decimalPlaces!=null){
            return parent::numeric($decimalPlaces, $decimalSeparator, $thousandsSeparator);
        }
        return parent::formatStateUsing(fn($state)=>removeZerosAdnFormat($state));
    }

    public function disableTranslated():static
    {
        $this->isTranslatedLabel = false;
        return $this;
    }

    public function getLabel(): string|Htmlable
    {
        if ($this->isTranslatedLabel) {
            return trans('tables.'.static::getName());
        }else{
            return parent::getLabel();
        }
    }
    public function dateTime(?string $format = null, ?string $timezone = null): static
    {
        if($format == null){
            return parent::dateTime('Y-m-d');
        }
        return parent::dateTime($format, $timezone);
    }
}
