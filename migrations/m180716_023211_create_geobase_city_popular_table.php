<?php

use yii\db\Migration;

/**
 * Handles the creation of table `geobase_city_popular`.
 * Has foreign keys to the tables:
 *
 * - `geobase_city`
 */
class m180716_023211_create_geobase_city_popular_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('geobase_city_popular', [
            'id' => $this->primaryKey(),
            'city_id' => $this->integer(6)->unsigned()->notNull(),
        ]);

        // creates index for column `city_id`
        $this->createIndex(
            'idx-geobase_city_popular-city_id',
            'geobase_city_popular',
            'city_id'
        );

        // add foreign key for table `geobase_city`
        $this->addForeignKey(
            'fk-geobase_city_popular-city_id',
            'geobase_city_popular',
            'city_id',
            'geobase_city',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `geobase_city`
        $this->dropForeignKey(
            'fk-geobase_city_popular-city_id',
            'geobase_city_popular'
        );

        // drops index for column `city_id`
        $this->dropIndex(
            'idx-geobase_city_popular-city_id',
            'geobase_city_popular'
        );

        $this->dropTable('geobase_city_popular');
    }
}
