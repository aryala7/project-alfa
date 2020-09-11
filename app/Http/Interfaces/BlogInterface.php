<?php
namespace App\Http\Interfaces;

interface BlogInterface{
    public function setTitle(string $title);
    public function setSlug(string $slug);

    public function save();
}