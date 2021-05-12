<?php

use App\School;
use App\faculty;
use App\Metier;
use App\Serie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $metier = [
           
            ['chercheur','Ingénieur en Génie mécanique','Ingénieur en Construction','Technicien réseau','Analyse de la donnée','Conseiler(ère) clientèle','Développeur'],
            ['Enseignant(e)','chercheur','Interprétariat et traducteur','Journalistes'],
            ['Enseignant(e)',' chercheur','Medecin','Officines de pharmacie'],
            ['Responsable de gestion administrative','Analyste financier'],
            ['Avocat','Majistrat','Agent Immobilier'],
            ['Enseignant(e)','chercheur'],
            ['Promoteur des PME'],
            ['Commercant(e)','Opérateur de fabrication','Domoticien','Expert en sécurité informatique'],
            ['Enseignant(e)'],
            ['Réalisateur','Scénariste'],
            ['Promoteur des PME','Enseignant(e) ',' chercheur'],
            ['Commercant(e)'],
            ['Responsable de gestion administrative','Analyste financier'],
            ['Enseignant(e)','Responsable de gestion administrative','Analyste financier'],
            ['Avocat','Majistrat'],
            ['Ingénieur agronome'],
            ['Commercant(e)','Enseignant(e)','Opérateur de fabrication','Domoticien','Expert en sécurité informatique'],
            ['Réalisateur','Scénariste'],
            ['Enseignant(e)'],
            ['chercheur','Ingénieur en Génie mécanique','Ingénieur en Construction','Technicien réseau','Analyse de la donnée','Conseiler(ère) clientèle','Développeur'],
            ['Medecin','chercheur'],
            ['Enseignant(e)','chercheur'],
            ['Enseignant(e)',' chercheur','Medecin','Officines de pharmacie'],
            ['Enseignant(e)'],
            ['Avocat','Majistrat'],
            ['Responsable de gestion administrative','Analyste financier'],
            ['chercheur'],
            ['Avocat','Majistrat'],
            ['Technicien réseau','Analyse de la donnée','Développeur'],
            ['Enseignant(e)'],
            ['Commercant(e)','Technicien réseau','Opérateur de fabrication','Domoticien','Expert en sécurité informatique','Développeur'],
            ['Ingénieur agronome'],
            ['Ingénieur agronome'],
            ['Secrétaire de Direction','Chef Comptable'],
            ['Domoticien','Expert en sécurité informatique','Développeur'],
            ['Ingénieur agronome','Commercant(e)','Enseignant(e)'],
            ['Commercant(e)','Technicien réseau','Chef Comptable','Développeur'],
            ['Enseignant(e)','Réalisateur','Scénariste'],
            ['chercheur','Ingénieur en Génie mécanique'],
            ['Secrétaire de Direction','Chef Comptable','Commercant(e)'],
            ['Secrétaire de Direction','Chef Comptable','Commercant(e)'],
        ];
        $BAC = [
            ['BAC C','BAC D','BAC E','BAC BT'],
            ['BAC A'],
            ['BAC C','BAC D','BAC E','BAC BT','BAC A'],
            ['BAC C','BAC D','BAC E','BAC BT','BAC A'],
            ['BAC C','BAC D','BAC E','BAC BT','BAC A'],
            ['BAC C','BAC D','BAC E','BAC BT','BAC A'],
            ['BAC C','BAC D','BAC E','BAC BT','BAC A'],
            ['BAC C','BAC D','BAC E','BAC BT','BAC A'],
            ['BAC C','BAC D','BAC E'],
            ['BAC C','BAC D','BAC E','BAC BT','BAC A'],
            ['BAC C','BAC D','BAC E'],
            ['BAC C','BAC D','BAC E'],
            ['BAC C','BAC D','BAC E','BAC BT','BAC A'],
            ['BAC C','BAC D','BAC E','BAC BT','BAC A'],
            ['BAC C','BAC D','BAC E','BAC BT','BAC A'],
            ['BAC C','BAC D','BAC E','BAC BT','BAC A'],
            ['BAC C','BAC D','BAC E','BAC BT','BAC A'],
            ['BAC C','BAC D','BAC E','BAC BT','BAC A'],
            ['BAC C','BAC D','BAC E','BAC BT'],
            ['BAC C','BAC D','BAC E'],
            ['BAC C','BAC D','BAC E','BAC BT','BAC A'],
            ['BAC C','BAC D','BAC E','BAC BT','BAC A'],
            ['BAC C','BAC D'],
            ['BAC C','BAC D','BAC E','BAC BT','BAC A'],
            ['BAC C','BAC D','BAC E','BAC BT','BAC A'],
            ['BAC C','BAC D','BAC A'],
            ['BAC C'],
            ['BAC C'],
            ['BAC C','BAC D','BAC E','BAC BT','BAC A'],
            ['BAC C','BAC D','BAC E','BAC BT','BAC A'],
            ['BAC C','BAC D','BAC E','BAC BT','BAC A'],
            ['BAC C','BAC D','BAC E','BAC BT','BAC A'],
            ['BAC C','BAC D','BAC E','BAC BT','BAC A'],
            ['BAC C','BAC D','BAC E','BAC BT','BAC A'],
            ['BAC C'],
            ['BAC C','BAC D','BAC E','BAC BT','BAC A'],
            ['BAC C','BAC D','BAC E','BAC BT','BAC A'],
            ['BAC C','BAC D','BAC E','BAC BT','BAC A'],
            ['BAC C','BAC D','BAC E','BAC BT','BAC A'],
            ['BAC C','BAC D','BAC E','BAC BT','BAC A'],
            ['BAC C','BAC D','BAC E','BAC BT','BAC A'],
        ];
        $matieres = [];
        $schools = School::all();
        foreach ($schools as $key1 => $school){
           foreach ($metier as $key2 => $value){
            foreach ($value as $val){
                    if ($key1 == $key2) {
                        $result = DB::table('metiers')->select('id')->where('name' , $val)->first();
                        $school->metiers()->attach($result);
                }
                }
           }
        }
        foreach ($schools as $key1 => $school){
            foreach ($BAC as $key2 => $value){
             foreach ($value as $val){
                    if ($key1 == $key2) {
                        $result = DB::table('series')->select('id')->where('name' , $val)->first();
                        $school->series()->attach($result);
                   }
                 }
            }
         }
    }
}
