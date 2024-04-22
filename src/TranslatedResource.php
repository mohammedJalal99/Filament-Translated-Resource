<?php

namespace MohammedHamad\TranslatedResource;

use Filament\Resources\Resource;
use Illuminate\Contracts\Support\Htmlable;

class TranslatedResource extends Resource
{
    protected static ?string $translateTitle = null;


    public static function getLabel(): ?string
    {

        return trans("resources.".static::$translateTitle.".label");
    }
    public static function getNavigationLabel(): string
    {

        return trans("resources.".static::$translateTitle.'.navigation_label');
    }
    public static function getPluralLabel(): ?string
    {

        return static::getNavigationLabel(); // TODO: Change the autogenerated stub
    }
    public static function getModelLabel(): string
    {

        return static::getLabel(); // TODO: Change the autogenerated stub
    }
    public static function getNavigationIcon(): string|Htmlable|null
    {
        if( trans("resources.".static::$translateTitle.'.icon') == "resources.".static::$translateTitle.'.icon'){
            return parent::getNavigationIcon();
        }
        if(static::$translateTitle == null){
            return parent::getNavigationIcon();
        }
        return trans("resources.".static::$translateTitle.'.icon');
    }
    public static function getActiveNavigationIcon(): string|Htmlable|null
    {
        return 'heroicon-o-check-badge'; // TODO: Change the autogenerated stub
    }
    public static function getNavigationGroup(): ?string
    {

        return trans('resources.'.static::$translateTitle.'.group');
    }


}
