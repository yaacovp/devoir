<?php

class Questionnaire
{
    private Organisation $organisation;

    /**
     * @param Organisation $organisation
     */
    public function __construct(Organisation $organisation)
    {
        $this->organisation = $organisation;
    }

    /**
     * @return Organisation
     */
    public function getOrganisation(): Organisation
    {
        return $this->organisation;
    }

    /**
     * @param Organisation $organisation
     */
    public function setOrganisation(Organisation $organisation): void
    {
        $this->organisation = $organisation;
    }

}