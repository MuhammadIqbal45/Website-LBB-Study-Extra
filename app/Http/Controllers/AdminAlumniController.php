<?php

namespace App\Http\Controllers;

use App\Alumni;
use Illuminate\Http\Request;

class AdminAlumniController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request->has('search')) {
            $tambahalumnis = Alumni::where('nama_siswa', 'LIKE', '%' . $request->search . '%')->sortable()->paginate(15)->onEachSide(2)->fragment('admin-alumni');
        } else {
            $tambahalumnis = Alumni::sortable()->paginate(15)->onEachSide(2)->fragment('admin-alumni');
        }

        return view('admins.admin_alumni', compact('tambahalumnis'));
    }

    public function create()
    {
        return view('admins.admin_alumni_tambah');
    }

    public function store(Request $request)
    {
        $nm = $request->foto_siswa;
        $namaFile = time() . rand(100, 999) . "." . $nm->getClientOriginalName();

        $data = new Alumni();
        $data->nama_siswa = $request->nama_siswa;
        $data->email_siswa = $request->email_siswa;
        $data->jenis_kelamin_siswa = $request->jenis_kelamin_siswa;
        $data->ttl_siswa = $request->ttl_siswa;
        $data->foto_siswa = $namaFile;
        $data->no_hp_siswa = $request->no_hp_siswa;
        $data->alamat_lengkap_rumah_siswa = $request->alamat_lengkap_rumah_siswa;
        $data->nama_sekolah_siswa = $request->nama_sekolah_siswa;
        $data->jenjang = $request->jenjang;
        $data->paket = $request->paket;
        $data->pengalaman = $request->pengalaman;

        $nm->move(public_path() . '/img/alumni', $namaFile);
        $data->save();

        // Alumni::create([
        //     'nama_siswa' => $request->nama_siswa,
        //     'email_siswa' => $request->email_siswa,
        //     'jenis_kelamin_siswa' => $request->jenis_kelamin_siswa,
        //     'no_hp_siswa' => $request->no_hp_siswa,
        //     'foto_siswa' => $request->foto_siswa,
        //     'alamat_lengkap_rumah_siswa' => $request->alamat_lengkap_rumah_siswa,
        //     'nama_sekolah_siswa' => $request->nama_sekolah_siswa,
        //     'jenjang' => $request->jenjang,
        //     'paket' => $request->paket,
        // ]);

        return redirect('admin-alumni')->with('success', 'Alumni Berhasil Ditambah');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $edt = Alumni::findOrFail($id);
        return view('admins.admin_alumni_edit', compact('edt'));
    }

    public function update(Request $request, $id)
    {
        $ubah = Alumni::findOrFail($id);
        $awal = $ubah->foto_siswa;

        $edt = [
            'nama_siswa' => $request['nama_siswa'],
            'email_siswa' => $request['email_siswa'],
            'jenis_kelamin_siswa' => $request['jenis_kelamin_siswa'],
            'no_hp_siswa' => $request['no_hp_siswa'],
            'ttl_siswa' => $request['ttl_siswa'],
            'foto_siswa' => $awal,
            'alamat_lengkap_rumah_siswa' => $request['alamat_lengkap_rumah_siswa'],
            'nama_sekolah_siswa' => $request['nama_sekolah_siswa'],
            'jenjang' => $request['jenjang'],
            'paket' => $request['paket'],
            'pengalaman' => $request['pengalaman'],
        ];

        $request->foto_siswa->move(public_path() . '/img/alumni', $awal);
        $ubah->update($edt);

        // $edt = Alumni::findOrFail($id);
        // $edt->update($request->all());
        return redirect('admin-alumni')->with('success', 'Alumni Berhasil Diedit');
    }

    public function destroy($id)
    {
        $hapus = Alumni::findOrFail($id);

        $file = public_path('/img/alumni/') . $hapus->foto_siswa;

        if (file_exists($file)) {
            @unlink($file);
        }

        $hapus->delete();

        // $edt = Alumni::findOrFail($id);
        // $edt->delete();
        return back()->with('success', 'Alumni Berhasil Dihapus');
    }
}
