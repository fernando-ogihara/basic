<?php

namespace app\controllers;

use app\models\Pokemon;
use yii\web\Response;
use yii\web\HttpException;

/**
 * PokemonController handles the CRUD actions for Pokemon model.
 * 
 * @category Controllers
 * @package  app\controllers
 * @version  1.0
 * @since    1.0
 * @author   
 */
class PokemonController extends BaseCrudController
{
    /**
     * The model class name for the CRUD actions.
     * 
     * @var string
     */
    protected $modelClass = Pokemon::class;
}