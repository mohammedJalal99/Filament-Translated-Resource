<?php

namespace MohammedHamad\TranslatedResource\Tables\Columns;
use Illuminate\Contracts\Support\Htmlable;

class TextInputColumn extends \Filament\Tables\Columns\TextInputColumn
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
