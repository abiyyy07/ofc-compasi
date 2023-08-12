@extends('admin.layout')
@section('title', 'XI - Post Static')

@section('content')
<div class="card-static">
    <div class="card-static-content">
        <div class="card-static-content-post">
            <div class="posts">
                <p>TOTAL POSTINGAN</p>
                <h2>{{ $posts }}</h2>
            </div>
        </div>
        <div class="card-static-content-gallery">
            <div class="gallery">
                <p>TOTAL GALLERY</p>
                <h2>{{ $photos }}</h2>
            </div>
        </div>
        <div class="card-static-content-users">
            <div class="users">
                <p>JUMLAH PENGGUNA</p>
                <h2>{{ $users }}</h2>
            </div>
        </div>
        <div class="card-static-content-achievements">
            <div class="achievements">
                <p>JUMLAH ACHIEVEMENTS</p>
                <h2>{{ $achievements }}</h2>
            </div>
        </div>
    </div>
</div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<figure class="highcharts-figure">
    <div id="container"></div>
</figure>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Table Data',
        align: 'left'
    },
    subtitle: {
        text: 'Input from Database',
        align: 'left'
    },
    xAxis: {
        categories: ['POST', 'GALLERY', 'USER', 'ACHIEVEMENT'],
        crosshair: true,
        accessibility: {
            description: 'Data'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Jumlah Data'
        }
    },
    tooltip: {
        valueSuffix: ' '
    },
    plotOptions: {
        column: {
            pointPadding: 0.1,
            borderWidth: 0
        }
    },
    series: [
        {
            name: 'Data',
            data: [{{ $posts }}, {{ $photos }}, {{ $users }}, {{ $achievements }}]
        },
    ]
});
</script>
@endsection