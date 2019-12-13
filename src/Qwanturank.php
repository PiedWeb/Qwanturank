<?php

namespace PiedWeb\Qwanturank;

use rOpenDev\Google\SearchViaCurl;
use rOpenDev\Qwant\QwantSearchViaCurl;

class Qwanturank
{
    protected $googleResults;
    protected $qwantResults;
    protected $kw;

    public static function compare($kw = 'qwanturank')
    {
        $qwanturank = new self($kw);

        $results = [];
        $position = 0;
        foreach ($qwanturank->getQwantResults() as $item) {
            ++$position;

            $results[] = [
                'title' => $item['title'],
                'url' => $item['link'],
                'google' => $qwanturank->getGooglePositionFor($item['link']),
                'position' => $position,
            ];
        }

        return $results;
    }

    public function __construct($kw)
    {
        $this->kw = $kw;
    }

    public function getGooglePositionFor($url)
    {
        foreach ($this->getGoogleResults() as $k => $item) {
            if ($item['link'] == $url) {
                return $k + 1;
            }
        }

        return null;
    }

    public function getGoogleResults()
    {
        if ($this->googleResults) {
            return $this->googleResults;
        }

        $Google = new SearchViaCurl($this->kw);

        $Google->setTld('fr')
                 ->setLanguage('fr')
                 ->setCacheFolder(null) // to disable storing in the /tmp folder
                 ->setNbrPage(1) // Nbr de page à extraire
                 ->setParameter('num', 100) // to add a parameter in the search url
        ;

        $this->googleResults = $Google->extractResults();

        return $this->googleResults;
    }

    public function getQwantResults()
    {
        if ($this->qwantResults) {
            return $this->qwantResults;
        }

        $Qwant = new QwantSearchViaCurl($this->kw);

        $Qwant->setLanguage('fr')
                 ->setSleep(6)  // to wait between 2 requests on Qwant
                 ->setNbrPage(10) // Nbr de page à extraire
                 ->setCacheFolder(null)
        ;

        $this->qwantResults = $Qwant->extractResults();

        return $this->qwantResults;
    }
}
