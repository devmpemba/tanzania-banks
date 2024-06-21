<?php

namespace Salymmbise\TanzaniaBanks;

class BankList
{
    private $banks = [


        'Absa Bank' => [
            'branches' => []
        ],
        'ACB Bank' => [
            'branches' => []
        ],
        'Access Bank' => [
            'branches' => []
        ],
        'Amana Bank Limited' => [
            'branches' => []
        ],
        'Azania Bank Limited' => [
            'branches' => []
        ],
        'Bank ABC' => [
            'branches' => []
        ],
        'Bank of Africa (BOA)' => [
            'branches' => []
        ],
        'Bank of Africa Tanzania' => [
            'branches' => []
        ],
        'Bank of Baroda' => [
            'branches' => []
        ],
        'Bank of India (BOI)' => [
            'branches' => []
        ],
        'Citi Bank' => [
            'branches' => []
        ],
        'CRDB Bank Plc' => [
            'branches' => [
                'Dar es Salaam - Azikiwe Branch' => 'CORUTZTZ',
                'Dar es Salaam - Kariakoo Branch' => 'CORUTZTZAAB',
                'Dar es Salaam - Mlimani City Branch' => 'CORUTZTZMLM',
                'Arusha - Main Branch' => 'CORUTZTZAAR',
                'Mwanza - Nyerere Road Branch' => 'CORUTZTZMWA',
                'Dodoma - Main Branch' => 'CORUTZTZDOM',
                'Mbeya - Main Branch' => 'CORUTZTZMBY',
                'Morogoro - Main Branch' => 'CORUTZTZMOR',
                'Moshi - Main Branch' => 'CORUTZTZMOS',
                'Tanga - Main Branch' => 'CORUTZTAN',
                'Zanzibar - Main Branch' => 'CORUTTZTNZ',
                'Iringa - Main Branch' => 'CORUTZTIRG',
                'Tabora - Main Branch' => 'CORUTZTBTB',
                'Shinyanga - Main Branch' => 'CORUTZTSHNY',
                'Kigoma - Main Branch' => 'CORUTZTKGM',
                'Singida - Main Branch' => 'CORUTZTSGD',
                'Lindi - Main Branch' => 'CORUTZTLND',
                'Mtwara - Main Branch' => 'CORUTZMTW',
                'Sumbawanga - Main Branch' => 'CORUTZSUM',
                'Songea - Main Branch' => 'CORUTZSON',
            ]
        ],
        'CRDB Microfinance Services Company Limited' => [
            'branches' => []
        ],
        'DCB Commercial Bank' => [
            'branches' => []
        ],
        'Diamond Trust Bank (DTB)' => [
            'branches' => []
        ],
        'Ecobank' => [
            'branches' => []
        ],
        'Ecobank Tanzania' => [
            'branches' => []
        ],
        'Equity Bank' => [
            'branches' => []
        ],
        'Exim Bank' => [
            'branches' => []
        ],
        'Exim Bank Tanzania' => [
            'branches' => []
        ],
        'Finca Microfinance Bank' => [
            'branches' => []
        ],
        'Guaranty Trust Bank (GTCO)' => [
            'branches' => []
        ],
        'Habib African Bank Limited' => [
            'branches' => []
        ],
        'ICB Bank' => [
            'branches' => []
        ],
        'KCB Bank Tanzania' => [
            'branches' => []
        ],
        'Letshego Faidika Bank' => [
            'branches' => []
        ],
        'Maendeleo Bank' => [
            'branches' => []
        ],
        'MCB Bank' => [
            'branches' => []
        ],
        'Mkombozi Commercial Bank' => [
            'branches' => []
        ],

        'National Bank of Commerce (NBC)' => [

            'branches' => [
                'Dar es Salaam - Corporate Branch' => 'NLCBTZTX',
                'Dar es Salaam - Samora Branch' => 'NLCBTZTXSAM',
                'Arusha - Main Branch' => 'NLCBTZTXARU',
                'Arusha - Clock Tower Branch' => 'NLCBTZTXCLK',
                'Mwanza - Kenyatta Road Branch' => 'NLCBTZTXMWZ',
                'Dodoma - Main Branch' => 'NLCBTZTXDOM',
                'Mbeya - Main Branch' => 'NLCBTZTXMBY',
                'Morogoro - Main Branch' => 'NLCBTZTXMOR',
                'Moshi - Main Branch' => 'NLCBTZTXMOS',
                'Tanga - Main Branch' => 'NLCBTZTXTAN',
                'Zanzibar - Main Branch' => 'NLCBTZTXZNZ',
                'Iringa - Main Branch' => 'NLCBTZTXIRG',
                'Tabora - Main Branch' => 'NLCBTZTXTBR',
                'Shinyanga - Main Branch' => 'NLCBTZTXSHY',
                'Kigoma - Main Branch' => 'NLCBTZTXKGM',
                'Singida - Main Branch' => 'NLCBTZTXSGD',
                'Lindi - Main Branch' => 'NLCBTZTXLND',
                'Mtwara - Main Branch' => 'NLCBTZTXMTW',
                'Sumbawanga - Main Branch' => 'NLCBTZTXSUM',
                'Songea - Main Branch' => 'NLCBTZTXSON',
            ]

        ],
        'NCBA Bank' => [
            'branches' => []
        ],
        'National Microfinance Bank (NMB)' => [
            'branches' => [
                'Dar es Salaam - Corporate Branch' => 'NMIBTZTZ',
                'Dar es Salaam - Mlimani City Branch' => 'NMIBTZTZMLM',
                'Dodoma - Main Branch' => 'NMIBTZTZDOM',
                'Arusha - Main Branch' => 'NMIBTZTZARU',
                'Mwanza - Kenyatta Road Branch' => 'NMIBTZTZMWZ',
                'Mbeya - Main Branch' => 'NMIBTZTZMBY',
                'Morogoro - Main Branch' => 'NMIBTZTZMOR',
                'Moshi - Main Branch' => 'NMIBTZTZMOS',
                'Tanga - Main Branch' => 'NMIBTZTZTAN',
                'Zanzibar - Main Branch' => 'NMIBTZTZZNZ',
                'Iringa - Main Branch' => 'NMIBTZTZIRG',
                'Tabora - Main Branch' => 'NMIBTZTBTB',
                'Shinyanga - Main Branch' => 'NMIBTZTZSHY',
                'Kigoma - Main Branch' => 'NMIBTZTZKGM',
                'Singida - Main Branch' => 'NMIBTZTZSGD',
                'Lindi - Main Branch' => 'NMIBTZTZLND',
                'Mtwara - Main Branch' => 'NMIBTZTZMTW',
                'Sumbawanga - Main Branch' => 'NMIBTZTZSUM',
                'Songea - Main Branch' => 'NMIBTZTZSON',
            ]
        ],

        'Selcom Microfinance Bank' => [
            'branches' => []
        ],
        
        'Standard Chartered' => [
            'branches' => []
        ],
        'Standard Chartered Bank Tanzania' => [
            'branches' => []
        ],
        'Stanbic Bank' => [
            'branches' => []
        ],
        'Stanbic Bank Tanzania' => [
            'branches' => []
        ],
        'Tanzania Agricultural Development Bank (TADB)' => [
            'branches' => []
        ],
        'Tanzania Commercial Bank (TCB)' => [
            'branches' => []
        ],
        'The Peoples Bank of Zanzibar (TPZ)' => [
            'branches' => []
        ],
        'TIB Development Bank' => [
            'branches' => []
        ],




    ];

    public function getBanks()
    {
        //------- get response as array
        return array_keys($this->banks);

        //------- response as json
        // return json_encode(array_keys($this->banks)); 
    }

    public function getBranches($bank)
    {
        //------- get response as array
        return isset($this->banks[$bank]['branches']) ? array_keys($this->banks[$bank]['branches']) : [];

        //-------- get response as json
        //return isset($this->banks[$bank]['branches']) ? json_encode(array_keys($this->banks[$bank]['branches'])) : json_encode([]);

    }

    public function getSwiftCode($bank, $branch)
    {
        //---------- get response as array
        return isset($this->banks[$bank]['branches'][$branch]) ? $this->banks[$bank]['branches'][$branch] : null;

        //-------- response as JSON
        //return isset($this->banks[$bank]['branches'][$branch]) ? json_encode($this->banks[$bank]['branches'][$branch]) : json_encode(null);

    }
}
