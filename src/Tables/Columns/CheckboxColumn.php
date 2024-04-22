<?php

namespace MohammedHamad\TranslatedResource\Tables\Columns;
use App\Forms\Components\Checkbox;
use Illuminate\Contracts\Support\Htmlable;

class CheckboxColumn extends \Filament\Tables\Columns\CheckboxColumn
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
