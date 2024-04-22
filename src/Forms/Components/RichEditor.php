<?php

namespace MohammedHamad\TranslatedResource\Forms\Components;
use Illuminate\Contracts\Support\Htmlable;

class RichEditor extends \Filament\Forms\Components\RichEditor
{
    protected bool | \Closure $isTranslatedLabel = true;
    public function disableTranslated():static
    {
        $this->isTranslatedLabel = false;
        return $this;
    }
    public function getLabel(): string|Htmlable|null
    {
        if ($this->isTranslatedLabel) {
            return trans('forms.'.static::getName());
        }else{
            return parent::getLabel();
        }
    }
}
