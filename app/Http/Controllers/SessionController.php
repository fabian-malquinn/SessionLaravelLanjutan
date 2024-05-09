<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

class SessionController extends Controller
{
    public function index(Request $request)
    {
        echo '<ul>';
        echo '<li><a href=/buat-session>Buat Session</a></li>';
        echo '<li><a href=/akses-session>Akses Session</a></li>';
        echo '<li><a href=/hapus-session>Hapus Session</a></li>';
        echo '<li><a href=/flash-session>Flash Session</a></li>';
        echo '</ul>';
    }

    public function buatSession(Request $request)
    {
        session(['hakAkses' => 'admin' , 'nama' => 'Anto']);
        return "Session sudah dibuat";
    }

    public function aksesSession(Request $request)
    {
        //Menggunakan helper function
        echo session('hakAkses');
        echo session('nama');

        echo '<hr>';

        //Dari Request object
        echo $request->session()->get('hakAkses');
        echo $request->session()->get('nama');

        echo '<hr>';

        // Menggunakan facade session
        echo Session::get('hakAkses');
        echo Session::get('nama');
    }

    public function hapusSession(Request $request)
    {
        // Menghapus semua session menggunakan helper function
        session()->flush();

        // Menghapus semua session menggunakan Request object
        $request->session()->flush();

        // Menghapus semua session menggunakan facade Session
        Session::flush();

        echo "Semua session sudah dihapus";
    }

    public function flashSession(Request $request)
    {
        // Membuat 1 flash session menggunakan helper function
        session()->flash('hakAkses', 'admin');

        // Membuat 1 flash session menggunakan Request object
        $request->session()->flash('hakAkses', 'admin');

        // Membuat 1 flash session menggunakan facade Session
        Session::flash('hakAkses', 'admin');

        echo "Flash session hakAkses sudah dibuat";
    }
}