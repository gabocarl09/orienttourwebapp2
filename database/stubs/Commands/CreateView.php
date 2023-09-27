<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class CreateView extends Command
{
    protected $signature = 'create:view {viewName}';
    protected $description = 'Crea una vista en la carpeta resources/views';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $viewName = $this->argument('viewName');

        // Convertir el nombre de la vista a minúsculas y plural
        $viewName = Str::plural(Str::lower($viewName));

        $viewPath = resource_path("views/{$viewName}");
        $viewStubPath = base_path('database/stubs/index-view.stub'); // Ruta al archivo .stub

        if (File::isDirectory($viewPath)) {
            $this->error("La carpeta '{$viewName}' ya existe en la carpeta 'resources/views'.");
            return Command::FAILURE;
        }

        File::makeDirectory($viewPath, 0755, true);

        // Leer el contenido del archivo .stub
        $viewContent = File::get($viewStubPath);

        // Reemplazar marcadores en la plantilla con el nombre de la vista
        $viewContent = str_replace('{{ viewName }}', $viewName, $viewContent);

        // Crear el archivo index.blade.php con el contenido generado
        File::put("{$viewPath}/index.blade.php", $viewContent);

        $this->info("Carpeta de vista y archivo 'index.blade.php' creados para '{$viewName}' en 'resources/views'.");

        return Command::SUCCESS;
    }
}
