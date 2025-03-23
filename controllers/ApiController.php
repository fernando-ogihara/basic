<?php

namespace app\controllers;

use yii\web\Controller; // Estende yii\web\Controller
use app\services\PokemonApi;
use yii\web\Response;
use yii\data\Pagination;

class ApiController extends Controller // Renomeado para ApiController
{
    public function actionIndex($page = 1, $limit = 20)
    {
        $offset = ($page - 1) * $limit;
        $pokemonApi = new PokemonApi($limit, $offset);
        $data = $pokemonApi->getPokemonList();
    

        $pagination = new Pagination([
            'defaultPageSize' => $limit,
            'totalCount' => $data['count'],
            'pageSize' => $limit,
            'page' => $page - 1,
        ]);

        if (\Yii::$app->request->isAjax) {
            \Yii::$app->response->format = Response::FORMAT_JSON;
            return $data;
        }

        return $this->render('index', [
            'data' => $data['results'],
            'pagination' => $pagination,
        ]);
    }
}