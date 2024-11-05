<div class="main-content mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-header">Sessions</div>
                        
                                        <div class="card-body">
                                            <table class="table">
                                            <thead>
                                                <tr>
                                                <th scope="col">Agent</th>
                                                <th scope="col">IP</th>
                                                <th scope="col">Last Activity</th>
                                                <th scope="col">Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($sessions as $session)
                                                <tr>
                                                    <td>{{ $session->user_id }}</td>
                                                    <td>{{ $session->ip_address }}</td>
                                                    <td>{{ \Carbon\Carbon::createFromTimeStamp($session->last_activity)->diffForhumans() }}</td>
                                                    <td class="text-center">
                                                        <a href="/delete-session/{{$session->id}}" type="button" name="button" class="btn btn-danger delete-session" data-id="{{ $session->id }}">?️</button>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('js')
<script type="text/javascript">
$(".delete-session").click(function(){
    var id = $(this).data("id");
    var token = $("meta[name='csrf-token']").attr("content");
    $.ajax({
        url: "/delete-session",
        type: 'POST',
        data: {
            "id": id,
            "_token": token,
        },
        success: function (){
            location.reload();
        }
    });
});
</script>
@endsection