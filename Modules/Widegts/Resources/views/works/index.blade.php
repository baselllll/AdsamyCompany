@extends('common::layouts.app')
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>works Table <small> all works </small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>

                        <div class="x_content">
                            <div class="table-responsive">
                                @if(Session::has('message'))
                                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                                @endif
                                <table id="myTable" class="table table-striped jambo_table bulk_action">
                                    <thead>
                                    <tr class="headings">
                                        <th class="column-title">ID </th>
                                        <th class="column-title">arabic name </th>
                                        <th class="column-title">english name </th>
                                        <th class="column-title">link </th>
                                        <th class="column-title">img </th>
                                        <th class="column-title">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($works as $row)
                                            <tr class="even pointer">
                                            <td class=" ">{{ $loop->iteration }}</td>
                                            <td class=" ">{{ $row->ar_name }}</td>
                                            <td class=" ">{{ $row->en_name }}</td>
                                            <td class=" ">{{ $row->link }}</td>
                                            <td class=" "><img class="img-thumbnail" width="100px" height="40px" src="/front/images/works/{{ $row->img }}"/></td>
                                            <td class=" ">
                                                <form action="#" method="post">
                                                    <a href="{{ route('works.edit',['id'=>$row->id]) }}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                                    <a data-id="" href="{{route('works.destroy',['id'=>$row->id]) }}" class="btn btn-danger btn-sm delete_works"><i class="fa fa-trash-o"></i></a>
                                                </form>
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

@endsection
