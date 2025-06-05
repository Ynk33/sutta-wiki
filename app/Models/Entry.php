<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Entry extends Model
{
    use HasFactory;

    /**
    * The attributes that are mass assignable.
    *
    * @var list<string>
    */
    protected $fillable = [
        'name',
        'content',
        'description',
    ];

    /**
     * The other entries that are linked to this entry.
     */
    public function blue_links(): HasMany
    {
        return $this->hasMany(Entry::class, 'entry_links', 'entry_id', 'linked_entry_id');
    }

    /**
     * The entries that link to this entry.
     */
    public function referenced_by(): BelongsToMany
    {
        return $this->belongsToMany(Entry::class, 'entry_links', 'linked_entry_id', 'entry_id');
    }
}
