<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pokemon".
 *
 * @property int $id
 * @property string $name
 * @property string|null $type
 * @property string|null $description
 * @property string|null $image_url
 */
class Pokemon extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pokemon';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type', 'description', 'image_url'], 'default', 'value' => null],
            [['name'], 'required'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 100],
            [['type'], 'string', 'max' => 50],
            [['image_url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'type' => 'Type',
            'description' => 'Description',
            'image_url' => 'Image Url',
        ];
    }

}
