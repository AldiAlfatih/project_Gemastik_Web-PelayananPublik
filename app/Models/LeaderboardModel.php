<?php 

namespace App\Models;

use CodeIgniter\Model;

class LeaderboardModel extends Model
{
    protected $table = 'leaderboard';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['username', 'poin'];
}

?>