<?php

use App\Permission;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class PermissionTableSeeder extends Seeder
{

    private function randDate()
    {
        return Carbon::createFromDate(null, rand(1, 12), rand(1, 28));
    }

    public function run()
    {


        DB::table('permissions')->delete();


        //Utilisateurs
        Permission::create([
            'permission' => 'view_all_users',
            'label' => 'Liste des utilisateurs',
            'type' => 'Utilisateur'
        ]);
        Permission::create([
            'permission' => 'create_users',
            'label' => 'Ajouter des utilisateurs',
            'type' => 'Utilisateur'
        ]);

        Permission::create([
            'permission' => 'edit_users',
            'label' => 'Modifier des utilisateurs',
            'type' => 'Utilisateur'
        ]);

        Permission::create([
            'permission' => 'show_users',
            'label' => 'Afficher un utilisateur',
            'type' => 'Utilisateur'
        ]);

        Permission::create([
            'permission' => 'disable_users',
            'label' => 'Actvier/Désactiver un utilisateur',
            'type' => 'Utilisateur'
        ]);
        // enduser

        //Role
        Permission::create([
            'permission' => 'view_all_role',
            'label' => 'Liste des role',
            'type' => 'Role'
        ]);
        Permission::create([
            'permission' => 'create_role',
            'label' => 'Ajouter un role',
            'type' => 'Role'
        ]);

        Permission::create([
            'permission' => 'show_role',
            'label' => 'Afficher les utilisateurs d\'un role',
            'type' => 'Role'
        ]);

        Permission::create([
            'permission' => 'edit_role',
            'label' => 'Modifier un role',
            'type' => 'Role'
        ]);

        Permission::create([
            'permission' => 'delete_role',
            'label' => 'Supprimer un role',
            'type' => 'Role'
        ]);
        // endrole
        // taxe
        Permission::create([
            'permission' => 'view_all_Taxes',
            'label' => 'Liste des Taxes',
            'type' => 'Taxes'
        ]);
        Permission::create([
            'permission' => 'create_Taxes',
            'label' => 'Ajouter une Taxes',
            'type' => 'Taxes'
        ]);

        Permission::create([
            'permission' => 'show_Taxes',
            'label' => 'Afficher les Taxes',
            'type' => 'Taxes'
        ]);

        Permission::create([
            'permission' => 'edit_Taxes',
            'label' => 'Modifier une Taxes',
            'type' => 'Taxes'
        ]);

        Permission::create([
            'permission' => 'delete_Taxes',
            'label' => 'Supprimer une Taxes',
            'type' => 'Taxes'
        ]);
        // endtaxe
        // zones
        Permission::create([
            'permission' => 'view_all_zones',
            'label' => 'Liste des zones',
            'type' => 'Zones'
        ]);
        Permission::create([
            'permission' => 'create_zones',
            'label' => 'Ajouter une zones',
            'type' => 'Zones'
        ]);

        Permission::create([
            'permission' => 'show_zones',
            'label' => 'Afficher les Zones',
            'type' => 'Zones'
        ]);

        Permission::create([
            'permission' => 'edit_zones',
            'label' => 'Modifier une Zones',
            'type' => 'Zones'
        ]);

        Permission::create([
            'permission' => 'delete_zones',
            'label' => 'Supprimer une Zones',
            'type' => 'Zones'
        ]);
        // endzones
        // quartiers
        Permission::create([
            'permission' => 'view_all_Quartier',
            'label' => 'Liste des Quartier',
            'type' => 'Quartier'
        ]);
        Permission::create([
            'permission' => 'create_Quartier',
            'label' => 'Ajouter une Quartier',
            'type' => 'Quartier'
        ]);

        Permission::create([
            'permission' => 'show_Quartier',
            'label' => 'Afficher les Quartier',
            'type' => 'Quartier'
        ]);

        Permission::create([
            'permission' => 'edit_Quartier',
            'label' => 'Modifier une Quartier',
            'type' => 'Quartier'
        ]);

        Permission::create([
            'permission' => 'delete_Quartier',
            'label' => 'Supprimer une Quartier',
            'type' => 'Quartier'
        ]);
        // endquartier
        // Activites
        Permission::create([
            'permission' => 'view_all_Activites',
            'label' => 'Liste des Activites',
            'type' => 'Activites'
        ]);
        Permission::create([
            'permission' => 'create_Activites',
            'label' => 'Ajouter une Activites',
            'type' => 'Activites'
        ]);

        Permission::create([
            'permission' => 'show_Activites',
            'label' => 'Afficher les Activites',
            'type' => 'Activites'
        ]);

        Permission::create([
            'permission' => 'edit_Activites',
            'label' => 'Modifier une Activites',
            'type' => 'Activites'
        ]);

        Permission::create([
            'permission' => 'delete_Activites',
            'label' => 'Supprimer une Activites',
            'type' => 'Activites'
        ]);
        // endActivite
        // Redevabilites
        Permission::create([
            'permission' => 'view_all_Redevabilites',
            'label' => 'Liste des Redevabilites',
            'type' => 'Redevabilites'
        ]);
        Permission::create([
            'permission' => 'create_Redevabilites',
            'label' => 'Ajouter une Redevabilites',
            'type' => 'Redevabilites'
        ]);

        Permission::create([
            'permission' => 'show_Redevabilites',
            'label' => 'Afficher les Redevabilites',
            'type' => 'Redevabilites'
        ]);

        Permission::create([
            'permission' => 'edit_Redevabilites',
            'label' => 'Modifier une Redevabilites',
            'type' => 'Redevabilites'
        ]);

        Permission::create([
            'permission' => 'delete_Redevabilites',
            'label' => 'Supprimer une Redevabilites',
            'type' => 'Redevabilites'
        ]);
        // endRedevabilites
        // Redevable
        Permission::create([
            'permission' => 'view_all_Redevables',
            'label' => 'Liste des Redevables',
            'type' => 'Redevables'
        ]);
        Permission::create([
            'permission' => 'create_Redevables',
            'label' => 'Ajouter une Redevables',
            'type' => 'Redevables'
        ]);

        Permission::create([
            'permission' => 'show_Redevables',
            'label' => 'Afficher les Redevables',
            'type' => 'Redevables'
        ]);

        Permission::create([
            'permission' => 'edit_Redevables',
            'label' => 'Modifier une Redevables',
            'type' => 'Redevables'
        ]);

        Permission::create([
            'permission' => 'delete_Redevables',
            'label' => 'Supprimer une Redevables',
            'type' => 'Redevables'
        ]);
        // endRedevables
        // Payements
        Permission::create([
            'permission' => 'view_all_paiements',
            'label' => 'Liste des paiements',
            'type' => 'Payements'
        ]);
        Permission::create([
            'permission' => 'create_paiements',
            'label' => 'Ajouter un paiements',
            'type' => 'Payements'
        ]);

        Permission::create([
            'permission' => 'show_paiements',
            'label' => 'Afficher les paiements',
            'type' => 'Payements'
        ]);

        Permission::create([
            'permission' => 'edit_paiements',
            'label' => 'Modifier un paiements',
            'type' => 'Payements'
        ]);

        Permission::create([
            'permission' => 'delete_paiements',
            'label' => 'Supprimer un paiements',
            'type' => 'Payements'
        ]);
        // endpayements

        }
}
