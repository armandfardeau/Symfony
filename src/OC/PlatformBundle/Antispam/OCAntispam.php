<?php
/**
 * Created by PhpStorm.
 * User: armandfardeau
 * Date: 03/02/2017
 * Time: 15:40
 */

namespace OC\PlatformBundle\Antispam;


/**
 * Class OCAntispam
 * @package OC\PlatformBundle\Antispam
 */
class OCAntispam
{
    private $mailer;
    private $locale;
    private $minLength;

    public function __construct(\Swift_Mailer $mailer, $locale, $minLength)
    {
        $this->mailer    = $mailer;
        $this->locale    = $locale;
        $this->minLength = (int) $minLength;
    }

    /**
     * Vérifie si le texte est un spam ou non
     *
     * @param string $text
     * @return bool
     */
    public function isSpam($text)
    {
        return strlen($text) < $this->minLength;
    }
}