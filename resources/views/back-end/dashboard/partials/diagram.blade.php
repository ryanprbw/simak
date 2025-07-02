<div class="max-w-full mx-auto sm:px-6 lg:px-8">
    <div class="bg-white  dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div
            class="p-6 mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white text-center uppercase">
            {{ __('Capaian Kinerja Disdukcapil Kabupaten Tapin Tahun 2024') }}
        </div>
    </div>

    {{-- diagram --}}

    <div class="max-w-full w-full bg-gray-300 rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
        <div id="column-chart">
        </div>

    </div>

</div>

<script>
    const options = {
        colors: ["#1A56DB", "#FDBA8C"],
        series: [{
                name: "Target",
                color: "#1A56DB",
                data: [],
            },
            {
                name: "Realisasi",
                color: "#008528",
                data: [],
            },
        ],
        chart: {
            type: "bar",
            height: "320px",
            fontFamily: "Inter, sans-serif",
            toolbar: {
                show: false,
            },
        },
        plotOptions: {
            bar: {
                horizontal: false,
                columnWidth: "70%",
                borderRadiusApplication: "end",
                borderRadius: 8,
            },
        },
        tooltip: {
            shared: true,
            intersect: false,
            style: {
                fontFamily: "Inter, sans-serif",
            },
        },
        states: {
            hover: {
                filter: {
                    type: "darken",
                    value: 1,
                },
            },
        },
        stroke: {
            show: true,
            width: 0,
            colors: ["transparent"],
        },
        grid: {
            show: false,
            strokeDashArray: 4,
            padding: {
                left: 2,
                right: 2,
                top: -14
            },
        },
        dataLabels: {
            enabled: true,
            style: {


            }
        },
        legend: {
            show: true,
        },
        xaxis: {
            floating: false,
            labels: {
                show: true,
                style: {
                    fontFamily: "Inter, sans-serif",
                    cssClass: 'text-xs font-normal fill-gray-800 dark:fill-gray-400'
                }
            },
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false,
            },
        },
        yaxis: {
            show: false,
        },
        fill: {
            opacity: 1,
        },
    }

    if (document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
        // Buat grafik menggunakan ApexCharts
        const chart = new ApexCharts(document.getElementById("column-chart"), options);

        // Inisialisasi data
        const targetData = [];
        const realisasiData = [];

        // Loop untuk mengumpulkan data dari variabel PHP
        @foreach ($kinerjaUtamas as $ku)
            @foreach ($ku->indikatorKinerjas as $indikator)
                targetData.push({
                    x: "{{ $indikator->indikator_kinerja }}",
                    y: {{ $indikator->target }}
                });
                realisasiData.push({
                    x: "{{ $indikator->indikator_kinerja }}",
                    y: {{ $indikator->realisasi }}
                });
            @endforeach

            @empty($ku->indikatorKinerjas)
                <
                p class = "text-gray-600 dark:text-gray-400" > Data tidak tersedia. < /p>
            @endempty
        @endforeach

        // Mengatur data di dalam options
        options.series[0].data = targetData;
        options.series[1].data = realisasiData;

        // Render grafik
        chart.render();
    }
</script>

{{-- <script>
    const options = {
        // Konfigurasi grafik
    };

    // Periksa apakah elemen HTML yang diperlukan ada dan ApexCharts tersedia
    if (document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
        // Buat grafik menggunakan ApexCharts
        const chart = new ApexCharts(document.getElementById("column-chart"), options);

        // Inisialisasi data
        const targetData = [];
        const realisasiData = [];

        // Loop untuk mengumpulkan data dari variabel PHP
        @foreach ($kinerjaUtamas as $ku)
            @foreach ($ku->indikatorKinerjas as $indikator)
                targetData.push({ x: "{{ $indikator->indikator_kinerja }}", y: {{ $indikator->target }} });
                realisasiData.push({ x: "{{ $indikator->indikator_kinerja }}", y: {{ $indikator->realisasi }} });
            @endforeach
        @endforeach

        // Mengatur data di dalam options
        options.series[0].data = targetData;
        options.series[1].data = realisasiData;

        // Render grafik
        chart.render();
    }
</script> --}}