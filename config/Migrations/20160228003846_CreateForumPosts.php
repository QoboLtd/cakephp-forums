<?php
use Migrations\AbstractMigration;

class CreateForumPosts extends AbstractMigration
{

    public $autoId = false;

    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('forum_posts');
        $table->addColumn('id', 'uuid', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('forum_id', 'uuid', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('topic_id', 'uuid', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('user_id', 'uuid', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('content', 'text', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('created', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'date', [
            'default' => null,
            'null' => false,
        ]);
        $table->addPrimaryKey([
            'id',
        ]);
        $table->addForeignKey('forum_id', 'forums', 'id');
        $table->addForeignKey('topic_id', 'forum_topics', 'id');
        $table->addForeignKey('user_id', 'users', 'id');
        $table->create();
    }
}
