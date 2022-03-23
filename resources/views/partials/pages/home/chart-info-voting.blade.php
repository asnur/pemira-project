<section class="section bg-white" id="count">
    <div class="container">
        <div class="row">
            <!---- @START__DAFTAR_MAHASISWA_TEREGISTRASI_ATAU_TIDAK --->
            <div class="col-lg-8">
                <div data-aos="fade-down" class="d-flex justfiy-content-center align-items-center">
                    <canvas id="chartRegisterUsers" role="img"
                        aria-label="data mahasiswa sudah teregistrasi dan tidak"></canvas>
                </div>
            </div>

            @push('scripts')
                <script>
                    axios.get('/api/countRegis').then((response) => {
                        // index untuk angkatan
                        const users2018 = 1;
                        const users2019 = 2;
                        const users2020 = 3;
                        const users2021 = 4;

                        console.log({
                            countRegis: response
                        });

                        const registeredUsers = response.data.data.regis;
                        const unregisteredUsers = response.data.data.no_regis;
                        console.log({
                            registeredUsers
                        })

                        // untuk cek apakah value user tahun === index user tahun dan jika salah beri default value 0
                        const validateRegisteredUserYear = (year, index) => {
                            if (registeredUsers[index] === undefined) return 0;
                            if (registeredUsers[index].tahun === year) return registeredUsers[index].jumlah;
                        };

                        const chartRegisterUsers = new Chart(document.getElementById('chartRegisterUsers'), {
                            type: 'bar',
                            data: {
                                labels: [
                                    2018, 2019, 2020, 2021
                                ],
                                datasets: [{
                                        label: 'Telah Teregistrasi',
                                        backgroundColor: [
                                            'rgba(54, 162, 235, 1)',
                                        ],
                                        data: [
                                            validateRegisteredUserYear(2018, 0),
                                            validateRegisteredUserYear(2019, 1),
                                            validateRegisteredUserYear(2020, 2),
                                            validateRegisteredUserYear(2021, 3),
                                        ],
                                    },
                                    {
                                        label: 'Belum Teregistrasi',
                                        backgroundColor: ['rgba(54, 162, 235, 0.5)'],
                                        data: [
                                            unregisteredUsers[0].jumlah,
                                            unregisteredUsers[1].jumlah,
                                            unregisteredUsers[3].jumlah,
                                            unregisteredUsers[4].jumlah,
                                        ],
                                    },
                                ],
                            },
                            options: {
                                plugins: {
                                    title: {
                                        display: true,
                                        text: 'Data Mahasiswa yang Melakukan Registrasi'
                                    }
                                }
                            }
                        });
                    });
                </script>
            @endpush
            <!---- @END__DAFTAR_MAHASISWA_TEREGISTRASI_ATAU_TIDAK --->

            <!---- @START__LIVE_COUNTING --->
            <div class="col-lg-4">
                <div data-aos="fade-down" class="d-flex justify-content-center align-items-center mb-5">
                    <canvas id="chartVotingSementara" aria-label="chart voting sementara"></canvas>
                </div>
            </div>

            @push('scripts')
                <script>
                    axios.get('/api/countVoting').then((response) => {
                        console.log({
                            countVoting: response.data.data
                        });
                        const kandidat = response.data.data;
                        let data = kandidat.length == 0 ? [0, 0] : [kandidat[0].jumlah_suara, kandidat[1].jumlah_suara];
                        const chartVotingSementara = new Chart(document.getElementById('chartVotingSementara'), {
                            type: 'doughnut',
                            data: {
                                labels: [
                                    'Khairul dan Ammar',
                                    'Kotak Kosong',
                                ],
                                datasets: [{
                                    label: 'Hasil Vote',
                                    data: data,
                                    backgroundColor: [
                                        'rgb(255, 99, 132)',
                                        'rgb(54, 162, 235)',
                                    ],
                                    hoverOffset: 4
                                }]
                            },
                            options: {
                                plugins: {
                                    title: {
                                        display: true,
                                        text: 'Data Jumlah Suara Masuk'
                                    },
                                },
                            },
                        });
                    });
                </script>
            @endpush
            <!---- @END__LIVE_COUNTING ---->
        </div>
    </div>
</section>
