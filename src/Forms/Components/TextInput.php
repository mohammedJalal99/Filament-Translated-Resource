<?php

namespace MohammedHamad\TranslatedResource\Forms\Components;
use Illuminate\Contracts\Support\Htmlable;

class TextInput extends \Filament\Forms\Components\TextInput
{
    protected $translatedLabel = true;
    public function disableTranslated(): self
    {
        $this->translatedLabel = false;
        return $this;
    }


    public function getLabel(): string | Htmlable | null
    {
        if($this->translatedLabel){
            return trans('forms.'.static::getName());
        }else{
            return parent::getLabel();
        }
    }
}
