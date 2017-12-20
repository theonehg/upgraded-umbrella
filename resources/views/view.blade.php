@extends('layouts.main')

@section('main.title') View Request @endsection

@section('main.style') @endsection

@section('main.script')
    <script>
        $(function () {
            $('#comment_content').wysihtml5();
        });
    </script>
@endsection

@section('main.content')
    <section class="content">
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Some kind of title goes here</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <strong>Created by:</strong>
                                <!-- User Here -->
                                <p>Mai Thanh Minh <small>(@thanhminhmr)</small></p>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <strong>Created at:</strong>
                                <!-- DateTime Here -->
                                <p>2017-12-19 09:00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <strong>Assigned to:</strong>
                                <!-- User Here -->
                                <p>Mai Thanh Minh <small>(@thanhminhmr)</small></p>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <strong>Deadline at:</strong>
                                <!-- DateTime Here -->
                                <p>2017-12-31 09:00</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <strong>Department:</strong>
                                <!-- Department Here -->
                                <p>Hanoi</p>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <strong>Team:</strong>
                                <!-- Team Here -->
                                <p>Team 2</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <strong>Priority:</strong>
                                <!-- Priority Here -->
                                <p>Critical</p>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <strong>Status:</strong>
                                <!-- Status Here -->
                                <p>New</p>
                            </div>
                        </div>
                    </div>
                </div>
                <strong>Relater(s):</strong>
                <!-- Relaters Here -->
                <p>Some One Name <small>(@someoneusername)</small>, Some One Else Name <small>(@someoneelseusername)</small></p>
            </div>
            <div class="box-footer">
                <!-- Content Here -->
                <p>some request content here</p>
            </div>
        </div>

        <div class="box box-primary">
            <div class="box-header with-border" data-widget="collapse">
                <h3 class="box-title">Some One Name <small>@someoneusername</small></h3>
                <div class="box-tools pull-right">
                    <small><i class="fa fa-clock-o"></i> 2017-12-31 09:00</small>
                    <button type="button" class="btn btn-box-tool"><i class="fa fa-minus"></i></button>
                </div>
            </div>
            <div class="box-body">
                <p>some comment content here</p>
            </div>
        </div>

        <div class="box box-primary">
            <div class="box-header with-border" data-widget="collapse">
                <h3 class="box-title">Some One Else Name <small>@someoneelseusername</small></h3>
                <div class="box-tools pull-right">
                    <small><i class="fa fa-clock-o"></i> 2017-12-31 09:00</small>
                    <button type="button" class="btn btn-box-tool"><i class="fa fa-minus"></i></button>
                </div>
            </div>
            <div class="box-body">
                <p>another comment content here</p>
            </div>
        </div>

        <form method="post" action="{{ route('request_comment_post') }}">
            <div class="box box-primary box-solid">
                <div class="box-header with-border" data-widget="collapse">
                    <h3 class="box-title">Write comment:</h3>
                    <div class="box-tools pull-right">
                        <small><i class="fa fa-clock-o"></i> 2017-12-31 09:00</small>
                        <button type="button" class="btn btn-box-tool"><i class="fa fa-minus"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <textarea id="comment_content" name="content" class="form-control" style="height:150px"></textarea>
                </div>
                <div class="box-footer">
                    <div class="pull-right">
                        <button type="submit" class="btn btn-primary">Comment</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
