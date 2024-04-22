<?php

namespace MohammedHamad\TranslatedResource\Tables\Columns;
use Filament\Tables\Columns\IconColumn;
use Illuminate\Contracts\Support\Htmlable;

/**
 * @deprecated Use `IconColumn` with the `boolean()` method instead.
 */
class BooleanColumn extends IconColumn
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
