@include("layout.head")

<div class="log_container">
        
    <div class="container">
        <h1>Log Activity Lists</h1>
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Subject</th>
                <th>URL</th>
                <th>Method</th>
                <th>Ip</th>
                <th width="300px">User Agent</th>
                <th>username</th>
            </tr>

                @foreach($logs as $key => $log)
                <tr>
                    <td>{{ $key }}</td>
                    <td>{{ $log->subject }}</td>
                    <td class="text-success">{{ $log->url }}</td>
                    <td><label class="label label-info">{{ $log->method }}</label></td>
                    <td class="text-warning">{{ $log->IP }}</td>
                    <td class="text-danger">{{ $log->agent }}</td>
                    <td>{{ $log->username }}</td>
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
