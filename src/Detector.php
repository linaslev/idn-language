<?php

use LanguageDetection\Language;

class Detector
{
    private $translate;

    public function __construct()
    {
        $this->translate = new Language(array_keys($this->getMapper()));
    }

    /**
     * @param string $domain
     * @return string
     */
    public function language(string $domain)
    {
        $result = $this->translate->detect($domain)->bestResults()->close();

        echo $this->getMapper()[array_keys($result)[0]];
    }

    /**
     * Map ISO 639-1 to IDN language codes
     * @return array
     */
    private function getMapper()
    {
        return [
            'af' => 'AFR',
            'sq' => 'ALB',
            'ar' => 'ARA',
            'an' => 'ARG',
            'hy' => 'ARM',
            'az-Cyrl' => 'AZE',
            'az-Latn' => 'AZE',
            'eu' => 'BAQ',
            'be' => 'BEL',
            'bn' => 'BEN',
            'bs-Cyrl' => 'BOS',
            'bs-Latn' => 'BOS',
            'bg' => 'BUL',
            'ca' => 'CAT',
            'zh-Hans' => 'CHI',
            'zh-Hant' => 'CHI',
            'co' => 'COS',
            'cs' => 'CZE',
            'da' => 'DAN',
            'nl' => 'DUT',
            'en' => 'ENG',
            'et' => 'EST',
            'fo' => 'FAO',
            'fj' => 'FIJ',
            'fi' => 'FIN',
            'fr' => 'FRE',
            'fy' => 'FRY',
            'gd' => 'GLA',
            'ka' => 'GEO',
            'de' => 'GER',
            'el-monoton' => 'GRE',
            'el-polyton' => 'GRE',
            'gu' => 'GUJ',
            'he' => 'HEB',
            'hi' => 'HIN',
            'hu' => 'HUN',
            'is' => 'ICE',
            'id' => 'IND',
            'ga' => 'GLE',
            'it' => 'ITA',
            'ja' => 'JPN',
            'jv' => 'JAV',
            'km' => 'KHM',
            'ko' => 'KOR',
            'ku' => 'KUR',
            'lo' => 'LAO',
            'lv' => 'LAV',
            'lt' => 'LIT',
            'ms-Arab' => 'MAY',
            'ms-Latn' => 'MAY',
            'mt' => 'MLT',
            'mn-Cyrl' => 'MON',
            'nb' => 'NOR',
            'fa' => 'PER',
            'pl' => 'POL',
            'pt-BR' => 'POR',
            'pt-PT' => 'POR',
            'ro' => 'RUM',
            'ru' => 'RUS',
            'sa' => 'SAN',
            'sr-Cyrl' => 'SCC',
            'sr-Latn' => 'SCC',
            'hr' => 'SCR',
            'sk' => 'SLO',
            'sl' => 'SLV',
            'so' => 'SOM',
            'es' => 'SPA',
            'sv' => 'SWE',
            'ta' => 'TAM',
            'th' => 'THA',
            'bo' => 'TIB',
            'tr' => 'TUR',
            'uk' => 'UKR',
            'ur' => 'URD',
            'uz' => 'UZB',
            'vi' => 'VIE',
            'cy' => 'WEL'
        ];
    }
}