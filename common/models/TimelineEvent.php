<?php

namespace common\models;

use common\models\query\TimelineEventQuery;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "timeline_event".
 *
 * @property integer $id
 * @property string $application
 * @property string $category
 * @property string $event
 * @property string $data
 * @property string $created_at
 */
class TimelineEvent extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        //return '{{%timeline_event}}';
        return 'queue';
    }

    /**
     * @return TimelineEventQuery
     */
    public static function find()
    {
        return new TimelineEventQuery(get_called_class());
    }

    /**
     * @return array
     */
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::class,
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => null
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['channel', 'job'], 'required'],
            [['job'], 'safe'],
            [['channel', 'job'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function afterFind()
    {
        // $this->job = @json_decode($this->job, true);
        // parent::afterFind();
    }

    /**
     * @return string
     */
    public function getFullEventName()
    {
        //return sprintf('%s.%s', $this->channel, $this->event);
        return $this->channel;
    }
}
