<?php

namespace App\Providers;

use App\User;
use App\Region;
use App\Departement;
use App\Ville;
use App\Spot;
use App\Voie;
use App\Post;

use App\Policies\RegionPolicy;
use App\Policies\DepartementPolicy;
use App\Policies\VillePolicy;
use App\Policies\VoiePolicy;
use App\Policies\SpotPolicy;
use App\Policies\PostPolicy;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        Departement::class => DepartementPolicy::class,
        Region::class => RegionPolicy::class,
        Post::class => PostPolicy::class,
        Ville::class => VillePolicy::class,
        Spot::class => SpotPolicy::class,
        Voie::class => VoiePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
