<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class GenerateApiControllers extends Command
{
    protected $signature = 'generate:api-controllers';
    protected $description = 'Génère automatiquement les contrôleurs API à partir des modèles existants';

    public function handle()
    {
        $modelPath = app_path('Models');
        $models = collect(File::files($modelPath))
            ->filter(fn($file) => $file->getExtension() === 'php')
            ->map(fn($file) => $file->getFilenameWithoutExtension());

        foreach ($models as $model) {
            $controllerName = "{$model}Controller";
            $modelClass = "App\\Models\\$model";

            // Crée le contrôleur s'il n'existe pas déjà
            if (!File::exists(app_path("Http/Controllers/{$controllerName}.php"))) {
                $this->call('make:controller', [
                    'name' => $controllerName,
                    '--api' => true,
                    '--model' => $modelClass,
                ]);
                $this->info("✅ Controller {$controllerName} généré.");
            } else {
                $this->warn("⚠️  Controller {$controllerName} existe déjà.");
            }

            // Suggère la route
            $routeName = Str::plural(Str::snake($model));
            $this->line("🔗 À ajouter dans routes/api.php : Route::apiResource('{$routeName}', {$controllerName}::class);");
        }

        return 0;
    }
}
