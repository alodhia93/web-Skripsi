<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifikasiEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $nama;
    public $verifikasi;
    public function __construct($nama, $verifikasi)
    {
        $this->nama = $nama;
        $this->verifikasi = $verifikasi;  
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if ($this->verifikasi == 1) {
            return $this->from('unsricdc6@gmail.com')
                   ->view('verif/berhasil')
                   ->with(
                    [
                        'nama' => $this->nama,
                    ]);
        }else if ($this->verifikasi == 0){
            return $this->from('unsricdc6@gmail.com')
                   ->view('verif/gagal')
                   ->with(
                    [
                        'nama' => $this->nama,
                    ]);
        }else {
            return $this->from('unsricdc6@gmail.com')
                   ->view('verif/dihapus')
                   ->with(
                    [
                        'nama' => $this->nama,
                    ]);
        }
        
    }
}
