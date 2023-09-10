<head>

@include("layout.head")
<link rel="icon" href="{{ url('/ADBlogo.png') }}">

</head>
<div class="log_container">
        
    <div class="container">
        <h1>Activity log</h1>
        <table class="table table-bordered">
            <tr>
                <th class="text-info">No</th>
                <th class="text-warning">Subject</th>
                <th class="text-success">URL</th>
                <th class="text-light">Methode</th>
                <th class="text-warning">IP</th>
                <th class="text-danger" width="300px">User agent</th>
                <th class="text-primary">Username</th>
            </tr>

                @foreach($logs as $key => $log)
                <tr>
                    <td class="text-info">{{ $key }}</td>
                    <td class="text-warning">{{ $log->subject }}</td>
                    <td class="text-success">{{ $log->url }}</td>
                    <td class="text-light">{{ $log->method }}</td>
                    <td class="text-warning">{{ $log->IP }}</td>
                    <td class="text-danger">{{ $log->agent }}</td>
                    <td class="text-primary">{{ $log->username }}</td>
                </tr>
                @endforeach
        </table>
    </div>
</div>

@include("layout.footer")

</body>
<style>
.log_container {
    padding-top: 7%;
    padding-bottom: 7%;
}
</style>
</html>
