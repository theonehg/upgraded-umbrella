@extends('layouts.main')

@section('main.content')
    <form method="post" action="/abc">
        <div class="row">
            <div class="col-sm-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Request</h3>
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label class="required" for="request_subject">Request Subject</label>
                            <input type="email" class="form-control" id="request_subject" name="subject" required>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label for="request_priority">Priority</label>
                                    <select class="form-control" id="request_priority" name="priority_id">
                                        <option value="low">Low</option>
                                        <option value="normal" selected>Normal</option>
                                        <option value="high">High</option>
                                        <option value="critical">Critical</option>
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
                                    <select class="form-control" id="request_location" name="location">
                                        <option value="hanoi">Hanoi</option>
                                        <option value="danang">Danang</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label for="request_subject">Relater</label>
                                    <input type="email" class="form-control" id="request_subject" required>
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
@endsection

@section('main.title') Create Request @endsection

@section('main.style')
    <style>
        div.form-group>label.required:after {
            content: " *";
            color: red;
        }
    </style>
@endsection

@section('main.script')
    <script>
        $(function () {
            $("#request_content").wysihtml5();
            $('#request_deadline').datepicker({ autoclose: true })
        });
    </script>
@endsection