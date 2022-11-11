<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    use HasFactory;

    // Sitas reikalingas, nes Laravel nezino apie zodzio daugiskaita, kaip pvz model: Community tikisi rasti (Communites) duombazeje
    // Nurodoma kuri lentele turi veikti su modeliu model: Community
    
    protected $table = 'community_comments';

    protected $fillable = 
    [
        'name',
        'fav_console',
        'title',
        'message_content',
        'gender',
    ];
}
