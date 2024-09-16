@extends('layouts.index')

@section('content')

<div class="content">              
    <div class="content-body">                    
                <div class="bg-body-light">
                    <div class="content content-full py-5">
                        <div class="pb-4 text-center">
                            <h3 class="fw-bold mb-3">Tentang DEVCEKSTORE</h3>
                            <div class="row g-0 justify-content-center">
                                <div class="col-lg-10">
                                    <p class="fs-md mb-0">
                                     dev.cekstore.com Top up Free Fire, Arena of Valor, Call of Duty Mobile dan berbagai game lainnya menggunakan Indomaret, Telkomsel, DANA, ShopeePay, QRIS dan Garema Shell Di Indonesia yang Tercepat, Termurah dan Terpercaya.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mx-2">
                            <div class="col-md-6 mt-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 item item-rounded bg-xeco text-white fw-semibold me-4">
                                        <i class="fab fa-2x fa-whatsapp"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h4 class="mb-1">Resi WhatsApp</h4>
                                        <p class="mb-0">
                                            Jika diperlukan Anda dapat meminta resi pembelian yang akan dikirim ke WhatsApp Anda.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 item item-rounded bg-xwork text-white fw-semibold me-4">
                                        <i class="fa fad fa-2x fa-wallet"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h4 class="mb-1">Metode pembayaran populer</h4>
                                        <p class="mb-0">
                                            Kami menawarkan pilihan pembayaran QRIS, eWallet dan Transfer Bank.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 item item-rounded bg-warning text-white fw-semibold me-4">
                                        <i class="fa fad fa-2x fa-bolt"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h4 class="mb-1">Pembayaran Realtime</h4>
                                        <p class="mb-0">
                                            Hanya dibutuhkan beberapa detik saja untuk menyelesaikan pembayaran.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 item item-rounded bg-xmodern text-white fw-semibold me-4">
                                        <i class="fa fad fa-2x fa-mouse-pointer"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h4 class="mb-1">Pengoperasian yang mudah</h4>
                                        <p class="mb-0">
                                            Situs kami berfungsi dengan baik dan tampilan yang nyaman serta mudah untuk digunakan.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-4">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 item item-rounded bg-xdream text-white fw-semibold me-4">
                                        <i class="fa fad fa-2x fa-shipping-fast"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h4 class="mb-1">Proses pengiriman seketika</h4>
                                        <p class="mb-0">
                                            Setelah pembayaran selesai, produk akan kami kirim secepat mungkin.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-4 ">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 item item-rounded bg-xsmooth text-white fw-semibold me-4">
                                        <i class="fa fad fa-2x fa-headset"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h4 class="mb-1">Layanan Pelanggan</h4>
                                        <p class="mb-0">
                                            Tim support kami siap membantu Anda dengan tanggapan secepatnya.
                                        </p>
                                    </div>
                                </div>
                            </div>
                           
        
                                     <div class="mt-5 block block-rounded block-transparent bg-body" style="border-radius:10px;">
                            <div class="block-content block-content-full">
                                <div class="row justify-content-sm-between align-items-center p-3">
                                    <div class="col-sm-6">
                                       <h4 class="mb-2" style="color: #212121;">
                                            Mendaftarkan Akun
                                        </h4>
                                        <p class="text-muted mb-sm-0">
                                            Yuk gabung! untuk melihat catatan transaksi kamu serta memberi ulasan pada produk yang telah kamu beli.
                                        </p>
                                    </div>
                                    <div class="col-sm-6 text-sm-end">
                <a class="btn btn-hero btn-primary px-4 py-2" href="https://dev.cekstore.com/register">
                     Buat Akun Baru
                    <i class="fa fa-fw fa-arrow-right opacity-50 ms-1"></i>
                </a>
            </div>
     
                                </div>
                            </div>
                        </div>
                        </div>
    
                       
                    </div>
                </div>
    
    
                        <!--tambahan pop up-->
             <!--  Modal content for the above example -->
                         <div class="content">
        <div class="modal fade animated bounceIn" id="popup" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-white-custom txt-white">
                    <h5 class="modal-title" style="color:#fff">
                        <i class="fa fa-bullhorn" aria-hidden="true"></i> Informasi
                    </h5>
                    <button type="button" class="btn-closex color-white " data-bs-dismiss="modal" aria-label="Close" onclick="disablePopup()"></button>
                </div>
                <div class="modal-body bg-payment">
                    <!--<img src="#" class="img-fluid justify-content-center shadow mb-3" style="width: 100%; height: auto; border-radius: 5px;" alt="Entershoply">-->
                    <img src='/assets/banner/popup.png' width="100%" class="img-fluid">
                    <br><br />
                    <p style="color:#000000">Hallo Pelanggan <b class="color-notif">DEVCEKSTORE</b>
                    </p>
                    <h6 class="center fw-16" style="color:#000000">Save Kode Invoice! Berguna untuk cek status order di riwayat pesanan. Pastikan cek akun terlebih dahulu, sebelum melapor ^^
    <div class="container"></h6>
                </div>
                
                  <div class="mb-1 row">
                        <div class="col-6 mt-2 c-padding">
                            <input type="checkbox" class="form-check-input" id="dontShow">&nbsp;
                            <label class="form-check-label text-danger" for="customCheck1">Don't show again</label> 
                        </div>
                        <div class="modal-enternity bg-payment col-6 mt-1">
                            <button type="button" class="btn btn-sm btn-danger float-end" data-bs-dismiss="modal" onclick="disablePopup()">Accept</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</div>