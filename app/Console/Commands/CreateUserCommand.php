<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Console\Command;

class CreateUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create {--count=} {--verified=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a new user';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        /* 
          C'est dans la méthode handle qu'ait défini ce que faire notre Commande
        */

        /* 
          Récupération des données passées en paramètre lors de l'exécution de la commande
          $name = $this->argument('name');
        */

        $count = $this->option('count');

        $bar = $this->output->createProgressBar($count);

        $bar->start();
        
        for($i=0; $i <= $count; $i++){
            
            $name = Str::random(8);
            $email = $name.'@gmail.com';
            $password = Str::random(12);
    
            User::create(
                [
                    'name' => $name,
                    'email' => $email,
                    'password' => bcrypt($password),
                    'email_verified_at' => $this->option('verified') ? now() : null,
                ]);

                $bar->advance();
            }
            
        $bar->finish();
            /* Message retourner */
        $this->info('Successfully Created: '.$count.'Users');
    }
}
