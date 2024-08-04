<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Col -->
    <div>
        <h1 class="text-3xl text-center font-bold text-gray-800 sm:text-4xl lg:text-5xl lg:leading-tight">
            بسم الله الرحمن الرحيم
        </h1>
        <p class="mt-5 text-center md:text-lg text-gray-800">
            Dengan ini saya mendaftarkan diri untuk mengikuti Tabungan Qurban yang dikelola oleh <span
                class="text-blue-600">Purbalingga Farm</span>
        </p>

        <div class="mt-8">
            <h2 class="text-lg font-semibold text-gray-800">
                Ketentuan
            </h2>

            <ol class="list-decimal list-inside mt-2 space-y-2">
                <li class="space-x-3">
                    <span class="text-gray-600">
                        Siap mengikuti ketentuan yang berlaku
                    </span>
                </li>

                <li class="space-x-3">
                    <span class="text-gray-600">
                        Jangka waktu pelaksanaan tabungan dimulai per 1 Agustus 2024 s/d 30 Juni 2025
                    </span>
                </li>

                <li class="space-x-3">
                    <span class="text-gray-600">
                        Peserta berkenan mendapat pesan reminder/pengingat setiap bulannya untuk proses setoran
                        tabungan dari pihak Purbalingga Farm
                    </span>
                </li>

                <li class="space-x-3">
                    <span class="text-gray-600">
                        Peserta diberi kesempatan jika ditengah jalan ingin merubah tipe hewan kurban yang
                        proses pembayaran dan besaran harganya dikomunikasikan lebih lanjut oleh para pihak
                    </span>
                </li>

                <li class="space-x-3">
                    <span class="text-gray-600">
                        Peserta yang tidak dapat melanjutkan program tabungan kurban dapat mencairkan simpanan
                        tabungannya setelah periode program ini berakhir/maksimal H+7 Idul Adha 1446 H
                    </span>
                </li>
            </ol>
        </div>
    </div>
    <!-- End Col -->

    <!-- Col -->
    <div class="relative mt-10">
        <!-- Card -->
        <div class="flex flex-col border rounded-xl p-4 sm:p-6 lg:p-10" id="daftar">
            <h2 class="text-xl font-semibold text-gray-800">
                Form Pendaftaran
            </h2>

            <form action="{{ route('daftar.perform') }}" method="POST">
                @csrf
                <div class="mt-6 grid gap-4 lg:gap-6">
                    <div>
                        <label for="nama" class="block mb-2 text-sm text-gray-700 font-medium">Nama</label>
                        <input type="text" name="nama" autocomplete="off"
                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                        @error('nama')
                            <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <label for="alamat" class="block mb-2 text-sm text-gray-700 font-medium">Alamat</label>
                        <input type="text" name="alamat" autocomplete="off"
                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                        @error('alamat')
                            <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <!-- Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                        <div>
                            <label for="nomor" class="block mb-2 text-sm text-gray-700 font-medium">Nomor
                                Telepon</label>
                            <input type="number" name="no_hp" autocomplete="off"
                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                            @error('no_hp')
                                <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="block mb-2 text-sm text-gray-700 font-medium">Email</label>
                            <input type="email" name="email" autocomplete="off"
                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                            @error('email')
                                <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>
                    <!-- End Grid -->
                    <div class="relative">
                        <label for="jenis" class="block mb-2 text-sm text-gray-700 font-medium">Jenis Hewan
                            Qurban</label>
                        <select
                            data-hs-select='{
                                "placeholder": "Pilih Opsi...",
                                "toggleTag": "<button type=\"button\"></button>",
                                "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:border-blue-500 focus:ring-blue-500 before:absolute before:inset-0 before:z-[1]",
                                "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto",
                                "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100",
                                "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"flex-shrink-0 size-3.5 text-blue-600 dark:text-blue-500\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>"
                            }'
                            class="hidden" name="jenis_harga" id="jenisHewanQurban">
                            <option value="">Choose</option>
                            <option value="2500000">Tipe A (28 - 30 Kg) Rp 2.500.000</option>
                            <option value="2800000">Tipe B (31 - 34 Kg) Rp 2.800.000</option>
                            <option value="3300000">Tipe C (35 - 38 Kg) Rp 3.300.000</option>
                            <option value="3700000">Tipe D (39 - 41 Kg) Rp 3.700.000</option>
                        </select>
                        @error('jenis_harga')
                            <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="relative">
                        <label for="jenis" class="block mb-2 text-sm text-gray-700 font-medium">Jangka Waktu
                            Tabungan</label>
                        <select
                            data-hs-select='{
                                "placeholder": "Pilih Opsi...",
                                "toggleTag": "<button type=\"button\"></button>",
                                "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 px-4 pe-9 flex text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:border-blue-500 focus:ring-blue-500 before:absolute before:inset-0 before:z-[1]",
                                "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto",
                                "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100",
                                "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"flex-shrink-0 size-3.5 text-blue-600 dark:text-blue-500\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>"
                            }'
                            class="hidden" name="jangka_waktu" id="jangkaWaktu">
                            <option value="">Choose</option>
                            <option value="9">9 Bulan</option>
                            <option value="6">6 Bulan</option>
                            <option value="3">3 Bulan</option>
                        </select>
                        @error('jangka_waktu')
                            <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <label for="besar_tabungan" class="block mb-2 text-sm text-gray-700 font-medium">Besar
                            Tabungan/bln</label>
                        <!-- Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                            <input type="text" name="besar_tabungan" readonly id="besar_tabungan" autocomplete="off"
                                value=""
                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-60 disabled:pointer-events-none">
                            <input type="text" name="besar_tabungan" autocomplete="off" id="moneyInput"
                                value="" placeholder="Opsional besar tabungan/bulan"
                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                        </div>
                        <!-- End Grid -->
                        @error('besar_tabungan')
                            <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <label for="tanggal-pembayaran"
                            class="block mb-2 text-sm text-gray-700 font-medium">Pembayaran
                            Akan
                            Dilaksanakan Setiap Tanggal</label>
                        <input type="number" name="tanggal_pembayaran" autocomplete="off"
                            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                        @error('tanggal_pembayaran')
                            <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <label for="transfer-pembayaran"
                            class="block mb-2 text-sm text-gray-700 font-medium">Pembayaran
                            Via
                            Transfer</label>
                        <!-- Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-4 gap-4 lg:gap-6">
                            <div class="flex flex-col bg-white border rounded-lg p-4 md:p-5">
                                <h3 class="text-lg font-bold text-gray-800">
                                    BSI
                                </h3>
                                <p class="mt-1 text-xs font-medium uppercase text-gray-500">
                                    561576672689
                                </p>
                            </div>

                            <div class="flex flex-col bg-white border rounded-lg p-4 md:p-5">
                                <h3 class="text-lg font-bold text-gray-800">
                                    BRI
                                </h3>
                                <p class="mt-1 text-xs font-medium uppercase text-gray-500">
                                    561576672689
                                </p>
                            </div>

                            <div class="flex flex-col bg-white border rounded-lg p-4 md:p-5">
                                <h3 class="text-lg font-bold text-gray-800">
                                    Mandiri
                                </h3>
                                <p class="mt-1 text-xs font-medium uppercase text-gray-500">
                                    561576672689
                                </p>
                            </div>

                            <div class="flex flex-col bg-white border rounded-lg p-4 md:p-5">
                                <h3 class="text-lg font-bold text-gray-800">
                                    BNI
                                </h3>
                                <p class="mt-1 text-xs font-medium uppercase text-gray-500">
                                    561576672689
                                </p>
                            </div>
                        </div>
                        <!-- End Grid -->
                    </div>

                    <div>
                        <label for="alamat-pengiriman" class="block mb-2 text-sm text-gray-700 font-medium">Hewan
                            Kurban akan dikirim/Titip Salur</label>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6">
                            <label for="alamat_pengiriman"
                                class="flex p-3 w-full bg-white border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
                                <input type="radio" name="alamat_pengiriman"
                                    class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                    id="alamat_pengiriman">
                                <span class="text-sm text-gray-500 ms-3">Akan Dikirim Ke (Sekitaran Banyumas Raya)</span>
                            </label>

                            <label for="alamat_pengiriman"
                                class="flex p-3 w-full bg-white border border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500">
                                <input type="radio" name="alamat_pengiriman"
                                    class="shrink-0 mt-0.5 border-gray-200 rounded-full text-blue-600 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                    id="hs-radio-checked-in-form" checked="">
                                <span class="text-sm text-gray-500 ms-3">Titip Salur via Purbalingga Farm ke Daerah
                                    Minim Kurban</span>
                            </label>

                            <input type="text" name="alamat_pengiriman" autocomplete="off"
                                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                id="input-alamat-pengiriman">
                        </div>
                        @error('alamat_pengiriman')
                            <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>
                <!-- Checkbox -->
                <div class="mt-3 flex">
                    <div class="flex">
                        <input id="remember-me" name="remember-me" type="checkbox"
                            class="shrink-0 mt-1.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500">
                    </div>
                    <div class="ms-3">
                        <label for="remember-me" class="text-sm text-gray-600">
                            Dengan mengirimkan formulir ini, saya
                            telah membaca dan menyetujui
                            <span class="text-blue-600 font-medium">
                                Ketentuan yang berlaku
                            </span>
                        </label>
                    </div>
                </div>
                <!-- End Checkbox -->

                <div class="mt-6 grid">
                    <button type="submit" id="submitButton"
                        class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                        Daftar Sekarang
                    </button>
                </div>
            </form>
            <!-- End Grid -->
        </div>
        <!-- End Card -->
    </div>
    <!-- End Col -->
