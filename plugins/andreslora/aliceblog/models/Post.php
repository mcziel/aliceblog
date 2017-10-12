<?php namespace AndresLora\AliceBlog\Models;

use Model;
use BackendAuth;
use str;
/**
 * Model
 */
class Post extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /*
     * Validation
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'andreslora_aliceblog_posts';

    public $attachOne = ['featured_image' => 'System\Models\File'];

    public $belongsToMany = ['categories' => 'AndresLora\AliceBlog\Models\Category'];

    public function listStatus ($keyValue=null, $fieldName=null) 
    {
        return ['Publicado' => 'Publicado', 'Sin Publicar' => 'Sin Publicar'];
    }

    public function beforeSave()
    {
        $user = BackendAuth::getUser();
        $this->user = $user->first_name . " " . $user->last_name;
        $this->url = Str::slug($this->title);
    }

}