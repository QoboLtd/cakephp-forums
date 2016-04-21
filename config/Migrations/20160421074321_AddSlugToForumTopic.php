<?php
use Migrations\AbstractMigration;

class AddSlugToForumTopic extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('forum_topics');
        $table->addColumn('slug', 'string', ['after' => 'id']);
        $table->addIndex([
            'slug',
        ], [
            'name' => 'UNIQUE_SLUG',
            'unique' => true,
        ]);
        $table->update();
    }
}
