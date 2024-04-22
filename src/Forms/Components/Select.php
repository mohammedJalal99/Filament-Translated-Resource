<?php

namespace MohammedHamad\TranslatedResource\Forms\Components;
use Closure;
use Illuminate\Contracts\Support\Htmlable;

class Select extends \Filament\Forms\Components\Select
{
     protected bool | \Closure $isTranslatedLabel = true;
     protected bool | Closure $isSearchable = true;
     protected bool | Closure $isPreloaded = true;
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
    }}
