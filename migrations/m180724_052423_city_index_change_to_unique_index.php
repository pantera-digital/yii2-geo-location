<?php

use yii\db\Migration;

/**
 * Class m180724_052423_city_index_change_to_unique_index
 */
class m180724_052423_city_index_change_to_unique_index extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropForeignKey(
            'fk-geobase_city_popular-city_id',
            'geobase_city_popular'
        );
        $this->dropIndex('idx-geobase_city_popular-city_id', 'geobase_city_popular');
        $this->createIndex(
            'idx-geobase_city_popular-city_id',
            'geobase_city_popular',
            'city_id',
            true
        );
        $this->addForeignKey(
            'fk-geobase_city_popular-city_id',
            'geobase_city_popular',
            'city_id',
            'geobase_city',
            'id',
            'CASCADE',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180724_052423_city_index_change_to_unique_index cannot be reverted.\n";
        $this->dropForeignKey(
            'fk-geobase_city_popular-city_id',
            'geobase_city_popular'
        );
        $this->dropIndex('idx-geobase_city_popular-city_id', 'geobase_city_popular');
        $this->createIndex('idx-geobase_city_popular-city_id', 'geobase_city_popular', 'city_id');
        // add foreign key for table `geobase_city`
        $this->addForeignKey(
            'fk-geobase_city_popular-city_id',
            'geobase_city_popular',
            'city_id',
            'geobase_city',
            'id',
            'CASCADE',
            'CASCADE'
        );
        return true;
    }
}
