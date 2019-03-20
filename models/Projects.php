<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%projects}}".
 *
 * @property integer $project_id
 * @property string $name
 * @property string $type
 * @property string $rate
 * @property string $amount
 * @property string $paid
 * @property string $status
 * @property string $date_added
 */
class Projects extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%projects}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'status'], 'required'],
            [['type', 'status'], 'string'],
            [['rate', 'amount', 'paid'], 'number'],
            [['date_added'], 'safe'],
            [['name'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'project_id' => 'Project ID',
            'name' => 'Name',
            'type' => 'Type',
            'rate' => 'hourly rate',
            'amount' => 'Amount',
            'paid' => 'Paid',
            'status' => 'Status',
            'date_added' => 'Date Added',
        ];
    }

    /**
     * @inheritdoc
     * @return ProjectsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProjectsQuery(get_called_class());
    }
    
    public static function total_income(){
        $sql  = 'select sum(paid) as total from projects';
            
        $row = Yii::$app->db->createCommand($sql)->queryOne();

        if($row) return $row['total']; else return 0;
    }

    public static function total_income_last_month(){
        $sql  = 'select sum(paid) as total from projects WHERE YEAR(date_added) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH) AND MONTH(date_added) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)';
            
        $row = Yii::$app->db->createCommand($sql)->queryOne();

        if($row) return $row['total']; else return 0;
    }

    public static function total_income_month(){
        $sql  = 'select sum(paid) as total from projects WHERE YEAR(date_added) = YEAR(NOW()) AND MONTH(date_added) = MONTH(NOW())';
            
        $row = Yii::$app->db->createCommand($sql)->queryOne();

        if($row) return $row['total']; else return 0;
    }

    public static function total_income_year(){
        $sql  = 'select sum(paid) as total from projects WHERE YEAR(date_added) = YEAR(NOW())';
            
        $row = Yii::$app->db->createCommand($sql)->queryOne();

        if($row) return $row['total']; else return 0;
    }

    public static function getDayGrpah(){
        $sql  = 'select sum(paid) as paid, DAY(date_added) as date from projects WHERE YEAR(date_added) = YEAR(NOW()) AND MONTH(date_added) = MONTH(NOW()) GROUP BY DAY(date_added)';
            
        return Yii::$app->db->createCommand($sql)->queryAll();
    }

    public static function getMonthGrpah(){
        $sql  = 'select sum(paid) as paid, MONTHNAME(date_added) as date from projects WHERE YEAR(date_added) = YEAR(NOW()) GROUP BY MONTH(date_added)';
            
        return Yii::$app->db->createCommand($sql)->queryAll();
    }

    public static function getYearGrpah(){
        $sql  = 'select sum(paid) as paid, YEAR(date_added) as date from projects GROUP BY YEAR(date_added)';
            
        return Yii::$app->db->createCommand($sql)->queryAll();
    }

    public function getTotal()
    {
        if($this->type == 'Hourly') {
            
            $sql  = 'select sum(TIMESTAMPDIFF(MINUTE, start_time, end_time)) as total from project_tasks WHERE project_id = "'.$this->project_id.'" group by project_id';
            
            $row = Yii::$app->db->createCommand($sql)->queryOne();
            
            if($row) {
                
                $hour = floor($row['total']/60); 
                $minute = $row['total']%60; 
                
                return '$'.round(($row['total'] * $this->rate) / 60, 2).' <br /><small> '.$hour.' hour '.$minute.' minute </small>';
            }else{
                return null;
            }
            
        }else{
            return '$'.round($this->amount, 2);
        }
    } 
}
