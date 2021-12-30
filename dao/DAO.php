<?php

abstract class DAO
{
    public abstract function ajouter();

    public abstract function modifier($obj);

    public abstract function supprimer($id);

}