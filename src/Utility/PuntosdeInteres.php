<?php

namespace App\Utility;

use phpDocumentor\Reflection\Types\This;

class PuntosdeInteres
{

    private $miraflores;
    private $nueva_pompeya;

    private $comandancia_frias;

    private $el_sauzalito;

    private $villa_rio_bermejito;

    private $fortin_lavalle;

    public function __construct()
    {

        $this->setMiraflores();
        $this->setNuevaPompeya();
        $this->setComandanciaFrias();
        $this->setElSauzalito();
        $this->setVillaRioBermejito();
        $this->setFortinLavalle();

    }



    public function getPOIbyId($id)
    {

        if($id == 1)
        {
            return $this->getMiraflores();
        } else if ($id == 2) {
            return $this->getNuevaPompeya();
        } else if ($id == 3) {
            return $this->getComandanciaFrias();
        } else if ($id == 4) {
            return $this->getElSauzalito();
        } else if ($id == 5) {
            return $this->getVillaRioBermejito();
        } else if ($id == 6){
            return $this->getFortinLavalle();
        }


    }



    /**
     * @return mixed
     */
    public function getMiraflores()
    {
        return $this->miraflores;
    }


    public function setMiraflores()
    {
        $this->miraflores = [
            1 => 'Árbol Caído',
            2 => 'El Remanso Negro',
            3 => 'El Algarrobo',
            4 => 'Escuela Primaria N° 1074',
            5 => 'Escuela Primaria (Anexo)',
            6 => 'Escuela y Jardín", "punto',
            7 => "Asociación N'tetaxanaxaq",
            8 => "Plazoleta 'Celso Paez'",
            9 => 'Paseo del Bicentenario',
            10 => 'Monumento a la Biblia',
            11 => 'Monumento a la Bandera',
            12 => 'Administración de Parques',
            13 => 'Polideportivo de Miraflor',
            14 => "Árbol HIstórico 'Palo Borracho",
            15 => 'Asociación de apicultores',
            16 => 'Hostel Mirapacha',
            17 => 'Comedor Pilo',
            18 => 'Comedor Jabry',
            19 => 'Pileta Municipal',
            20 => 'Padl los amigos',
            21 => 'Hotel Emanuel',
            22 => 'Doña Irma',
            23 => 'Paraje Pozo La Gringa',
            24 => 'Pozo del Toba'
        ];
    }

    /**
     * @return mixed
     */
    public function getNuevaPompeya()
    {
        return $this->nueva_pompeya;
    }

    /**
     * @param mixed $nueva_pompeya
     */
    public function setNuevaPompeya()
    {
        $this->nueva_pompeya = [
            1 => 'Pje El Toba',
            2 => 'Pje El Olvido (Araujo)',
            3 => 'Nuevas Poblaciones',
            4 => 'Monumento Histórico La Misión',
            5 => 'Laguna La Abuela',
            6 => 'La Nueva Alborada',
            7 => 'Km 23 Artesanías. Laguna de Araujo',
            8 => 'El Mirador',
            9 => 'Barrio Atento',
            10 => 'Paraje la Zanja',
            11 => 'Hospital Nueva Pompeya',
            12 => 'Pista de Aviones',
            13 => 'Paraje La Envidia',
            14 => 'Laguna Ayarde',
            15 => 'Escuela Paraje el Sapo',
            16 => 'Paraje el Acheral',
            17 => 'Hotel El Impenetrable',
            18 => 'Paraje Laguna Ayarde',
            19 => 'Casa de Ñato',
            20 => 'La Armonia',
            21 => 'Don Pancho Monte',
            22 => 'Fortin Arenales Federico',
            23 => 'Entrada al Parque El Impenetrable'
        ];
    }

    /**
     * @return mixed
     */
    public function getComandanciaFrias()
    {
        return $this->comandancia_frias;
    }


    public function setComandanciaFrias()
    {
        $this->comandancia_frias = [
            1 => 'El Totoral',
            2 => 'Vista al Teuco',
            3 => '3 Viviendas (Artesanías)',
            4 => 'Artesanías en Madera',
            5 => 'Artesanías Liliana',
            6 => 'Artesanías (Misetich Noelía)'
        ];

    }

    /**
     * @return mixed
     */
    public function getElSauzalito()
    {
        return $this->el_sauzalito;
    }


    public function setElSauzalito()
    {
        $this->el_sauzalito = [
            1 => 'Los Tunales',
            2 => 'Registro Civil',
            3 => 'Planta Potabilizadora',
            4 => 'Laguna',
            5 => 'Balneario Don Paz',
            6 => 'La Estación',
            7 => 'Restos de la primera escuela. Los Tunales'
        ];
    }

    /**
     * @return mixed
     */
    public function getVillaRioBermejito()
    {
        return $this->villa_rio_bermejito;
    }

    /**
     * @param mixed $villa_rio_bermejito
     */
    public function setVillaRioBermejito()
    {
        $this->villa_rio_bermejito = [

            2 => 'Final del Corredor de los Loros',
            3 => 'Parador Productos Artesanales',
            4 => 'Camping Municipal',
            5 => 'Sede Sindical',
            6 => 'Oficina de Turismo',
            7 => 'Municipalidad Villa Río Bermejito',
            8 => 'Gastronomía Los Lunas',
            9 => 'Anexo Blas',
            10 => 'Centro Gestion',
            11 => 'Anexo Blas',
            12 => 'Puente del Guaycuru',
            13 => 'Escuela 553',
            14 => 'Cementerio',
            15 => 'EL Fortin Ruinas',
            16 => 'Escuela EEP 1018',
            17 => 'Paraje El Canal',
            18 => 'Registro Civil Antiguo',
            19 => 'Artesanias Maleba',
            20 => 'EEP N 1035',
            21 => 'Puente la Sirena',
            22 => 'CEREC El Colchon',
            23 => 'EEGD 855 Olla Quebrada',
            24 => 'Anexo CER',
            25 => 'Escuela Secundaria N 102',
            26 => 'Cristo Redentor',
            27 => 'Puente Santa Ana',
            28 => 'EEP 903',
            29 => 'Ruinas Cangaye'
        ];

    }

    /**
     * @return mixed
     */
    public function getFortinLavalle()
    {
        return $this->fortin_lavalle;
    }

    /**
     * @param mixed $fortin_lavalle
     */
    public function setFortinLavalle()
    {
        $this->fortin_lavalle = [
            1 => 'Centro Gestion',
            2 => 'Anexo Blas',
            3 => 'Puente del Guaycuru',
            4 => 'Escuela 553',
            5 => 'Cementerio',
            6 => 'EL Fortin Ruinas',
            7 => 'Escuela EEP 1018',
            8 => 'Centro Artesanal QOMLashepi',
        ];
    }















}
