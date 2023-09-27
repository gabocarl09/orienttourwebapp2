<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class JefryCommand extends Command
{
    protected $signature = 'app:jefry';
    protected $description = 'Comando útil para configurar un proyecto después de clonarlo desde GitHub';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->info('Iniciando configuración...');

        try {
            $this->info('Copiando .env.example a .env...');
            $this->copyFile('.env.example', '.env');

            $this->info('Generando clave de la aplicación...');
            $this->call('key:generate');

            $this->info('Ejecutando npm install...');
            $this->runProcess('npm install');

            $this->info('Limpiando y caché de configuración...');
            $this->call('config:cache');

            $this->info('Limpiando caché de rutas...');
            $this->call('route:clear');

            $this->info('Limpiando caché de aplicaciones...');
            $this->call('cache:clear');

            $this->info('¡Todas las tareas completadas!');
        } catch (\Exception $e) {
            $this->error('Ocurrió un error: ' . $e->getMessage());
            return Command::FAILURE;
        }

        return Command::SUCCESS;
    }

    private function copyFile($source, $destination)
    {
        copy(base_path($source), base_path($destination));
    }

    private function runProcess($command)
    {
        $process = Process::fromShellCommandline($command);
        $process->setWorkingDirectory(base_path());
        $process->setTimeout(null);
        $process->run();

        if (!$process->isSuccessful()) {
            throw new \RuntimeException($process->getErrorOutput());
        }
    }
}
