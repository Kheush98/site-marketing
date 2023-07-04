<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Produit extends Model
{
    use HasFactory;

    public function admin(): BelongsTo
    {
        return $this->belongsTo(Admin::class);
    }

    public function paniers(): BelongsToMany
    {
        return $this->belongsToMany(Panier::class);
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'commandes');
    }
}
