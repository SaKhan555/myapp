<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = ['id']; // Here it will escape those values who are guarded mean these values cant be mass assigned.
    //    protected $fillable = ['title', 'excerpt', 'body']; //Here these values can be mass assigned.

    //Find post through slug in route model binding instead of id
    //public function getRouteKeyName()
    //{
    //    return 'slug';
    //}

    protected $with = ['category', 'author']; // Default Eager loading it will load category and author with every Post model data call
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::Class, 'user_id', 'id');
    }

    public function scopeFilter($query, array $filters)
    {

        $query->when(
            $filters['search'] ?? false,
            fn ($query, $search) =>
            $query->where(
                fn ($query) => $query
        ->where('title', 'like', '%' . $search . '%')
        ->orWhere('body', 'like', '%' . $search . '%')
            )
        );

        $query->when(
            $filters['category'] ?? false,
            fn ($query, $category) =>
            $query->whereHas('category', fn ($query) => $query->where('slug', $category))

            // ->whereExists(fn ($query) =>
            // $query->from('categories')
            //     ->whereColumn('categories.id', 'posts.category_id')
            //     ->where('categories.slug', $category))
        );
        $query->when(
            $filters['author'] ?? false,
            fn ($query, $author) =>
            $query->whereHas('author', fn ($query) => $query->where('username', $author))
        );
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
