<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Category;
use App\Models\User;

class Post extends Model
{
    use HasFactory;

    protected $fillable =[
        'title',
        'category_id',
        'slug',
        'body',
        'excerpt'
    ];

    public function scopeFilter($query, array $filters)
    {
        //$posts = Post::latest();
        $query->when($filters['search'] ?? false, fn($query, $search) =>
            $query->where( fn($query) =>
                $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%')
            )
            );
        
        $query->when($filters['category'] ?? false, fn($query, $category) =>
            // $query
            //     ->whereExists( fn($query) => 
            //     $query->from('categories')
            //         ->whereColumn('categories.id', 'posts.category_id')
            //         ->where('categories.slug', $category))
            // );
            $query->whereHas('category', fn($query) =>
            $query->where('slug', $category)
            )
        );

        $query->when($filters['author'] ?? false, fn($query, $author) =>
            $query->whereHas('author', fn($query) =>
                $query->where('username', $author)
        )
        );

        $query->when($filters['searchauthor'] ?? false, fn($query, $author) =>
            $query->whereHas('user', fn($query) =>
                $query->where('name', $author)
        )
        );

        $query->when($filters['searchuser'] ?? false, fn($query, $search) =>
        $query->where( fn($query) =>
            $query->where('name', 'like', '%' . $search . '%')
            
        )
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
