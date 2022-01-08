<?php

abstract class DAO
{
    public abstract function creer();

    public abstract function modifier($obj);

    public abstract function supprimer($id);

}