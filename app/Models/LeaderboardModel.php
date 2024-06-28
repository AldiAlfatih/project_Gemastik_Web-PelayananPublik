<?php 

namespace App\Models;

use CodeIgniter\Model;

class LeaderboardModel extends Model
{
    protected $table = 'leaderboard';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'poin'];

    public function getLeaderboard($userId)
        {
            return $this->select('leaderboard*, akun.username')
                ->join('akun', 'leaderboard.id = akun.leaderboard_id')
                ->where('akun.id', $userId)
                ->groupBy('leaderboard.id')
                ->findAll();
        }
}

?>