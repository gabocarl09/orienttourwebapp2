<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class CreateControllerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:controller {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando para crear un controlador con un metodo index';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $controllerName = Str::studly($this->argument('name'));
        $controllerClassName = "{$controllerName}Controller";
        $controllerPath = app_path("Http/Controllers/{$controllerClassName}.php");
        $controllerStubPath = database_path('stubs/controller.stub'); // Adjust the location according to your structure

        if (!File::exists($controllerStubPath)) {
            $this->error("Archivo de Plantilla no Encontrado, Asegurate que Existe /database/stubs/controller.stub.");
            return Command::FAILURE;
        }

        $controllerStub = File::get($controllerStubPath);
        $controllerContents = str_replace('{{ controller }}', $controllerClassName, $controllerStub);
        File::put($controllerPath, $controllerContents);

        $this->info("Controlador '{$controllerClassName}' creado correctamente.");
        return Command::SUCCESS;
    }
}
