<?php

use Illuminate\Database\Seeder;
use App\Train;
class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'azienda' => 'Trenitalia',
                'stazione_di_partenza' => 'Roma',
                'stazione_di_arrivo' => 'Civitavecchia',
                'orario_di_partenza' => 1623,
                'orario_di_arrivo' => 1713,
                'codice_treno' => 55324,
                'numero_carrozze' => 8,
                'in_orario' => 'In Orario',
                'cancellato' => '',
            ],
            [
                'azienda' => 'Italo',
                'stazione_di_partenza' => 'Napoli',
                'stazione_di_arrivo' => 'Roma',
                'orario_di_partenza' => 1354,
                'orario_di_arrivo' => 1532,
                'codice_treno' => 87932,
                'numero_carrozze' => 12,
                'in_orario' => 'In Orario',
                'cancellato' => '',
            ],
            [
                'azienda' => 'Trenitalia',
                'stazione_di_partenza' => 'Firenze',
                'stazione_di_arrivo' => 'Bologna',
                'orario_di_partenza' => 1932,
                'orario_di_arrivo' => 2105,
                'codice_treno' => 56723,
                'numero_carrozze' => 6,
                'in_orario' => 'In Ritardo',
                'cancellato' => '',
            ],
            [
                'azienda' => 'Italo',
                'stazione_di_partenza' => 'Milano',
                'stazione_di_arrivo' => 'Torino',
                'orario_di_partenza' => 1136,
                'orario_di_arrivo' => 1325,
                'codice_treno' => 33376,
                'numero_carrozze' => 10,
                'in_orario' => '',
                'cancellato' => 'Cancellato',
            ],
            [
                'azienda' => 'Trenitalia',
                'stazione_di_partenza' => 'Genova',
                'stazione_di_arrivo' => 'Torino',
                'orario_di_partenza' => 1427,
                'orario_di_arrivo' => 1713,
                'codice_treno' => 99787,
                'numero_carrozze' => 7,
                'in_orario' => 'In Ritardo',
                'cancellato' => '',
            ],
        ];

        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->azienda = $train['azienda'];
            $newTrain->stazione_di_partenza = $train['stazione_di_partenza'];
            $newTrain->stazione_di_arrivo = $train['stazione_di_arrivo'];
            $newTrain->orario_di_partenza = $train['orario_di_partenza'];
            $newTrain->orario_di_partenza = $train['orario_di_partenza'];
            $newTrain->orario_di_arrivo = $train['orario_di_arrivo'];
            $newTrain->codice_treno = $train['codice_treno'];
            $newTrain->numero_carrozze = $train['numero_carrozze'];
            $newTrain->in_orario = $train['in_orario'];
            $newTrain->cancellato = $train['cancellato'];
            $newTrain->save();
        }

    }
}
