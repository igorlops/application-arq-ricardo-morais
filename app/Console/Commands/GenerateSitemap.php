<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;

class GenerateSitemap extends Command
{
    // O nome que você usará no terminal (ex: php artisan sitemap:generate)
    protected $signature = 'sitemap:generate';

    protected $description = 'Gera o sitemap.xml automaticamente para o site';

    public function handle()
    {
        $this->info('Iniciando a geração do sitemap...');

        SitemapGenerator::create(config('app.url'))
            ->hasCrawled(function ($url) {
                // Opcional: Impedir que o sitemap liste páginas de login ou admin
                if (str_contains($url->path(), '/login') || str_contains($url->path(), '/admin')) {
                    return;
                }
                return $url;
            })
            ->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap gerado com sucesso em public/sitemap.xml');
    }
}