@extends('layouts.dashboard_layout')


@section('content')
    <div class="col-md-12">
        <div class="white-box">
            <!-- row -->
            <div class="row">
                <div class="col-lg-2 col-md-3  col-sm-12 col-xs-12 inbox-panel">
                    <div>
                        <a href="#" class="btn btn-custom btn-block waves-effect waves-light">Inbox</a>
                        <div class="list-group mail-list m-t-20">

                            <a href="#" class="list-group-item active">
                                Read
                                <span class="label label-rouded label-success pull-right">
                                        {{$read}}
                                    </span>
                            </a>
                            <a href="#" class="list-group-item">
                                Unread
                                <span class="label label-rouded label-warning pull-right">
                                        {{$unread}}
                                    </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 col-md-9 col-sm-12 col-xs-12 mail_listing">
                    <table id="messagesTable" class="display responsive nowrap" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th class="text-center">Sender</th>
                            <th class="text-center">Subject</th>
                            <th class="text-center">Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($messages as $message)

                            <tr
                                    @if($message->read)
                                    class="read"
                                    @else
                                    class="unread"
                                    @endif
                            >
                                <td class="text-center">{{$message->sender}}</td>
                                <td class="max-texts text-center"><a
                                            href="{{url('inboxDetail/'.$message->id)}}"/>
                                    @if(!$message->read)
                                        <span class="label label-success m-r-10">New</span>
                                    @endif
                                    {{$message->subject}}
                                </td>
                                <td class="text-center">
                                    {{ date_format(new DateTime($message->created_at),'d M')}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.row -->

        </div>
    </div>

@endsection


@section('js')
    <script src="{{asset('dashboard/node_modules/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="https://cdn.datatables.net/responsive/1.0.7/js/dataTables.responsive.min.js"></script>


    <script>

        $('#messagesTable').DataTable({
            @if(app()->getLocale()=='ar')
            "language": {
                "sProcessing": "جارٍ التحميل...",
                "sLengthMenu": "أظهر _MENU_ مدخلات",
                "sZeroRecords": "لم يعثر على أية سجلات",
                "sInfo": "إظهار _START_ إلى _END_ من أصل _TOTAL_ مدخل",
                "sInfoEmpty": "يعرض 0 إلى 0 من أصل 0 سجل",
                "sInfoFiltered": "(منتقاة من مجموع _MAX_ مُدخل)",
                "sInfoPostFix": "",
                "sSearch": "ابحث:",
                "sUrl": "",
                "oPaginate": {
                    "sFirst": "الأول",
                    "sPrevious": "السابق",
                    "sNext": "التالي",
                    "sLast": "الأخير"
                }
            }
            @endif
        });
    </script>
@endsection

@section('css')

    <link href="{{asset('dashboard/node_modules/datatables/jquery.dataTables.min.css')}}"
          rel="stylesheet"
          type="text/css"/>
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="https://cdn.datatables.net/responsive/1.0.7/css/responsive.dataTables.min.css" rel="stylesheet"
          type="text/css"/>
@endsection