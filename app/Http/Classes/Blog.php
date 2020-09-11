<?php
namespace App\Http\Classes;

use App\Blog as AppBlog;
use App\Http\Interfaces\BlogInterface;

class Blog implements BlogInterface {

    protected $title;
    protected $slug;
    protected $data;
    protected $file_id;
    protected $content;
    protected $comment_id;

    public function __construct()
    {
        
    }

    public function setTitle($title){
        $this->title = $title;
        return $this;

    }

    public function setSlug($slug){
        $this->slug = $slug;
        return $this;
    }

    public function setData($data){
        $this->data = $data;
        return $this;
    }

    public function setFileId($file_id){
        $this->file_id = $file_id;
        return $this;
    }

    public function setContent($content){
        $this->content = $content;
        return $this;
    }

    public function setCommentId($comment_id){
        $this->comment_id = $comment_id;
        return $this;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getSlug(){
        return $this->slug;
    }

    public function getContent(){
        return $this->content;
    }
    public function getData(){

        return $this->data;
    }

    public function save(){
        AppBlog::create($this->getData());
    }
}