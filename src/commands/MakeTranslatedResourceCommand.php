<?php

namespace MohammedHamad\TranslatedResource\commands;


use Filament\Commands\MakeResourceCommand;

class MakeTranslatedResourceCommand extends MakeResourceCommand
{
    use \MohammedHamad\TranslatedResource\classes\CanGenerateTablesCustom;
    use \MohammedHamad\TranslatedResource\classes\CanGenerateFormsCustom;
    use \MohammedHamad\TranslatedResource\classes\CanManipulateFiles;
    protected $signature = 'make:translated-resource {name?} {--model-namespace=} {--soft-deletes} {--view} {--G|generate} {--S|simple} {--panel=} {--F|force}';

    protected $description = 'Create a new Filament Translated resource class and default page classes';

}
