<?php 

namespace tests\unit\models;

use app\models\Pokemon;
use Yii;

class PokemonTest extends \Codeception\Test\Unit
{
    public function testTableName()
    {
        $model = new Pokemon();
        $this->assertEquals('pokemon', $model->tableName());
    }

    public function testRules()
    {
        $model = new Pokemon();
        $this->assertTrue($model->isAttributeRequired('name'));
        $this->assertFalse($model->isAttributeRequired('type'));
        $this->assertFalse($model->isAttributeRequired('description'));
        $this->assertFalse($model->isAttributeRequired('image_url'));
    }

    public function testAttributeLabels()
    {
        $model = new Pokemon();
        $this->assertEquals('ID', $model->getAttributeLabel('id'));
        $this->assertEquals('Name', $model->getAttributeLabel('name'));
        $this->assertEquals('Type', $model->getAttributeLabel('type'));
        $this->assertEquals('Description', $model->getAttributeLabel('description'));
        $this->assertEquals('Image Url', $model->getAttributeLabel('image_url'));
    }
}