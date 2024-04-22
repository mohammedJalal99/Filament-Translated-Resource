<?php

namespace MohammedHamad\TranslatedResource\Tables\Columns;
use Illuminate\Contracts\Support\Htmlable;

class ColorColumn extends \Filament\Tables\Columns\ColorColumn
{
    protected bool | \Closure $isTranslatedLabel = true;

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
}
