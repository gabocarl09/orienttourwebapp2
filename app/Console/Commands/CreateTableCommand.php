<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;

class CreateTableCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:table {table}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create una migración para una tabla específica';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $tableName = Str::plural($this->argument('table')); //Convertir el nombre de la variable a plural
        $migrationName = "create_" . Str::snake($tableName) . "_table";

        // Create the migration file
        $migrationPath = database_path('migrations') . '/' . now()->format('Y_m_d_His') . '_' . $migrationName . '.php';
        $migrationStubPath = database_path('stubs/migration.stub'); // Ajusta la ruta de acuerdo a tu estructura

        if (!file_exists($migrationStubPath)) {
            $this->error("Archivo de Plantilla no Encontrado.");
            return Command::FAILURE;
        }

        $migrationStub = file_get_contents($migrationStubPath);
        $migrationContents = str_replace('{{ table }}', $tableName, $migrationStub);
        file_put_contents($migrationPath, $migrationContents);

        $this->info("La migracion '{$tableName}' fue creada correctamente.");
        return Command::SUCCESS;
    }
}
