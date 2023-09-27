<?php

namespace App\Console\Commands;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

use Illuminate\Console\Command;

class CreateMMCCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:mmc {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crea la migracion, el modelo y el controlador';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $resourceName = $this->argument('name');
        $modelName = Str::studly($resourceName);
        $controllerName = $modelName . 'Controller';

        // Crear la Migracion
        $migrationStubPath = database_path('stubs/migration.stub'); // Aqui debes especificar la ruta de tu stub

        if (!File::exists($migrationStubPath)) {
            $this->error("La Plantilla para la Migracion no fue Encontrada.");
            return Command::FAILURE;
        }

        $migrationStub = File::get($migrationStubPath);
        $migrationContents = str_replace('{{ table }}', Str::snake(Str::plural($resourceName)), $migrationStub);
        $migrationFileName = now()->format('Y_m_d_His') . "_create_" . Str::snake(Str::plural($resourceName)) . "_table.php";
        $migrationPath = database_path("migrations/{$migrationFileName}");
        File::put($migrationPath, $migrationContents);

        // Crear el modelo
        $modelStubPath = database_path('stubs/model.stub'); // Ajusta la ruta de acuerdo a tu estructura

        if (!File::exists($modelStubPath)) {
            $this->error("La Plantilla para el Modelo no fue Encontrada.");
            return Command::FAILURE;
        }

        $modelStub = File::get($modelStubPath);
        $modelContents = str_replace('{{ model }}', $modelName, $modelStub);
        $modelPath = app_path("Models/{$modelName}.php");
        File::put($modelPath, $modelContents);

        // Crear el controlador
        $controllerStubPath = database_path('stubs/controller.stub'); // Ajusta la ruta de acuerdo a tu estructura

        if (!File::exists($controllerStubPath)) {
            $this->error("La Plantilla para el Controlador no fue Encontrada.");
            return Command::FAILURE;
        }

        $controllerStub = File::get($controllerStubPath);
        $controllerContents = str_replace('{{ controller }}', $controllerName, $controllerStub);
        $controllerPath = app_path("Http/Controllers/{$controllerName}.php");
        File::put($controllerPath, $controllerContents);

        $this->info("La Migracion, Modelo, y Controlador para {$resourceName} fueron creados Correctamente.");

        return Command::SUCCESS;
    }
}
