<?php

namespace App\Controllers;

use App\Models\ReportImageModel;
use App\Models\LaporanModel;
use CodeIgniter\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $reportModel = new LaporanModel();
        $data['reports'] = $reportModel->getReports();

        // Tambahkan notifikasi jika ada laporan baru
        $newReports = $reportModel->getReports('menunggu');
        if (count($newReports) > 0) {
            session()->setFlashdata('notif', 'Ada laporan baru dari warga.');
        }

        return view('admin/home', $data);
    }

    public function view($id)
    {
        $reportModel = new LaporanModel();
        $reportImageModel = new ReportImageModel();

        $data['report'] = $reportModel->find($id);
        $data['images'] = $reportImageModel->getImagesByReportId($id);

        return view('admin/view', $data);
    }

    public function accept($id)
    {
        $reportModel = new LaporanModel();
        $reportModel->update($id, ['status_laporan' => 'diterima']);

        return redirect()->to('/admin');
    }

    public function reject($id)
    {
        $reportModel = new LaporanModel();
        $reportModel->update($id, ['status_laporan' => 'ditolak']);

        return redirect()->to('/admin');
    }
}
?>