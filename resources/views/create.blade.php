@extends('layouts.main')

@section('main.content')
    <section class="content-header">
        <h1>
            Create Request
            <small>Control panel</small>
        </h1>
    </section>
    <section class="content">
        <form method="post" action="{{ route('request_create_post') }}">
            <div class="row">
                <div class="col-sm-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Create Request</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label class="required" for="request_subject">Request Subject</label>
                                <input type="text" class="form-control" id="request_subject" name="subject" required>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="request_priority">Priority</label>
                                        <select class="form-control" id="request_priority" name="priority_id">
                                            @foreach($priorities as $priority)
                                                <option value="{{ $priority->id }}">{{ $priority->priority }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="required" for="request_deadline">Deadline</label>
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="request_deadline" name="deadline">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="required" for="request_location">Location</label>
                                        <select class="form-control" id="request_location" name="department_id">
                                            @foreach($departments as $department)
                                                <option value="{{ $department->id }}">{{ $department->department }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="request_relater">Relater</label>
                                        <select class="form-control select2" id="request_relater" name="relater" multiple="multiple" style="width:100%;">
                                            @foreach($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->fullname }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="request_content">Content</label>
                                <textarea id="request_content" name="content" class="form-control" style="height:300px"></textarea>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="pull-right">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-envelope-o"></i> Send
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection

@section('main.title') Create Request @endsection

@section('main.style')
    <style>
        div.form-group > label.required:after {
            content: " *";
            color: red;
        }
    </style>
@endsection

@section('main.script')
    <script>
        $(function () {
            $('#request_deadline').datepicker({autoclose: true})
            $('#request_relater').select2();
            $('#request_content').wysihtml5();
        });
    </script>
@endsection