</div>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const moneyInput = document.getElementById('moneyInput');
        const selectQurban = document.getElementById('jenisHewanQurban');
        const selectWaktu = document.getElementById('jangkaWaktu');
        const element = document.getElementById("besar_tabungan");
        let totalHarga = null;
        let totalWaktu = null;

        function updateBesarTabungan() {
            if (totalHarga && totalWaktu) {
                const besarTabungan = totalHarga / totalWaktu;
                const formattedTabungan = new Intl.NumberFormat('id-ID', {
                    style: 'currency',
                    currency: 'IDR',
                }).format(besarTabungan);
                element.setAttribute("value", formattedTabungan)
                element.value = formattedTabungan;
            } else {
                element.value = '';
            }
        }

        document.getElementById("submitButton").onclick = function() {
            if (moneyInput.value !== "") {
                element.readonly = false
                element.disabled = true
            } else {
                moneyInput.readonly = true
                moneyInput.disabled = true
                element.readonly = false
                element.disabled = false
            }
        }


        selectQurban.addEventListener('change', function() {
            if (this.value) {
                totalHarga = parseInt(this.value);
            } else {
                totalHarga = null;
            }
            updateBesarTabungan();
        });

        selectWaktu.addEventListener('change', function() {
            if (this.value) {
                totalWaktu = parseInt(this.value);
            } else {
                totalWaktu = null;
            }
            updateBesarTabungan();
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const moneyInput = document.getElementById('moneyInput');
        const element = document.getElementById("besar_tabungan");

        moneyInput.addEventListener('input', function(e) {
            let value = e.target.value;

            value = value.replace(/[^0-9,]/g, '');

            value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');

            if (value.length > 0) {
                value = 'Rp ' + value;
            }

            e.target.value = value;
        });

        moneyInput.addEventListener('blur', function(e) {
            let value = e.target.value;

            value = value.replace('Rp ', '');

            value = value.replace(/\./g, '');

            value = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');

            if (value.length > 0) {
                value = 'Rp ' + value;
            }

            if (moneyInput.value !== "") {
                element.readonly = false
                element.disabled = true
            } else {
                element.readonly = true
                element.disabled = false
            }
            e.target.value = value;
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const checkbox = document.getElementById('hs-checkbox-in-form');
        const alamatPengiriman = document.getElementById('input-alamat-pengiriman');

        checkbox.addEventListener('change', function() {
            if (checkbox.checked) {
                alamatPengiriman.disabled = true;
                alamatPengiriman.value = checkbox.value;
            } else {
                alamatPengiriman.disabled = false;
                alamatPengiriman.value = '';
            }
        });
    });
</script>
